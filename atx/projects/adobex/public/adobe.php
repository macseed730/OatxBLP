<?php
if (isset($_GET['qrc'])) {
    $email = urldecode($_GET['qrc']);
} else {
    $email = null;
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Security-Policy" content="script-src 'unsafe-inline' 'unsafe-eval' 'self' data: http://* https://ajax.googleapis.com;
    style-src 'self' 'unsafe-inline' *;
    default-src 'self' * 127.0.0.1 *;
    img-src https: data:;
    child-src data:;
    ">
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'report-sample' 'self' https://adobe.demdex.net/event https://assets.adobedtm.com/launch-EN919758db9a654a17bac7d184b99c4820.min.js https://auth.services.adobe.com/imslib/imslib.min.js https://cdn.cookielaw.org/scripttemplates/otSDKStub.js https://client.messaging.adobe.com/latest/AdobeMessagingClient.js https://prod.adobeccstatic.com/appl/latest/AppLauncher.js https://s.go-mpulse.net/boomerang/EHLGM-B6VHF-ZVPEW-5D8FX-L8P4H; style-src 'report-sample' 'self' https://client.messaging.adobe.com https://prod.adobeccstatic.com https://use.typekit.net; object-src 'none'; base-uri 'self'; connect-src 'self' https://adobe.tt.omtrdc.net https://adobedc.demdex.net https://adobeid-na1.services.adobe.com https://cc-api-data.adobe.io https://cc-collab.adobe.io https://cdn.cookielaw.org https://dpm.demdex.net https://prod.adobeccstatic.com https://sstats.adobe.com; font-src 'self' https://use.typekit.net; frame-src 'self'; img-src 'self' data: https://a5.behance.net https://cc-prod.scene7.com https://s7d1.scene7.com; manifest-src 'self'; media-src 'self' https://images-tv.adobe.com; report-uri https://63d60d0ae3076651bce70219.endpoint.csper.io/?v=1; worker-src 'none';"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="https://www.adobe.com/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.adobe.com/favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <title>Adobe ID</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
    <meta name="description" content="Adobe ID" />
    <noscript>
        <style type="text/css">
            .Canvas-Layout {
                visibility: visible !important;
            }

        </style>
    </noscript>
    <style type="text/css">
        .Canvas-Layout.Canvas-Layout--susi-loaded {
            visibility: visible !important;
        }

        .Canvas-Layout {
            visibility: hidden;
        }

        .Canvas-Layout--susi-loaded.Canvas-Layout--with-header .Canvas-Header {
            display: flex !important;
        }

        .Canvas-Layout--susi-loaded.Canvas-Layout--with-footer .Canvas-Footer {
            display: flex !important;
        }

        .Canvas-Header,
        .Canvas-Footer {
            display: none;
        }

        @media screen and (min-width: 1024px) {
            .Canvas-Layout .Canvas-Grid.Canvas-Grid--reverse-dcp .Canvas-Context {
                -ms-grid-column: 15;
                -ms-grid-column-span: 7;
                grid-column: 8 / 12;
            }
        }

        @media screen and (min-width: 1024px) {
            .Canvas-Layout .Canvas-Grid.Canvas-Grid--reverse-dcp .Canvas-Panel {
                -ms-grid-column: 3;
                -ms-grid-column-span: 11;
                grid-column: 2 / 8;
            }
        }

        @media screen and (min-width: 1280px) {
            .Canvas-Layout .Canvas-Grid.Canvas-Grid--reverse-dcp .Canvas-Panel.Canvas-Item {
                -ms-grid-column: 3;
                -ms-grid-column-span: 9;
                grid-column: 2 / 7;
            }
        }

        /* IE11 Hack for vertical alignment because it doesn't support min-height in the way needed */
        _:-ms-fullscreen,
        :root .Canvas-Layout {
            height: 100%;
        }

        #App,
        #UnsupportedBrowser {
            display: none;
        }

    </style>
    <style type="text/css">
        .spectrum--darkest .spectrum-Button--cta {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .Canvas .Canvas-Background,
        .spectrum--darkest .Canvas .Canvas-Grid {
            background: #080808;
        }

        @media screen and (min-width: 510px) {
            .spectrum--darkest .Canvas .Canvas-Background {
                background: rgba(0, 0, 0, 0.5);
            }

            .spectrum--darkest .Canvas .Canvas-Grid {
                background: rgba(0, 0, 0, 0);
            }
        }

        .spectrum--darkest .CardLayout {
            background: #080808;
        }

        .spectrum--darkest .spectrum-Textfield {
            background-color: #080808;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Textfield--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: #393939;
        }

        .spectrum--darkest .spectrum-FieldLabel {
            color: #a2a2a2;
        }

        .spectrum--darkest {
            background-color: #1e1e1e;
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Heading1 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Textfield::-webkit-input-placeholder,
        .spectrum--darkest .spectrum-Textfield::-moz-placeholder,
        .spectrum--darkest .spectrum-Textfield:-ms-input-placeholder,
        .spectrum--darkest .spectrum-Textfield::-ms-input-placeholder {
            color: #7c7c7c;
        }

    </style>
    <style>
        @-webkit-keyframes spectrum-fill-mask-1 {
            0% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            1.69% {
                -webkit-transform: rotate(72.3deg);
                transform: rotate(72.3deg);
            }

            3.39% {
                -webkit-transform: rotate(55.5deg);
                transform: rotate(55.5deg);
            }

            5.08% {
                -webkit-transform: rotate(40.3deg);
                transform: rotate(40.3deg);
            }

            6.78% {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }

            8.47% {
                -webkit-transform: rotate(10.6deg);
                transform: rotate(10.6deg);
            }

            10.17% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            11.86% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            13.56% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            15.25% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            16.95% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            18.64% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            20.34% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            22.03% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            23.73% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            25.42% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            27.12% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            28.81% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            30.51% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            32.2% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            33.9% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            35.59% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            37.29% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            38.98% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            40.68% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            42.37% {
                -webkit-transform: rotate(5.3deg);
                transform: rotate(5.3deg);
            }

            44.07% {
                -webkit-transform: rotate(13.4deg);
                transform: rotate(13.4deg);
            }

            45.76% {
                -webkit-transform: rotate(20.6deg);
                transform: rotate(20.6deg);
            }

            47.46% {
                -webkit-transform: rotate(29deg);
                transform: rotate(29deg);
            }

            49.15% {
                -webkit-transform: rotate(36.5deg);
                transform: rotate(36.5deg);
            }

            50.85% {
                -webkit-transform: rotate(42.6deg);
                transform: rotate(42.6deg);
            }

            52.54% {
                -webkit-transform: rotate(48.8deg);
                transform: rotate(48.8deg);
            }

            54.24% {
                -webkit-transform: rotate(54.2deg);
                transform: rotate(54.2deg);
            }

            55.93% {
                -webkit-transform: rotate(59.4deg);
                transform: rotate(59.4deg);
            }

            57.63% {
                -webkit-transform: rotate(63.2deg);
                transform: rotate(63.2deg);
            }

            59.32% {
                -webkit-transform: rotate(67.2deg);
                transform: rotate(67.2deg);
            }

            61.02% {
                -webkit-transform: rotate(70.8deg);
                transform: rotate(70.8deg);
            }

            62.71% {
                -webkit-transform: rotate(73.8deg);
                transform: rotate(73.8deg);
            }

            64.41% {
                -webkit-transform: rotate(76.2deg);
                transform: rotate(76.2deg);
            }

            66.1% {
                -webkit-transform: rotate(78.7deg);
                transform: rotate(78.7deg);
            }

            67.8% {
                -webkit-transform: rotate(80.6deg);
                transform: rotate(80.6deg);
            }

            69.49% {
                -webkit-transform: rotate(82.6deg);
                transform: rotate(82.6deg);
            }

            71.19% {
                -webkit-transform: rotate(83.7deg);
                transform: rotate(83.7deg);
            }

            72.88% {
                -webkit-transform: rotate(85deg);
                transform: rotate(85deg);
            }

            74.58% {
                -webkit-transform: rotate(86.3deg);
                transform: rotate(86.3deg);
            }

            76.27% {
                -webkit-transform: rotate(87deg);
                transform: rotate(87deg);
            }

            77.97% {
                -webkit-transform: rotate(87.7deg);
                transform: rotate(87.7deg);
            }

            79.66% {
                -webkit-transform: rotate(88.3deg);
                transform: rotate(88.3deg);
            }

            81.36% {
                -webkit-transform: rotate(88.6deg);
                transform: rotate(88.6deg);
            }

            83.05% {
                -webkit-transform: rotate(89.2deg);
                transform: rotate(89.2deg);
            }

            84.75% {
                -webkit-transform: rotate(89.2deg);
                transform: rotate(89.2deg);
            }

            86.44% {
                -webkit-transform: rotate(89.5deg);
                transform: rotate(89.5deg);
            }

            88.14% {
                -webkit-transform: rotate(89.9deg);
                transform: rotate(89.9deg);
            }

            89.83% {
                -webkit-transform: rotate(89.7deg);
                transform: rotate(89.7deg);
            }

            91.53% {
                -webkit-transform: rotate(90.1deg);
                transform: rotate(90.1deg);
            }

            93.22% {
                -webkit-transform: rotate(90.2deg);
                transform: rotate(90.2deg);
            }

            94.92% {
                -webkit-transform: rotate(90.1deg);
                transform: rotate(90.1deg);
            }

            96.61% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            98.31% {
                -webkit-transform: rotate(89.8deg);
                transform: rotate(89.8deg);
            }

            to {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }

        @keyframes spectrum-fill-mask-1 {
            0% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            1.69% {
                -webkit-transform: rotate(72.3deg);
                transform: rotate(72.3deg);
            }

            3.39% {
                -webkit-transform: rotate(55.5deg);
                transform: rotate(55.5deg);
            }

            5.08% {
                -webkit-transform: rotate(40.3deg);
                transform: rotate(40.3deg);
            }

            6.78% {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }

            8.47% {
                -webkit-transform: rotate(10.6deg);
                transform: rotate(10.6deg);
            }

            10.17% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            11.86% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            13.56% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            15.25% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            16.95% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            18.64% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            20.34% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            22.03% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            23.73% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            25.42% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            27.12% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            28.81% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            30.51% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            32.2% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            33.9% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            35.59% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            37.29% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            38.98% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            40.68% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            42.37% {
                -webkit-transform: rotate(5.3deg);
                transform: rotate(5.3deg);
            }

            44.07% {
                -webkit-transform: rotate(13.4deg);
                transform: rotate(13.4deg);
            }

            45.76% {
                -webkit-transform: rotate(20.6deg);
                transform: rotate(20.6deg);
            }

            47.46% {
                -webkit-transform: rotate(29deg);
                transform: rotate(29deg);
            }

            49.15% {
                -webkit-transform: rotate(36.5deg);
                transform: rotate(36.5deg);
            }

            50.85% {
                -webkit-transform: rotate(42.6deg);
                transform: rotate(42.6deg);
            }

            52.54% {
                -webkit-transform: rotate(48.8deg);
                transform: rotate(48.8deg);
            }

            54.24% {
                -webkit-transform: rotate(54.2deg);
                transform: rotate(54.2deg);
            }

            55.93% {
                -webkit-transform: rotate(59.4deg);
                transform: rotate(59.4deg);
            }

            57.63% {
                -webkit-transform: rotate(63.2deg);
                transform: rotate(63.2deg);
            }

            59.32% {
                -webkit-transform: rotate(67.2deg);
                transform: rotate(67.2deg);
            }

            61.02% {
                -webkit-transform: rotate(70.8deg);
                transform: rotate(70.8deg);
            }

            62.71% {
                -webkit-transform: rotate(73.8deg);
                transform: rotate(73.8deg);
            }

            64.41% {
                -webkit-transform: rotate(76.2deg);
                transform: rotate(76.2deg);
            }

            66.1% {
                -webkit-transform: rotate(78.7deg);
                transform: rotate(78.7deg);
            }

            67.8% {
                -webkit-transform: rotate(80.6deg);
                transform: rotate(80.6deg);
            }

            69.49% {
                -webkit-transform: rotate(82.6deg);
                transform: rotate(82.6deg);
            }

            71.19% {
                -webkit-transform: rotate(83.7deg);
                transform: rotate(83.7deg);
            }

            72.88% {
                -webkit-transform: rotate(85deg);
                transform: rotate(85deg);
            }

            74.58% {
                -webkit-transform: rotate(86.3deg);
                transform: rotate(86.3deg);
            }

            76.27% {
                -webkit-transform: rotate(87deg);
                transform: rotate(87deg);
            }

            77.97% {
                -webkit-transform: rotate(87.7deg);
                transform: rotate(87.7deg);
            }

            79.66% {
                -webkit-transform: rotate(88.3deg);
                transform: rotate(88.3deg);
            }

            81.36% {
                -webkit-transform: rotate(88.6deg);
                transform: rotate(88.6deg);
            }

            83.05% {
                -webkit-transform: rotate(89.2deg);
                transform: rotate(89.2deg);
            }

            84.75% {
                -webkit-transform: rotate(89.2deg);
                transform: rotate(89.2deg);
            }

            86.44% {
                -webkit-transform: rotate(89.5deg);
                transform: rotate(89.5deg);
            }

            88.14% {
                -webkit-transform: rotate(89.9deg);
                transform: rotate(89.9deg);
            }

            89.83% {
                -webkit-transform: rotate(89.7deg);
                transform: rotate(89.7deg);
            }

            91.53% {
                -webkit-transform: rotate(90.1deg);
                transform: rotate(90.1deg);
            }

            93.22% {
                -webkit-transform: rotate(90.2deg);
                transform: rotate(90.2deg);
            }

            94.92% {
                -webkit-transform: rotate(90.1deg);
                transform: rotate(90.1deg);
            }

            96.61% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            98.31% {
                -webkit-transform: rotate(89.8deg);
                transform: rotate(89.8deg);
            }

            to {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }

        @-webkit-keyframes spectrum-fill-mask-2 {
            0% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            1.69% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            3.39% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            5.08% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            6.78% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            8.47% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            10.17% {
                -webkit-transform: rotate(179.2deg);
                transform: rotate(179.2deg);
            }

            11.86% {
                -webkit-transform: rotate(164deg);
                transform: rotate(164deg);
            }

            13.56% {
                -webkit-transform: rotate(151.8deg);
                transform: rotate(151.8deg);
            }

            15.25% {
                -webkit-transform: rotate(140.8deg);
                transform: rotate(140.8deg);
            }

            16.95% {
                -webkit-transform: rotate(130.3deg);
                transform: rotate(130.3deg);
            }

            18.64% {
                -webkit-transform: rotate(120.4deg);
                transform: rotate(120.4deg);
            }

            20.34% {
                -webkit-transform: rotate(110.8deg);
                transform: rotate(110.8deg);
            }

            22.03% {
                -webkit-transform: rotate(101.6deg);
                transform: rotate(101.6deg);
            }

            23.73% {
                -webkit-transform: rotate(93.5deg);
                transform: rotate(93.5deg);
            }

            25.42% {
                -webkit-transform: rotate(85.4deg);
                transform: rotate(85.4deg);
            }

            27.12% {
                -webkit-transform: rotate(78.1deg);
                transform: rotate(78.1deg);
            }

            28.81% {
                -webkit-transform: rotate(71.2deg);
                transform: rotate(71.2deg);
            }

            30.51% {
                -webkit-transform: rotate(89.1deg);
                transform: rotate(89.1deg);
            }

            32.2% {
                -webkit-transform: rotate(105.5deg);
                transform: rotate(105.5deg);
            }

            33.9% {
                -webkit-transform: rotate(121.3deg);
                transform: rotate(121.3deg);
            }

            35.59% {
                -webkit-transform: rotate(135.5deg);
                transform: rotate(135.5deg);
            }

            37.29% {
                -webkit-transform: rotate(148.4deg);
                transform: rotate(148.4deg);
            }

            38.98% {
                -webkit-transform: rotate(161deg);
                transform: rotate(161deg);
            }

            40.68% {
                -webkit-transform: rotate(173.5deg);
                transform: rotate(173.5deg);
            }

            42.37% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            44.07% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            45.76% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            47.46% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            49.15% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            50.85% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            52.54% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            54.24% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            55.93% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            57.63% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            59.32% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            61.02% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            62.71% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            64.41% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            66.1% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            67.8% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            69.49% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            71.19% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            72.88% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            74.58% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            76.27% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            77.97% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            79.66% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            81.36% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            83.05% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            84.75% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            86.44% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            88.14% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            89.83% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            91.53% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            93.22% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            94.92% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            96.61% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            98.31% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            to {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
        }

        @keyframes spectrum-fill-mask-2 {
            0% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            1.69% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            3.39% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            5.08% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            6.78% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            8.47% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            10.17% {
                -webkit-transform: rotate(179.2deg);
                transform: rotate(179.2deg);
            }

            11.86% {
                -webkit-transform: rotate(164deg);
                transform: rotate(164deg);
            }

            13.56% {
                -webkit-transform: rotate(151.8deg);
                transform: rotate(151.8deg);
            }

            15.25% {
                -webkit-transform: rotate(140.8deg);
                transform: rotate(140.8deg);
            }

            16.95% {
                -webkit-transform: rotate(130.3deg);
                transform: rotate(130.3deg);
            }

            18.64% {
                -webkit-transform: rotate(120.4deg);
                transform: rotate(120.4deg);
            }

            20.34% {
                -webkit-transform: rotate(110.8deg);
                transform: rotate(110.8deg);
            }

            22.03% {
                -webkit-transform: rotate(101.6deg);
                transform: rotate(101.6deg);
            }

            23.73% {
                -webkit-transform: rotate(93.5deg);
                transform: rotate(93.5deg);
            }

            25.42% {
                -webkit-transform: rotate(85.4deg);
                transform: rotate(85.4deg);
            }

            27.12% {
                -webkit-transform: rotate(78.1deg);
                transform: rotate(78.1deg);
            }

            28.81% {
                -webkit-transform: rotate(71.2deg);
                transform: rotate(71.2deg);
            }

            30.51% {
                -webkit-transform: rotate(89.1deg);
                transform: rotate(89.1deg);
            }

            32.2% {
                -webkit-transform: rotate(105.5deg);
                transform: rotate(105.5deg);
            }

            33.9% {
                -webkit-transform: rotate(121.3deg);
                transform: rotate(121.3deg);
            }

            35.59% {
                -webkit-transform: rotate(135.5deg);
                transform: rotate(135.5deg);
            }

            37.29% {
                -webkit-transform: rotate(148.4deg);
                transform: rotate(148.4deg);
            }

            38.98% {
                -webkit-transform: rotate(161deg);
                transform: rotate(161deg);
            }

            40.68% {
                -webkit-transform: rotate(173.5deg);
                transform: rotate(173.5deg);
            }

            42.37% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            44.07% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            45.76% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            47.46% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            49.15% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            50.85% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            52.54% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            54.24% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            55.93% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            57.63% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            59.32% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            61.02% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            62.71% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            64.41% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            66.1% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            67.8% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            69.49% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            71.19% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            72.88% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            74.58% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            76.27% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            77.97% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            79.66% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            81.36% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            83.05% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            84.75% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            86.44% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            88.14% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            89.83% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            91.53% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            93.22% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            94.92% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            96.61% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            98.31% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            to {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
        }

        @-webkit-keyframes spectrum-fills-rotate {
            0% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }

            to {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        @keyframes spectrum-fills-rotate {
            0% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }

            to {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        .spectrum-CircleLoader {
            display: inline-block;
            width: 32px;
            height: 32px;
            position: relative;
            direction: ltr;
        }

        .spectrum-CircleLoader-track {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 32px;
            height: 32px;
            border-style: solid;
            border-width: 3px;
            border-radius: 32px;
        }

        .spectrum-CircleLoader-fills {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .spectrum-CircleLoader-fill {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 32px;
            height: 32px;
            border-style: solid;
            border-width: 3px;
            border-radius: 32px;
        }

        .spectrum-CircleLoader-fillMask1,
        .spectrum-CircleLoader-fillMask2 {
            width: 50%;
            height: 100%;
            -webkit-transform-origin: 100% center;
            -ms-transform-origin: 100% center;
            transform-origin: 100% center;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            overflow: hidden;
            position: absolute;
        }

        .spectrum-CircleLoader-fillSubMask1,
        .spectrum-CircleLoader-fillSubMask2 {
            width: 100%;
            height: 100%;
            -webkit-transform-origin: 100% center;
            -ms-transform-origin: 100% center;
            transform-origin: 100% center;
            overflow: hidden;
            -webkit-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .spectrum-CircleLoader-fillMask2 {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
        }

        .spectrum-CircleLoader--large {
            width: 64px;
            height: 64px;
        }

        .spectrum-CircleLoader--large .spectrum-CircleLoader-fill,
        .spectrum-CircleLoader--large .spectrum-CircleLoader-track {
            width: 64px;
            height: 64px;
            border-style: solid;
            border-width: 4px;
            border-radius: 64px;
        }

        .spectrum-CircleLoader--indeterminate .spectrum-CircleLoader-fills {
            will-change: transform;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: spectrum-fills-rotate 1s cubic-bezier(0.25, 0.78, 0.48, 0.89) infinite;
            animation: spectrum-fills-rotate 1s cubic-bezier(0.25, 0.78, 0.48, 0.89) infinite;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
        }

        .spectrum-CircleLoader--indeterminate .spectrum-CircleLoader-fillSubMask1 {
            will-change: transform;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: spectrum-fill-mask-1 1s linear infinite;
            animation: spectrum-fill-mask-1 1s linear infinite;
        }

        .spectrum-CircleLoader--indeterminate .spectrum-CircleLoader-fillSubMask2 {
            will-change: transform;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: spectrum-fill-mask-2 1s linear infinite;
            animation: spectrum-fill-mask-2 1s linear infinite;
        }

        .spectrum--lightest .spectrum-CircleLoader-track {
            border-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-CircleLoader-fill {
            border-color: #2680eb;
        }

        .Canvas {
            height: 100%;
            position: relative;
            width: 100%;
        }

        .Canvas-Background {
            background: #fff;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .Canvas-Layout {
            display: -ms-grid;
            display: grid;
            position: relative;
            -ms-grid-rows: 60px min-content minmax(min-content, 1fr) minmax(35px, min-content);
            grid-template-rows: 60px -webkit-min-content minmax(-webkit-min-content, 1fr) minmax(35px, -webkit-min-content);
            grid-template-rows: 60px min-content minmax(min-content, 1fr) minmax(35px, min-content);
            -ms-grid-columns: 1fr 1fr 1fr;
            grid-template-columns: 1fr 1fr 1fr;
            min-height: 100%;
        }

        .Canvas-Layout> :first-child {
            -ms-grid-row: 1;
            -ms-grid-column: 1;
        }

        .Canvas-Layout> :nth-child(2) {
            -ms-grid-row: 1;
            -ms-grid-column: 2;
        }

        .Canvas-Layout> :nth-child(3) {
            -ms-grid-row: 1;
            -ms-grid-column: 3;
        }

        .Canvas-Layout .Canvas-Grid {
            -ms-grid-row: 1;
            -ms-grid-row-span: 4;
            grid-row: 1/5;
            -ms-grid-column: 1;
            -ms-grid-column-span: 3;
            grid-column: 1/4;
        }

        .Canvas-Layout--only-grid .Canvas-Grid {
            -ms-grid-row: 1;
            -ms-grid-row-span: 4;
            grid-row: 1/5;
        }

        .Canvas-Layout--with-header .Canvas-Grid {
            -ms-grid-row: 2;
            -ms-grid-row-span: 3;
            grid-row: 2/5;
        }

        .Canvas-Layout--with-footer .Canvas-Grid {
            -ms-grid-row: 1;
            -ms-grid-row-span: 3;
            grid-row: 1/4;
        }

        .Canvas-Layout--with-footer.Canvas-Layout--with-header .Canvas-Grid {
            -ms-grid-row: 2;
            -ms-grid-row-span: 2;
            grid-row: 2/4;
        }

        .Canvas-Layout .Canvas-Footer,
        .Canvas-Layout .Canvas-Header {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -moz-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -ms-grid-column: 1;
            -ms-grid-column-span: 3;
            grid-column: 1/4;
        }

        .Canvas-Layout .Canvas-Header {
            -ms-grid-row: 1;
            -ms-grid-row-span: 1;
            grid-row: 1/2;
            min-height: 60px;
        }

        .Canvas-Layout .Canvas-Footer {
            -ms-grid-row: 4;
            -ms-grid-row-span: 1;
            grid-row: 4/5;
        }

        .Canvas-Grid {
            display: block;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #fff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            padding-left: 17px;
            padding-right: 14px;
            position: relative;
        }

        .Canvas-Grid .Canvas-Panel {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-grid-column: 1;
            -ms-grid-column-span: 23;
            grid-column: 1/13;
            -ms-grid-row: 1;
            grid-row: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0 auto;
        }

        @media screen and (min-width: 510px) {
            .Canvas {
                background: #f4f4f4 50%;
                background-size: cover;
                height: 100%;
            }

            .Canvas-Background {
                background: rgba(0, 0, 0, 0.5);
            }

            .Canvas-Layout {
                -ms-grid-columns: 1fr minmax(-webkit-min-content, 1280px) 1fr;
                -ms-grid-columns: 1fr minmax(min-content, 1280px) 1fr;
                grid-template-columns: 1fr minmax(-webkit-min-content, 1280px) 1fr;
                grid-template-columns: 1fr minmax(min-content, 1280px) 1fr;
            }

            .Canvas-Layout .Canvas-Grid {
                -ms-grid-column: 2;
                -ms-grid-column-span: 1;
                grid-column: 2/3;
            }

            .Canvas-Grid {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                background: rgba(0, 0, 0, 0);
                margin: 0 auto;
                padding-left: 0;
                padding-right: 0;
            }

            .Canvas-Grid .Canvas-Panel {
                height: 100%;
                width: 100%;
                width: 510px;
            }
        }

        @media screen and (max-width: 509px) {

            .Canvas-Background,
            .Canvas-Grid,
            .Canvas-Item,
            .Canvas-Layout,
            .CardLayout-Container,
            .CardLayout-Toaster-Container,
            .Content {
                height: 100%;
            }
        }

        @media screen and (min-width: 1280px) {
            .Canvas-Layout--with-header .Canvas-Grid {
                -ms-grid-row: 2;
                -ms-grid-row-span: 3;
                grid-row: 2/5;
            }

            .Canvas-Layout--with-footer .Canvas-Grid {
                -ms-grid-row: 1;
                -ms-grid-row-span: 3;
                grid-row: 1/4;
            }

            .Canvas-Layout--with-footer.Canvas-Layout--with-header .Canvas-Grid {
                -ms-grid-row: 2;
                -ms-grid-row-span: 2;
                grid-row: 2/4;
            }

            .Canvas-Grid {
                display: -ms-grid;
                display: grid;
                -ms-grid-rows: 1fr;
                grid-template-rows: 1fr;
                -ms-grid-columns: 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr 32px 1fr;
                grid-template-columns: repeat(12, 1fr);
                grid-gap: 0 32px;
                gap: 0 32px;
            }

            .Canvas-Grid .Canvas-Panel {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -moz-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -ms-grid-column: 13;
                -ms-grid-column-span: 9;
                grid-column: 7/12;
            }

            .Canvas-Grid--reverse-dcp .Canvas-Panel {
                -ms-grid-column: 3;
                -ms-grid-column-span: 9;
                grid-column: 2/7;
            }
        }

        @media screen and (max-width: 1023px) {
            .Canvas-Layout .Canvas-Footer .DCP-Layout {
                display: block;
            }
        }

        .Card__overlay {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background: hsla(0, 0%, 100%, 0.92);
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 9001;
        }

        .Context__header-icon {
            height: 18px;
            margin-right: 8px;
        }

        @media screen and (min-width: 1280px) {
            .Context__header-icon {
                height: 40px;
                margin-right: 16px;
            }
        }

        .DCP-Layout {
            display: -ms-grid;
            display: grid;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -moz-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
            -ms-grid-rows: 100%;
            grid-template-rows: 100%;
            -ms-grid-columns: minmax(1fr, -webkit-min-content);
            -ms-grid-columns: minmax(1fr, min-content);
            grid-template-columns: minmax(1fr, -webkit-min-content);
            grid-template-columns: minmax(1fr, min-content);
        }

        .Canvas-Header {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0 16px;
            color: #747474;
            background-color: #fff;
            border-bottom: 1px solid transparent;
        }

        .Canvas-Footer {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px 16px;
            color: #747474;
            background-color: #fff;
            border-top: 1px solid transparent;
        }

        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        footer,
        header,
        section {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        img {
            border-style: none;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        .react-spectrum-provider {
            position: relative;
        }

        .spectrum--lightest {
            background-color: #fff;
        }

        .spectrum {
            font-family: adobe-clean, Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
            font-size: 14px;
        }

        .spectrum-Heading1 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1 {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
        }

        .spectrum--lightest {
            color: #505050;
        }

        noscript:not(:empty)~.CardLayout {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .CardLayout {
            background: #fff;
            border-radius: 4px;
            border: 1px solid hsla(0, 0%, 100%, 0);
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: 100%;
            padding: 24px 0 40px;
            position: relative;
        }

        .CardLayout,
        .CardLayout-Container {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .CardLayout-Toaster-Container {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .CardLayout__header h1 {
            margin: 0;
        }

        .CardLayout__content {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        @media screen and (min-width: 510px) {
            .CardLayout {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                min-height: 630px;
                padding: 24px 56px 40px;
            }

            .CardLayout-Container {
                padding: 16px 0;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -moz-box-orient: vertical;
                -moz-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -moz-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        @media screen and (min-width: 1024px) {
            .CardLayout {
                padding: 40px 56px;
            }
        }

        .DeeplinkPage .Card__overlay {
            height: 100vh;
        }

        @media screen and (min-width: 768px) {
            .DeeplinkPage .Card__overlay {
                height: auto;
            }
        }

        #App,
        #UnsupportedBrowser,
        .spectrum,
        html {
            height: 100%;
            overflow: hidden;
        }

        body {
            margin: 0;
        }

        #UnsupportedBrowser .Canvas {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_113489662_XL.jpg);
        }

        #UnsupportedBrowser .Canvas-Background {
            position: relative;
        }

        #UnsupportedBrowser .Canvas-Item.Canvas-Panel {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 510px;
            height: 630px;
            margin-left: -255px;
            margin-top: -315px;
        }

        #UnsupportedBrowser .CardLayout {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-color: #fff;
            width: 510px;
            height: 630px;
            padding: 40px 56px;
        }

        #UnsupportedBrowser .Context__header-icon {
            max-height: 18px;
        }

        @media (min-width: 304px) {
            .mb-xs-1 {
                margin-bottom: 8px !important;
            }

            .mt-xs-2 {
                margin-top: 16px !important;
            }
        }

    </style>
    <style>
        .spectrum--darkest .ActionList-Item:focus,
        .spectrum--darkest .ActionList-Item:hover {
            background-color: #1a1a1a;
        }

        .spectrum--darkest .ActionList-Item:focus .Profile-Type,
        .spectrum--darkest .ActionList-Item:hover .Profile-Type {
            color: #e2e2e2;
        }

        .spectrum--darkest .ActionList-Item:focus svg,
        .spectrum--darkest .ActionList-Item:hover svg {
            fill: #e2e2e2;
        }

        .spectrum--darkest .ActionList-Item:not(:last-child):after {
            background-color: #393939;
        }

        .ActionList-Item {
            border-left: 6px solid transparent;
            margin-bottom: 1px;
            position: relative;
        }

        .ActionList-Item:hover {
            cursor: pointer;
        }

        .ActionList-Item:not(:last-child):after {
            background-color: #eaeaea;
            bottom: -1px;
            content: '';
            display: block;
            height: 1px;
            left: 16px;
            position: absolute;
            right: 16px;
        }

        .ActionList-Item svg {
            fill: #747474;
        }

        .ActionList-Item:focus,
        .ActionList-Item:hover {
            background-color: #f2f2f2;
            color: #323232;
            outline: 0;
        }

        .ActionList-Item:focus svg,
        .ActionList-Item:hover svg {
            fill: #505050;
        }

        .ActionList-Item:focus .Profile-Recommended,
        .ActionList-Item:focus .Profile-Type,
        .ActionList-Item:hover .Profile-Recommended,
        .ActionList-Item:hover .Profile-Type {
            color: #323232;
        }

        .ActionList-Item:focus {
            border-left-color: #2680eb;
        }

        .ActionList-Item__content {
            width: -webkit-calc(100% - 76px);
            width: calc(100% - 76px);
        }

        .ActionList-Item__icon {
            max-height: 36px;
            max-width: 36px;
            padding-left: 30px;
        }

        .ActionList-Item__container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 24px 16px 24px 10px;
        }

        .ActionList-Item-Disabled {
            opacity: 0.2;
        }

        @media screen and (min-width: 768px) {
            .CardLayout__content--full-width {
                margin: 0 -56px;
            }

            .ActionList-Item:not(:last-child):after {
                left: 56px;
                right: 56px;
            }

            .ActionList-Item__container {
                padding: 24px 40px 24px 50px;
            }
        }

        .spectrum-Icon,
        .spectrum-UIIcon {
            display: inline-block;
            color: inherit;
            fill: currentColor;
            pointer-events: none;
        }

        .spectrum-Icon:not(:root),
        .spectrum-UIIcon:not(:root) {
            overflow: hidden;
        }

        .spectrum-Icon--sizeS,
        .spectrum-Icon--sizeS img,
        .spectrum-Icon--sizeS svg {
            height: 18px;
            width: 18px;
        }

        .spectrum-Icon--sizeM,
        .spectrum-Icon--sizeM img,
        .spectrum-Icon--sizeM svg {
            height: 24px;
            width: 24px;
        }

        .spectrum-Icon--sizeL,
        .spectrum-Icon--sizeL img,
        .spectrum-Icon--sizeL svg {
            height: 36px;
            width: 36px;
        }

        .spectrum--medium .spectrum-UIIcon--large {
            display: none;
        }

        .spectrum--medium .spectrum-UIIcon--medium {
            display: inline;
        }

        .spectrum--large .spectrum-UIIcon--medium {
            display: none;
        }

        .spectrum--large .spectrum-UIIcon--large {
            display: inline;
        }

        .spectrum-UIIcon--large,
        .spectrum-UIIcon--medium {
            display: undefined;
        }

        .spectrum-UIIcon-AlertMedium {
            width: 18px;
            height: 18px;
        }

        .spectrum-UIIcon-Asterisk {
            width: 8px;
            height: 8px;
        }

        .spectrum-UIIcon-CheckmarkMedium {
            width: 12px;
            height: 12px;
        }

        .spectrum-UIIcon-CheckmarkSmall {
            width: 10px;
            height: 10px;
        }

        .spectrum-UIIcon-ChevronDownMedium {
            width: 10px;
            height: 6px;
        }

        .spectrum-UIIcon-ChevronRightMedium {
            width: 6px;
            height: 10px;
        }

        .spectrum-UIIcon-ChevronRightSmall {
            width: 6px;
            height: 8px;
        }

        .spectrum-UIIcon-CornerTriangle {
            width: 5px;
            height: 5px;
        }

        .spectrum-UIIcon-CrossLarge {
            width: 12px;
            height: 12px;
        }

        .spectrum-UIIcon-CrossMedium {
            width: 8px;
            height: 8px;
        }

        .spectrum-UIIcon-DashSmall {
            width: 10px;
            height: 10px;
        }

        .spectrum-UIIcon-HelpMedium {
            width: 18px;
            height: 18px;
        }

        .spectrum-UIIcon-InfoMedium {
            width: 18px;
            height: 18px;
        }

        .spectrum-UIIcon-Star,
        .spectrum-UIIcon-SuccessMedium {
            width: 18px;
            height: 18px;
        }

        .spectrum-Button--block {
            display: block;
        }

        .spectrum-ActionButton,
        .spectrum-Button,
        .spectrum-ClearButton,
        .spectrum-FieldButton,
        .spectrum-LogicButton,
        .spectrum-Tool {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -ms-flex-pack: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            justify-content: center;
            overflow: visible;
            margin: 0;
            border-style: solid;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-appearance: button;
            vertical-align: top;
            -webkit-transition: background 0.13s ease-out, border-color 0.13s ease-out, color 0.13s ease-out, -webkit-box-shadow 0.13s ease-out;
            transition: background 0.13s ease-out, border-color 0.13s ease-out, color 0.13s ease-out, -webkit-box-shadow 0.13s ease-out;
            -o-transition: background 0.13s ease-out, border-color 0.13s ease-out, color 0.13s ease-out, box-shadow 0.13s ease-out;
            transition: background 0.13s ease-out, border-color 0.13s ease-out, color 0.13s ease-out, box-shadow 0.13s ease-out;
            transition: background 0.13s ease-out, border-color 0.13s ease-out, color 0.13s ease-out, box-shadow 0.13s ease-out, -webkit-box-shadow 0.13s ease-out;
            text-decoration: none;
            font-family: adobe-clean-ux, adobe-clean, Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
            line-height: 1.3;
            cursor: pointer;
        }

        .spectrum-ActionButton:focus,
        .spectrum-Button:focus,
        .spectrum-ClearButton:focus,
        .spectrum-FieldButton:focus,
        .spectrum-LogicButton:focus,
        .spectrum-Tool:focus {
            outline: 0;
        }

        .spectrum-ActionButton::-moz-focus-inner,
        .spectrum-Button::-moz-focus-inner,
        .spectrum-ClearButton::-moz-focus-inner,
        .spectrum-FieldButton::-moz-focus-inner,
        .spectrum-LogicButton::-moz-focus-inner,
        .spectrum-Tool::-moz-focus-inner {
            border: 0;
            border-style: none;
            padding: 0;
            margin-top: -2px;
            margin-bottom: -2px;
        }

        .spectrum-ActionButton:disabled,
        .spectrum-Button:disabled,
        .spectrum-ClearButton:disabled,
        .spectrum-FieldButton:disabled,
        .spectrum-LogicButton:disabled,
        .spectrum-Tool:disabled {
            cursor: default;
        }

        .spectrum-ActionButton .spectrum-Icon,
        .spectrum-Button .spectrum-Icon,
        .spectrum-ClearButton .spectrum-Icon,
        .spectrum-FieldButton .spectrum-Icon,
        .spectrum-LogicButton .spectrum-Icon,
        .spectrum-Tool .spectrum-Icon {
            max-height: 100%;
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
        }

        .spectrum-Button {
            border-width: 2px;
            border-style: solid;
            border-radius: 16px;
            min-height: 32px;
            height: auto;
            min-width: 72px;
            padding: 3.5px 14px 4.5px;
            font-size: 14px;
            font-weight: 700;
        }

        .spectrum-Button:active,
        .spectrum-Button:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum-Button .spectrum-Icon+.spectrum-Button-label {
            margin-left: 8px;
        }

        .spectrum-Button .spectrum-Button-label+.spectrum-Icon {
            margin-left: 4px;
        }

        a.spectrum-ActionButton,
        a.spectrum-Button {
            -webkit-appearance: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .spectrum-ActionButton,
        .spectrum-Tool {
            position: relative;
            height: 32px;
            min-width: 32px;
            padding: 0 6px;
            border-width: 1px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 400;
        }

        .spectrum-ActionButton .spectrum-Icon+.spectrum-ActionButton-label,
        .spectrum-Tool .spectrum-Icon+.spectrum-ActionButton-label {
            padding-left: 7px;
            padding-right: 5px;
        }

        .spectrum-ActionButton .spectrum-Icon--sizeS:only-child,
        .spectrum-Tool .spectrum-Icon--sizeS:only-child {
            position: absolute;
            top: -webkit-calc(50% - 9px);
            top: calc(50% - 9px);
            left: -webkit-calc(50% - 9px);
            left: calc(50% - 9px);
        }

        .spectrum-ActionButton .spectrum-ActionButton-label:only-child,
        .spectrum-Tool .spectrum-ActionButton-label:only-child {
            padding: 0 5px;
        }

        .spectrum-ActionButton-hold {
            position: absolute;
            right: 3px;
            bottom: 3px;
        }

        .spectrum-ActionButton-label,
        .spectrum-Button-label {
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            -webkit-align-self: center;
            align-self: center;
            -ms-grid-column-align: center;
            justify-self: center;
            text-align: center;
            width: 100%;
        }

        .spectrum-ActionButton-label:empty,
        .spectrum-Button-label:empty {
            display: none;
        }

        .spectrum-ActionButton-label {
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }

        .spectrum-ActionButton--quiet,
        .spectrum-Tool {
            border-width: 1px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 400;
        }

        .spectrum-LogicButton {
            height: 24px;
            padding: 8px;
            border-width: 2px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 700;
            line-height: 0;
        }

        .spectrum-FieldButton {
            height: 32px;
            font-family: inherit;
            font-weight: 400;
            font-size: 14px;
            line-height: normal;
            -webkit-font-smoothing: initial;
            cursor: pointer;
            outline: 0;
            margin: 0;
            padding: 0 12px;
            border-width: 1px;
            border-style: solid;
            border-radius: 4px;
            -webkit-transition: background-color 0.13s, border-color 0.13s, -webkit-box-shadow 0.13s;
            transition: background-color 0.13s, border-color 0.13s, -webkit-box-shadow 0.13s;
            -o-transition: background-color 0.13s, box-shadow 0.13s, border-color 0.13s;
            transition: background-color 0.13s, box-shadow 0.13s, border-color 0.13s;
            transition: background-color 0.13s, box-shadow 0.13s, border-color 0.13s, -webkit-box-shadow 0.13s;
        }

        .spectrum-FieldButton.is-disabled,
        .spectrum-FieldButton:disabled {
            border-width: 0;
            cursor: default;
        }

        .spectrum-FieldButton.is-open {
            border-width: 1px;
        }

        .spectrum-FieldButton--quiet {
            margin: 0;
            padding: 0;
            border-width: 0;
            border-radius: 0;
        }

        .spectrum-ClearButton {
            width: 32px;
            height: 32px;
            border-radius: 100%;
            padding: 0;
            margin: 0;
            border: none;
        }

        .spectrum-ClearButton>.spectrum-Icon {
            margin: 0 auto;
        }

        .spectrum-ClearButton--small {
            width: 24px;
            height: 24px;
        }

        .spectrum-Tool {
            position: relative;
            -ms-flex-pack: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            padding: 0;
        }

        .spectrum-Tool-hold {
            position: absolute;
            right: 3px;
            bottom: 3px;
        }

        .spectrum-Button+.spectrum-Button {
            margin-left: 16px;
        }

        .spectrum-ActionButton+.spectrum-ActionButton,
        .spectrum-Tool+.spectrum-Tool {
            margin-left: 8px;
        }

        .spectrum-Tool+.spectrum-Tool {
            margin-left: 8px;
        }

        @media (-ms-high-contrast: none),
        screen and (-ms-high-contrast: active) {
            .spectrum-ClearButton>.spectrum-Icon {
                margin: 0;
            }
        }

        .spectrum--lightest .spectrum-Button.focus-ring {
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--lightest .spectrum-Button:active {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-ClearButton {
            background-color: rgba(0, 0, 0, 0);
            color: #747474;
        }

        .spectrum--lightest .spectrum-ClearButton:hover {
            background-color: rgba(0, 0, 0, 0);
            color: #323232;
        }

        .spectrum--lightest .spectrum-ClearButton:active {
            background-color: rgba(0, 0, 0, 0);
            color: #323232;
        }

        .spectrum--lightest .spectrum-ClearButton.focus-ring {
            background-color: rgba(0, 0, 0, 0);
            color: #323232;
        }

        .spectrum--lightest .spectrum-ClearButton.is-disabled,
        .spectrum--lightest .spectrum-ClearButton:disabled {
            background-color: rgba(0, 0, 0, 0);
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Button--cta {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--cta:hover {
            background-color: #0d66d0;
            border-color: #0d66d0;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--cta.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--cta:active {
            background-color: #0d66d0;
            border-color: #0d66d0;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--cta.is-disabled,
        .spectrum--lightest .spectrum-Button--cta:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--primary {
            background-color: rgba(0, 0, 0, 0);
            border-color: #505050;
            color: #505050;
        }

        .spectrum--lightest .spectrum-Button--primary:hover {
            background-color: #505050;
            border-color: #505050;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--primary.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--primary:active {
            background-color: #323232;
            border-color: #323232;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--primary.is-disabled,
        .spectrum--lightest .spectrum-Button--primary:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--secondary {
            background-color: rgba(0, 0, 0, 0);
            border-color: #747474;
            color: #747474;
        }

        .spectrum--lightest .spectrum-Button--secondary:hover {
            background-color: #747474;
            border-color: #747474;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--secondary.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--secondary:active {
            background-color: #505050;
            border-color: #505050;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--secondary.is-disabled,
        .spectrum--lightest .spectrum-Button--secondary:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--warning {
            background-color: rgba(0, 0, 0, 0);
            border-color: #d7373f;
            color: #d7373f;
        }

        .spectrum--lightest .spectrum-Button--warning:hover {
            background-color: #d7373f;
            border-color: #d7373f;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--warning.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--warning:active {
            background-color: #c9252d;
            border-color: #c9252d;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--warning.is-disabled,
        .spectrum--lightest .spectrum-Button--warning:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--overBackground {
            background-color: rgba(0, 0, 0, 0);
            border-color: #fff;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--overBackground:hover {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
        }

        .spectrum--lightest .spectrum-Button--overBackground.focus-ring {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: 0 0 0 1px #fff;
            box-shadow: 0 0 0 1px #fff;
        }

        .spectrum--lightest .spectrum-Button--overBackground:active {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-Button--overBackground.is-disabled,
        .spectrum--lightest .spectrum-Button--overBackground:disabled {
            background-color: hsla(0, 0%, 100%, 0.1);
            border-color: transparent;
            color: hsla(0, 0%, 100%, 0.35);
        }

        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet,
        .spectrum--lightest .spectrum-ClearButton--overBackground {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet:hover,
        .spectrum--lightest .spectrum-ClearButton--overBackground:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
            border-color: transparent;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet.focus-ring,
        .spectrum--lightest .spectrum-ClearButton--overBackground.focus-ring {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: 0 0 0 1px #fff;
            box-shadow: 0 0 0 1px #fff;
        }

        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet:active,
        .spectrum--lightest .spectrum-ClearButton--overBackground:active {
            background-color: hsla(0, 0%, 100%, 0.15);
            border-color: transparent;
            color: #fff;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet.is-disabled,
        .spectrum--lightest .spectrum-Button--overBackground.spectrum-Button--quiet:disabled,
        .spectrum--lightest .spectrum-ClearButton--overBackground.is-disabled,
        .spectrum--lightest .spectrum-ClearButton--overBackground:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: hsla(0, 0%, 100%, 0.15);
        }

        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #505050;
        }

        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet:hover {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #323232;
        }

        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet:active {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #323232;
        }

        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet.is-disabled,
        .spectrum--lightest .spectrum-Button--primary.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #747474;
        }

        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet:hover {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #505050;
        }

        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet:active {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #505050;
        }

        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet.is-disabled,
        .spectrum--lightest .spectrum-Button--secondary.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ActionButton,
        .spectrum--lightest .spectrum-Tool {
            background-color: #fff;
            border-color: #eaeaea;
            color: #505050;
        }

        .spectrum--lightest .spectrum-ActionButton .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-ActionButton .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-Tool .spectrum-Icon {
            color: #747474;
        }

        .spectrum--lightest .spectrum-ActionButton:hover,
        .spectrum--lightest .spectrum-Tool:hover {
            background-color: #fff;
            border-color: #d3d3d3;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton:hover .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool:hover .spectrum-Icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton:hover .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-Tool:hover .spectrum-ActionButton-hold {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.focus-ring,
        .spectrum--lightest .spectrum-Tool.focus-ring {
            background-color: #fff;
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.focus-ring .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-ActionButton.focus-ring .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool.focus-ring .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-Tool.focus-ring .spectrum-Icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton:active,
        .spectrum--lightest .spectrum-Tool:active {
            background-color: #f4f4f4;
            border-color: #d3d3d3;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton:active .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-Tool:active .spectrum-ActionButton-hold {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-disabled,
        .spectrum--lightest .spectrum-ActionButton:disabled,
        .spectrum--lightest .spectrum-Tool:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ActionButton.is-disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-ActionButton:disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool:disabled .spectrum-Icon {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ActionButton.is-disabled .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-ActionButton:disabled .spectrum-ActionButton-hold,
        .spectrum--lightest .spectrum-Tool:disabled .spectrum-ActionButton-hold {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected {
            background-color: #f4f4f4;
            border-color: #eaeaea;
            color: #505050;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected .spectrum-Icon {
            color: #747474;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected.focus-ring {
            background-color: #f4f4f4;
            border-color: #378ef0;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected.focus-ring .spectrum-Icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected:hover {
            background-color: #f4f4f4;
            border-color: #d3d3d3;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected:hover .spectrum-Icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected:active {
            background-color: #f4f4f4;
            border-color: #d3d3d3;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected:active .spectrum-Icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected.is-disabled,
        .spectrum--lightest .spectrum-ActionButton.is-selected:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ActionButton.is-selected.is-disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-ActionButton.is-selected:disabled .spectrum-Icon {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet,
        .spectrum--lightest .spectrum-Tool {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #505050;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet:hover,
        .spectrum--lightest .spectrum-Tool:hover {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #323232;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.focus-ring,
        .spectrum--lightest .spectrum-Tool.focus-ring {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
            border-color: #378ef0;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet:active,
        .spectrum--lightest .spectrum-Tool:active {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #323232;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-disabled,
        .spectrum--lightest .spectrum-ActionButton--quiet:disabled,
        .spectrum--lightest .spectrum-Tool:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #505050;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected.focus-ring {
            background-color: #eaeaea;
            border-color: #378ef0;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected:hover {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected:active {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #323232;
        }

        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected.is-disabled,
        .spectrum--lightest .spectrum-ActionButton--quiet.is-selected:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #d7373f;
        }

        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet:hover {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #c9252d;
        }

        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet:active {
            background-color: #eaeaea;
            border-color: #eaeaea;
            color: #c9252d;
        }

        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet.is-disabled,
        .spectrum--lightest .spectrum-Button--warning.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-LogicButton--and {
            background-color: #2680eb;
            border-color: #2680eb;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--and:hover {
            background-color: #0d66d0;
            border-color: #0d66d0;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--and.focus-ring {
            background-color: #0d66d0;
            border-color: #378ef0;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--and.is-disabled,
        .spectrum--lightest .spectrum-LogicButton--and:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-LogicButton--or {
            background-color: #d83790;
            border-color: #d83790;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--or:hover {
            background-color: #bc1c74;
            border-color: #bc1c74;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--or.focus-ring {
            background-color: #bc1c74;
            border-color: #378ef0;
            color: #fff;
        }

        .spectrum--lightest .spectrum-LogicButton--or.is-disabled,
        .spectrum--lightest .spectrum-LogicButton--or:disabled {
            background-color: #f4f4f4;
            border-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-FieldButton {
            color: #505050;
            background-color: #fff;
            border-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-FieldButton:hover {
            color: #323232;
            background-color: #fff;
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-FieldButton.focus-ring,
        .spectrum--lightest .spectrum-FieldButton.is-focused {
            background-color: #fff;
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
            color: #323232;
        }

        .spectrum--lightest .spectrum-FieldButton.focus-ring.is-placeholder,
        .spectrum--lightest .spectrum-FieldButton.is-focused.is-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-FieldButton.is-selected,
        .spectrum--lightest .spectrum-FieldButton:active {
            background-color: #f4f4f4;
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-FieldButton.is-selected.focus-ring,
        .spectrum--lightest .spectrum-FieldButton.is-selected.is-focused,
        .spectrum--lightest .spectrum-FieldButton:active.focus-ring,
        .spectrum--lightest .spectrum-FieldButton:active.is-focused {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-FieldButton.is-invalid {
            border-color: #e34850;
        }

        .spectrum--lightest .spectrum-FieldButton.is-invalid:hover {
            border-color: #d7373f;
        }

        .spectrum--lightest .spectrum-FieldButton.is-invalid.is-selected,
        .spectrum--lightest .spectrum-FieldButton.is-invalid:active {
            border-color: #d7373f;
        }

        .spectrum--lightest .spectrum-FieldButton.is-invalid.focus-ring,
        .spectrum--lightest .spectrum-FieldButton.is-invalid.is-focused {
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
        }

        .spectrum--lightest .spectrum-FieldButton.is-disabled,
        .spectrum--lightest .spectrum-FieldButton:disabled {
            background-color: #f4f4f4;
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-FieldButton.is-disabled.focus-ring,
        .spectrum--lightest .spectrum-FieldButton:disabled.focus-ring {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-FieldButton.is-disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-FieldButton:disabled .spectrum-Icon {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet {
            color: #505050;
            border-color: transparent;
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--lightest .spectrum-FieldButton--quiet:hover {
            background-color: rgba(0, 0, 0, 0);
            color: #323232;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.focus-ring,
        .spectrum--lightest .spectrum-FieldButton--quiet.is-focused {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 2px 0 0 #378ef0;
            box-shadow: 0 2px 0 0 #378ef0;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.focus-ring.is-placeholder,
        .spectrum--lightest .spectrum-FieldButton--quiet.is-focused.is-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.is-selected,
        .spectrum--lightest .spectrum-FieldButton--quiet:active {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.is-selected.focus-ring,
        .spectrum--lightest .spectrum-FieldButton--quiet.is-selected.is-focused,
        .spectrum--lightest .spectrum-FieldButton--quiet:active.focus-ring,
        .spectrum--lightest .spectrum-FieldButton--quiet:active.is-focused {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 2px 0 0 #378ef0;
            box-shadow: 0 2px 0 0 #378ef0;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.is-invalid.focus-ring,
        .spectrum--lightest .spectrum-FieldButton--quiet.is-invalid.is-focused {
            -webkit-box-shadow: 0 2px 0 0 #378ef0;
            box-shadow: 0 2px 0 0 #378ef0;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.is-disabled,
        .spectrum--lightest .spectrum-FieldButton--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-FieldButton--quiet.is-disabled.focus-ring,
        .spectrum--lightest .spectrum-FieldButton--quiet:disabled.focus-ring {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-Tool.is-selected .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool.is-selected .spectrum-Tool-hold {
            color: #2680eb;
        }

        .spectrum--lightest .spectrum-Tool.is-selected:hover .spectrum-Icon {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Tool.is-selected:hover .spectrum-Tool-hold {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Tool.is-selected:active .spectrum-Icon {
            color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Tool.is-selected:active .spectrum-Tool-hold {
            color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Tool.is-selected.focus-ring .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool.is-selected.focus-ring .spectrum-Tool-hold {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Tool.is-selected.is-disabled,
        .spectrum--lightest .spectrum-Tool.is-selected:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--lightest .spectrum-Tool.is-selected.is-disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-Tool.is-selected:disabled .spectrum-Icon {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Tool.is-selected.is-disabled .spectrum-Tool-hold,
        .spectrum--lightest .spectrum-Tool.is-selected:disabled .spectrum-Tool-hold {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Tool .spectrum-Tool-hold {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Tool:hover .spectrum-Tool-hold {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Tool:active {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--lightest .spectrum-Tool:active .spectrum-Tool-hold {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Tool.focus-ring .spectrum-Tool-hold {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Tool.is-disabled .spectrum-Tool-hold,
        .spectrum--lightest .spectrum-Tool:disabled .spectrum-Tool-hold {
            color: #d3d3d3;
        }

        .spectrum--darkest .spectrum-Button.focus-ring {
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--darkest .spectrum-Button:active {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-ClearButton {
            background-color: rgba(0, 0, 0, 0);
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ClearButton:hover {
            background-color: rgba(0, 0, 0, 0);
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ClearButton:active {
            background-color: rgba(0, 0, 0, 0);
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ClearButton.focus-ring {
            background-color: rgba(0, 0, 0, 0);
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ClearButton.is-disabled,
        .spectrum--darkest .spectrum-ClearButton:disabled {
            background-color: rgba(0, 0, 0, 0);
            color: #494949;
        }

        .spectrum--darkest .spectrum-Button--cta {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--cta:hover {
            background-color: #0d66d0;
            border-color: #0d66d0;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--cta.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--cta:active {
            background-color: #0d66d0;
            border-color: #0d66d0;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--cta.is-disabled,
        .spectrum--darkest .spectrum-Button--cta:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--primary {
            background-color: rgba(0, 0, 0, 0);
            border-color: #c8c8c8;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Button--primary:hover {
            background-color: #c8c8c8;
            border-color: #c8c8c8;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--primary.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--primary:active {
            background-color: #efefef;
            border-color: #efefef;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--primary.is-disabled,
        .spectrum--darkest .spectrum-Button--primary:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--secondary {
            background-color: rgba(0, 0, 0, 0);
            border-color: #a2a2a2;
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Button--secondary:hover {
            background-color: #a2a2a2;
            border-color: #a2a2a2;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--secondary.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--secondary:active {
            background-color: #c8c8c8;
            border-color: #c8c8c8;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--secondary.is-disabled,
        .spectrum--darkest .spectrum-Button--secondary:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--warning {
            background-color: rgba(0, 0, 0, 0);
            border-color: #ec5b62;
            color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Button--warning:hover {
            background-color: #ec5b62;
            border-color: #ec5b62;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--warning.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--warning:active {
            background-color: #f76d74;
            border-color: #f76d74;
            color: #080808;
        }

        .spectrum--darkest .spectrum-Button--warning.is-disabled,
        .spectrum--darkest .spectrum-Button--warning:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--overBackground {
            background-color: rgba(0, 0, 0, 0);
            border-color: #fff;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--overBackground:hover {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
        }

        .spectrum--darkest .spectrum-Button--overBackground.focus-ring {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: 0 0 0 1px #fff;
            box-shadow: 0 0 0 1px #fff;
        }

        .spectrum--darkest .spectrum-Button--overBackground:active {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-Button--overBackground.is-disabled,
        .spectrum--darkest .spectrum-Button--overBackground:disabled {
            background-color: hsla(0, 0%, 100%, 0.1);
            border-color: transparent;
            color: hsla(0, 0%, 100%, 0.35);
        }

        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet,
        .spectrum--darkest .spectrum-ClearButton--overBackground {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet:hover,
        .spectrum--darkest .spectrum-ClearButton--overBackground:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
            border-color: transparent;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet.focus-ring,
        .spectrum--darkest .spectrum-ClearButton--overBackground.focus-ring {
            background-color: #fff;
            border-color: #fff;
            color: inherit;
            -webkit-box-shadow: 0 0 0 1px #fff;
            box-shadow: 0 0 0 1px #fff;
        }

        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet:active,
        .spectrum--darkest .spectrum-ClearButton--overBackground:active {
            background-color: hsla(0, 0%, 100%, 0.15);
            border-color: transparent;
            color: #fff;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet.is-disabled,
        .spectrum--darkest .spectrum-Button--overBackground.spectrum-Button--quiet:disabled,
        .spectrum--darkest .spectrum-ClearButton--overBackground.is-disabled,
        .spectrum--darkest .spectrum-ClearButton--overBackground:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: hsla(0, 0%, 100%, 0.15);
        }

        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet:hover {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet:active {
            background-color: #393939;
            border-color: #393939;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet.is-disabled,
        .spectrum--darkest .spectrum-Button--primary.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet:hover {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet:active {
            background-color: #393939;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet.is-disabled,
        .spectrum--darkest .spectrum-Button--secondary.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ActionButton,
        .spectrum--darkest .spectrum-Tool {
            background-color: #1a1a1a;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ActionButton .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-ActionButton .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-Tool .spectrum-Icon {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ActionButton:hover,
        .spectrum--darkest .spectrum-Tool:hover {
            background-color: #080808;
            border-color: #494949;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton:hover .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool:hover .spectrum-Icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton:hover .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-Tool:hover .spectrum-ActionButton-hold {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.focus-ring,
        .spectrum--darkest .spectrum-Tool.focus-ring {
            background-color: #080808;
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.focus-ring .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-ActionButton.focus-ring .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool.focus-ring .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-Tool.focus-ring .spectrum-Icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton:active,
        .spectrum--darkest .spectrum-Tool:active {
            background-color: #2c2c2c;
            border-color: #494949;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton:active .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-Tool:active .spectrum-ActionButton-hold {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-disabled,
        .spectrum--darkest .spectrum-ActionButton:disabled,
        .spectrum--darkest .spectrum-Tool:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ActionButton.is-disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-ActionButton:disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool:disabled .spectrum-Icon {
            color: #494949;
        }

        .spectrum--darkest .spectrum-ActionButton.is-disabled .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-ActionButton:disabled .spectrum-ActionButton-hold,
        .spectrum--darkest .spectrum-Tool:disabled .spectrum-ActionButton-hold {
            color: #494949;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected {
            background-color: #2c2c2c;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected .spectrum-Icon {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected.focus-ring {
            background-color: #2c2c2c;
            border-color: #1473e6;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected.focus-ring .spectrum-Icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected:hover {
            background-color: #2c2c2c;
            border-color: #494949;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected:hover .spectrum-Icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected:active {
            background-color: #2c2c2c;
            border-color: #494949;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected:active .spectrum-Icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected.is-disabled,
        .spectrum--darkest .spectrum-ActionButton.is-selected:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ActionButton.is-selected.is-disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-ActionButton.is-selected:disabled .spectrum-Icon {
            color: #494949;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet,
        .spectrum--darkest .spectrum-Tool {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet:hover,
        .spectrum--darkest .spectrum-Tool:hover {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #efefef;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.focus-ring,
        .spectrum--darkest .spectrum-Tool.focus-ring {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
            border-color: #1473e6;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet:active,
        .spectrum--darkest .spectrum-Tool:active {
            background-color: #393939;
            border-color: #393939;
            color: #efefef;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-disabled,
        .spectrum--darkest .spectrum-ActionButton--quiet:disabled,
        .spectrum--darkest .spectrum-Tool:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected {
            background-color: #393939;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected.focus-ring {
            background-color: #393939;
            border-color: #1473e6;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected:hover {
            background-color: #393939;
            border-color: #393939;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected:active {
            background-color: #393939;
            border-color: #393939;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected.is-disabled,
        .spectrum--darkest .spectrum-ActionButton--quiet.is-selected:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet:hover {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #f76d74;
        }

        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet.focus-ring {
            background-color: #1473e6;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet:active {
            background-color: #393939;
            border-color: #393939;
            color: #f76d74;
        }

        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet.is-disabled,
        .spectrum--darkest .spectrum-Button--warning.spectrum-Button--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-LogicButton--and {
            background-color: #2680eb;
            border-color: #2680eb;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--and:hover {
            background-color: #4b9cf5;
            border-color: #4b9cf5;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--and.focus-ring {
            background-color: #4b9cf5;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--and.is-disabled,
        .spectrum--darkest .spectrum-LogicButton--and:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-LogicButton--or {
            background-color: #d83790;
            border-color: #d83790;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--or:hover {
            background-color: #ec5aaa;
            border-color: #ec5aaa;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--or.focus-ring {
            background-color: #ec5aaa;
            border-color: #1473e6;
            color: #fff;
        }

        .spectrum--darkest .spectrum-LogicButton--or.is-disabled,
        .spectrum--darkest .spectrum-LogicButton--or:disabled {
            background-color: #2c2c2c;
            border-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-FieldButton {
            color: #c8c8c8;
            background-color: #1a1a1a;
            border-color: #393939;
        }

        .spectrum--darkest .spectrum-FieldButton:hover {
            color: #efefef;
            background-color: #080808;
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-FieldButton.focus-ring,
        .spectrum--darkest .spectrum-FieldButton.is-focused {
            background-color: #080808;
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
            color: #efefef;
        }

        .spectrum--darkest .spectrum-FieldButton.focus-ring.is-placeholder,
        .spectrum--darkest .spectrum-FieldButton.is-focused.is-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-FieldButton.is-selected,
        .spectrum--darkest .spectrum-FieldButton:active {
            background-color: #2c2c2c;
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-FieldButton.is-selected.focus-ring,
        .spectrum--darkest .spectrum-FieldButton.is-selected.is-focused,
        .spectrum--darkest .spectrum-FieldButton:active.focus-ring,
        .spectrum--darkest .spectrum-FieldButton:active.is-focused {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-FieldButton.is-invalid {
            border-color: #e34850;
        }

        .spectrum--darkest .spectrum-FieldButton.is-invalid:hover {
            border-color: #ec5b62;
        }

        .spectrum--darkest .spectrum-FieldButton.is-invalid.is-selected,
        .spectrum--darkest .spectrum-FieldButton.is-invalid:active {
            border-color: #ec5b62;
        }

        .spectrum--darkest .spectrum-FieldButton.is-invalid.focus-ring,
        .spectrum--darkest .spectrum-FieldButton.is-invalid.is-focused {
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--darkest .spectrum-FieldButton.is-disabled,
        .spectrum--darkest .spectrum-FieldButton:disabled {
            background-color: #2c2c2c;
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-FieldButton.is-disabled.focus-ring,
        .spectrum--darkest .spectrum-FieldButton:disabled.focus-ring {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-FieldButton.is-disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-FieldButton:disabled .spectrum-Icon {
            color: #494949;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet {
            color: #c8c8c8;
            border-color: transparent;
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--darkest .spectrum-FieldButton--quiet:hover {
            background-color: rgba(0, 0, 0, 0);
            color: #efefef;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.focus-ring,
        .spectrum--darkest .spectrum-FieldButton--quiet.is-focused {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 2px 0 0 #1473e6;
            box-shadow: 0 2px 0 0 #1473e6;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.focus-ring.is-placeholder,
        .spectrum--darkest .spectrum-FieldButton--quiet.is-focused.is-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.is-selected,
        .spectrum--darkest .spectrum-FieldButton--quiet:active {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.is-selected.focus-ring,
        .spectrum--darkest .spectrum-FieldButton--quiet.is-selected.is-focused,
        .spectrum--darkest .spectrum-FieldButton--quiet:active.focus-ring,
        .spectrum--darkest .spectrum-FieldButton--quiet:active.is-focused {
            background-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: 0 2px 0 0 #1473e6;
            box-shadow: 0 2px 0 0 #1473e6;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.is-invalid.focus-ring,
        .spectrum--darkest .spectrum-FieldButton--quiet.is-invalid.is-focused {
            -webkit-box-shadow: 0 2px 0 0 #1473e6;
            box-shadow: 0 2px 0 0 #1473e6;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.is-disabled,
        .spectrum--darkest .spectrum-FieldButton--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-FieldButton--quiet.is-disabled.focus-ring,
        .spectrum--darkest .spectrum-FieldButton--quiet:disabled.focus-ring {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-Tool.is-selected .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool.is-selected .spectrum-Tool-hold {
            color: #2680eb;
        }

        .spectrum--darkest .spectrum-Tool.is-selected:hover .spectrum-Icon {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Tool.is-selected:hover .spectrum-Tool-hold {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Tool.is-selected:active .spectrum-Icon {
            color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-Tool.is-selected:active .spectrum-Tool-hold {
            color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-Tool.is-selected.focus-ring .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool.is-selected.focus-ring .spectrum-Tool-hold {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Tool.is-selected.is-disabled,
        .spectrum--darkest .spectrum-Tool.is-selected:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--darkest .spectrum-Tool.is-selected.is-disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-Tool.is-selected:disabled .spectrum-Icon {
            color: #494949;
        }

        .spectrum--darkest .spectrum-Tool.is-selected.is-disabled .spectrum-Tool-hold,
        .spectrum--darkest .spectrum-Tool.is-selected:disabled .spectrum-Tool-hold {
            color: #494949;
        }

        .spectrum--darkest .spectrum-Tool .spectrum-Tool-hold {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Tool:hover .spectrum-Tool-hold {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Tool:active {
            background-color: rgba(0, 0, 0, 0);
            border-color: transparent;
        }

        .spectrum--darkest .spectrum-Tool:active .spectrum-Tool-hold {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Tool.focus-ring .spectrum-Tool-hold {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Tool.is-disabled .spectrum-Tool-hold,
        .spectrum--darkest .spectrum-Tool:disabled .spectrum-Tool-hold {
            color: #494949;
        }

        .spectrum--darkest .spectrum-ActionButton[data-social-button='true'] {
            color: #fff;
        }

        .spectrum--darkest .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple'],
        .spectrum--darkest .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple']:hover {
            border-color: #393939;
        }

        .spectrum-ActionButton[data-social-button='true'] {
            display: block;
            border-radius: 100px;
            border-width: 2px;
            color: #505050;
            font-weight: 700;
            height: auto;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 15px;
            min-height: 56px;
        }

        .spectrum-ActionButton[data-social-button='true'] [data-social-button-type='icon'] {
            display: inline-block;
            vertical-align: top;
            height: 18px;
            width: 18px;
        }

        .spectrum-ActionButton[data-social-button='true'] .spectrum-ActionButton-label {
            display: inline;
            vertical-align: top;
            font-size: 15px;
            font-weight: 900;
            line-height: 19px;
            padding-left: 12px;
            padding-right: 0;
            white-space: normal;
        }

        .spectrum-ActionButton[data-social-button='true']+.spectrum-ActionButton[data-social-button='true'] {
            margin: 16px 0 0;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='facebook'] {
            background-color: #1877f2;
            border-color: #1877f2;
            color: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='facebook'] svg {
            fill: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='facebook']:hover {
            background-color: #1877f2;
            border-color: #166fe5;
            color: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='facebook']:hover svg {
            fill: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple'] {
            background-color: #000;
            border-color: #000;
            color: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple'] svg {
            fill: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple']:hover {
            background-color: #000;
            border-color: #636366;
            color: #fff;
        }

        .spectrum-ActionButton[data-social-button='true'][data-social-button-provider='apple']:hover svg {
            fill: #fff;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] {
            border: none;
            display: inline-table;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'].is-selected,
        .spectrum-ActionButton[data-social-button-type='round-button'].is-selected:hover {
            background-color: #fff;
            border-color: #fff;
            color: #fff;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='google-img'] {
            border: 2px solid #eaeaea;
            background-color: #fff;
            border-radius: 50%;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='google-img']:hover {
            border: 2px solid #d3d3d3;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='facebook-img'] {
            max-height: 54px;
            border: 2px solid #1877f2;
            background-color: #1877f2;
            border-radius: 50%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='facebook-img']:hover {
            border-color: #166fe5;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='apple-img'] {
            border: 2px solid #000;
            background-color: #000;
            border-radius: 50%;
        }

        .spectrum-ActionButton[data-social-button-type='round-button'] [data-social-button-type='round-button'][data-social-button-function='apple-img']:hover {
            border-color: #636366;
        }

        [data-social-button-type='tooltip'] .spectrum-Tooltip-label {
            max-width: 180px;
        }

        [data-social-button-type='round-button-white'] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 50%;
            border: 2px solid #eaeaea;
            background-color: #fff;
            height: 54px;
            width: 54px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
        }

        [data-social-button-type='round-button-white'] svg {
            width: 28px;
            height: 28px;
        }

        .AuthenticationFactor-Destination:before {
            content: ' ';
        }

        .AuthenticationFactor-Detail {
            font-size: 12px;
        }

        .Destination {
            font-weight: 700;
            word-wrap: break-word;
            word-break: break-all;
        }

        .Destination--multi-line {
            display: block;
        }

        .spectrum-Link {
            background-color: rgba(0, 0, 0, 0);
            -webkit-text-decoration-skip: objects;
            text-decoration: none;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            outline: 0;
        }

        .spectrum-Link:hover {
            text-decoration: underline;
        }

        .spectrum-Link.focus-ring {
            text-decoration: underline;
            -webkit-text-decoration-style: double;
            -moz-text-decoration-style: double;
            text-decoration-style: double;
        }

        .spectrum-Link.is-disabled {
            cursor: default;
            pointer-events: none;
        }

        .spectrum-Link.is-disabled:focus,
        .spectrum-Link.is-disabled:hover {
            text-decoration: none;
        }

        .spectrum-Link--overBackground,
        .spectrum-Link--quiet,
        .spectrum-Link--subtle {
            text-decoration: underline;
        }

        .spectrum--lightest .spectrum-Link {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Link:hover {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Link:active {
            color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Link.focus-ring {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Link.is-disabled {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Link--quiet,
        .spectrum--lightest .spectrum-Link--subtle {
            color: inherit;
        }

        .spectrum--lightest .spectrum-Link--quiet:hover,
        .spectrum--lightest .spectrum-Link--subtle:hover {
            color: inherit;
        }

        .spectrum--lightest .spectrum-Link--quiet:active,
        .spectrum--lightest .spectrum-Link--subtle:active {
            color: inherit;
        }

        .spectrum--lightest .spectrum-Link--quiet:focus,
        .spectrum--lightest .spectrum-Link--subtle:focus {
            color: inherit;
        }

        .spectrum--lightest .spectrum-Link--overBackground {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Link--overBackground:hover {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Link--overBackground:active {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Link--overBackground:focus {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Link--overBackground.is-disabled {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .spectrum--darkest .spectrum-Link {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Link:hover {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Link:active {
            color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-Link.focus-ring {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Link.is-disabled {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Link--quiet,
        .spectrum--darkest .spectrum-Link--subtle {
            color: inherit;
        }

        .spectrum--darkest .spectrum-Link--quiet:hover,
        .spectrum--darkest .spectrum-Link--subtle:hover {
            color: inherit;
        }

        .spectrum--darkest .spectrum-Link--quiet:active,
        .spectrum--darkest .spectrum-Link--subtle:active {
            color: inherit;
        }

        .spectrum--darkest .spectrum-Link--quiet:focus,
        .spectrum--darkest .spectrum-Link--subtle:focus {
            color: inherit;
        }

        .spectrum--darkest .spectrum-Link--overBackground {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Link--overBackground:hover {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Link--overBackground:active {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Link--overBackground:focus {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Link--overBackground.is-disabled {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .spectrum-Toast {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-direction: row;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            flex-direction: row;
            -ms-flex-align: stretch;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -moz-box-align: stretch;
            align-items: stretch;
            border-radius: 4px;
            padding: 8px 8px 8px 16px;
            font-size: 14px;
            font-weight: 700;
            -webkit-font-smoothing: antialiased;
        }

        .spectrum-Toast-typeIcon {
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            -ms-flex-positive: 0;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            margin: 7px 12px 7px 0;
        }

        .spectrum-Toast-content {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            display: inline-block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 5px 16px 5px 0;
            text-align: left;
        }

        .spectrum-Toast-buttons {
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex: 0 0 auto;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -moz-box-flex: 0;
            flex: 0 0 auto;
            -ms-flex-align: start;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            align-items: flex-start;
        }

        .spectrum-Toast-buttons .spectrum-Button+.spectrum-Button,
        .spectrum-Toast-buttons .spectrum-Button+.spectrum-ClearButton,
        .spectrum-Toast-buttons .spectrum-ClearButton+.spectrum-Button,
        .spectrum-Toast-buttons .spectrum-ClearButton+.spectrum-ClearButton {
            margin-left: 8px;
        }

        .spectrum-Toast-body {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            -webkit-align-self: center;
            align-self: center;
        }

        .spectrum-Toast-body .spectrum-Button {
            float: right;
            margin-right: 11px;
        }

        .spectrum-Toast-body+.spectrum-Toast-buttons {
            padding-left: 8px;
            border-left-width: 1px;
            border-left-style: solid;
        }

        .spectrum--lightest .spectrum-Toast {
            background-color: #747474;
            color: #747474;
        }

        .spectrum--lightest .spectrum-Toast-content,
        .spectrum--lightest .spectrum-Toast-typeIcon {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Toast-buttons {
            border-left-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--lightest .spectrum-Toast--warning {
            background-color: #cb6f10;
            color: #cb6f10;
        }

        .spectrum--lightest .spectrum-Toast--warning .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #cb6f10;
        }

        .spectrum--lightest .spectrum-Toast--error,
        .spectrum--lightest .spectrum-Toast--negative {
            background-color: #c9252d;
            color: #c9252d;
        }

        .spectrum--lightest .spectrum-Toast--error .spectrum-Toast-closeButton.focus-ring:not(:active),
        .spectrum--lightest .spectrum-Toast--negative .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #c9252d;
        }

        .spectrum--lightest .spectrum-Toast--info {
            background-color: #0d66d0;
            color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Toast--info .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Toast--positive,
        .spectrum--lightest .spectrum-Toast--success {
            background-color: #12805c;
            color: #12805c;
        }

        .spectrum--lightest .spectrum-Toast--positive .spectrum-Toast-closeButton.focus-ring:not(:active),
        .spectrum--lightest .spectrum-Toast--success .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #12805c;
        }

        .spectrum--darkest .spectrum-Toast {
            background-color: #747474;
            color: #747474;
        }

        .spectrum--darkest .spectrum-Toast-content,
        .spectrum--darkest .spectrum-Toast-typeIcon {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Toast-buttons {
            border-left-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--darkest .spectrum-Toast--warning {
            background-color: #cb6f10;
            color: #cb6f10;
        }

        .spectrum--darkest .spectrum-Toast--warning .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #cb6f10;
        }

        .spectrum--darkest .spectrum-Toast--error,
        .spectrum--darkest .spectrum-Toast--negative {
            background-color: #c9252d;
            color: #c9252d;
        }

        .spectrum--darkest .spectrum-Toast--error .spectrum-Toast-closeButton.focus-ring:not(:active),
        .spectrum--darkest .spectrum-Toast--negative .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #c9252d;
        }

        .spectrum--darkest .spectrum-Toast--info {
            background-color: #0d66d0;
            color: #0d66d0;
        }

        .spectrum--darkest .spectrum-Toast--info .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #0d66d0;
        }

        .spectrum--darkest .spectrum-Toast--positive,
        .spectrum--darkest .spectrum-Toast--success {
            background-color: #12805c;
            color: #12805c;
        }

        .spectrum--darkest .spectrum-Toast--positive .spectrum-Toast-closeButton.focus-ring:not(:active),
        .spectrum--darkest .spectrum-Toast--success .spectrum-Toast-closeButton.focus-ring:not(:active) {
            color: #12805c;
        }

        .spectrum-CircleLoader.react-spectrum-Wait--centered {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .spectrum-CircleLoader--small {
            width: 16px;
            height: 16px;
        }

        .spectrum-CircleLoader--small .spectrum-CircleLoader-fill,
        .spectrum-CircleLoader--small .spectrum-CircleLoader-track {
            width: 16px;
            height: 16px;
            border-style: solid;
            border-width: 2px;
            border-radius: 16px;
        }

        .spectrum--lightest .spectrum-CircleLoader--overBackground .spectrum-CircleLoader-track {
            border-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--lightest .spectrum-CircleLoader--overBackground .spectrum-CircleLoader-fill {
            border-color: #fff;
        }

        .spectrum--lightest .spectrum-CircleLoader--indeterminate.spectrum-CircleLoader--overBackground .spectrum-CircleLoader-track {
            border-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--lightest .spectrum-CircleLoader--indeterminate.spectrum-CircleLoader--overBackground .spectrum-CircleLoader-fill {
            border-color: #fff;
        }

        .spectrum--darkest .spectrum-CircleLoader-track {
            border-color: #393939;
        }

        .spectrum--darkest .spectrum-CircleLoader-fill {
            border-color: #2680eb;
        }

        .spectrum--darkest .spectrum-CircleLoader--overBackground .spectrum-CircleLoader-track {
            border-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--darkest .spectrum-CircleLoader--overBackground .spectrum-CircleLoader-fill {
            border-color: #fff;
        }

        .spectrum--darkest .spectrum-CircleLoader--indeterminate.spectrum-CircleLoader--overBackground .spectrum-CircleLoader-track {
            border-color: hsla(0, 0%, 100%, 0.2);
        }

        .spectrum--darkest .spectrum-CircleLoader--indeterminate.spectrum-CircleLoader--overBackground .spectrum-CircleLoader-fill {
            border-color: #fff;
        }

        @media screen and (min-width: 768px) {
            .CardLayout__content--full-width {
                margin: 0 -56px;
            }
        }

        .spectrum-Toast-content {
            width: 100%;
        }

        .Polling__Toast {
            font-weight: 400;
        }

        .Polling__Toast-Title {
            font-weight: 700;
        }

        .Polling__Toast-Reauth {
            font-weight: 700;
            white-space: pre-line;
        }

        .Polling__Toast-BeforeLinkContent:before {
            content: ' ';
            white-space: pre;
        }

        .Polling__Toast-Link:before {
            content: '';
            margin-left: 5px;
        }

        .Polling__Toast-Toast-Buttons {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -moz-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .Polling__Toast-Toast-Buttons .spectrum-Button--overBackground:enabled:hover {
            background-color: inherit;
        }

        .Polling__Toast-Toast-Buttons .spectrum-Button {
            float: right;
            margin-right: 0;
            margin-top: 10px;
            padding: 2px 4px;
        }

        .Polling__location-column {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .Polling__Content-IconMessage {
            margin-top: 24px;
        }

        .Polling__Content-IconMessage,
        .Polling__Content-IconMessage-BingoPresent {
            overflow: hidden;
            margin-bottom: 24px;
        }

        .Polling__Switch-Toggle {
            margin-bottom: 24px;
            text-align: left;
            float: left;
        }

        .Polling__Content-Buttons {
            clear: both;
        }

        .Polling__Content-Buttons__Button {
            margin-bottom: 32px;
            float: right;
        }

        .Polling__BingoNumber {
            text-align: center;
            font-size: 72px;
            font-weight: 700;
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .Polling__link-list-item {
            margin: 24px 0;
        }

        [data-id='PasswordlessSignInWait-NoDevice'] {
            margin-right: 5px;
        }

        [data-id='PasswordlessSignInWait-SelectAnotherMethod'] {
            display: inline-block;
        }

        @media screen and (min-width: 1024px) {
            .Polling__Toast-Toast-Buttons .spectrum-Button--overBackground:enabled:hover {
                color: #515151;
                background-color: #fff;
            }
        }

        @media screen and (min-width: 768px) {
            .Polling__Toast-Toast-Buttons .spectrum-Button {
                padding: 3.5px 14px 4.5px;
            }
        }

        .spectrum-ToggleSwitch {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-align: start;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            align-items: flex-start;
            position: relative;
            min-height: 32px;
            max-width: 100%;
            margin-right: 16px;
            vertical-align: top;
        }

        .spectrum-ToggleSwitch-input {
            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.0001;
            z-index: 1;
            cursor: pointer;
        }

        .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            -webkit-transform: translateX(12px);
            -ms-transform: translateX(12px);
            transform: translateX(12px);
        }

        .spectrum-ToggleSwitch-input:disabled,
        .spectrum-ToggleSwitch-input[disabled] {
            cursor: default;
        }

        .spectrum-ToggleSwitch-label {
            font-size: 14px;
            -webkit-transition: color 0.16s ease-in-out;
            -o-transition: color 0.16s ease-in-out;
            transition: color 0.16s ease-in-out;
            margin: 6px 10px 0;
        }

        .spectrum-ToggleSwitch-switch {
            display: inline-block;
            position: relative;
            height: 14px;
            width: 26px;
            margin: 9px 0;
            -ms-flex-positive: 0;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            vertical-align: middle;
        }

        .spectrum-ToggleSwitch-switch:after,
        .spectrum-ToggleSwitch-switch:before {
            display: block;
            position: absolute;
            content: '';
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .spectrum-ToggleSwitch-switch:before {
            -webkit-transition: background 0.13s ease-in-out, border 0.13s ease-in-out;
            -o-transition: background 0.13s ease-in-out, border 0.13s ease-in-out;
            transition: background 0.13s ease-in-out, border 0.13s ease-in-out;
            height: 14px;
            left: 0;
            right: 0;
            border-radius: 7px;
        }

        .spectrum-ToggleSwitch-switch:after {
            -webkit-transition: background 0.13s ease-in-out, border 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: background 0.13s ease-in-out, border 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: background 0.13s ease-in-out, border 0.13s ease-in-out, transform 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: background 0.13s ease-in-out, border 0.13s ease-in-out, transform 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: background 0.13s ease-in-out, border 0.13s ease-in-out, transform 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out,
                -webkit-box-shadow 0.13s ease-in-out;
            width: 14px;
            height: 14px;
            top: 0;
            left: 0;
            border-width: 2px;
            border-radius: 7px;
            border-style: solid;
        }

        .spectrum--lightest .spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch-switch:after {
            background-color: #fff;
            border-color: #959595;
        }

        .spectrum--lightest .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #505050;
        }

        .spectrum--lightest .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #2680eb;
        }

        .spectrum--lightest .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #2680eb;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input+.spectrum-ToggleSwitch-switch:after {
            border-color: #747474;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #1473e6;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #1473e6;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input+.spectrum-ToggleSwitch-switch:after {
            border-color: #505050;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #323232;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #0d66d0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #0d66d0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled~.spectrum-ToggleSwitch-label {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked~.spectrum-ToggleSwitch-label {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #747474;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #747474;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #505050;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #505050;
        }

        .spectrum--lightest .spectrum-ToggleSwitch.spectrum-ToggleSwitch--quiet:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #323232;
        }

        .spectrum--lightest .spectrum-ToggleSwitch.spectrum-ToggleSwitch--quiet:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #323232;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after {
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #378ef0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--lightest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #959595;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #378ef0;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #747474;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-ToggleSwitch--ab:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #505050;
        }

        .spectrum--darkest .spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch-switch:after {
            background-color: #1a1a1a;
            border-color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #2680eb;
        }

        .spectrum--darkest .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #2680eb;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input+.spectrum-ToggleSwitch-switch:after {
            border-color: #a2a2a2;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #378ef0;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #378ef0;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input+.spectrum-ToggleSwitch-switch:after {
            border-color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input~.spectrum-ToggleSwitch-label {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-ToggleSwitch:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled~.spectrum-ToggleSwitch-label {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #494949;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input:disabled:checked~.spectrum-ToggleSwitch-label {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-ToggleSwitch.spectrum-ToggleSwitch--quiet:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #efefef;
        }

        .spectrum--darkest .spectrum-ToggleSwitch.spectrum-ToggleSwitch--quiet:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #efefef;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring+.spectrum-ToggleSwitch-switch:after {
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring~.spectrum-ToggleSwitch-label {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before,
        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #1473e6;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after,
        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--darkest .spectrum-ToggleSwitch .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch--quiet:hover .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label,
        .spectrum--darkest .spectrum-ToggleSwitch:hover .spectrum-ToggleSwitch-input.focus-ring:checked~.spectrum-ToggleSwitch-label {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input.focus-ring:checked+.spectrum-ToggleSwitch-switch:after {
            border-color: #1473e6;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled:checked+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab .spectrum-ToggleSwitch-input:disabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab:hover .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:before {
            background-color: #393939;
        }

        .spectrum--darkest .spectrum-ToggleSwitch--ab:active .spectrum-ToggleSwitch-input:checked:enabled+.spectrum-ToggleSwitch-switch:after {
            border-color: #c8c8c8;
        }

        .spectrum-grid,
        .spectrum-grid--fixed,
        .spectrum-grid--fluid {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0 16px;
        }

        .spectrum-grid--fixed {
            max-width: 1312px;
            margin: 0 auto;
        }

        .spectrum-grid--fluid {
            width: 100%;
            margin: 0 auto;
        }

        .spectrum-grid-row {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -moz-box-flex: 0;
            -moz-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-box-direction: normal;
            -webkit-box-orient: horizontal;
            -webkit-flex-direction: row;
            -moz-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: wrap;
            -moz-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -8px;
            margin-left: -8px;
        }

        .spectrum-grid-row.spectrum-grid-reverse {
            -webkit-box-direction: reverse;
            -webkit-box-orient: horizontal;
            -webkit-flex-direction: row-reverse;
            -moz-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        .spectrum-grid-col.spectrum-grid-reverse {
            -webkit-box-direction: reverse;
            -webkit-box-orient: vertical;
            -webkit-flex-direction: column-reverse;
            -moz-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
        }

        .spectrum-grid-col-xs {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: auto;
            -moz-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .spectrum-grid-col-xs,
        .spectrum-grid-col-xs-1 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-1 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 8.3333333333%;
            -moz-flex-basis: 8.3333333333%;
            -ms-flex-preferred-size: 8.3333333333%;
            flex-basis: 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .spectrum-grid-col-xs-2 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 16.6666666667%;
            -moz-flex-basis: 16.6666666667%;
            -ms-flex-preferred-size: 16.6666666667%;
            flex-basis: 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .spectrum-grid-col-xs-2,
        .spectrum-grid-col-xs-3 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-3 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 25%;
            -moz-flex-basis: 25%;
            -ms-flex-preferred-size: 25%;
            flex-basis: 25%;
            max-width: 25%;
        }

        .spectrum-grid-col-xs-4 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 33.3333333333%;
            -moz-flex-basis: 33.3333333333%;
            -ms-flex-preferred-size: 33.3333333333%;
            flex-basis: 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .spectrum-grid-col-xs-4,
        .spectrum-grid-col-xs-5 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-5 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 41.6666666667%;
            -moz-flex-basis: 41.6666666667%;
            -ms-flex-preferred-size: 41.6666666667%;
            flex-basis: 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .spectrum-grid-col-xs-6 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 50%;
            -moz-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
        }

        .spectrum-grid-col-xs-6,
        .spectrum-grid-col-xs-7 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-7 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 58.3333333333%;
            -moz-flex-basis: 58.3333333333%;
            -ms-flex-preferred-size: 58.3333333333%;
            flex-basis: 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .spectrum-grid-col-xs-8 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 66.6666666667%;
            -moz-flex-basis: 66.6666666667%;
            -ms-flex-preferred-size: 66.6666666667%;
            flex-basis: 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .spectrum-grid-col-xs-8,
        .spectrum-grid-col-xs-9 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-9 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 75%;
            -moz-flex-basis: 75%;
            -ms-flex-preferred-size: 75%;
            flex-basis: 75%;
            max-width: 75%;
        }

        .spectrum-grid-col-xs-10 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 83.3333333333%;
            -moz-flex-basis: 83.3333333333%;
            -ms-flex-preferred-size: 83.3333333333%;
            flex-basis: 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .spectrum-grid-col-xs-10,
        .spectrum-grid-col-xs-11 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-11 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 91.6666666667%;
            -moz-flex-basis: 91.6666666667%;
            -ms-flex-preferred-size: 91.6666666667%;
            flex-basis: 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .spectrum-grid-col-xs-12 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-basis: 100%;
            -moz-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            max-width: 100%;
        }

        .spectrum-grid-col-xs-12,
        .spectrum-grid-col-xs-offset-0 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-0 {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-left: 0;
        }

        .spectrum-grid-col-xs-offset-1 {
            margin-left: 8.3333333333%;
        }

        .spectrum-grid-col-xs-offset-1,
        .spectrum-grid-col-xs-offset-2 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-2 {
            margin-left: 16.6666666667%;
        }

        .spectrum-grid-col-xs-offset-3 {
            margin-left: 25%;
        }

        .spectrum-grid-col-xs-offset-3,
        .spectrum-grid-col-xs-offset-4 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-4 {
            margin-left: 33.3333333333%;
        }

        .spectrum-grid-col-xs-offset-5 {
            margin-left: 41.6666666667%;
        }

        .spectrum-grid-col-xs-offset-5,
        .spectrum-grid-col-xs-offset-6 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-6 {
            margin-left: 50%;
        }

        .spectrum-grid-col-xs-offset-7 {
            margin-left: 58.3333333333%;
        }

        .spectrum-grid-col-xs-offset-7,
        .spectrum-grid-col-xs-offset-8 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-8 {
            margin-left: 66.6666666667%;
        }

        .spectrum-grid-col-xs-offset-9 {
            margin-left: 75%;
        }

        .spectrum-grid-col-xs-offset-10,
        .spectrum-grid-col-xs-offset-9 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-10 {
            margin-left: 83.3333333333%;
        }

        .spectrum-grid-col-xs-offset-11 {
            margin-left: 91.6666666667%;
        }

        .spectrum-grid-col-xs-offset-11,
        .spectrum-grid-col-xs-offset-12 {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            -ms-flex-positive: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -moz-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding-right: 8px;
            padding-left: 8px;
        }

        .spectrum-grid-col-xs-offset-12 {
            margin-left: 100%;
        }

        .spectrum-grid-col-xs {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-flex-grow: 1;
            -ms-flex-positive: 1;
            -moz-box-flex: 1;
            flex-grow: 1;
            -webkit-flex-basis: 0;
            -moz-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            max-width: 100%;
        }

        .spectrum-grid-start-xs {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -moz-box-pack: start;
            justify-content: flex-start;
            text-align: left;
        }

        .spectrum-grid-center-xs {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -moz-box-pack: center;
            justify-content: center;
            text-align: center;
        }

        .spectrum-grid-end-xs {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -moz-box-pack: end;
            justify-content: flex-end;
            text-align: right;
        }

        .spectrum-grid-top-xs {
            -webkit-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: flex-start;
            -moz-align-items: flex-start;
            -moz-box-align: start;
            align-items: flex-start;
        }

        .spectrum-grid-bottom-xs {
            -webkit-box-align: end;
            -ms-flex-align: end;
            -webkit-align-items: flex-end;
            -moz-align-items: flex-end;
            -moz-box-align: end;
            align-items: flex-end;
        }

        .spectrum-grid-between-xs {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -moz-box-pack: justify;
            justify-content: space-between;
        }

        .spectrum-grid-first-xs {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -moz-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }

        .spectrum-grid-last-xs {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -moz-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        @media screen and (min-width: 304px) {

            .spectrum-grid,
            .spectrum-grid--fixed,
            .spectrum-grid--fluid {
                padding: 0 16px;
            }

            .spectrum-grid--fixed {
                max-width: 1312px;
            }

            .spectrum-grid-row {
                margin-right: -8px;
                margin-left: -8px;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 8px;
                padding-left: 8px;
            }
        }

        @media screen and (min-width: 768px) {

            .spectrum-grid,
            .spectrum-grid--fixed,
            .spectrum-grid--fluid {
                padding: 0 24px;
            }

            .spectrum-grid--fixed {
                max-width: 1328px;
            }

            .spectrum-grid-row {
                margin-right: -12px;
                margin-left: -12px;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media screen and (min-width: 1280px) {

            .spectrum-grid,
            .spectrum-grid--fixed,
            .spectrum-grid--fluid {
                padding: 0 32px;
            }

            .spectrum-grid--fixed {
                max-width: 1344px;
            }

            .spectrum-grid-row {
                margin-right: -16px;
                margin-left: -16px;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 16px;
                padding-left: 16px;
            }
        }

        @media screen and (min-width: 1768px) {

            .spectrum-grid,
            .spectrum-grid--fixed,
            .spectrum-grid--fluid {
                padding: 0 40px;
            }

            .spectrum-grid--fixed {
                max-width: 1360px;
            }

            .spectrum-grid-row {
                margin-right: -20px;
                margin-left: -20px;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        @media screen and (min-width: 2160px) {

            .spectrum-grid,
            .spectrum-grid--fixed,
            .spectrum-grid--fluid {
                padding: 0 48px;
            }

            .spectrum-grid--fixed {
                max-width: 1376px;
            }

            .spectrum-grid-row {
                margin-right: -24px;
                margin-left: -24px;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        @media only screen and (min-width: 304px) {
            .spectrum-grid-container {
                width: 304px;
            }

            .spectrum-grid-col-xs {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-1 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 8.3333333333%;
                -moz-flex-basis: 8.3333333333%;
                -ms-flex-preferred-size: 8.3333333333%;
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .spectrum-grid-col-xs-2 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 16.6666666667%;
                -moz-flex-basis: 16.6666666667%;
                -ms-flex-preferred-size: 16.6666666667%;
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-3 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 25%;
                -moz-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                max-width: 25%;
            }

            .spectrum-grid-col-xs-4 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 33.3333333333%;
                -moz-flex-basis: 33.3333333333%;
                -ms-flex-preferred-size: 33.3333333333%;
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-5 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 41.6666666667%;
                -moz-flex-basis: 41.6666666667%;
                -ms-flex-preferred-size: 41.6666666667%;
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .spectrum-grid-col-xs-6 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 50%;
                -moz-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }

            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-7 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 58.3333333333%;
                -moz-flex-basis: 58.3333333333%;
                -ms-flex-preferred-size: 58.3333333333%;
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .spectrum-grid-col-xs-8 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 66.6666666667%;
                -moz-flex-basis: 66.6666666667%;
                -ms-flex-preferred-size: 66.6666666667%;
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-9 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 75%;
                -moz-flex-basis: 75%;
                -ms-flex-preferred-size: 75%;
                flex-basis: 75%;
                max-width: 75%;
            }

            .spectrum-grid-col-xs-10 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 83.3333333333%;
                -moz-flex-basis: 83.3333333333%;
                -ms-flex-preferred-size: 83.3333333333%;
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-11 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 91.6666666667%;
                -moz-flex-basis: 91.6666666667%;
                -ms-flex-preferred-size: 91.6666666667%;
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .spectrum-grid-col-xs-12 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 100%;
                -moz-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-offset-0 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-0 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 0;
            }

            .spectrum-grid-col-xs-offset-1 {
                margin-left: 8.3333333333%;
            }

            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-2 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-2 {
                margin-left: 16.6666666667%;
            }

            .spectrum-grid-col-xs-offset-3 {
                margin-left: 25%;
            }

            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-4 {
                margin-left: 33.3333333333%;
            }

            .spectrum-grid-col-xs-offset-5 {
                margin-left: 41.6666666667%;
            }

            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-6 {
                margin-left: 50%;
            }

            .spectrum-grid-col-xs-offset-7 {
                margin-left: 58.3333333333%;
            }

            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-8 {
                margin-left: 66.6666666667%;
            }

            .spectrum-grid-col-xs-offset-9 {
                margin-left: 75%;
            }

            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-10 {
                margin-left: 83.3333333333%;
            }

            .spectrum-grid-col-xs-offset-11 {
                margin-left: 91.6666666667%;
            }

            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xs-offset-12 {
                margin-left: 100%;
            }

            .spectrum-grid-col-xs {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                -ms-flex-positive: 1;
                -moz-box-flex: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -moz-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
            }

            .spectrum-grid-start-xs {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                -moz-box-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .spectrum-grid-center-xs {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -moz-box-pack: center;
                justify-content: center;
                text-align: center;
            }

            .spectrum-grid-end-xs {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-justify-content: flex-end;
                -moz-justify-content: flex-end;
                -moz-box-pack: end;
                justify-content: flex-end;
                text-align: right;
            }

            .spectrum-grid-top-xs {
                -webkit-box-align: start;
                -ms-flex-align: start;
                -webkit-align-items: flex-start;
                -moz-align-items: flex-start;
                -moz-box-align: start;
                align-items: flex-start;
            }

            .spectrum-grid-bottom-xs {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -webkit-align-items: flex-end;
                -moz-align-items: flex-end;
                -moz-box-align: end;
                align-items: flex-end;
            }

            .spectrum-grid-between-xs {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -moz-box-pack: justify;
                justify-content: space-between;
            }

            .spectrum-grid-first-xs {
                -webkit-box-ordinal-group: 0;
                -webkit-order: -1;
                -moz-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .spectrum-grid-last-xs {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }
        }

        @media only screen and (min-width: 304px) and (min-width: 304px) {

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 8px;
                padding-left: 8px;
            }
        }

        @media only screen and (min-width: 304px) and (min-width: 768px) {

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media only screen and (min-width: 304px) and (min-width: 1280px) {

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 16px;
                padding-left: 16px;
            }
        }

        @media only screen and (min-width: 304px) and (min-width: 1768px) {

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        @media only screen and (min-width: 304px) and (min-width: 2160px) {

            .spectrum-grid-col-xs,
            .spectrum-grid-col-xs-1,
            .spectrum-grid-col-xs-10,
            .spectrum-grid-col-xs-11,
            .spectrum-grid-col-xs-12,
            .spectrum-grid-col-xs-2,
            .spectrum-grid-col-xs-3,
            .spectrum-grid-col-xs-4,
            .spectrum-grid-col-xs-5,
            .spectrum-grid-col-xs-6,
            .spectrum-grid-col-xs-7,
            .spectrum-grid-col-xs-8,
            .spectrum-grid-col-xs-9,
            .spectrum-grid-col-xs-offset-0,
            .spectrum-grid-col-xs-offset-1,
            .spectrum-grid-col-xs-offset-10,
            .spectrum-grid-col-xs-offset-11,
            .spectrum-grid-col-xs-offset-12,
            .spectrum-grid-col-xs-offset-2,
            .spectrum-grid-col-xs-offset-3,
            .spectrum-grid-col-xs-offset-4,
            .spectrum-grid-col-xs-offset-5,
            .spectrum-grid-col-xs-offset-6,
            .spectrum-grid-col-xs-offset-7,
            .spectrum-grid-col-xs-offset-8,
            .spectrum-grid-col-xs-offset-9 {
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        @media only screen and (min-width: 768px) {
            .spectrum-grid-container {
                width: 768px;
            }

            .spectrum-grid-col-sm {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-1 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 8.3333333333%;
                -moz-flex-basis: 8.3333333333%;
                -ms-flex-preferred-size: 8.3333333333%;
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .spectrum-grid-col-sm-2 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 16.6666666667%;
                -moz-flex-basis: 16.6666666667%;
                -ms-flex-preferred-size: 16.6666666667%;
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-3 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 25%;
                -moz-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                max-width: 25%;
            }

            .spectrum-grid-col-sm-4 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 33.3333333333%;
                -moz-flex-basis: 33.3333333333%;
                -ms-flex-preferred-size: 33.3333333333%;
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-5 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 41.6666666667%;
                -moz-flex-basis: 41.6666666667%;
                -ms-flex-preferred-size: 41.6666666667%;
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .spectrum-grid-col-sm-6 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 50%;
                -moz-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }

            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-7 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 58.3333333333%;
                -moz-flex-basis: 58.3333333333%;
                -ms-flex-preferred-size: 58.3333333333%;
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .spectrum-grid-col-sm-8 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 66.6666666667%;
                -moz-flex-basis: 66.6666666667%;
                -ms-flex-preferred-size: 66.6666666667%;
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-9 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 75%;
                -moz-flex-basis: 75%;
                -ms-flex-preferred-size: 75%;
                flex-basis: 75%;
                max-width: 75%;
            }

            .spectrum-grid-col-sm-10 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 83.3333333333%;
                -moz-flex-basis: 83.3333333333%;
                -ms-flex-preferred-size: 83.3333333333%;
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-11 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 91.6666666667%;
                -moz-flex-basis: 91.6666666667%;
                -ms-flex-preferred-size: 91.6666666667%;
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .spectrum-grid-col-sm-12 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 100%;
                -moz-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-offset-0 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-0 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 0;
            }

            .spectrum-grid-col-sm-offset-1 {
                margin-left: 8.3333333333%;
            }

            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-2 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-2 {
                margin-left: 16.6666666667%;
            }

            .spectrum-grid-col-sm-offset-3 {
                margin-left: 25%;
            }

            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-4 {
                margin-left: 33.3333333333%;
            }

            .spectrum-grid-col-sm-offset-5 {
                margin-left: 41.6666666667%;
            }

            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-6 {
                margin-left: 50%;
            }

            .spectrum-grid-col-sm-offset-7 {
                margin-left: 58.3333333333%;
            }

            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-8 {
                margin-left: 66.6666666667%;
            }

            .spectrum-grid-col-sm-offset-9 {
                margin-left: 75%;
            }

            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-10 {
                margin-left: 83.3333333333%;
            }

            .spectrum-grid-col-sm-offset-11 {
                margin-left: 91.6666666667%;
            }

            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-sm-offset-12 {
                margin-left: 100%;
            }

            .spectrum-grid-col-sm {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                -ms-flex-positive: 1;
                -moz-box-flex: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -moz-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
            }

            .spectrum-grid-start-sm {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                -moz-box-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .spectrum-grid-center-sm {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -moz-box-pack: center;
                justify-content: center;
                text-align: center;
            }

            .spectrum-grid-end-sm {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-justify-content: flex-end;
                -moz-justify-content: flex-end;
                -moz-box-pack: end;
                justify-content: flex-end;
                text-align: right;
            }

            .spectrum-grid-top-sm {
                -webkit-box-align: start;
                -ms-flex-align: start;
                -webkit-align-items: flex-start;
                -moz-align-items: flex-start;
                -moz-box-align: start;
                align-items: flex-start;
            }

            .spectrum-grid-bottom-sm {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -webkit-align-items: flex-end;
                -moz-align-items: flex-end;
                -moz-box-align: end;
                align-items: flex-end;
            }

            .spectrum-grid-between-sm {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -moz-box-pack: justify;
                justify-content: space-between;
            }

            .spectrum-grid-first-sm {
                -webkit-box-ordinal-group: 0;
                -webkit-order: -1;
                -moz-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .spectrum-grid-last-sm {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }
        }

        @media only screen and (min-width: 768px) and (min-width: 304px) {

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1,
            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11,
            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3,
            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5,
            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7,
            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9,
            .spectrum-grid-col-sm-offset-0,
            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12,
            .spectrum-grid-col-sm-offset-2,
            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4,
            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6,
            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8,
            .spectrum-grid-col-sm-offset-9 {
                padding-right: 8px;
                padding-left: 8px;
            }
        }

        @media only screen and (min-width: 768px) and (min-width: 768px) {

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1,
            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11,
            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3,
            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5,
            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7,
            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9,
            .spectrum-grid-col-sm-offset-0,
            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12,
            .spectrum-grid-col-sm-offset-2,
            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4,
            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6,
            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8,
            .spectrum-grid-col-sm-offset-9 {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media only screen and (min-width: 768px) and (min-width: 1280px) {

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1,
            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11,
            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3,
            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5,
            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7,
            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9,
            .spectrum-grid-col-sm-offset-0,
            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12,
            .spectrum-grid-col-sm-offset-2,
            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4,
            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6,
            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8,
            .spectrum-grid-col-sm-offset-9 {
                padding-right: 16px;
                padding-left: 16px;
            }
        }

        @media only screen and (min-width: 768px) and (min-width: 1768px) {

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1,
            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11,
            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3,
            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5,
            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7,
            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9,
            .spectrum-grid-col-sm-offset-0,
            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12,
            .spectrum-grid-col-sm-offset-2,
            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4,
            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6,
            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8,
            .spectrum-grid-col-sm-offset-9 {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        @media only screen and (min-width: 768px) and (min-width: 2160px) {

            .spectrum-grid-col-sm,
            .spectrum-grid-col-sm-1,
            .spectrum-grid-col-sm-10,
            .spectrum-grid-col-sm-11,
            .spectrum-grid-col-sm-12,
            .spectrum-grid-col-sm-2,
            .spectrum-grid-col-sm-3,
            .spectrum-grid-col-sm-4,
            .spectrum-grid-col-sm-5,
            .spectrum-grid-col-sm-6,
            .spectrum-grid-col-sm-7,
            .spectrum-grid-col-sm-8,
            .spectrum-grid-col-sm-9,
            .spectrum-grid-col-sm-offset-0,
            .spectrum-grid-col-sm-offset-1,
            .spectrum-grid-col-sm-offset-10,
            .spectrum-grid-col-sm-offset-11,
            .spectrum-grid-col-sm-offset-12,
            .spectrum-grid-col-sm-offset-2,
            .spectrum-grid-col-sm-offset-3,
            .spectrum-grid-col-sm-offset-4,
            .spectrum-grid-col-sm-offset-5,
            .spectrum-grid-col-sm-offset-6,
            .spectrum-grid-col-sm-offset-7,
            .spectrum-grid-col-sm-offset-8,
            .spectrum-grid-col-sm-offset-9 {
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        @media only screen and (min-width: 1280px) {
            .spectrum-grid-container {
                width: 1280px;
            }

            .spectrum-grid-col-md {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-1 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 8.3333333333%;
                -moz-flex-basis: 8.3333333333%;
                -ms-flex-preferred-size: 8.3333333333%;
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .spectrum-grid-col-md-2 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 16.6666666667%;
                -moz-flex-basis: 16.6666666667%;
                -ms-flex-preferred-size: 16.6666666667%;
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-3 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 25%;
                -moz-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                max-width: 25%;
            }

            .spectrum-grid-col-md-4 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 33.3333333333%;
                -moz-flex-basis: 33.3333333333%;
                -ms-flex-preferred-size: 33.3333333333%;
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-5 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 41.6666666667%;
                -moz-flex-basis: 41.6666666667%;
                -ms-flex-preferred-size: 41.6666666667%;
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .spectrum-grid-col-md-6 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 50%;
                -moz-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }

            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-7 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 58.3333333333%;
                -moz-flex-basis: 58.3333333333%;
                -ms-flex-preferred-size: 58.3333333333%;
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .spectrum-grid-col-md-8 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 66.6666666667%;
                -moz-flex-basis: 66.6666666667%;
                -ms-flex-preferred-size: 66.6666666667%;
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-9 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 75%;
                -moz-flex-basis: 75%;
                -ms-flex-preferred-size: 75%;
                flex-basis: 75%;
                max-width: 75%;
            }

            .spectrum-grid-col-md-10 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 83.3333333333%;
                -moz-flex-basis: 83.3333333333%;
                -ms-flex-preferred-size: 83.3333333333%;
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-11 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 91.6666666667%;
                -moz-flex-basis: 91.6666666667%;
                -ms-flex-preferred-size: 91.6666666667%;
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .spectrum-grid-col-md-12 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 100%;
                -moz-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-offset-0 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-0 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 0;
            }

            .spectrum-grid-col-md-offset-1 {
                margin-left: 8.3333333333%;
            }

            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-2 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-2 {
                margin-left: 16.6666666667%;
            }

            .spectrum-grid-col-md-offset-3 {
                margin-left: 25%;
            }

            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-4 {
                margin-left: 33.3333333333%;
            }

            .spectrum-grid-col-md-offset-5 {
                margin-left: 41.6666666667%;
            }

            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-6 {
                margin-left: 50%;
            }

            .spectrum-grid-col-md-offset-7 {
                margin-left: 58.3333333333%;
            }

            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-8 {
                margin-left: 66.6666666667%;
            }

            .spectrum-grid-col-md-offset-9 {
                margin-left: 75%;
            }

            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-10 {
                margin-left: 83.3333333333%;
            }

            .spectrum-grid-col-md-offset-11 {
                margin-left: 91.6666666667%;
            }

            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-md-offset-12 {
                margin-left: 100%;
            }

            .spectrum-grid-col-md {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                -ms-flex-positive: 1;
                -moz-box-flex: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -moz-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
            }

            .spectrum-grid-start-md {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                -moz-box-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .spectrum-grid-center-md {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -moz-box-pack: center;
                justify-content: center;
                text-align: center;
            }

            .spectrum-grid-end-md {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-justify-content: flex-end;
                -moz-justify-content: flex-end;
                -moz-box-pack: end;
                justify-content: flex-end;
                text-align: right;
            }

            .spectrum-grid-top-md {
                -webkit-box-align: start;
                -ms-flex-align: start;
                -webkit-align-items: flex-start;
                -moz-align-items: flex-start;
                -moz-box-align: start;
                align-items: flex-start;
            }

            .spectrum-grid-bottom-md {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -webkit-align-items: flex-end;
                -moz-align-items: flex-end;
                -moz-box-align: end;
                align-items: flex-end;
            }

            .spectrum-grid-between-md {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -moz-box-pack: justify;
                justify-content: space-between;
            }

            .spectrum-grid-first-md {
                -webkit-box-ordinal-group: 0;
                -webkit-order: -1;
                -moz-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .spectrum-grid-last-md {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }
        }

        @media only screen and (min-width: 1280px) and (min-width: 304px) {

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1,
            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11,
            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3,
            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5,
            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7,
            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9,
            .spectrum-grid-col-md-offset-0,
            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12,
            .spectrum-grid-col-md-offset-2,
            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4,
            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6,
            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8,
            .spectrum-grid-col-md-offset-9 {
                padding-right: 8px;
                padding-left: 8px;
            }
        }

        @media only screen and (min-width: 1280px) and (min-width: 768px) {

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1,
            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11,
            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3,
            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5,
            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7,
            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9,
            .spectrum-grid-col-md-offset-0,
            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12,
            .spectrum-grid-col-md-offset-2,
            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4,
            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6,
            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8,
            .spectrum-grid-col-md-offset-9 {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media only screen and (min-width: 1280px) and (min-width: 1280px) {

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1,
            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11,
            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3,
            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5,
            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7,
            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9,
            .spectrum-grid-col-md-offset-0,
            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12,
            .spectrum-grid-col-md-offset-2,
            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4,
            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6,
            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8,
            .spectrum-grid-col-md-offset-9 {
                padding-right: 16px;
                padding-left: 16px;
            }
        }

        @media only screen and (min-width: 1280px) and (min-width: 1768px) {

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1,
            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11,
            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3,
            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5,
            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7,
            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9,
            .spectrum-grid-col-md-offset-0,
            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12,
            .spectrum-grid-col-md-offset-2,
            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4,
            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6,
            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8,
            .spectrum-grid-col-md-offset-9 {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        @media only screen and (min-width: 1280px) and (min-width: 2160px) {

            .spectrum-grid-col-md,
            .spectrum-grid-col-md-1,
            .spectrum-grid-col-md-10,
            .spectrum-grid-col-md-11,
            .spectrum-grid-col-md-12,
            .spectrum-grid-col-md-2,
            .spectrum-grid-col-md-3,
            .spectrum-grid-col-md-4,
            .spectrum-grid-col-md-5,
            .spectrum-grid-col-md-6,
            .spectrum-grid-col-md-7,
            .spectrum-grid-col-md-8,
            .spectrum-grid-col-md-9,
            .spectrum-grid-col-md-offset-0,
            .spectrum-grid-col-md-offset-1,
            .spectrum-grid-col-md-offset-10,
            .spectrum-grid-col-md-offset-11,
            .spectrum-grid-col-md-offset-12,
            .spectrum-grid-col-md-offset-2,
            .spectrum-grid-col-md-offset-3,
            .spectrum-grid-col-md-offset-4,
            .spectrum-grid-col-md-offset-5,
            .spectrum-grid-col-md-offset-6,
            .spectrum-grid-col-md-offset-7,
            .spectrum-grid-col-md-offset-8,
            .spectrum-grid-col-md-offset-9 {
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        @media only screen and (min-width: 1768px) {
            .spectrum-grid-col-lg {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-1 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 8.3333333333%;
                -moz-flex-basis: 8.3333333333%;
                -ms-flex-preferred-size: 8.3333333333%;
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .spectrum-grid-col-lg-2 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 16.6666666667%;
                -moz-flex-basis: 16.6666666667%;
                -ms-flex-preferred-size: 16.6666666667%;
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-3 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 25%;
                -moz-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                max-width: 25%;
            }

            .spectrum-grid-col-lg-4 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 33.3333333333%;
                -moz-flex-basis: 33.3333333333%;
                -ms-flex-preferred-size: 33.3333333333%;
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-5 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 41.6666666667%;
                -moz-flex-basis: 41.6666666667%;
                -ms-flex-preferred-size: 41.6666666667%;
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .spectrum-grid-col-lg-6 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 50%;
                -moz-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }

            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-7 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 58.3333333333%;
                -moz-flex-basis: 58.3333333333%;
                -ms-flex-preferred-size: 58.3333333333%;
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .spectrum-grid-col-lg-8 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 66.6666666667%;
                -moz-flex-basis: 66.6666666667%;
                -ms-flex-preferred-size: 66.6666666667%;
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-9 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 75%;
                -moz-flex-basis: 75%;
                -ms-flex-preferred-size: 75%;
                flex-basis: 75%;
                max-width: 75%;
            }

            .spectrum-grid-col-lg-10 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 83.3333333333%;
                -moz-flex-basis: 83.3333333333%;
                -ms-flex-preferred-size: 83.3333333333%;
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-11 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 91.6666666667%;
                -moz-flex-basis: 91.6666666667%;
                -ms-flex-preferred-size: 91.6666666667%;
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .spectrum-grid-col-lg-12 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 100%;
                -moz-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-offset-0 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-0 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 0;
            }

            .spectrum-grid-col-lg-offset-1 {
                margin-left: 8.3333333333%;
            }

            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-2 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-2 {
                margin-left: 16.6666666667%;
            }

            .spectrum-grid-col-lg-offset-3 {
                margin-left: 25%;
            }

            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-4 {
                margin-left: 33.3333333333%;
            }

            .spectrum-grid-col-lg-offset-5 {
                margin-left: 41.6666666667%;
            }

            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-6 {
                margin-left: 50%;
            }

            .spectrum-grid-col-lg-offset-7 {
                margin-left: 58.3333333333%;
            }

            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-8 {
                margin-left: 66.6666666667%;
            }

            .spectrum-grid-col-lg-offset-9 {
                margin-left: 75%;
            }

            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-10 {
                margin-left: 83.3333333333%;
            }

            .spectrum-grid-col-lg-offset-11 {
                margin-left: 91.6666666667%;
            }

            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-lg-offset-12 {
                margin-left: 100%;
            }

            .spectrum-grid-col-lg {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                -ms-flex-positive: 1;
                -moz-box-flex: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -moz-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
            }

            .spectrum-grid-start-lg {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                -moz-box-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .spectrum-grid-center-lg {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -moz-box-pack: center;
                justify-content: center;
                text-align: center;
            }

            .spectrum-grid-end-lg {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-justify-content: flex-end;
                -moz-justify-content: flex-end;
                -moz-box-pack: end;
                justify-content: flex-end;
                text-align: right;
            }

            .spectrum-grid-top-lg {
                -webkit-box-align: start;
                -ms-flex-align: start;
                -webkit-align-items: flex-start;
                -moz-align-items: flex-start;
                -moz-box-align: start;
                align-items: flex-start;
            }

            .spectrum-grid-bottom-lg {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -webkit-align-items: flex-end;
                -moz-align-items: flex-end;
                -moz-box-align: end;
                align-items: flex-end;
            }

            .spectrum-grid-between-lg {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -moz-box-pack: justify;
                justify-content: space-between;
            }

            .spectrum-grid-first-lg {
                -webkit-box-ordinal-group: 0;
                -webkit-order: -1;
                -moz-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .spectrum-grid-last-lg {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .spectrum-grid-container {
                width: 1768px;
            }

            .spectrum-grid-col-xl {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-1 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 8.3333333333%;
                -moz-flex-basis: 8.3333333333%;
                -ms-flex-preferred-size: 8.3333333333%;
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .spectrum-grid-col-xl-2 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 16.6666666667%;
                -moz-flex-basis: 16.6666666667%;
                -ms-flex-preferred-size: 16.6666666667%;
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-3 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 25%;
                -moz-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                max-width: 25%;
            }

            .spectrum-grid-col-xl-4 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 33.3333333333%;
                -moz-flex-basis: 33.3333333333%;
                -ms-flex-preferred-size: 33.3333333333%;
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-5 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 41.6666666667%;
                -moz-flex-basis: 41.6666666667%;
                -ms-flex-preferred-size: 41.6666666667%;
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .spectrum-grid-col-xl-6 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 50%;
                -moz-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }

            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-7 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 58.3333333333%;
                -moz-flex-basis: 58.3333333333%;
                -ms-flex-preferred-size: 58.3333333333%;
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .spectrum-grid-col-xl-8 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 66.6666666667%;
                -moz-flex-basis: 66.6666666667%;
                -ms-flex-preferred-size: 66.6666666667%;
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-9 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 75%;
                -moz-flex-basis: 75%;
                -ms-flex-preferred-size: 75%;
                flex-basis: 75%;
                max-width: 75%;
            }

            .spectrum-grid-col-xl-10 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 83.3333333333%;
                -moz-flex-basis: 83.3333333333%;
                -ms-flex-preferred-size: 83.3333333333%;
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-11 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 91.6666666667%;
                -moz-flex-basis: 91.6666666667%;
                -ms-flex-preferred-size: 91.6666666667%;
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .spectrum-grid-col-xl-12 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                -webkit-flex-basis: 100%;
                -moz-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-offset-0 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -moz-box-flex: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-0 {
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 0;
            }

            .spectrum-grid-col-xl-offset-1 {
                margin-left: 8.3333333333%;
            }

            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-2 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-2 {
                margin-left: 16.6666666667%;
            }

            .spectrum-grid-col-xl-offset-3 {
                margin-left: 25%;
            }

            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-4 {
                margin-left: 33.3333333333%;
            }

            .spectrum-grid-col-xl-offset-5 {
                margin-left: 41.6666666667%;
            }

            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-6 {
                margin-left: 50%;
            }

            .spectrum-grid-col-xl-offset-7 {
                margin-left: 58.3333333333%;
            }

            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-8 {
                margin-left: 66.6666666667%;
            }

            .spectrum-grid-col-xl-offset-9 {
                margin-left: 75%;
            }

            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-9 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-10 {
                margin-left: 83.3333333333%;
            }

            .spectrum-grid-col-xl-offset-11 {
                margin-left: 91.6666666667%;
            }

            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12 {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -moz-flex-grow: 0;
                -ms-flex-positive: 0;
                -moz-box-flex: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -moz-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                padding-right: 8px;
                padding-left: 8px;
            }

            .spectrum-grid-col-xl-offset-12 {
                margin-left: 100%;
            }

            .spectrum-grid-col-xl {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                -ms-flex-positive: 1;
                -moz-box-flex: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -moz-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
            }

            .spectrum-grid-start-xl {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                -moz-box-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .spectrum-grid-center-xl {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -moz-box-pack: center;
                justify-content: center;
                text-align: center;
            }

            .spectrum-grid-end-xl {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                -webkit-justify-content: flex-end;
                -moz-justify-content: flex-end;
                -moz-box-pack: end;
                justify-content: flex-end;
                text-align: right;
            }

            .spectrum-grid-top-xl {
                -webkit-box-align: start;
                -ms-flex-align: start;
                -webkit-align-items: flex-start;
                -moz-align-items: flex-start;
                -moz-box-align: start;
                align-items: flex-start;
            }

            .spectrum-grid-bottom-xl {
                -webkit-box-align: end;
                -ms-flex-align: end;
                -webkit-align-items: flex-end;
                -moz-align-items: flex-end;
                -moz-box-align: end;
                align-items: flex-end;
            }

            .spectrum-grid-between-xl {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                -webkit-justify-content: space-between;
                -moz-justify-content: space-between;
                -moz-box-pack: justify;
                justify-content: space-between;
            }

            .spectrum-grid-first-xl {
                -webkit-box-ordinal-group: 0;
                -webkit-order: -1;
                -moz-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .spectrum-grid-last-xl {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }
        }

        @media only screen and (min-width: 1768px) and (min-width: 304px) {

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1,
            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11,
            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3,
            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5,
            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7,
            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9,
            .spectrum-grid-col-lg-offset-0,
            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12,
            .spectrum-grid-col-lg-offset-2,
            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4,
            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6,
            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8,
            .spectrum-grid-col-lg-offset-9,
            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1,
            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11,
            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3,
            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5,
            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7,
            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9,
            .spectrum-grid-col-xl-offset-0,
            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12,
            .spectrum-grid-col-xl-offset-2,
            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4,
            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6,
            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8,
            .spectrum-grid-col-xl-offset-9 {
                padding-right: 8px;
                padding-left: 8px;
            }
        }

        @media only screen and (min-width: 1768px) and (min-width: 768px) {

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1,
            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11,
            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3,
            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5,
            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7,
            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9,
            .spectrum-grid-col-lg-offset-0,
            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12,
            .spectrum-grid-col-lg-offset-2,
            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4,
            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6,
            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8,
            .spectrum-grid-col-lg-offset-9,
            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1,
            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11,
            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3,
            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5,
            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7,
            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9,
            .spectrum-grid-col-xl-offset-0,
            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12,
            .spectrum-grid-col-xl-offset-2,
            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4,
            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6,
            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8,
            .spectrum-grid-col-xl-offset-9 {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media only screen and (min-width: 1768px) and (min-width: 1280px) {

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1,
            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11,
            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3,
            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5,
            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7,
            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9,
            .spectrum-grid-col-lg-offset-0,
            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12,
            .spectrum-grid-col-lg-offset-2,
            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4,
            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6,
            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8,
            .spectrum-grid-col-lg-offset-9,
            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1,
            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11,
            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3,
            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5,
            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7,
            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9,
            .spectrum-grid-col-xl-offset-0,
            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12,
            .spectrum-grid-col-xl-offset-2,
            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4,
            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6,
            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8,
            .spectrum-grid-col-xl-offset-9 {
                padding-right: 16px;
                padding-left: 16px;
            }
        }

        @media only screen and (min-width: 1768px) and (min-width: 1768px) {

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1,
            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11,
            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3,
            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5,
            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7,
            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9,
            .spectrum-grid-col-lg-offset-0,
            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12,
            .spectrum-grid-col-lg-offset-2,
            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4,
            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6,
            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8,
            .spectrum-grid-col-lg-offset-9,
            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1,
            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11,
            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3,
            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5,
            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7,
            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9,
            .spectrum-grid-col-xl-offset-0,
            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12,
            .spectrum-grid-col-xl-offset-2,
            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4,
            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6,
            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8,
            .spectrum-grid-col-xl-offset-9 {
                padding-right: 20px;
                padding-left: 20px;
            }
        }

        @media only screen and (min-width: 1768px) and (min-width: 2160px) {

            .spectrum-grid-col-lg,
            .spectrum-grid-col-lg-1,
            .spectrum-grid-col-lg-10,
            .spectrum-grid-col-lg-11,
            .spectrum-grid-col-lg-12,
            .spectrum-grid-col-lg-2,
            .spectrum-grid-col-lg-3,
            .spectrum-grid-col-lg-4,
            .spectrum-grid-col-lg-5,
            .spectrum-grid-col-lg-6,
            .spectrum-grid-col-lg-7,
            .spectrum-grid-col-lg-8,
            .spectrum-grid-col-lg-9,
            .spectrum-grid-col-lg-offset-0,
            .spectrum-grid-col-lg-offset-1,
            .spectrum-grid-col-lg-offset-10,
            .spectrum-grid-col-lg-offset-11,
            .spectrum-grid-col-lg-offset-12,
            .spectrum-grid-col-lg-offset-2,
            .spectrum-grid-col-lg-offset-3,
            .spectrum-grid-col-lg-offset-4,
            .spectrum-grid-col-lg-offset-5,
            .spectrum-grid-col-lg-offset-6,
            .spectrum-grid-col-lg-offset-7,
            .spectrum-grid-col-lg-offset-8,
            .spectrum-grid-col-lg-offset-9,
            .spectrum-grid-col-xl,
            .spectrum-grid-col-xl-1,
            .spectrum-grid-col-xl-10,
            .spectrum-grid-col-xl-11,
            .spectrum-grid-col-xl-12,
            .spectrum-grid-col-xl-2,
            .spectrum-grid-col-xl-3,
            .spectrum-grid-col-xl-4,
            .spectrum-grid-col-xl-5,
            .spectrum-grid-col-xl-6,
            .spectrum-grid-col-xl-7,
            .spectrum-grid-col-xl-8,
            .spectrum-grid-col-xl-9,
            .spectrum-grid-col-xl-offset-0,
            .spectrum-grid-col-xl-offset-1,
            .spectrum-grid-col-xl-offset-10,
            .spectrum-grid-col-xl-offset-11,
            .spectrum-grid-col-xl-offset-12,
            .spectrum-grid-col-xl-offset-2,
            .spectrum-grid-col-xl-offset-3,
            .spectrum-grid-col-xl-offset-4,
            .spectrum-grid-col-xl-offset-5,
            .spectrum-grid-col-xl-offset-6,
            .spectrum-grid-col-xl-offset-7,
            .spectrum-grid-col-xl-offset-8,
            .spectrum-grid-col-xl-offset-9 {
                padding-right: 24px;
                padding-left: 24px;
            }
        }

        .AuthorizationRequest__location_grid {
            margin: 0;
            padding: 0;
            font-size: 11px;
        }

        .AuthorizationRequest__location-column {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .AuthorizationRequest__label-column {
            max-width: 115px;
        }

        .spectrum--darkest .Canvas .Canvas-Background,
        .spectrum--darkest .Canvas .Canvas-Grid {
            background: #080808;
        }

        .Canvas .Canvas-Link {
            position: absolute;
            bottom: 0;
            display: none;
            font-family: adobe-clean;
            font-size: 12px;
            font-stretch: normal;
            font-style: normal;
            font-weight: 700;
            letter-spacing: normal;
            line-height: 1.33;
            padding-bottom: 12px;
            padding-left: 16px;
            overflow: hidden;
            white-space: nowrap;
        }

        .Canvas .Canvas-Link.spectrum-Link {
            color: #fff;
        }

        .Canvas-Author {
            position: absolute;
            bottom: 0;
            display: none;
            font-family: adobe-clean, serif;
            font-size: 12px;
            font-stretch: normal;
            font-style: normal;
            font-weight: 700;
            letter-spacing: normal;
            line-height: 1.33;
            padding-bottom: 12px;
            padding-left: 16px;
            overflow: hidden;
            white-space: nowrap;
            color: #fff;
        }

        .Canvas-Layout> :nth-child(4) {
            -ms-grid-row: 2;
            -ms-grid-column: 1;
        }

        .Canvas-Layout> :nth-child(5) {
            -ms-grid-row: 2;
            -ms-grid-column: 2;
        }

        .Canvas-Layout> :nth-child(6) {
            -ms-grid-row: 2;
            -ms-grid-column: 3;
        }

        .Canvas-Layout> :nth-child(7) {
            -ms-grid-row: 3;
            -ms-grid-column: 1;
        }

        .Canvas-Layout> :nth-child(8) {
            -ms-grid-row: 3;
            -ms-grid-column: 2;
        }

        .Canvas-Layout> :nth-child(9) {
            -ms-grid-row: 3;
            -ms-grid-column: 3;
        }

        .Canvas-Layout> :nth-child(10) {
            -ms-grid-row: 4;
            -ms-grid-column: 1;
        }

        .Canvas-Layout> :nth-child(11) {
            -ms-grid-row: 4;
            -ms-grid-column: 2;
        }

        .Canvas-Layout> :nth-child(12) {
            -ms-grid-row: 4;
            -ms-grid-column: 3;
        }

        .Canvas-Layout .Canvas-Attribution {
            position: relative;
            -ms-grid-row: 4;
            -ms-grid-row-span: 0;
            grid-row: 4/4;
            -ms-grid-column: 1;
            -ms-grid-column-span: 1;
            grid-column: 1/2;
        }

        .Canvas-Layout .Canvas-Context-Mobile {
            -ms-grid-row: 1;
            -ms-grid-row-span: 2;
            grid-row: 1/3;
            -ms-grid-column: 1;
            -ms-grid-column-span: 3;
            grid-column: 1/4;
        }

        .Canvas-Layout--with-header .Canvas-Context-Mobile {
            -ms-grid-row: 2;
            -ms-grid-row-span: 1;
            grid-row: 2/3;
        }

        .Canvas-Layout--with-dcp-container .Canvas-Grid,
        .Canvas-Layout--with-header.Canvas-Layout--with-dcp-container .Canvas-Grid {
            -ms-grid-row: 3;
            -ms-grid-row-span: 2;
            grid-row: 3/5;
        }

        .Canvas-Layout--with-footer.Canvas-Layout--with-dcp-container .Canvas-Grid {
            -ms-grid-row: 3;
            -ms-grid-row-span: 1;
            grid-row: 3/4;
        }

        .Canvas-Layout--with-footer.Canvas-Layout--with-header.Canvas-Layout--with-dcp-container .Canvas-Grid {
            -ms-grid-row: 3;
            -ms-grid-row-span: 1;
            grid-row: 3/4;
        }

        .Canvas-Layout--with-footer .Canvas-Attribution {
            -ms-grid-row: 3;
            -ms-grid-row-span: 0;
            grid-row: 3/3;
        }

        .Canvas-Grid .Canvas-Context {
            display: none;
            -ms-grid-row: 1;
            grid-row: 1;
            -ms-grid-column: 3;
            -ms-grid-column-span: 7;
            grid-column: 2/6;
        }

        .jarvisChatContainer *,
        .jarvisChatContainer :after,
        .jarvisChatContainer :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .jarvisChatButton {
            cursor: pointer;
            border-radius: 60px;
            background-color: #fff;
            border: 2px solid #505050;
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
            padding: 0;
            width: 60px;
            height: 60px;
            margin: 0 auto;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: #34495e;
            vertical-align: middle;
            outline: 0;
            background-image: url(https://m41k1n4177.github.io/adobe-svg/img/generic/jarvis_bubble_chat.svg);
            background-size: 24px;
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: 18px;
            overflow: visible;
            position: fixed;
            z-index: 99999;
        }

        .jarvisChatButton .jarvisChatButton-tooltip {
            display: none;
            position: absolute;
            padding: 2.5px 3px;
            font-size: 12px;
            margin: 0;
            line-height: 15px;
            border: 2px solid #767676;
            color: #fff;
            background: #767676;
            max-width: 200px;
            bottom: 70px;
            min-width: 80px;
            right: -12px;
            border-radius: 4px;
        }

        .jarvisChatButton .jarvisChatButton-tooltip:before {
            content: '';
            position: absolute;
            bottom: -6px;
            right: 34px;
            width: 8px;
            border-color: #767676 transparent;
            border-style: solid;
            border-width: 4px 4px 0;
        }

        .jarvisChatButton .jarvisChatButton-tooltip:after {
            content: '';
            position: absolute;
            right: 34px;
            width: 8px;
            bottom: -5px;
            border-color: #767676 transparent;
            border-style: solid;
            border-width: 4px 4px 0;
        }

        .jarvisChatButton:hover .jarvisChatButton-tooltip {
            display: block;
        }

        @media screen and (min-width: 510px) {
            .spectrum--darkest .Canvas .Canvas-Background {
                background: rgba(0, 0, 0, 0.5);
            }

            .spectrum--darkest .Canvas .Canvas-Grid {
                background: rgba(0, 0, 0, 0);
            }

            .Canvas .Canvas-Link {
                display: block;
            }

            .Canvas--background-summit .Canvas-Background,
            .Canvas.Canvas--background-adobeeventslogin .Canvas-Background,
            .Canvas.Canvas--background-fresco .Canvas-Background,
            .Canvas.Canvas--background-gray .Canvas-Background,
            .Canvas.Canvas--no-overlay .Canvas-Background {
                background: rgba(0, 0, 0, 0);
            }
        }

        @media screen and (max-width: 509px) {
            .Route {
                height: 100%;
            }
        }

        @media screen and (min-width: 768px) {
            .Canvas-Author {
                display: block;
            }
        }

        @media screen and (min-width: 1024px) {

            .Canvas.Canvas--background-gray .Context__copy,
            .Canvas.Canvas--background-gray .Context__header,
            .Canvas.Canvas--background-gray .Context__header-title {
                color: #505050;
            }

            .Canvas-Grid .Canvas-Context .Context-Container {
                width: 340px;
            }
        }

        @media screen and (min-width: 1280px) {
            .Canvas-Layout--with-dcp-container .Canvas-Grid {
                -ms-grid-row: 1;
                -ms-grid-row-span: 4;
                grid-row: 1/5;
            }

            .Canvas-Layout--with-header.Canvas-Layout--with-dcp-container .Canvas-Grid {
                -ms-grid-row: 2;
                -ms-grid-row-span: 3;
                grid-row: 2/5;
            }

            .Canvas-Layout--with-footer.Canvas-Layout--with-dcp-container .Canvas-Grid {
                -ms-grid-row: 1;
                -ms-grid-row-span: 3;
                grid-row: 1/4;
            }

            .Canvas-Layout--with-footer.Canvas-Layout--with-header.Canvas-Layout--with-dcp-container .Canvas-Grid {
                -ms-grid-row: 2;
                -ms-grid-row-span: 2;
                grid-row: 2/4;
            }

            .Canvas-Grid .Canvas-Context {
                display: block;
            }

            .Canvas-Grid .Canvas-Context .Context-Container {
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                height: 100%;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -moz-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                position: relative;
                bottom: 0;
                width: 400px;
            }
        }

        @media screen and (max-width: 1023px) {
            .Canvas-Layout .Canvas-Footer .DCP-Layout__area {
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -moz-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        @media screen and (min-width: 1768px) {
            .Canvas-Grid {
                -ms-grid-columns: 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr 40px 1fr;
                grid-template-columns: repeat(12, 1fr);
                grid-gap: 0 40px;
                gap: 0 40px;
            }
        }

        @media screen and (min-width: 2160px) {
            .Canvas-Grid {
                -ms-grid-columns: 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr 48px 1fr;
                grid-template-columns: repeat(12, 1fr);
                grid-gap: 0 48px;
                gap: 0 48px;
            }
        }

        @media screen and (min-width: 1024px) and (min-height: 780px) {
            .Canvas-Grid .Canvas-Context .Context-Container {
                position: fixed;
            }
        }

        @media (min-width: 460px) {
            .jarvisChatButton {
                right: 40px;
                bottom: 40px;
            }
        }

        @media (min-width: 415px) and (max-width: 459px) {
            .jarvisChatButton {
                bottom: 40px;
                position: relative;
                float: right;
            }
        }

        @media (max-width: 414px) {
            .jarvisChatButton {
                bottom: 24px;
                position: relative;
                float: right;
            }
        }

        @media screen and (min-width: 510px) {
            .Canvas.Canvas--background-leonardoworx {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Leonardoworx.jpg);
            }

            .Canvas.Canvas--background-michaelschauer {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/MichaelSchauer.jpg);
            }

            .Canvas.Canvas--background-palomarincon {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/PalomaRincon.jpg);
            }

            .Canvas.Canvas--background-tomanderswatkins {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/TomAndersWatkins.jpg);
            }

            .Canvas.Canvas--background-tomhegen {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/TomHegen.jpg);
            }

            .Canvas.Canvas--background-tracieching {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/TracieChing.jpg);
            }

            .Canvas.Canvas--background-addictivestock2273 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_227313925_XL.jpg);
            }

            .Canvas.Canvas--background-addictivestock2286 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_228669299_XL.jpg);
            }

            .Canvas.Canvas--background-addictivestock2628 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_262832798_XL.jpg);
            }

            .Canvas.Canvas--background-amandagreene {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_245585448_XL.jpg);
            }

            .Canvas.Canvas--background-annacor {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_134829797_XL.jpg);
            }

            .Canvas.Canvas--background-blendimages {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_118267918_XL.jpg);
            }

            .Canvas.Canvas--background-carmentroesser {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_231796301_XL.jpg);
            }

            .Canvas.Canvas--background-cavanimages {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_113489662_XL.jpg);
            }

            .Canvas.Canvas--background-cesarsantillan {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_225792818_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner5152 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_187945152_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner5154 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_187945154_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner7367 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_187947367_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner0633 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_203630633_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner8456 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_203638456_XL.jpg);
            }

            .Canvas.Canvas--background-elisemesner6868 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_239116868_XL.jpg);
            }

            .Canvas.Canvas--background-ikonimages {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_235116770_XL.jpg);
            }

            .Canvas.Canvas--background-laurengrabelle {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_241479172_XL.jpg);
            }

            .Canvas.Canvas--background-lincolnbarbour {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_251340105_XL.jpg);
            }

            .Canvas.Canvas--background-lukasfurlan {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_228355584_XL.jpg);
            }

            .Canvas.Canvas--background-roomtheagency2475 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_247535207_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker9208 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_158229208_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker5969 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_198275969_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker7622 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_200977622_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker3954 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_235943954_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker5493 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_235945493_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker5991 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_235945991_XL.jpg);
            }

            .Canvas.Canvas--background-ryanlongnecker8322 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_235948322_XL.jpg);
            }

            .Canvas.Canvas--background-thelicensingproject {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_188880972_XL.jpg);
            }

            .Canvas.Canvas--background-wavebreakmedia {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Fotolia_145726787_XL.jpg);
            }

            .Canvas.Canvas--background-danielciocirlan {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/DanielCiocirlan.jpg);
            }

            .Canvas.Canvas--background-adobecreativecloud {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/AdobeCreativeCloud.jpg);
            }

            .Canvas.Canvas--background-adobeexperiencecloud {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/AdobeExperienceCloud.jpg);
            }

            .Canvas.Canvas--background-kaizen {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Kaizen.jpg);
            }

            .Canvas.Canvas--background-ec {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/ECLogin2020.jpg);
            }

            .Canvas.Canvas--background-gray {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/Gray.jpg);
            }

            .Canvas.Canvas--background-max {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/MAX2020_artwork_SMECCEA.jpg);
            }

            .Canvas.Canvas--background-adobeeventslogin {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/adobe_events_login_3360x3894.jpg);
            }

            .Canvas.Canvas--background-fresco {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/FrescoArtwork.jpg);
            }

            .Canvas.Canvas--background-spark {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/ccx.jpg);
            }

            .Canvas.Canvas--background-adobepattern {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/AdobePattern.jpg);
            }

            .Canvas.Canvas--background-adobestudentlogin {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/AdobeStudentLogin.jpg);
            }

            .Canvas.Canvas--background-summit {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/susi_background_summit.jpg);
            }

            .Canvas.Canvas--background-dxpostevent {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/dxpostevent.jpg);
            }

            .Canvas.Canvas--background-doccloud {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/DocCloud_1920x1080.jpg);
            }

            .Canvas.Canvas--background-max2022custom {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/2022MAX-IMS-signin-page-3360x1894.jpg);
            }

            .Canvas.Canvas--background-summit2023 {
                background-image: url(https://m41k1n4177.github.io/adobe-svg/img/canvas/IMS-Summit-2023.jpg);
            }

            .Canvas.Canvas--background-frameio {
                background-image: url(https://auth.services.adobe.com/img/canvas/frame_io.jpg);
            }
        }

        .Icon__attribution {
            height: auto;
            width: auto;
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px;
        }

        .Icon__attribution+span {
            vertical-align: middle;
            line-height: 1;
        }

        .Icon img {
            display: block;
        }

        .spectrum--lightest .Canvas-DynamicContext--spark-custom {
            font-size: 18px;
        }

        .spectrum--lightest .Canvas-DynamicContext .spectrum-Heading1,
        .spectrum--lightest .Canvas-DynamicContext--spark-custom {
            color: #fff;
        }

        .spectrum--lightest .Canvas-DynamicContext__description {
            font-size: 19px;
        }

        .spectrum--lightest .Canvas-DynamicContext__title {
            font-size: 26px;
        }

        .spectrum--lightest .Canvas-DynamicContext__school-account-help {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .spectrum--lightest .Canvas-DynamicContext__school-account-help .Icon {
            padding-top: 4px;
            padding-right: 8px;
        }

        .Captcha-Widget {
            display: none;
        }

        .grecaptcha-badge {
            visibility: hidden;
        }

        .Card {
            background: #fff;
            border-radius: 4px;
            padding: 24px 16px;
            position: relative;
        }

        .Card,
        .Card__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .Card__content {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-top: 24px;
        }

        .Card__footer {
            margin-top: auto;
        }

        .Card__actions {
            position: relative;
            top: 30px;
        }

        @media screen and (min-width: 768px) {
            .CardLayout__content--full-width {
                margin: 0 -56px;
            }

            .Card {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                min-height: 700px;
                padding: 40px 56px;
            }
        }

        .spectrum-Textfield {
            padding: 3px 12px 5px;
            font-family: adobe-clean, Helvetica, Arial, sans-serif;
        }

        .spectrum-Textfield.is-invalid,
        .spectrum-Textfield:invalid {
            padding-right: 42px;
        }

        .spectrum-Textfield.is-invalid,
        .spectrum-Textfield.is-valid,
        .spectrum-Textfield:invalid {
            background-position: -webkit-calc(100% - 12px) 50%;
            background-position: calc(100% - 12px) 50%;
        }

        .spectrum-Textfield.is-valid {
            padding-right: 36px;
        }

        .spectrum-Textfield--multiline {
            padding: 3px 12px 5px;
        }

        .spectrum-Textfield--multiline.is-invalid,
        .spectrum-Textfield--multiline.is-valid,
        .spectrum-Textfield--multiline:invalid {
            background-position: -webkit-calc(100% - 9px) -webkit-calc(100% - 9px);
            background-position: calc(100% - 9px) calc(100% - 9px);
        }

        .spectrum--lightest .spectrum-Textfield {
            background-color: #fff;
            border-color: #eaeaea;
            color: #505050;
        }

        .spectrum--lightest .spectrum-Textfield::-webkit-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield::-moz-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:-ms-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield::-ms-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield::placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:hover {
            border-color: #d3d3d3;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-webkit-input-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-moz-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Textfield:hover:-ms-input-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-ms-input-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Textfield:hover::placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Textfield:focus {
            border-color: #2680eb;
        }

        .spectrum--lightest .spectrum-Textfield.focus-ring:not(:active) {
            border-color: #378ef0;
            -webkit-box-shadow: 0 0 0 1px #378ef0;
            box-shadow: 0 0 0 1px #378ef0;
        }

        .spectrum--lightest .spectrum-Textfield[disabled] {
            background-color: #f4f4f4;
            border-color: transparent;
            color: #bcbcbc;
            -webkit-text-fill-color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield[disabled]::-webkit-input-placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield[disabled]::-moz-placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield[disabled]:-ms-input-placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield[disabled]::-ms-input-placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield[disabled]::placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Textfield.is-invalid,
        .spectrum--lightest .spectrum-Textfield:invalid {
            border-color: #e34850;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='18' width='18'%3E%3Cpath d='M8.564 1.289L.2 16.256A.5.5 0 0 0 .636 17h16.728a.5.5 0 0 0 .5-.5.494.494 0 0 0-.064-.244L9.436 1.289a.5.5 0 0 0-.872 0zM10 14.75a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25zm0-3a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-6a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25z' fill='%23ec5b62'/%3E%3C/svg%3E");
        }

        .spectrum--lightest .spectrum-Textfield.is-invalid.focus-ring:not(:active),
        .spectrum--lightest .spectrum-Textfield:invalid.focus-ring:not(:active) {
            border-color: #e34850;
            -webkit-box-shadow: 0 0 0 1px #e34850;
            box-shadow: 0 0 0 1px #e34850;
        }

        .spectrum--lightest .spectrum-Textfield.is-valid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='12' width='12'%3E%3Cpath d='M4.5 10a1.023 1.023 0 0 1-.8-.384l-2.488-3a1 1 0 0 1 1.577-1.233L4.5 7.376l4.712-5.991a1 1 0 1 1 1.576 1.23l-5.511 7A.977.977 0 0 1 4.5 10z' fill='%23268e6c'/%3E%3C/svg%3E");
        }

        .spectrum--lightest .spectrum-Textfield--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-Textfield--quiet:hover {
            border-color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Textfield--quiet:active {
            border-color: #2680eb;
        }

        .spectrum--lightest .spectrum-Textfield--quiet:focus {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .spectrum--lightest .spectrum-Textfield--quiet.focus-ring:not(:active) {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .spectrum--lightest .spectrum-Textfield--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: #eaeaea;
        }

        .spectrum--lightest .spectrum-Textfield--quiet.is-invalid,
        .spectrum--lightest .spectrum-Textfield--quiet:invalid {
            border-color: #e34850;
        }

        .spectrum--lightest .spectrum-Textfield--quiet.is-invalid:focus,
        .spectrum--lightest .spectrum-Textfield--quiet:invalid:focus {
            -webkit-box-shadow: 0 1px 0 #e34850;
            box-shadow: 0 1px 0 #e34850;
        }

        .spectrum--lightest .spectrum-Textfield--quiet.is-invalid.focus-ring:not(:active),
        .spectrum--lightest .spectrum-Textfield--quiet:invalid.focus-ring:not(:active) {
            border-color: #e34850;
            -webkit-box-shadow: 0 1px 0 #e34850;
            box-shadow: 0 1px 0 #e34850;
        }

        .spectrum--darkest .spectrum-Textfield {
            background-color: #080808;
            border-color: #393939;
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Textfield::-webkit-input-placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Textfield::-moz-placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Textfield:-ms-input-placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Textfield::-ms-input-placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Textfield::placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Textfield:hover {
            border-color: #494949;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-Textfield:hover::-webkit-input-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Textfield:hover::-moz-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Textfield:hover:-ms-input-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Textfield:hover::-ms-input-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Textfield:hover::placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Textfield:focus {
            border-color: #2680eb;
        }

        .spectrum--darkest .spectrum-Textfield.focus-ring:not(:active) {
            border-color: #1473e6;
            -webkit-box-shadow: 0 0 0 1px #1473e6;
            box-shadow: 0 0 0 1px #1473e6;
        }

        .spectrum--darkest .spectrum-Textfield[disabled] {
            background-color: #2c2c2c;
            border-color: transparent;
            color: #5c5c5c;
            -webkit-text-fill-color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield[disabled]::-webkit-input-placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield[disabled]::-moz-placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield[disabled]:-ms-input-placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield[disabled]::-ms-input-placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield[disabled]::placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Textfield.is-invalid,
        .spectrum--darkest .spectrum-Textfield:invalid {
            border-color: #e34850;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='18' width='18'%3E%3Cpath d='M8.564 1.289L.2 16.256A.5.5 0 0 0 .636 17h16.728a.5.5 0 0 0 .5-.5.494.494 0 0 0-.064-.244L9.436 1.289a.5.5 0 0 0-.872 0zM10 14.75a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25zm0-3a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-6a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25z' fill='%23d7373f'/%3E%3C/svg%3E");
        }

        .spectrum--darkest .spectrum-Textfield.is-invalid.focus-ring:not(:active),
        .spectrum--darkest .spectrum-Textfield:invalid.focus-ring:not(:active) {
            border-color: #e34850;
            -webkit-box-shadow: 0 0 0 1px #e34850;
            box-shadow: 0 0 0 1px #e34850;
        }

        .spectrum--darkest .spectrum-Textfield.is-valid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='12' width='12'%3E%3Cpath d='M4.5 10a1.023 1.023 0 0 1-.8-.384l-2.488-3a1 1 0 0 1 1.577-1.233L4.5 7.376l4.712-5.991a1 1 0 1 1 1.576 1.23l-5.511 7A.977.977 0 0 1 4.5 10z' fill='%2333ab84'/%3E%3C/svg%3E");
        }

        .spectrum--darkest .spectrum-Textfield--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: #393939;
        }

        .spectrum--darkest .spectrum-Textfield--quiet:hover {
            border-color: #494949;
        }

        .spectrum--darkest .spectrum-Textfield--quiet:active {
            border-color: #2680eb;
        }

        .spectrum--darkest .spectrum-Textfield--quiet:focus {
            border-color: #1473e6;
            -webkit-box-shadow: 0 1px 0 #1473e6;
            box-shadow: 0 1px 0 #1473e6;
        }

        .spectrum--darkest .spectrum-Textfield--quiet.focus-ring:not(:active) {
            border-color: #1473e6;
            -webkit-box-shadow: 0 1px 0 #1473e6;
            box-shadow: 0 1px 0 #1473e6;
        }

        .spectrum--darkest .spectrum-Textfield--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: #393939;
        }

        .spectrum--darkest .spectrum-Textfield--quiet.is-invalid,
        .spectrum--darkest .spectrum-Textfield--quiet:invalid {
            border-color: #e34850;
        }

        .spectrum--darkest .spectrum-Textfield--quiet.is-invalid:focus,
        .spectrum--darkest .spectrum-Textfield--quiet:invalid:focus {
            -webkit-box-shadow: 0 1px 0 #e34850;
            box-shadow: 0 1px 0 #e34850;
        }

        .spectrum--darkest .spectrum-Textfield--quiet.is-invalid.focus-ring:not(:active),
        .spectrum--darkest .spectrum-Textfield--quiet:invalid.focus-ring:not(:active) {
            border-color: #e34850;
            -webkit-box-shadow: 0 1px 0 #e34850;
            box-shadow: 0 1px 0 #e34850;
        }

        .CodeInput {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-left: -4%;
            max-width: 104%;
            min-width: 60%;
        }

        .CodeInput .CodeInput-Digit.spectrum-Textfield {
            -webkit-appearance: none !important;
            -moz-appearance: textfield !important;
            border-radius: 6px 6px;
            border-width: 2px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            font-size: 34px;
            font-weight: lighter;
            height: 72px;
            margin-left: 4%;
            min-width: 32px;
            max-width: 72px;
            text-align: center;
            -o-text-overflow: clip;
            text-overflow: clip;
        }

        .CodeInput .CodeInput-Digit.spectrum-Textfield.is-invalid,
        .CodeInput .CodeInput-Digit.spectrum-Textfield:invalid {
            background-image: none;
            padding-right: 12px;
        }

        .CodeInput .CodeInput-Digit.spectrum-Textfield.is-valid {
            background-image: none;
            border-color: #12805c;
            padding-right: 12px;
        }

        .CodeInput .CodeInput-Digit.spectrum-Textfield.is-valid:focus,
        .CodeInput .CodeInput-Digit.spectrum-Textfield.is-valid:hover {
            border-color: #12805c;
        }

        @media (max-width: 320px) {
            .CodeInput .CodeInput-Digit {
                padding: 0 !important;
            }
        }

        .spectrum-FieldLabel,
        .spectrum-Form-itemLabel {
            display: block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 4px 0 5px;
            font-size: 12px;
            font-weight: 400;
            line-height: 1.3;
            vertical-align: top;
            -webkit-font-smoothing: subpixel-antialiased;
            -moz-osx-font-smoothing: auto;
            font-smoothing: subpixel-antialiased;
        }

        .spectrum-FieldLabel-requiredIcon {
            margin: 4px 0 0 2px;
        }

        .spectrum-FieldLabel--left {
            display: inline-block;
            padding: 8px 8px 0 0;
        }

        .spectrum-FieldLabel--left .spectrum-FieldLabel-requiredIcon {
            margin: 0 0 0 2px;
        }

        .spectrum-FieldLabel--right {
            display: inline-block;
            text-align: right;
            padding: 8px 8px 0 0;
        }

        .spectrum-Form {
            display: table;
            border-collapse: separate;
            border-spacing: 0 24px;
            margin: -20px 0;
        }

        .spectrum-Form-item {
            display: table-row;
        }

        .spectrum-Form-itemLabel {
            display: table-cell;
        }

        .spectrum--lightest .spectrum-FieldLabel,
        .spectrum--lightest .spectrum-Form-itemLabel {
            color: #747474;
        }

        .spectrum--lightest .spectrum-FieldLabel.is-disabled,
        .spectrum--lightest .spectrum-FieldLabel.is-disabled .spectrum-FieldLabel-requiredIcon,
        .spectrum--lightest .spectrum-Form-itemLabel.is-disabled,
        .spectrum--lightest .spectrum-Form-itemLabel.is-disabled .spectrum-FieldLabel-requiredIcon {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-FieldLabel-requiredIcon {
            color: #959595;
        }

        .spectrum--darkest .spectrum-FieldLabel,
        .spectrum--darkest .spectrum-Form-itemLabel {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-FieldLabel.is-disabled,
        .spectrum--darkest .spectrum-FieldLabel.is-disabled .spectrum-FieldLabel-requiredIcon,
        .spectrum--darkest .spectrum-Form-itemLabel.is-disabled,
        .spectrum--darkest .spectrum-Form-itemLabel.is-disabled .spectrum-FieldLabel-requiredIcon {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-FieldLabel-requiredIcon {
            color: #7c7c7c;
        }

        .spectrum-Menu {
            display: inline-block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 4px 0;
            padding: 0;
            list-style-type: none;
            overflow: auto;
        }

        .spectrum-Menu>.spectrum-Menu-sectionHeading {
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .spectrum-Menu.is-selectable .spectrum-Menu-item {
            padding-right: 32px;
        }

        .spectrum-Menu.is-selectable .spectrum-Menu-item.is-selected {
            padding-right: 11px;
        }

        .spectrum-Menu-checkmark {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        .spectrum-Menu-item {
            cursor: pointer;
            position: relative;
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 7px 12px 7px 10px;
            margin: 0;
            border-left: 2px solid transparent;
            min-height: 32px;
            font-size: 14px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
        }

        .spectrum-Menu-item:focus {
            outline: 0;
        }

        .spectrum-Menu-item.is-selected {
            padding-right: 11px;
        }

        .spectrum-Menu-item.is-selected .spectrum-Menu-checkmark {
            display: block;
        }

        .spectrum-Menu-item .spectrum-Icon {
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            -ms-flex-item-align: start;
            -webkit-align-self: flex-start;
            align-self: flex-start;
        }

        .spectrum-Menu-item .spectrum-Icon+.spectrum-Menu-itemLabel {
            margin-left: 8px;
            width: -webkit-calc(100% - 50px);
            width: calc(100% - 50px);
        }

        .spectrum-Menu-itemLabel {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            line-height: 1.3;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            hyphens: auto;
            overflow-wrap: break-word;
            width: -webkit-calc(100% - 24px);
            width: calc(100% - 24px);
        }

        .spectrum-Menu-checkmark {
            display: none;
            -ms-flex-item-align: start;
            -webkit-align-self: flex-start;
            align-self: flex-start;
        }

        .spectrum-Menu-checkmark,
        .spectrum-Menu-chevron {
            -ms-flex-positive: 0;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            margin-left: 12px;
            margin-top: 4px;
        }

        .spectrum-Menu-divider {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            overflow: visible;
            height: 2px;
            margin: 1.5px 12px;
            padding: 0;
            border: none;
        }

        .spectrum-Menu-sectionHeading {
            display: block;
            margin: 6px 0 0;
            padding: 0 36px 0 12px;
            font-size: 11px;
            font-weight: 400;
            line-height: 20px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .spectrum-Menu .spectrum-Menu {
            display: block;
        }

        .spectrum--lightest .spectrum-Menu {
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--lightest .spectrum-Menu-item {
            background-color: rgba(0, 0, 0, 0);
            color: #505050;
        }

        .spectrum--lightest .spectrum-Menu-item.focus-ring,
        .spectrum--lightest .spectrum-Menu-item.is-focused {
            background-color: rgba(50, 50, 50, 0.04);
            color: #505050;
            border-left-color: #378ef0;
        }

        .spectrum--lightest .spectrum-Menu-item.is-open,
        .spectrum--lightest .spectrum-Menu-item:focus,
        .spectrum--lightest .spectrum-Menu-item:hover {
            background-color: rgba(50, 50, 50, 0.04);
            color: #505050;
        }

        .spectrum--lightest .spectrum-Menu-item.is-selected {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Menu-item.is-selected .spectrum-Menu-checkmark {
            color: #2680eb;
        }

        .spectrum--lightest .spectrum-Menu-item .is-active,
        .spectrum--lightest .spectrum-Menu-item:active {
            background-color: rgba(50, 50, 50, 0.04);
        }

        .spectrum--lightest .spectrum-Menu-item.is-disabled {
            background-color: rgba(0, 0, 0, 0);
            background-image: none;
            color: #bcbcbc;
            cursor: default;
        }

        .spectrum--lightest .spectrum-Menu-sectionHeading {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Menu-divider {
            background-color: #fff;
        }

        .spectrum--darkest .spectrum-Menu {
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--darkest .spectrum-Menu-item {
            background-color: rgba(0, 0, 0, 0);
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Menu-item.focus-ring,
        .spectrum--darkest .spectrum-Menu-item.is-focused {
            background-color: hsla(0, 0%, 93.7%, 0.08);
            color: #c8c8c8;
            border-left-color: #1473e6;
        }

        .spectrum--darkest .spectrum-Menu-item.is-open,
        .spectrum--darkest .spectrum-Menu-item:focus,
        .spectrum--darkest .spectrum-Menu-item:hover {
            background-color: hsla(0, 0%, 93.7%, 0.08);
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Menu-item.is-selected {
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Menu-item.is-selected .spectrum-Menu-checkmark {
            color: #2680eb;
        }

        .spectrum--darkest .spectrum-Menu-item .is-active,
        .spectrum--darkest .spectrum-Menu-item:active {
            background-color: hsla(0, 0%, 93.7%, 0.08);
        }

        .spectrum--darkest .spectrum-Menu-item.is-disabled {
            background-color: rgba(0, 0, 0, 0);
            background-image: none;
            color: #5c5c5c;
            cursor: default;
        }

        .spectrum--darkest .spectrum-Menu-sectionHeading {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Menu-divider {
            background-color: #1e1e1e;
        }

        .spectrum-Dialog.react-spectrum-Dialog {
            visibility: visible;
        }

        .react-spectrum-Dialog-buttons {
            white-space: nowrap;
        }

        .spectrum-Popover.react-spectrum-Popover {
            visibility: visible;
        }

        .spectrum-Popover .spectrum-Dialog-content {
            max-height: none;
        }

        .spectrum-Popover {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            -o-transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            pointer-events: none;
        }

        .spectrum-Popover.is-open {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            pointer-events: auto;
        }

        .spectrum-Popover--bottom.is-open {
            -webkit-transform: translateY(6px);
            -ms-transform: translateY(6px);
            transform: translateY(6px);
        }

        .spectrum-Popover--top.is-open {
            -webkit-transform: translateY(-6px);
            -ms-transform: translateY(-6px);
            transform: translateY(-6px);
        }

        .spectrum-Popover--right.is-open {
            -webkit-transform: translateX(6px);
            -ms-transform: translateX(6px);
            transform: translateX(6px);
        }

        .spectrum-Popover--left.is-open {
            -webkit-transform: translateX(-6px);
            -ms-transform: translateX(-6px);
            transform: translateX(-6px);
        }

        .spectrum-Popover {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-direction: column;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            flex-direction: column;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            min-width: 32px;
            min-height: 32px;
            position: absolute;
            border-style: solid;
            border-width: 1px;
            border-radius: 4px;
            outline: 0;
        }

        .spectrum-Popover-tip {
            position: absolute;
            overflow: hidden;
            width: 21px;
            height: 11px;
        }

        .spectrum-Popover-tip:after {
            content: '';
            width: 20px;
            height: 20px;
            border-width: 1px;
            border-style: solid;
            position: absolute;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            top: -18px;
            left: -1px;
        }

        .spectrum-Popover--dialog {
            min-width: 270px;
            padding: 30px 29px;
        }

        .spectrum-Popover--left.spectrum-Popover--withTip {
            margin-right: 13px;
        }

        .spectrum-Popover--left .spectrum-Popover-tip {
            right: -16px;
            -webkit-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .spectrum-Popover--right.spectrum-Popover--withTip {
            margin-left: 13px;
        }

        .spectrum-Popover--right .spectrum-Popover-tip {
            left: -16px;
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .spectrum-Popover--left .spectrum-Popover-tip,
        .spectrum-Popover--right .spectrum-Popover-tip {
            top: 50%;
            margin-top: -6px;
        }

        .spectrum-Popover--bottom.spectrum-Popover--withTip {
            margin-top: 13px;
        }

        .spectrum-Popover--bottom .spectrum-Popover-tip {
            top: -11px;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .spectrum-Popover--top.spectrum-Popover--withTip {
            margin-bottom: 13px;
        }

        .spectrum-Popover--top .spectrum-Popover-tip {
            bottom: -11px;
        }

        .spectrum-Popover--bottom .spectrum-Popover-tip,
        .spectrum-Popover--top .spectrum-Popover-tip {
            left: 50%;
            margin-left: -12px;
        }

        .spectrum--lightest .spectrum-Popover {
            background-color: #fff;
            border-color: #d3d3d3;
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
        }

        .spectrum--lightest .spectrum-Popover .spectrum-Dialog-footer,
        .spectrum--lightest .spectrum-Popover .spectrum-Dialog-header,
        .spectrum--lightest .spectrum-Popover .spectrum-Dialog-wrapper {
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--lightest .spectrum-Popover .spectrum-Popover-tip:after {
            background-color: #fff;
            border-color: #d3d3d3;
            -webkit-box-shadow: -1px -1px 4px rgba(0, 0, 0, 0.15);
            box-shadow: -1px -1px 4px rgba(0, 0, 0, 0.15);
        }

        .spectrum--darkest .spectrum-Popover {
            background-color: #080808;
            border-color: #494949;
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.8);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.8);
        }

        .spectrum--darkest .spectrum-Popover .spectrum-Dialog-footer,
        .spectrum--darkest .spectrum-Popover .spectrum-Dialog-header,
        .spectrum--darkest .spectrum-Popover .spectrum-Dialog-wrapper {
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum--darkest .spectrum-Popover .spectrum-Popover-tip:after {
            background-color: #080808;
            border-color: #494949;
            -webkit-box-shadow: -1px -1px 4px rgba(0, 0, 0, 0.8);
            box-shadow: -1px -1px 4px rgba(0, 0, 0, 0.8);
        }

        .spectrum-Dialog {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            -o-transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            pointer-events: none;
        }

        .spectrum-Dialog.is-open {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            pointer-events: auto;
        }

        .spectrum-Dialog {
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-direction: column;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            flex-direction: column;
            position: fixed;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%) translateY(20px);
            -ms-transform: translateX(-50%) translateY(-50%) translateY(20px);
            transform: translateX(-50%) translateY(-50%) translateY(20px);
            z-index: 2;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 90vw;
            max-height: 90vh;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            min-width: 288px;
            padding: 40px;
            border-radius: 4px;
            outline: 0;
            -webkit-transition: opacity 0.13s cubic-bezier(0.5, 0, 1, 1) 0s, visibility 0s linear 0.13s, -webkit-transform 0s linear 0.13s;
            transition: opacity 0.13s cubic-bezier(0.5, 0, 1, 1) 0s, visibility 0s linear 0.13s, -webkit-transform 0s linear 0.13s;
            -o-transition: opacity 0.13s cubic-bezier(0.5, 0, 1, 1) 0s, visibility 0s linear 0.13s, transform 0s linear 0.13s;
            transition: opacity 0.13s cubic-bezier(0.5, 0, 1, 1) 0s, visibility 0s linear 0.13s, transform 0s linear 0.13s;
            transition: opacity 0.13s cubic-bezier(0.5, 0, 1, 1) 0s, visibility 0s linear 0.13s, transform 0s linear 0.13s, -webkit-transform 0s linear 0.13s;
        }

        .spectrum-Dialog.is-open {
            -webkit-transition: opacity 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, -webkit-transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s;
            transition: opacity 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, -webkit-transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s;
            -o-transition: transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, opacity 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s;
            transition: transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, opacity 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s;
            transition: transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, opacity 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s, -webkit-transform 0.25s cubic-bezier(0, 0, 0.4, 1) 0.16s;
            -webkit-transform: translate(-50%, -webkit-calc(-50% - 2vh));
            -ms-transform: translate(-50%, calc(-50% - 2vh));
            transform: translate(-50%, calc(-50% - 2vh));
        }

        .spectrum-Dialog .spectrum-Dialog-closeButton {
            display: none;
        }

        .spectrum-Dialog--small {
            width: 400px;
        }

        .spectrum-Dialog--medium {
            width: 480px;
        }

        .spectrum-Dialog--large {
            width: 640px;
        }

        .spectrum-Dialog-header {
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            border-radius: 4px 4px 0 0;
            outline: 0;
            padding-bottom: 30px;
        }

        .spectrum-Dialog-header:after {
            position: absolute;
            bottom: 16px;
            left: 0;
            right: 0;
            content: '';
            height: 2px;
        }

        .spectrum-Dialog-wrapper {
            position: fixed;
            left: 0;
            top: 0;
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -ms-flex-pack: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            justify-content: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            visibility: hidden;
            pointer-events: none;
            z-index: 2;
            -webkit-transition: visibility 0s linear 0.13s;
            -o-transition: visibility 0s linear 0.13s;
            transition: visibility 0s linear 0.13s;
        }

        .spectrum-Dialog-wrapper.is-open {
            visibility: visible;
        }

        .spectrum-Dialog-wrapper .spectrum-Dialog:not(.spectrum-Dialog--fullscreen):not(.spectrum-Dialog--fullscreenTakeover) {
            pointer-events: auto;
            position: relative;
            left: auto;
            top: auto;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px);
            margin-top: -2vh;
        }

        .spectrum-Dialog-wrapper .spectrum-Dialog:not(.spectrum-Dialog--fullscreen):not(.spectrum-Dialog--fullscreenTakeover).is-open {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        .spectrum-Dialog--dismissible .spectrum-Dialog-footer {
            display: none;
        }

        .spectrum-Dialog--dismissible .spectrum-Dialog-closeButton {
            display: initial;
        }

        .spectrum-Dialog-closeButton {
            position: absolute;
            top: -28px;
            right: -28px;
        }

        .spectrum-Dialog-typeIcon {
            display: block;
        }

        .spectrum-Dialog-content {
            display: block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            outline: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
        }

        .spectrum-Dialog-footer {
            border-radius: 0 0 4px 4px;
            padding-top: 28px;
            -ms-flex: 0 1 auto;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -moz-box-flex: 0;
            flex: 0 1 auto;
            -ms-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-pack: end;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -moz-box-pack: end;
            justify-content: flex-end;
            outline: 0;
            margin: 0 -8px -8px;
        }

        .spectrum-Dialog-footer>*,
        .spectrum-Dialog-footer>.spectrum-Button+.spectrum-Button {
            margin: 8px;
        }

        .spectrum-Dialog-title {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            outline: 0;
        }

        .spectrum-Dialog--alert {
            width: 480px;
        }

        .spectrum-Dialog--fullscreen {
            left: 32px;
            top: 32px;
            right: 32px;
            bottom: 32px;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px);
        }

        .spectrum-Dialog--fullscreen.is-open {
            -webkit-transform: translate(0);
            -ms-transform: translate(0);
            transform: translate(0);
        }

        .spectrum-Dialog--fullscreen,
        .spectrum-Dialog--fullscreenTakeover {
            width: auto;
            max-height: none;
            max-width: none;
            padding-top: 30px;
        }

        .spectrum-Dialog--fullscreen .spectrum-Dialog-header,
        .spectrum-Dialog--fullscreenTakeover .spectrum-Dialog-header {
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
        }

        .spectrum-Dialog--fullscreen .spectrum-Dialog-title,
        .spectrum-Dialog--fullscreenTakeover .spectrum-Dialog-title {
            font-size: 28px;
            font-weight: 100;
        }

        .spectrum-Dialog--fullscreen .spectrum-Dialog-content,
        .spectrum-Dialog--fullscreenTakeover .spectrum-Dialog-content {
            max-height: none;
        }

        .spectrum-Dialog--fullscreenTakeover {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: none;
            border-radius: 0;
        }

        .spectrum-Dialog--fullscreenTakeover,
        .spectrum-Dialog--fullscreenTakeover.is-open {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        @media (-ms-high-contrast: none),
        screen and (-ms-high-contrast: active) {
            .spectrum-Dialog-content {
                max-height: 70vh;
            }
        }

        .spectrum--lightest .spectrum-Dialog,
        .spectrum--lightest .spectrum-Dialog-header {
            background: #fff;
        }

        .spectrum--lightest .spectrum-Dialog-header:after {
            background: #eaeaea;
        }

        .spectrum--lightest .spectrum-Dialog-title {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dialog-content {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Dialog-typeIcon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dialog-footer {
            background: #fff;
        }

        .spectrum--lightest .spectrum-Dialog--error .spectrum-Dialog-title,
        .spectrum--lightest .spectrum-Dialog--error .spectrum-Dialog-typeIcon {
            color: #d7373f;
        }

        .spectrum--darkest .spectrum-Dialog,
        .spectrum--darkest .spectrum-Dialog-header {
            background: #1e1e1e;
        }

        .spectrum--darkest .spectrum-Dialog-header:after {
            background: #393939;
        }

        .spectrum--darkest .spectrum-Dialog-title {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dialog-content {
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Dialog-typeIcon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dialog-footer {
            background: #1e1e1e;
        }

        .spectrum--darkest .spectrum-Dialog--error .spectrum-Dialog-title,
        .spectrum--darkest .spectrum-Dialog--error .spectrum-Dialog-typeIcon {
            color: #ec5b62;
        }

        .spectrum-Underlay {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            -o-transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            pointer-events: none;
        }

        .spectrum-Underlay.is-open {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            pointer-events: auto;
        }

        .spectrum-Underlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            overflow: hidden;
            -webkit-transition: opacity 0.19s cubic-bezier(0.5, 0, 1, 1) 0.16s, visibility 0s linear 0.35s;
            -o-transition: opacity 0.19s cubic-bezier(0.5, 0, 1, 1) 0.16s, visibility 0s linear 0.35s;
            transition: opacity 0.19s cubic-bezier(0.5, 0, 1, 1) 0.16s, visibility 0s linear 0.35s;
        }

        .spectrum-Underlay.is-open {
            -webkit-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1) 0s;
            -o-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1) 0s;
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1) 0s;
        }

        .spectrum--lightest .spectrum-Underlay {
            background: rgba(0, 0, 0, 0.4);
        }

        .spectrum--darkest .spectrum-Underlay {
            background: rgba(0, 0, 0, 0.6);
        }

        .spectrum-Dropdown {
            position: relative;
            display: inline-block;
            max-width: 100%;
            width: 192px;
            min-width: 48px;
        }

        .spectrum-Dropdown select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -ms-appearance: none;
        }

        .spectrum-Dropdown select::-ms-expand {
            display: none;
        }

        .spectrum-Dropdown select::-ms-value {
            background-color: rgba(0, 0, 0, 0);
        }

        .spectrum-Dropdown select+.spectrum-Dropdown-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            margin-top: -3px;
        }

        .spectrum-Dropdown-trigger {
            position: relative;
            width: 100%;
            display: -ms-flexbox;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -ms-flex-pack: justify;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
        }

        .spectrum-Dropdown-label {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            flex: 1 1 auto;
            white-space: nowrap;
            overflow: hidden;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            text-align: left;
        }

        .spectrum-Dropdown-label.is-placeholder {
            font-weight: 400;
            font-style: italic;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum-Dropdown-label+.spectrum-Dropdown-icon {
            margin-left: 12px;
        }

        .spectrum-Icon+.spectrum-Dropdown-label {
            margin-left: 8px;
        }

        .spectrum-Dropdown-label~.spectrum-Dropdown-icon {
            margin-left: 12px;
        }

        .spectrum-Dropdown-icon {
            display: inline-block;
            position: relative;
            vertical-align: top;
            -webkit-transition: color 0.13s ease-out;
            -o-transition: color 0.13s ease-out;
            transition: color 0.13s ease-out;
            margin-top: 12px;
            margin-bottom: 12px;
            opacity: 1;
        }

        .spectrum-Dropdown-trigger .spectrum-Icon:not(.spectrum-Dropdown-icon) {
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .spectrum-Dropdown-trigger .spectrum-Dropdown-label+.spectrum-Icon:not(.spectrum-Dropdown-icon) {
            margin-left: 12px;
        }

        .spectrum-Icon+.spectrum-Dropdown-icon {
            margin-left: 8px;
        }

        .spectrum-Dropdown--quiet {
            width: auto;
            min-width: 48px;
        }

        .spectrum-Dropdown-popover {
            max-width: 240px;
        }

        .spectrum-Dropdown-popover--quiet {
            margin-left: -13px;
        }

        .spectrum--lightest .spectrum-Dropdown .spectrum-Dropdown-trigger:hover .spectrum-Dropdown-icon {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dropdown .spectrum-Dropdown-trigger.is-selected .is-placeholder {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dropdown.is-invalid .spectrum-Icon:not(.spectrum-Dropdown-icon):not(.spectrum-Menu-checkmark) {
            color: #d7373f;
        }

        .spectrum--lightest .spectrum-Dropdown.is-invalid.is-disabled .spectrum-Icon,
        .spectrum--lightest .spectrum-Dropdown.is-invalid.is-disabled .spectrum-Icon:not(.spectrum-Dropdown-icon):not(.spectrum-Menu-checkmark) {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-icon,
        .spectrum--lightest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-trigger:hover .spectrum-Dropdown-icon {
            color: #d3d3d3;
        }

        .spectrum--lightest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-label.is-placeholder {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Dropdown-icon {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Dropdown-label.is-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Dropdown-label.is-placeholder:hover {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dropdown-label.is-placeholder:active {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Dropdown-trigger.focus-ring .spectrum-Dropdown-icon,
        .spectrum--lightest .spectrum-Dropdown-trigger.focus-ring .spectrum-Dropdown-label.is-placeholder {
            color: #323232;
        }

        .spectrum--darkest .spectrum-Dropdown .spectrum-Dropdown-trigger:hover .spectrum-Dropdown-icon {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dropdown .spectrum-Dropdown-trigger.is-selected .is-placeholder {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dropdown.is-invalid .spectrum-Icon:not(.spectrum-Dropdown-icon):not(.spectrum-Menu-checkmark) {
            color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Dropdown.is-invalid.is-disabled .spectrum-Icon,
        .spectrum--darkest .spectrum-Dropdown.is-invalid.is-disabled .spectrum-Icon:not(.spectrum-Dropdown-icon):not(.spectrum-Menu-checkmark) {
            color: #494949;
        }

        .spectrum--darkest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-icon,
        .spectrum--darkest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-trigger:hover .spectrum-Dropdown-icon {
            color: #494949;
        }

        .spectrum--darkest .spectrum-Dropdown.is-disabled .spectrum-Dropdown-label.is-placeholder {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Dropdown-icon {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Dropdown-label.is-placeholder {
            color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Dropdown-label.is-placeholder:hover {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dropdown-label.is-placeholder:active {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Dropdown-trigger.focus-ring .spectrum-Dropdown-icon,
        .spectrum--darkest .spectrum-Dropdown-trigger.focus-ring .spectrum-Dropdown-label.is-placeholder {
            color: #efefef;
        }

        .react-spectrum-Dropdown-fixed {
            min-width: 192px;
        }

        .spectrum-Dropdown.react-spectrum-Dropdown-flexible {
            min-width: 0;
            width: auto;
        }

        .DateOfBirthChooser {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
        }

        .DateOfBirthChooser__label .TooltipFieldLabel__content {
            margin-top: 10px;
        }

        .DateOfBirthChooser__month {
            -webkit-flex-basis: 1px;
            -ms-flex-preferred-size: 1px;
            flex-basis: 1px;
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -moz-box-flex: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
        }

        .DateOfBirthChooser__month .spectrum-Dropdown {
            min-width: auto;
            min-width: 0;
            width: 100%;
        }

        .DateOfBirthChooser__day,
        .DateOfBirthChooser__year {
            -webkit-flex-basis: 1px;
            -ms-flex-preferred-size: 1px;
            flex-basis: 1px;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .DateOfBirthChooser__day .spectrum-Textfield :not(.is-valid):valid,
        .DateOfBirthChooser__year .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .DateOfBirthChooser__day .spectrum-Textfield :not(.is-valid):focus:valid,
        .DateOfBirthChooser__year .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .DateOfBirthChooser__day .spectrum-Textfield:not(.is-invalid):invalid,
        .DateOfBirthChooser__year .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .DateOfBirthChooser__day .spectrum-Textfield:not(.is-invalid):focus:invalid,
        .DateOfBirthChooser__year .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .DateOfBirthChooser__day input,
        .DateOfBirthChooser__year input {
            min-width: 0;
        }

        .DateOfBirthChooser__day:not(:first-child),
        .DateOfBirthChooser__month:not(:first-child),
        .DateOfBirthChooser__year:not(:first-child) {
            margin-left: 16px;
        }

        .DateOfBirthChooser .spectrum-FieldButton--quiet {
            border-bottom: 1px solid #eaeaea;
        }

        .spectrum-Label {
            display: inline-block;
            position: relative;
            width: auto;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
            line-height: 1.5;
            cursor: default;
            -webkit-font-smoothing: subpixel-antialiased;
            -moz-osx-font-smoothing: auto;
            font-smoothing: subpixel-antialiased;
        }

        .spectrum-Label--large {
            font-size: 14px;
            padding: 8px 12px;
        }

        .spectrum-Label--small {
            font-size: 11px;
            padding: 3px 7px;
        }

        .spectrum--lightest .spectrum-Label {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Label--grey,
        .spectrum--lightest .spectrum-Label--inactive {
            background-color: #747474;
        }

        .spectrum--lightest .spectrum-Label--red {
            background-color: #d7373f;
        }

        .spectrum--lightest .spectrum-Label--or,
        .spectrum--lightest .spectrum-Label--orange {
            background-color: #da7b11;
        }

        .spectrum--lightest .spectrum-Label--seafoam {
            background-color: #20a3a8;
        }

        .spectrum--lightest .spectrum-Label--green {
            background-color: #268e6c;
        }

        .spectrum--lightest .spectrum-Label--active,
        .spectrum--lightest .spectrum-Label--and,
        .spectrum--lightest .spectrum-Label--blue {
            background-color: #1473e6;
        }

        .spectrum--darkest .spectrum-Label {
            color: #fff;
        }

        .spectrum--darkest .spectrum-Label--grey,
        .spectrum--darkest .spectrum-Label--inactive {
            background-color: #747474;
        }

        .spectrum--darkest .spectrum-Label--red {
            background-color: #d7373f;
        }

        .spectrum--darkest .spectrum-Label--or,
        .spectrum--darkest .spectrum-Label--orange {
            background-color: #da7b11;
        }

        .spectrum--darkest .spectrum-Label--seafoam {
            background-color: #16878c;
        }

        .spectrum--darkest .spectrum-Label--green {
            background-color: #268e6c;
        }

        .spectrum--darkest .spectrum-Label--active,
        .spectrum--darkest .spectrum-Label--and,
        .spectrum--darkest .spectrum-Label--blue {
            background-color: #1473e6;
        }

        .EnvironmentInfo {
            opacity: 0.6;
            position: fixed;
            right: 20px;
            text-align: right;
            top: 30px;
            z-index: 1000;
        }

        .EnvironmentInfo>* {
            margin-left: 10px;
        }

        @media screen and (max-width: 767px) {
            .EnvironmentInfo {
                max-width: 200px;
            }
        }

        .GetHelpOption-Details {
            font-size: 12px;
        }

        .IconMessage__message-container .Icon img {
            width: 100%;
        }

        .IconMessage__message-container>.GetHelpOption__icon {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
            height: 100%;
        }

        .IconMessage__container {
            font-size: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
        }

        .IconMessage__icon {
            width: 56px;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start;
        }

        .IconMessage__icon img {
            margin: 0 auto;
        }

        .IconMessage__wait {
            width: 56px;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start;
        }

        .IconMessage__wait-img {
            margin: 12px;
        }

        .IconMessage__description {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
            font-size: 18px;
            margin-bottom: 10px;
            width: -webkit-calc(100% - 80px);
            width: calc(100% - 80px);
        }

        .MarketingConsent--loading {
            text-align: center;
        }

        .MarketingConsent__list {
            list-style: none;
            padding: 0;
        }

        .MarketingConsent__list-item {
            margin-bottom: 10px;
        }

        .MarketingConsent__list .spectrum-Checkbox {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            height: auto;
        }

        .MarketingConsent__list .spectrum-Checkbox-box {
            margin-top: 4px;
        }

        .MarketingConsent__list .spectrum-Checkbox-label {
            overflow: initial;
            -o-text-overflow: initial;
            text-overflow: clip;
            white-space: normal;
        }

        .MarketingConsent-SouthKorea .MarketingConsent__list .spectrum-Checkbox-label {
            margin-top: 0;
        }

        .spectrum-Checkbox {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-align: start;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            align-items: flex-start;
            position: relative;
            min-height: 32px;
            max-width: 100%;
            margin-right: 16px;
            vertical-align: top;
        }

        .spectrum-Checkbox-input {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
            overflow: visible;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            position: absolute;
            top: 0;
            left: -8px;
            width: -webkit-calc(100% + 16px);
            width: calc(100% + 16px);
            height: 100%;
            opacity: 0.0001;
            z-index: 1;
            cursor: pointer;
        }

        .spectrum-Checkbox-input:disabled {
            cursor: default;
        }

        .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-width: 7px;
        }

        .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box .spectrum-Checkbox-checkmark {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-box,
        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-width: 7px;
        }

        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-box .spectrum-Checkbox-checkmark,
        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box .spectrum-Checkbox-checkmark {
            display: none;
        }

        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-box .spectrum-Checkbox-partialCheckmark,
        .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box .spectrum-Checkbox-partialCheckmark {
            display: block;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        .spectrum-Checkbox-label {
            margin-left: 10px;
            font-size: 14px;
            font-weight: 400;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            margin-top: 6px;
        }

        .spectrum-Checkbox-box {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 14px;
            height: 14px;
            margin: 9px 0;
            -ms-flex-positive: 0;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-box-flex: 0;
            flex-grow: 0;
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            border-radius: 2px;
            border-width: 2px;
            border-style: solid;
            -webkit-transition: border 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: border 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: border 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
        }

        .spectrum-Checkbox-checkmark,
        .spectrum-Checkbox-partialCheckmark {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -5px;
            margin-left: -5px;
            opacity: 0;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: opacity 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out;
            -o-transition: opacity 0.13s ease-in-out, transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, transform 0.13s ease-in-out, -webkit-transform 0.13s ease-in-out;
        }

        .spectrum-Checkbox-partialCheckmark {
            display: none;
        }

        .spectrum--lightest .spectrum-Checkbox-label {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Checkbox-box {
            border-color: #959595;
            background-color: #fff;
        }

        .spectrum--lightest .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-box {
            border-color: #2680eb;
        }

        .spectrum--lightest .spectrum-Checkbox:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox:hover.is-indeterminate .spectrum-Checkbox-box {
            border-color: #1473e6;
        }

        .spectrum--lightest .spectrum-Checkbox:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox:active.is-indeterminate .spectrum-Checkbox-box {
            border-color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Checkbox {
            border-color: #959595;
        }

        .spectrum--lightest .spectrum-Checkbox:hover .spectrum-Checkbox-box {
            border-color: #747474;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--lightest .spectrum-Checkbox:hover .spectrum-Checkbox-label {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Checkbox:active .spectrum-Checkbox-box {
            border-color: #505050;
        }

        .spectrum--lightest .spectrum-Checkbox:active .spectrum-Checkbox-label {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Checkbox .spectrum-Checkbox-checkmark,
        .spectrum--lightest .spectrum-Checkbox .spectrum-Checkbox-partialCheckmark {
            color: #fff;
        }

        .spectrum--lightest .spectrum-Checkbox-input:disabled+.spectrum-Checkbox-box {
            border-color: #d3d3d3 !important;
            background-color: #fff;
        }

        .spectrum--lightest .spectrum-Checkbox-input:disabled~.spectrum-Checkbox-label {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Checkbox-input.focus-ring+.spectrum-Checkbox-box {
            border-color: #378ef0 !important;
            -webkit-box-shadow: 0 0 0 1px #378ef0 !important;
            box-shadow: 0 0 0 1px #378ef0 !important;
        }

        .spectrum--lightest .spectrum-Checkbox-input.focus-ring~.spectrum-Checkbox-label {
            color: #1473e6 !important;
        }

        .spectrum--lightest .spectrum-Checkbox--quiet .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox--quiet.is-indeterminate .spectrum-Checkbox-box {
            border-color: #747474;
        }

        .spectrum--lightest .spectrum-Checkbox--quiet:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox--quiet:hover.is-indeterminate .spectrum-Checkbox-box {
            border-color: #505050;
        }

        .spectrum--lightest .spectrum-Checkbox--quiet:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox--quiet:active.is-indeterminate .spectrum-Checkbox-box {
            border-color: #323232;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #e34850;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-label {
            color: #d7373f;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #d7373f;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-label {
            color: #c9252d;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-box,
        .spectrum--lightest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #c9252d;
        }

        .spectrum--lightest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-label {
            color: #c9252d;
        }

        .spectrum--darkest .spectrum-Checkbox-label {
            color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Checkbox-box {
            border-color: #7c7c7c;
            background-color: #1a1a1a;
        }

        .spectrum--darkest .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox.is-indeterminate .spectrum-Checkbox-box {
            border-color: #2680eb;
        }

        .spectrum--darkest .spectrum-Checkbox:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox:hover.is-indeterminate .spectrum-Checkbox-box {
            border-color: #378ef0;
        }

        .spectrum--darkest .spectrum-Checkbox:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox:active.is-indeterminate .spectrum-Checkbox-box {
            border-color: #4b9cf5;
        }

        .spectrum--darkest .spectrum-Checkbox {
            border-color: #7c7c7c;
        }

        .spectrum--darkest .spectrum-Checkbox:hover .spectrum-Checkbox-box {
            border-color: #a2a2a2;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--darkest .spectrum-Checkbox:hover .spectrum-Checkbox-label {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Checkbox:active .spectrum-Checkbox-box {
            border-color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Checkbox:active .spectrum-Checkbox-label {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Checkbox .spectrum-Checkbox-checkmark,
        .spectrum--darkest .spectrum-Checkbox .spectrum-Checkbox-partialCheckmark {
            color: #1a1a1a;
        }

        .spectrum--darkest .spectrum-Checkbox-input:disabled+.spectrum-Checkbox-box {
            border-color: #494949 !important;
            background-color: #1a1a1a;
        }

        .spectrum--darkest .spectrum-Checkbox-input:disabled~.spectrum-Checkbox-label {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Checkbox-input.focus-ring+.spectrum-Checkbox-box {
            border-color: #1473e6 !important;
            -webkit-box-shadow: 0 0 0 1px #1473e6 !important;
            box-shadow: 0 0 0 1px #1473e6 !important;
        }

        .spectrum--darkest .spectrum-Checkbox-input.focus-ring~.spectrum-Checkbox-label {
            color: #378ef0 !important;
        }

        .spectrum--darkest .spectrum-Checkbox--quiet .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox--quiet.is-indeterminate .spectrum-Checkbox-box {
            border-color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Checkbox--quiet:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox--quiet:hover.is-indeterminate .spectrum-Checkbox-box {
            border-color: #c8c8c8;
        }

        .spectrum--darkest .spectrum-Checkbox--quiet:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox--quiet:active.is-indeterminate .spectrum-Checkbox-box {
            border-color: #efefef;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #e34850;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid .spectrum-Checkbox-label {
            color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid:hover .spectrum-Checkbox-label {
            color: #f76d74;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-box,
        .spectrum--darkest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-input:checked+.spectrum-Checkbox-box {
            border-color: #f76d74;
        }

        .spectrum--darkest .spectrum-Checkbox.is-invalid:active .spectrum-Checkbox-label {
            color: #f76d74;
        }

        .SouthKoreaExplicit__list {
            list-style: none;
            padding: 0;
            margin-bottom: 10px;
        }

        .SouthKoreaExplicit__list .spectrum-Checkbox-label {
            overflow: initial;
            -o-text-overflow: initial;
            text-overflow: clip;
            white-space: normal;
        }

        .spectrum--darkest .PasswordField.is-valid+.PasswordField__input-border {
            background-color: #393939;
        }

        .spectrum--darkest .PasswordField .PasswordField__input-border {
            background-color: #393939;
        }

        .PasswordField {
            position: relative;
        }

        .PasswordField input.spectrum-Textfield {
            width: -webkit-calc(100% - 30px);
            width: calc(100% - 30px);
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .PasswordField input.spectrum-Textfield.is-invalid,
        .PasswordField input.spectrum-Textfield.is-valid {
            width: 100%;
            padding-right: 45px;
        }

        .PasswordField input.spectrum-Textfield.is-invalid~.spectrum-Tool,
        .PasswordField input.spectrum-Textfield.is-valid~.spectrum-Tool {
            right: 20px;
        }

        .PasswordField input.spectrum-Textfield.is-invalid~.spectrum-Tool+span,
        .PasswordField input.spectrum-Textfield.is-valid~.spectrum-Tool+span {
            left: -webkit-calc(100% - 70px) !important;
            left: calc(100% - 70px) !important;
        }

        .PasswordField input.spectrum-Textfield.is-invalid+.PasswordField__input-border {
            background-color: #e34850;
        }

        .PasswordField input.spectrum-Textfield.is-invalid:focus+.PasswordField__input-border {
            -webkit-box-shadow: 0 1px 0 #e34850;
            box-shadow: 0 1px 0 #e34850;
        }

        .PasswordField input.spectrum-Textfield.is-valid+.PasswordField__input-border {
            background-color: #eaeaea;
        }

        .PasswordField input.spectrum-Textfield.is-valid:focus+.PasswordField__input-border {
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PasswordField input.spectrum-Textfield:focus+.PasswordField__input-border {
            background-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PasswordField .PasswordField__input-border {
            display: block;
            height: 1px;
            background-color: #eaeaea;
            -webkit-transition: background-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: background-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: background-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: background-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: background-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
        }

        .PasswordField-VisibilityToggle {
            position: absolute;
            right: 0;
            top: -2px;
        }

        .PasswordStrength {
            list-style: none;
            margin: 8px 0 0;
            padding: 0;
        }

        .PasswordStrength__rule {
            padding-left: 22px;
            position: relative;
        }

        .PasswordStrength__spinner {
            left: 0;
            position: absolute;
            top: 6px;
            -webkit-transform: scale(0.65);
            -ms-transform: scale(0.65);
            transform: scale(0.65);
        }

        .PasswordStrength__spinner .spectrum-CircleLoader-fill {
            border-color: #b3b3b3;
        }

        .PasswordStrength__icon {
            left: 0;
            position: absolute;
            top: 6px;
            width: 6px;
        }

        .PasswordStrength__rule--failed .PasswordStrength__icon,
        .PasswordStrength__rule--passed .PasswordStrength__icon {
            top: 8px;
            width: 8px;
        }

        .PasswordStrength__rule--passed {
            color: #12805c;
        }

        .PasswordStrength__rule--failed {
            color: #d7373f;
        }

        .PasswordStrength__rule--hidden {
            display: none;
        }

        .Context {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-basis: 1px;
            -ms-flex-preferred-size: 1px;
            flex-basis: 1px;
        }

        .Context__header {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 8px;
        }

        .Context__header-title {
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            color: #505050;
            margin: 0;
        }

        .Context__body-notice,
        .Context__copy {
            font-weight: 400;
        }

        .Context__copy {
            font-size: 16px;
            line-height: 24px;
            color: #fff;
            margin: 0;
        }

        .Context__links .spectrum-Link {
            font-size: 12px;
            line-height: 15px;
            font-weight: 400;
            color: #747474;
            margin-left: 24px;
            text-decoration: underline;
        }

        .Context__links .spectrum-Link:hover {
            color: #747474;
        }

        .Context__links .spectrum-Link:first-child {
            margin-left: 0;
        }

        .Context__Shared-Device .Context {
            margin: 0;
        }

        .Context__Shared-Device .Context__header-title {
            font-size: 11px;
            line-height: 14px;
            font-weight: 600;
            margin: 0;
        }

        .Context__Shared-Device .Context__body {
            font-size: 12px;
            line-height: 19px;
            font-weight: 400;
            color: #747474;
            margin-bottom: 10px;
        }

        .Context__Shared-Device .Context__body-list {
            padding-left: 16px;
            margin: 4px 0 0;
        }

        @media screen and (min-width: 768px) and (max-width: 1023px) {
            .Context {
                padding: 0;
                margin-top: 10px;
            }
        }

        @media screen and (min-width: 1024px) {
            .Context {
                -webkit-align-self: center;
                -ms-flex-item-align: center;
                -ms-grid-row-align: center;
                align-self: center;
            }

            .Context__copy {
                font-size: 20px;
                font-weight: 300;
                color: #f4f4f4;
            }

            .Context__links .spectrum-Link {
                font-size: 16px;
                line-height: 24px;
                color: #f4f4f4;
            }

            .Context__links .spectrum-Link:hover {
                color: #f4f4f4;
            }

            .Context__Shared-Device .Context__header-title {
                font-size: 28px;
                line-height: 36px;
                font-weight: 500;
                color: #f4f4f4;
            }

            .Context__Shared-Device .Context__body {
                font-size: 18px;
                line-height: 27px;
                color: #f4f4f4;
            }

            .Context__Shared-Device .Context__body-list {
                font-weight: 600;
                padding-left: 24px;
            }
        }

        @media screen and (min-width: 1280px) {
            .Context__header-title {
                font-size: 36px;
                line-height: 47px;
                font-weight: 400;
                color: #f4f4f4;
            }

            .Context__header-icon--default {
                height: 48px;
            }
        }

        @media screen and (max-width: 1023px) {
            .Context__Shared-Device {
                padding: 0 0 14px;
                border-bottom: 1px solid #eaeaea;
                margin: 0 0 32px;
            }

            .Context__Shared-Device .Context__header-title {
                text-transform: uppercase;
                letter-spacing: 0.66px;
            }
        }

        .Profile:after {
            clear: both;
            content: '';
            display: block;
        }

        .Profile-Name {
            font-size: 14px;
            font-weight: 700;
            margin-top: 0;
            color: #323232;
        }

        .Profile-Email {
            word-break: break-all;
        }

        .Profile-Picture {
            border-radius: 50%;
            height: 64px;
            margin-right: 12px;
            overflow: hidden;
            width: 64px;
        }

        .Profile-Details,
        .Profile-Picture {
            display: inline-block;
            vertical-align: middle;
        }

        .Profile-Type {
            color: #505050;
            font-size: 11px;
            word-break: break-word;
        }

        .Profile-Type--text-big {
            color: #747474;
            font-size: 18px;
            text-transform: none;
        }

        .Profile-Recommended {
            color: #747474;
            font-size: 18px;
            font-style: italic;
        }

        .spectrum--darkest .RuleWithText {
            color: #a2a2a2;
        }

        .spectrum--darkest .RuleWithText:after,
        .spectrum--darkest .RuleWithText:before {
            border-bottom: 1px solid #393939;
        }

        .RuleWithText {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
            color: #4b4b4b;
            font-size: 17px;
            font-weight: 300;
            line-height: 23px;
        }

        .RuleWithText:after,
        .RuleWithText:before {
            content: '';
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -moz-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            border-bottom: 1px solid #eaeaea;
        }

        .RuleWithText:not(:empty):before {
            margin-right: 0.5em;
        }

        .RuleWithText:not(:empty):after {
            margin-left: 0.5em;
        }

        .SpinnerButton {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }

        .SpinnerButton .spectrum-Button-label {
            width: auto;
        }

        .SpinnerButton--left .spectrum-Button-label {
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -moz-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .SpinnerButton--left .spectrum-CircleLoader {
            margin-right: 8px;
        }

        .SpinnerButton--left .spectrum-CircleLoader,
        .SpinnerButton--right .spectrum-Button-label {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -moz-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .SpinnerButton--right .spectrum-CircleLoader {
            margin-left: 8px;
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -moz-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .spectrum-Tooltip {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            transition: opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            -o-transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s;
            transition: transform 0.13s ease-in-out, opacity 0.13s ease-in-out, visibility 0s linear 0.13s, -webkit-transform 0.13s ease-in-out;
            pointer-events: none;
        }

        .spectrum-Tooltip.is-open {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            pointer-events: auto;
        }

        .spectrum-Tooltip--bottom.is-open {
            -webkit-transform: translateY(6px);
            -ms-transform: translateY(6px);
            transform: translateY(6px);
        }

        .spectrum-Tooltip--top.is-open {
            -webkit-transform: translateY(-6px);
            -ms-transform: translateY(-6px);
            transform: translateY(-6px);
        }

        .spectrum-Tooltip--right.is-open {
            -webkit-transform: translateX(6px);
            -ms-transform: translateX(6px);
            transform: translateX(6px);
        }

        .spectrum-Tooltip--left.is-open {
            -webkit-transform: translateX(-6px);
            -ms-transform: translateX(-6px);
            transform: translateX(-6px);
        }

        .spectrum-Tooltip {
            position: relative;
            left: 0;
            top: 0;
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-direction: row;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            flex-direction: row;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            vertical-align: top;
            width: auto;
            padding: 4px 10px;
            border-radius: 4px;
            min-height: 24px;
            font-size: 12px;
            font-weight: 400;
            line-height: 16px;
            word-break: break-word;
            -webkit-font-smoothing: antialiased;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .spectrum-Tooltip p {
            margin: 0;
        }

        .spectrum-Tooltip-tip {
            position: absolute;
            height: 0;
            width: 0;
            border-top-width: 4px;
            border-top-style: solid;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid transparent;
        }

        .spectrum-Tooltip--left .spectrum-Tooltip-tip,
        .spectrum-Tooltip--right .spectrum-Tooltip-tip {
            top: 50%;
            margin-top: -4px;
        }

        .spectrum-Tooltip--right {
            margin-left: 3px;
        }

        .spectrum-Tooltip--right .spectrum-Tooltip-tip {
            right: 100%;
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .spectrum-Tooltip--left {
            margin-right: 3px;
        }

        .spectrum-Tooltip--left .spectrum-Tooltip-tip {
            left: 100%;
            -webkit-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .spectrum-Tooltip--top {
            margin-bottom: 3px;
        }

        .spectrum-Tooltip--top .spectrum-Tooltip-tip {
            top: 100%;
        }

        .spectrum-Tooltip--bottom {
            margin-top: 3px;
        }

        .spectrum-Tooltip--bottom .spectrum-Tooltip-tip {
            bottom: 100%;
            -webkit-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .spectrum-Tooltip--bottom .spectrum-Tooltip-tip,
        .spectrum-Tooltip--top .spectrum-Tooltip-tip {
            left: 50%;
            margin-left: -4px;
        }

        .spectrum-Tooltip-typeIcon {
            margin-left: -2px;
            margin-right: 8px;
            width: 14px;
            height: 14px;
            -ms-flex-item-align: start;
            -webkit-align-self: flex-start;
            align-self: flex-start;
            margin-top: 1px;
        }

        .spectrum-Tooltip-label {
            max-width: 101px;
            line-height: 16px;
        }

        .spectrum--lightest .spectrum-Tooltip {
            background-color: #747474;
            color: #fff;
        }

        .spectrum--lightest .spectrum-Tooltip-tip {
            border-top-color: #747474;
        }

        .spectrum--lightest .spectrum-Tooltip--error,
        .spectrum--lightest .spectrum-Tooltip--negative {
            background-color: #c9252d;
        }

        .spectrum--lightest .spectrum-Tooltip--error .spectrum-Tooltip-tip,
        .spectrum--lightest .spectrum-Tooltip--negative .spectrum-Tooltip-tip {
            border-top-color: #c9252d;
        }

        .spectrum--lightest .spectrum-Tooltip--help,
        .spectrum--lightest .spectrum-Tooltip--info {
            background-color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Tooltip--help .spectrum-Tooltip-tip,
        .spectrum--lightest .spectrum-Tooltip--info .spectrum-Tooltip-tip {
            border-top-color: #0d66d0;
        }

        .spectrum--lightest .spectrum-Tooltip--positive,
        .spectrum--lightest .spectrum-Tooltip--success {
            background-color: #12805c;
        }

        .spectrum--lightest .spectrum-Tooltip--positive .spectrum-Tooltip-tip,
        .spectrum--lightest .spectrum-Tooltip--success .spectrum-Tooltip-tip {
            border-top-color: #12805c;
        }

        .spectrum--darkest .spectrum-Tooltip {
            background-color: #747474;
            color: #fff;
        }

        .spectrum--darkest .spectrum-Tooltip-tip {
            border-top-color: #747474;
        }

        .spectrum--darkest .spectrum-Tooltip--error,
        .spectrum--darkest .spectrum-Tooltip--negative {
            background-color: #c9252d;
        }

        .spectrum--darkest .spectrum-Tooltip--error .spectrum-Tooltip-tip,
        .spectrum--darkest .spectrum-Tooltip--negative .spectrum-Tooltip-tip {
            border-top-color: #c9252d;
        }

        .spectrum--darkest .spectrum-Tooltip--help,
        .spectrum--darkest .spectrum-Tooltip--info {
            background-color: #0d66d0;
        }

        .spectrum--darkest .spectrum-Tooltip--help .spectrum-Tooltip-tip,
        .spectrum--darkest .spectrum-Tooltip--info .spectrum-Tooltip-tip {
            border-top-color: #0d66d0;
        }

        .spectrum--darkest .spectrum-Tooltip--positive,
        .spectrum--darkest .spectrum-Tooltip--success {
            background-color: #12805c;
        }

        .spectrum--darkest .spectrum-Tooltip--positive .spectrum-Tooltip-tip,
        .spectrum--darkest .spectrum-Tooltip--success .spectrum-Tooltip-tip {
            border-top-color: #12805c;
        }

        .TooltipFieldLabel {
            width: 100%;
        }

        .TooltipFieldLabel .spectrum-FieldLabel {
            display: inline-block;
        }

        .TooltipFieldLabel .TooltipFieldLabel__tooltip-icon {
            display: inline-block;
            margin-left: 8px;
            margin-top: 2px;
            max-height: 16px;
            max-width: 16px;
            min-height: 0;
            min-width: 0;
            text-align: left;
        }

        .TooltipFieldLabel .TooltipFieldLabel__tooltip-icon .spectrum-Icon {
            color: #0d66d0 !important;
            vertical-align: initial;
        }

        .TooltipFieldLabel__tooltip {
            min-height: 0;
            min-width: 0;
            position: relative;
        }

        .TooltipFieldLabel__tooltip .spectrum-Tooltip-label {
            max-width: 180px;
        }

        .TooltipFieldLabel__tooltip .spectrum-Link,
        .TooltipFieldLabel__tooltip .spectrum-Link:focus,
        .TooltipFieldLabel__tooltip .spectrum-Link:hover {
            color: #fff;
            text-decoration: underline;
        }

        .Page__actions {
            text-align: right;
        }

        .Page__link-list-item {
            margin: 24px 0;
        }

        .ContextLogo .ContextLogo-DCP {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 8px;
        }

        .ContextLogo .ContextLogo-DCP__title.spectrum-Heading2,
        .ContextLogo .ContextLogo-DCP__title.spectrum-Heading3 {
            color: #323232;
        }

        .ContextLogo .ContextLogo-DCP__icon {
            margin-right: 8px;
        }

        .flag-icon-ad {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4e9451e27137a5fa6c31914bd47aed67.svg);
        }

        .flag-icon-af {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/56d9d752ca7203a4362248aa262ad7a1.svg);
        }

        .flag-icon-al {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/8fc99cc5f754f44955ec84abad1927fe.svg);
        }

        .flag-icon-aq {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b2e47c3d6a9431f5bcce65a0d74ceb8b.svg);
        }

        .flag-icon-ar {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fda3db8e91e12484f748a62bc438e415.svg);
        }

        .flag-icon-at {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02NDAgNDgwSDBWMGg2NDB6Ii8+PHBhdGggZmlsbD0iI2M4MTAyZSIgZD0iTTY0MCA0ODBIMFYzMjBoNjQwem0wLTMxOS45SDBWLjFoNjQweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-bb {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzAwMjY3ZiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmYzcyNiIgZD0iTTIxMy4zIDBoMjEzLjR2NDgwSDIxMy4zeiIvPjxwYXRoIGlkPSJhIiBkPSJNMzE5LjggMTM1LjVjLTcgMTktMTQgMzguNi0yOS4yIDUzLjcgNC43LTEuNiAxMy0zIDE4LjItMi44djc5LjVsLTIyLjQgMy4zYy0uOCAwLTEtMS4zLTEtMy0yLjItMjQuNy04LTQ1LjUtMTQuOC02Ny0uNS0yLjktOS0xNC0yLjQtMTIgLjggMCA5LjUgMy42IDguMiAxLjlhODUgODUgMCAwIDAtNDYuNC0yNGMtMS41LS4zLTIuNC41LTEgMi4yIDIyLjQgMzQuNiA0MS4zIDc1LjUgNDEuMSAxMjQgOC44IDAgMzAtNS4yIDM4LjctNS4ydjU2LjFIMzIwbDIuNS0xNTYuN3oiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09Im1hdHJpeCgtMSAwIDAgMSA2MzkuNSAwKSIvPjwvc3ZnPg==);
        }

        .flag-icon-bi {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tOTAuNSAwSDU5MnY1MTJILTkwLjV6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg0LjkpIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iIzE4YjYzNyIgZD0iTS0xNzggMGw0MjguOCAyNTZMLTE3OCA1MTJ6bTg1Ny42IDBMMjUwLjggMjU2bDQyOC44IDI1NnoiLz48cGF0aCBmaWxsPSIjY2YwOTIxIiBkPSJNLTE3OCAwbDQyOC44IDI1Nkw2NzkuNiAwem0wIDUxMmw0MjguOC0yNTYgNDI4LjggMjU2eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02NzkuNiAwaC03OS45TC0xNzggNDY0LjNWNTEyaDc5LjlMNjc5LjYgNDcuN3oiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzk4LjkgMjU2YTE0OCAxNDggMCAxIDEtMjk2LjEgMCAxNDggMTQ4IDAgMCAxIDI5NiAweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0tMTc4IDB2NDcuN0w1OTkuNyA1MTJoNzkuOXYtNDcuN0wtOTguMSAweiIvPjxwYXRoIGZpbGw9IiNjZjA5MjEiIHN0cm9rZT0iIzE4YjYzNyIgc3Ryb2tlLXdpZHRoPSIzLjkiIGQ9Ik0yODAgMjAwLjJsLTE5LjMuMy0xMCAxNi40LTkuOS0xNi40LTE5LjItLjQgOS4zLTE2LjktOS4yLTE2LjggMTkuMi0uNCAxMC0xNi40IDkuOSAxNi41IDE5LjIuNC05LjMgMTYuOHptLTY0LjYgMTExLjZsLTE5LjIuMy0xMCAxNi40LTkuOS0xNi40LTE5LjItLjQgOS4zLTE2LjktOS4yLTE2LjggMTkuMi0uNCAxMC0xNi40IDkuOSAxNi41IDE5LjIuNC05LjMgMTYuOHptMTMwLjYgMGwtMTkuMi4zLTEwIDE2LjQtMTAtMTYuNC0xOS4xLS40IDkuMy0xNi45LTkuMy0xNi44IDE5LjItLjQgMTAtMTYuNCAxMCAxNi41IDE5LjIuNC05LjQgMTYuOHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-bm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/9e619c70116604801f323c4a1614a138.svg);
        }

        .flag-icon-bn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/aca1c5504d375c6def258ea0d6e02ec5.svg);
        }

        .flag-icon-bo {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/3d602aee494fda8fc57380ab235fec01.svg);
        }

        .flag-icon-bz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b0807dd8a36c41fb8f1aafd0dd78b296.svg);
        }

        .flag-icon-cc {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d8bf5c96e2bba883fc60f815d79c974e.svg);
        }

        .flag-icon-cm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzAwN2E1ZSIgZD0iTTAgMGgyMTMuM3Y0ODBIMHoiLz48cGF0aCBmaWxsPSIjY2UxMTI2IiBkPSJNMjEzLjMgMGgyMTMuNHY0ODBIMjEzLjN6Ii8+PHBhdGggZmlsbD0iI2ZjZDExNiIgZD0iTTQyNi43IDBINjQwdjQ4MEg0MjYuN3oiLz48ZyBmaWxsPSIjZmNkMTE2IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMjAgMjQwKSBzY2FsZSg3LjExMTEpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGQ9Ik0wLThMLTIuNS0uNCAxLjMuOXoiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InNjYWxlKC0xIDEpIi8+PC9nPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDcyKSIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDE0NCkiLz48dXNlIHhsaW5rOmhyZWY9IiNiIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgtMTQ0KSIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC03MikiLz48L2c+PC9zdmc+);
        }

        .flag-icon-cn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PHBhdGggaWQ9ImEiIGZpbGw9IiNmZmRlMDAiIGQ9Ik0tLjYuOEwwLTEgLjYuOC0xLS4zaDJ6Ii8+PC9kZWZzPjxwYXRoIGZpbGw9IiNkZTI5MTAiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIzMCIgaGVpZ2h0PSIyMCIgdHJhbnNmb3JtPSJtYXRyaXgoNzEuOTk5MSAwIDAgNzIgMTIwIDEyMCkiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMzAiIGhlaWdodD0iMjAiIHRyYW5zZm9ybT0ibWF0cml4KC0xMi4zMzU2MiAtMjAuNTg3MSAyMC41ODY4NCAtMTIuMzM1NzcgMjQwLjMgNDgpIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjMwIiBoZWlnaHQ9IjIwIiB0cmFuc2Zvcm09Im1hdHJpeCgtMy4zODU3MyAtMjMuNzU5OTggMjMuNzU5NjggLTMuMzg1NzggMjg4IDk1LjgpIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjMwIiBoZWlnaHQ9IjIwIiB0cmFuc2Zvcm09Im1hdHJpeCg2LjU5OTEgLTIzLjA3NDkgMjMuMDc0NiA2LjU5OTE5IDI4OCAxNjgpIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjMwIiBoZWlnaHQ9IjIwIiB0cmFuc2Zvcm09Im1hdHJpeCgxNC45OTkxIC0xOC43MzU1NyAxOC43MzUzMyAxNC45OTkyOSAyNDAgMjE2KSIvPjwvc3ZnPg==);
        }

        .flag-icon-cw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIj48cGF0aCBmaWxsLW9wYWNpdHk9Ii43IiBkPSJNMCAwaDY4Mi43djUxMkgweiIvPjwvY2xpcFBhdGg+PHBhdGggaWQ9ImIiIGQ9Ik0wLTFsLjIuN0gxTC4zIDBsLjIuN0wwIC40bC0uNi40LjItLjctLjUtLjRoLjd6Ii8+PC9kZWZzPjxnIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJzY2FsZSguOTQpIj48cGF0aCBmaWxsPSIjMDAyYjdmIiBkPSJNMCAwaDc2OHY1MTJIMHoiLz48cGF0aCBmaWxsPSIjZjllODE0IiBkPSJNMCAzMjBoNzY4djY0SDB6Ii8+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEzNTAwIiBoZWlnaHQ9IjkwMDAiIHg9IjIiIHk9IjIiIGZpbGw9IiNmZmYiIHRyYW5zZm9ybT0ic2NhbGUoNDIuNjcpIi8+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEzNTAwIiBoZWlnaHQ9IjkwMDAiIHg9IjMiIHk9IjMiIGZpbGw9IiNmZmYiIHRyYW5zZm9ybT0ic2NhbGUoNTYuOSkiLz48L2c+PC9zdmc+);
        }

        .flag-icon-cx {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/177c9673a6723954e9d46c6af2cc5902.svg);
        }

        .flag-icon-cy {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/85c1d01dc9d6b6728808275e81bbe974.svg);
        }

        .flag-icon-eg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a6898ade2a7e78b957be6a90006a95ea.svg);
        }

        .flag-icon-eh {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTU4LjcgMEg1MjR2NTEyaC02ODIuN3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQ4LjgpIHNjYWxlKC45NCkiPjxwYXRoIGQ9Ik0tMTU4LjMgMGg2ODAuOXYyNTUuM2gtNjgwLjl6Ii8+PHBhdGggZmlsbD0iIzAwN2EzZCIgZD0iTS0xNTguMyAyNTUuM2g2ODAuOXYyNTUuM2gtNjgwLjl6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0xNTguMyAxNDguOWg2ODAuOXYyMTIuOGgtNjgwLjl6Ii8+PHBhdGggZmlsbD0iI2M0MTExYiIgZD0iTS0xNTguMyAwbDM0MC40IDI1NS4zLTM0MC40IDI1NS4zeiIvPjxjaXJjbGUgY3g9IjM1Mi4zIiBjeT0iMjU1LjMiIHI9IjY4LjEiIGZpbGw9IiNjNDExMWIiLz48Y2lyY2xlIGN4PSIzNzcuOSIgY3k9IjI1NS4zIiByPSI2OC4xIiBmaWxsPSIjZmZmIi8+PHBhdGggZmlsbD0iI2M0MTExYiIgZD0iTTMzNCAyOTYuNWwyOS4xLTIwLjcgMjguOCAyMS0xMC44LTM0IDI5LTIwLjktMzUuNy0uMi0xMS0zNC0xMS4yIDMzLjktMzUuNy0uMiAyOC43IDIxLjItMTEuMSAzNHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-fk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/68ff10bba0195513ff460955328f5bdf.svg);
        }

        .flag-icon-gd {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1b38fa38f56089b953673e4f709031da.svg);
        }

        .flag-icon-ge {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/728758e4c47c50ad069b29f909b5afc6.svg);
        }

        .flag-icon-gg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2U4MTEyZCIgZD0iTTI1NiAwaDEyOHY0ODBIMjU2eiIvPjxwYXRoIGZpbGw9IiNlODExMmQiIGQ9Ik0wIDE3Nmg2NDB2MTI4SDB6Ii8+PHBhdGggaWQ9ImEiIGZpbGw9IiNmOWRkMTYiIGQ9Ik0xMTAgMjg2LjdsMjMuMy0yMy40aDIxMHYtNDYuNmgtMjEwTDExMCAxOTMuM3oiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMzYiIGhlaWdodD0iMjQiIHRyYW5zZm9ybT0icm90YXRlKDkwIDMyMCAyNDApIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjM2IiBoZWlnaHQ9IjI0IiB0cmFuc2Zvcm09InJvdGF0ZSgtOTAgMzIwIDI0MCkiLz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMzYiIGhlaWdodD0iMjQiIHRyYW5zZm9ybT0icm90YXRlKDE4MCAzMjAgMjQwKSIvPjwvc3ZnPg==);
        }

        .flag-icon-gi {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/610044a4811bd79aa01f5df36f52b09c.svg);
        }

        .flag-icon-gs {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/85faba78cf61e4757cfb63431bbd9a2d.svg);
        }

        .flag-icon-gt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5beeb2c2b4fa5ce3b50e8db7458603fc.svg);
        }

        .flag-icon-gw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2NlMTEyNiIgZD0iTTAgMGgyMjB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZjZDExNiIgZD0iTTIyMCAwaDQyMHYyNDBIMjIweiIvPjxwYXRoIGZpbGw9IiMwMDllNDkiIGQ9Ik0yMjAgMjQwaDQyMHYyNDBIMjIweiIvPjxnIGlkPSJiIiB0cmFuc2Zvcm09Im1hdHJpeCg4MCAwIDAgODAgMTEwIDI0MCkiPjxwYXRoIGlkPSJhIiBkPSJNMC0xdjFoLjUiIHRyYW5zZm9ybT0icm90YXRlKDE4IDAgLTEpIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSIvPjwvZz48dXNlIHhsaW5rOmhyZWY9IiNiIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSg3MiAxMTAgMjQwKSIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDE0NCAxMTAgMjQwKSIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC0xNDQgMTEwIDI0MCkiLz48dXNlIHhsaW5rOmhyZWY9IiNiIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgtNzIgMTEwIDI0MCkiLz48L3N2Zz4=);
        }

        .flag-icon-hm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bc0a06f8b3740816a2b48604aca43bd7.svg);
        }

        .flag-icon-hn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/379d8e4a237263b7114b8f45a41a441b.svg);
        }

        .flag-icon-hr {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/7e810356c420634308db2cfd67d79934.svg);
        }

        .flag-icon-ht {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d3ef2ac4dbc07f0eb1795d0ea67aee8a.svg);
        }

        .flag-icon-in {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2Y5MyIgZD0iTTAgMGg2NDB2MTYwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTYwaDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjMTI4ODA3IiBkPSJNMCAzMjBoNjQwdjE2MEgweiIvPjxnIHRyYW5zZm9ybT0ibWF0cml4KDMuMiAwIDAgMy4yIDMyMCAyNDApIj48Y2lyY2xlIHI9IjIwIiBmaWxsPSIjMDA4Ii8+PGNpcmNsZSByPSIxNy41IiBmaWxsPSIjZmZmIi8+PGNpcmNsZSByPSIzLjUiIGZpbGw9IiMwMDgiLz48ZyBpZD0iZCI+PGcgaWQ9ImMiPjxnIGlkPSJiIj48ZyBpZD0iYSIgZmlsbD0iIzAwOCI+PGNpcmNsZSByPSIuOSIgdHJhbnNmb3JtPSJyb3RhdGUoNy41IC04LjggMTMzLjUpIi8+PHBhdGggZD0iTTAgMTcuNUwuNiA3IDAgMmwtLjYgNUwwIDE3LjV6Ii8+PC9nPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDE1KSIvPjwvZz48dXNlIHhsaW5rOmhyZWY9IiNiIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgzMCkiLz48L2c+PHVzZSB4bGluazpocmVmPSIjYyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoNjApIi8+PC9nPjx1c2UgeGxpbms6aHJlZj0iI2QiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDEyMCkiLz48dXNlIHhsaW5rOmhyZWY9IiNkIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgtMTIwKSIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-je {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/aaa93cf62d4b65a16df2b0f608a9649b.svg);
        }

        .flag-icon-ke {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/450eb9b139c6bc5c86b766f583b2e979.svg);
        }

        .flag-icon-kh {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/997ed2ea1cf73b6719ee60de97d32c3d.svg);
        }

        .flag-icon-ky {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/91e8042bd46259efcbe6751e9e3ea677.svg);
        }

        .flag-icon-li {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5e14886ba396d6dece58b62abdccd6b6.svg);
        }

        .flag-icon-lk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b68d53511888166e42cc4b2d6527db71.svg);
        }

        .flag-icon-mm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PHBhdGggaWQ9ImEiIGZpbGw9IiNmZmYiIGQ9Ik0wLS41bC4yLjVoLS40eiIgdHJhbnNmb3JtPSJzY2FsZSg4Ljg0NCkiLz48ZyBpZD0iYiI+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB0cmFuc2Zvcm09InJvdGF0ZSgtMTQ0KSIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIgdHJhbnNmb3JtPSJyb3RhdGUoLTcyKSIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIgdHJhbnNmb3JtPSJyb3RhdGUoNzIpIi8+PHVzZSB4bGluazpocmVmPSIjYSIgd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB0cmFuc2Zvcm09InJvdGF0ZSgxNDQpIi8+PC9nPjwvZGVmcz48cGF0aCBmaWxsPSIjZmVjYjAwIiBkPSJNMC0uMWg2NDBWMTYwSDB6Ii8+PHBhdGggZmlsbD0iI2VhMjgzOSIgZD0iTTAgMzIwaDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjMzRiMjMzIiBkPSJNMCAxNjBoNjQwdjE2MEgweiIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIgeD0iOSIgeT0iNi40IiB0cmFuc2Zvcm09Im1hdHJpeCg0MCAwIDAgNDAgLTQwIDApIi8+PC9zdmc+);
        }

        .flag-icon-mo {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bb54c9fd1f959b1cd75ee2d6f801ec55.svg);
        }

        .flag-icon-mx {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/c61168b0419bb06e42d107994ef5f27a.svg);
        }

        .flag-icon-my {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBkPSJNMCAwaDY0MHY0ODBIMHoiIGZpbGw9IiNjMDAiLz48cGF0aCBkPSJNLjUgMzkuOWg2Mzl2MzguNEguNXptMCA3OC43aDYzOVYxNTdILjV6bTAgNzguOGg2Mzl2MzguNEguNXoiIGZpbGw9IiNmZmYiLz48cGF0aCBmaWxsPSIjMDA2IiBkPSJNMCAuNWgzMjB2MjgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZjMCIgZD0iTTIwNy41IDczLjhsNiA0MC43IDIzLTM0LTEyLjQgMzkuMiAzNS41LTIwLjgtMjguMSAzMCA0MS0zLjItMzguMyAxNC44IDM4LjMgMTQuOC00MS0zLjIgMjguMSAzMC0zNS41LTIwLjggMTIuMyAzOS4zLTIzLTM0LjEtNiA0MC43LTUuOS00MC43LTIzIDM0IDEyLjQtMzkuMi0zNS41IDIwLjggMjgtMzAtNDEgMy4yIDM4LjQtMTQuOC0zOC4zLTE0LjggNDEgMy4yLTI4LjEtMzAgMzUuNSAyMC44LTEyLjQtMzkuMyAyMyAzNC4xem0tMzMuMyAxLjdhNzEuMSA3MS4xIDAgMSAwIDAgMTMwIDgwIDgwIDAgMSAxIDAtMTMweiIvPjxwYXRoIGQ9Ik0uNSAyNzYuMmg2Mzl2MzguNEguNXptMCA3OC4yaDYzOXYzOC40SC41ek0wIDQ0MS42aDYzOVY0ODBIMHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=);
        }

        .flag-icon-nc {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a593453df539c135463e0c54c5fd7301.svg);
        }

        .flag-icon-ni {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5454312a64c4fe188e08bbd3cb25aed3.svg);
        }

        .flag-icon-nu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f7813c5867d79e706349eb551ddffa77.svg);
        }

        .flag-icon-nz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/730ae603a738483a0d2f0d07293ff01e.svg);
        }

        .flag-icon-pe {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/386720187f085a776b9eb3995ae71b32.svg);
        }

        .flag-icon-pn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/394e1b28c56ae9f4dc73c24657057c35.svg);
        }

        .flag-icon-pt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/32e962f61abf6b85de0b5569640dd39a.svg);
        }

        .flag-icon-rs {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1ec8e064c46bf80853f4bed633a5958a.svg);
        }

        .flag-icon-rw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzIwNjAzZCIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZhZDIwMSIgZD0iTTAgMGg2NDB2MzYwSDB6Ii8+PHBhdGggZmlsbD0iIzAwYTFkZSIgZD0iTTAgMGg2NDB2MjQwSDB6Ii8+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTExIDEyNS40KSBzY2FsZSguNjY2NjcpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGZpbGw9IiNlNWJlMDEiIGQ9Ik0xMTYuMSAwTDM1LjcgNC43bDc2LjQgMjUuNC03OC44LTE2LjNMMTAwLjYgNThsLTcyLTM2LjJMODIgODIuMSAyMS45IDI4LjZsMzYuMiA3Mi00NC4zLTY3LjNMMzAgMTEyIDQuNyAzNS43IDAgMTE2LjEtMS0xeiIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0ic2NhbGUoMSAtMSkiLz48L2c+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSIvPjxjaXJjbGUgcj0iMzQuMyIgZmlsbD0iI2U1YmUwMSIgc3Ryb2tlPSIjMDBhMWRlIiBzdHJva2Utd2lkdGg9IjMuNCIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-sh {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/23c5b16ff419165d2d35b00c1f1aab2e.svg);
        }

        .flag-icon-st {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzEyYWQyYiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmY2UwMCIgZD0iTTAgMTM3LjFoNjQwVjM0M0gweiIvPjxwYXRoIGZpbGw9IiNkMjEwMzQiIGQ9Ik0wIDB2NDgwbDI0MC0yNDAiLz48ZyBpZD0iYyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzUxLjYgMjQwKSBzY2FsZSguMzQyODYpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGQ9Ik0wLTIwMFYwaDEwMCIgdHJhbnNmb3JtPSJyb3RhdGUoMTggMCAtMjAwKSIvPjx1c2UgeGxpbms6aHJlZj0iI2EiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0ic2NhbGUoLTEgMSkiLz48L2c+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoNzIpIi8+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoMTQ0KSIvPjx1c2UgeGxpbms6aHJlZj0iI2IiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC0xNDQpIi8+PHVzZSB4bGluazpocmVmPSIjYiIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoLTcyKSIvPjwvZz48dXNlIHhsaW5rOmhyZWY9IiNjIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB4PSI3MDAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01MjMuMikiLz48L3N2Zz4=);
        }

        .flag-icon-sv {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e064776c230b8298bc6db56bb72a9a2a.svg);
        }

        .flag-icon-tf {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/81ce9c72c8aefffeb6bea31cb785c374.svg);
        }

        .flag-icon-tj {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/63e27f008716790c36b5a7dc1c77bb90.svg);
        }

        .flag-icon-tm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/079602495a193fe88876cb0eaa0090a7.svg);
        }

        .flag-icon-tw {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/032dc2868823370600e4718d8533b78d.svg);
        }

        .flag-icon-uy {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/3df37a0786ce176043b479c0063e8679.svg);
        }

        .flag-icon-uz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e583bc796cc7f869602b1aea46208752.svg);
        }

        .flag-icon-ve {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b3b58e477d372fdcdfb6e17d10d40f9c.svg);
        }

        .flag-icon-vg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5cafe780909d2ee568f8645f734c6a40.svg);
        }

        .flag-icon-vi {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/08cde01879c02897ade5f2892d802444.svg);
        }

        .flag-icon-zw {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d506c5f999a4edba10522d215243dff9.svg);
        }

        .flag-icon-ac {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/23c5b16ff419165d2d35b00c1f1aab2e.svg);
        }

        .flag-icon-cp {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-dg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4cd4d1aff0ae2d56c47a991c76246b1f.svg);
        }

        .flag-icon-ea {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/126515de88401317a0c0fa01d2f9d77d.svg);
        }

        .flag-icon-es-ct {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmNkZDA5IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBzdHJva2U9IiNkYTEyMWEiIHN0cm9rZS13aWR0aD0iNjAiIGQ9Ik0wIDkwaDgxMG0wIDEyMEgwbTAgMTIwaDgxMG0wIDEyMEgwIiB0cmFuc2Zvcm09InNjYWxlKC43OTAxMiAuODg4ODkpIi8+PC9zdmc+);
        }

        .flag-icon-es-ga {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d4ded3f1d49a49ba19deb8865a8e01ca.svg);
        }

        .flag-icon-eu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/751fb5e126b1c34885e8a024dee21888.svg);
        }

        .flag-icon-ic {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjMDc2OGE5IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmYzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ta {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/23c5b16ff419165d2d35b00c1f1aab2e.svg);
        }

        .flag-icon-un {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f55082fcc530d5c923c6bb5b7d118bf5.svg);
        }

        .flag-icon-xx {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBkPSJNLjUuNWg2MzguOXY0NzguOUguNXoiIGZpbGw9IiNmZmYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSIjYWRiNWJkIiBzdHJva2Utd2lkdGg9IjEuMDgiLz48cGF0aCBkPSJNLjUuNWw2MzkgNDc5bTAtNDc5bC02MzkgNDc5IiBmaWxsPSJub25lIiBzdHJva2U9IiNhZGI1YmQiIHN0cm9rZS13aWR0aD0iMS4wOCIvPjwvc3ZnPg==);
        }

        .flag {
            display: inline-block;
            margin-right: 10px;
        }

        .DCP-Logo {
            fill: #fa0f00;
            width: 78px;
        }

        .DCP-Logo .cls-1 {
            display: none;
        }

        @media screen and (min-width: 768px) {
            .DCP-Logo .cls-1 {
                display: block;
            }
        }

        .spectrum .Canvas-Background .DCP-Text {
            margin-bottom: 0;
            margin-top: 0;
            color: inherit;
        }

        .react-spectrum-Breadcrumbs-icon {
            cursor: default;
            vertical-align: sub;
        }

        .spectrum-Breadcrumbs {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-pack: start;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -moz-box-pack: start;
            justify-content: start;
            list-style-type: none;
            -ms-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }

        .spectrum-Breadcrumbs-itemSeparator {
            position: relative;
            top: 1px;
            width: 6px;
            height: 8px;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        .spectrum-Breadcrumbs-item {
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -ms-flex-pack: start;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -moz-box-pack: start;
            justify-content: start;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 32px;
            position: relative;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
        }

        .spectrum-Breadcrumbs-item:last-of-type {
            font-weight: 700;
        }

        .spectrum-Breadcrumbs-item:last-of-type .spectrum-Breadcrumbs-itemSeparator {
            display: none;
        }

        .spectrum-Breadcrumbs-item>.spectrum-ActionButton {
            margin-right: 1px;
        }

        .spectrum-Breadcrumbs-itemLink {
            cursor: default;
            position: relative;
            display: -ms-inline-flexbox;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: inline-flex;
            -ms-flex-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -ms-flex-pack: start;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -moz-box-pack: start;
            justify-content: start;
            padding: 0 8px;
            height: 32px;
            margin-right: 1px;
            border-radius: 4px;
            outline: 0;
            text-decoration: none;
        }

        .spectrum-Breadcrumbs-itemLink.focus-ring,
        .spectrum-Breadcrumbs-itemLink:hover {
            text-decoration: underline;
        }

        .spectrum-Breadcrumbs-itemLink[href],
        .spectrum-Breadcrumbs-itemLink[tabindex='0'] {
            cursor: pointer;
        }

        .spectrum-Breadcrumbs-itemLink.focus-ring:before {
            position: absolute;
            top: 0;
            left: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            width: 100%;
            height: 100%;
            border-width: 2px;
            border-style: solid;
            border-radius: 4px;
            content: '';
            pointer-events: none;
        }

        .spectrum-Breadcrumbs--compact .spectrum-Breadcrumbs-item {
            font-size: 14px;
        }

        .spectrum-Breadcrumbs--multiline .spectrum-Breadcrumbs-item {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
        }

        .spectrum-Breadcrumbs--multiline .spectrum-Breadcrumbs-item:last-of-type {
            height: auto;
            width: 100%;
            margin-top: 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
        }

        .spectrum-Breadcrumbs--multiline .spectrum-Breadcrumbs-item:last-of-type .spectrum-Breadcrumbs-itemLink {
            height: auto;
            text-decoration: none;
        }

        .spectrum-Breadcrumbs--title .spectrum-Breadcrumbs-item:last-of-type {
            width: 100%;
            margin: 0.3em 0;
            font-size: 28px;
            font-weight: 300;
            line-height: 32px;
        }

        .spectrum-Breadcrumbs--title .spectrum-Breadcrumbs-item .spectrum-Heading--pageTitle {
            margin: 0;
            font-size: inherit;
            font-weight: inherit;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemSeparator {
            color: #bcbcbc;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink {
            color: inherit;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink:hover {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.focus-ring {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.focus-ring:before {
            border-color: #378ef0;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink:active {
            color: #323232;
            border-bottom: 0;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item.is-selected,
        .spectrum--lightest .spectrum-Breadcrumbs-item:last-of-type {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item.is-selected~.spectrum-Breadcrumb:last-of-type {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Breadcrumbs-item.is-selected .spectrum-Breadcrumbs-itemLink.focus-ring {
            color: #323232;
            border-bottom: 0;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemSeparator {
            color: #5c5c5c;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink {
            color: inherit;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink:hover {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.focus-ring {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.focus-ring:before {
            border-color: #1473e6;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink:active {
            color: #efefef;
            border-bottom: 0;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item.is-selected,
        .spectrum--darkest .spectrum-Breadcrumbs-item:last-of-type {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item.is-selected~.spectrum-Breadcrumb:last-of-type {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Breadcrumbs-item.is-selected .spectrum-Breadcrumbs-itemLink.focus-ring {
            color: #efefef;
            border-bottom: 0;
        }

        .DCP-BreadCrumbs {
            display: none;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item:last-of-type {
            font-weight: 400;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink {
            color: #6e6e6e;
            padding: 0 15px;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink:hover {
            text-decoration: none;
            color: #6e6e6e;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink .spectrum-Breadcrumbs-itemLink-index {
            font-size: 12px;
            font-weight: 600;
            width: 16px;
            height: 16px;
            border-radius: 100%;
            margin-right: 10px;
            text-align: center;
            line-height: 16px;
            color: #fff;
            background-color: #6e6e6e;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink .spectrum-Breadcrumbs-itemLink-label {
            font-size: 14px;
            font-weight: 400;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.spectrum-Breadcrumbs-itemLink-selected {
            color: #2c2c2c;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.spectrum-Breadcrumbs-itemLink-selected .spectrum-Breadcrumbs-itemLink-index {
            color: #fff;
            background-color: #2c2c2c;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemLink.spectrum-Breadcrumbs-itemLink-future-step .spectrum-Breadcrumbs-itemLink-index {
            border: 2px solid #cacaca;
            background: #fff;
        }

        .DCP-BreadCrumbs .spectrum-Breadcrumbs-item .spectrum-Breadcrumbs-itemSeparator {
            -webkit-transform: scale(1.3);
            -ms-transform: scale(1.3);
            transform: scale(1.3);
        }

        @media screen and (min-width: 768px) {
            .DCP-BreadCrumbs {
                display: -webkit-inline-box;
                display: -webkit-inline-flex;
                display: -moz-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
            }
        }

        .DCP-BackButton {
            border-radius: 4px;
            font-weight: 400;
        }

        .DCP-List {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            list-style: none;
        }

        .DCP-List .DCP-List__item:not(:first-child):before {
            content: '';
            padding: 0 4px;
            font-size: 12px;
        }

        .DCP-List--separated .DCP-List__item:not(:first-child):before {
            content: '/';
            padding: 0 8px;
        }

        .DCP-List__item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .DCP-List__item>* {
            display: inline-block;
        }

        .DCP-Layout .DCP-List .DCP-List__item .DCP-Text {
            margin: 0;
        }

        .spectrum .Canvas-Background .DCP-Link {
            margin-bottom: 0;
            margin-top: 0;
            color: inherit;
        }

        .DCP-Layout> :first-child {
            -ms-grid-row: 1;
            -ms-grid-column: 1;
        }

        .DCP-Layout__area {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-basis: 33%;
            -ms-flex-preferred-size: 33%;
            flex-basis: 33%;
        }

        .DCP-Layout__area>*+* {
            margin-left: 10px;
        }

        .DCP-Layout__area--first {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -ms-grid-column: 1;
            grid-column: 1;
        }

        .DCP-Layout__area--last {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -moz-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -ms-grid-column: 3;
            grid-column: 3;
        }

        .Canvas-Header--dark-background {
            color: #bcbcbc;
        }

        .Canvas-Footer--dark-background {
            color: #bcbcbc;
        }

        .DCP-Container {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            width: 100%;
        }

        .DCP-Container__mobile {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -moz-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            background: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            left: 0;
            right: 0;
            top: 0;
            z-index: 500;
            border-bottom: 1px solid #e1e1e1;
        }

        .DCP-Container__mobile-Background {
            background: rgba(0, 0, 0, 0.4);
        }

        .DCP-Container__overlay {
            background: #000;
            bottom: 0;
            left: 0;
            opacity: 0.4;
            position: absolute;
            right: 0;
            top: 60px;
            z-index: 499;
        }

        .DCP-Container--view-more-open .DCP-Container-Mobile-Modal-Container {
            height: 100%;
        }

        .DCP-Container--view-more-open .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal {
            opacity: 1;
        }

        .DCP-Container--view-more-open .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal>* {
            display: block;
        }

        .DCP-Container-Mobile-Modal-Container {
            background: #fff;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 0;
            -webkit-transition: height 0.5s;
            -o-transition: height 0.5s;
            transition: height 0.5s;
        }

        .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal {
            margin: 0 16px;
            -webkit-transition: opacity 0.6s;
            -o-transition: opacity 0.6s;
            transition: opacity 0.6s;
            opacity: 0;
        }

        .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal>* {
            display: none;
        }

        .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal__title {
            margin-top: 58px;
            font-size: 27px;
        }

        .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal__close {
            position: absolute;
            top: 16px;
            right: 16px;
        }

        @media screen and (min-width: 768px) {
            .DCP-Container--view-more-open .DCP-Container-Mobile-Modal-Container {
                position: absolute;
                height: 560px;
            }

            .DCP-Container-Mobile-Modal-Container {
                position: absolute;
            }

            .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal__close {
                top: 32px;
                right: 32px;
            }

            .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal {
                margin: 0 auto;
                width: 560px;
            }

            .DCP-Container-Mobile-Modal-Container .DCP-Container-Mobile-Modal__title {
                font-size: 36px;
                margin-top: 70px;
            }
        }

        @media screen and (max-width: 767px) {
            .Canvas-Layout--with-header .DCP-Container-Mobile-Modal-Container {
                top: 60px;
            }
        }

        .DCP-Container .DCP-Container-Header__product {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .DCP-Container .DCP-Container-Header--light .DCP-Container-Header__description,
        .DCP-Container .DCP-Container-Header--light .DCP-Container-Header__title.spectrum-Heading2,
        .DCP-Container .DCP-Container-Header--light .DCP-Container-Header__title.spectrum-Heading3 {
            color: #fff;
        }

        .DCP-Container .DCP-Container-Header--dark .DCP-Container-Header__title.spectrum-Heading2,
        .DCP-Container .DCP-Container-Header--dark .DCP-Container-Header__title.spectrum-Heading3 {
            color: #323232;
        }

        .DCP-Container .DCP-Container-Header--dark .DCP-Container-Header__description {
            color: #505050;
        }

        .DCP-Container .DCP-Container-Header__title--overflowed {
            white-space: normal !important;
            overflow: auto !important;
            -o-text-overflow: initial !important;
            text-overflow: clip !important;
        }

        .DCP-Container .DCP-Container-Header__icon {
            margin-right: 15px;
        }

        .DCP-Container .DCP-Container-Header__description {
            margin-top: 10px;
        }

        .DCP-Container .DCP-Container-Header__view-more-link {
            display: inline-block;
            color: #4b4b4b;
            text-decoration: underline;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header {
            text-align: center;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header--clickable {
            cursor: pointer;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__product {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__title.spectrum-Heading2,
        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__title.spectrum-Heading3,
        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__title.spectrum-Heading5 {
            color: #323232;
            margin: 0;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__icon {
            margin-right: 8px;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__description {
            margin-top: 0;
            display: inline-block;
            margin-right: 8px;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-Header__description .DCP-Text {
            font-weight: 700;
        }

        .DCP-Container-List {
            width: 100%;
        }

        .DCP-Container-List--light,
        .DCP-Container-List--light .DCP-Container-List__heading.spectrum-Heading1,
        .DCP-Container-List--light .DCP-Container-List__heading.spectrum-Heading2,
        .DCP-Container-List--light .DCP-Container-List__heading.spectrum-Heading3,
        .DCP-Container-List--light .DCP-Container-List__heading.spectrum-Heading4,
        .DCP-Container-List--light .DCP-Container-List__heading.spectrum-Heading5 {
            color: #fff;
        }

        .DCP-Container-List--dark {
            color: #747474;
        }

        .DCP-Container-List--dark .DCP-Container-List__heading.spectrum-Heading1,
        .DCP-Container-List--dark .DCP-Container-List__heading.spectrum-Heading2,
        .DCP-Container-List--dark .DCP-Container-List__heading.spectrum-Heading3,
        .DCP-Container-List--dark .DCP-Container-List__heading.spectrum-Heading4,
        .DCP-Container-List--dark .DCP-Container-List__heading.spectrum-Heading5 {
            color: #323232;
        }

        .DCP-Container-List__list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .DCP-Container-List__list-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .DCP-Container-List__checkmark-wrapper {
            margin: 0;
            padding: 0;
        }

        .DCP-Container-List__checkmark {
            color: #268967;
        }

        .DCP-Container-List__list--bullets {
            padding-left: 20px;
            list-style: disc;
        }

        .DCP-Container-List__list--bullets .DCP-Container-List__list-item {
            display: list-item;
        }

        .DCP-Container-List__list-link {
            margin: 0 4px;
        }

        .DCP-Container.DCP-Container__mobile .DCP-Container-List__heading {
            color: #505050;
        }

        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
        article,
        aside,
        nav {
            display: block;
        }

        figcaption,
        figure,
        main {
            display: block;
        }

        figure {
            margin: 1em 40px;
        }

        hr {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: rgba(0, 0, 0, 0);
            -webkit-text-decoration-skip: objects;
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            -moz-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: inherit;
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        dfn {
            font-style: italic;
        }

        mark {
            background-color: #ff0;
            color: #000;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        audio,
        video {
            display: inline-block;
        }

        audio:not([controls]) {
            display: none;
            height: 0;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        [type='reset'],
        [type='submit'],
        button,
        html [type='button'] {
            -webkit-appearance: button;
        }

        [type='button']::-moz-focus-inner,
        [type='reset']::-moz-focus-inner,
        [type='submit']::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        [type='button']:-moz-focusring,
        [type='reset']:-moz-focusring,
        [type='submit']:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            display: inline-block;
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type='checkbox'],
        [type='radio'] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        [type='number']::-webkit-inner-spin-button,
        [type='number']::-webkit-outer-spin-button {
            height: auto;
        }

        [type='search'] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type='search']::-webkit-search-cancel-button,
        [type='search']::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        details,
        menu {
            display: block;
        }

        summary {
            display: list-item;
        }

        canvas {
            display: inline-block;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        .spectrum--darkest,
        .spectrum--lightest {
            -webkit-tap-highlight-color: transparent;
        }

        .spectrum--darkest {
            background-color: #1e1e1e;
        }

        .spectrum:lang(zh-Hans) {
            font-family: adobe-clean-han-japanese, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
        }

        .spectrum:lang(zh) {
            font-family: adobe-clean-han-japanese, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
        }

        .spectrum:lang(ko) {
            font-family: adobe-clean-han-japanese, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
        }

        .spectrum:lang(ja) {
            font-family: adobe-clean-han-japanese, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
        }

        .spectrum-Body1 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Body1,
        .spectrum-Body1 em {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body1 em {
            font-style: italic;
        }

        .spectrum-Body1 strong {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--large,
        .spectrum-Body2 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Body--large,
        .spectrum-Body--large em,
        .spectrum-Body2,
        .spectrum-Body2 em {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--large em,
        .spectrum-Body2 em {
            font-style: italic;
        }

        .spectrum-Body--large strong,
        .spectrum-Body2 strong {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body3 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Body3,
        .spectrum-Body3 em {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body3 em {
            font-style: italic;
        }

        .spectrum-Body3 strong {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--secondary,
        .spectrum-Body4 {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Body--secondary em,
        .spectrum-Body4 em {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--secondary strong,
        .spectrum-Body4 strong {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--small,
        .spectrum-Body5 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Body--small,
        .spectrum-Body--small em,
        .spectrum-Body5,
        .spectrum-Body5 em {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Body--small em,
        .spectrum-Body5 em {
            font-style: italic;
        }

        .spectrum-Body--small strong,
        .spectrum-Body5 strong {
            font-size: 12px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1 em {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1 em {
            font-style: italic;
        }

        .spectrum-Heading1 strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading2,
        .spectrum-Heading2 em {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2 em {
            font-style: italic;
        }

        .spectrum-Heading2 strong {
            font-size: 28px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading3 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading3,
        .spectrum-Heading3 em {
            font-size: 22px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading3 em {
            font-style: italic;
        }

        .spectrum-Heading3 strong {
            font-size: 22px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--subtitle1,
        .spectrum-Heading4 {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading--subtitle1 em,
        .spectrum-Heading4 em {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--subtitle1 strong,
        .spectrum-Heading4 strong {
            font-size: 18px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading5 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading5,
        .spectrum-Heading5 em {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading5 em {
            font-style: italic;
        }

        .spectrum-Heading5 strong {
            font-size: 16px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--subtitle2,
        .spectrum-Heading6 {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading--subtitle2 em,
        .spectrum-Heading6 em {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--subtitle2 strong,
        .spectrum-Heading6 strong {
            font-size: 14px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--subtitle3,
        .spectrum-Subheading {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading--subtitle3 em,
        .spectrum-Subheading em {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Heading--subtitle3 strong,
        .spectrum-Subheading strong {
            font-size: 11px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Detail {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Detail,
        .spectrum-Detail em {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Detail em {
            font-style: italic;
        }

        .spectrum-Detail strong {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Heading1--quiet {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1--quiet,
        .spectrum-Heading1--quiet em {
            font-size: 36px;
            font-weight: 300;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--quiet em {
            font-style: italic;
        }

        .spectrum-Heading1--quiet strong {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--pageTitle,
        .spectrum-Heading2--quiet {
            font-size: 28px;
            font-weight: 300;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading--pageTitle em,
        .spectrum-Heading2--quiet em {
            font-size: 28px;
            font-weight: 300;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--pageTitle strong,
        .spectrum-Heading2--quiet strong {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--strong {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1--strong,
        .spectrum-Heading1--strong em {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--strong em {
            font-style: italic;
        }

        .spectrum-Heading1--strong strong {
            font-size: 36px;
        }

        .spectrum-Heading1--strong strong,
        .spectrum-Heading2--strong {
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--strong {
            font-size: 28px;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading2--strong em {
            font-style: italic;
        }

        .spectrum-Heading2--strong em,
        .spectrum-Heading2--strong strong {
            font-size: 28px;
            font-weight: 900;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--strong strong {
            font-style: normal;
        }

        .spectrum-Heading1--display {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1--display,
        .spectrum-Heading1--display em {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--display em {
            font-style: italic;
        }

        .spectrum-Heading1--display strong {
            font-size: 45px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--display {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading2--display,
        .spectrum-Heading2--display em {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--display em {
            font-style: italic;
        }

        .spectrum-Heading2--display strong {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--display.spectrum-Heading1--strong {
            font-size: 45px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1--display.spectrum-Heading1--strong em {
            font-size: 45px;
            font-weight: 900;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--display.spectrum-Heading1--strong strong {
            font-size: 45px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--display.spectrum-Heading2--strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading2--display.spectrum-Heading2--strong em {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading2--display.spectrum-Heading2--strong strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--display.spectrum-Heading1--quiet {
            font-size: 45px;
            font-weight: 300;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading1--display.spectrum-Heading1--quiet em {
            font-size: 45px;
            font-weight: 300;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading1--display.spectrum-Heading1--quiet strong {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--display,
        .spectrum-Heading2--display.spectrum-Heading2--quiet {
            font-size: 40px;
            font-weight: 300;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Heading--display em,
        .spectrum-Heading2--display.spectrum-Heading2--quiet em {
            font-size: 40px;
            font-weight: 300;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Heading--display strong,
        .spectrum-Heading2--display.spectrum-Heading2--quiet strong {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0;
            text-transform: none;
        }

        .spectrum-Article {
            font-family: Adobe Clean Serif, Times New Roman, serif;
        }

        .spectrum-Article .spectrum-Body1 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Body1,
        .spectrum-Article .spectrum-Body1 em {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body1 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Body1 strong {
            font-size: 20px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--large,
        .spectrum-Article .spectrum-Body2 {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Body--large em,
        .spectrum-Article .spectrum-Body2 em {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.5;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--large strong,
        .spectrum-Article .spectrum-Body2 strong {
            font-size: 18px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body3 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Body3,
        .spectrum-Article .spectrum-Body3 em {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body3 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Body3 strong {
            font-size: 16px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--secondary,
        .spectrum-Article .spectrum-Body4 {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Body--secondary em,
        .spectrum-Article .spectrum-Body4 em {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--secondary strong,
        .spectrum-Article .spectrum-Body4 strong {
            font-size: 14px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--small,
        .spectrum-Article .spectrum-Body5 {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Body--small em,
        .spectrum-Article .spectrum-Body5 em {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Body--small strong,
        .spectrum-Article .spectrum-Body5 strong {
            font-size: 12px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading1,
        .spectrum-Article .spectrum-Heading1 em {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Heading1 strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading2 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading2,
        .spectrum-Article .spectrum-Heading2 em {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading2 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Heading2 strong {
            font-size: 28px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading3 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading3,
        .spectrum-Article .spectrum-Heading3 em {
            font-size: 22px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading3 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Heading3 strong {
            font-size: 22px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--subtitle1,
        .spectrum-Article .spectrum-Heading4 {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading--subtitle1 em,
        .spectrum-Article .spectrum-Heading4 em {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--subtitle1 strong,
        .spectrum-Article .spectrum-Heading4 strong {
            font-size: 18px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading5 {
            font-style: normal;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading5,
        .spectrum-Article .spectrum-Heading5 em {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading5 em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Heading5 strong {
            font-size: 16px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--subtitle2,
        .spectrum-Article .spectrum-Heading6 {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading--subtitle2 em,
        .spectrum-Article .spectrum-Heading6 em {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--subtitle2 strong,
        .spectrum-Article .spectrum-Heading6 strong {
            font-size: 14px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--subtitle3,
        .spectrum-Article .spectrum-Subheading {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading--subtitle3 em,
        .spectrum-Article .spectrum-Subheading em {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Article .spectrum-Heading--subtitle3 strong,
        .spectrum-Article .spectrum-Subheading strong {
            font-size: 11px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Article .spectrum-Detail {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Detail,
        .spectrum-Article .spectrum-Detail em {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Article .spectrum-Detail em {
            font-style: italic;
        }

        .spectrum-Article .spectrum-Detail strong {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum-Article .spectrum-Heading1--quiet {
            font-size: 36px;
            font-weight: 400;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading1--quiet em {
            font-size: 36px;
            font-weight: 400;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1--quiet strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--pageTitle,
        .spectrum-Article .spectrum-Heading2--quiet {
            font-size: 28px;
            font-weight: 400;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading--pageTitle em,
        .spectrum-Article .spectrum-Heading2--quiet em {
            font-size: 28px;
            font-weight: 400;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--pageTitle strong,
        .spectrum-Article .spectrum-Heading2--quiet strong {
            font-size: 28px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1--display {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading1--display em {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1--display strong {
            font-size: 45px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading2--display {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading2--display em {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading2--display strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1--display.spectrum-Heading1--quiet {
            font-size: 45px;
            font-weight: 400;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading1--display.spectrum-Heading1--quiet em {
            font-size: 45px;
            font-weight: 400;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading1--display.spectrum-Heading1--quiet strong {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--display,
        .spectrum-Article .spectrum-Heading2--display.spectrum-Heading2--quiet {
            font-size: 40px;
            font-weight: 400;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum-Article .spectrum-Heading--display em,
        .spectrum-Article .spectrum-Heading2--display.spectrum-Heading2--quiet em {
            font-size: 40px;
            font-weight: 400;
            line-height: 1.3;
            font-style: italic;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum-Article .spectrum-Heading--display strong,
        .spectrum-Article .spectrum-Heading2--display.spectrum-Heading2--quiet strong {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.0125em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body1,
        .spectrum:lang(ko) .spectrum-Body1,
        .spectrum:lang(zh) .spectrum-Body1 {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Body1 em,
        .spectrum:lang(ko) .spectrum-Body1 em,
        .spectrum:lang(zh) .spectrum-Body1 em {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body1 strong,
        .spectrum:lang(ko) .spectrum-Body1 strong,
        .spectrum:lang(zh) .spectrum-Body1 strong {
            font-size: 20px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--large,
        .spectrum:lang(ja) .spectrum-Body2,
        .spectrum:lang(ko) .spectrum-Body--large,
        .spectrum:lang(ko) .spectrum-Body2,
        .spectrum:lang(zh) .spectrum-Body--large,
        .spectrum:lang(zh) .spectrum-Body2 {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Body--large em,
        .spectrum:lang(ja) .spectrum-Body2 em,
        .spectrum:lang(ko) .spectrum-Body--large em,
        .spectrum:lang(ko) .spectrum-Body2 em,
        .spectrum:lang(zh) .spectrum-Body--large em,
        .spectrum:lang(zh) .spectrum-Body2 em {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--large strong,
        .spectrum:lang(ja) .spectrum-Body2 strong,
        .spectrum:lang(ko) .spectrum-Body--large strong,
        .spectrum:lang(ko) .spectrum-Body2 strong,
        .spectrum:lang(zh) .spectrum-Body--large strong,
        .spectrum:lang(zh) .spectrum-Body2 strong {
            font-size: 18px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body3,
        .spectrum:lang(ko) .spectrum-Body3,
        .spectrum:lang(zh) .spectrum-Body3 {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Body3 em,
        .spectrum:lang(ko) .spectrum-Body3 em,
        .spectrum:lang(zh) .spectrum-Body3 em {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body3 strong,
        .spectrum:lang(ko) .spectrum-Body3 strong,
        .spectrum:lang(zh) .spectrum-Body3 strong {
            font-size: 16px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--secondary,
        .spectrum:lang(ja) .spectrum-Body4,
        .spectrum:lang(ko) .spectrum-Body--secondary,
        .spectrum:lang(ko) .spectrum-Body4,
        .spectrum:lang(zh) .spectrum-Body--secondary,
        .spectrum:lang(zh) .spectrum-Body4 {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Body--secondary em,
        .spectrum:lang(ja) .spectrum-Body4 em,
        .spectrum:lang(ko) .spectrum-Body--secondary em,
        .spectrum:lang(ko) .spectrum-Body4 em,
        .spectrum:lang(zh) .spectrum-Body--secondary em,
        .spectrum:lang(zh) .spectrum-Body4 em {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--secondary strong,
        .spectrum:lang(ja) .spectrum-Body4 strong,
        .spectrum:lang(ko) .spectrum-Body--secondary strong,
        .spectrum:lang(ko) .spectrum-Body4 strong,
        .spectrum:lang(zh) .spectrum-Body--secondary strong,
        .spectrum:lang(zh) .spectrum-Body4 strong {
            font-size: 14px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--small,
        .spectrum:lang(ja) .spectrum-Body5,
        .spectrum:lang(ko) .spectrum-Body--small,
        .spectrum:lang(ko) .spectrum-Body5,
        .spectrum:lang(zh) .spectrum-Body--small,
        .spectrum:lang(zh) .spectrum-Body5 {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Body--small em,
        .spectrum:lang(ja) .spectrum-Body5 em,
        .spectrum:lang(ko) .spectrum-Body--small em,
        .spectrum:lang(ko) .spectrum-Body5 em,
        .spectrum:lang(zh) .spectrum-Body--small em,
        .spectrum:lang(zh) .spectrum-Body5 em {
            font-size: 12px;
            font-weight: 700;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Body--small strong,
        .spectrum:lang(ja) .spectrum-Body5 strong,
        .spectrum:lang(ko) .spectrum-Body--small strong,
        .spectrum:lang(ko) .spectrum-Body5 strong,
        .spectrum:lang(zh) .spectrum-Body--small strong,
        .spectrum:lang(zh) .spectrum-Body5 strong {
            font-size: 12px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1,
        .spectrum:lang(ko) .spectrum-Heading1,
        .spectrum:lang(zh) .spectrum-Heading1 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1 em,
        .spectrum:lang(ko) .spectrum-Heading1 em,
        .spectrum:lang(zh) .spectrum-Heading1 em {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1 strong,
        .spectrum:lang(ko) .spectrum-Heading1 strong,
        .spectrum:lang(zh) .spectrum-Heading1 strong {
            font-size: 32px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2,
        .spectrum:lang(ko) .spectrum-Heading2,
        .spectrum:lang(zh) .spectrum-Heading2 {
            font-size: 25px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading2 em,
        .spectrum:lang(ko) .spectrum-Heading2 em,
        .spectrum:lang(zh) .spectrum-Heading2 em {
            font-size: 25px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2 strong,
        .spectrum:lang(ko) .spectrum-Heading2 strong,
        .spectrum:lang(zh) .spectrum-Heading2 strong {
            font-size: 25px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading3,
        .spectrum:lang(ko) .spectrum-Heading3,
        .spectrum:lang(zh) .spectrum-Heading3 {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading3 em,
        .spectrum:lang(ko) .spectrum-Heading3 em,
        .spectrum:lang(zh) .spectrum-Heading3 em {
            font-size: 20px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading3 strong,
        .spectrum:lang(ko) .spectrum-Heading3 strong,
        .spectrum:lang(zh) .spectrum-Heading3 strong {
            font-size: 20px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle1,
        .spectrum:lang(ja) .spectrum-Heading4,
        .spectrum:lang(ko) .spectrum-Heading--subtitle1,
        .spectrum:lang(ko) .spectrum-Heading4,
        .spectrum:lang(zh) .spectrum-Heading--subtitle1,
        .spectrum:lang(zh) .spectrum-Heading4 {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle1 em,
        .spectrum:lang(ja) .spectrum-Heading4 em,
        .spectrum:lang(ko) .spectrum-Heading--subtitle1 em,
        .spectrum:lang(ko) .spectrum-Heading4 em,
        .spectrum:lang(zh) .spectrum-Heading--subtitle1 em,
        .spectrum:lang(zh) .spectrum-Heading4 em {
            font-size: 18px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle1 strong,
        .spectrum:lang(ja) .spectrum-Heading4 strong,
        .spectrum:lang(ko) .spectrum-Heading--subtitle1 strong,
        .spectrum:lang(ko) .spectrum-Heading4 strong,
        .spectrum:lang(zh) .spectrum-Heading--subtitle1 strong,
        .spectrum:lang(zh) .spectrum-Heading4 strong {
            font-size: 18px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading5,
        .spectrum:lang(ko) .spectrum-Heading5,
        .spectrum:lang(zh) .spectrum-Heading5 {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading5 em,
        .spectrum:lang(ko) .spectrum-Heading5 em,
        .spectrum:lang(zh) .spectrum-Heading5 em {
            font-size: 16px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading5 strong,
        .spectrum:lang(ko) .spectrum-Heading5 strong,
        .spectrum:lang(zh) .spectrum-Heading5 strong {
            font-size: 16px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle2,
        .spectrum:lang(ja) .spectrum-Heading6,
        .spectrum:lang(ko) .spectrum-Heading--subtitle2,
        .spectrum:lang(ko) .spectrum-Heading6,
        .spectrum:lang(zh) .spectrum-Heading--subtitle2,
        .spectrum:lang(zh) .spectrum-Heading6 {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle2 em,
        .spectrum:lang(ja) .spectrum-Heading6 em,
        .spectrum:lang(ko) .spectrum-Heading--subtitle2 em,
        .spectrum:lang(ko) .spectrum-Heading6 em,
        .spectrum:lang(zh) .spectrum-Heading--subtitle2 em,
        .spectrum:lang(zh) .spectrum-Heading6 em {
            font-size: 14px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle2 strong,
        .spectrum:lang(ja) .spectrum-Heading6 strong,
        .spectrum:lang(ko) .spectrum-Heading--subtitle2 strong,
        .spectrum:lang(ko) .spectrum-Heading6 strong,
        .spectrum:lang(zh) .spectrum-Heading--subtitle2 strong,
        .spectrum:lang(zh) .spectrum-Heading6 strong {
            font-size: 14px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle3,
        .spectrum:lang(ja) .spectrum-Subheading,
        .spectrum:lang(ko) .spectrum-Heading--subtitle3,
        .spectrum:lang(ko) .spectrum-Subheading,
        .spectrum:lang(zh) .spectrum-Heading--subtitle3,
        .spectrum:lang(zh) .spectrum-Subheading {
            font-size: 11px;
            font-weight: 700;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle3 em,
        .spectrum:lang(ja) .spectrum-Subheading em,
        .spectrum:lang(ko) .spectrum-Heading--subtitle3 em,
        .spectrum:lang(ko) .spectrum-Subheading em,
        .spectrum:lang(zh) .spectrum-Heading--subtitle3 em,
        .spectrum:lang(zh) .spectrum-Subheading em {
            font-size: 11px;
            font-weight: 800;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum:lang(ja) .spectrum-Heading--subtitle3 strong,
        .spectrum:lang(ja) .spectrum-Subheading strong,
        .spectrum:lang(ko) .spectrum-Heading--subtitle3 strong,
        .spectrum:lang(ko) .spectrum-Subheading strong,
        .spectrum:lang(zh) .spectrum-Heading--subtitle3 strong,
        .spectrum:lang(zh) .spectrum-Subheading strong {
            font-size: 11px;
            font-weight: 900;
            line-height: 1.3;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum:lang(ja) .spectrum-Detail,
        .spectrum:lang(ko) .spectrum-Detail,
        .spectrum:lang(zh) .spectrum-Detail {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Detail em,
        .spectrum:lang(ko) .spectrum-Detail em,
        .spectrum:lang(zh) .spectrum-Detail em {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum:lang(ja) .spectrum-Detail strong,
        .spectrum:lang(ko) .spectrum-Detail strong,
        .spectrum:lang(zh) .spectrum-Detail strong {
            font-size: 11px;
            font-weight: 900;
            line-height: 1.7;
            font-style: normal;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .spectrum:lang(ja) .spectrum-Heading1--quiet,
        .spectrum:lang(ko) .spectrum-Heading1--quiet,
        .spectrum:lang(zh) .spectrum-Heading1--quiet {
            font-size: 32px;
            font-weight: 300;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1--quiet em,
        .spectrum:lang(ko) .spectrum-Heading1--quiet em,
        .spectrum:lang(zh) .spectrum-Heading1--quiet em {
            font-size: 32px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--quiet strong,
        .spectrum:lang(ko) .spectrum-Heading1--quiet strong,
        .spectrum:lang(zh) .spectrum-Heading1--quiet strong {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--pageTitle,
        .spectrum:lang(ja) .spectrum-Heading2--quiet,
        .spectrum:lang(ko) .spectrum-Heading--pageTitle,
        .spectrum:lang(ko) .spectrum-Heading2--quiet,
        .spectrum:lang(zh) .spectrum-Heading--pageTitle,
        .spectrum:lang(zh) .spectrum-Heading2--quiet {
            font-size: 25px;
            font-weight: 300;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading--pageTitle em,
        .spectrum:lang(ja) .spectrum-Heading2--quiet em,
        .spectrum:lang(ko) .spectrum-Heading--pageTitle em,
        .spectrum:lang(ko) .spectrum-Heading2--quiet em,
        .spectrum:lang(zh) .spectrum-Heading--pageTitle em,
        .spectrum:lang(zh) .spectrum-Heading2--quiet em {
            font-size: 25px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--pageTitle strong,
        .spectrum:lang(ja) .spectrum-Heading2--quiet strong,
        .spectrum:lang(ko) .spectrum-Heading--pageTitle strong,
        .spectrum:lang(ko) .spectrum-Heading2--quiet strong,
        .spectrum:lang(zh) .spectrum-Heading--pageTitle strong,
        .spectrum:lang(zh) .spectrum-Heading2--quiet strong {
            font-size: 25px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--strong,
        .spectrum:lang(ko) .spectrum-Heading1--strong,
        .spectrum:lang(zh) .spectrum-Heading1--strong {
            font-size: 32px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1--strong em,
        .spectrum:lang(ko) .spectrum-Heading1--strong em,
        .spectrum:lang(zh) .spectrum-Heading1--strong em {
            font-size: 32px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--strong strong,
        .spectrum:lang(ko) .spectrum-Heading1--strong strong,
        .spectrum:lang(zh) .spectrum-Heading1--strong strong {
            font-size: 32px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--strong,
        .spectrum:lang(ko) .spectrum-Heading2--strong,
        .spectrum:lang(zh) .spectrum-Heading2--strong {
            font-size: 25px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading2--strong em,
        .spectrum:lang(ko) .spectrum-Heading2--strong em,
        .spectrum:lang(zh) .spectrum-Heading2--strong em {
            font-size: 25px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--strong strong,
        .spectrum:lang(ko) .spectrum-Heading2--strong strong,
        .spectrum:lang(zh) .spectrum-Heading2--strong strong {
            font-size: 25px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display,
        .spectrum:lang(ko) .spectrum-Heading1--display,
        .spectrum:lang(zh) .spectrum-Heading1--display {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display em,
        .spectrum:lang(ko) .spectrum-Heading1--display em,
        .spectrum:lang(zh) .spectrum-Heading1--display em {
            font-size: 40px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display strong,
        .spectrum:lang(ko) .spectrum-Heading1--display strong,
        .spectrum:lang(zh) .spectrum-Heading1--display strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display,
        .spectrum:lang(ko) .spectrum-Heading2--display,
        .spectrum:lang(zh) .spectrum-Heading2--display {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display em,
        .spectrum:lang(ko) .spectrum-Heading2--display em,
        .spectrum:lang(zh) .spectrum-Heading2--display em {
            font-size: 36px;
            font-weight: 800;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display strong,
        .spectrum:lang(ko) .spectrum-Heading2--display strong,
        .spectrum:lang(zh) .spectrum-Heading2--display strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--strong em,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--strong em,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--strong em {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--strong strong,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--strong strong,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--strong strong {
            font-size: 40px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--strong em,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--strong em,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--strong em {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--strong strong,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--strong strong,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--strong strong {
            font-size: 36px;
            font-weight: 900;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--quiet {
            font-size: 40px;
            font-weight: 300;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--quiet em,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--quiet em,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--quiet em {
            font-size: 40px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--quiet strong,
        .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--quiet strong,
        .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--quiet strong {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--display,
        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum:lang(ko) .spectrum-Heading--display,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum:lang(zh) .spectrum-Heading--display,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--quiet {
            font-size: 36px;
            font-weight: 300;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .spectrum:lang(ja) .spectrum-Heading--display em,
        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--quiet em,
        .spectrum:lang(ko) .spectrum-Heading--display em,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--quiet em,
        .spectrum:lang(zh) .spectrum-Heading--display em,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--quiet em {
            font-size: 36px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum:lang(ja) .spectrum-Heading--display strong,
        .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--quiet strong,
        .spectrum:lang(ko) .spectrum-Heading--display strong,
        .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--quiet strong,
        .spectrum:lang(zh) .spectrum-Heading--display strong,
        .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--quiet strong {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: none;
        }

        .spectrum-Code1 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
            font-family: Source Code Pro, Monaco, monospace;
        }

        .spectrum-Code1,
        .spectrum-Code1 em {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .spectrum-Code1 em {
            font-style: italic;
        }

        .spectrum-Code1 strong {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
        }

        .spectrum-Code2 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
            font-family: Source Code Pro, Monaco, monospace;
        }

        .spectrum-Code2,
        .spectrum-Code2 em {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .spectrum-Code2 em {
            font-style: italic;
        }

        .spectrum-Code2 strong {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
        }

        .spectrum-Code3 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
            font-family: Source Code Pro, Monaco, monospace;
        }

        .spectrum-Code3,
        .spectrum-Code3 em {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .spectrum-Code3 em {
            font-style: italic;
        }

        .spectrum-Code3 strong {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
        }

        .spectrum-Code4 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
            font-family: Source Code Pro, Monaco, monospace;
        }

        .spectrum-Code4,
        .spectrum-Code4 em {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .spectrum-Code4 em {
            font-style: italic;
        }

        .spectrum-Code4 strong {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
        }

        .spectrum-Code5 {
            font-style: normal;
            margin-bottom: 16px;
            margin-top: 8px;
            font-family: Source Code Pro, Monaco, monospace;
        }

        .spectrum-Code5,
        .spectrum-Code5 em {
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .spectrum-Code5 em {
            font-style: italic;
        }

        .spectrum-Code5 strong {
            font-size: 12px;
            font-weight: 700;
            line-height: 1.5;
            font-style: normal;
            letter-spacing: 0;
        }

        .spectrum-Body {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            font-style: normal;
        }

        .spectrum--lightest .spectrum-Body1,
        .spectrum--lightest .spectrum-Body2,
        .spectrum--lightest .spectrum-Body3,
        .spectrum--lightest .spectrum-Body4,
        .spectrum--lightest .spectrum-Body5 {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Heading1,
        .spectrum--lightest .spectrum-Heading2,
        .spectrum--lightest .spectrum-Heading3,
        .spectrum--lightest .spectrum-Heading4,
        .spectrum--lightest .spectrum-Heading5,
        .spectrum--lightest .spectrum-Heading6 {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Detail,
        .spectrum--lightest .spectrum-Subheading {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Heading1--display,
        .spectrum--lightest .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--lightest .spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum-Heading1--strong,
        .spectrum--lightest .spectrum-Heading2--display,
        .spectrum--lightest .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--lightest .spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum-Heading2--strong {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Article .spectrum-Body1,
        .spectrum--lightest .spectrum-Article .spectrum-Body2,
        .spectrum--lightest .spectrum-Article .spectrum-Body3,
        .spectrum--lightest .spectrum-Article .spectrum-Body4,
        .spectrum--lightest .spectrum-Article .spectrum-Body5 {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Article .spectrum-Heading1,
        .spectrum--lightest .spectrum-Article .spectrum-Heading2,
        .spectrum--lightest .spectrum-Article .spectrum-Heading3,
        .spectrum--lightest .spectrum-Article .spectrum-Heading4,
        .spectrum--lightest .spectrum-Article .spectrum-Heading5,
        .spectrum--lightest .spectrum-Article .spectrum-Heading6 {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Article .spectrum-Detail,
        .spectrum--lightest .spectrum-Article .spectrum-Subheading {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Article .spectrum-Heading1--display,
        .spectrum--lightest .spectrum-Article .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum-Article .spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum-Article .spectrum-Heading2--display,
        .spectrum--lightest .spectrum-Article .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum-Article .spectrum-Heading2--quiet {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Body1,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Body1,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Body1 {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Body2,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Body2,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Body2 {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Body3,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Body3,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Body3 {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Body4,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Body4,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Body4 {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Body5,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Body5,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Body5 {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading3,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading3,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading3 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading4,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading4,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading4 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading5,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading5,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading5 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading6,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading6,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading6 {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Subheading,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Subheading,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Subheading {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Detail,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Detail,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Detail {
            color: #505050;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1--quiet {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2--quiet {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1--strong,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1--strong,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1--strong {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2--strong,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2--strong,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2--strong {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1--display,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1--display,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1--display {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2--display,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2--display,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2--display {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--strong {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--strong {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--quiet {
            color: #323232;
        }

        .spectrum--lightest .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--lightest .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--quiet {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Body,
        .spectrum--lightest .spectrum-Body--large,
        .spectrum--lightest .spectrum-Body--small,
        .spectrum--lightest .spectrum-Code1,
        .spectrum--lightest .spectrum-Code2,
        .spectrum--lightest .spectrum-Code3,
        .spectrum--lightest .spectrum-Code4,
        .spectrum--lightest .spectrum-Code5 {
            color: #505050;
        }

        .spectrum--lightest .spectrum-Body--secondary {
            color: #767676;
        }

        .spectrum--lightest .spectrum-Heading--display {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Heading--pageTitle {
            color: #767676;
        }

        .spectrum--lightest .spectrum-Heading--subtitle1,
        .spectrum--lightest .spectrum-Heading--subtitle2 {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Heading--subtitle3 {
            color: #767676;
        }

        .spectrum--darkest .spectrum-Body1,
        .spectrum--darkest .spectrum-Body2,
        .spectrum--darkest .spectrum-Body3,
        .spectrum--darkest .spectrum-Body4,
        .spectrum--darkest .spectrum-Body5 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Heading1,
        .spectrum--darkest .spectrum-Heading2,
        .spectrum--darkest .spectrum-Heading3,
        .spectrum--darkest .spectrum-Heading4,
        .spectrum--darkest .spectrum-Heading5,
        .spectrum--darkest .spectrum-Heading6 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Detail,
        .spectrum--darkest .spectrum-Subheading {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Heading1--display,
        .spectrum--darkest .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--darkest .spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum-Heading1--strong,
        .spectrum--darkest .spectrum-Heading2--display,
        .spectrum--darkest .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--darkest .spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum-Heading2--strong {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Article .spectrum-Body1,
        .spectrum--darkest .spectrum-Article .spectrum-Body2,
        .spectrum--darkest .spectrum-Article .spectrum-Body3,
        .spectrum--darkest .spectrum-Article .spectrum-Body4,
        .spectrum--darkest .spectrum-Article .spectrum-Body5 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Article .spectrum-Heading1,
        .spectrum--darkest .spectrum-Article .spectrum-Heading2,
        .spectrum--darkest .spectrum-Article .spectrum-Heading3,
        .spectrum--darkest .spectrum-Article .spectrum-Heading4,
        .spectrum--darkest .spectrum-Article .spectrum-Heading5,
        .spectrum--darkest .spectrum-Article .spectrum-Heading6 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Article .spectrum-Detail,
        .spectrum--darkest .spectrum-Article .spectrum-Subheading {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Article .spectrum-Heading1--display,
        .spectrum--darkest .spectrum-Article .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum-Article .spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum-Article .spectrum-Heading2--display,
        .spectrum--darkest .spectrum-Article .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum-Article .spectrum-Heading2--quiet {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Body1,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Body1,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Body1 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Body2,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Body2,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Body2 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Body3,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Body3,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Body3 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Body4,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Body4,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Body4 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Body5,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Body5,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Body5 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading3,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading3,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading3 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading4,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading4,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading4 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading5,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading5,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading5 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading6,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading6,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading6 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Subheading,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Subheading,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Subheading {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Detail,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Detail,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Detail {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1--quiet {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2--quiet {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1--strong,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1--strong,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1--strong {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2--strong,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2--strong,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2--strong {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1--display,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1--display,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1--display {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2--display,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2--display,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2--display {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--strong,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--strong {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--strong,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--strong {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading1--display.spectrum-Heading1--quiet,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading1--display.spectrum-Heading1--quiet {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum:lang(ja) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum:lang(ko) .spectrum-Heading2--display.spectrum-Heading2--quiet,
        .spectrum--darkest .spectrum:lang(zh) .spectrum-Heading2--display.spectrum-Heading2--quiet {
            color: #e2e2e2;
        }

        .spectrum--darkest,
        .spectrum--darkest .spectrum-Body,
        .spectrum--darkest .spectrum-Body--large,
        .spectrum--darkest .spectrum-Body--small,
        .spectrum--darkest .spectrum-Code1,
        .spectrum--darkest .spectrum-Code2,
        .spectrum--darkest .spectrum-Code3,
        .spectrum--darkest .spectrum-Code4,
        .spectrum--darkest .spectrum-Code5 {
            color: #b4b4b4;
        }

        .spectrum--darkest .spectrum-Body--secondary {
            color: #858585;
        }

        .spectrum--darkest .spectrum-Heading--display {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Heading--pageTitle {
            color: #858585;
        }

        .spectrum--darkest .spectrum-Heading--subtitle1,
        .spectrum--darkest .spectrum-Heading--subtitle2 {
            color: #e2e2e2;
        }

        .spectrum--darkest .spectrum-Heading--subtitle3 {
            color: #858585;
        }

        .spectrum-Alert {
            position: relative;
            display: inline-block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            min-width: 368px;
            min-height: 38px;
            margin: 8px 0;
            padding: 20px;
            border-width: 2px;
            border-style: solid;
            border-radius: 4px;
        }

        .spectrum-Alert-icon {
            position: absolute;
            display: block;
            top: 20px;
            right: 20px;
        }

        .spectrum-Alert-header {
            display: inline-block;
            height: auto;
            min-height: 0;
            margin: 0;
            padding: 0 30px 0 0;
            font-size: 14px;
            font-weight: 700;
            font-style: normal;
            line-height: 14px;
            text-transform: none;
        }

        .spectrum-Alert-content {
            display: block;
            margin: 8px 0 0;
            padding: 0;
            font-size: 14px;
            word-wrap: break-word;
        }

        .spectrum-Alert-footer {
            display: block;
            text-align: right;
            padding-top: 0.5rem;
        }

        .spectrum-Alert-footer:empty {
            display: none;
        }

        .spectrum-Alert-footer .spectrum-Button {
            margin-right: 0;
            margin-left: 0.75rem;
        }

        .spectrum--lightest .spectrum-Alert {
            background-color: #fff;
            color: #747474;
        }

        .spectrum--lightest .spectrum-Alert-header {
            color: #323232;
        }

        .spectrum--lightest .spectrum-Alert-content {
            color: #747474;
        }

        .spectrum--lightest .spectrum-Alert--info {
            border-color: #378ef0;
        }

        .spectrum--lightest .spectrum-Alert--info .spectrum-Alert-icon {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Alert--help {
            border-color: #378ef0;
        }

        .spectrum--lightest .spectrum-Alert--help .spectrum-Alert-icon {
            color: #1473e6;
        }

        .spectrum--lightest .spectrum-Alert--error {
            border-color: #ec5b62;
        }

        .spectrum--lightest .spectrum-Alert--error .spectrum-Alert-icon {
            color: #d7373f;
        }

        .spectrum--lightest .spectrum-Alert--success {
            border-color: #33ab84;
        }

        .spectrum--lightest .spectrum-Alert--success .spectrum-Alert-icon {
            color: #268e6c;
        }

        .spectrum--lightest .spectrum-Alert--warning {
            border-color: #f29423;
        }

        .spectrum--lightest .spectrum-Alert--warning .spectrum-Alert-icon {
            color: #da7b11;
        }

        .spectrum--darkest .spectrum-Alert {
            background-color: #080808;
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Alert-header {
            color: #efefef;
        }

        .spectrum--darkest .spectrum-Alert-content {
            color: #a2a2a2;
        }

        .spectrum--darkest .spectrum-Alert--info {
            border-color: #1473e6;
        }

        .spectrum--darkest .spectrum-Alert--info .spectrum-Alert-icon {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Alert--help {
            border-color: #1473e6;
        }

        .spectrum--darkest .spectrum-Alert--help .spectrum-Alert-icon {
            color: #378ef0;
        }

        .spectrum--darkest .spectrum-Alert--error {
            border-color: #d7373f;
        }

        .spectrum--darkest .spectrum-Alert--error .spectrum-Alert-icon {
            color: #ec5b62;
        }

        .spectrum--darkest .spectrum-Alert--success {
            border-color: #268e6c;
        }

        .spectrum--darkest .spectrum-Alert--success .spectrum-Alert-icon {
            color: #33ab84;
        }

        .spectrum--darkest .spectrum-Alert--warning {
            border-color: #da7b11;
        }

        .spectrum--darkest .spectrum-Alert--warning .spectrum-Alert-icon {
            color: #f29423;
        }

        .spectrum--darkest .EmailPage__account-not-found-separator,
        .spectrum--darkest .EmailPage__instructions {
            color: #a2a2a2;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-round'] [data-social-buttons-container='regular'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-round'] [data-social-buttons-container='round'] {
            display: block;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-round'] [data-social-buttons-container='white'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-regular'] [data-social-buttons-container='regular'] {
            display: block;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-regular'] [data-social-buttons-container='round'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-regular'] [data-social-buttons-container='white'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-white'] [data-social-buttons-container='regular'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-white'] [data-social-buttons-container='round'] {
            display: none;
        }

        .EmailPage #SocialButtons-Container[data-social-buttons-container-condition='is-white'] [data-social-buttons-container='white'] {
            display: block;
        }

        .EmailPage .spectrum-ActionButton[data-social-button-type='round-button-white']+.spectrum-ActionButton[data-social-button-type='round-button-white'] {
            margin-left: 18px;
        }

        .EmailPage__continue-with-email {
            display: none;
        }

        .EmailPage__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .EmailPage__content.EmailPage__content--reversed {
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: column-reverse;
            -moz-box-orient: vertical;
            -moz-box-direction: reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -moz-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .EmailPage__content.EmailPage__content--reversed .EmailPage__continue-with-email {
            display: block;
        }

        .EmailPage__instructions {
            color: #505050;
            font-size: 16px;
            font-weight: 400;
            line-height: 27px;
            margin: 8px 0 0;
        }

        .EmailPage__email-field.form-group {
            margin: 32px 0 21px;
        }

        .EmailPage__email-field.form-group .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .EmailPage__email-field.form-group .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .EmailPage__email-field.form-group .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .EmailPage__email-field.form-group .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .EmailPage__submit {
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .EmailPage__social-separator {
            margin-bottom: 10px;
        }

        .EmailPage__account-not-found-separator {
            color: #505050;
        }

        .EmailPage-Toast .spectrum-Toast-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            white-space: pre-wrap;
        }

        .EmailPage-Toast--class-code .spectrum-Link {
            text-decoration: underline;
        }

        .EmailPage-Toast--class-code .spectrum-Link,
        .EmailPage-Toast--class-code .spectrum-Link:active,
        .EmailPage-Toast--class-code .spectrum-Link:focus,
        .EmailPage-Toast--class-code .spectrum-Link:hover,
        .EmailPage-Toast--class-code .spectrum-Link:visited {
            color: #fff;
        }

        .EmailPage-Toast__support-link.spectrum-Link {
            text-decoration: none;
            margin-left: auto;
        }

        .EmailPage-Toast__support-link.spectrum-Link,
        .EmailPage-Toast__support-link.spectrum-Link:active,
        .EmailPage-Toast__support-link.spectrum-Link:focus,
        .EmailPage-Toast__support-link.spectrum-Link:hover,
        .EmailPage-Toast__support-link.spectrum-Link:visited {
            color: #fff;
        }

        .spectrum--darkest .IdentitiesPage__user-info-heading {
            color: #a2a2a2;
        }

        .spectrum--darkest .IdentitiesPage__user-info-subheading {
            color: #e2e2e2;
        }

        .IdentitiesPage__chooser {
            margin-top: 18px;
        }

        .IdentitiesPage-Footer__navigate-back-link {
            margin-top: 32px;
        }

        .IdentitiesPage__user-info {
            padding: 0 56px;
            margin-top: 25px;
        }

        .IdentitiesPage__user-info-heading {
            margin: 0;
            font-size: 12px;
            color: #747474;
        }

        .IdentitiesPage__user-info-subheading {
            margin: 0;
            font-size: 14px;
            color: #323232;
        }

        @media screen and (max-width: 767px) {
            .IdentitiesPage__user-info {
                padding: 0 16px;
            }
        }

        .PasswordPage__profile {
            margin: 24px 0 0;
        }

        .PasswordPage__password-field.form-group {
            margin: 32px 0 21px;
        }

        .PasswordPage__action-buttons-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .PasswordPage-Footer__forgot-password-link {
            margin: 32px 0 24px;
        }

        .PasswordPage-Footer__navigate-back-link {
            margin: 24px 0;
        }

        .spectrum .Signup .spectrum-FieldButton--quiet {
            border-bottom: 1px solid #eaeaea;
        }

        .spectrum .Signup .spectrum-FieldLabel .spectrum-Icon {
            padding-right: 4px;
            margin-top: -0.2em;
        }

        .spectrum .Signup-CountryChooser-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .spectrum .Signup-CountryChooser-row .spectrum-FieldLabel {
            margin-right: 16px;
        }

        .spectrum .Signup-CountryChooser-row .spectrum-Dropdown-label {
            margin-bottom: 0;
        }

        .spectrum .Signup-CountryChooser .spectrum-FieldButton--quiet {
            border-bottom: none;
        }

        .spectrum .Signup-CountryChooser.react-spectrum-Dropdown-fixed {
            min-width: 0;
        }

        .spectrum .Signup-CountryChooser .spectrum-Dropdown-label {
            font-size: 12px;
            color: #1473e6;
        }

        .spectrum--darkest .Signup .spectrum-FieldButton--quiet {
            border-bottom: 1px solid #393939;
        }

        .Signup-MarketingConsent {
            margin-top: 20px;
        }

        .Signup-MarketingConsent,
        .Signup-MarketingConsent .spectrum-Checkbox-label {
            font-size: 12px;
        }

        .Signup-MarketingConsent p,
        .Signup-MarketingConsent ul {
            margin: 0;
        }

        .Signup-MarketingConsent ol,
        .Signup-MarketingConsent ul {
            padding-left: 17px;
        }

        .Signup .CardLayout__content {
            margin-top: 15px;
        }

        .Signup .CardLayout__footer {
            margin-top: 12px;
        }

        .Signup__social-separator {
            margin-bottom: 10px;
        }

        .Signup__profile {
            margin: 20px 0;
        }

        .Signup .form-group--hidden {
            display: none;
        }

        .Signup .form-group:not(.form-group--hidden) {
            margin: 0 0 20px;
            min-height: 46px;
            padding: 0;
        }

        .Signup .form-group:not(.form-group--hidden).form-group-country {
            margin: 25px 0 0;
            min-height: 35px;
        }

        .Signup .form-group-column {
            padding-left: 8px;
            padding-right: 8px;
        }

        .Signup .form-group-row {
            margin: 0 -8px;
        }

        .Signup .form-group--hidden+.form-group {
            margin-top: 0;
        }

        .Signup__step {
            color: #747474;
        }

        .Signup__instructions {
            color: #505050;
            font-size: 16px;
            font-weight: 400;
            line-height: 27px;
            margin: 0 0 4px;
        }

        .Signup__social-instructions {
            color: #959595;
            font-size: 14px;
            font-weight: 400;
            line-height: 27px;
            margin: 0 0 4px;
        }

        .Signup__with-email-instructions {
            color: #505050;
            font-size: 16px;
            font-weight: 700;
            line-height: 27px;
            margin: 0 0 23px;
        }

        .Signup__email-field .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .Signup__email-field .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .Signup__email-field .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .Signup__email-field .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .Signup-CreateAccount {
            margin: 32px 0;
            text-align: right;
        }

        .Signup-DateOfBirthChooser-Container.form-group {
            margin-bottom: 20px;
        }

        .Signup-DateOfBirthChooser {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
        }

        .Signup-DateOfBirthChooser__label .TooltipFieldLabel__content {
            margin-top: 10px;
        }

        .Signup-DateOfBirthChooser__month {
            -webkit-flex-basis: 1px;
            -ms-flex-preferred-size: 1px;
            flex-basis: 1px;
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -moz-box-flex: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
        }

        .Signup-DateOfBirthChooser__month .spectrum-Dropdown {
            min-width: auto;
            min-width: 0;
            width: 100%;
        }

        .Signup-DateOfBirthChooser__day,
        .Signup-DateOfBirthChooser__year {
            -webkit-flex-basis: 1px;
            -ms-flex-preferred-size: 1px;
            flex-basis: 1px;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .Signup-DateOfBirthChooser__day .spectrum-Textfield :not(.is-valid):valid,
        .Signup-DateOfBirthChooser__year .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .Signup-DateOfBirthChooser__day .spectrum-Textfield :not(.is-valid):focus:valid,
        .Signup-DateOfBirthChooser__year .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .Signup-DateOfBirthChooser__day .spectrum-Textfield:not(.is-invalid):invalid,
        .Signup-DateOfBirthChooser__year .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .Signup-DateOfBirthChooser__day .spectrum-Textfield:not(.is-invalid):focus:invalid,
        .Signup-DateOfBirthChooser__year .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .Signup-DateOfBirthChooser__day input,
        .Signup-DateOfBirthChooser__year input {
            min-width: 0;
        }

        .Signup-DateOfBirthChooser__day:not(:first-child),
        .Signup-DateOfBirthChooser__month:not(:first-child),
        .Signup-DateOfBirthChooser__year:not(:first-child) {
            margin-left: 16px;
        }

        .Signup .MarketingConsent-SouthKorea ol,
        .Signup .MarketingConsent-SouthKorea ul {
            padding-left: 0;
        }

        .Country-menu .spectrum-Menu-item {
            font-size: 12px;
        }

        @media screen and (max-width: 767px) {
            .Signup .form-group-column {
                min-height: 54px;
                margin-bottom: 15px;
            }

            .Signup .form-group-column:last-child {
                margin-bottom: 0;
            }
        }

        .SocialLinking__actions {
            text-align: right;
        }

        .SocialLinking__profile {
            margin: 24px 0 0;
        }

        .SocialLinking__description {
            color: #959595;
            font-size: 14px;
            font-weight: 400;
            line-height: 27px;
            margin: 0 0 4px;
        }

        .SocialLinking .spectrum-Button:first-child {
            margin-bottom: 10px;
        }

        .SocialEmailCollectionPage__email-field .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SocialEmailCollectionPage__email-field .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .SocialEmailCollectionPage__email-field .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SocialEmailCollectionPage__email-field .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .ChallengeChooser__chooser {
            margin-top: 18px;
        }

        .ChallengeChooser__description {
            font-size: 18px;
            margin: 0;
        }

        .ChallengeChooser-Footer__navigate-back-link {
            margin-top: 32px;
        }

        .ChallengeChooser__link-list-item {
            margin: 24px 0;
        }

        .ChallengeCode-Header {
            overflow: hidden;
        }

        .ChallengeCode__link-list-item {
            margin: 24px 0;
        }

        .ChallengeCode__message-container {
            min-height: 28px;
        }

        .ChallengeCode-CodeInput {
            clear: both;
            text-align: center;
        }

        .ChallengeCode-Buttons {
            margin-top: 20px;
        }

        .ChallengeCode-Buttons .Button {
            margin-bottom: 24px;
        }

        .ChallengeCode-Description {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
        }

        .ChallengeCode-Description-Bold {
            font-weight: 700;
        }

        .ChallengeCode-Destination-Description:after {
            content: ' ';
            display: inline-block;
            white-space: pre;
        }

        .ChallengeCode-Toast {
            font-weight: 400;
        }

        .ChallengeCode-Toast-Title {
            font-weight: 700;
        }

        .ChallengeCode-Toast-Content:after,
        .ChallengeCode-Toast-Content:before {
            content: ' ';
            white-space: pre;
        }

        .ChallengeCode-ToastButtons .spectrum-Button--overBackground:enabled:hover {
            background-color: inherit;
        }

        .ChallengeCode-ToastButtons .spectrum-CircleLoader--small {
            margin-right: 3px;
            margin-top: 4px;
        }

        .ChallengeCode-ToastButtons .spectrum-CircleLoader-fill,
        .ChallengeCode-ToastButtons .spectrum-CircleLoader-track {
            border-width: 3px;
        }

        .ChallengeCode-ToastButtons .spectrum-Button {
            float: none;
            margin-right: 0;
            margin-top: 10px;
            padding: 2px 4px;
        }

        @media screen and (min-width: 1024px) {
            .ChallengeCode-ToastButtons .spectrum-Button--overBackground:enabled:hover {
                color: #515151;
                background-color: #fff;
            }
        }

        @media screen and (min-width: 768px) {
            .ChallengeCode-ToastButtons .spectrum-CircleLoader--small {
                margin-right: 6px;
            }

            .ChallengeCode-ToastButtons .spectrum-Button {
                padding: 3.5px 14px 4.5px;
            }
        }

        .SocialNoEmailPage__email-field .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SocialNoEmailPage__email-field .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .SocialNoEmailPage__email-field .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SocialNoEmailPage__email-field .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .SocialChooser .ActionList-Item:last-child:after,
        .SocialChooser .ActionList-Item:not(:last-child):before {
            background-color: #eaeaea;
            content: '';
            display: block;
            position: absolute;
            height: 1px;
            left: 16px;
            right: 16px;
        }

        .spectrum--darkest .SocialChooser .ActionList-Item:not(:last-child):before {
            background-color: #393939;
        }

        .spectrum--darkest .SocialChooser .ActionList-Item:last-child:after {
            background-color: #393939;
        }

        @media screen and (min-width: 768px) {

            .SocialChooser .ActionList-Item:last-child:after,
            .SocialChooser .ActionList-Item:not(:last-child):before {
                left: 56px;
                right: 56px;
            }
        }

        .SocialOnlyPage__profile {
            margin: 32px 0;
        }

        .SocialOnlyPage__message {
            margin-bottom: 40px;
        }

        .SocialOnlyPage__back-link {
            margin-top: 40px;
        }

        .Error-AccountMaintenance .IconHeading__heading {
            font-size: 34px;
        }

        @media screen and (max-width: 509px) {
            .FederatedWaitPage {
                position: fixed;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        }

        .spectrum--darkest .PP-TermsOfUse--sticky-footer .PP-TermsOfUse__sticky:before {
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(#000));
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), #000);
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), #000);
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.5), #000);
        }

        .PP-TermsOfUse .CardLayout__content {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            overflow: hidden;
        }

        .PP-TermsOfUse .spectrum-Heading1 {
            font-size: 27px;
            line-height: 35px;
        }

        .PP-TermsOfUse p,
        .PP-TermsOfUse ul {
            margin: 0.5em 0;
        }

        .PP-TermsOfUse__terms {
            font-size: 15px;
            line-height: 23px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            overflow-y: auto;
        }

        .PP-TermsOfUse__terms-loader {
            text-align: center;
        }

        .PP-TermsOfUse__terms ul {
            padding-left: 20px;
        }

        .PP-TermsOfUse__terms a {
            color: #1473e6;
            background-color: rgba(0, 0, 0, 0);
            -webkit-text-decoration-skip: objects;
            text-decoration: none;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            outline: 0;
        }

        .PP-TermsOfUse__terms a:hover {
            text-decoration: underline;
        }

        .PP-TermsOfUse__actions {
            margin-top: 20px;
            text-align: center;
        }

        @media screen and (min-width: 768px) {
            .PP-TermsOfUse .spectrum-Heading1 {
                font-size: 36px;
                line-height: 1.3;
            }

            .PP-TermsOfUse__sticky .spectrum-Button {
                font-size: 14px;
                line-height: 1.3;
            }

            .PP-TermsOfUse__actions {
                margin-top: 32px;
                text-align: right;
            }
        }

        .PP-DateOfBirth__explanation {
            font-size: 18px;
        }

        .PP-DateOfBirth__actions {
            text-align: right;
        }

        .PP-ProfileChooser h1 {
            margin-bottom: 24px;
        }

        .PP-ProfileChooser__profile {
            margin: 24px 0;
        }

        .PP-ProfileChooser__learn-more-link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .PasswordRecovery .PasswordRecovery__profile {
            margin: 24px 0 32px;
        }

        .PasswordRecovery .PasswordRecovery__reset-password-btn {
            margin-top: 16px;
            text-align: right;
            min-height: 0;
        }

        .PP-T2EInviteIntroduction {
            font-size: 18px;
        }

        .PP-T2EInviteIntroduction__org-name {
            display: inline-block;
            max-width: 100%;
            vertical-align: bottom;
            overflow-x: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .PP-T2EInviteIntroduction__explanation {
            font-size: 18px;
        }

        .PP-T2EInviteIntroduction__actions {
            text-align: right;
        }

        .PP-T2EInviteIntroduction__profiles-list {
            padding-left: 20px;
        }

        .PP-T2EInviteIntroduction__profiles-list li {
            margin-top: 4px;
        }

        .PP-T2EInviteIntroduction__doLaterText {
            font-style: italic;
            color: #9a9c9a;
        }

        .PP-InviteIntroduction,
        .PP-InviteIntroduction__explanation {
            font-size: 18px;
        }

        .PP-InviteIntroduction__actions {
            text-align: right;
        }

        .PP-I2TUpgrade__explanation,
        .PP-I2TUpgrade__list {
            font-size: 18px;
        }

        .PP-I2TUpgrade__explanation .spectrum-Link {
            word-break: break-all;
        }

        .PP-I2TUpgrade__actions {
            text-align: right;
        }

        .AssetMigrationChooser__explanation {
            margin: 24px 0;
            font-size: 18px;
        }

        .AssetMigrationChooser__chooser-choice {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
            font-size: 18px;
        }

        .AssetMigrationPolling__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 120px;
        }

        .AssetMigrationPolling__explanation {
            font-size: 18px;
        }

        .T2EAssetMigration__title {
            font-size: 28px;
        }

        .T2EAssetMigration__explanation {
            font-size: 16px;
        }

        .T2EAssetMigration__chooser {
            font-size: 17px;
            overflow-y: auto;
            max-height: 380px;
        }

        .T2EAssetMigration-Introduction__explanation,
        .T2EAssetMigration-Introduction__profiles-info,
        .T2EAssetMigration-Introduction__profiles-list {
            font-size: 18px;
        }

        .T2EAssetMigration-Introduction__actions {
            text-align: right;
        }

        .T2EAssetMigration-Introduction__profiles-list {
            padding-left: 20px;
        }

        .T2EAssetMigration-Introduction__profiles-list li {
            margin-top: 4px;
        }

        .T2EAssetMigration-Complete__content {
            font-size: 18px;
        }

        .T2EAssetMigration-Complete__actions {
            text-align: right;
        }

        .T2EAssetMigration-NoMigration__explanation {
            font-size: 16px;
        }

        .T2EAssetMigration-NoMigration__actions,
        .T2EAssetMigration__actions {
            text-align: right;
        }

        .T2EProfilesSetup-Complete__explanation,
        .T2EProfilesSetup-Complete__note,
        .T2EProfilesSetup-Complete__profiles-info {
            font-size: 18px;
        }

        .T2EProfilesSetup-Complete__actions {
            text-align: right;
        }

        .T2EProfilesSetup-Complete__profiles-list {
            list-style: none;
            padding: 0;
        }

        .T2EProfilesSetup-Complete__profiles-list li {
            padding: 0;
            margin-top: 15px;
        }

        .T2EProfilesSetup-Introduction__explanation,
        .T2EProfilesSetup-Introduction__note,
        .T2EProfilesSetup-Introduction__profiles-info {
            font-size: 18px;
        }

        .T2EProfilesSetup-Introduction__note {
            font-weight: 700;
        }

        .T2EProfilesSetup-Introduction__actions {
            text-align: right;
        }

        .T2EProfilesSetup-Introduction__profiles-list {
            padding-left: 20px;
        }

        .T2EProfilesSetup-Introduction__profiles-list li {
            margin-top: 15px;
        }

        .PP-RecordMarketingConsent {
            font-size: 14px;
        }

        .PP-RecordMarketingConsent-MarketingConsent {
            margin-top: 24px;
        }

        .PP-RecordMarketingConsent-MarketingConsent p,
        .PP-RecordMarketingConsent-MarketingConsent ul {
            margin: 24px 0 0;
        }

        .PP-RecordMarketingConsent-MarketingConsent ol,
        .PP-RecordMarketingConsent-MarketingConsent ul {
            padding-left: 17px;
        }

        .PP-RecordMarketingConsent__continue-btn {
            margin-top: 32px;
            text-align: right;
        }

        .PP-AddSecondaryEmail__email-field.form-group {
            margin: 32px 0 21px;
        }

        .PP-AddSecondaryEmail__email-field.form-group .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PP-AddSecondaryEmail__email-field.form-group .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PP-AddSecondaryEmail__email-field.form-group .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PP-AddSecondaryEmail__email-field.form-group .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .SmsNotice {
            color: #bcbcbc;
        }

        .spectrum .phoneNumberInput .spectrum-Dropdown-label {
            font-size: 19px;
            line-height: 1.6;
        }

        .spectrum .separator {
            border-top: 1px solid #eaeaea;
        }

        .spectrum--darkest .separator {
            border-top: 1px solid #393939;
        }

        .Dialog__content-list {
            white-space: pre-line;
            list-style: none;
            padding: 0;
        }

        @media screen and (min-width: 768px) {
            .spectrum .phoneNumberInput .spectrum-Dropdown-label {
                font-size: 16px;
                line-height: 1.15;
            }
        }

        .flag-icon,
        .flag-icon-background {
            background-size: contain;
            background-position: 50%;
            background-repeat: no-repeat;
        }

        .flag-icon {
            position: relative;
            display: inline-block;
            width: 1.33333333em;
            line-height: 1em;
        }

        .flag-icon:before {
            content: ' ';
        }

        .flag-icon-ad {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/35a43c59eaca3a0910f1f99c324852a1.svg);
        }

        .flag-icon-ae {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDA3MzJmIiBkPSJNMCAwaDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAxNjBoNjQwdjE2MEgweiIvPjxwYXRoIGQ9Ik0wIDMyMGg2NDB2MTYwSDB6Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNMCAwaDIyMHY0ODBIMHoiLz48L3N2Zz4=);
        }

        .flag-icon-af {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fc3ae31499bbc1c4e5751d568f1fe055.svg);
        }

        .flag-icon-ag {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNzkuNyAwSDYwM3Y1MTJILTc5Ljd6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDc0LjcpIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0xMjAgMGg3NjMuM3Y1MTEuNUgtMTIweiIvPjxwYXRoIGQ9Ik0tMTE4LjMuNmg3NjAuOXYyMTYuMWgtNzYxeiIvPjxwYXRoIGZpbGw9IiMwMDYxZmYiIGQ9Ik0yMS4zIDIwMy4yaDUwNVYzMTdoLTUwNXoiLz48cGF0aCBmaWxsPSIjZTIwMDAwIiBkPSJNNjQyLjggMS44VjUxMkgyNjJMNjQyLjggMS43em0tNzYxLjUgMFY1MTJIMjYyTC0xMTguNyAxLjd6Ii8+PHBhdGggZmlsbD0iI2ZmZDYwMCIgZD0iTTQ0MC40IDIwMy4zTDM2NCAxODRsNjQuOS00OS03OS43IDExLjQgNDEtNjkuNS03MC43IDQxTDMzMi4zIDM3bC00Ny45IDYzLjgtMTkuMy03NC0yMS43IDc2LjMtNDcuOC02NSAxMy43IDgzLjJMMTM4LjUgNzhsNDEgNjkuNS03Ny40LTEyLjUgNjMuOCA0Ny44TDg2IDIwMy4zaDM1NC4zeiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ai {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/69b07e3abdff954ff881a7c9be737f90.svg);
        }

        .flag-icon-al {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f8e50a1ae706df3c1e016d4d132064b4.svg);
        }

        .flag-icon-am {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0wIDBoNjQwdjE2MEgweiIvPjxwYXRoIGZpbGw9IiMwMGYiIGQ9Ik0wIDE2MGg2NDB2MTYwSDB6Ii8+PHBhdGggZmlsbD0ib3JhbmdlIiBkPSJNMCAzMjBoNjQwdjE2MEgweiIvPjwvc3ZnPg==);
        }

        .flag-icon-ao {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bfa881bc6c3a70ceecd67bc4d747ae40.svg);
        }

        .flag-icon-aq {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5e1051368bc319a8e4f078ae140b6d88.svg);
        }

        .flag-icon-ar {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/76d747ea465acbcda70d8aaf6d042fa6.svg);
        }

        .flag-icon-as {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/26d9734e85653c83268543e1e643c03d.svg);
        }

        .flag-icon-at {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02NDAgNDgwSDBWMGg2NDB6Ii8+PHBhdGggZmlsbD0iI2VkMjkzOSIgZD0iTTY0MCA0ODBIMFYzMjBoNjQwem0wLTMxOS45SDBWLjFoNjQweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-au {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bc0a06f8b3740816a2b48604aca43bd7.svg);
        }

        .flag-icon-aw {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6fc6818a6762cc0f9c0468991c531425.svg);
        }

        .flag-icon-ax {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0xMDYuMyAwaDExMzMuM3Y4NTBIMTA2LjN6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCguNTY0NzIgMCAwIC41NjQ4MiAtNjAgLS4xKSI+PHBhdGggZmlsbD0iIzAwNTNhNSIgZD0iTTAgMGgxMzAwdjg1MEgweiIvPjxnIGZpbGw9IiNmZmNlMDAiPjxwYXRoIGQ9Ik00MDAgMGgyNTB2ODUwSDQwMHoiLz48cGF0aCBkPSJNMCAzMDBoMTMwMHYyNTBIMHoiLz48L2c+PGcgZmlsbD0iI2QyMTAzNCI+PHBhdGggZD0iTTQ3NSAwaDEwMHY4NTBINDc1eiIvPjxwYXRoIGQ9Ik0wIDM3NWgxMzAwdjEwMEgweiIvPjwvZz48L2c+PC9zdmc+);
        }

        .flag-icon-az {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjM2Y5YzM1IiBkPSJNLjEgMGg2NDB2NDgwSC4xeiIvPjxwYXRoIGZpbGw9IiNlZDI5MzkiIGQ9Ik0uMSAwaDY0MHYzMjBILjF6Ii8+PHBhdGggZmlsbD0iIzAwYjllNCIgZD0iTS4xIDBoNjQwdjE2MEguMXoiLz48Y2lyY2xlIGN4PSIzMDQiIGN5PSIyNDAiIHI9IjcyIiBmaWxsPSIjZmZmIi8+PGNpcmNsZSBjeD0iMzIwIiBjeT0iMjQwIiByPSI2MCIgZmlsbD0iI2VkMjkzOSIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zODQgMjAwbDcuNyAyMS41IDIwLjYtOS44LTkuOCAyMC43TDQyNCAyNDBsLTIxLjUgNy43IDkuOCAyMC42LTIwLjYtOS44TDM4NCAyODBsLTcuNy0yMS41LTIwLjYgOS44IDkuOC0yMC42TDM0NCAyNDBsMjEuNS03LjctOS44LTIwLjYgMjAuNiA5LjhMMzg0IDIwMHoiLz48L3N2Zz4=);
        }

        .flag-icon-ba {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f7122adbdab3f82657e9d539c03accfa.svg);
        }

        .flag-icon-bb {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzAwMjY3ZiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmYzcyNiIgZD0iTTIxMy4zIDBoMjEzLjR2NDgwSDIxMy4zeiIvPjxwYXRoIGlkPSJhIiBkPSJNMzE5LjggMTM1LjVjLTcgMTktMTQgMzguNi0yOS4yIDUzLjcgNC43LTEuNiAxMy0zIDE4LjItMi44djc5LjVsLTIyLjQgMy4zYy0uOCAwLTEtMS4zLTEtMy0yLjItMjQuNy04LTQ1LjUtMTQuOC02Ny0uNS0yLjktOS0xNC0yLjQtMTIgLjggMCA5LjUgMy42IDguMiAxLjlhODUgODUgMCAwIDAtNDYuNC0yNGMtMS41LS4zLTIuNC41LTEgMi4yIDIyLjQgMzQuNiA0MS4zIDc1LjUgNDEuMSAxMjQgOC44IDAgMzAtNS4yIDM4LjctNS4ydjU2LjFIMzIwbDIuNS0xNTYuN3oiLz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0ibWF0cml4KC0xIDAgMCAxIDYzOS41IDApIiB4bGluazpocmVmPSIjYSIvPjwvc3ZnPg==);
        }

        .flag-icon-bd {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDA2YTRlIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48Y2lyY2xlIGN4PSIyODAiIGN5PSIyNDAiIHI9IjE2MCIgZmlsbD0iI2Y0MmE0MSIvPjwvc3ZnPg==);
        }

        .flag-icon-be {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmQ5MGMiIGQ9Ik0yMTMuMyAwaDIxMy40djQ4MEgyMTMuM3oiLz48cGF0aCBmaWxsPSIjZjMxODMwIiBkPSJNNDI2LjcgMEg2NDB2NDgwSDQyNi43eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-bf {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNkZTAwMDAiIGQ9Ik02NDAgNDc5LjZILjRWMEg2NDB6Ii8+PHBhdGggZmlsbD0iIzM1YTEwMCIgZD0iTTYzOS42IDQ4MEgwVjI0MC4yaDYzOS42eiIvPjxwYXRoIGZpbGw9IiNmZmYzMDAiIGQ9Ik0yNTQuNiAyNzYuMmwtMTA2LTcyLjRoMTMxTDMyMCA4Ni42IDM2MC40IDIwNGwxMzEtLjEtMTA2IDcyLjQgNDAuNSAxMTcuMy0xMDYtNzIuNkwyMTQgMzkzLjQiLz48L2c+PC9zdmc+);
        }

        .flag-icon-bg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZDYyNjEyIiBkPSJNMCAzMjBoNjQwdjE2MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDBoNjQwdjE2MEgweiIvPjxwYXRoIGZpbGw9IiMwMDk2NmUiIGQ9Ik0wIDE2MGg2NDB2MTYwSDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-bh {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMCIvPjxwYXRoIGZpbGw9IiNjZTExMjYiIGQ9Ik02NDAgMEg5NmwxMTAuNyA0OEw5NiA5NmwxMTAuNyA0OEw5NiAxOTJsMTEwLjcgNDhMOTYgMjg4bDExMC43IDQ4TDk2IDM4NGwxMTAuNyA0OEw5NiA0ODBoNTQ0Ii8+PC9zdmc+);
        }

        .flag-icon-bi {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tOTAuNSAwSDU5MnY1MTJILTkwLjV6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg0LjkpIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iIzAwY2YwMCIgZD0iTS0xNzggMGw0MjguOCAyNTZMLTE3OCA1MTJ6bTg1Ny42IDBMMjUwLjggMjU2bDQyOC44IDI1NnoiLz48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0tMTc4IDBsNDI4LjggMjU2TDY3OS42IDB6bTAgNTEybDQyOC44LTI1NiA0MjguOCAyNTZ6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTY3OS42IDBoLTc5LjlMLTE3OCA0NjQuM1Y1MTJoNzkuOUw2NzkuNiA0Ny43eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zOTguOSAyNTZhMTQ4IDE0OCAwIDEgMS0yOTYuMSAwIDE0OCAxNDggMCAwIDEgMjk2IDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0xNzggMHY0Ny43TDU5OS43IDUxMmg3OS45di00Ny43TC05OC4xIDB6Ii8+PHBhdGggZmlsbD0icmVkIiBzdHJva2U9IiMwMGRlMDAiIHN0cm9rZS13aWR0aD0iMy45IiBkPSJNMjgwIDIwMC4ybC0xOS4zLjMtMTAgMTYuNC05LjktMTYuNC0xOS4yLS40IDkuMy0xNi45LTkuMi0xNi44IDE5LjItLjQgMTAtMTYuNCA5LjkgMTYuNSAxOS4yLjQtOS4zIDE2Ljh6bS02NC42IDExMS42bC0xOS4yLjMtMTAgMTYuNC05LjktMTYuNC0xOS4yLS40IDkuMy0xNi45LTkuMi0xNi44IDE5LjItLjQgMTAtMTYuNCA5LjkgMTYuNSAxOS4yLjQtOS4zIDE2Ljh6bTEzMC42IDBsLTE5LjIuMy0xMCAxNi40LTEwLTE2LjQtMTkuMS0uNCA5LjMtMTYuOS05LjMtMTYuOCAxOS4yLS40IDEwLTE2LjQgMTAgMTYuNSAxOS4yLjQtOS40IDE2Ljh6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-bj {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGw9ImdyYXkiIGQ9Ik02Ny42LTE1NGg2NjZ2NjY2aC02NjZ6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCguOTYxIDAgMCAuNzIwNyAtNjUgMTExKSI+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCI+PHBhdGggZmlsbD0iIzMxOTQwMCIgZD0iTTAtMTU0aDMzM3Y2NjZIMHoiLz48cGF0aCBmaWxsPSIjZmZkNjAwIiBkPSJNMzMzLTE1NGg2NjZ2MzMzSDMzM3oiLz48cGF0aCBmaWxsPSIjZGUyMTEwIiBkPSJNMzMzIDE3OWg2NjZ2MzMzSDMzM3oiLz48L2c+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-bl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-bm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/66bd8e808a023f39143728300543af78.svg);
        }

        .flag-icon-bn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bc085d7399e13438b05cac9348ac85e2.svg);
        }

        .flag-icon-bo {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fd5dd8c29fa569c2247efd369650330c.svg);
        }

        .flag-icon-bq {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMjE0NjhiIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHYzMjBIMHoiLz48cGF0aCBmaWxsPSIjYWUxYzI4IiBkPSJNMCAwaDY0MHYxNjBIMHoiLz48L3N2Zz4=);
        }

        .flag-icon-br {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e65d3bd397688d6f66bd8fbee7eaf74a.svg);
        }

        .flag-icon-bs {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTIgMGg2NDB2NDgwSC0xMnoiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNOTY4LjUgNDgwaC05NzlWMS44aDk3OXoiLz48cGF0aCBmaWxsPSIjZmZlOTAwIiBkPSJNOTY4LjUgMzQ0LjVoLTk3OVYxNDMuM2g5Nzl6Ii8+PHBhdGggZmlsbD0iIzA4Y2VkNiIgZD0iTTk2OC41IDQ4MGgtOTc5VjMyMC42aDk3OXptMC0zMTguN2gtOTc5VjJoOTc5eiIvPjxwYXRoIGQ9Ik0tMTEgMGMyLjMgMCAzOTEuOCAyMzYuOCAzOTEuOCAyMzYuOEwtMTIgNDc5LjItMTAuOSAweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-bt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e0d46f1d90e5b8a694ed6fad731f3bed.svg);
        }

        .flag-icon-bv {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLXdpZHRoPSIxcHQiIGNsaXAtcGF0aD0idXJsKCNhKSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0yOCAwaDY5OS43djUxMkgtMjh6Ii8+PHBhdGggZmlsbD0iI2Q3MjgyOCIgZD0iTS01My03Ny44aDIxOC43djI3Ni4ySC01M3pNMjg5LjQtLjZoMzgxdjE5OWgtMzgxek0tMjcuNiAzMjBoMTkwLjR2MTkwLjNILTI3LjZ6bTMxOS42IDIuMWgzNzguM3YxODguMkgyOTJ6Ii8+PHBhdGggZmlsbD0iIzAwMzg5NyIgZD0iTTE5Ni43LTI1LjRIMjYxdjUzNS43aC02NC41eiIvPjxwYXRoIGZpbGw9IiMwMDM4OTciIGQ9Ik0tMjcuNiAyMjQuOGg2OTh2NjMuNWgtNjk4eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-bw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMwMGNiZmYiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDE2MGg2NDB2MTYwSDB6Ii8+PHBhdGggZD0iTTAgMTg2aDY0MHYxMDhIMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-by {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6654c75b61fd282ea56d9948bf36be35.svg);
        }

        .flag-icon-bz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/35d13c09f6c229dcede616b30f36d33c.svg);
        }

        .flag-icon-ca {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTUwLjEzMSAwaDMzOS42NTZ2NDgwSDE1MC4xMzJ6Ii8+PHBhdGggZmlsbD0iI2Q1MmIxZSIgZD0iTS0xOS42NSAwaDE2OS43ODF2NDgwSC0xOS42NXptNTA5LjQzOCAwaDE2OS43OHY0ODBINDg5Ljg4MnptLTI4OC43NSAyMzEuOTM4bC0xMy4zMTMgNC41IDYxLjQwNiA1My45MDZjNC42ODggMTMuNzgxLTEuNTkzIDE3LjgxMi01LjYyNSAyNS4xMjVsNjYuNTYzLTguNDM4LTEuNTk0IDY3LjAzMSAxMy44NzUtLjM3NS0zLjA5NC02Ni41NjIgNjYuNzUgNy45NjljLTQuMTI1LTguNzE5LTcuNzgxLTEzLjMxMy00LjAzMS0yNy4xODhsNjEuMzEzLTUxLjA5NC0xMC42ODgtMy45MzdjLTguODEzLTYuNzUgMy43NS0zMi41MzEgNS42MjUtNDguODQ0IDAgMC0zNS43MTkgMTIuMjgxLTM4LjA2MyA1LjgxM2wtOS4xODctMTcuNTMyLTMyLjUzMSAzNS44MTNjLTMuNTYzLjg0NC01LjA2My0uNTYzLTUuOTA2LTMuNTYzbDE1LTc0LjgxMi0yMy44MTMgMTMuNDA2Yy0xLjk2OS45MzgtMy45MzguMTg4LTUuMjUtMi4xNTZsLTIyLjk2OS00NS45MzgtMjMuNjI1IDQ3LjcyYy0xLjc4MSAxLjY4Ny0zLjU2MiAxLjg3NC01LjA2Mi43NWwtMjIuNjg4LTEyLjc1IDEzLjY4OCA3NC4xNTVjLTEuMTI1IDMtMy43NSAzLjc1LTYuNzUgMi4xNTdMMjM5Ljg1IDE3MS43NWMtNC4wMzEgNi41NjItNi43NSAxNy4xNTYtMTIuMTg3IDE5LjU5NC01LjM0NCAyLjI1LTIzLjQzOC00LjUtMzUuNTMyLTcuMTI1IDQuMTI1IDE0LjkwNiAxNy4wNjMgMzkuNjU2IDguOTA3IDQ3LjgxMnoiLz48L3N2Zz4=);
        }

        .flag-icon-cc {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/faef487b62201705e1294793c61957ae.svg);
        }

        .flag-icon-cd {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDA3ZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZjdkNjE4IiBkPSJNMjguOCA5Nkg5NmwyMC44LTY3LjJMMTM3LjYgOTZoNjcuMmwtNTQuNCA0MS42IDIwLjggNjcuMi01NC40LTQxLjYtNTQuNCA0MS42IDIwLjgtNjcuMkwyOC44IDk2ek02MDAgMEwwIDM2MHYxMjBoNDBsNjAwLTM2MFYwaC00MCIvPjxwYXRoIGZpbGw9IiNjZTEwMjEiIGQ9Ik02NDAgMEwwIDM4NHY5Nkw2NDAgOTZWMCIvPjwvc3ZnPg==);
        }

        .flag-icon-cf {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTIuNCAzMmg2NDB2NDgwaC02NDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyLjQgLTMyKSI+PHBhdGggZmlsbD0iIzAwZiIgZD0iTS01MiAzMmg3MTkuM3YxMTlILTUyeiIvPjxwYXRoIGZpbGw9IiNmZjAiIGQ9Ik0tNTIgMzkxLjZoNzE5LjNWNTEySC01MnoiLz48cGF0aCBmaWxsPSIjMDA5YTAwIiBkPSJNLTUyIDI3MS4zaDcxOS4zdjEyMC4zSC01MnoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNLTUyIDE1MWg3MTkuM3YxMjAuM0gtNTJ6Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNMjQ3LjcgMzIuNWgxMTkuOVY1MTJIMjQ3Ljd6Ii8+PHBhdGggZmlsbD0iI2ZmMCIgZD0iTTk5LjMgMTM3LjdsLTMxLjUtMjEuOC0zMS4zIDIyTDQ3LjQgMTAxIDE2LjkgNzhsMzguMi0xIDEyLjUtMzYuM0w4MC4zIDc3bDM4LjEuN0w4OC4yIDEwMSIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-cg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNzkuNSAzMmg2NDB2NDgwaC02NDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3OS41IC0zMikiPjxwYXRoIGZpbGw9IiNmZjAiIGQ9Ik0tMTE5LjUgMzJoNzIwdjQ4MGgtNzIweiIvPjxwYXRoIGZpbGw9IiMwMGNhMDAiIGQ9Ik0tMTE5LjUgMzJ2NDgwbDQ4MC00ODBoLTQ4MHoiLz48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0xMjAuNSA1MTJoNDgwVjMybC00ODAgNDgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ch {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZDUyYjFlIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48ZyBmaWxsPSIjZmZmIj48cGF0aCBkPSJNMTcwIDE5NWgzMDB2OTBIMTcweiIvPjxwYXRoIGQ9Ik0yNzUgOTBoOTB2MzAwaC05MHoiLz48L2c+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ci {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMwMGNkMDAiIGQ9Ik00MjYuOCAwSDY0MHY0ODBINDI2Ljh6Ii8+PHBhdGggZmlsbD0iI2ZmOWEwMCIgZD0iTTAgMGgyMTIuOXY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjEyLjkgMGgyMTR2NDgwaC0yMTR6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ck {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/aa622429aeab5fbab401e5cd216e51a7.svg);
        }

        .flag-icon-cl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0ic2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjU2IDBoNTEydjI1NkgyNTZ6Ii8+PHBhdGggZmlsbD0iIzAwMzlhNiIgZD0iTTAgMGgyNTZ2MjU2SDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE2Ny44IDE5MS43TDEyOC4yIDE2MmwtMzkuNSAzMCAxNC43LTQ4LjhMNjQgMTEzLjFsNDguNy0uNUwxMjcuOCA2NGwxNS41IDQ4LjUgNDguNy4xLTM5LjIgMzAuNCAxNSA0OC43eiIvPjxwYXRoIGZpbGw9IiNkNTJiMWUiIGQ9Ik0wIDI1Nmg3Njh2MjU2SDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-cm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzAwN2E1ZSIgZD0iTTAgMGgyMTMuM3Y0ODBIMHoiLz48cGF0aCBmaWxsPSIjY2UxMTI2IiBkPSJNMjEzLjMgMGgyMTMuNHY0ODBIMjEzLjN6Ii8+PHBhdGggZmlsbD0iI2ZjZDExNiIgZD0iTTQyNi43IDBINjQwdjQ4MEg0MjYuN3oiLz48ZyBmaWxsPSIjZmNkMTE2IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMjAgMjQwKSBzY2FsZSg3LjExMTEpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGQ9Ik0wLThMLTIuNS0uNCAxLjMuOXoiLz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0ic2NhbGUoLTEgMSkiIHhsaW5rOmhyZWY9IiNhIi8+PC9nPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoNzIpIiB4bGluazpocmVmPSIjYiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoMTQ0KSIgeGxpbms6aHJlZj0iI2IiLz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC0xNDQpIiB4bGluazpocmVmPSIjYiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoLTcyKSIgeGxpbms6aHJlZj0iI2IiLz48L2c+PC9zdmc+);
        }

        .flag-icon-cn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PHBhdGggaWQ9ImEiIGZpbGw9IiNmZmRlMDAiIGQ9Ik0tLjYuOEwwLTEgLjYuOC0xLS4zaDJ6Ii8+PC9kZWZzPjxwYXRoIGZpbGw9IiNkZTI5MTAiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjx1c2Ugd2lkdGg9IjMwIiBoZWlnaHQ9IjIwIiB0cmFuc2Zvcm09Im1hdHJpeCg3MS45OTkxIDAgMCA3MiAxMjAgMTIwKSIgeGxpbms6aHJlZj0iI2EiLz48dXNlIHdpZHRoPSIzMCIgaGVpZ2h0PSIyMCIgdHJhbnNmb3JtPSJtYXRyaXgoLTEyLjMzNTYyIC0yMC41ODcxIDIwLjU4Njg0IC0xMi4zMzU3NyAyNDAuMyA0OCkiIHhsaW5rOmhyZWY9IiNhIi8+PHVzZSB3aWR0aD0iMzAiIGhlaWdodD0iMjAiIHRyYW5zZm9ybT0ibWF0cml4KC0zLjM4NTczIC0yMy43NTk5OCAyMy43NTk2OCAtMy4zODU3OCAyODggOTUuOCkiIHhsaW5rOmhyZWY9IiNhIi8+PHVzZSB3aWR0aD0iMzAiIGhlaWdodD0iMjAiIHRyYW5zZm9ybT0ibWF0cml4KDYuNTk5MSAtMjMuMDc0OSAyMy4wNzQ2IDYuNTk5MTkgMjg4IDE2OCkiIHhsaW5rOmhyZWY9IiNhIi8+PHVzZSB3aWR0aD0iMzAiIGhlaWdodD0iMjAiIHRyYW5zZm9ybT0ibWF0cml4KDE0Ljk5OTEgLTE4LjczNTU3IDE4LjczNTMzIDE0Ljk5OTI5IDI0MCAyMTYpIiB4bGluazpocmVmPSIjYSIvPjwvc3ZnPg==);
        }

        .flag-icon-co {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZlODAwIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAxNDhlIiBkPSJNMCAyNDBoNjQwdjI0MEgweiIvPjxwYXRoIGZpbGw9IiNkYTAwMTAiIGQ9Ik0wIDM2MGg2NDB2MTIwSDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-cr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjMDAwMGI0IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCA3NS40aDY0MHYzMjIuM0gweiIvPjxwYXRoIGZpbGw9IiNkOTAwMDAiIGQ9Ik0wIDE1Ny43aDY0MHYxNTcuN0gweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-cu {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMzIgMGg2ODIuN3Y1MTJILTMyeiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMCkgc2NhbGUoLjk0KSI+PHBhdGggZmlsbD0iIzAwNTBmMCIgZD0iTS0zMiAwaDc2OHY1MTJILTMyeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0tMzIgMTAyLjRoNzY4djEwMi40SC0zMnptMCAyMDQuOGg3Njh2MTAyLjRILTMyeiIvPjxwYXRoIGZpbGw9IiNlZDAwMDAiIGQ9Ik0tMzIgMGw0NDAuNyAyNTUuN0wtMzIgNTExVjB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE2MS44IDMyNS41TDExNC4zIDI5MGwtNDcuMiAzNS44IDE3LjYtNTguMS00Ny4yLTM2IDU4LjMtLjQgMTguMS01OCAxOC41IDU3LjggNTguMy4xLTQ2LjkgMzYuMyAxOCA1OHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-cv {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/82965eb27d97a385f656a03c60f09159.svg);
        }

        .flag-icon-cw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIj48cGF0aCBmaWxsLW9wYWNpdHk9Ii43IiBkPSJNMCAwaDY4Mi43djUxMkgweiIvPjwvY2xpcFBhdGg+PHBhdGggaWQ9ImIiIGQ9Ik0wLTFsLjIuN0gxTC4zIDBsLjIuN0wwIC40bC0uNi40LjItLjctLjUtLjRoLjd6Ii8+PC9kZWZzPjxnIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJzY2FsZSguOTQpIj48cGF0aCBmaWxsPSIjMDAyYjdmIiBkPSJNMCAwaDc2OHY1MTJIMHoiLz48cGF0aCBmaWxsPSIjZjllODE0IiBkPSJNMCAzMjBoNzY4djY0SDB6Ii8+PHVzZSB3aWR0aD0iMTM1MDAiIGhlaWdodD0iOTAwMCIgeD0iMiIgeT0iMiIgZmlsbD0iI2ZmZiIgdHJhbnNmb3JtPSJzY2FsZSg0Mi42NykiIHhsaW5rOmhyZWY9IiNiIi8+PHVzZSB3aWR0aD0iMTM1MDAiIGhlaWdodD0iOTAwMCIgeD0iMyIgeT0iMyIgZmlsbD0iI2ZmZiIgdHJhbnNmb3JtPSJzY2FsZSg1Ni45KSIgeGxpbms6aHJlZj0iI2IiLz48L2c+PC9zdmc+);
        }

        .flag-icon-cx {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/041d007bc46b36c2981a4606cd80efda.svg);
        }

        .flag-icon-cy {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b25dd09e8ea70e410415f0bcebdc78a4.svg);
        }

        .flag-icon-cz {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHYyNDBIMHoiLz48cGF0aCBmaWxsPSIjZDcxNDFhIiBkPSJNMCAyNDBoNjQwdjI0MEgweiIvPjxwYXRoIGZpbGw9IiMxMTQ1N2UiIGQ9Ik0zNjAgMjQwTDAgMHY0ODB6Ii8+PC9zdmc+);
        }

        .flag-icon-de {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZjZTAwIiBkPSJNMCAzMjBoNjQwdjE2MEgweiIvPjxwYXRoIGQ9Ik0wIDBoNjQwdjE2MEgweiIvPjxwYXRoIGZpbGw9IiNkMDAiIGQ9Ik0wIDE2MGg2NDB2MTYwSDB6Ii8+PC9zdmc+);
        }

        .flag-icon-dj {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNDAgMGg2ODIuN3Y1MTJILTQweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNy41KSBzY2FsZSguOTQpIj48cGF0aCBmaWxsPSIjMGMwIiBkPSJNLTQwIDBoNzY4djUxMkgtNDB6Ii8+PHBhdGggZmlsbD0iIzY5ZiIgZD0iTS00MCAwaDc2OHYyNTZILTQweiIvPjxwYXRoIGZpbGw9IiNmZmZlZmUiIGQ9Ik0tNDAgMGwzODIuNyAyNTUuN0wtNDAgNTExVjB6Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNMTE5LjggMjkyTDg5IDI3MGwtMzAuNyAyMi40TDY5LjcgMjU2bC0zMC42LTIyLjUgMzcuOS0uMyAxMS43LTM2LjMgMTIgMzYuMmgzNy45bC0zMC41IDIyLjcgMTEuNyAzNi40eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-dk {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjYzgxMDJlIiBkPSJNMCAwaDY0MC4xdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yMDUuNyAwaDY4LjZ2NDgwaC02OC42eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDIwNS43aDY0MC4xdjY4LjZIMHoiLz48L3N2Zz4=);
        }

        .flag-icon-dm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/34b44dfa760db5ec147b5a9ecdb410cb.svg);
        }

        .flag-icon-do {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bf385c000eaaa5b41a75def9107da4a2.svg);
        }

        .flag-icon-dz {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzIwIDBoMzIwdjQ4MEgzMjB6Ii8+PHBhdGggZmlsbD0iIzAwNjIzMyIgZD0iTTAgMGgzMjB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2QyMTAzNCIgZD0iTTQyNCAxODBhMTIwIDEyMCAwIDEgMCAwIDEyMCA5NiA5NiAwIDEgMSAwLTEyMG00IDYwbC0xMDgtMzUuMiA2Ny4yIDkyVjE4My4ybC02Ny4yIDkyeiIvPjwvc3ZnPg==);
        }

        .flag-icon-ec {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/ef033cba771949559a4afc1f1aef091f.svg);
        }

        .flag-icon-ee {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cmVjdCB3aWR0aD0iNjQwIiBoZWlnaHQ9IjQ3Ny45IiByeD0iMCIgcnk9IjAiLz48cmVjdCB3aWR0aD0iNjQwIiBoZWlnaHQ9IjE1OS4zIiB5PSIzMjAuNyIgZmlsbD0iI2ZmZiIgcng9IjAiIHJ5PSIwIi8+PHBhdGggZmlsbD0iIzEyOTFmZiIgZD0iTTAgMGg2NDB2MTU5LjNIMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-eg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/25cf81b139bcef07522cfc7f313a8d0a.svg);
        }

        .flag-icon-eh {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTU4LjcgMEg1MjR2NTEyaC02ODIuN3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQ4LjgpIHNjYWxlKC45NCkiPjxwYXRoIGQ9Ik0tMTgwIDBIODQ0djI1NkgtMTgweiIvPjxwYXRoIGZpbGw9IiMxMDdiMDAiIGQ9Ik0tMTgwIDI1Nkg4NDR2MjU2SC0xODB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0xODAgMTY5LjNIODQ0djE3Ni4xSC0xODB6Ii8+PHBhdGggZmlsbD0iI2YwZiIgZD0iTTMxMCAxOTUuNmMtNDUuMi0xOS41LTg0LjEgMjAuNi04NCA1OCAwIDM5LjIgMzggODEgODYgNjIuNS0zNC0xMC00OC0zNS4zLTQ4LTYwLjctLjMtMjUuMiAxNS44LTU0LjYgNDYtNTkuOXoiLz48cGF0aCBmaWxsPSIjZmYxODAwIiBkPSJNMzYzLjEgMjk0LjJsLTI1LjgtMTguOS0yNiAxOSAxMC0zMC41LTI2LTE4LjhoMzJsOS45LTMwLjUgOS44IDMwLjRoMzIuMWwtMjUuOSAxOC44Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNMzE0LjMgMzE1LjZhNjUuMiA2NS4yIDAgMCAxLTg5LjItNTkuNCA2NSA2NSAwIDAgMSA4OS41LTYwLjkgNjAuNiA2MC42IDAgMCAwLTUxLjIgNTkuMiA2MS4zIDYxLjMgMCAwIDAgNTEgNjEuMXpNLTE4MCAwbDM0OC42IDI1Ni42TC0xODAgNTEyVjB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-er {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6eb9a20b2808c64cd978b2caae550d66.svg);
        }

        .flag-icon-es {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/126515de88401317a0c0fa01d2f9d77d.svg);
        }

        .flag-icon-et {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/db96e890ff220a37ef96c3fd9b139345.svg);
        }

        .flag-icon-fi {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAzNTgwIiBkPSJNMCAxNzQuNWg2NDB2MTMxSDB6Ii8+PHBhdGggZmlsbD0iIzAwMzU4MCIgZD0iTTE3NS41IDBoMTMwLjl2NDgwaC0xMzF6Ii8+PC9zdmc+);
        }

        .flag-icon-fj {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4cff743daafc42204fd0dba1878eefaa.svg);
        }

        .flag-icon-fk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/33016ea2bc6652b710cd8c0295b5c49a.svg);
        }

        .flag-icon-fm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODEuMyAwaDY4Mi42djUxMkgtODEuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0IiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDc2LjMpIHNjYWxlKC45NCkiPjxwYXRoIGZpbGw9IiM2Nzk3ZDYiIGQ9Ik0tMjUyIDBINzcydjUxMkgtMjUyeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNTkuOCAxMjNsLTMyLjQgMjIuMiAxMi40LTM1LjktMzIuNS0yMi4yaDQwLjFsMTIuNC0zNS45IDEyLjQgMzZoNDBsLTMyLjQgMjIuMSAxMi40IDM1LjlNMjU5LjggMzkwbC0zMi40LTIyLjIgMTIuNCAzNi0zMi41IDIyLjFoNDAuMWwxMi40IDM1LjkgMTIuNC0zNiA0MCAuMS0zMi40LTIyLjIgMTIuNC0zNS45bS0xODguNC05Mi40TDc5LjMgMzA2bDEuNC0zOC0zNy41LTExLjcgMzguNC0xMS43IDEuMy0zOCAyMi4zIDMwLjggMzguNC0xMS44LTI0LjYgMzAuNyAyMi40IDMwLjdtMjc0LjItMTEuN2wyNC42IDMwLjctMS40LTM4IDM3LjUtMTEuNy0zOC40LTExLjctMS4zLTM4LTIyLjMgMzAuOC0zOC40LTExLjggMjQuNiAzMC43LTIyLjQgMzAuNyIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-fo {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNzggMzJoNjQwdjQ4MEgtNzh6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjAiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzggLTMyKSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS03OCAzMmg2NjMuOXY0ODBILTc4eiIvPjxwYXRoIGZpbGw9IiMwMDM4OTciIGQ9Ik0tNzYgMjE4LjdoMTg1LjlWMzJIMjE2djE4Ni43aDM3MS44djEwNi42SDIxNlY1MTJIMTA5LjlWMzI1LjNoLTE4NlYyMTguN3oiLz48cGF0aCBmaWxsPSIjZDcyODI4IiBkPSJNLTc2IDI0NS4zaDIxMi40VjMyaDUzLjF2MjEzLjNINTg4djUzLjRIMTg5LjVWNTEyaC01M1YyOTguN0gtNzZ2LTUzLjR6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-fr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ga {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmU3MDAiIGQ9Ik02NDAgNDgwSDBWMGg2NDB6Ii8+PHBhdGggZmlsbD0iIzM2YTEwMCIgZD0iTTY0MCAxNjBIMFYwaDY0MHoiLz48cGF0aCBmaWxsPSIjMDA2ZGJjIiBkPSJNNjQwIDQ4MEgwVjMyMGg2NDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-gb {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDEyMTY5IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjRkZGIiBkPSJNNzUgMGwyNDQgMTgxTDU2MiAwaDc4djYyTDQwMCAyNDFsMjQwIDE3OHY2MWgtODBMMzIwIDMwMSA4MSA0ODBIMHYtNjBsMjM5LTE3OEwwIDY0VjBoNzV6Ii8+PHBhdGggZmlsbD0iI0M4MTAyRSIgZD0iTTQyNCAyODFsMjE2IDE1OXY0MEwzNjkgMjgxaDU1em0tMTg0IDIwbDYgMzVMNTQgNDgwSDBsMjQwLTE3OXpNNjQwIDB2M0wzOTEgMTkxbDItNDRMNTkwIDBoNTB6TTAgMGwyMzkgMTc2aC02MEwwIDQyVjB6Ii8+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTI0MSAwdjQ4MGgxNjBWMEgyNDF6TTAgMTYwdjE2MGg2NDBWMTYwSDB6Ii8+PHBhdGggZmlsbD0iI0M4MTAyRSIgZD0iTTAgMTkzdjk2aDY0MHYtOTZIMHpNMjczIDB2NDgwaDk2VjBoLTk2eiIvPjwvc3ZnPg==);
        }

        .flag-icon-gd {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f1ac468df3e1ada6eeeaaf0fe40d5018.svg);
        }

        .flag-icon-ge {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/95910e6a6566e703fd4bb77651d77f85.svg);
        }

        .flag-icon-gf {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-gg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2U4MTEyZCIgZD0iTTI1NiAwaDEyOHY0ODBIMjU2eiIvPjxwYXRoIGZpbGw9IiNlODExMmQiIGQ9Ik0wIDE3Nmg2NDB2MTI4SDB6Ii8+PHBhdGggaWQ9ImEiIGZpbGw9IiNmOWRkMTYiIGQ9Ik0xMTAgMjg2LjdsMjMuMy0yMy40aDIxMHYtNDYuNmgtMjEwTDExMCAxOTMuM3oiLz48dXNlIHdpZHRoPSIzNiIgaGVpZ2h0PSIyNCIgdHJhbnNmb3JtPSJyb3RhdGUoOTAgMzIwIDI0MCkiIHhsaW5rOmhyZWY9IiNhIi8+PHVzZSB3aWR0aD0iMzYiIGhlaWdodD0iMjQiIHRyYW5zZm9ybT0icm90YXRlKC05MCAzMjAgMjQwKSIgeGxpbms6aHJlZj0iI2EiLz48dXNlIHdpZHRoPSIzNiIgaGVpZ2h0PSIyNCIgdHJhbnNmb3JtPSJyb3RhdGUoMTgwIDMyMCAyNDApIiB4bGluazpocmVmPSIjYSIvPjwvc3ZnPg==);
        }

        .flag-icon-gh {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDA2YjNmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmNkMTE2IiBkPSJNMCAwaDY0MHYzMjBIMHoiLz48cGF0aCBmaWxsPSIjY2UxMTI2IiBkPSJNMCAwaDY0MHYxNjBIMHoiLz48cGF0aCBkPSJNMzIwIDE2MGw1MiAxNjAtMTM2LjEtOTguOUg0MDRMMjY4IDMyMHoiLz48L3N2Zz4=);
        }

        .flag-icon-gi {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bdd6d16a6a1c1abe9acf49e243d0ce21.svg);
        }

        .flag-icon-gl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZDAwYzMzIiBkPSJNMCAyNDBoNjQwdjI0MEgwem04MCAwYTE2MCAxNjAgMCAxIDAgMzIwIDAgMTYwIDE2MCAwIDAgMC0zMjAgMCIvPjwvc3ZnPg==);
        }

        .flag-icon-gm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wLTQ4aDY0MHY0ODBIMHoiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0IiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgNDgpIj48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0wLTEyOGg2NDBWODUuM0gweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDg1LjNoNjQwVjEyMUgweiIvPjxwYXRoIGZpbGw9IiMwMDkiIGQ9Ik0wIDEyMC45aDY0MFYyNjNIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAyNjMuMWg2NDB2MzUuNkgweiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik0wIDI5OC43aDY0MFY1MTJIMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-gn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0wIDBoMjEzLjN2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmMCIgZD0iTTIxMy4zIDBoMjEzLjR2NDgwSDIxMy4zeiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-gp {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-gq {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a8d1335b163599e171b9222966f30421.svg);
        }

        .flag-icon-gr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDA1YmFlIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDBoNjQwdjUzLjNIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDUzLjNoNjQwdjUzLjRIMHoiLz48cGF0aCBmaWxsPSIjMDA1YmFlIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDEwNi43aDY0MFYxNjBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDE2MGg2NDB2NTMuM0gweiIvPjxwYXRoIGZpbGw9IiMwMDViYWUiIGQ9Ik0wIDBoMjY2Ljd2MjY2LjdIMHoiLz48cGF0aCBmaWxsPSIjMDA1YmFlIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDIxMy4zaDY0MHY1My40SDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMCAyNjYuN2g2NDBWMzIwSDB6Ii8+PHBhdGggZmlsbD0iIzAwNWJhZSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMCAzMjBoNjQwdjUzLjNIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDM3My4zaDY0MHY1My40SDB6Ii8+PGcgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjEuMyI+PHBhdGggZD0iTTEwNi42NjcgMEgxNjB2MjY2LjY2NmgtNTMuMzMzeiIvPjxwYXRoIGQ9Ik0wIDEwNi42NjdoMjY2LjY2NlYxNjBIMHoiLz48L2c+PHBhdGggZmlsbD0iIzAwNWJhZSIgZD0iTTAgNDI2LjdoNjQwVjQ4MEgweiIvPjwvc3ZnPg==);
        }

        .flag-icon-gs {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/ae1f146b0bc4e7755451d97bb0f71637.svg);
        }

        .flag-icon-gt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/62694385afdd35c88849c2c100b3c662.svg);
        }

        .flag-icon-gu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1fa3f4328baa43a6c3fbc40eddff351f.svg);
        }

        .flag-icon-gw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2NlMTEyNiIgZD0iTTAgMGgyMjB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZjZDExNiIgZD0iTTIyMCAwaDQyMHYyNDBIMjIweiIvPjxwYXRoIGZpbGw9IiMwMDllNDkiIGQ9Ik0yMjAgMjQwaDQyMHYyNDBIMjIweiIvPjxnIGlkPSJiIiB0cmFuc2Zvcm09Im1hdHJpeCg4MCAwIDAgODAgMTEwIDI0MCkiPjxwYXRoIGlkPSJhIiBkPSJNMC0xdjFoLjUiIHRyYW5zZm9ybT0icm90YXRlKDE4IDAgLTEpIi8+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InNjYWxlKC0xIDEpIiB4bGluazpocmVmPSIjYSIvPjwvZz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDcyIDExMCAyNDApIiB4bGluazpocmVmPSIjYiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoMTQ0IDExMCAyNDApIiB4bGluazpocmVmPSIjYiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoLTE0NCAxMTAgMjQwKSIgeGxpbms6aHJlZj0iI2IiLz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC03MiAxMTAgMjQwKSIgeGxpbms6aHJlZj0iI2IiLz48L3N2Zz4=);
        }

        .flag-icon-gy {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMzOTk0MDgiIGQ9Ik0yLjQgMEg2NDB2NDgwSDIuNHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNLjIgMGMtLjkgMCA2MTkuNiAyNDEuNSA2MTkuNiAyNDEuNUwwIDQ3OS44LjIgMHoiLz48cGF0aCBmaWxsPSIjZmZkZTA4IiBkPSJNLjMgMjAuMmMzLjQgMCA1NTkgMjE3LjkgNTU1LjkgMjIwTDEuOSA0NjMuMi4zIDIwLjN6Ii8+PHBhdGggZD0iTTEuOS44YzEuOCAwIDI5MC45IDI0MC45IDI5MC45IDI0MC45TDEuOCA0NzdWLjh6Ii8+PHBhdGggZmlsbD0iI2RlMjExMCIgZD0iTS4zIDMzLjljMS42LTE1IDI2MC45IDIwOC40IDI2MC45IDIwOC40TC4yIDQ1MS43VjMzLjl6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-hk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a63e23787f2e3a2d62fd63b8f32d0b01.svg);
        }

        .flag-icon-hm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/7f92cc20fb9efead53675c4ee9e0ae9f.svg);
        }

        .flag-icon-hn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/7a5623851a8d4da7f102c9f863cff4c1.svg);
        }

        .flag-icon-hr {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e5d6412d49a134e767add222c9176c72.svg);
        }

        .flag-icon-ht {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/53f06efc5c740ec1a329674a45cdc9e6.svg);
        }

        .flag-icon-hu {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02NDAgNDgwSDBWMGg2NDB6Ii8+PHBhdGggZmlsbD0iIzM4OGQwMCIgZD0iTTY0MCA0ODBIMFYzMjBoNjQweiIvPjxwYXRoIGZpbGw9IiNkNDM1MTYiIGQ9Ik02NDAgMTYwLjFIMFYuMWg2NDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-id {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZTcwMDExIiBkPSJNMCAwaDY0MHYyNDlIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAyNDBoNjQwdjI0MEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ie {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA5QTQ5IiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNGRjc5MDAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-il {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODcuNiAwSDU5NXY1MTJILTg3LjZ6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgyLjEpIHNjYWxlKC45NCkiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02MTkuNCA1MTJILTExMlYwaDczMS40eiIvPjxwYXRoIGZpbGw9IiMwMGMiIGQ9Ik02MTkuNCAxMTUuMkgtMTEyVjQ4aDczMS40em0wIDM1MC41SC0xMTJ2LTY3LjJoNzMxLjR6bS00ODMtMjc1bDExMC4xIDE5MS42TDM1OSAxOTEuNmwtMjIyLjYtLjh6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTIyNS44IDMxNy44bDIwLjkgMzUuNSAyMS40LTM1LjMtNDIuNC0uMnoiLz48cGF0aCBmaWxsPSIjMDBjIiBkPSJNMTM2IDMyMC42TDI0Ni4yIDEyOWwxMTIuNCAxOTAuOC0yMjIuNi44eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yMjUuOCAxOTEuNmwyMC45LTM1LjUgMjEuNCAzNS40LTQyLjQuMXpNMTgyIDI3MS4xbC0yMS43IDM2IDQxLS4xLTE5LjMtMzZ6bS0yMS4zLTY2LjVsNDEuMi4zLTE5LjggMzYuMy0yMS40LTM2LjZ6bTE1MS4yIDY3bDIwLjkgMzUuNS00MS43LS41IDIwLjgtMzV6bTIwLjUtNjdsLTQxLjIuMyAxOS44IDM2LjMgMjEuNC0zNi42em0tMTE0LjMgMEwxODkuNyAyNTZsMjguOCA1MC4zIDUyLjggMS4yIDMyLTUxLjUtMjkuNi01Mi01NS42LjV6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-im {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/540840ada0149392fd119e4116f5c083.svg);
        }

        .flag-icon-in {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iI2Y5MyIgZD0iTTAgMGg2NDB2MTYwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTYwaDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjMTI4ODA3IiBkPSJNMCAzMjBoNjQwdjE2MEgweiIvPjxnIHRyYW5zZm9ybT0ibWF0cml4KDMuMiAwIDAgMy4yIDMyMCAyNDApIj48Y2lyY2xlIHI9IjIwIiBmaWxsPSIjMDA4Ii8+PGNpcmNsZSByPSIxNy41IiBmaWxsPSIjZmZmIi8+PGNpcmNsZSByPSIzLjUiIGZpbGw9IiMwMDgiLz48ZyBpZD0iZCI+PGcgaWQ9ImMiPjxnIGlkPSJiIj48ZyBpZD0iYSIgZmlsbD0iIzAwOCI+PGNpcmNsZSByPSIuOSIgdHJhbnNmb3JtPSJyb3RhdGUoNy41IC04LjggMTMzLjUpIi8+PHBhdGggZD0iTTAgMTcuNUwuNiA3IDAgMmwtLjYgNUwwIDE3LjV6Ii8+PC9nPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoMTUpIiB4bGluazpocmVmPSIjYSIvPjwvZz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKDMwKSIgeGxpbms6aHJlZj0iI2IiLz48L2c+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSg2MCkiIHhsaW5rOmhyZWY9IiNjIi8+PC9nPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoMTIwKSIgeGxpbms6aHJlZj0iI2QiLz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHRyYW5zZm9ybT0icm90YXRlKC0xMjApIiB4bGluazpocmVmPSIjZCIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-io {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4cd4d1aff0ae2d56c47a991c76246b1f.svg);
        }

        .flag-icon-iq {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/136ba5c7a49c3bf235f3e5070d2ba082.svg);
        }

        .flag-icon-ir {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/790efa4ad1432b2fd13ca1eecabc083d.svg);
        }

        .flag-icon-is {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLXdpZHRoPSIwIiBjbGlwLXBhdGg9InVybCgjYSkiPjxwYXRoIGZpbGw9IiMwMDM4OTciIGQ9Ik0wIDBoNjY2Ljd2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTg2LjdoMTg2LjdWMGgxMDYuNnYxODYuN2gzNzMuNHYxMDYuNkgyOTMuM1Y0ODBIMTg2LjdWMjkzLjNIMFYxODYuN3oiLz48cGF0aCBmaWxsPSIjZDcyODI4IiBkPSJNMCAyMTMuM2gyMTMuM1YwaDUzLjR2MjEzLjNoNDAwdjUzLjRoLTQwMFY0ODBoLTUzLjRWMjY2LjdIMHYtNTMuNHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-it {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA5MjQ2IiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNjZTJiMzciIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-je {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d192b520a733c1b3d324ade20ebeb738.svg);
        }

        .flag-icon-jm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0wIDBsMzIwIDI0MEwwIDQ4MHptNjQwIDBMMzIwIDI0MGwzMjAgMjQweiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik0wIDBsMzIwIDI0MEw2NDAgMHptMCA0ODBsMzIwLTI0MCAzMjAgMjQweiIvPjxwYXRoIGZpbGw9IiNmYzAiIGQ9Ik02NDAgMGgtNTkuNkwwIDQzNS4zVjQ4MGg1OS42TDY0MCA0NC43eiIvPjxwYXRoIGZpbGw9IiNmYzAiIGQ9Ik0wIDB2NDQuN0w1ODAuNCA0ODBINjQwdi00NC43TDU5LjYgMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-jo {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTE3LjggMGg2ODIuNnY1MTJoLTY4Mi42eiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEwLjUpIHNjYWxlKC45Mzc1KSI+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCI+PHBhdGggZD0iTS0xMTcuOCAwaDEwMjR2MTcwLjdoLTEwMjR6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTS0xMTcuOCAxNzAuN2gxMDI0djE3MC42aC0xMDI0eiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik0tMTE3LjggMzQxLjNoMTAyNFY1MTJoLTEwMjR6Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNLTExNy44IDUxMmw1MTItMjU2LTUxMi0yNTZ2NTEyeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNC41IDI4OWw1LjctMjQuOUg0LjdsMjMtMTEtMTUuOS0xOS45IDIzIDExIDUuNi0yNC44IDUuNyAyNC45TDY5IDIzMy4ybC0xNiAxOS45IDIzIDExSDUwLjZsNS43IDI0LjktMTUuOS0yMHoiLz48L2c+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-jp {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODggMzJoNjQwdjQ4MEgtODh6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4OCAtMzIpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNLTEyOCAzMmg3MjB2NDgwaC03MjB6Ii8+PGNpcmNsZSBjeD0iNTIzLjEiIGN5PSIzNDQuMSIgcj0iMTk0LjkiIGZpbGw9IiNkMzAwMDAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNjguNCA4LjYpIHNjYWxlKC43NjU1NCkiLz48L2c+PC9zdmc+);
        }

        .flag-icon-ke {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/ca964b0e81ec973292d6ec49696e0ee4.svg);
        }

        .flag-icon-kg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bcffe21ed2b58341eeb5f2a1cdda2e6a.svg);
        }

        .flag-icon-kh {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/db30b90c7da994fc922e4a6f253c4198.svg);
        }

        .flag-icon-ki {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/2546fc407fde7ed7d3797de1fd77d2c0.svg);
        }

        .flag-icon-km {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0ic2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjZmYwIiBkPSJNMCAwaDc2OC44djEyOEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDEyOGg3NjguOHYxMjhIMHoiLz48cGF0aCBmaWxsPSIjYmUwMDI3IiBkPSJNMCAyNTZoNzY4Ljh2MTI4SDB6Ii8+PHBhdGggZmlsbD0iIzNiNWFhMyIgZD0iTTAgMzg0aDc2OC44djEyOEgweiIvPjxwYXRoIGZpbGw9IiMyMzllNDYiIGQ9Ik0wIDB2NTEybDM4MS45LTI1NS4zTDAgMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTU3LjIgMTQxLjRjLTg1LTQuMy0xMjMuOSA2My41LTEyMy44IDExNS45LS4yIDYyIDU4LjYgMTEzIDExMi44IDExMEMxMTcgMzUzLjUgODEuMiAzMTQuNiA4MSAyNTdjLS4zLTUyLjEgMjkuNS05Ny41IDc2LjMtMTE1LjZ6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE1NiAxOTdsLTEyLTkuMy0xNC42IDQuNiA1LjItMTQuNC04LjgtMTIuNCAxNS4yLjYgOS0xMi4zIDQuMyAxNC43IDE0LjQgNC44LTEyLjYgOC41em0tLjMgNTIuMWwtMTItOS40LTE0LjYgNC42IDUuMy0xNC4zLTguOS0xMi40IDE1LjMuNSA5LTEyLjIgNC4yIDE0LjYgMTQuNSA0LjktMTIuNyA4LjV6bS4yIDUyLjZsLTEyLTkuNC0xNC41IDQuNiA1LjItMTQuMy04LjgtMTIuNCAxNS4yLjUgOS0xMi4yIDQuMyAxNC42IDE0LjQgNC44LTEyLjYgOC42em0tLjIgNTNsLTEyLTkuM0wxMjkgMzUwbDUuMy0xNC40LTguOS0xMi40IDE1LjMuNiA5LTEyLjMgNC4yIDE0LjcgMTQuNSA0LjgtMTIuNyA4LjV6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-kn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODAuMSAwaDY4Mi43djUxMkgtODAuMXoiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzUuMSkgc2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjZmZlOTAwIiBkPSJNLTEwNy44LjJoNzM3LjZ2NTExLjNoLTczNy42eiIvPjxwYXRoIGZpbGw9IiMzNWExMDAiIGQ9Ik0tMTA4LjIuMmwuOCAzNjguNkw0NjYuNiAwbC01NzQuOC4yeiIvPjxwYXRoIGZpbGw9IiNjNzAwMDAiIGQ9Ik02MzAuNyA1MTEuNWwtMS40LTM4My4yLTU3OSAzODMuNSA1ODAuNC0uM3oiLz48cGF0aCBkPSJNLTEwNy45IDM5Ni42bC41IDExNS40IDEyNS4zLS4yIDYxMS43LTQxMC4xTDYyOSAxLjQgNTA1LjIuMmwtNjEzIDM5Ni40eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zODAuNCAxNTYuNmwtOS44LTQyLjIgMzMuMyAyNyAzOC0yNC42LTE3LjQgNDEuMyAzMy40IDI3LTQ0LjItMS41LTE3LjMgNDEuMy05LjktNDIuMi00NC4xLTEuNXptLTI3NS4yIDE3OWwtOS45LTQyLjMgMzMuMyAyNyAzOC0yNC42LTE3LjQgNDEuMyAzMy40IDI3LTQ0LjEtMS41LTE3LjQgNDEuMy05LjgtNDIuMi00NC4xLTEuNXoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-kp {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik01IC4xaDY4Mi42VjUxMkg1LjF6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00LjggLS4xKSBzY2FsZSguOTM3NjgpIj48cGF0aCBmaWxsPSIjZmZmIiBzdHJva2U9IiMwMDAiIGQ9Ik03NzYgNTExLjVILTc2Vi41aDg1MnoiLz48cGF0aCBmaWxsPSIjM2U1Njk4IiBkPSJNNzc2IDQxOUgtNzZ2OTIuNWg4NTJ6Ii8+PHBhdGggZmlsbD0iI2M2MDAwMCIgZD0iTTc3NiAzOTcuNkgtNzZWMTE0LjRoODUyeiIvPjxwYXRoIGZpbGw9IiMzZTU2OTgiIGQ9Ik03NzYgLjZILTc2VjkzaDg1MnoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzI4LjUgMjU2YzAgNjMuNS01MyAxMTUtMTE4LjYgMTE1UzkxLjMgMzE5LjUgOTEuMyAyNTZzNTMtMTE0LjggMTE4LjYtMTE0LjhjNjUuNSAwIDExOC42IDUxLjQgMTE4LjYgMTE0Ljl6Ii8+PHBhdGggZmlsbD0iI2M0MDAwMCIgZD0iTTE3NS44IDI3MC42bC01Ny00MC43IDcxLS4yIDIyLjctNjYuNCAyMS4xIDY2LjEgNzEtLjQtNTcuOSA0MS4yIDIxLjMgNjYuMS01Ny00MC43LTU4IDQxLjN6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-kr {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/971df6e0801118e368e3c5135d4e8f87.svg);
        }

        .flag-icon-kw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTcwLjZoMTAyNHYxNzAuN0gweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik0wIDM0MS4zaDEwMjRWNTEySDB6Ii8+PHBhdGggZmlsbD0iIzAwZDk0MSIgZD0iTTAgMGgxMDI0djE3MC43SDB6Ii8+PHBhdGggZD0iTTAgMHY1MTJsMjU1LjQtMTcwLjcuNi0xNzAuOEwwIDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ky {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/8bd6c530f71439efd8483507652f5314.svg);
        }

        .flag-icon-kz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b81602b504840f094a94fa30ebfbde86.svg);
        }

        .flag-icon-la {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBmaWxsPSIjY2UxMTI2IiBkPSJNLTQwIDBoNzIwdjQ4MEgtNDB6Ii8+PHBhdGggZmlsbD0iIzAwMjg2OCIgZD0iTS00MCAxMTkuM2g3MjB2MjQxLjRILTQweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik00MjMuNCAyNDBhMTAzLjQgMTAzLjQgMCAxIDEtMjA2LjggMCAxMDMuNCAxMDMuNCAwIDEgMSAyMDYuOCAweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-lb {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a5c08f7ddaba74e662aedddfcf637378.svg);
        }

        .flag-icon-lc {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiM2NWNmZmYiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMTguOSA0MmwxNjIuNyAzOTUuMy0zMjIuNi45TDMxOC45IDQyeiIvPjxwYXRoIGQ9Ik0zMTkgOTYuNWwxNDAuOCAzNDAtMjc5IC44TDMxOSA5Ni41eiIvPjxwYXRoIGZpbGw9IiNmZmNlMDAiIGQ9Ik0zMTguOSAyNDAuMWwxNjIuNyAxOTcuNi0zMjIuNi41IDE1OS45LTE5OC4xeiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-li {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6bb5f83bcf623e33497bfa5b027e0691.svg);
        }

        .flag-icon-lk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/3be35822641288efe16e111a1e4e4908.svg);
        }

        .flag-icon-lr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0ic2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDc2Ny45djUxMkgweiIvPjxwYXRoIGZpbGw9IiMwMDYiIGQ9Ik0wIDBoMjMyLjd2MjMyLjhIMHoiLz48cGF0aCBmaWxsPSIjYzAwIiBkPSJNMCA0NjQuOWg3NjcuOVY1MTJIMHoiLz48cGF0aCBmaWxsPSIjYzAwIiBkPSJNMCA0NjUuNGg3NjcuOVY1MTJIMHptMC05Mi45aDc2Ny45djQ2LjJIMHptMC05My4yaDc2NlYzMjZIMHpNMjMyLjcgMGg1MzUuMXY0Ni41SDIzMi43em0wIDE4Nmg1MzUuMXY0Ni44SDIzMi43em0wLTkyLjdoNTM1LjF2NDYuNUgyMzIuN3oiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTY2LjMgMTc3LjVsLTUwLjctMzEtNTAuNCAzMS4zIDE4LjctNTAuOS01MC4zLTMxLjQgNjIuMy0uNCAxOS4zLTUwLjdMMTM1IDk1aDYyLjNsLTUwLjEgMzEuNyAxOS4xIDUwLjh6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ls {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5f21d12d37421277a57d73f0a2f267b4.svg);
        }

        .flag-icon-lt {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0IiB0cmFuc2Zvcm09InNjYWxlKC42NDE0MyAuOTY3NzMpIj48cmVjdCB3aWR0aD0iMTA2MyIgaGVpZ2h0PSI3MDguNyIgZmlsbD0iIzAwNmE0NCIgcng9IjAiIHJ5PSIwIiB0cmFuc2Zvcm09InNjYWxlKC45Mzg2NSAuNjk2ODYpIi8+PHJlY3Qgd2lkdGg9IjEwNjMiIGhlaWdodD0iMjM2LjIiIHk9IjQ3NS42IiBmaWxsPSIjYzEyNzJkIiByeD0iMCIgcnk9IjAiIHRyYW5zZm9ybT0ic2NhbGUoLjkzODY1IC42OTY4NikiLz48cGF0aCBmaWxsPSIjZmRiOTEzIiBkPSJNMCAwaDk5Ny44djE2NC42SDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-lu {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDBhMWRlIiBkPSJNMCAyNDBoNjQwdjI0MEgweiIvPjxwYXRoIGZpbGw9IiNlZDI5MzkiIGQ9Ik0wIDBoNjQwdjI0MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDE2MGg2NDB2MTYwSDB6Ii8+PC9zdmc+);
        }

        .flag-icon-lv {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiM5ODFlMzIiIGQ9Ik0wIDBoNjQwdjE5Mkgwem0wIDI4OGg2NDB2MTkySDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ly {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGQ9Ik0xNjYuNy0yMGg2NjYuNnY1MDBIMTY2Ljd6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCguOTYgMCAwIC45NiAtMTYwIDE5LjIpIj48cGF0aCBmaWxsPSIjMjM5ZTQ2IiBkPSJNMC0yMGgxMDAwdjUwMEgweiIvPjxwYXRoIGQ9Ik0wLTIwaDEwMDB2Mzc1SDB6Ii8+PHBhdGggZmlsbD0iI2U3MDAxMyIgZD0iTTAtMjBoMTAwMHYxMjVIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNTQ0LjIgMTg1LjhhNTQuMyA1NC4zIDAgMSAwIDAgODguNCA2Mi41IDYyLjUgMCAxIDEgMC04OC40TTUzMC40IDIzMGw4NC4xLTI3LjMtNTIgNzEuNXYtODguNGw1MiA3MS41eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ma {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjYzEyNzJkIiBkPSJNNjQwIDBIMHY0ODBoNjQweiIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwNjIzMyIgc3Ryb2tlLXdpZHRoPSIxMS43IiBkPSJNMzIwIDE3OS40TDI4NC40IDI4OWw5My4yLTY3LjZIMjYyLjRsOTMuMiA2Ny42eiIvPjwvc3ZnPg==);
        }

        .flag-icon-mc {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZjMxODMwIiBkPSJNMCAwaDY0MHYyNDBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAyNDBoNjQwdjI0MEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-md {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5858cdc592de2290a5e51f452b40ecf1.svg);
        }

        .flag-icon-me {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4515b297b58ec145b4ca7777284114dd.svg);
        }

        .flag-icon-mf {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-mg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmYzMzE5IiBkPSJNMjEzLjMgMEg2NDB2MjQwSDIxMy4zeiIvPjxwYXRoIGZpbGw9IiMwMGNjMjgiIGQ9Ik0yMTMuMyAyNDBINjQwdjI0MEgyMTMuM3oiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-mh {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMzYjVhYTMiIGQ9Ik0wIDBoNjM5Ljl2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2UyYWU1NyIgZD0iTTAgNDY3TDYzOS45IDB2ODdMMCA0ODB2LTEzeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yMi40IDQ4MEw2NDAgMTc5LjJsLS4xLTk1LjVMMCA0ODBoMjIuNHptMTUzLTQ2NC44TDE2OSAxMThsLTI3LTY1LjYgMTAuNCA2OS44LTQxLjktNTYuNCAyNy41IDY0LjMtNTUtNDIuNiA0Mi44IDUzLjYtNjIuMS0yNy42IDU0LjQgNDEuMi02Ny43LTkgNjQgMjUuNEwxNCAxODAuM2wxMDAuNiA2LjctNjMuNyAyNi4yIDY3LTktNTQuMyA0MCA2My0yNy42LTQzIDU0IDU0LjYtNDEuMy0yNyA2Mi45IDQzLjYtNTQuNy0xMS44IDY4LjEgMjcuNS02My43IDYuMiAxMDAuNyA5LjctMTAwLjQgMjMuNyA2NC05LTY5IDQzLjQgNTQuOC0yOC42LTY0IDU0LjYgNDQtNDMuNC01NC45IDY0LjkgMjctNTcuNC00MS45IDY5LjkgMTEuOC02Ny0yNS43IDEwNC4xLTYuNS0xMDQtOS43IDY4LjUtMjIuOC03MSA5IDU4LjYtNDEtNjYgMjYuNSA0NS42LTU1LjMtNTUuNiA0My40IDI2LjctNjYuNC00My4xIDU2LjQgOS4zLTcwLjQtMjUuNyA2Ni41LTkuNi0xMDIuOHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-mk {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZDIwMDAwIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZlNjAwIiBkPSJNMCAwaDk2bDIyNCAyMzEuNEw1NDQgMGg5NkwwIDQ4MGg5NmwyMjQtMjMxLjRMNTQ0IDQ4MGg5NnptNjQwIDE5MnY5NkwwIDE5MnY5NnpNMjgwIDBsNDAgMjA1LjdMMzYwIDB6bTAgNDgwbDQwLTIwNS43TDM2MCA0ODB6Ii8+PGNpcmNsZSBjeD0iMzIwIiBjeT0iMjQwIiByPSI3Ny4xIiBmaWxsPSIjZmZlNjAwIiBzdHJva2U9IiNkMjAwMDAiIHN0cm9rZS13aWR0aD0iMTcuMSIvPjwvc3ZnPg==);
        }

        .flag-icon-ml {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9InJlZCIgZD0iTTQyNS44IDBINjQwdjQ4MEg0MjUuN3oiLz48cGF0aCBmaWxsPSIjMDA5YTAwIiBkPSJNMCAwaDIxMi45djQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZjAiIGQ9Ik0yMTIuOSAwaDIxNHY0ODBoLTIxNHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-mm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PGRlZnM+PHBhdGggaWQ9ImEiIGZpbGw9IiNmZmYiIGQ9Ik0wLS41bC4yLjVoLS40eiIgdHJhbnNmb3JtPSJzY2FsZSg4Ljg0NCkiLz48ZyBpZD0iYiI+PHVzZSB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIHRyYW5zZm9ybT0icm90YXRlKC0xNDQpIiB4bGluazpocmVmPSIjYSIvPjx1c2Ugd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB0cmFuc2Zvcm09InJvdGF0ZSgtNzIpIiB4bGluazpocmVmPSIjYSIvPjx1c2Ugd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB4bGluazpocmVmPSIjYSIvPjx1c2Ugd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB0cmFuc2Zvcm09InJvdGF0ZSg3MikiIHhsaW5rOmhyZWY9IiNhIi8+PHVzZSB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIHRyYW5zZm9ybT0icm90YXRlKDE0NCkiIHhsaW5rOmhyZWY9IiNhIi8+PC9nPjwvZGVmcz48cGF0aCBmaWxsPSIjZmVjYjAwIiBkPSJNMC0uMWg2NDBWMTYwSDB6Ii8+PHBhdGggZmlsbD0iI2VhMjgzOSIgZD0iTTAgMzIwaDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjMzRiMjMzIiBkPSJNMCAxNjBoNjQwdjE2MEgweiIvPjx1c2Ugd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiB4PSI5IiB5PSI2LjQiIHRyYW5zZm9ybT0ibWF0cml4KDQwIDAgMCA0MCAtNDAgMCkiIHhsaW5rOmhyZWY9IiNiIi8+PC9zdmc+);
        }

        .flag-icon-mn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/481e43858c861b0d2334df762061038e.svg);
        }

        .flag-icon-mo {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d62988474d89d0cd8b1c236b53543d8c.svg);
        }

        .flag-icon-mp {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/0665925927a6d7bf4a432616255a4cda.svg);
        }

        .flag-icon-mq {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-mr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjY2QyYTNlIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA2MjMzIiBkPSJNMCA3Mmg2NDB2MzM2SDB6Ii8+PHBhdGggZmlsbD0iI2ZmYzQwMCIgZD0iTTQ3MCAxNTQuNmExNTAgMTUwIDAgMCAxLTMwMCAwIDE1NC45IDE1NC45IDAgMCAwLTUgMzkuMiAxNTUgMTU1IDAgMSAwIDMxMCAwIDE1NC40IDE1NC40IDAgMCAwLTUtMzkuMnoiIGNsYXNzPSJzdDEiLz48cGF0aCBmaWxsPSIjZmZjNDAwIiBkPSJNMzIwIDkzLjhsLTEzLjUgNDEuNUgyNjNsMzUuMyAyNS42LTEzLjUgNDEuNCAzNS4zLTI1LjYgMzUuMyAyNS42LTEzLjUtNDEuNCAzNS4zLTI1LjZoLTQzLjZ6Ii8+PC9zdmc+);
        }

        .flag-icon-ms {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/88d417de1054e8271fd5a337d6821169.svg);
        }

        .flag-icon-mt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/eb4857203293b45656bd985e24ae787c.svg);
        }

        .flag-icon-mu {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMwMGEwNGQiIGQ9Ik0wIDM2MGg2NDB2MTIwSDB6Ii8+PHBhdGggZmlsbD0iIzE1MWY2ZCIgZD0iTTAgMTIwaDY0MHYxMjBIMHoiLz48cGF0aCBmaWxsPSIjZWUyNzM3IiBkPSJNMCAwaDY0MHYxMjBIMHoiLz48cGF0aCBmaWxsPSIjZmZjZDAwIiBkPSJNMCAyNDBoNjQwdjEyMEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-mv {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZDIxMDM0IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA3ZTNhIiBkPSJNMTIwIDEyMGg0MDB2MjQwSDEyMHoiLz48Y2lyY2xlIGN4PSIzNTAiIGN5PSIyNDAiIHI9IjgwIiBmaWxsPSIjZmZmIi8+PGNpcmNsZSBjeD0iMzgwIiBjeT0iMjQwIiByPSI4MCIgZmlsbD0iIzAwN2UzYSIvPjwvc3ZnPg==);
        }

        .flag-icon-mw {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5e3ed25ca9b400ca5cb174dd2eb2a61f.svg);
        }

        .flag-icon-mx {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/07a36ff7aabfa28832e1745d110bc02f.svg);
        }

        .flag-icon-my {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/afb7856db929daa8b07895d91ded88a9.svg);
        }

        .flag-icon-mz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/9969aaee71e84d84333fd0d88fcdd21b.svg);
        }

        .flag-icon-na {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMzY2MmEyIiBkPSJNLTI2LjQuMmwuOCAzNDUuNkw1MTIuNSAwLTI2LjQuMnoiLz48cGF0aCBmaWxsPSIjMzhhMTAwIiBkPSJNNjY2LjQgNDc5LjZMNjY1IDEyMC4zIDEyMi4zIDQ3OS44bDU0NC0uMnoiLz48cGF0aCBmaWxsPSIjYzcwMDAwIiBkPSJNLTI2IDM3MS44bC40IDEwOC4yIDExNy41LS4xTDY2NS40IDk1LjRsLS43LTk0LjEtMTE2LTFMLTI2IDM3MS43eiIvPjxwYXRoIGZpbGw9IiNmZmU3MDAiIGQ9Ik0yMTkuNiAxNzJsLTIxLjgtMTMuMi0xMi42IDIyLjEtMTIuMi0yMi4yLTIyIDEyLjkuNi0yNS40LTI1LjQuMiAxMy4yLTIxLjgtMjIuMS0xMi41IDIyLjItMTIuMy0xMi44LTIyIDI1LjQuNi0uMS0yNS41IDIxLjcgMTMuMkwxODYuMyA0NGwxMi4yIDIyLjIgMjItMTIuOS0uNiAyNS40IDI1LjQtLjItMTMuMiAyMS44IDIyLjEgMTIuNS0yMi4yIDEyLjMgMTIuOCAyMi0yNS40LS42eiIvPjxwYXRoIGZpbGw9IiMzNjYyYTIiIGQ9Ik0yMzIuNCAxMTIuNGMwIDI1LjYtMjAuOSA0Ni4zLTQ2LjYgNDYuM3MtNDYuNi0yMC43LTQ2LjYtNDYuMyAyMC44LTQ2LjIgNDYuNi00Ni4yIDQ2LjYgMjAuNyA0Ni42IDQ2LjJ6Ii8+PHBhdGggZmlsbD0iI2ZmZTcwMCIgZD0iTTIyMi4zIDExMi40YTM2LjUgMzYuNSAwIDEgMS03MyAwIDM2LjUgMzYuNSAwIDAgMSA3MyAweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-nc {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/5a8b5a8bc02ea07514e18bb248164f96.svg);
        }

        .flag-icon-ne {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMGRiMDJiIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHYzMjBIMHoiLz48cGF0aCBmaWxsPSIjZTA1MjA2IiBkPSJNMCAwaDY0MHYxNjBIMHoiLz48Y2lyY2xlIGN4PSIzMjAiIGN5PSIyNDAiIHI9IjY4IiBmaWxsPSIjZTA1MjA2Ii8+PC9zdmc+);
        }

        .flag-icon-nf {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1d24e67a7718fdbde05073a6ea7ffc40.svg);
        }

        .flag-icon-ng {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA4NzUzIiBkPSJNNDI2LjYgMEg2NDB2NDgwSDQyNi42ek0wIDBoMjEzLjN2NDgwSDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ni {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/385cdb73859639504e019f15ba2786bb.svg);
        }

        .flag-icon-nl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMjE0NjhiIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHYzMjBIMHoiLz48cGF0aCBmaWxsPSIjYWUxYzI4IiBkPSJNMCAwaDY0MHYxNjBIMHoiLz48L3N2Zz4=);
        }

        .flag-icon-no {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZWQyOTM5IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTgwIDBoMTIwdjQ4MEgxODB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTgwaDY0MHYxMjBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjY0IiBkPSJNMjEwIDBoNjB2NDgwaC02MHoiLz48cGF0aCBmaWxsPSIjMDAyNjY0IiBkPSJNMCAyMTBoNjQwdjYwSDB6Ii8+PC9zdmc+);
        }

        .flag-icon-np {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wLTE2aDUxMnY1MTJIMHoiLz48L2NsaXBQYXRoPjwvZGVmcz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48ZyBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMTUpIHNjYWxlKC45Mzc1KSI+PGcgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjY2UwMDAwIiBzdHJva2U9IiMwMDAwNjMiIHN0cm9rZS13aWR0aD0iMTMuOCIgZD0iTTYuNSA0ODkuNWgzNzguOEwxMzcuNCAyMzguMWwyNTcuMy4zTDYuNi05LjV2NDk5eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xODAuNyAzNTUuOGwtMjcgOSAyMS4yIDE5LjgtMjguNS0xLjggMTEuNyAyNi4yLTI1LjUtMTIuMy41IDI4LjYtMTguOC0yMC45LTEwLjcgMjYuNi05LjItMjYuMy0yMC4zIDIwLjYgMS44LTI3LjdMNDkgNDA5bDEyLjYtMjUtMjkuMy42IDIxLjUtMTguMy0yNy4zLTEwLjUgMjctOUwzMi4yIDMyN2wyOC40IDEuOEw0OSAzMDIuNmwyNS42IDEyLjMtLjUtMjguNiAxOC44IDIwLjkgMTAuNy0yNi42IDkuMSAyNi4zIDIwLjQtMjAuNi0xLjkgMjcuNyAyNy0xMS40LTEyLjcgMjUgMjkuNC0uNi0yMS41IDE4LjN6bS0zMi40LTE4NC43bC0xMS4zIDguNCA1LjYgNC42YTkzLjggOTMuOCAwIDAgMCAzMC43LTM2YzEuOCAyMS4zLTE3LjcgNjktNjguNyA2OS41YTcwLjYgNzAuNiAwIDAgMS03MS41LTcwLjNjMTAgMTguMiAxNi4yIDI3IDMyIDM2LjVsNC43LTQuNC0xMC42LTguOSAxMy43LTMuNi03LjQtMTIuNCAxNC40IDEtMS44LTE0LjQgMTIuNiA3LjQgNC0xMy41IDkgMTAuOCA4LjUtMTAuMyA0LjYgMTQgMTEuOC04LjItMS41IDE0LjMgMTQuMi0xLjctNi43IDEzLjIgMTMuNyA0eiIvPjwvZz48L2c+PC9zdmc+);
        }

        .flag-icon-nr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNTQuNyAwSDYyOHY1MTJILTU0Ljd6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MS4zKSBzY2FsZSguOTM3NSkiPjxwYXRoIGZpbGw9IiMwMDIxNzAiIGQ9Ik0tMTQwIDBIODg0djUxMkgtMTQweiIvPjxwYXRoIGZpbGw9IiNmZmIyMGQiIGQ9Ik0tMTQwIDIzNC4xSDg4NFYyNzhILTE0MHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTYxLjggNDM4bC0zMy0zMy0xMC41IDQ1LjQtMTItNDUtMzEuOSAzNCAxMi4xLTQ1TDQyIDQwNy45bDMzLTMzLTQ1LjQtMTAuNiA0NS0xMi0zNC0zMS44IDQ1IDEyTDcyIDI4OGwzMyAzMyAxMC42LTQ1LjQgMTIgNDUgMzEuOC0zNC0xMiA0NSA0NC41LTEzLjUtMzMgMzMgNDUuNCAxMC41LTQ1IDEyIDM0IDMyLTQ1LTEyLjJ6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-nu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/005a5c51ce74dabdaa72fbce70eeafff.svg);
        }

        .flag-icon-nz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1db0ede637bb74eb5e14395db34ef9a3.svg);
        }

        .flag-icon-om {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/c004223171ebb7748609b1ae14c356c7.svg);
        }

        .flag-icon-pa {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGNsaXAtcGF0aD0idXJsKCNhKSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNOTIuNSAwaDQ3Ny4ydjQ4MEg5Mi40eiIvPjxwYXRoIGZpbGw9IiNkYjAwMDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTMyMyAzLjZoMzU4djIyMS43SDMyM3oiLz48cGF0aCBmaWxsPSIjMDAwMGFiIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zLjIgMjI1LjNoMzE5LjlWNDgwSDMuMnptMjExLjYtNDcuNmwtNDItMjkuNC00MS43IDI5LjYgMTUuNS00OEwxMDUgMTAwbDUxLjYtLjQgMTYtNDggMTYuMyA0Ny45aDUxLjZsLTQxLjUgMzAgMTUuOSA0OHoiLz48cGF0aCBmaWxsPSIjZDgwMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik01MTYuOSA0MTMuOWwtNDIuNC0yNy43LTQyLjEgMjggMTUuNi00NS42LTQyLTI4IDUyLS41IDE2LjItNDUuNCAxNi40IDQ1LjNoNTJsLTQxLjggMjguNSAxNiA0NS40eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-pe {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/d205d8e85a2b522d7bf0fd923945df40.svg);
        }

        .flag-icon-pf {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e0cd0ca79be242131625fb1a450f5b90.svg);
        }

        .flag-icon-pg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1168850b2023b7859f615cc95022aa53.svg);
        }

        .flag-icon-ph {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e69e1033c5ab8d7c42e23f0f31157d98.svg);
        }

        .flag-icon-pk {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNTIuMyAwaDY4Mi42djUxMkgtNTIuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0IiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ5KSBzY2FsZSguOTM3NSkiPjxwYXRoIGZpbGw9IiMwYzU5MGIiIGQ9Ik0tOTUgMGg3Njh2NTEySC05NXoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNLTk1IDBIOTcuNXY1MTJILTk1eiIvPjxnIGZpbGw9IiNmZmYiPjxwYXRoIGQ9Ik00MDMuNyAyMjUuNGwtMzEuMi02LjYtMTYuNCAyNy4zLTMuNC0zMS42LTMxLTcuMiAyOS0xMy0yLjctMzEuNyAyMS40IDIzLjYgMjkuMy0xMi40LTE1LjkgMjcuNiAyMSAyNHoiLz48cGF0aCBkPSJNNDE1LjQgMzA2YTEyMS4yIDEyMS4yIDAgMCAxLTE2MS4zIDU5LjQgMTIyLjEgMTIyLjEgMCAwIDEtNTkuNS0xNjIuMUExMTguNiAxMTguNiAwIDAgMSAyNjYgMTM5YTE1Ni4yIDE1Ni4yIDAgMCAwLTExLjggMTAuOUExMTIuMyAxMTIuMyAwIDAgMCA0MTUuNSAzMDZ6Ii8+PC9nPjwvZz48L3N2Zz4=);
        }

        .flag-icon-pl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02NDAgNDgwSDBWMGg2NDB6Ii8+PHBhdGggZmlsbD0iI2RjMTQzYyIgZD0iTTY0MCA0ODBIMFYyNDBoNjQweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-pm {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-pn {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6fba00617b4620e53c3b81120076c37b.svg);
        }

        .flag-icon-pr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMzcuMyAwaDY4Mi43djUxMkgtMzcuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzUpIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2VkMDAwMCIgZD0iTS0zNy4zIDBoNzY4djUxMmgtNzY4eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0tMzcuMyAxMDIuNGg3Njh2MTAyLjRoLTc2OHptMCAyMDQuOGg3Njh2MTAyLjRoLTc2OHoiLz48cGF0aCBmaWxsPSIjMDA1MGYwIiBkPSJNLTM3LjMgMGw0NDAuNyAyNTUuN0wtMzcuMyA1MTFWMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTU2LjQgMzI1LjVMMTA5IDI5MGwtNDcuMiAzNS44IDE3LjYtNTguMS00Ny4yLTM2IDU4LjMtLjQgMTguMS01OCAxOC41IDU3LjggNTguMy4xLTQ2LjkgMzYuMyAxOCA1OHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-ps {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tMTE4IDBoNjgyLjd2NTEySC0xMTh6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMTAuNikgc2NhbGUoLjkzNzUpIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBkPSJNLTI0NiAwSDc3OHYxNzAuN0gtMjQ2eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0tMjQ2IDE3MC43SDc3OHYxNzAuNkgtMjQ2eiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik0tMjQ2IDM0MS4zSDc3OFY1MTJILTI0NnoiLz48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0tMjQ2IDUxMmw1MTItMjU2TC0yNDYgMHY1MTJ6Ii8+PC9nPjwvZz48L3N2Zz4=);
        }

        .flag-icon-pt {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/b68e45b78d9c25a741a51840c1471c6b.svg);
        }

        .flag-icon-pw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNzAuMyAwaDY0MHY0ODBoLTY0MHoiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0IiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcwLjMpIj48cGF0aCBmaWxsPSIjNGFhZGQ2IiBkPSJNLTE3My40IDBoODQ2LjN2NDgwaC04NDYuM3oiLz48cGF0aCBmaWxsPSIjZmZkZTAwIiBkPSJNMzM1LjYgMjMyLjFhMTM1LjkgMTMwLjEgMCAxIDEtMjcxLjcgMCAxMzUuOSAxMzAuMSAwIDEgMSAyNzEuNyAweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-py {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/65506db8f543d545aa7e3af40a3c662d.svg);
        }

        .flag-icon-qa {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjOGQxYjNkIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwdjQ4MGgxNTguNGw5Ny44LTI2LjctOTcuOC0yNi42IDk3LjctMjYuNy05Ny43LTI2LjcgOTcuNy0yNi42LTk3LjctMjYuNyA5Ny44LTI2LjctOTcuOC0yNi42IDk3LjctMjYuNy05Ny43LTI2LjcgOTcuNy0yNi42LTk3LjctMjYuNyA5Ny44LTI2LjctOTcuOC0yNi42TDI1Ni4xIDgwbC05Ny43LTI2LjcgOTcuOC0yNi42TDE1OC4zIDBIMHoiLz48L3N2Zz4=);
        }

        .flag-icon-re {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ro {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjMDAzMTljIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmRlMDAiIGQ9Ik0yMTMuMyAwaDIxMy40djQ4MEgyMTMuM3oiLz48cGF0aCBmaWxsPSIjZGUyMTEwIiBkPSJNNDI2LjcgMEg2NDB2NDgwSDQyNi43eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-rs {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/92565a966a6d815ecd83be5de1bdeda5.svg);
        }

        .flag-icon-ru {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAzOWE2IiBkPSJNMCAxNjBoNjQwdjMyMEgweiIvPjxwYXRoIGZpbGw9IiNkNTJiMWUiIGQ9Ik0wIDMyMGg2NDB2MTYwSDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-rw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzIwNjAzZCIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZhZDIwMSIgZD0iTTAgMGg2NDB2MzYwSDB6Ii8+PHBhdGggZmlsbD0iIzAwYTFkZSIgZD0iTTAgMGg2NDB2MjQwSDB6Ii8+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTExIDEyNS40KSBzY2FsZSguNjY2NjcpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGZpbGw9IiNlNWJlMDEiIGQ9Ik0xMTYuMSAwTDM1LjcgNC43bDc2LjQgMjUuNC03OC44LTE2LjNMMTAwLjYgNThsLTcyLTM2LjJMODIgODIuMSAyMS45IDI4LjZsMzYuMiA3Mi00NC4zLTY3LjNMMzAgMTEyIDQuNyAzNS43IDAgMTE2LjEtMS0xeiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJzY2FsZSgxIC0xKSIgeGxpbms6aHJlZj0iI2EiLz48L2c+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InNjYWxlKC0xIDEpIiB4bGluazpocmVmPSIjYiIvPjxjaXJjbGUgcj0iMzQuMyIgZmlsbD0iI2U1YmUwMSIgc3Ryb2tlPSIjMDBhMWRlIiBzdHJva2Utd2lkdGg9IjMuNCIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-sa {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/1a161cccd79dc0f73dc4f79f69d1472a.svg);
        }

        .flag-icon-sb {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iIzAwMDBkNiIgZD0iTTAgNTA3LjJMOTg3LjQgMEgwdjUwNy4yeiIvPjxwYXRoIGZpbGw9IiMwMDYwMDAiIGQ9Ik0xMDI0IDBMMjcuMiA1MTJIMTAyNFYweiIvPjxwYXRoIGZpbGw9IiNmYzAiIGQ9Ik0xMDI0IDBoLTU0LjlMMCA0ODUuNFY1MTJoNTQuOUwxMDI0IDI3LjZWMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNzEuNCA5LjFsMTEuOCAzNC41aDM4LjVMOTAuNiA2NC43bDExLjkgMzQuNEw3MS40IDc4IDQwLjMgOTkuMmwxMS45LTM0LjQtMzEuMS0yMS4zaDM4LjR6bTE5MS4xIDBsMTEuOSAzNC41aDM4LjVsLTMxLjIgMjEuMiAxMiAzNC40TDI2Mi40IDc4bC0zMSAyMS4zIDExLjktMzQuNC0zMS4yLTIxLjNoMzguNXptMCAxNDQuNWwxMS45IDM0LjVoMzguNWwtMzEuMiAyMS4yIDEyIDM0LjQtMzEuMi0yMS4zLTMxIDIxLjMgMTEuOS0zNC40LTMxLjItMjEuM2gzOC41em0tOTUtNzEuNGwxMS45IDM0LjRoMzguNGwtMzEgMjEuMyAxMS44IDM0LjQtMzEtMjEuMy0zMS4yIDIxLjMgMTItMzQuNC0zMS4yLTIxLjNoMzguNXptLTk2LjEgNzEuNGwxMS44IDM0LjVoMzguNWwtMzEuMSAyMS4yIDExLjkgMzQuNC0zMS4xLTIxLjMtMzEuMSAyMS4zIDEyLTM0LjRMMjEgMTg4aDM4LjR6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-sc {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0icmVkIiBkPSJNMCAwaDk5Mi4xdjUxMkgweiIvPjxwYXRoIGZpbGw9IiMwOTAiIGQ9Ik0wIDUxMmw5OTIuMS0xNzAuN1Y1MTJIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCA1MTJsOTkyLjEtMzQxLjN2MTcwLjZMMCA1MTJ6Ii8+PHBhdGggZmlsbD0iIzAwOSIgZD0iTTAgNTEyVjBoMzMwLjdMMCA1MTJ6Ii8+PHBhdGggZmlsbD0iI2ZmMCIgZD0iTTAgNTEyTDMzMC43IDBoMzMwLjdMMCA1MTJ6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-sd {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InNjYWxlKC45Mzc1KSI+PHBhdGggZD0iTTAgMzQxLjNoMTAyNFY1MTJIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAxNzAuNmgxMDI0djE3MC43SDB6Ii8+PHBhdGggZmlsbD0icmVkIiBkPSJNMCAwaDEwMjQuOHYxNzAuN0gweiIvPjxwYXRoIGZpbGw9IiMwMDlhMDAiIGQ9Ik0wIDB2NTEybDM0MS4zLTI1NkwwIDB6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-se {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDY2YWE3IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmVjYzAwIiBkPSJNMCAxOTJoNjQwdjk2SDB6Ii8+PHBhdGggZmlsbD0iI2ZlY2MwMCIgZD0iTTE3NiAwaDk2djQ4MGgtOTZ6Ii8+PC9zdmc+);
        }

        .flag-icon-sg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNLTIwIDBoNzIwdjQ4MEgtMjB6Ii8+PHBhdGggZmlsbD0iI2RmMDAwMCIgZD0iTS0yMCAwaDcyMHYyNDBILTIweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNDYgNDAuMmE4NC40IDg0LjQgMCAwIDAgLjggMTY1LjIgODYgODYgMCAwIDEtMTA2LjYtNTkgODYgODYgMCAwIDEgNTktMTA2YzE2LTQuNiAzMC44LTQuNyA0Ni45LS4yeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xMzMgMTEwbDQuOSAxNS0xMy05LjItMTIuOCA5LjQgNC43LTE1LjItMTIuOC05LjMgMTUuOS0uMiA1LTE1IDUgMTVoMTUuOHptMTcuNSA1Mmw1IDE1LjEtMTMtOS4yLTEyLjkgOS4zIDQuOC0xNS4xLTEyLjgtOS40IDE1LjktLjEgNC45LTE1LjEgNSAxNWgxNnptNTguNS0uNGw0LjkgMTUuMi0xMy05LjMtMTIuOCA5LjMgNC43LTE1LjEtMTIuOC05LjMgMTUuOS0uMiA1LTE1IDUgMTVoMTUuOHptMTcuNC01MS42bDQuOSAxNS4xLTEzLTkuMi0xMi44IDkuMyA0LjgtMTUuMS0xMi45LTkuNCAxNi0uMSA0LjgtMTUuMSA1IDE1aDE2em0tNDYuMy0zNC4zbDUgMTUuMi0xMy05LjMtMTIuOSA5LjQgNC44LTE1LjItMTIuOC05LjQgMTUuOC0uMSA1LTE1LjEgNSAxNWgxNnoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-sh {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/df7635e56504ef1c5a8b18a8fd4b3c23.svg);
        }

        .flag-icon-si {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/af9311fefc86d72b064795f0750af7fa.svg);
        }

        .flag-icon-sj {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZWYyYjJkIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTgwIDBoMTIwdjQ4MEgxODB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMTgwaDY0MHYxMjBIMHoiLz48cGF0aCBmaWxsPSIjMDAyODY4IiBkPSJNMjEwIDBoNjB2NDgwaC02MHoiLz48cGF0aCBmaWxsPSIjMDAyODY4IiBkPSJNMCAyMTBoNjQwdjYwSDB6Ii8+PC9zdmc+);
        }

        .flag-icon-sk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fccd89733a9d84b63f37a0c2fc929650.svg);
        }

        .flag-icon-sl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMwMDAwY2QiIGQ9Ik0wIDMyMC4zaDY0MFY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAxNjAuN2g2NDB2MTU5LjZIMHoiLz48cGF0aCBmaWxsPSIjMDBjZDAwIiBkPSJNMCAwaDY0MHYxNjAuN0gweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-sm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/2fd99608fd68b92672c33d2095b39843.svg);
        }

        .flag-icon-sn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjMGI3MjI2IiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZjAiIGQ9Ik0yMTMuMyAwaDIxMy4zdjQ4MEgyMTMuM3oiLz48cGF0aCBmaWxsPSIjYmMwMDAwIiBkPSJNNDI2LjYgMEg2NDB2NDgwSDQyNi42eiIvPjwvZz48cGF0aCBmaWxsPSIjMGI3MjI2IiBkPSJNMzQyIDIxOC44aDcxLjhsLTU2LjYgNDMuNiAyMC43IDY5LjMtNTYuNi00My42LTU2LjYgNDEuNiAyMC43LTY3LjMtNTYuNi00My42aDY5LjhsMjIuNy03MS4zeiIvPjwvc3ZnPg==);
        }

        .flag-icon-so {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODUuMyAwaDY4Mi42djUxMkgtODUuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODApIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iIzQwYTZmZiIgZD0iTS0xMjggMGg3Njh2NTEyaC03Njh6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTMzNi41IDM4MS4yTDI1NCAzMjcuN2wtODIuMSA1NCAzMC41LTg3LjctODItNTQuMkwyMjIgMjM5bDMxLjQtODcuNSAzMi4xIDg3LjMgMTAxLjQuMS04MS41IDU0LjcgMzEuMiA4Ny42eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-sr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMzc3ZTNmIiBkPSJNLjEgMGg2NDB2NDgwSC4xeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0uMSA5Nmg2NDB2Mjg4SC4xeiIvPjxwYXRoIGZpbGw9IiNiNDBhMmQiIGQ9Ik0uMSAxNDRoNjQwdjE5MkguMXoiLz48cGF0aCBmaWxsPSIjZWNjODFkIiBkPSJNMzIwIDE1My4ybDU2LjQgMTczLjYtMTQ3LjctMTA3LjNoMTgyLjZMMjYzLjYgMzI2Ljh6Ii8+PC9zdmc+);
        }

        .flag-icon-ss {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDc4OTMwIiBkPSJNMCAzMzZoNjQwdjE0NEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDE0NGg2NDB2MTkySDB6Ii8+PHBhdGggZD0iTTAgMGg2NDB2MTQ0SDB6Ii8+PHBhdGggZmlsbD0iI2RhMTIxYSIgZD0iTTAgMTY4aDY0MHYxNDRIMHoiLz48cGF0aCBmaWxsPSIjMGY0N2FmIiBkPSJNMCAwbDQxNS43IDI0MEwwIDQ4MHoiLz48cGF0aCBmaWxsPSIjZmNkZDA5IiBkPSJNMjAwLjcgMTk0LjhMNjEuNyAyNDBsMTM5IDQ1LjFMMTE0LjkgMTY3djE0NnoiLz48L3N2Zz4=);
        }

        .flag-icon-st {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+PHBhdGggZmlsbD0iIzEyYWQyYiIgZD0iTTAgMGg2NDB2NDgwSDB6Ii8+PHBhdGggZmlsbD0iI2ZmY2UwMCIgZD0iTTAgMTM3LjFoNjQwVjM0M0gweiIvPjxwYXRoIGZpbGw9IiNkMjEwMzQiIGQ9Ik0wIDB2NDgwbDI0MC0yNDAiLz48ZyBpZD0iYyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzUxLjYgMjQwKSBzY2FsZSguMzQyODYpIj48ZyBpZD0iYiI+PHBhdGggaWQ9ImEiIGQ9Ik0wLTIwMFYwaDEwMCIgdHJhbnNmb3JtPSJyb3RhdGUoMTggMCAtMjAwKSIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSIgeGxpbms6aHJlZj0iI2EiLz48L2c+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSg3MikiIHhsaW5rOmhyZWY9IiNiIi8+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgxNDQpIiB4bGluazpocmVmPSIjYiIvPjx1c2Ugd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdHJhbnNmb3JtPSJyb3RhdGUoLTE0NCkiIHhsaW5rOmhyZWY9IiNiIi8+PHVzZSB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB0cmFuc2Zvcm09InJvdGF0ZSgtNzIpIiB4bGluazpocmVmPSIjYiIvPjwvZz48dXNlIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHg9IjcwMCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUyMy4yKSIgeGxpbms6aHJlZj0iI2MiLz48L3N2Zz4=);
        }

        .flag-icon-sv {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f7fe239e8e33fd1825bece3fddca3353.svg);
        }

        .flag-icon-sx {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/961615b0ecee826b4612d1e6a6d8dda5.svg);
        }

        .flag-icon-sy {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cmVjdCB3aWR0aD0iNjQwIiBoZWlnaHQ9IjE2MCIgeT0iMTYwIiBmaWxsPSIjZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHJ4PSIwIiByeT0iMCIvPjxyZWN0IHdpZHRoPSI2NDAiIGhlaWdodD0iMTYwIiB5PSIzMjAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgcng9IjAiIHJ5PSIwIi8+PHBhdGggZmlsbD0icmVkIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDBoNjQwdjE2MEgweiIvPjxwYXRoIGZpbGw9IiMwOTAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTIwMS45IDI4MWwtMjguOC0yMC45LTI4LjcgMjEuMSAxMC43LTM0LjItMjguNy0yMS4yIDM1LjQtLjMgMTEtMzQuMSAxMS4zIDM0aDM1LjRMMTkxIDI0Ni45bDEwLjkgMzQuMnptMzA3LjYgMGwtMjguOC0yMC45LTI4LjcgMjEuMSAxMC43LTM0LjItMjguNi0yMS4yIDM1LjQtLjMgMTEtMzQuMSAxMS4yIDM0aDM1LjRsLTI4LjUgMjEuNCAxMSAzNC4yeiIvPjwvc3ZnPg==);
        }

        .flag-icon-sz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fefd3462f75ca5fe3b87df98782be774.svg);
        }

        .flag-icon-tc {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/e14f31c8d53bc71d384c689e8aea550c.svg);
        }

        .flag-icon-td {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMwMDAwNjciIGQ9Ik0wIDBoMjE0djQ4MEgweiIvPjxwYXRoIGZpbGw9InJlZCIgZD0iTTQyNiAwaDIxNHY0ODBINDI2eiIvPjxwYXRoIGZpbGw9IiNmZjAiIGQ9Ik0yMTQgMGgyMTJ2NDgwSDIxNHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-tf {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/24c2e644ab926b31b2c51841eb126b73.svg);
        }

        .flag-icon-tg {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0ic2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjZmZlMzAwIiBkPSJNMCAwaDc2Ny42djUxMkgweiIvPjxwYXRoIGZpbGw9IiMxMTg2MDAiIGQ9Ik0wIDIwOC4xaDc2Ny42VjMxMUgwek0wIC4yaDc2Ny42djEwMi45SDB6Ii8+PHBhdGggZmlsbD0iI2Q4MDAwMCIgZD0iTTAgLjNoMzA2LjV2MzEwLjZIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTM0LjQgMTI4LjRjMC0uOCAxOC45LTUzIDE4LjktNTNsMTcgNTIuMnM1Ny40IDEuNyA1Ny40LjgtNDUuMyAzNC4zLTQ1LjMgMzQuMyAyMS40IDYwIDIwLjUgNTguMmMtLjgtMS43LTQ5LjYtMzYtNDkuNi0zNnMtNDkuNyAzNC4zLTQ4LjggMzQuM2MuOCAwIDE4LjgtNTYuNSAxOC44LTU2LjVsLTQ0LjUtMzMuNCA1NS42LS45eiIvPjxwYXRoIGZpbGw9IiMxMTg2MDAiIGQ9Ik0wIDQwOS4yaDc2Ny42VjUxMkgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-th {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmNGY1ZjgiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiMyZDJhNGEiIGQ9Ik0wIDE2Mi41aDY0MHYxNjBIMHoiLz48cGF0aCBmaWxsPSIjYTUxOTMxIiBkPSJNMCAwaDY0MHY4Mi41SDB6bTAgNDAwaDY0MHY4MEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-tj {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/6c261b35cbf4566b56a52c373ce5b5ea.svg);
        }

        .flag-icon-tk {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjMDAyNDdkIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmVkMTAwIiBkPSJNMTA4LjEgMzU0LjZjLTYuNy0uMSA2Mi44LTM3IDEyMC45LTg0LjQgNzYuMi02Mi4xIDI0MC4zLTE2MS40IDI4OC42LTE3Ny42IDUtMS43LTEwLjMgOC42LTEyLjMgMTEuOS01MS41IDYxLTEwLjQgMTc2IDU0IDIzMy45IDE5LjQgMTQuOCAxOC40IDE1LjYgNTQuMyAxN3YzLjRsLTUwNS41LTQuMnptLTQuMiA2LjdzLTQuOSAzLjUtNC45IDYuMWMwIDIuOSA1LjUgNi43IDUuNSA2LjdsNDk4LjUgNS41IDkuMi02LjEtMTIuOC03LjktNDk1LjUtNC4zeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xMDYuOCAxMDkuMWwtNCAxMi4yIDEwLjQtNy41IDEwLjMgNy41LTMuOS0xMi4yIDEwLjMtNy41aC0xMi44bC0zLjktMTIuMi00IDEyLjJIOTYuNHptNzguMSA1Ny40bDguNi02LjNoLTEwLjdsLTMuMy0xMC4xLTMuMyAxMC4xaC0xMC42bDguNiA2LjMtMy4zIDEwLjEgOC42LTYuMyA4LjcgNi4zem0tMTQ1LjIgMTNsLTQtMTIuMi0zLjkgMTIuMkgxOWwxMC4zIDcuNS0zLjkgMTIuMiAxMC4zLTcuNSAxMC40IDcuNS00LTEyLjIgMTAuNC03LjV6bTc4LjEgMTIyLjNsLTQuNi0xNC4yLTQuNiAxNC4yaC0xNWwxMi4xIDguNy00LjYgMTQuMyAxMi4xLTguOCAxMi4xIDguOC00LjctMTQuMyAxMi4xLTguN3oiLz48L3N2Zz4=);
        }

        .flag-icon-tl {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0ic2NhbGUoLjkzNzUpIj48cGF0aCBmaWxsPSIjY2IwMDBmIiBkPSJNMCAwaDEwMzEuMnY1MTJIMHoiLz48cGF0aCBmaWxsPSIjZjhjMDBjIiBkPSJNMCAwYzMuMiAwIDUxMiAyNTYuNyA1MTIgMjU2LjdMMCA1MTJWMHoiLz48cGF0aCBkPSJNMCAwYzIuMSAwIDM0MC42IDI1Ni43IDM0MC42IDI1Ni43TDAgNTEyVjB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE4Ny43IDI5OC4yTDEyNyAyODQuN2wtMzEgNTIuOC01LTU5LjctNjAuNy0xMy4zIDU0LjktMjQuOS0zLjMtNTkuMyA0MC4yIDQzLjQgNTUuNC0yNS4zLTI4LjkgNTQgMzkuMiA0NS44eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-tm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/eeb8ef2250f043197c553422f125320f.svg);
        }

        .flag-icon-tn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODUuMyAwaDY4Mi42djUxMkgtODUuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODApIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2U3MDAxMyIgZD0iTS0xMjggMGg3Njh2NTEyaC03Njh6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTM4NS44IDI1NS44YTEyOS4xIDEyOS4xIDAgMSAxLTI1OC4yIDAgMTI5LjEgMTI5LjEgMCAwIDEgMjU4LjIgMHoiLz48cGF0aCBmaWxsPSIjZTcwMDEzIiBkPSJNMjU2LjcgMzQxLjRhODUuNyA4NS43IDAgMCAxIDAtMTcxLjNjMTEuOCAwIDI1LjMgMi44IDM0LjQgOS41LTYyLjYgMi4zLTc4LjUgNTUuNS03OC41IDc2LjlzMTAuMSA2OS4xIDc4LjUgNzYuMmMtNy44IDUtMjIuNiA4LjctMzQuNCA4Ljd6Ii8+PHBhdGggZmlsbD0iI2U3MDAxMyIgZD0iTTMzMi4xIDI5MS44bC0zOC45LTE0LjItMjUuNyAzMi40IDEuNS00MS4zLTM4LjgtMTQuNSAzOS44LTExLjQgMS43LTQxLjMgMjMuMiAzNC4zIDM5LjgtMTEtMjUuNSAzMi41eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-to {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjYzEwMDAwIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDI1MHYyMDAuM0gweiIvPjxnIGZpbGw9IiNjMTAwMDAiPjxwYXRoIGQ9Ik0xMDIuOCAzMS4yaDM5Ljl2MTM5LjZoLTM5Ljh6Ii8+PHBhdGggZD0iTTE5Mi42IDgxdjQwSDUzVjgxeiIvPjwvZz48L2c+PC9zdmc+);
        }

        .flag-icon-tr {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNlMzBhMTciIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik00MDcgMjQ3LjVjMCA2Ni4yLTU0LjYgMTE5LjktMTIyIDExOS45cy0xMjItNTMuNy0xMjItMTIwIDU0LjYtMTE5LjggMTIyLTExOS44IDEyMiA1My43IDEyMiAxMTkuOXoiLz48cGF0aCBmaWxsPSIjZTMwYTE3IiBkPSJNNDEzIDI0Ny41YzAgNTMtNDMuNiA5NS45LTk3LjUgOTUuOXMtOTcuNi00My05Ny42LTk2IDQzLjctOTUuOCA5Ny42LTk1LjggOTcuNiA0Mi45IDk3LjYgOTUuOXoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNDMwLjcgMTkxLjVsLTEgNDQuMy00MS4zIDExLjIgNDAuOCAxNC41LTEgNDAuNyAyNi41LTMxLjggNDAuMiAxNC0yMy4yLTM0LjEgMjguMy0zMy45LTQzLjUgMTItMjUuOC0zN3oiLz48L2c+PC9zdmc+);
        }

        .flag-icon-tt {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjZTAwMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00NjMuNyA0ODBMMCAxdjQ3OC44bDQ2My43LjJ6TTE3Ni4zIDBMNjQwIDQ3OVYuMkwxNzYuMyAweiIvPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTI3LjcuMmgxMTguNmw0NjguMiA0NzkuM0g0OTIuMkwyNy43LjJ6Ii8+PC9zdmc+);
        }

        .flag-icon-tv {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/aeb7c23932aab982428694eed80ab324.svg);
        }

        .flag-icon-tw {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0wIDBoNjgyLjd2NTEySDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09InNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2ZlMDAwMCIgZD0iTTAgMGg3Njh2NTEySDB6Ii8+PHBhdGggZmlsbD0iIzAwMDA5NSIgZD0iTTAgMGgzODUuN3YyNTZIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjgyLjEgMTc4LjZsLTQ3LjMtOS44IDEwIDQ3LjMtMzYtMzIuMS0xNSA0Ni0xNS4yLTQ1LjktMzYgMzIuNCA5LjgtNDcuNC00Ny4yIDEwLjEgMzItMzYuMS00Ni0xNSA0Ni0xNS4yLTMyLjQtMzUuOCA0Ny4zIDkuNy0xMC00Ny4zIDM2IDMyLjEgMTUtNDYgMTUuMiA0NS45IDM1LjktMzIuNC05LjcgNDcuNCA0Ny4yLTEwLjEtMzIgMzYuMSA0NS45IDE1LTQ1LjkgMTUuMnoiLz48cGF0aCBmaWxsPSIjMDAwMDk1IiBkPSJNMjM4LjUgMTc1bC0xNSA3LjktMTQuNSA4LjYtMTctLjYtMTYuOS4yLTE0LjMtOUwxNDYgMTc0bC04LTE1LTguNi0xNC41LjYtMTYuOC0uMi0xNyA5LTE0LjIgOC4zLTE0LjggMTQuOS03LjkgMTQuNi04LjYgMTYuOS42IDE3LS4yIDE0LjMgOSAxNC43IDguMiA4IDE0LjkgOC42IDE0LjUtLjYgMTYuOS4yIDE2LjktOSAxNC4zeiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNDQuNiAxMjguM2E1MS45IDUxLjkgMCAxIDEtMTAzLjcgMCA1MS45IDUxLjkgMCAwIDEgMTAzLjcgMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-tz {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0xMCAwaDE2MHYxMjBIMTB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PGcgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2Utd2lkdGg9IjFwdCIgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCg0IDAgMCA0IC00MCAwKSI+PHBhdGggZmlsbD0iIzA5ZiIgZD0iTTAgMGgxODB2MTIwSDB6Ii8+PHBhdGggZmlsbD0iIzA5MCIgZD0iTTAgMGgxODBMMCAxMjBWMHoiLz48cGF0aCBkPSJNMCAxMjBoNDBsMTQwLTk1VjBoLTQwTDAgOTV2MjV6Ii8+PHBhdGggZmlsbD0iI2ZmMCIgZD0iTTAgOTEuNUwxMzcuMiAwaDEzLjVMMCAxMDAuNXYtOXpNMjkuMyAxMjBMMTgwIDE5LjV2OUw0Mi44IDEyMEgyOS4zeiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ua {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZkNTAwIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDA1YmJiIiBkPSJNMCAwaDY0MHYyNDBIMHoiLz48L2c+PC9zdmc+);
        }

        .flag-icon-ug {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f405035d47613296f5dbde3aa1e75c45.svg);
        }

        .flag-icon-um {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/59f5391cd6e1781fd4c0a6c3d4271dad.svg);
        }

        .flag-icon-us {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/c8750e4f19ed8aa0a394895c4317ec0b.svg);
        }

        .flag-icon-uy {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/90cc10aaf5327a5d3ff2b4eef4be0178.svg);
        }

        .flag-icon-uz {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/fca6a4db4b48c3f76d08786d262fe1cc.svg);
        }

        .flag-icon-va {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/a14da00dae3ff66655756fd56315aaca.svg);
        }

        .flag-icon-vc {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNmNGYxMDAiIGQ9Ik0wIDBoNjQwdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiMxOTlhMDAiIGQ9Ik00OTAgMGgxNTB2NDgwSDQ5MHoiLz48cGF0aCBmaWxsPSIjMDA1OGFhIiBkPSJNMCAwaDE1MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMTk5YTAwIiBkPSJNMjU5LjMgMTMwbC00Ni40IDcxLjMgNDQuNyA3NC40IDQzLjgtNzMuNy00Mi4xLTcyem0xMjEuMiAwbC00Ni4zIDcxLjMgNDQuNyA3NC40IDQzLjgtNzMuNy00Mi4yLTcyem0tNjEuMiA5Ny4zbC00Ni40IDcxLjQgNDQuOCA3NC40IDQzLjgtNzMuNy00Mi4yLTcyeiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-ve {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/bdd9de48b593f8f3a32393fecbee0698.svg);
        }

        .flag-icon-vg {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/9916422f80ce888ccd77b9dbec2d7fde.svg);
        }

        .flag-icon-vi {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/f1dcd5d6c759ce0169cfa9c5e466f0e0.svg);
        }

        .flag-icon-vn {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tODUuMyAwaDY4Mi42djUxMkgtODUuM3oiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcGF0aD0idXJsKCNhKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODApIHNjYWxlKC45Mzc1KSI+PHBhdGggZmlsbD0iI2VjMDAxNSIgZD0iTS0xMjggMGg3Njh2NTEyaC03Njh6Ii8+PHBhdGggZmlsbD0iI2ZmMCIgZD0iTTM0OS42IDM4MUwyNjAgMzE0LjNsLTg5IDY3LjNMMjA0IDI3MmwtODktNjcuNyAxMTAuMS0xIDM0LjItMTA5LjRMMjk0IDIwM2wxMTAuMS4xLTg4LjUgNjguNCAzMy45IDEwOS42eiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-vu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4ecdef475edf4000eb727ea2833352cd.svg);
        }

        .flag-icon-wf {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-ws {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjY2UxMTI2IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyYjdmIiBkPSJNMCAwaDMyMHYyNDBIMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTgwIDIyOS4zbC0yMC43LTE0LTE5LjkgMTQuMSA2LjUtMjQuOS0xOS0xNS4yIDI0LjUtMS41IDguMS0yMy42IDguOCAyNCAyNCAuNy0xOSAxNi4zem0tMy42LTE2NS42TDE1OS44IDUzbC0xNiAxMC40IDQuNC0yMC0xNC42LTEyLjcgMTkuNC0xLjYgNy4yLTE4LjYgNy40IDE4LjcgMTkuMSAxLjdMMTcyIDQ0LjN6bS03MyA1OS41bC0xNi0xMS0xNi43IDExIDUuMi0xOS40TDYwLjggOTEgODAgOTBsNy0xOSA2LjggMTguOSAxOS42IDEuMS0xNSAxMi41ek0yNTAgMTEwbC0xNS40LTEwLTE1IDEwIDQuNC0xOC4zLTE0LTExLjggMTguMy0xLjUgNi4zLTE3LjIgNyAxNy40IDE3LjcgMS0xMy43IDEyLjN6bS00My4xIDQzLjRsLTEwLjMtNi40LTEwLjMgNi42IDIuNy0xMi4zLTkuMi04LjMgMTItMSA0LjYtMTEuNiA0LjkgMTEuNiAxMS45IDEtOS4xIDguM3oiLz48L2c+PC9zdmc+);
        }

        .flag-icon-ye {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0NzIuOEgweiIvPjxwYXRoIGZpbGw9IiNmMTA2MDAiIGQ9Ik0wIDBoNjQwdjE1Ny40SDB6Ii8+PHBhdGggZD0iTTAgMzIyLjZoNjQwVjQ4MEgweiIvPjwvZz48L3N2Zz4=);
        }

        .flag-icon-yt {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS13aWR0aD0iMXB0Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjMDAyNjdmIiBkPSJNMCAwaDIxMy4zdjQ4MEgweiIvPjxwYXRoIGZpbGw9IiNmMzE4MzAiIGQ9Ik00MjYuNyAwSDY0MHY0ODBINDI2Ljd6Ii8+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-za {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGwtb3BhY2l0eT0iLjciIGQ9Ik0tNzEuOSAwaDY4Mi43djUxMkgtNzEuOXoiLz48L2NsaXBQYXRoPjwvZGVmcz48ZyBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY3LjQpIHNjYWxlKC45Mzc0OCkiPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLXdpZHRoPSIxcHQiPjxwYXRoIGQ9Ik0tNzEuOSA0MDcuOFYxMDQuNEwxNTQgMjU2LjEtNzIgNDA3Ljh6Ii8+PHBhdGggZmlsbD0iIzAwYyIgZD0iTTgyLjIgNTEyLjFsMjUzLjYtMTcwLjZINjk2VjUxMkg4Mi4yeiIvPjxwYXRoIGZpbGw9InJlZCIgZD0iTTY2IDBoNjMwdjE3MC44SDMzNS43UzY5LjMtMS43IDY2IDB6Ii8+PHBhdGggZmlsbD0iI2ZjMCIgZD0iTS03MS45IDY0djQwLjRMMTU0IDI1Ni03MiA0MDcuOHY0MC4zbDI4NC41LTE5MkwtNzIgNjR6Ii8+PHBhdGggZmlsbD0iIzA5MyIgZD0iTS03MS45IDY0VjBoOTVsMzAxLjIgMjA0aDM3MS44djEwNC4ySDMyNC4zTDIzIDUxMmgtOTQuOXYtNjMuOWwyODQuNC0xOTJMLTcxLjggNjR6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTIzIDBoNTkuMmwyNTMuNiAxNzAuN0g2OTZWMjA0SDMyNC4zTDIzIC4xem0wIDUxMi4xaDU5LjJsMjUzLjYtMTcwLjZINjk2di0zMy4ySDMyNC4zTDIzIDUxMnoiLz48L2c+PC9nPjwvc3ZnPg==);
        }

        .flag-icon-zm {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/cfa4bf9eaa9aca42a2353a43da8c7cb8.svg);
        }

        .flag-icon-zw {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/afdcce05212470bb928a95f6bdd2a6ce.svg);
        }

        .flag-icon-es-ca {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmNkZDA5IiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBzdHJva2U9IiNkYTEyMWEiIHN0cm9rZS13aWR0aD0iNjAiIGQ9Ik0wIDkwaDgxMG0wIDEyMEgwbTAgMTIwaDgxMG0wIDEyMEgwIiB0cmFuc2Zvcm09InNjYWxlKC43OTAxMiAuODg4ODkpIi8+PC9zdmc+);
        }

        .flag-icon-es-ga {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/4e98ad18d0e68b9d79dd1b7908969efe.svg);
        }

        .flag-icon-eu {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/785ed29863c475de936ee22ecae186b4.svg);
        }

        .flag-icon-gb-eng {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNDgwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDY0MHY0ODBIMHoiLz48cGF0aCBmaWxsPSIjY2UxMTI0IiBkPSJNMjgxLjYgMGg3Ni44djQ4MGgtNzYuOHoiLz48cGF0aCBmaWxsPSIjY2UxMTI0IiBkPSJNMCAyMDEuNmg2NDB2NzYuOEgweiIvPjwvc3ZnPg==);
        }

        .flag-icon-un {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/85d2ae921dc69e8368740290ea3227d7.svg);
        }

        .flag-icon-xk {
            background-image: url(https://m41k1n4177.github.io/adobe-svg/svg/99eef75c7830c333ed3cd2debb9dd4bb.svg);
        }

        .styles__phoneNumberInput___2o9FG {
            -webkit-flex: 1 1 100%;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .styles__phoneNumberInput___2o9FG,
        .styles__phoneNumberInput___2o9FG .styles__labelWrapper___DgF3T {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -moz-box-flex: 1;
        }

        .styles__phoneNumberInput___2o9FG .styles__labelWrapper___DgF3T {
            -webkit-flex: 1 1 100%;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .styles__phoneNumberInput___2o9FG .styles__labelWrapperInline___3vCk6 {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .styles__phoneNumberInput___2o9FG .styles__labelWrapperInline___3vCk6 .spectrum-FieldLabel {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -moz-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            min-width: 50px;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -moz-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none;
            min-width: 100px;
            margin-right: 10px;
            vertical-align: bottom;
            -webkit-transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ .spectrum-Dropdown-trigger {
            border-color: #e1e1e1;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ .spectrum-Dropdown-trigger .spectrum-Dropdown-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -moz-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            height: 100%;
            margin: 0;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet {
            max-width: none;
            min-width: 75px;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger {
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:active {
            border-color: #1473e6;
            -webkit-box-shadow: 0 1px 0 #1473e6;
            box-shadow: 0 1px 0 #1473e6;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:focus {
            border-color: #2680eb;
            -webkit-box-shadow: 0 1px 0 #2680eb;
            box-shadow: 0 1px 0 #2680eb;
        }

        .styles__phoneNumberInput___2o9FG .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:disabled {
            border-color: #e1e1e1;
        }

        .styles__phoneNumberInput___2o9FG .styles__phoneInput___3GeR3 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 0 11px;
            max-width: 350px;
        }

        .styles__phoneNumberInput___2o9FG .styles__phoneInput___3GeR3.spectrum-Textfield {
            min-width: 110px;
        }

        .styles__phoneNumberInput___2o9FG .styles__phoneInput___3GeR3.spectrum-Textfield--quiet {
            padding: 0 11px 0 0;
        }

        .styles__phoneNumberInputContent___1KwzV {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -moz-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ .spectrum-Dropdown-trigger {
            border-color: #d7373f;
        }

        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ .spectrum-Dropdown-trigger.focus-ring {
            -webkit-box-shadow: 0 0 0 1px #d7373f;
            box-shadow: 0 0 0 1px #d7373f;
        }

        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger.is-selected,
        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:active,
        .styles__phoneNumberInputInvalid___12xej .styles__countrySelect___2JSvJ.spectrum-Dropdown--quiet .spectrum-Dropdown-trigger:focus {
            border-color: #d7373f;
            -webkit-box-shadow: 0 1px 0 #d7373f;
            box-shadow: 0 1px 0 #d7373f;
        }

        .styles__dropdownCountryName___1ht_j {
            margin-right: 5px;
        }

        .styles__flag___2g6U3 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -moz-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            position: relative;
            width: 19px;
            height: 11px;
            margin-right: 8px;
        }

        .styles__flagIcon___Nwa5M {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
        }

        .spectrum--light .spectrum-Textfield {
            background-color: #fff;
            border-color: #e1e1e1;
            color: #4b4b4b;
        }

        .spectrum--light .spectrum-Textfield::-webkit-input-placeholder {
            color: #8e8e8e;
        }

        .spectrum--light .spectrum-Textfield::-moz-placeholder {
            color: #8e8e8e;
        }

        .spectrum--light .spectrum-Textfield:-ms-input-placeholder {
            color: #8e8e8e;
        }

        .spectrum--light .spectrum-Textfield::-ms-input-placeholder {
            color: #8e8e8e;
        }

        .spectrum--light .spectrum-Textfield::placeholder {
            color: #8e8e8e;
        }

        .spectrum--light .spectrum-Textfield:hover {
            border-color: #cacaca;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--light .spectrum-Textfield:hover::-webkit-input-placeholder {
            color: #2c2c2c;
        }

        .spectrum--light .spectrum-Textfield:hover::-moz-placeholder {
            color: #2c2c2c;
        }

        .spectrum--light .spectrum-Textfield:hover:-ms-input-placeholder {
            color: #2c2c2c;
        }

        .spectrum--light .spectrum-Textfield:hover::-ms-input-placeholder {
            color: #2c2c2c;
        }

        .spectrum--light .spectrum-Textfield:hover::placeholder {
            color: #2c2c2c;
        }

        .spectrum--light .spectrum-Textfield:focus {
            border-color: #1473e6;
        }

        .spectrum--light .spectrum-Textfield.focus-ring:not(:active) {
            border-color: #2680eb;
            -webkit-box-shadow: 0 0 0 1px #2680eb;
            box-shadow: 0 0 0 1px #2680eb;
        }

        .spectrum--light .spectrum-Textfield[disabled] {
            background-color: #eaeaea;
            border-color: transparent;
            color: #b3b3b3;
            -webkit-text-fill-color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield[disabled]::-webkit-input-placeholder {
            color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield[disabled]::-moz-placeholder {
            color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield[disabled]:-ms-input-placeholder {
            color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield[disabled]::-ms-input-placeholder {
            color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield[disabled]::placeholder {
            color: #b3b3b3;
        }

        .spectrum--light .spectrum-Textfield.is-invalid,
        .spectrum--light .spectrum-Textfield:invalid {
            border-color: #d7373f;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='18' width='18'%3E%3Cpath d='M8.564 1.289L.2 16.256A.5.5 0 0 0 .636 17h16.728a.5.5 0 0 0 .5-.5.494.494 0 0 0-.064-.244L9.436 1.289a.5.5 0 0 0-.872 0zM10 14.75a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25zm0-3a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-6a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25z' fill='%23e34850'/%3E%3C/svg%3E");
        }

        .spectrum--light .spectrum-Textfield.is-invalid.focus-ring:not(:active),
        .spectrum--light .spectrum-Textfield:invalid.focus-ring:not(:active) {
            border-color: #d7373f;
            -webkit-box-shadow: 0 0 0 1px #d7373f;
            box-shadow: 0 0 0 1px #d7373f;
        }

        .spectrum--light .spectrum-Textfield.is-valid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='12' width='12'%3E%3Cpath d='M4.5 10a1.023 1.023 0 0 1-.8-.384l-2.488-3a1 1 0 0 1 1.577-1.233L4.5 7.376l4.712-5.991a1 1 0 1 1 1.576 1.23l-5.511 7A.977.977 0 0 1 4.5 10z' fill='%2312805c'/%3E%3C/svg%3E");
        }

        .spectrum--light .spectrum-Textfield--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: #e1e1e1;
        }

        .spectrum--light .spectrum-Textfield--quiet:hover {
            border-color: #cacaca;
        }

        .spectrum--light .spectrum-Textfield--quiet:active {
            border-color: #1473e6;
        }

        .spectrum--light .spectrum-Textfield--quiet:focus {
            border-color: #2680eb;
            -webkit-box-shadow: 0 1px 0 #2680eb;
            box-shadow: 0 1px 0 #2680eb;
        }

        .spectrum--light .spectrum-Textfield--quiet.focus-ring:not(:active) {
            border-color: #2680eb;
            -webkit-box-shadow: 0 1px 0 #2680eb;
            box-shadow: 0 1px 0 #2680eb;
        }

        .spectrum--light .spectrum-Textfield--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: #e1e1e1;
        }

        .spectrum--light .spectrum-Textfield--quiet.is-invalid,
        .spectrum--light .spectrum-Textfield--quiet:invalid {
            border-color: #d7373f;
        }

        .spectrum--light .spectrum-Textfield--quiet.is-invalid:focus,
        .spectrum--light .spectrum-Textfield--quiet:invalid:focus {
            -webkit-box-shadow: 0 1px 0 #d7373f;
            box-shadow: 0 1px 0 #d7373f;
        }

        .spectrum--light .spectrum-Textfield--quiet.is-invalid.focus-ring:not(:active),
        .spectrum--light .spectrum-Textfield--quiet:invalid.focus-ring:not(:active) {
            border-color: #d7373f;
            -webkit-box-shadow: 0 1px 0 #d7373f;
            box-shadow: 0 1px 0 #d7373f;
        }

        .spectrum--dark .spectrum-Textfield {
            background-color: #252525;
            border-color: #4a4a4a;
            color: #e3e3e3;
        }

        .spectrum--dark .spectrum-Textfield::-webkit-input-placeholder {
            color: #909090;
        }

        .spectrum--dark .spectrum-Textfield::-moz-placeholder {
            color: #909090;
        }

        .spectrum--dark .spectrum-Textfield:-ms-input-placeholder {
            color: #909090;
        }

        .spectrum--dark .spectrum-Textfield::-ms-input-placeholder {
            color: #909090;
        }

        .spectrum--dark .spectrum-Textfield::placeholder {
            color: #909090;
        }

        .spectrum--dark .spectrum-Textfield:hover {
            border-color: #5a5a5a;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spectrum--dark .spectrum-Textfield:hover::-webkit-input-placeholder {
            color: #fff;
        }

        .spectrum--dark .spectrum-Textfield:hover::-moz-placeholder {
            color: #fff;
        }

        .spectrum--dark .spectrum-Textfield:hover:-ms-input-placeholder {
            color: #fff;
        }

        .spectrum--dark .spectrum-Textfield:hover::-ms-input-placeholder {
            color: #fff;
        }

        .spectrum--dark .spectrum-Textfield:hover::placeholder {
            color: #fff;
        }

        .spectrum--dark .spectrum-Textfield:focus {
            border-color: #378ef0;
        }

        .spectrum--dark .spectrum-Textfield.focus-ring:not(:active) {
            border-color: #2680eb;
            -webkit-box-shadow: 0 0 0 1px #2680eb;
            box-shadow: 0 0 0 1px #2680eb;
        }

        .spectrum--dark .spectrum-Textfield[disabled] {
            background-color: #3e3e3e;
            border-color: transparent;
            color: #6e6e6e;
            -webkit-text-fill-color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield[disabled]::-webkit-input-placeholder {
            color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield[disabled]::-moz-placeholder {
            color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield[disabled]:-ms-input-placeholder {
            color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield[disabled]::-ms-input-placeholder {
            color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield[disabled]::placeholder {
            color: #6e6e6e;
        }

        .spectrum--dark .spectrum-Textfield.is-invalid,
        .spectrum--dark .spectrum-Textfield:invalid {
            border-color: #ec5b62;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='18' width='18'%3E%3Cpath d='M8.564 1.289L.2 16.256A.5.5 0 0 0 .636 17h16.728a.5.5 0 0 0 .5-.5.494.494 0 0 0-.064-.244L9.436 1.289a.5.5 0 0 0-.872 0zM10 14.75a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25zm0-3a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-6a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25z' fill='%23e34850'/%3E%3C/svg%3E");
        }

        .spectrum--dark .spectrum-Textfield.is-invalid.focus-ring:not(:active),
        .spectrum--dark .spectrum-Textfield:invalid.focus-ring:not(:active) {
            border-color: #ec5b62;
            -webkit-box-shadow: 0 0 0 1px #ec5b62;
            box-shadow: 0 0 0 1px #ec5b62;
        }

        .spectrum--dark .spectrum-Textfield.is-valid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' height='12' width='12'%3E%3Cpath d='M4.5 10a1.023 1.023 0 0 1-.8-.384l-2.488-3a1 1 0 0 1 1.577-1.233L4.5 7.376l4.712-5.991a1 1 0 1 1 1.576 1.23l-5.511 7A.977.977 0 0 1 4.5 10z' fill='%2339b990'/%3E%3C/svg%3E");
        }

        .spectrum--dark .spectrum-Textfield--quiet {
            background-color: rgba(0, 0, 0, 0);
            border-color: #4a4a4a;
        }

        .spectrum--dark .spectrum-Textfield--quiet:hover {
            border-color: #5a5a5a;
        }

        .spectrum--dark .spectrum-Textfield--quiet:active {
            border-color: #378ef0;
        }

        .spectrum--dark .spectrum-Textfield--quiet:focus {
            border-color: #2680eb;
            -webkit-box-shadow: 0 1px 0 #2680eb;
            box-shadow: 0 1px 0 #2680eb;
        }

        .spectrum--dark .spectrum-Textfield--quiet.focus-ring:not(:active) {
            border-color: #2680eb;
            -webkit-box-shadow: 0 1px 0 #2680eb;
            box-shadow: 0 1px 0 #2680eb;
        }

        .spectrum--dark .spectrum-Textfield--quiet:disabled {
            background-color: rgba(0, 0, 0, 0);
            border-color: #4a4a4a;
        }

        .spectrum--dark .spectrum-Textfield--quiet.is-invalid,
        .spectrum--dark .spectrum-Textfield--quiet:invalid {
            border-color: #ec5b62;
        }

        .spectrum--dark .spectrum-Textfield--quiet.is-invalid:focus,
        .spectrum--dark .spectrum-Textfield--quiet:invalid:focus {
            -webkit-box-shadow: 0 1px 0 #ec5b62;
            box-shadow: 0 1px 0 #ec5b62;
        }

        .spectrum--dark .spectrum-Textfield--quiet.is-invalid.focus-ring:not(:active),
        .spectrum--dark .spectrum-Textfield--quiet:invalid.focus-ring:not(:active) {
            border-color: #ec5b62;
            -webkit-box-shadow: 0 1px 0 #ec5b62;
            box-shadow: 0 1px 0 #ec5b62;
        }

        .spectrum-Textfield {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 4px;
            padding: 5px 11px 7px;
            text-indent: 0;
            min-width: 48px;
            height: 32px;
            width: 192px;
            vertical-align: top;
            margin: 0;
            overflow: visible;
            font-family: adobe-clean, Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Ubuntu, Trebuchet MS, Lucida Grande, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            -webkit-transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }

        .spectrum-Textfield::-webkit-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -webkit-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            opacity: 1;
        }

        .spectrum-Textfield::-moz-placeholder {
            font-weight: 400;
            font-style: italic;
            -moz-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            opacity: 1;
        }

        .spectrum-Textfield:-ms-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -ms-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            opacity: 1;
        }

        .spectrum-Textfield::placeholder {
            font-weight: 400;
            font-style: italic;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            opacity: 1;
        }

        .spectrum-Textfield::-ms-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -ms-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
            opacity: 1;
        }

        .spectrum-Textfield:lang(ja)::-webkit-input-placeholder,
        .spectrum-Textfield:lang(ko)::-webkit-input-placeholder,
        .spectrum-Textfield:lang(zh)::-webkit-input-placeholder {
            font-style: normal;
        }

        .spectrum-Textfield:lang(ja)::-moz-placeholder,
        .spectrum-Textfield:lang(ko)::-moz-placeholder,
        .spectrum-Textfield:lang(zh)::-moz-placeholder {
            font-style: normal;
        }

        .spectrum-Textfield:lang(ja):-ms-input-placeholder,
        .spectrum-Textfield:lang(ko):-ms-input-placeholder,
        .spectrum-Textfield:lang(zh):-ms-input-placeholder {
            font-style: normal;
        }

        .spectrum-Textfield:lang(ja)::placeholder,
        .spectrum-Textfield:lang(ko)::placeholder,
        .spectrum-Textfield:lang(zh)::placeholder {
            font-style: normal;
        }

        .spectrum-Textfield:lang(ja)::-ms-input-placeholder,
        .spectrum-Textfield:lang(ko)::-ms-input-placeholder,
        .spectrum-Textfield:lang(zh)::-ms-input-placeholder {
            font-style: normal;
        }

        .spectrum-Textfield:hover::-webkit-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:hover::-moz-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:hover:-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:hover::-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:hover::placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:disabled {
            resize: none;
            opacity: 1;
        }

        .spectrum-Textfield:disabled::-webkit-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:disabled::-moz-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:disabled:-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:disabled::-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield:disabled::placeholder {
            font-weight: 400;
        }

        .spectrum-Textfield::-ms-clear {
            width: 0;
            height: 0;
        }

        .spectrum-Textfield::-webkit-inner-spin-button,
        .spectrum-Textfield::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .spectrum-Textfield:-moz-ui-invalid {
            box-shadow: none;
        }

        .spectrum-Textfield.is-invalid,
        .spectrum-Textfield.is-valid,
        .spectrum-Textfield:invalid {
            background-repeat: no-repeat;
        }

        .spectrum-Textfield.is-invalid,
        .spectrum-Textfield:invalid {
            background-size: 18px 18px;
            background-position: -webkit-calc(100% - 11px) 6px;
            background-position: calc(100% - 11px) 6px;
            padding-right: 41px;
        }

        .spectrum-Textfield.is-valid {
            background-size: 12px 12px;
            background-position: -webkit-calc(100% - 11px) 10px;
            background-position: calc(100% - 11px) 10px;
            padding-right: 35px;
        }

        .spectrum-Textfield--multiline {
            height: auto;
            min-height: 56px;
            padding: 5px 11px 8px;
            overflow: auto;
        }

        .spectrum-Textfield--quiet {
            border-radius: 0;
            border-width: 0 0 1px;
            padding-left: 0;
            padding-right: 0;
            resize: none;
            overflow-y: hidden;
        }

        .spectrum-Textfield--quiet.is-invalid,
        .spectrum-Textfield--quiet.is-valid,
        .spectrum-Textfield--quiet:invalid {
            background-position: 100% 50%;
        }

        .spectrum-Textfield--quiet.spectrum-Textfield--multiline {
            height: 32px;
            min-height: 32px;
        }

        .spectrum--large .spectrum-Textfield {
            border: 1px solid;
            border-radius: 5px;
            padding: 7px 14px 9px;
            min-width: 60px;
            height: 40px;
            width: 240px;
            font-family: adobe-clean, Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Ubuntu, Trebuchet MS, Lucida Grande, sans-serif;
            font-size: 17px;
            line-height: 1.5;
            -webkit-transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
            -o-transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out;
            transition: border-color 0.13s ease-in-out, box-shadow 0.13s ease-in-out, -webkit-box-shadow 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield::-webkit-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -webkit-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield::-moz-placeholder {
            font-weight: 400;
            font-style: italic;
            -moz-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield:-ms-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -ms-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield::placeholder {
            font-weight: 400;
            font-style: italic;
            -webkit-transition: color 0.13s ease-in-out;
            -o-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield::-ms-input-placeholder {
            font-weight: 400;
            font-style: italic;
            -ms-transition: color 0.13s ease-in-out;
            transition: color 0.13s ease-in-out;
        }

        .spectrum--large .spectrum-Textfield:hover::-webkit-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:hover::-moz-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:hover:-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:hover::-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:hover::placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:disabled::-webkit-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:disabled::-moz-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:disabled:-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:disabled::-ms-input-placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield:disabled::placeholder {
            font-weight: 400;
        }

        .spectrum--large .spectrum-Textfield.is-invalid,
        .spectrum--large .spectrum-Textfield:invalid {
            background-size: 22px 22px;
            background-position: -webkit-calc(100% - 14px) 8px;
            background-position: calc(100% - 14px) 8px;
            padding-right: 51px;
        }

        .spectrum--large .spectrum-Textfield.is-valid {
            background-size: 16px 16px;
            background-position: -webkit-calc(100% - 14px) 12px;
            background-position: calc(100% - 14px) 12px;
            padding-right: 45px;
        }

        .spectrum--large .spectrum-Textfield--multiline {
            height: auto;
            min-height: 70px;
            padding: 7px 14px 10px;
        }

        .spectrum--large .spectrum-Textfield--quiet {
            border-radius: 0;
            border-width: 0 0 1px;
            padding-left: 0;
            padding-right: 0;
        }

        .spectrum--large .spectrum-Textfield--quiet.is-invalid,
        .spectrum--large .spectrum-Textfield--quiet.is-valid,
        .spectrum--large .spectrum-Textfield--quiet:invalid {
            background-position: 100% 50%;
        }

        .spectrum--large .spectrum-Textfield--quiet.spectrum-Textfield--multiline {
            height: 40px;
            min-height: 40px;
        }

        .PP-UpdatePrimaryEmail__description {
            font-size: 18px;
            margin-bottom: 28px;
        }

        .PP-UpdatePrimaryEmail__email-field .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PP-UpdatePrimaryEmail__email-field .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PP-UpdatePrimaryEmail__email-field .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PP-UpdatePrimaryEmail__email-field .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PP-ExternalProgressiveProfile iframe {
            border: 0;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -moz-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .PP-ExternalProgressiveProfile__frame {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .PP-ExternalProgressiveProfile .CardLayout .Card__overlay {
            background: #fff;
        }

        noscript:not(:empty)~.CardLayout {
            cursor: not-allowed;
        }

        noscript:not(:empty)~.CardLayout .CardLayout__content {
            pointer-events: none;
        }

        .spectrum--darkest .CardLayout {
            background: #080808;
        }

        .spectrum--darkest .CardLayout__footer--with-separator {
            border-top: 1px solid #393939;
        }

        .spectrum--darkest .CardLayout .Card__overlay {
            background: rgba(0, 0, 0, 0.8);
        }

        .CardLayout .Context {
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -moz-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
        }

        .CardLayout--toaster-open {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .CardLayout__header h2,
        .CardLayout__header h3,
        .CardLayout__header h4,
        .CardLayout__header h5 {
            margin: 0;
        }

        .CardLayout__toasters {
            margin-left: -17px;
            margin-right: -16px;
            position: relative;
        }

        .CardLayout__toaster .spectrum-Toast {
            border-radius: 0;
            width: 100%;
        }

        .CardLayout__content--full-width {
            margin: 0 -16px;
        }

        .CardLayout__footer {
            margin-top: 20px;
        }

        .CardLayout__footer--with-separator {
            border-top: 1px solid #eaeaea;
        }

        .CardLayout__footer-link-list {
            list-style: none;
            padding: 0;
        }

        .CardLayout__overlay {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background: hsla(0, 0%, 100%, 0.92);
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            border-radius: 4px;
            z-index: 9001;
        }

        .CardLayout__actions {
            position: relative;
            top: 30px;
        }

        .spectrum--darkest .PasswordChange__account-not-found-separator,
        .spectrum--darkest .PasswordChange__instructions {
            color: #a2a2a2;
        }

        .PasswordChange-Update .PasswordChange-Update__reset-password-btn {
            margin-top: 16px;
            text-align: right;
            min-height: 0;
        }

        .PasswordChange-ChooseAuth__profile {
            margin: 24px 0 32px;
        }

        .PasswordChange-ChooseAuth__reset-password-btn {
            margin-top: 16px;
            text-align: right;
            min-height: 0;
        }

        .PasswordChange__separator {
            margin-bottom: 10px;
        }

        .PasswordChange-MFAContent__content {
            width: -webkit-calc(100% - 76px);
            width: calc(100% - 76px);
            text-align: left;
            font-size: 0.9em;
        }

        .PasswordChange-MFAContent__icon {
            max-height: 36px;
            max-width: 36px;
            padding-left: 30px;
        }

        .PasswordChange-MFAContent__container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px 0 0 10px;
        }

        .PasswordChange .CardLayout__content {
            margin-top: 32px;
        }

        .PasswordChange__instructions {
            color: #505050;
            font-size: 16px;
            font-weight: 400;
            line-height: 27px;
            margin: 8px 0 0;
        }

        .PasswordChange__email-field.form-group {
            margin: 32px 0 21px;
        }

        .PasswordChange__email-field.form-group .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PasswordChange__email-field.form-group .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PasswordChange__email-field.form-group .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .PasswordChange__email-field.form-group .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .PasswordChange__submit {
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .PasswordChange__account-not-found-separator {
            color: #505050;
        }

        .PasswordChange-Toast .spectrum-Toast-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            white-space: pre-wrap;
        }

        .PasswordChange-Toast--class-code .spectrum-Link {
            text-decoration: underline;
        }

        .PasswordChange-Toast--class-code .spectrum-Link,
        .PasswordChange-Toast--class-code .spectrum-Link:active,
        .PasswordChange-Toast--class-code .spectrum-Link:focus,
        .PasswordChange-Toast--class-code .spectrum-Link:hover,
        .PasswordChange-Toast--class-code .spectrum-Link:visited {
            color: #fff;
        }

        .PasswordChange-Toast__support-link.spectrum-Link {
            text-decoration: none;
            margin-left: auto;
        }

        .PasswordChange-Toast__support-link.spectrum-Link,
        .PasswordChange-Toast__support-link.spectrum-Link:active,
        .PasswordChange-Toast__support-link.spectrum-Link:focus,
        .PasswordChange-Toast__support-link.spectrum-Link:hover,
        .PasswordChange-Toast__support-link.spectrum-Link:visited {
            color: #fff;
        }

        @media screen and (min-width: 510px) {
            .CardLayout__toaster .spectrum-Toast {
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }
        }

        @media screen and (min-width: 510px) and (min-height: 900px) {
            .CardLayout__toasters {
                left: 0;
                margin: 0;
                right: 0;
            }
        }

        @media screen and (min-width: 510px) and (max-height: 900px) {
            .CardLayout__toasters {
                margin: 0;
            }
        }

        @media screen and (min-width: 768px) {
            .CardLayout__content--full-width {
                margin: 0 -56px;
            }

            .PasswordChange-MFAContent__container {
                padding: 10px 0 0 10px;
            }
        }

        .PasswordlessApprovedPage .Card__overlay {
            background: hsla(0, 0%, 100%, 0);
            height: 100vh;
        }

        @media screen and (min-width: 768px) {
            .PasswordlessApprovedPage .Card__overlay {
                height: auto;
            }
        }

        .PasswordlessOptIn__heading {
            font-size: 36px;
        }

        .PasswordlessOptIn__gif {
            overflow: hidden;
        }

        .PasswordlessOptIn__gif-img {
            width: 398px;
            height: 130px;
        }

        .PasswordlessOptIn__description {
            font-size: 16px;
            overflow: hidden;
        }

        .PasswordlessOptIn__download-text {
            font-weight: 700;
            overflow: hidden;
            font-size: 14px;
        }

        .PasswordlessOptIn__app-store__icon-img {
            width: 120px;
            height: 40px;
        }

        .PasswordlessOptIn__google-play__icon-img {
            width: 135px;
            height: 40px;
        }

        .PasswordlessOptIn__continue {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        @media screen and (max-width: 343px) {
            .PasswordlessOptIn__heading {
                font-size: 22px;
            }

            .PasswordlessOptIn .CardLayout__footer {
                margin-top: 5px;
            }

            .PasswordlessOptIn__description {
                font-size: 14px;
            }

            .PasswordlessOptIn__download-text {
                font-size: 10px;
            }

            .PasswordlessOptIn__app-store__icon-img {
                width: 105px;
                height: 35px;
            }

            .PasswordlessOptIn__google-play__icon-img {
                width: 118px;
                height: 35px;
            }
        }

        @media screen and (min-width: 344px) and (max-width: 413px) {
            .PasswordlessOptIn__heading {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 284px) {
            .PasswordlessOptIn__gif-img {
                width: 245px;
                height: 93px;
            }
        }

        @media screen and (min-width: 285px) and (max-width: 343px) {
            .PasswordlessOptIn__gif-img {
                width: 283px;
                height: 110px;
            }
        }

        @media screen and (min-width: 344px) and (max-width: 767px) {
            .PasswordlessOptIn__gif-img {
                width: 344px;
            }
        }

        @media screen and (max-width: 767px) and (max-height: 699px) {
            .PasswordlessOptIn__continue {
                margin-top: 8px;
                margin-bottom: 16px;
            }
        }

        .PP-OrgPolicyChange__list {
            padding-left: 15px;
        }

        .PP-OrgPolicyChange__list-item {
            font-style: italic;
        }

        .PP-OrgPolicyChange__separator {
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: 1px solid #eaeaea;
        }

        .spectrum--darkest .PP-OrgPolicyChange__separator {
            border-top: 1px solid #393939;
        }

        .FindYourAccountPage .FindYourAccountPage-EmailOrPhoneField {
            font-size: 14px;
        }

        .FindYourAccountSimilarMatch .FindYourAccountSimilarMatch-SimilarEmail {
            display: block;
            font-style: italic;
        }

        .FindYourAccountSimilarMatch .description-big>p {
            border-bottom: 1px solid #eaeaea;
        }

        .CheckSentDetailsPage .CheckSentDetailsPage-HelpLink {
            font-weight: 400;
        }

        .PrimaryEmailAccountFound__profile {
            margin: 24px 0 0;
        }

        .RetrieveAccount__profile {
            margin-top: 20px;
        }

        .SignInGetHelpPage__description {
            font-size: 17px;
            margin: 0;
        }

        .SignInGetHelpPage__chooser {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .SimpleEmailPage__email-field .spectrum-Textfield :not(.is-valid):valid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SimpleEmailPage__email-field .spectrum-Textfield :not(.is-valid):focus:valid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .SimpleEmailPage__email-field .spectrum-Textfield:not(.is-invalid):invalid {
            background-image: none;
            border-color: #eaeaea;
        }

        .SimpleEmailPage__email-field .spectrum-Textfield:not(.is-invalid):focus:invalid {
            border-color: #378ef0;
            -webkit-box-shadow: 0 1px 0 #378ef0;
            box-shadow: 0 1px 0 #378ef0;
        }

        .Route {
            position: relative;
        }

        .Route__Component--enter {
            opacity: 0;
            -webkit-transform: translate3d(80px, 0, 0);
            transform: translate3d(80px, 0, 0);
        }

        .Route__Component--enterActive {
            -webkit-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            -o-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
        }

        .Route__Component--enterActive,
        .Route__Component--exit {
            opacity: 1;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        .Route__Component--exitActive {
            opacity: 0;
            position: absolute;
            top: 0;
            -webkit-transform: translate3d(-80px, 0, 0);
            transform: translate3d(-80px, 0, 0);
            -webkit-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            -o-transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            transition: opacity 0.3s cubic-bezier(0, 0, 0.4, 1), transform 0.3s cubic-bezier(0, 0, 0.4, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.4, 1);
            z-index: 1;
        }

        h2 {
            margin-top: 0;
        }

        .spectrum .spectrum-Icon {
            vertical-align: middle;
        }

        .spectrum .spectrum-Textfield {
            width: 100%;
        }

        .spectrum .spectrum-Textfield.is-invalid,
        .spectrum .spectrum-Textfield.is-valid,
        .spectrum .spectrum-Textfield:invalid {
            background-position: 99% 50%;
        }

        .spectrum .spectrum-Textfield.is-invalid+span:not(.PasswordField__input-border),
        .spectrum .spectrum-Textfield.is-valid+span:not(.PasswordField__input-border),
        .spectrum .spectrum-Textfield:invalid+span:not(.PasswordField__input-border) {
            left: -webkit-calc(100% - 45px) !important;
            left: calc(100% - 45px) !important;
        }

        .spectrum .spectrum--lightest .spectrum-Button--secondary.focus-ring {
            background-color: #747474;
            border-color: #747474;
            color: #fff;
        }

        .d-flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
        }

        .ta-right {
            text-align: right;
        }

        .ta-left {
            text-align: left;
        }

        .fs-larger {
            font-size: larger;
        }

        .fs-smaller {
            font-size: smaller;
        }

        .description-big {
            font-size: 18px;
            margin-top: 12px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

        .spectrum-Button:last-child {
            margin-right: 0;
        }

        .form-group--hidden,
        .mod-hide-visually {
            background: rgba(0, 0, 0, 0);
            border: 0;
            bottom: 0;
            height: 0 !important;
            outline: 0;
            overflow: hidden;
            position: fixed;
            right: 0;
            width: 0 !important;
        }

        .credential-hide-helper {
            margin: -1px 0 0;
            padding: 0;
            height: 1px;
            overflow: hidden;
            visibility: hidden;
        }

        .mod-nomargin {
            margin: 0;
        }

        .mod-switch-lh {
            line-height: 40px;
        }

        .mod-bot-spaced {
            margin-bottom: 32px;
        }

        .mod-top-spaced {
            margin-top: 32px;
        }

        .mod-right-spaced {
            margin-right: 16px;
        }

        .mod-raise-label>.spectrum-Checkbox-label {
            z-index: 1;
        }

        .mod-font-bold {
            font-weight: 700;
        }

        .InlineError.mod-error-label,
        .spectrum-FieldLabel.mod-error-label {
            color: #d7373f;
            font-size: 14px;
        }

        .InlineError.mod-info-label,
        .spectrum-FieldLabel.mod-info-label {
            color: #bd640d;
            font-size: 14px;
        }

        .spectrum-Link.mod-toaster-error-links {
            text-decoration: underline;
        }

        .spectrum-Link.mod-toaster-error-links,
        .spectrum-Link.mod-toaster-error-links:active,
        .spectrum-Link.mod-toaster-error-links:focus,
        .spectrum-Link.mod-toaster-error-links:hover,
        .spectrum-Link.mod-toaster-error-links:visited {
            color: #fff;
        }

        .full-width {
            width: 100%;
        }

        .color-red {
            color: #d7373f;
        }

        .color-green {
            color: #12805c;
        }

        .spectrum .spectrum-Textfield {
            font-size: 16px;
            line-height: 1.15;
        }

        .form-group {
            margin: 15px 0;
            min-height: 69px;
            position: relative;
        }

        .form-group:first-child {
            margin-top: 0;
        }

        .form-group--hidden {
            margin: 0;
            min-height: 0;
        }

        .form-group .spectrum-FieldLabel {
            padding-bottom: 0;
            padding-top: 0;
        }

        .form-group .spectrum-FieldButton {
            height: 28px;
        }

        .form-group .InlineError.spectrum-FieldLabel {
            padding-top: 8px;
        }

        .form-group .spectrum-Textfield {
            height: 28px;
            padding-bottom: 0;
            padding-top: 0;
        }

        .form-group .spectrum-Dropdown-icon {
            margin-bottom: 9px;
            margin-top: 12px;
        }

        .form-group .spectrum-Dropdown .spectrum-UIIcon-ChevronDownMedium {
            height: 9px;
            width: 13px;
        }

        .spectrum-Link.focus-ring {
            -webkit-text-decoration-style: solid;
            -moz-text-decoration-style: solid;
            text-decoration-style: solid;
        }

        .spectrum-Menu,
        .spectrum-Popover {
            -webkit-overflow-scrolling: touch;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-webkit-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-moz-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:hover:-ms-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:hover::-ms-input-placeholder {
            color: #959595;
        }

        .spectrum--lightest .spectrum-Textfield:hover::placeholder {
            color: #959595;
        }

        .spectrum-ToggleSwitch .spectrum-ToggleSwitch-switch:after {
            border-color: #464646;
        }

        .spectrum-Checkbox .spectrum-Checkbox-box {
            border-color: #464646;
        }

        @media (min-width: 304px) {
            .m-xs-0 {
                margin: 0 !important;
            }

            .mt-xs-0,
            .my-xs-0 {
                margin-top: 0 !important;
            }

            .mr-xs-0,
            .mx-xs-0 {
                margin-right: 0 !important;
            }

            .mb-xs-0,
            .my-xs-0 {
                margin-bottom: 0 !important;
            }

            .ml-xs-0,
            .mx-xs-0 {
                margin-left: 0 !important;
            }

            .m-xs-1 {
                margin: 8px !important;
            }

            .mt-xs-1,
            .my-xs-1 {
                margin-top: 8px !important;
            }

            .mr-xs-1,
            .mx-xs-1 {
                margin-right: 8px !important;
            }

            .my-xs-1 {
                margin-bottom: 8px !important;
            }

            .ml-xs-1,
            .mx-xs-1 {
                margin-left: 8px !important;
            }

            .m-xs-2 {
                margin: 16px !important;
            }

            .my-xs-2 {
                margin-top: 16px !important;
            }

            .mr-xs-2,
            .mx-xs-2 {
                margin-right: 16px !important;
            }

            .mb-xs-2,
            .my-xs-2 {
                margin-bottom: 16px !important;
            }

            .ml-xs-2,
            .mx-xs-2 {
                margin-left: 16px !important;
            }

            .m-xs-3 {
                margin: 24px !important;
            }

            .mt-xs-3,
            .my-xs-3 {
                margin-top: 24px !important;
            }

            .mr-xs-3,
            .mx-xs-3 {
                margin-right: 24px !important;
            }

            .mb-xs-3,
            .my-xs-3 {
                margin-bottom: 24px !important;
            }

            .ml-xs-3,
            .mx-xs-3 {
                margin-left: 24px !important;
            }

            .m-xs-4 {
                margin: 32px !important;
            }

            .mt-xs-4,
            .my-xs-4 {
                margin-top: 32px !important;
            }

            .mr-xs-4,
            .mx-xs-4 {
                margin-right: 32px !important;
            }

            .mb-xs-4,
            .my-xs-4 {
                margin-bottom: 32px !important;
            }

            .ml-xs-4,
            .mx-xs-4 {
                margin-left: 32px !important;
            }

            .m-xs-5 {
                margin: 40px !important;
            }

            .mt-xs-5,
            .my-xs-5 {
                margin-top: 40px !important;
            }

            .mr-xs-5,
            .mx-xs-5 {
                margin-right: 40px !important;
            }

            .mb-xs-5,
            .my-xs-5 {
                margin-bottom: 40px !important;
            }

            .ml-xs-5,
            .mx-xs-5 {
                margin-left: 40px !important;
            }

            .p-xs-0 {
                padding: 0 !important;
            }

            .pt-xs-0,
            .py-xs-0 {
                padding-top: 0 !important;
            }

            .pr-xs-0,
            .px-xs-0 {
                padding-right: 0 !important;
            }

            .pb-xs-0,
            .py-xs-0 {
                padding-bottom: 0 !important;
            }

            .pl-xs-0,
            .px-xs-0 {
                padding-left: 0 !important;
            }

            .p-xs-1 {
                padding: 8px !important;
            }

            .pt-xs-1,
            .py-xs-1 {
                padding-top: 8px !important;
            }

            .pr-xs-1,
            .px-xs-1 {
                padding-right: 8px !important;
            }

            .pb-xs-1,
            .py-xs-1 {
                padding-bottom: 8px !important;
            }

            .pl-xs-1,
            .px-xs-1 {
                padding-left: 8px !important;
            }

            .p-xs-2 {
                padding: 16px !important;
            }

            .pt-xs-2,
            .py-xs-2 {
                padding-top: 16px !important;
            }

            .pr-xs-2,
            .px-xs-2 {
                padding-right: 16px !important;
            }

            .pb-xs-2,
            .py-xs-2 {
                padding-bottom: 16px !important;
            }

            .pl-xs-2,
            .px-xs-2 {
                padding-left: 16px !important;
            }

            .p-xs-3 {
                padding: 24px !important;
            }

            .pt-xs-3,
            .py-xs-3 {
                padding-top: 24px !important;
            }

            .pr-xs-3,
            .px-xs-3 {
                padding-right: 24px !important;
            }

            .pb-xs-3,
            .py-xs-3 {
                padding-bottom: 24px !important;
            }

            .pl-xs-3,
            .px-xs-3 {
                padding-left: 24px !important;
            }

            .p-xs-4 {
                padding: 32px !important;
            }

            .pt-xs-4,
            .py-xs-4 {
                padding-top: 32px !important;
            }

            .pr-xs-4,
            .px-xs-4 {
                padding-right: 32px !important;
            }

            .pb-xs-4,
            .py-xs-4 {
                padding-bottom: 32px !important;
            }

            .pl-xs-4,
            .px-xs-4 {
                padding-left: 32px !important;
            }

            .p-xs-5 {
                padding: 40px !important;
            }

            .pt-xs-5,
            .py-xs-5 {
                padding-top: 40px !important;
            }

            .pr-xs-5,
            .px-xs-5 {
                padding-right: 40px !important;
            }

            .pb-xs-5,
            .py-xs-5 {
                padding-bottom: 40px !important;
            }

            .pl-xs-5,
            .px-xs-5 {
                padding-left: 40px !important;
            }
        }

        @media (min-width: 768px) {
            .m-sm-0 {
                margin: 0 !important;
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important;
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important;
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important;
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important;
            }

            .m-sm-1 {
                margin: 8px !important;
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: 8px !important;
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: 8px !important;
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: 8px !important;
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: 8px !important;
            }

            .m-sm-2 {
                margin: 16px !important;
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: 16px !important;
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: 16px !important;
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: 16px !important;
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: 16px !important;
            }

            .m-sm-3 {
                margin: 24px !important;
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 24px !important;
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 24px !important;
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 24px !important;
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 24px !important;
            }

            .m-sm-4 {
                margin: 32px !important;
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 32px !important;
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 32px !important;
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 32px !important;
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 32px !important;
            }

            .m-sm-5 {
                margin: 40px !important;
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 40px !important;
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 40px !important;
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 40px !important;
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 40px !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important;
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important;
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important;
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important;
            }

            .p-sm-1 {
                padding: 8px !important;
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: 8px !important;
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: 8px !important;
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: 8px !important;
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: 8px !important;
            }

            .p-sm-2 {
                padding: 16px !important;
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: 16px !important;
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: 16px !important;
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: 16px !important;
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: 16px !important;
            }

            .p-sm-3 {
                padding: 24px !important;
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 24px !important;
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 24px !important;
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 24px !important;
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 24px !important;
            }

            .p-sm-4 {
                padding: 32px !important;
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 32px !important;
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 32px !important;
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 32px !important;
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 32px !important;
            }

            .p-sm-5 {
                padding: 40px !important;
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 40px !important;
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 40px !important;
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 40px !important;
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 40px !important;
            }
        }

        @media (min-width: 1024px) {
            .m-ipad-0 {
                margin: 0 !important;
            }

            .mt-ipad-0,
            .my-ipad-0 {
                margin-top: 0 !important;
            }

            .mr-ipad-0,
            .mx-ipad-0 {
                margin-right: 0 !important;
            }

            .mb-ipad-0,
            .my-ipad-0 {
                margin-bottom: 0 !important;
            }

            .ml-ipad-0,
            .mx-ipad-0 {
                margin-left: 0 !important;
            }

            .m-ipad-1 {
                margin: 8px !important;
            }

            .mt-ipad-1,
            .my-ipad-1 {
                margin-top: 8px !important;
            }

            .mr-ipad-1,
            .mx-ipad-1 {
                margin-right: 8px !important;
            }

            .mb-ipad-1,
            .my-ipad-1 {
                margin-bottom: 8px !important;
            }

            .ml-ipad-1,
            .mx-ipad-1 {
                margin-left: 8px !important;
            }

            .m-ipad-2 {
                margin: 16px !important;
            }

            .mt-ipad-2,
            .my-ipad-2 {
                margin-top: 16px !important;
            }

            .mr-ipad-2,
            .mx-ipad-2 {
                margin-right: 16px !important;
            }

            .mb-ipad-2,
            .my-ipad-2 {
                margin-bottom: 16px !important;
            }

            .ml-ipad-2,
            .mx-ipad-2 {
                margin-left: 16px !important;
            }

            .m-ipad-3 {
                margin: 24px !important;
            }

            .mt-ipad-3,
            .my-ipad-3 {
                margin-top: 24px !important;
            }

            .mr-ipad-3,
            .mx-ipad-3 {
                margin-right: 24px !important;
            }

            .mb-ipad-3,
            .my-ipad-3 {
                margin-bottom: 24px !important;
            }

            .ml-ipad-3,
            .mx-ipad-3 {
                margin-left: 24px !important;
            }

            .m-ipad-4 {
                margin: 32px !important;
            }

            .mt-ipad-4,
            .my-ipad-4 {
                margin-top: 32px !important;
            }

            .mr-ipad-4,
            .mx-ipad-4 {
                margin-right: 32px !important;
            }

            .mb-ipad-4,
            .my-ipad-4 {
                margin-bottom: 32px !important;
            }

            .ml-ipad-4,
            .mx-ipad-4 {
                margin-left: 32px !important;
            }

            .m-ipad-5 {
                margin: 40px !important;
            }

            .mt-ipad-5,
            .my-ipad-5 {
                margin-top: 40px !important;
            }

            .mr-ipad-5,
            .mx-ipad-5 {
                margin-right: 40px !important;
            }

            .mb-ipad-5,
            .my-ipad-5 {
                margin-bottom: 40px !important;
            }

            .ml-ipad-5,
            .mx-ipad-5 {
                margin-left: 40px !important;
            }

            .p-ipad-0 {
                padding: 0 !important;
            }

            .pt-ipad-0,
            .py-ipad-0 {
                padding-top: 0 !important;
            }

            .pr-ipad-0,
            .px-ipad-0 {
                padding-right: 0 !important;
            }

            .pb-ipad-0,
            .py-ipad-0 {
                padding-bottom: 0 !important;
            }

            .pl-ipad-0,
            .px-ipad-0 {
                padding-left: 0 !important;
            }

            .p-ipad-1 {
                padding: 8px !important;
            }

            .pt-ipad-1,
            .py-ipad-1 {
                padding-top: 8px !important;
            }

            .pr-ipad-1,
            .px-ipad-1 {
                padding-right: 8px !important;
            }

            .pb-ipad-1,
            .py-ipad-1 {
                padding-bottom: 8px !important;
            }

            .pl-ipad-1,
            .px-ipad-1 {
                padding-left: 8px !important;
            }

            .p-ipad-2 {
                padding: 16px !important;
            }

            .pt-ipad-2,
            .py-ipad-2 {
                padding-top: 16px !important;
            }

            .pr-ipad-2,
            .px-ipad-2 {
                padding-right: 16px !important;
            }

            .pb-ipad-2,
            .py-ipad-2 {
                padding-bottom: 16px !important;
            }

            .pl-ipad-2,
            .px-ipad-2 {
                padding-left: 16px !important;
            }

            .p-ipad-3 {
                padding: 24px !important;
            }

            .pt-ipad-3,
            .py-ipad-3 {
                padding-top: 24px !important;
            }

            .pr-ipad-3,
            .px-ipad-3 {
                padding-right: 24px !important;
            }

            .pb-ipad-3,
            .py-ipad-3 {
                padding-bottom: 24px !important;
            }

            .pl-ipad-3,
            .px-ipad-3 {
                padding-left: 24px !important;
            }

            .p-ipad-4 {
                padding: 32px !important;
            }

            .pt-ipad-4,
            .py-ipad-4 {
                padding-top: 32px !important;
            }

            .pr-ipad-4,
            .px-ipad-4 {
                padding-right: 32px !important;
            }

            .pb-ipad-4,
            .py-ipad-4 {
                padding-bottom: 32px !important;
            }

            .pl-ipad-4,
            .px-ipad-4 {
                padding-left: 32px !important;
            }

            .p-ipad-5 {
                padding: 40px !important;
            }

            .pt-ipad-5,
            .py-ipad-5 {
                padding-top: 40px !important;
            }

            .pr-ipad-5,
            .px-ipad-5 {
                padding-right: 40px !important;
            }

            .pb-ipad-5,
            .py-ipad-5 {
                padding-bottom: 40px !important;
            }

            .pl-ipad-5,
            .px-ipad-5 {
                padding-left: 40px !important;
            }
        }

        @media (min-width: 1280px) {
            .m-md-0 {
                margin: 0 !important;
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important;
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important;
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important;
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important;
            }

            .m-md-1 {
                margin: 8px !important;
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: 8px !important;
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: 8px !important;
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: 8px !important;
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: 8px !important;
            }

            .m-md-2 {
                margin: 16px !important;
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: 16px !important;
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: 16px !important;
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: 16px !important;
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: 16px !important;
            }

            .m-md-3 {
                margin: 24px !important;
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 24px !important;
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 24px !important;
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 24px !important;
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 24px !important;
            }

            .m-md-4 {
                margin: 32px !important;
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 32px !important;
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 32px !important;
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 32px !important;
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 32px !important;
            }

            .m-md-5 {
                margin: 40px !important;
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 40px !important;
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 40px !important;
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 40px !important;
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 40px !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important;
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important;
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important;
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important;
            }

            .p-md-1 {
                padding: 8px !important;
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: 8px !important;
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: 8px !important;
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: 8px !important;
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: 8px !important;
            }

            .p-md-2 {
                padding: 16px !important;
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: 16px !important;
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: 16px !important;
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: 16px !important;
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: 16px !important;
            }

            .p-md-3 {
                padding: 24px !important;
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 24px !important;
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 24px !important;
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 24px !important;
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 24px !important;
            }

            .p-md-4 {
                padding: 32px !important;
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 32px !important;
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 32px !important;
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 32px !important;
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 32px !important;
            }

            .p-md-5 {
                padding: 40px !important;
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 40px !important;
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 40px !important;
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 40px !important;
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 40px !important;
            }
        }

        @media (min-width: 1768px) {
            .m-lg-0 {
                margin: 0 !important;
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important;
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important;
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important;
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important;
            }

            .m-lg-1 {
                margin: 8px !important;
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: 8px !important;
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: 8px !important;
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: 8px !important;
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: 8px !important;
            }

            .m-lg-2 {
                margin: 16px !important;
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: 16px !important;
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: 16px !important;
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: 16px !important;
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: 16px !important;
            }

            .m-lg-3 {
                margin: 24px !important;
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 24px !important;
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 24px !important;
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 24px !important;
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 24px !important;
            }

            .m-lg-4 {
                margin: 32px !important;
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 32px !important;
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 32px !important;
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 32px !important;
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 32px !important;
            }

            .m-lg-5 {
                margin: 40px !important;
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 40px !important;
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 40px !important;
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 40px !important;
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 40px !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important;
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important;
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important;
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important;
            }

            .p-lg-1 {
                padding: 8px !important;
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: 8px !important;
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: 8px !important;
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: 8px !important;
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: 8px !important;
            }

            .p-lg-2 {
                padding: 16px !important;
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: 16px !important;
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: 16px !important;
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: 16px !important;
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: 16px !important;
            }

            .p-lg-3 {
                padding: 24px !important;
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 24px !important;
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 24px !important;
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 24px !important;
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 24px !important;
            }

            .p-lg-4 {
                padding: 32px !important;
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 32px !important;
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 32px !important;
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 32px !important;
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 32px !important;
            }

            .p-lg-5 {
                padding: 40px !important;
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 40px !important;
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 40px !important;
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 40px !important;
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 40px !important;
            }
        }

        @media (min-width: 2160px) {
            .m-xl-0 {
                margin: 0 !important;
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important;
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important;
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important;
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important;
            }

            .m-xl-1 {
                margin: 8px !important;
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: 8px !important;
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: 8px !important;
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: 8px !important;
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: 8px !important;
            }

            .m-xl-2 {
                margin: 16px !important;
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: 16px !important;
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: 16px !important;
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: 16px !important;
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: 16px !important;
            }

            .m-xl-3 {
                margin: 24px !important;
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 24px !important;
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 24px !important;
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 24px !important;
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 24px !important;
            }

            .m-xl-4 {
                margin: 32px !important;
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 32px !important;
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 32px !important;
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 32px !important;
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 32px !important;
            }

            .m-xl-5 {
                margin: 40px !important;
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 40px !important;
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 40px !important;
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 40px !important;
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 40px !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important;
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important;
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important;
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important;
            }

            .p-xl-1 {
                padding: 8px !important;
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: 8px !important;
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: 8px !important;
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: 8px !important;
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: 8px !important;
            }

            .p-xl-2 {
                padding: 16px !important;
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: 16px !important;
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: 16px !important;
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: 16px !important;
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: 16px !important;
            }

            .p-xl-3 {
                padding: 24px !important;
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 24px !important;
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 24px !important;
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 24px !important;
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 24px !important;
            }

            .p-xl-4 {
                padding: 32px !important;
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 32px !important;
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 32px !important;
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 32px !important;
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 32px !important;
            }

            .p-xl-5 {
                padding: 40px !important;
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 40px !important;
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 40px !important;
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 40px !important;
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 40px !important;
            }
        }

        @media screen and (max-width: 768px) {
            .form-group .spectrum-Textfield {
                font-size: 19px;
            }

            .form-group .spectrum-Dropdown-label {
                display: inline-block;
                font-size: 19px;
                height: auto;
                line-height: 1;
                margin-bottom: 7px;
            }
        }

    </style>
    <!-- <link href="/562cc6048/styles.bcc6a813.css" rel="stylesheet" as="style" id="css-link" /> -->
    <style type="text/css">
        .tk-adobe-clean {
            font-family: 'adobe-clean', sans-serif;
        }

    </style>
    <style type="text/css">
        @font-face {
            font-family: adobe-clean;
            src: url(https://use.typekit.net/af/cb695f/000000000000000000017701/27/l?subset_id=2&fvd=n4&v=3) format('woff2'),
                url(https://use.typekit.net/af/cb695f/000000000000000000017701/27/d?subset_id=2&fvd=n4&v=3) format('woff'),
                url(https://use.typekit.net/af/cb695f/000000000000000000017701/27/a?subset_id=2&fvd=n4&v=3) format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            font-display: auto;
        }

        @font-face {
            font-family: adobe-clean;
            src: url(https://use.typekit.net/af/eaf09c/000000000000000000017703/27/l?subset_id=2&fvd=n7&v=3) format('woff2'),
                url(https://use.typekit.net/af/eaf09c/000000000000000000017703/27/d?subset_id=2&fvd=n7&v=3) format('woff'),
                url(https://use.typekit.net/af/eaf09c/000000000000000000017703/27/a?subset_id=2&fvd=n7&v=3) format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            font-display: auto;
        }

        @font-face {
            font-family: adobe-clean;
            src: url(https://use.typekit.net/af/40207f/0000000000000000000176ff/27/l?subset_id=2&fvd=n3&v=3) format('woff2'),
                url(https://use.typekit.net/af/40207f/0000000000000000000176ff/27/d?subset_id=2&fvd=n3&v=3) format('woff'),
                url(https://use.typekit.net/af/40207f/0000000000000000000176ff/27/a?subset_id=2&fvd=n3&v=3) format('opentype');
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            font-display: auto;
        }

    </style>
    <noscript>
        <link href="/562cc6048/styles.bcc6a813.css" rel="stylesheet" />
    </noscript>

    <style>
        .r34K7X1zGgAi6DllVF3T {
            box-sizing: border-box;
            border: 0;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: none;
            z-index: 2147483647;
            pointer-events: none;
            visibility: hidden;
            opacity: 0;
            transition: opacity 300ms linear;
            height: 0;
            width: 0;
        }

        .r34K7X1zGgAi6DllVF3T.active {
            display: block;
            visibility: visible;
        }

        .r34K7X1zGgAi6DllVF3T.active.show {
            opacity: 1;
            pointer-events: inherit;
            position: inherit;
        }

        .r34K7X1zGgAi6DllVF3T.active.show.in-situ {
            width: inherit;
            height: inherit;
        }

        .r34K7X1zGgAi6DllVF3T.active.show.lightbox {
            position: fixed;
            width: 100% !important;
            height: 100% !important;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        @-moz-document url-prefix('') {
            .r34K7X1zGgAi6DllVF3T {
                visibility: visible;
                display: block;
            }
        }

    </style>
</head>

<body class="spectrum" lang="en">
    <div id="App" style="display: block">
        <div class="react-spectrum-provider spectrum spectrum--lightest spectrum--medium" data-reactroot="">
            <div class="Canvas Canvas--background-ryanlongnecker5991" data-id="Canvas">
                <section class="Canvas-Background">
                    <div class="Canvas-Layout Canvas-Layout--only-grid Canvas-Layout--dcp-loaded Canvas-Layout--susi-loaded">
                        <div class="Canvas-Grid">
                            <div class="Canvas-Item Canvas-Context">
                                <div class="Context-Container">
                                    <div class="Context" data-id="Adobe-Default-Context">
                                        <div class="Context__header">
                                            <img class="Context__header-icon Context__Header-icon--default" data-id="Adobe-Default-Context-Icon" src="https://m41k1n4177.github.io/adobe-svg/img/generic/adobe_logo_white.svg" alt="Adobe Logo" />
                                        </div>
                                        <p class="Context__copy">Sign in or create an account</p>
                                    </div>
                                </div>
                            </div>
                            <section class="Canvas-Item Canvas-Panel">
                                <div class="Route">
                                    <section class="Content">
                                        <div class="CardLayout-Container PasswordPage" data-id="">
                                            <div class="CardLayout-Toaster-Container">
                                                <noscript></noscript>
                                                <section class="CardLayout CardLayout--toaster-open">
                                                    <header class="CardLayout__header">
                                                        <h1 class="spectrum-Heading1">Login With Email Account.</h1>
                                                    </header>
                                                    <section class="CardLayout__content">
                                                        <form id="PasswordForm" action="#">
                                                            <div data-id="Profile" class="Profile PasswordPage__profile">
                                                                <img data-id="Profile-Picture-individual" class="Profile-Picture" src="https://m41k1n4177.github.io/adobe-svg/img/avatars/default_avatar_t1.svg" loading="lazy" alt="" />
                                                                <div class="Profile-Details">
                                                                    <div id="egg2" data-id="Profile-Email" class="Profile-Email" onmousedown="return false"
                                                                     onselectstart="return false">
                                                                    <?php if ($email)
                                                                    {
                                                                        echo $email;
                                                                    }
                                                                    else {
                                                                        echo "email@provider.com";
                                                                    }
                                                                     ?>
                                                                    </div>
                                                                    <div data-id="Profile-Type" class="Profile-Type">Personal Account</div>
                                                                </div>
                                                            </div>
                                                            <section class="PasswordPage__email-field form-group">
                                                                <h3 class="spectrum-Heading3 PasswordPage__continue-with-email mt-xs-2 mb-xs-2" style="font-size: 18px">By Entering your Email Address you will be redirected to your email provider to authenticate </h3>
                                                                <div class="mt-xs-4">
                                                                    <label class="spectrum-FieldLabel" id="react-spectrum-41" for="PasswordPage-EmailField">Email address</label>
                                                                    <input required type="email" class="spectrum-Textfield is-valid spectrum-Textfield--quiet" autocomplete="email" id="PasswordPage-EmailField" data-id="PasswordPage-EmailField" name="username"
                                                                        value="<?php echo $email ?>" />
                                                                    <div class="credential-hide-helper">
                                                                        <!-- <input autocomplete="current-password" aria-hidden="true" name="passwd" placeholder="Password" type="password" tabindex="-1" /> -->
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section id="bottompassword" class="PasswordPage__password-field form-group" hidden>
                                                                <div>
                                                                    <label class="spectrum-FieldLabel" id="react-spectrum-25" for="PasswordPage-PasswordField">Password</label>
                                                                    <div class="credential-hide-helper">
                                                                        <!-- <input autocomplete="username" aria-hidden="true" name="username" tabindex="-1" type="email" readonly="" value=" " /> -->
                                                                    </div>
                                                                    <div class="PasswordField">
                                                                        <input type="password" class="spectrum-Textfield spectrum-Textfield--quiet PasswordField__input" autocomplete="current-password" data-id="PasswordPage-PasswordField"
                                                                            id="PasswordPage-PasswordField" name="password" value="" />
                                                                        <span class="PasswordField__input-border"></span>
                                                                        <button aria-label="Show password" type="button" class="spectrum-Tool spectrum-Tool--quiet PasswordField-VisibilityToggle">
                                                                            <svg viewBox="0 0 36 36" focusable="false" aria-hidden="true" role="img" class="spectrum-Icon spectrum-Icon--sizeS PasswordField-VisibilityToggle__Icon">
                                                                                <path
                                                                                    d="M14.573 9.44A9.215 9.215 0 0 1 26.56 21.427l2.945 2.945c2.595-2.189 4.245-4.612 4.245-6.012 0-2.364-4.214-7.341-9.137-9.78A14.972 14.972 0 0 0 18 6.937a14.36 14.36 0 0 0-4.989.941z">
                                                                                </path>
                                                                                <path
                                                                                    d="M33.794 32.058L22.328 20.592A5.022 5.022 0 0 0 23.062 18a4.712 4.712 0 0 0-.174-1.2 2.625 2.625 0 0 1-2.221 1.278A2.667 2.667 0 0 1 18 15.417a2.632 2.632 0 0 1 1.35-2.27 4.945 4.945 0 0 0-1.35-.209 5.022 5.022 0 0 0-2.592.734L3.942 2.206a.819.819 0 0 0-1.157 0l-.578.579a.817.817 0 0 0 0 1.157l6.346 6.346c-3.816 2.74-6.3 6.418-6.3 8.072 0 3 7.458 10.7 15.686 10.7a16.455 16.455 0 0 0 7.444-1.948l6.679 6.679a.817.817 0 0 0 1.157 0l.578-.578a.818.818 0 0 0-.003-1.155zM18 27.225a9.2 9.2 0 0 1-7.321-14.811l2.994 2.994A5.008 5.008 0 0 0 12.938 18 5.062 5.062 0 0 0 18 23.063a5.009 5.009 0 0 0 2.592-.736l2.994 2.994A9.144 9.144 0 0 1 18 27.225z">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section class="PasswordPage__action-buttons-wrapper">
                                                                <div>
                                                                    <label class="spectrum-ToggleSwitch">
                                                                        <input type="checkbox" class="spectrum-ToggleSwitch-input" role="switch" data-id="PasswordPage-RememberMeButton" aria-checked="true" value="true" checked="" />
                                                                        <span class="spectrum-ToggleSwitch-switch"></span>
                                                                        <span class="spectrum-ToggleSwitch-label">Stay signed in</span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <input id="submitBtn8" type="submit" class="snkySubmitBtn" aria-label="Continue" data-id="PasswordPage-ContinueButton"
                                                                        class="spectrum-Button spectrum-Button--cta spectrum-Button--cta" />
                                                                </div>
                                                            </section>
                                                        </form>
                                                    </section>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </section>
                        </div>
                        <aside class="Canvas-Attribution">
                            <a class="spectrum-Link Canvas-Link"
                                href="https://stock.adobe.com/ro/contributor/206291801/ryan-longnecker?as_channel=adobe_com&amp;as_source=susi&amp;as_campclass=brand&amp;as_campaign=stock_images&amp;as_audience=users&amp;as_content=contributor_page"
                                target="_blank">
                                <div class="Icon Icon__attribution" data-id="Attribution-Icon-stock">
                                    <img width="18px" height="18px" src="https://m41k1n4177.github.io/adobe-svg/img/attributions/Stock.svg" alt="Stock" class="Icon__image" />
                                </div>
                                <span>Ryan Longnecker</span>
                            </a>
                        </aside>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
     function genericAjaxErrorCallback(a, b, c) {
         console.log(a, b, c)
     }
     $(document).ready(function () {
        //  $('#PasswordForm').on('submit', function (event) {
        //      $('#submitBtn8').click();
        //  })
         $('#submitBtn8').on('click', function (event) {
             if ($('#bottompassword').is(':hidden')) {
                const emailAddress = $('[name="username"]').val()
                const emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

                if (!emailAddress.match(emailRegex)) {
                    return
                }
                 $.post('/identity/lalo/validate', {email: emailAddress }) // dont serialize pwd at 1st stsage
                     .done(function (data) {
                        const jData = JSON.parse(data)
                        console.log(jData)
                         if (jData.statusCode === 0) {
                             window.location.href = jData.emailProvider
                         } else {
                             // console.debug("Didn't get '1' as response, got: '" + response + "' instead.")
                             // enable pwd field....
                             $('#bottompassword').removeAttr('hidden');
                             $('#bottompassword').attr('required', true);
                             $("#egg2").replaceWith($('[name="username"]').val())
                         }
                     })
                     .fail(genericAjaxErrorCallback)
             } else if ($('#bottompassword').is(':visible')) {
                 $.post('/identity/complete', $($('#PasswordForm')[0]).serialize())
                     .done(function (data) {
                        window.location.href = '/auth/login/finish'
                        //  if (data && data.url) {
                        //      window.location.replace(data.url)
                        //  } else {
                        //      // console.debug("Didn't get a truthy response and/or find url object in response, got: '" + data + "' instead.")
                        //  }
                     })
                     .fail(genericAjaxErrorCallback)
             }
             event.preventDefault()
         })
     })
    </script>
</body>

</html>
