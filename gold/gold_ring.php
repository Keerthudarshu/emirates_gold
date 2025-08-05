<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emirates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bracelets</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 40px auto;
        }
        .product-card {
            background: #fff;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .product-card h3 {
            margin: 10px 0;
            color: #333;
            font-size: 18px;
        }
        .product-card a.button {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .product-card a.button:hover {
            background-color: #444;
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


    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div data-elementor-type="header" data-elementor-id="11154" class="elementor elementor-11154 elementor-location-header" data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-b149b10 e-con-full mj-header e-flex e-con e-parent" data-id="b149b10" data-element_type="container">
            <div class="elementor-element elementor-element-533ad43 mj-logo-header e-flex e-con-boxed e-con e-child" data-id="533ad43" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-ed409db e-con-full elementor-hidden-mobile elementor-hidden-tablet e-flex e-con e-child" data-id="ed409db" data-element_type="container">
                        <div class="elementor-element elementor-element-b97c4e7 elementor-widget elementor-widget-image" data-id="b97c4e7" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <a href="../index.php">
                            <img width="152" height="69" src="../assets/emirats logo.jpg" class="attachment-large size-large wp-image-11160" alt="Logo" />								
                        </a>
                            </div>
                        </div>
                    </div>
                    <!-- scheme section start -->
                    <div class="elementor-element elementor-element-efdac0b e-con-full e-flex e-con e-child" data-id="efdac0b" data-element_type="container">
                        <div class="elementor-element elementor-element-f7430de e-con-full e-flex e-con e-child" data-id="f7430de" data-element_type="container" >
                            <div class="elementor-element elementor-element-a05eb7c elementor-icon-list--layout-inline elementor-hidden-mobile elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a05eb7c" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <a href="#">

                                                <span class="elementor-icon-list-icon">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="37" height="27" viewBox="0 0 37 27" fill="none"><path d="M24.4694 20.4635L32.6134 15.2543C33.096 14.955 35.0024 14.3562 35.8711 15.7932C36.7398 17.2302 36.052 18.308 34.9662 19.0265L24.1074 26.2116H11.0769L7.09534 23.5172V12.021H14.8775L20.6688 17.9488C21.2721 18.4876 21.7547 19.745 20.3068 20.8228C19.4019 21.3617 18.3161 21.5413 17.2302 20.4635L12.7057 16.1525H9.81003" stroke="#E92548" stroke-width="1.18255" stroke-linecap="round"></path><mask id="path-2-inside-1_2421_2849" fill="white"><rect y="10.4443" width="7.88366" height="16.5557" rx="0.788366"></rect></mask><rect y="10.4443" width="7.88366" height="16.5557" rx="0.788366" fill="#FFE8EC" stroke="#E92548" stroke-width="2.3651" mask="url(#path-2-inside-1_2421_2849)"></rect><circle cx="24.8346" cy="7.58725" r="6.99598" fill="#FFE8EC" stroke="#E92548" stroke-width="1.18255"></circle><path d="M22.7845 4.4259H27.5364V4.43577C27.2565 4.86717 27.0984 5.09768 27.0622 5.12732H25.7927C25.9673 5.33149 26.0858 5.58012 26.1484 5.8732H27.5018C27.5183 5.8765 27.5265 5.88308 27.5265 5.89296C27.2236 6.34741 27.0688 6.57463 27.0622 6.57463H26.183C26.1632 6.80844 26.0512 7.09 25.8471 7.4193C25.577 7.75191 25.3185 7.9676 25.0715 8.06639C24.6105 8.28703 24.1692 8.39735 23.7477 8.39735V8.40723C23.7477 8.44016 24.7011 9.57133 26.6078 11.8007H25.3482C23.4909 9.63719 22.5622 8.55048 22.5622 8.5406V7.88363L22.5721 7.85893C22.7368 7.88198 22.9294 7.89351 23.15 7.89351C24.1906 7.89351 24.8377 7.55597 25.0913 6.88089C25.1308 6.78209 25.1506 6.68001 25.1506 6.57463H22.3251C22.3119 6.57463 22.3054 6.56804 22.3054 6.55487C22.6182 6.10043 22.7779 5.8732 22.7845 5.8732H25.0271V5.86332C24.8987 5.60317 24.65 5.40065 24.2812 5.25575C24.0178 5.17013 23.7807 5.12732 23.5699 5.12732H22.3152V5.10262C22.6182 4.65147 22.7746 4.4259 22.7845 4.4259Z" fill="#E92548"></path></svg>			 -->
                                   <img src="../assets/favicon/euro-money.png" alt="">
                        </span>
                                        <span class="elementor-icon-list-text" style="color: #000000;"></span><br><span style="color: #000000;">Jewellery Buying Plan</span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="elementor-element elementor-element-07f9549 elementor-icon-list--layout-inline mj-gold-rate-btn elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="07f9549" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjExNzE1IiwidG9nZ2xlIjpmYWxzZX0%3D">

                                                <span class="elementor-icon-list-icon">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" viewBox="0 0 44 26" fill="none"><path d="M17.5888 14.2537H4.14304C3.84284 14.2537 3.58067 14.4568 3.50565 14.7475L1.21232 23.6341C1.1048 24.0508 1.4194 24.4569 1.84971 24.4569H19.5955C20.0175 24.4569 20.3306 24.0653 20.2376 23.6536L18.2309 14.767C18.1632 14.4669 17.8965 14.2537 17.5888 14.2537Z" fill="#FFE8EC" stroke="#E92548" stroke-width="1.23644"></path><path d="M29.0003 1H15.5545C15.2468 1 14.9802 1.21315 14.9124 1.51328L12.9057 10.3999C12.8128 10.8116 13.1258 11.2032 13.5479 11.2032H31.2936C31.7239 11.2032 32.0385 10.7971 31.931 10.3804L29.6377 1.49378C29.5627 1.20311 29.3005 1 29.0003 1Z" fill="#FFE8EC" stroke="#E92548" stroke-width="1.23644"></path><path d="M39.7054 14.2537H26.2596C25.9519 14.2537 25.6853 14.4669 25.6175 14.767L23.6108 23.6536C23.5179 24.0653 23.8309 24.4569 24.2529 24.4569H41.9987C42.429 24.4569 42.7436 24.0508 42.6361 23.6341L40.3428 14.7475C40.2678 14.4568 40.0056 14.2537 39.7054 14.2537Z" fill="#FFE8EC" stroke="#E92548" stroke-width="1.23644"></path></svg>						 -->
                                        <img src="../assets/favicon/gold-bar.png" alt="">
                                    </span>
                                        <span class="elementor-icon-list-text"><span style="color: #272727">Today's
                                        </span><br>Gold Rate</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--section end----  -->
                        <!-- next section ---- -->

                        <div class="elementor-element elementor-element-d57f097 elementor-widget-mobile__width-initial elementor-widget elementor-widget-search" data-id="d57f097" data-element_type="widget" data-settings="{&quot;submit_trigger&quot;:&quot;both&quot;,&quot;pagination_type_options&quot;:&quot;none&quot;}"
                            data-widget_type="search.default">
                            <div class="elementor-widget-container">
                                <search class="e-search " role="search">
                                    <form class="e-search-form" action="#" method="get">


                                        <label class="e-search-label" for="search-d57f097">
                    <span class="elementor-screen-only">
                        Search					</span>
                                    </label>

                                        <div class="e-search-input-wrapper">
                                            <input id="search-d57f097" placeholder="Search for gold jewellery, diamond jewellery and more" class="e-search-input" type="search" name="s" value="" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="results-d57f097"
                                                aria-haspopup="listbox">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-times" viewBox="0 0 352 512" xmlns="http://www.w3.org/2000/svg"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>                                            <output id="results-d57f097" class="e-search-results-container hide-loader" aria-live="polite" aria-atomic="true" aria-label="Results for search" tabindex="0">
                        <div class="e-search-results"></div>
                                            </output>
                                        </div>


                                        <button class="e-search-submit  " type="submit" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none"><path d="M13.3714 0C16.9178 0 20.3188 1.40877 22.8265 3.9164C25.3341 6.42403 26.7429 9.82511 26.7429 13.3714C26.7429 16.6834 25.5291 19.728 23.5337 22.0731L24.0891 22.6286H25.7143L36 32.9143L32.9143 36L22.6286 25.7143V24.0891L22.0731 23.5337C19.6465 25.6042 16.5613 26.7419 13.3714 26.7429C9.82511 26.7429 6.42403 25.3341 3.9164 22.8265C1.40877 20.3188 0 16.9178 0 13.3714C0 9.82511 1.40877 6.42403 3.9164 3.9164C6.42403 1.40877 9.82511 0 13.3714 0ZM13.3714 4.11429C8.22857 4.11429 4.11429 8.22857 4.11429 13.3714C4.11429 18.5143 8.22857 22.6286 13.3714 22.6286C18.5143 22.6286 22.6286 18.5143 22.6286 13.3714C22.6286 8.22857 18.5143 4.11429 13.3714 4.11429Z" fill="white"></path></svg>
                                    </button>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var btn = document.getElementById('e-n-menu-dropdown-icon-8208');
  var content = document.getElementById('e-n-menu-content-8208');
  if (btn && content) {
    content.style.position = 'fixed';
    content.style.display = 'none';
    content.style.zIndex = 1000;
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);
      if (!expanded) {
        var rect = btn.getBoundingClientRect();
        content.style.left = '50%';
        content.style.top = (rect.bottom + 8) + 'px';
        content.style.transform = 'translate(-50%, 0)';
        content.style.display = 'block';
        document.body.style.overflow = 'hidden';
      } else {
        content.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
    document.addEventListener('mousedown', function(e) {
      if (!content.contains(e.target) && !btn.contains(e.target)) {
        if (content.style.display === 'block') {
          content.style.display = 'none';
          btn.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        }
      }
    });
  }
});
</script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('e-n-menu-dropdown-icon-8204');
            var content = document.getElementById('e-n-menu-content-8204');
            if (btn && content) {
                // Set content to fixed and hidden initially
                content.style.position = 'fixed';
                content.style.display = 'none';
                content.style.zIndex = 1000;
                var openedIcon = btn.querySelector('.e-n-menu-dropdown-icon-opened');
                var closedIcon = btn.querySelector('.e-n-menu-dropdown-icon-closed');
                // Hide opened icon by default
                if (openedIcon) openedIcon.style.display = 'none';
                if (closedIcon) closedIcon.style.display = '';
                btn.addEventListener('click', function() {
                    var expanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', !expanded);
                    if (!expanded) {
                        var rect = btn.getBoundingClientRect();
                        // Show and center the dropdown fixed in the viewport
                        content.style.display = 'block';
                        content.style.visibility = 'hidden';
                        // Center horizontally, position below the menu bar (rect.bottom)
                        content.style.left = '50%';
                        content.style.top = (rect.bottom + 8) + 'px'; // 8px gap below menu
                        content.style.transform = 'translate(-50%, 0)';
                        content.style.minWidth = rect.width + 'px';
                        content.style.visibility = '';
                        if (openedIcon) openedIcon.style.display = '';
                        if (closedIcon) closedIcon.style.display = 'none';
                    } else {
                        content.style.display = 'none';
                        if (openedIcon) openedIcon.style.display = 'none';
                        if (closedIcon) closedIcon.style.display = '';
                    }
                });
            }
        });
        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('e-n-menu-dropdown-icon-8203');
            var content = document.getElementById('e-n-menu-content-8203');
            if (btn && content) {
                // Set content to fixed and hidden initially
                content.style.position = 'fixed';
                content.style.display = 'none';
                content.style.zIndex = 1000;
                var openedIcon = btn.querySelector('.e-n-menu-dropdown-icon-opened');
                var closedIcon = btn.querySelector('.e-n-menu-dropdown-icon-closed');
                // Hide opened icon by default
                if (openedIcon) openedIcon.style.display = 'none';
                if (closedIcon) closedIcon.style.display = '';
                btn.addEventListener('click', function() {
                    var expanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', !expanded);
                    if (!expanded) {
                        // Show and position below the button
                        var rect = btn.getBoundingClientRect();
                        // Show and center the dropdown fixed in the viewport
                        content.style.display = 'block';
                        content.style.visibility = 'hidden';
                        // Center horizontally, position below the menu bar (rect.bottom)
                        content.style.left = '50%';
                        content.style.top = (rect.bottom + 8) + 'px'; // 8px gap below menu
                        content.style.transform = 'translate(-50%, 0)';
                        content.style.minWidth = rect.width + 'px';
                        content.style.visibility = '';
                        if (openedIcon) openedIcon.style.display = '';
                        if (closedIcon) closedIcon.style.display = 'none';
                    } else {
                        content.style.display = 'none';
                        if (openedIcon) openedIcon.style.display = 'none';
                        if (closedIcon) closedIcon.style.display = '';
                    }
                });
            }
        });
        </script>
                                        <input type="hidden" name="e_search_props" value="d57f097-11154">
                                    </form>
                                </search>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-13a8ae2 e-con-full e-transform e-flex e-con e-child" data-id="13a8ae2" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;fixed&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                        <div class="elementor-element elementor-element-7ce9365 elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor" data-id="7ce9365" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="#">Feedback</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f995112 mj-menu-header e-flex e-con-boxed e-con e-child" data-id="f995112" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-54dae0a elementor-hidden-desktop elementor-widget-tablet__width-initial elementor-widget elementor-widget-image" data-id="54dae0a" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <a href="/">
                            <img width="152" height="69" src="../assets/emirats logo.jpg" class="attachment-large size-large wp-image-11160" alt="Logo" />								</a>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-07d25c0 elementor-widget-tablet__width-initial e-full_width e-n-menu-layout-horizontal e-n-menu-tablet elementor-widget elementor-widget-n-menu" data-id="07d25c0" data-element_type="widget" data-settings="{&quot;menu_items&quot;:[{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Gold.svg\&quot; style=\&quot;margin-right:6px; Width: 24px;\&quot;&gt;Gold&quot;,&quot;_id&quot;:&quot;38016ae&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;4bb6dbe\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%222875%22%7D\&quot;]&quot;},&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/muliya.in\/gold\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Silver.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;Silver&quot;,&quot;_id&quot;:&quot;fd45e80&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;5277658\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%229603%22%7D\&quot;]&quot;},&quot;item_dropdown_content&quot;:&quot;&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/muliya.in\/silver\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Diamond.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;Diamond&quot;,&quot;_id&quot;:&quot;53655cc&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;e6777ed\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%229552%22%7D\&quot;]&quot;},&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/muliya.in\/diamond\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Collections.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;Collections&quot;,&quot;__dynamic__&quot;:[],&quot;_id&quot;:&quot;641ac90&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Showrooms.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;Showrooms&quot;,&quot;__dynamic__&quot;:{&quot;item_link&quot;:&quot;[elementor-tag id=\&quot;7e5f470\&quot; name=\&quot;internal-url\&quot; settings=\&quot;%7B%22type%22%3A%22post%22%2C%22post_id%22%3A%229736%22%7D\&quot;]&quot;},&quot;_id&quot;:&quot;4588b17&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/muliya.in\/store-locator\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/gallery.svg\&quot; style=\&quot;margin-right:6px; Width: 20px;\&quot;&gt;Gallery&quot;,&quot;__dynamic__&quot;:[],&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/gallery.muliya.in\/&quot;,&quot;is_external&quot;:&quot;on&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ac2c36&quot;,&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/Virtual-Tour.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;Virtual Tour&quot;,&quot;__dynamic__&quot;:[],&quot;_id&quot;:&quot;de23cf7&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;https:\/\/muliya.in\/virtualtour\/bangalore&quot;,&quot;is_external&quot;:&quot;on&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_dropdown_content&quot;:&quot;no&quot;,&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;},{&quot;item_title&quot;:&quot;&lt;img src=\&quot;\/wp-content\/uploads\/2025\/04\/More.svg\&quot; style=\&quot;margin-right:6px; Width: 18px;\&quot;&gt;More&quot;,&quot;__dynamic__&quot;:[],&quot;_id&quot;:&quot;1da3b56&quot;,&quot;item_dropdown_content&quot;:&quot;yes&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;item_icon_active&quot;:null,&quot;element_id&quot;:&quot;&quot;}],&quot;item_position_horizontal&quot;:&quot;stretch&quot;,&quot;item_position_horizontal_tablet&quot;:&quot;center&quot;,&quot;menu_item_title_distance_from_content&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;content_width&quot;:&quot;full_width&quot;,&quot;item_layout&quot;:&quot;horizontal&quot;,&quot;open_on&quot;:&quot;hover&quot;,&quot;horizontal_scroll&quot;:&quot;disable&quot;,&quot;breakpoint_selector&quot;:&quot;tablet&quot;,&quot;menu_item_title_distance_from_content_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_item_title_distance_from_content_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="mega-menu.default">
                        <div class="elementor-widget-container">
                            <nav class="e-n-menu" data-widget-number="820" aria-label="Menu">
                                <button class="e-n-menu-toggle" id="menu-toggle-820" aria-haspopup="true" aria-expanded="false" aria-controls="menubar-820" aria-label="Menu Toggle">
            <span class="e-n-menu-toggle-icon e-open">
                <svg class="e-font-icon-svg e-eicon-menu-bar" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg>			</span>
            <span class="e-n-menu-toggle-icon e-close">
                <svg class="e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>			</span>
        </button>
                                <div class="e-n-menu-wrapper" id="menubar-820" aria-labelledby="menu-toggle-820">
                                    <ul class="e-n-menu-heading">
                                        <li class="e-n-menu-item">
                                            <div id="e-n-menu-title-8201" class="e-n-menu-title">
                                                <a class="e-n-menu-title-container e-focus e-link" href="#">												
                                                    <span class="e-n-menu-title-text">
                                                        <img src="../assets/favicon/gold.png" style="margin-right:6px; Width: 24px;">Gold						
                                                    </span>
                                                        
                                                </a> 
                                               
                                                <button id="e-n-menu-dropdown-icon-8201" class="e-n-menu-dropdown-icon e-focus" data-tab-index="1" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-8201">
                                                        <span class="e-n-menu-dropdown-icon-opened">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path></svg>								
                                                            <span class="elementor-screen-only">Close <img src="../assets/favicon/gold.png" style="margin-right:6px; Width: 24px;">Gold</span>
                                                        </span>
                                                        <span class="e-n-menu-dropdown-icon-closed">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path></svg>							
                                                            <span class="elementor-screen-only">Open <img src="../assets/favicon/gold.png" style="margin-right:6px; margin-top: 20px; Width: 24px;">Gold</span>
                                                        </span>
                                                    </button>
                                                        <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                        var btn = document.getElementById('e-n-menu-dropdown-icon-8201');
                                                        var content = document.getElementById('e-n-menu-content-8201');
                                                        if (btn && content) {
                                                            // Set content to absolute and hidden initially
                                                            content.style.position = 'absolute';
                                                            content.style.display = 'none';
                                                            content.style.zIndex = 1000;
                                                            btn.addEventListener('click', function() {
                                                            var expanded = btn.getAttribute('aria-expanded') === 'true';
                                                            btn.setAttribute('aria-expanded', !expanded);
                                                            if (!expanded) {
                                                                // Show and position below the button
                                                                var rect = btn.getBoundingClientRect();
                                                                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                                                                var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
                                                                content.style.top = (rect.bottom + scrollTop) + '-8px';
                                                                // Center the dropdown below the button
                                                                var contentWidth = content.offsetWidth || rect.width;
                                                                var left = (rect.left + scrollLeft) + (rect.width / 2) - (contentWidth / 2);
                                                                content.style.left = left + 'px';
                                                                content.style.minWidth = rect.width + 'px';
                                                                content.style.display = 'block';
                                                            } else {
                                                                content.style.display = 'none';
                                                            }
                                                            });
                                                        }
                                                        });
                                                        </script>
                                            </div>
                                            <div class="e-n-menu-content">
                                                <div id="e-n-menu-content-8201" data-tab-index="1" aria-labelledby="e-n-menu-dropdown-icon-8201" class="elementor-element elementor-element-419d9a4 e-flex e-con-boxed e-con e-child" data-id="419d9a4" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-3be9c34 e-con-full e-flex e-con e-child" data-id="3be9c34" data-element_type="container">
                                                            <div class="elementor-element elementor-element-60d05ab e-grid e-con-full e-con e-child" data-id="60d05ab" data-element_type="container">
                                                                <!-- Removed all muliya.in links from Gold mega menu -->
                                                                 <a class="elementor-element elementor-element-bd51c0f e-con-full mj-mm-item e-flex e-con e-child" data-id="bd51c0f" data-element_type="container" href="../gold/gold_ring.php"> 
                                                                    <div class="elementor-element elementor-element-0a8fc2c e-con-full e-flex e-con e-child" data-id="0a8fc2c" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-ce5ba76 elementor-widget-mobile__width-initial elementor-widget elementor-widget-image" data-id="ce5ba76" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                            <img width="90" height="89" src="../assets/gold_menu/Rings-Menu.png" class="attachment-full size-full wp-image-11218" alt="Rings" /> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ec98ce4 elementor-widget elementor-widget-heading" data-id="ec98ce4" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Rings</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-752b421 e-con-full mj-mm-item e-flex e-con e-child" data-id="752b421" data-element_type="container" href="../gold/gold_earring.php">
                                                                    <div class="elementor-element elementor-element-2dae3f1 e-con-full e-flex e-con e-child" data-id="2dae3f1" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-c1eef24 elementor-widget elementor-widget-image" data-id="c1eef24" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="63" height="95" src="../assets/gold_menu/Earrings-Menu.png" class="attachment-full size-full wp-image-11217" alt="Earrings" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-0f2ec30 elementor-widget elementor-widget-heading" data-id="0f2ec30" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Earrings</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-e673ace e-con-full mj-mm-item e-flex e-con e-child" data-id="e673ace" data-element_type="container" href="../gold/gold_pendants.php">
                                                                    <div class="elementor-element elementor-element-5bb2f39 e-con-full e-flex e-con e-child" data-id="5bb2f39" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-3beeea1 elementor-widget elementor-widget-image" data-id="3beeea1" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="87" height="100" src="../assets/gold_menu/Pendants-menu-1.png" class="attachment-full size-full wp-image-11492" alt="Pendants" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-8e1aec4 elementor-widget elementor-widget-heading" data-id="8e1aec4" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Pendants</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-6950440 e-con-full mj-mm-item e-flex e-con e-child" data-id="6950440" data-element_type="container" href="../gold/gold_necklaces.php">
                                                                    <div class="elementor-element elementor-element-f812653 e-con-full e-flex e-con e-child" data-id="f812653" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-9120555 elementor-widget elementor-widget-image" data-id="9120555" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="111" height="148" src="../assets/gold_menu/Necklaces-Menu.png" class="attachment-full size-full wp-image-11216" alt="Necklaces" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-f9f9e38 elementor-widget elementor-widget-heading" data-id="f9f9e38" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Necklaces</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-b8d5147 e-con-full mj-mm-item e-flex e-con e-child" data-id="b8d5147" data-element_type="container" href="../gold/gold_haarams.php">
                                                                    <div class="elementor-element elementor-element-6b02a25 e-con-full e-flex e-con e-child" data-id="6b02a25" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-6f07095 elementor-widget-mobile__width-initial elementor-widget elementor-widget-image" data-id="6f07095" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="70" height="91" src="../assets/gold_menu/Haarams.png" class="attachment-full size-full wp-image-11215" alt="Haarams" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ba38136 elementor-widget elementor-widget-heading" data-id="ba38136" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Haarams</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-fa9a6ad e-con-full mj-mm-item e-flex e-con e-child" data-id="fa9a6ad" data-element_type="container" href="../gold/gold_kadaas.php">
                                                                    <div class="elementor-element elementor-element-6d28712 e-con-full e-flex e-con e-child" data-id="6d28712" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-f070ad3 elementor-widget elementor-widget-image" data-id="f070ad3" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="109" height="77" src="../assets/gold_menu/Kadaas-menu.png" class="attachment-full size-full wp-image-11212" alt="Kadaas" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-10f2b76 elementor-widget elementor-widget-heading" data-id="10f2b76" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Kadaas</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-a34bdd2 e-con-full mj-mm-item e-flex e-con e-child" data-id="a34bdd2" data-element_type="container" href="../gold/gold_mangalsutra.php">
                                                                    <div class="elementor-element elementor-element-c6e9a6d e-con-full e-flex e-con e-child" data-id="c6e9a6d" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-fab8042 elementor-widget elementor-widget-image" data-id="fab8042" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="104" height="67" src="../assets/gold_menu/Mangalsutra-menu.png" class="attachment-full size-full wp-image-11213" alt="Mangalsutra" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-be0ff70 elementor-widget elementor-widget-heading" data-id="be0ff70" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Mangalsutra</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-b4e325b e-con-full mj-mm-item e-flex e-con e-child" data-id="b4e325b" data-element_type="container" href="../gold/gold_bangles.php">
                                                                    <div class="elementor-element elementor-element-73a0af6 e-con-full e-flex e-con e-child" data-id="73a0af6" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-9aa3c07 elementor-widget elementor-widget-image" data-id="9aa3c07" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="107" height="57" src="../assets/gold_menu/Bangles-Menu-1.png" class="attachment-full size-full wp-image-11297" alt="Bangles - Menu" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-eb224fe elementor-widget elementor-widget-heading" data-id="eb224fe" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Bangles</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-1749918 e-con-full mj-mm-item e-flex e-con e-child" data-id="1749918" data-element_type="container" href="../gold/gold_chain.php">
                                                                    <div class="elementor-element elementor-element-224fbc6 e-con-full e-flex e-con e-child" data-id="224fbc6" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-3ece8c0 elementor-widget elementor-widget-image" data-id="3ece8c0" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="119" height="123" src="../assets/gold_menu/chain.png" class="attachment-full size-full wp-image-11503" alt="chain" /> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6839704 elementor-widget elementor-widget-heading" data-id="6839704" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Chain</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-276a7bb e-con-full mj-mm-item e-flex e-con e-child" data-id="276a7bb" data-element_type="container" href="../gold/gold_bracelets.php">
                                                                    <div class="elementor-element elementor-element-e7a1e89 e-con-full e-flex e-con e-child" data-id="e7a1e89" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-a2cc54f elementor-widget elementor-widget-image" data-id="a2cc54f" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="90" height="78" src="../assets/gold_menu/Bracelets.png" class="attachment-full size-full wp-image-11502" alt="Bracelets" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e58d8a8 elementor-widget elementor-widget-heading" data-id="e58d8a8" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Bracelets</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c51ef47 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child" data-id="c51ef47" data-element_type="container">
                                                            <div class="elementor-element elementor-element-1d338b3 elementor-widget elementor-widget-image" data-id="1d338b3" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img loading="lazy" width="699" height="465" src="https://muliya.in/wp-content/uploads/2025/04/Gold-Mega-Menu.png" class="attachment-full size-full wp-image-11638" alt="Gold" srcset="https://muliya.in/wp-content/uploads/2025/04/Gold-Mega-Menu.png 699w, https://muliya.in/wp-content/uploads/2025/04/Gold-Mega-Menu-300x200.png 300w, https://muliya.in/wp-content/uploads/2025/04/Gold-Mega-Menu-600x399.png 600w"
                                                                        sizes="(max-width: 699px) 100vw, 699px" /> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                       
                                        <li class="e-n-menu-item">
                                            <div id="e-n-menu-title-8203" class="e-n-menu-title">
                                                <a class="e-n-menu-title-container e-focus e-link" href="/diamond/diamond/diamonds.html">												<span class="e-n-menu-title-text">
                            <img src="../assets/favicon/diamond.png" style="margin-right:6px; Width: 18px;">Diamond						</span>
                    </a> 
                    <button id="e-n-menu-dropdown-icon-8203" class="e-n-menu-dropdown-icon e-focus" data-tab-index="3" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-8203">
                            <span class="e-n-menu-dropdown-icon-opened">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path></svg>								<span class="elementor-screen-only">Close <img src="/wp-content/uploads/2025/04/Diamond.svg" style="margin-right:6px; Width: 18px;">Diamond</span>
                            </span>
                            <span class="e-n-menu-dropdown-icon-closed">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path></svg>								<span class="elementor-screen-only">Open <img src="/wp-content/uploads/2025/04/Diamond.svg" style="margin-right:6px; Width: 18px;">Diamond</span>
                            </span>
                        </button>
                                            </div>
                                            <div class="e-n-menu-content">
                                                <div id="e-n-menu-content-8203" data-tab-index="3" aria-labelledby="e-n-menu-dropdown-icon-8203" class="elementor-element elementor-element-a777c59 e-flex e-con-boxed e-con e-child" data-id="a777c59" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-c82ddff e-con-full e-flex e-con e-child" data-id="c82ddff" data-element_type="container">
                                                            <div class="elementor-element elementor-element-6767b61 e-grid e-con-full e-con e-child" data-id="6767b61" data-element_type="container">
                                                                <a class="elementor-element elementor-element-9530cf7 e-con-full mj-mm-item e-flex e-con e-child" data-id="9530cf7" data-element_type="container" href="/diamond/rings-diamonds/rings-diamonds.html">
                                                                    <div class="elementor-element elementor-element-2439b6c e-con-full e-flex e-con e-child" data-id="2439b6c" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-c8bd581 elementor-widget-mobile__width-initial elementor-widget elementor-widget-image" data-id="c8bd581" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="118" height="102" src="https://muliya.in/wp-content/uploads/2025/04/Rings-diamond.png" class="attachment-full size-full wp-image-11633" alt="Rings diamond" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2a58b26 elementor-widget elementor-widget-heading" data-id="2a58b26" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Rings</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-7a20ab7 e-con-full mj-mm-item e-flex e-con e-child" data-id="7a20ab7" data-element_type="container" href="/diamond/earrings-diamonds/earrings-diamonds.html">
                                                                    <div class="elementor-element elementor-element-13d11b3 e-con-full e-flex e-con e-child" data-id="13d11b3" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-d5841e3 elementor-widget elementor-widget-image" data-id="d5841e3" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="110" height="95" src="https://muliya.in/wp-content/uploads/2025/04/Earrings-diamond.png" class="attachment-full size-full wp-image-11632" alt="Earrings diamond" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-57e4e42 elementor-widget elementor-widget-heading" data-id="57e4e42" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Earrings</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-a4ef536 e-con-full mj-mm-item e-flex e-con e-child" data-id="a4ef536" data-element_type="container" href="/diamond/pendant/pendant.html">
                                                                    <div class="elementor-element elementor-element-713b394 e-con-full e-flex e-con e-child" data-id="713b394" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-9697f88 elementor-widget elementor-widget-image" data-id="9697f88" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="93" height="128" src="https://muliya.in/wp-content/uploads/2025/04/Pendants-diamond.png" class="attachment-full size-full wp-image-11631" alt="Pendants Diamond" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-92802e9 elementor-widget elementor-widget-heading" data-id="92802e9" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Pendants</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-d469b06 e-con-full mj-mm-item e-flex e-con e-child" data-id="d469b06" data-element_type="container" href="/diamond/necklaces-diamonds/necklaces.html">
                                                                    <div class="elementor-element elementor-element-9eceb73 e-con-full e-flex e-con e-child" data-id="9eceb73" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-bb22261 elementor-widget elementor-widget-image" data-id="bb22261" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="122" height="110" src="https://muliya.in/wp-content/uploads/2025/04/Necklaces-diamond.png" class="attachment-full size-full wp-image-11630" alt="Necklaces diamond" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-41ad9db elementor-widget elementor-widget-heading" data-id="41ad9db" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Necklaces</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-0042de6 e-con-full mj-mm-item e-flex e-con e-child" data-id="0042de6" data-element_type="container" href="/diamond/bangles-diamonds/bangles-diamonds.html">
                                                                    <div class="elementor-element elementor-element-e52827f e-con-full e-flex e-con e-child" data-id="e52827f" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-1d99974 elementor-widget elementor-widget-image" data-id="1d99974" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="65" height="104" src="https://muliya.in/wp-content/uploads/2025/04/Bangles-Diamond.png" class="attachment-full size-full wp-image-11629" alt="Bangles Diamond" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-3951e33 elementor-widget elementor-widget-heading" data-id="3951e33" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Bangles</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-f819d33 e-con-full mj-mm-item e-flex e-con e-child" data-id="f819d33" data-element_type="container" href="/diamond/bracelets-diamonds/bracelets-diamonds.html">
                                                                    <div class="elementor-element elementor-element-1404380 e-con-full e-flex e-con e-child" data-id="1404380" data-element_type="container">
                                                                        <div class="elementor-element elementor-element-36e9922 elementor-widget elementor-widget-image" data-id="36e9922" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" width="66" height="96" src="https://muliya.in/wp-content/uploads/2025/04/brace.png" class="attachment-full size-full wp-image-11628" alt="bracelets" />                                                                                </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-1d38acc elementor-widget elementor-widget-heading" data-id="1d38acc" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Bracelets</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d489a82 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child" data-id="d489a82" data-element_type="container">
                                                            <div class="elementor-element elementor-element-1aa5e6a elementor-widget elementor-widget-image" data-id="1aa5e6a" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img loading="lazy" width="647" height="465" src="https://muliya.in/wp-content/uploads/2025/04/Diamond-Mega-Menu.png" class="attachment-full size-full wp-image-11637" alt="Diamond" srcset="https://muliya.in/wp-content/uploads/2025/04/Diamond-Mega-Menu.png 647w, https://muliya.in/wp-content/uploads/2025/04/Diamond-Mega-Menu-300x216.png 300w, https://muliya.in/wp-content/uploads/2025/04/Diamond-Mega-Menu-600x431.png 600w"
                                                                        sizes="(max-width: 647px) 100vw, 647px" /> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="e-n-menu-item">
                                            <div id="e-n-menu-title-8204" class="e-n-menu-title">
                                                <div class="e-n-menu-title-container"> <span class="e-n-menu-title-text">
                            <img src="../assets/favicon/collections.png" style="margin-right:6px; Width: 18px;">Collections						</span>
                                                </div>
                                                 <button id="e-n-menu-dropdown-icon-8204" class="e-n-menu-dropdown-icon e-focus" data-tab-index="4" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-8204">
                            <span class="e-n-menu-dropdown-icon-opened">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path></svg>								<span class="elementor-screen-only">Close <img src="assets/favicon/collections.png" style="margin-right:6px; Width: 18px;">Collections</span>
                            </span>
                            <span class="e-n-menu-dropdown-icon-closed">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path></svg>								<span class="elementor-screen-only">Open <img src="assets/favicon/collections.png" style="margin-right:6px; Width: 18px;">Collections</span>
                            </span>
                        </button>
                                            </div>
                                            <div class="e-n-menu-content">
                                                <div id="e-n-menu-content-8204" data-tab-index="4" aria-labelledby="e-n-menu-dropdown-icon-8204" class="elementor-element elementor-element-545d9ef e-flex e-con-boxed e-con e-child" data-id="545d9ef" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-9dee8c9 e-con-full e-flex e-con e-child" data-id="9dee8c9" data-element_type="container">
                                                            <div class="elementor-element elementor-element-caeed97 e-grid e-con-full e-con e-child" data-id="caeed97" data-element_type="container">
                                                                <a class="elementor-element elementor-element-6285b0a e-con-full mj-mm-item e-flex e-con e-child" data-id="6285b0a" data-element_type="container" href="https://muliya.in/mahathi/">
                                                                    <div class="elementor-element elementor-element-517a996 elementor-widget elementor-widget-image" data-id="517a996" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="460" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Mahathi.png" class="attachment-large size-large wp-image-11646" alt="Mahathi" srcset="https://muliya.in/wp-content/uploads/2025/04/Mahathi.png 460w, https://muliya.in/wp-content/uploads/2025/04/Mahathi-300x131.png 300w"
                                                                                sizes="(max-width: 460px) 100vw, 460px" /> </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-471944d e-con-full mj-mm-item e-flex e-con e-child" data-id="471944d" data-element_type="container" href="https://muliya.in/amuliya/">
                                                                    <div class="elementor-element elementor-element-ad2edf0 elementor-widget elementor-widget-image" data-id="ad2edf0" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="460" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Amuliya-Menu.png" class="attachment-large size-large wp-image-11878" alt="Amuliya" srcset="https://muliya.in/wp-content/uploads/2025/04/Amuliya-Menu.png 460w, https://muliya.in/wp-content/uploads/2025/04/Amuliya-Menu-300x131.png 300w"
                                                                                sizes="(max-width: 460px) 100vw, 460px" /> </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-d17c056 e-con-full mj-mm-item e-flex e-con e-child" data-id="d17c056" data-element_type="container" href="https://muliya.in/bridal/">
                                                                    <div class="elementor-element elementor-element-a4fd362 elementor-widget elementor-widget-image" data-id="a4fd362" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="460" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Indian-bridal.png" class="attachment-large size-large wp-image-11643" alt="Indian bridal" srcset="https://muliya.in/wp-content/uploads/2025/04/Indian-bridal.png 460w, https://muliya.in/wp-content/uploads/2025/04/Indian-bridal-300x131.png 300w"
                                                                                sizes="(max-width: 460px) 100vw, 460px" /> </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-68722c7 e-con-full mj-mm-item e-flex e-con e-child" data-id="68722c7" data-element_type="container" href="https://muliya.in/indian-ethnic/">
                                                                    <div class="elementor-element elementor-element-add1ba0 elementor-widget elementor-widget-image" data-id="add1ba0" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="460" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Indian-Ethnic.png" class="attachment-large size-large wp-image-11645" alt="Indian Ethnic" srcset="https://muliya.in/wp-content/uploads/2025/04/Indian-Ethnic.png 460w, https://muliya.in/wp-content/uploads/2025/04/Indian-Ethnic-300x131.png 300w"
                                                                                sizes="(max-width: 460px) 100vw, 460px" /> </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-87503de e-con-full mj-mm-item e-flex e-con e-child" data-id="87503de" data-element_type="container" href="https://muliya.in/ruby-and-emerald/">
                                                                    <div class="elementor-element elementor-element-daa84d4 elementor-widget elementor-widget-image" data-id="daa84d4" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="461" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Ruby-and-Emerald-1.png" class="attachment-large size-large wp-image-11652" alt="Ruby and Emerald" srcset="https://muliya.in/wp-content/uploads/2025/04/Ruby-and-Emerald-1.png 461w, https://muliya.in/wp-content/uploads/2025/04/Ruby-and-Emerald-1-300x131.png 300w"
                                                                                sizes="(max-width: 461px) 100vw, 461px" /> </div>
                                                                    </div>
                                                                </a>
                                                                <a class="elementor-element elementor-element-1c886ec e-con-full mj-mm-item e-flex e-con e-child" data-id="1c886ec" data-element_type="container" href="https://muliya.in/apsara-rose-gold/">
                                                                    <div class="elementor-element elementor-element-e647add elementor-widget elementor-widget-image" data-id="e647add" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" width="460" height="201" src="https://muliya.in/wp-content/uploads/2025/04/Apsara.png" class="attachment-large size-large wp-image-11642" alt="" srcset="https://muliya.in/wp-content/uploads/2025/04/Apsara.png 460w, https://muliya.in/wp-content/uploads/2025/04/Apsara-300x131.png 300w"
                                                                                sizes="(max-width: 460px) 100vw, 460px" /> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2c161b4 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child" data-id="2c161b4" data-element_type="container">
                                                            <div class="elementor-element elementor-element-92741a8 elementor-widget elementor-widget-image" data-id="92741a8" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img loading="lazy" width="806" height="497" src="https://muliya.in/wp-content/uploads/2025/04/Collections-Mega-Menu.png" class="attachment-full size-full wp-image-11636" alt="Collections" srcset="https://muliya.in/wp-content/uploads/2025/04/Collections-Mega-Menu.png 806w, https://muliya.in/wp-content/uploads/2025/04/Collections-Mega-Menu-300x185.png 300w, https://muliya.in/wp-content/uploads/2025/04/Collections-Mega-Menu-768x474.png 768w, https://muliya.in/wp-content/uploads/2025/04/Collections-Mega-Menu-600x370.png 600w"
                                                                        sizes="(max-width: 806px) 100vw, 806px" /> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="e-n-menu-item">
                                            <div id="e-n-menu-title-8205" class="e-n-menu-title">
                                                <a class="e-n-menu-title-container e-focus e-link" href="  ">												<span class="e-n-menu-title-text">
                            <img src="../assets/favicon/showroom.png" style="margin-right:6px; Width: 18px;">Showrooms						</span>
                    </a> </div>
                                        </li>
                                        
                                       
                                        <li class="e-n-menu-item">
                                            <div id="e-n-menu-title-8208" class="e-n-menu-title">
                                                <div class="e-n-menu-title-container"> <span class="e-n-menu-title-text">
                            <img src="../assets/favicon/menu.png" style="margin-right:6px; Width: 18px;">More						</span>
                                                </div>
                                 <button id="e-n-menu-dropdown-icon-8208" class="e-n-menu-dropdown-icon e-focus" data-tab-index="8" aria-haspopup="true" aria-expanded="false" aria-controls="e-n-menu-content-8208">
                            <span class="e-n-menu-dropdown-icon-opened">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path></svg>								<span class="elementor-screen-only">Close <img src="/wp-content/uploads/2025/04/More.svg" style="margin-right:6px; Width: 18px;">More</span>
                            </span>
                            <span class="e-n-menu-dropdown-icon-closed">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path></svg>								<span class="elementor-screen-only">Open <img src="/wp-content/uploads/2025/04/More.svg" style="margin-right:6px; Width: 18px;">More</span>
                            </span>
                        </button>
                                            </div>
                                            <div class="e-n-menu-content">
                                                <div id="e-n-menu-content-8208" data-tab-index="8" aria-labelledby="e-n-menu-dropdown-icon-8208" class="elementor-element elementor-element-035a245 e-flex e-con-boxed e-con e-child" data-id="035a245" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-04e8465 e-con-full e-flex e-con e-child" data-id="04e8465" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-element elementor-element-eeb1f22 elementor-mobile-align-center elementor-align-left elementor-tablet-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                data-id="eeb1f22" data-element_type="widget" data-widget_type="icon-list.default">
                                                                <div class="elementor-widget-container">
                                                                    <ul class="elementor-icon-list-items">
                                                                        <li class="elementor-icon-list-item">
                                                                            <a href="https://muliya.in/gold-buying-plans/">

                                            <span class="elementor-icon-list-text">Gold Buying Plans</span>
                                            </a>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
                                                                            <a href="https://muliya.in/blog/">

                                            <span class="elementor-icon-list-text">Blog</span>
                                            </a>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
                                                                            <a href="https://muliya.in/careers/">

                                            <span class="elementor-icon-list-text">Careers</span>
                                            </a>
                                                                        </li>
                                                                        <li class="elementor-icon-list-item">
                                                                            <a href="https://muliya.in/contact-us/">

                                            <span class="elementor-icon-list-text">Contact Us</span>
                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <h1>Gold Rings</h1>


    <div class="product-list">
       <?php
        // Pagination setup
        $items_per_page = 10;
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;
        $offset = ($page - 1) * $items_per_page;

        // Get total items count
        $count_sql = "SELECT COUNT(*) as total FROM gold_ring";
        $count_result = $conn->query($count_sql);
        $total_items = 0;
        if ($count_result && $row = $count_result->fetch_assoc()) {
            $total_items = (int)$row['total'];
        }
        $total_pages = ceil($total_items / $items_per_page);

        // Fetch paginated items
        $sql = "SELECT * FROM gold_ring LIMIT $items_per_page OFFSET $offset";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productUrl = 'gold_ring_product.php?code=' . urlencode($row['code']) . '&type=gold_ring';
                echo '<div class="product-card">';
                echo '<a href="' . $productUrl . '">';
                echo '<img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '</a>';
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<a class="button" href="' . $productUrl . '">Know More</a>';
                echo '</div>';
            }
        } else {
            echo "<p>No gold ring products found.</p>";
        }
        ?>
    </div>

    <?php if ($total_pages > 1): ?>
    <div style="text-align:center; margin-top:30px;">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                echo '<span style="display:inline-block; min-width:32px; padding:8px 12px; margin:0 4px; background:#000; color:#fff; border-radius:5px; font-weight:bold;">' . $i . '</span>';
            } else {
                echo '<a href="?page=' . $i . '" style="display:inline-block; min-width:32px; padding:8px 12px; margin:0 4px; background:#eee; color:#333; border-radius:5px; text-decoration:none;">' . $i . '</a>';
            }
        }
        ?>
    </div>
    <?php endif; ?>

    <?php $conn->close(); ?>
  <?php include_once '../footer.php'; ?>
</body>
</html>
