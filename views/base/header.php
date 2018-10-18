<!doctype html>
<html lang="ru_RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Sparta
    </title>

    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook-icon" viewBox="0 0 448 512">
            <path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path>
        </symbol>

        <symbol id="behance-icon" viewBox="0 0 94 94">
            <path d="M68.77,41.799c-7.32,0-8.34,7.307-8.34,7.307h15.566C75.997,49.105,76.089,41.799,68.77,41.799z" />
            <path d="M33.453,49.105H19.658V61.77h13.157c1.979-0.055,5.633-0.676,5.633-6.153C38.448,49.041,33.453,49.105,33.453,49.105z" />
            <path d="M36.804,36.154c0-4.93-3.352-4.93-3.352-4.93h-1.777H19.658v10.574h12.939C34.833,41.799,36.804,41.084,36.804,36.154z" />
            <path d="M89,0H5C2.239,0,0,2.238,0,5v84c0,2.762,2.239,5,5,5h84c2.762,0,5-2.238,5-5V5C94,2.238,91.762,0,89,0z M58.389,25.594    h19.551v5.836H58.389V25.594z M48.505,56.205c0,14.463-15.053,13.986-15.053,13.986H19.658h-0.405H8.793V22.803h10.46h0.405    h13.795c7.493,0,13.409,4.137,13.409,12.617s-7.23,9.018-7.23,9.018C49.164,44.438,48.505,56.205,48.505,56.205z M85.079,55.43    H60.521c0,8.805,8.34,8.248,8.34,8.248c7.877,0,7.6-5.098,7.6-5.098h8.34c0,13.529-16.216,12.604-16.216,12.604    c-19.46,0-18.21-18.117-18.21-18.117S50.359,34.86,68.584,34.86C87.766,34.859,85.079,55.43,85.079,55.43z" />
        </symbol>

        <symbol id="instagram-icon" viewBox="0 0 448 512">
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
        </symbol>

        <symbol id="youtube-icon" viewBox="0 0 576 512">
            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
        </symbol>

        <symbol id="arrow-prev" viewBox="0 0 129 129">
            <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" />
        </symbol>

        <symbol id="arrow-next" viewBox="0 0 129 129">
            <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
        </symbol>

        <symbol id="placeholder-icon" viewBox="0 0 512 512">
		    <path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"/>
        </symbol>
    </svg>


    <!-- Header Main -->
    <header id="app-header" class="light">
        <div class="container-fluid position-relative d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="/" class="logo-item logo-item--white">
                    <img src="images/icon/logo/logo-white.png" alt="logo">
                </a>
                <a href="/" class="logo-item logo-item--dark">
                    <img src="images/icon/logo/logo-dark.png" alt="logo">
                </a>
            </div>

            <nav class="menu">
                <ul class="menu-list list-unstyled d-flex flex-column flex-xl-row align-items-center">
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-item__link">
                            О нас
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-item__link">
                            Инновации
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-item__link">
                            Услуги
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-item__link">
                            Нам доверяют
                        </a>
                    </li>
                    <li class="menu-list-item">
                        <a href="#" class="menu-list-item__link">
                            Свяжитесь с нами
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="burger-menu d-flex flex-column justify-content-center align-items-center position-relative">
                <div class="line line--top"></div>
                <div class="line line--middle"></div>
                <div class="line line--bottom"></div>
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>

        </div>
    </header>

    <main>