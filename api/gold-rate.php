<?php
// api/gold-rate.php
// Returns current gold and silver rates in INR with caching
// Set timezone
@date_default_timezone_set('Asia/Kolkata');

header('Content-Type: application/json');

// Where to cache the last fetched rates (24h cache default)
$cacheFile = __DIR__ . '/../gold_rate_cache.json';
$cacheTtlSeconds = 6 * 60 * 60; // 6 hours

// Helper to send JSON and exit
function respond($data, $httpCode = 200) {
    http_response_code($httpCode);
    echo json_encode($data);
    exit;
}

// Serve cache if fresh
if (file_exists($cacheFile)) {
    $cache = json_decode(@file_get_contents($cacheFile), true);
    if (is_array($cache) && isset($cache['updatedAt']) && (time() - (int)$cache['updatedAt']) < $cacheTtlSeconds) {
        respond($cache);
    }
}

// Load API keys from env or config
$goldApiKey = getenv('GOLDAPI_KEY');
$metalsApiKey = getenv('METALSAPI_KEY');
if (!$goldApiKey || !$metalsApiKey) {
    $cfgPath = __DIR__ . '/../config/gold_api.php';
    if (file_exists($cfgPath)) {
        $cfg = include $cfgPath;
        if (!$goldApiKey && !empty($cfg['GOLDAPI_KEY'])) $goldApiKey = $cfg['GOLDAPI_KEY'];
        if (!$metalsApiKey && !empty($cfg['METALSAPI_KEY'])) $metalsApiKey = $cfg['METALSAPI_KEY'];
    }
}

$goldPerGram24 = null; $silverPerGram = null;

// GoldAPI (preferred)
if ($goldApiKey) {
    try {
        $ch = curl_init('https://www.goldapi.io/api/XAU/INR');
        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => [ 'x-access-token: ' . $goldApiKey, 'Content-Type: application/json' ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ]);
        $res = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($res !== false && $status >= 200 && $status < 300) {
            $json = json_decode($res, true);
            if (isset($json['price_gram_24k'])) $goldPerGram24 = (float)$json['price_gram_24k'];
        }
        // silver
        $ch = curl_init('https://www.goldapi.io/api/XAG/INR');
        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => [ 'x-access-token: ' . $goldApiKey, 'Content-Type: application/json' ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ]);
        $res = curl_exec($ch);
        if ($res !== false) {
            $json = json_decode($res, true);
            if (isset($json['price_gram'])) $silverPerGram = (float)$json['price_gram'];
        }
        curl_close($ch);
    } catch (Throwable $e) { /* ignore; fallback next */ }
}

// fallback via metals-api
if ($goldPerGram24 === null && $metalsApiKey) {
    try {
        $url = sprintf('https://metals-api.com/api/latest?access_key=%s&symbols=XAU,XAG,INR', urlencode($metalsApiKey));
        $res = @file_get_contents($url);
        if ($res !== false) {
            $json = json_decode($res, true);
            if (!empty($json['success']) && isset($json['rates']['XAU'], $json['rates']['INR'])) {
                $usdToInr = (float)$json['rates']['INR'];
                $xauUsdPerOunce = (float)$json['rates']['XAU'];
                $xagUsdPerOunce = isset($json['rates']['XAG']) ? (float)$json['rates']['XAG'] : null;
                $gPerOz = 31.1034768;
                if ($xauUsdPerOunce > 0) $goldPerGram24 = ($xauUsdPerOunce * $usdToInr) / $gPerOz;
                if ($xagUsdPerOunce && $xagUsdPerOunce > 0) $silverPerGram = ($xagUsdPerOunce * $usdToInr) / $gPerOz;
            }
        }
    } catch (Throwable $e) { /* ignore */ }
}

if ($goldPerGram24 === null) {
    if (file_exists($cacheFile)) { $cache = json_decode(@file_get_contents($cacheFile), true); if (is_array($cache)) respond($cache); }
    respond(['error' => 'Gold rate unavailable. Configure GOLDAPI_KEY or set it in config/gold_api.php'], 503);
}

$goldPerGram22 = $goldPerGram24 * (22/24);
$payload = [
    'gold_24k_per_gram' => round($goldPerGram24, 2),
    'gold_22k_per_gram' => round($goldPerGram22, 2),
    'silver_per_gram' => $silverPerGram !== null ? round($silverPerGram, 2) : null,
    'gold' => round($goldPerGram22, 2), // backward compat
    'silver' => $silverPerGram !== null ? round($silverPerGram, 2) : null,
    'currency' => 'INR',
    'updatedAt' => time(),
    'updatedAt_ist' => date('Y-m-d H:i:s'),
];

@file_put_contents($cacheFile, json_encode($payload));
respond($payload);

