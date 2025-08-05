<?php
// Include the header
include_once '../header.php';
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emirates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product by code or id
$code = isset($_GET['code']) ? $_GET['code'] : '';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$row = null;
$source = '';

// Only fetch from gold_necklaces table
if ($code) {
    $sql = "SELECT * FROM gold_necklaces WHERE code = '" . $conn->real_escape_string($code) . "'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $source = 'gold_necklaces';
    }
} elseif ($id) {
    $sql = "SELECT * FROM gold_necklaces WHERE id = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $source = 'gold_necklaces';
    }
}

if ($row) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($row['name']); ?> - Product Details</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: sans-serif; background: #f6f0fa; margin: 0; padding: 0; }
        .product-view-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px 0;
            background: #f6f0fa;
            gap: 40px;
        }
        .product-image {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-basis: 500px;
            flex-shrink: 0;
        }
        .product-image img {
            max-width: 100%;
            max-height: 500px;
            border-radius: 10px;
            background: #fff;
            display: block;
        }
        .product-details {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
            padding: 40px 50px;
            flex-basis: 500px;
            max-width: 600px;
            width: 100%;
        }
        .product-details h1 {
            font-size: 2.5rem;
            margin: 0 0 20px 0;
            font-weight: 500;
            letter-spacing: 1px;
        }
        .product-details .code-weight {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #222;
        }
        .product-details .weight {
            display: block;
            margin-top: 5px;
            font-size: 1.1rem;
        }
        .product-details .social-icons {
            margin: 25px 0 30px 0;
        }
        .product-details .social-icons a {
            display: inline-block;
            margin-right: 18px;
            font-size: 2rem;
            color: #e74c3c;
            transition: color 0.2s;
        }
        .product-details .social-icons a:last-child {
            margin-right: 0;
        }
        .product-details .social-icons a.twitter { color: #e74c3c; }
        .product-details .social-icons a.whatsapp { color: #27d146; }
        .product-details .enquiry-btns {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .product-details .enquiry-btns a {
            flex: 1;
            padding: 18px 0;
            text-align: center;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            transition: background 0.2s;
        }
        .product-details .enquiry-btns .send {
            background: #eb4b6c;
        }
        .product-details .enquiry-btns .send:hover {
            background: #eb4b6c;
        }
        .product-details .enquiry-btns .whatsapp {
            background: #4c8961;
        }
        .product-details .enquiry-btns .whatsapp:hover {
            background: #4c8961;
        }
        @media (max-width: 900px) {
            .product-view-container { flex-direction: column; align-items: center; gap: 0; }
            .product-image { margin-right: 0; margin-bottom: 30px; }
            .product-details { padding: 30px 15px; max-width: 100%; }
        }
    </style>

     <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <link rel='dns-prefetch' href='//hb.wpmucdn.com' />
    <link href='//hb.wpmucdn.com' rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Muliya Gold &amp; Diamonds &raquo; Feed" href="https://muliya.in/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Muliya Gold &amp; Diamonds &raquo; Comments Feed" href="https://muliya.in/comments/feed/" />
    <link rel='stylesheet' id='elementor-post-7-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-7.css?ver=1752631057' media='all' />
    <link rel='stylesheet' id='elementor-post-2374-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-2374.css?ver=1752631059' media='all' />
    <link rel='stylesheet' id='elementor-post-11154-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-11154.css?ver=1752631062' media='all' />
    <link rel='stylesheet' id='elementor-post-9707-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-9707.css?ver=1752631062' media='all' />
    <link rel='stylesheet' id='elementor-post-11715-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-11715.css?ver=1752631062' media='all' />
    <link rel='stylesheet' id='elementor-post-11346-css' href='https://muliya.in/wp-content/uploads/elementor/css/post-11346.css?ver=1752631062' media='all' />
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1200px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='wpa-css-css' href='https://hb.wpmucdn.com/muliya.in/9b8f7d50-67bf-4e33-940c-a991be0b1d2c.css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='https://hb.wpmucdn.com/muliya.in/5f273f89-92d3-4b4a-b886-df0f9823fe50.css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://hb.wpmucdn.com/muliya.in/9632a2d0-bbad-414f-8db2-9c3c5baccd41.css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='https://hb.wpmucdn.com/muliya.in/7be64f24-1b86-425f-b7bd-04f9e3bbfc31.css' media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='brands-styles-css' href='https://hb.wpmucdn.com/muliya.in/c1086ded-e8ea-429f-8d8b-64522f61b059.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='https://hb.wpmucdn.com/muliya.in/5b51f377-9c55-496c-8877-662a0d962ba4.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://hb.wpmucdn.com/muliya.in/e8ce6cba-ed9a-49f7-be37-146a188c261c.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css' href='https://hb.wpmucdn.com/muliya.in/8887aa3d-1f07-4313-b8e7-a58d1007ae74.css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='https://hb.wpmucdn.com/muliya.in/934d88dd-2b56-40aa-9e2c-532211ed3351.css' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='https://hb.wpmucdn.com/muliya.in/ddb0d7aa-5df6-4531-aa15-9dba9d0bd586.css' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='https://hb.wpmucdn.com/muliya.in/2be5341c-3d09-4d59-828c-d7e85b5c4164.css' media='all' />
    <link rel='stylesheet' id='widget-search-css' href='https://hb.wpmucdn.com/muliya.in/be059e11-5ed7-4a3f-a18e-200cbe5b78d7.css' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='https://hb.wpmucdn.com/muliya.in/f57e4acd-c03b-45bc-9f65-e32aa1d47bbd.css' media='all' />
    <link rel='stylesheet' id='widget-mega-menu-css' href='https://hb.wpmucdn.com/muliya.in/066dfaa8-884e-4457-9472-59dfdf76b340.css' media='all' />
    <link rel='stylesheet' id='widget-lottie-css' href='https://hb.wpmucdn.com/muliya.in/b19c840f-2656-452e-90af-8b99cfa3dbb8.css' media='all' />
    <link rel='stylesheet' id='e-popup-css' href='https://hb.wpmucdn.com/muliya.in/dbd7e7fc-8035-4ceb-9578-4d8891b3ec63.css' media='all' />
    <link rel='stylesheet' id='widget-form-css' href='https://hb.wpmucdn.com/muliya.in/0e0a3566-a366-4c45-b3bd-0dfea11d8847.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css' href='https://hb.wpmucdn.com/muliya.in/a832d0d4-95a5-4af5-8df0-c1ec7573e5f6.css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='https://hb.wpmucdn.com/muliya.in/8bc8cd6c-47cf-4ec2-a822-6c34718cc351.css' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='https://hb.wpmucdn.com/muliya.in/44e77e05-d42d-4c2a-bf4d-77c5fdc86d86.css' media='all' />
    <link rel='stylesheet' id='widget-nested-carousel-css' href='https://hb.wpmucdn.com/muliya.in/852a7656-8d1d-4d19-a41b-66b1dd34ebde.css' media='all' />
    <link rel='stylesheet' id='widget-video-css' href='https://hb.wpmucdn.com/muliya.in/466c04a6-462e-4d2f-aa0d-e4598e4b5ae5.css' media='all' />
    <link rel='stylesheet' id='widget-loop-common-css' href='https://hb.wpmucdn.com/muliya.in/e8883c83-6090-42cd-a700-ad796aed5c3b.css' media='all' />
    <link rel='stylesheet' id='widget-loop-grid-css' href='https://hb.wpmucdn.com/muliya.in/586593b5-f255-4365-b052-646f3b4bf9f0.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-child-style-css' href='https://hb.wpmucdn.com/muliya.in/7017ab96-dd5b-4026-b991-69eb95c1716c.css' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-roboto-css' href='https://hb.wpmucdn.com/muliya.in/c8ff3db7-e856-4c88-92cb-c1cd440167c1.css' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='https://hb.wpmucdn.com/muliya.in/2b92307b-6781-4e83-ac31-edecea1ea9c2.css' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-inter-css' href='https://hb.wpmucdn.com/muliya.in/c73dbc9f-6b60-47b7-b22d-a36d6d7480f6.css' media='all' />
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/4059c599-4421-4590-b5ee-8f558a649589.js" id="jquery-core-js"></script>
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/41a5385a-8f82-422f-b401-efba5729ce64.js" id="jquery-migrate-js"></script>
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/196a01ac-5b02-49ba-ac0d-60d942187c52.js" id="jquery-blockui-js"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/muliya.in\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/c3015170-dee7-4f3a-bdf4-74b1e9b0a9dc.js" id="wc-add-to-cart-js"></script>
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/6bc6e71e-dba4-4653-ac53-5eb218380a77.js" id="js-cookie-js"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_password_show": "Show password",
            "i18n_password_hide": "Hide password"
        };
    </script>
    <script type="wphb-delay-type" src="https://hb.wpmucdn.com/muliya.in/73491588-504d-4e05-bcdc-a38f31192781.js" id="woocommerce-js"></script>


    <!-- End Google tag (gtag.js) snippet added by Site Kit -->
    <link rel="https://api.w.org/" href="https://muliya.in/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://muliya.in/wp-json/wp/v2/pages/2374" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://muliya.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmuliya.in%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://muliya.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmuliya.in%2F&#038;format=xml" />
   
    
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <link rel="icon" href="https://muliya.in/wp-content/uploads/2025/04/muliya-favicon-100x100.png" sizes="32x32" />
    <link rel="icon" href="https://muliya.in/wp-content/uploads/2025/04/muliya-favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://muliya.in/wp-content/uploads/2025/04/muliya-favicon.png" />
    <meta name="msapplication-TileImage" content="https://muliya.in/wp-content/uploads/2025/04/muliya-favicon.png" />
    <style id="wp-custom-css">
        /* Header */

        .mj-mm-item {
            transition: .2s linear;
        }

        .mj-mm-item:hover {
            opacity: 0.5;
        }

        .sticky {
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body data-rsssl=1 class="home wp-singular page-template-default page page-id-2374 wp-embed-responsive wp-theme-hello-elementor wp-child-theme-muliya-jewels theme-hello-elementor woocommerce-no-js hello-elementor-default elementor-default elementor-kit-7 elementor-page elementor-page-2374">


    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="product-view-container">
        <div class="product-image">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
        </div>
        <div class="product-details">
            <h1><?php echo htmlspecialchars($row['name']); ?> : <?php echo htmlspecialchars($row['code']); ?></h1>
            <div class="code-weight">
                Code : <?php echo htmlspecialchars($row['code']); ?> Weight :<br>
                <span class="weight"><?php echo htmlspecialchars($row['weight']); ?></span>
            </div>
            <div class="social-icons">
                <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Twitter" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" title="WhatsApp" class="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="enquiry-btns">
                <a href="#" class="send" onclick="openEnquiryPopup()">Send Enquiry</a>
                <a href="#" class="whatsapp">Whatsapp Enquiry</a>
            </div>
            <style>
                .box-btn {
                    margin-top: 30px;
                    display: inline-block;
                    background: #000;
                    color: #fff;
                    padding: 18px 0;
                    border-radius: 12px;
                    font-size: 1.2rem;
                    font-weight: 600;
                    text-align: center;
                    width: 100%;
                    text-decoration: none;
                    transition: background 0.2s;
                }
                .box-btn:hover {
                    background: #444;
                }
            </style>
            <a class="back-link box-btn" href="gold_necklaces.php">&larr; Back to Products</a>
        </div>
    </div>

    <!-- Enquiry Popup Modal -->
    <div id="enquiryModal" class="enquiry-modal" style="display: none;">
        <div class="modal-overlay" onclick="closeEnquiryPopup()"></div>
        <div class="enquiry-popup">
            <!-- Close Button -->
            <button type="button" class="close-btn" onclick="closeEnquiryPopup()">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Header -->
            <div class="popup-header">
                <div class="logo-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h2>Product Enquiry</h2>
                <p>Emirates Gold International</p>
                <div class="product-info">
                    <small>Enquiry for: <?php echo htmlspecialchars($row['name'] ?? 'Gold Necklaces'); ?> - <?php echo htmlspecialchars($row['code'] ?? ''); ?></small>
                </div>
            </div>
            
            <!-- Body -->
            <div class="popup-body">
                <div id="enquiryMessage" class="alert" style="display: none;"></div>
                
                <form id="enquiryForm" onsubmit="submitEnquiry(event)">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($row['name'] ?? ''); ?>">
                    <input type="hidden" name="product_code" value="<?php echo htmlspecialchars($row['code'] ?? ''); ?>">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           placeholder="Enter your full name" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="Enter your email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" 
                                           placeholder="Enter your phone number" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="enquiry_type" class="form-label">Enquiry Type</label>
                                <select class="form-select" id="enquiry_type" name="enquiry_type">
                                    <option value="product_enquiry" selected>Product Enquiry</option>
                                    <option value="price_inquiry">Price Inquiry</option>
                                    <option value="custom_design">Custom Design</option>
                                    <option value="availability">Availability</option>
                                    <option value="general">General Question</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message <span class="required">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="4" 
                                  placeholder="Please describe your enquiry about this product..." required></textarea>
                    </div>
                    
                    <button type="submit" class="enquiry-btn">
                        <i class="fas fa-paper-plane me-2"></i>
                        Send Enquiry
                    </button>
                </form>
                
                <div class="contact-info">
                    <p class="mb-2">
                        <i class="fas fa-phone-alt"></i>
                        Call us directly: <a href="tel:+918234567890">+91 82345 67890</a>
                    </p>
                    <p class="mb-0">
                        We typically respond within 24 hours
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --gold-primary: #d4af37;
            --gold-secondary: #b8941f;
            --gold-light: #f4e99b;
            --brown-dark: #2c1810;
            --brown-light: #4a2c1a;
            --cream: #f8f5f0;
            --text-light: #c4b896;
        }

        .enquiry-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
        }

        .enquiry-popup {
            background: var(--cream);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            max-width: 600px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            z-index: 10000;
            animation: slideInUp 0.4s ease-out;
        }

        .popup-header {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            color: var(--brown-dark);
            padding: 25px 30px;
            text-align: center;
            position: relative;
            border-radius: 20px 20px 0 0;
        }

        .popup-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .popup-header p {
            margin: 5px 0 0 0;
            font-size: 1rem;
            opacity: 0.9;
        }

        .product-info {
            margin-top: 10px;
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
        }

        .product-info small {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .logo-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--brown-dark);
        }

        .popup-body {
            padding: 30px;
            background: var(--cream);
            border-radius: 0 0 20px 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: var(--brown-dark);
            margin-bottom: 6px;
            font-size: 0.9rem;
        }

        .form-control, .form-select {
            border: 2px solid #e0d5c7;
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #fff;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.15);
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        .input-group-text {
            background: var(--gold-light);
            border: 2px solid #e0d5c7;
            border-right: none;
            color: var(--brown-dark);
            border-radius: 8px 0 0 8px;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 8px 8px 0;
        }

        .input-group .form-control:focus {
            border-left: none;
        }

        .enquiry-btn {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            border: none;
            color: var(--brown-dark);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
        }

        .enquiry-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
            color: var(--brown-dark);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: var(--brown-dark);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
            border: none;
            font-weight: 500;
            padding: 12px 15px;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%);
            color: #721c24;
        }

        .required {
            color: var(--gold-primary);
        }

        .contact-info {
            margin-top: 25px;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e0d5c7;
        }

        .contact-info p {
            margin: 5px 0;
            color: var(--brown-dark);
            font-size: 0.9rem;
        }

        .contact-info a {
            color: var(--gold-primary);
            text-decoration: none;
            font-weight: 500;
        }

        .contact-info i {
            color: var(--gold-primary);
            margin-right: 5px;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .enquiry-popup {
                margin: 10px;
                border-radius: 15px;
                max-height: 95vh;
            }
            
            .popup-header {
                padding: 20px;
                border-radius: 15px 15px 0 0;
            }
            
            .popup-header h2 {
                font-size: 1.6rem;
            }
            
            .popup-body {
                padding: 20px;
                border-radius: 0 0 15px 15px;
            }
            
            .logo-icon {
                font-size: 2rem;
            }
        }
    </style>

    <script>
        function openEnquiryPopup() {
            document.getElementById('enquiryModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeEnquiryPopup() {
            document.getElementById('enquiryModal').style.display = 'none';
            document.body.style.overflow = 'auto';
            // Reset form
            document.getElementById('enquiryForm').reset();
            document.getElementById('enquiryMessage').style.display = 'none';
        }

        function submitEnquiry(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const messageDiv = document.getElementById('enquiryMessage');
            
            // Show loading state
            const submitBtn = event.target.querySelector('.enquiry-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
            submitBtn.disabled = true;
            
            // Send AJAX request
            fetch('../Enquiry.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Check if the response contains success message
                if (data.includes('Thank you for your enquiry')) {
                    messageDiv.className = 'alert alert-success';
                    messageDiv.innerHTML = '<i class="fas fa-check-circle me-2"></i>Thank you for your enquiry! We will get back to you soon.';
                    messageDiv.style.display = 'block';
                    
                    // Reset form
                    event.target.reset();
                    
                    // Auto close after 3 seconds
                    setTimeout(() => {
                        closeEnquiryPopup();
                    }, 3000);
                } else {
                    messageDiv.className = 'alert alert-danger';
                    messageDiv.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>There was an error sending your enquiry. Please try again.';
                    messageDiv.style.display = 'block';
                }
            })
            .catch(error => {
                messageDiv.className = 'alert alert-danger';
                messageDiv.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>There was an error sending your enquiry. Please try again.';
                messageDiv.style.display = 'block';
            })
            .finally(() => {
                // Restore button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        }

        // Phone number formatting
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length > 10) {
                        value = value.substring(0, 10);
                    }
                    e.target.value = value;
                });
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEnquiryPopup();
            }
        });
    </script>

      <?php include_once '../footer.php'; ?>
</body>
</html>
<?php
} else {
    echo "<p>Product not found.</p>";
}
$conn->close();
?>
