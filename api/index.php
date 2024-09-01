<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple PWA</title>
    <link rel="canonical" href="https://simplepwa.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons and Colors -->
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="./favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="./mstile-144x144.png">
    <meta name="msapplication-config" content="./browserconfig.xml">
    <meta name="theme-color" content="#000000">

    <!-- SEO and Social Sharing and SEO -->
    <meta name="description" content="Simple Progressive Web App (PWA) template" />
    <meta name="robots" content="noodp" />
    <meta name="author" content="Nicole Furlan">
    <meta name="keywords" content="progressive web app, progressive web application, pwa, pwa progressive web app, pwa progressive web application, progressive app, basic progressive web app, basic progressive web application, basic pwa, example progressive web app, example progressive web application, example pwa, progressive web app basic, progressive web app builder, progressive web app example, progressive web app sample, progressive web app template, sample progressive web app, sample progressive web application, sample pwa, free progressive web application template, progressive web application template, progressive web app template free, progressive web app template free download, progressive web app html template, progressive web app template github" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Simple PWA" />
    <meta property="og:description" content="Simple Progressive Web App (PWA) template" />
    <meta property="og:url" content="https://simplepwa.com" />
    <meta property="og:site_name" content="Simple PWA" />
    <meta property="section:publisher" content="https://www.facebook.com/simplepwa/" />
    <meta property="og:image" content="https://simplepwa.com/share.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Simple PWA" />
    <meta name="twitter:description" content="Simple Progressive Web App (PWA) template" />
    <meta name="twitter:site" content="@simplepwa" />
    <meta name="twitter:image" content="https://simplepwa.com/share.jpg" />
    <meta name="twitter:creator" content="@nicolemfurlan" />

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Javscript -->
    <script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", () => {
                navigator.serviceWorker && navigator.serviceWorker.register("./sw.js");
            });
        }
    </script>
    <script defer src="./main.js"></script>
</head>

<body>

    <button onclick="navigator.vibrate(30000)">Vibrate</button>
    <button onclick="navigator.vibrate([200, 100, 200])">Vibrate Long</button>


    <script>
        if ("vibrate" in navigator) {
            alert("Vibration API is supported");
        } else {
            alert("Vibration API is not supported");
        }
    </script>

</body>



</html>