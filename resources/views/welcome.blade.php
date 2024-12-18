<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esplora</title>
    <meta name="robots" content="noindex">


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1e365c">
    <meta name="msapplication-TileColor" content="#1e365c">
    <meta name="theme-color" content="#1e365c">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #F0E8DE;
        }

        .text-logo {
            font-family: 'Dancing Script', cursive;
            text-shadow: 2px 2px rgba(10, 10, 10, 0.85);
        }

        .package-title {
            font-family: 'Bebas Neue', sans-serif;
        }

        .container {
            max-width: 1280px!important;
        }

    </style>

</head>
<body>

<div class="p-5 mb-4 bg-body-tertiary d-flex user-select-none" style="background: url(/poster.png); background-size: cover; background-position: right bottom; height: min(810px, 100vh);">
    <div class="container pt-4 my-auto">
        <div class="col-lg-6">
            <h1 class="display-1 text-logo fw-bold text-white mb-0">Save your time with Esplora’s Laravel packages</h1>
        </div>
    </div>
</div>


<div class="container my-5">
    <div style="border: 1.2em double #1E365C">
        <div class="p-lg-5 text-white" style="background-color: #1E365C">
            <div class="row p-lg-5 p-4 align-items-center">
                <div class="col-12 col-lg-6 text-center">
                    <p class="display-3 text-logo mb-3 mb-ld-0">Open Source & More</p>
                </div>
                <div class="d-none d-lg-block col-auto">
                    <div class="vr h-100"></div>
                </div>

                <div class="col">
                    Take a plunge into the list below and don't hesitate to express your appreciation
                    with a ⭐️ if you find them truly valuable! What's more, we eagerly await your valuable
                    contributions. If you're ready for an exciting challenge, submit a pull request and become an
                    esteemed member of our thriving community. Together, let's elevate these projects to unprecedented
                    heights!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="col-md-7 mx-auto">


        @foreach($packages as $package)

            <div class="row overflow-hidden flex-md-row mb-4 align-items-baseline">
                <div class="col p-4 d-flex flex-column">

                    <a href="{{ $package['repository'] }}" style="color: #1E365C"><h3 class="text-uppercase package-title">{{ $package['name'] }}</h3></a>

                    <p class="mb-auto">
                        {{ $package['description'] }}
                    </p>

                </div>
                <div class="col-3 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-star-fill me-2 opacity-50" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>

                        {{ number_format($package['github_stars']) }}
                    </div>
                    <hr>
                    <div class="d-flex align-items-center small">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-star-fill me-2 opacity-50" viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                        </svg>

                        {{ number_format($package['downloads']['total']) }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>



<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item"><a href="https://github.com/esplora" class="nav-link px-2 text-body-secondary">GitHub</a></li>
            <li class="nav-item"><a href="https://packagist.org/packages/esplora/" class="nav-link px-2 text-body-secondary">Packagist</a></li>
        </ul>
        <p class="text-center text-body-secondary small"><span class="text-muted">Esplora:</span> Unveiling a World of Open-Source Exploration and Collaboration!</p>
        <p class="text-center text-body-secondary small">Crafted with

           <span title="love from Lipetsk">
                <svg height="1.5em" width="1.5em" fill="currentColor" title="" role="img" viewBox="0 0 44.07 52.31" xmlns="http://www.w3.org/2000/svg" class="text-success">
                    <path d="m33.39 33.23c-1.48 1.03-2.83 2.2-4.06 3.52-.23.25-.41.8-.77.63-.38-.18.04-.64 0-1.12-2.09 1.39-3.66 3.21-5.36 5.04v-1.04c-2.14 1.43-4.59 2.12-5.98 4.33l-.1-.77-.22-.14c-2.22 2.74-5.49 4.65-6.41 8.63-.25-4.49-1.24-8.58-3.2-12.5l-.64.84c-.05-1.68-.47-3.07-1.15-4.42l-.58.94c-.31-1.09-.25-2.12-.57-3.07-.09-.26-.21-.54-.25-.84-.08-.5-.27-.97-.94-.36-.04-2.33-.87-4.43-1-6.68-.46.18-.5.77-1.04.79.16-2-.3-3.96-.34-6.08l-.44.89-.25-.17c-.1-.8 0-1.59.09-2.39.12-.93.22-1.87.31-2.81.03-.34.43-.84-.38-.85-.2 0-.12-.25-.07-.44.5-1.91.98-3.81 2.06-5.51 2.05-3.22 6.97-7.12 12.11-5.87 2.35.57 4.24 1.8 5.33 4.05.14.3.26.62.31.94.04.23-.03.56.25.58.27.01.31-.34.38-.56.73-2.42 1.44-4.84 2.58-7.11.18-.35.33-.73.56-1.04.18-.25.26-.72.66-.63.41.09.79.33.99.75.22.44-.1.71-.36.94-2.22 2.04-2.98 4.83-3.96 7.53.89-.91 1.63-1.94 2.6-2.76 3.63-3.08 7.69-4.2 12.22-2.46 4.06 1.56 6.51 4.63 7.73 8.78.91 3.11.62 6.13-.37 9.15-.31.95-.51 1.94-.77 2.91-.08.31-.07.72-.62.57-.11-.03-.35.17-.41.31-.66 1.45-1.83 2.57-2.57 3.97-.16.31-.28.64-.51 1.19l-.14-1.38c-1.41 1.8-3.43 2.87-4.69 4.73-.47-.42.06-.7-.06-1.01h.04l-.02-.02zm-14.81-16.07c-.56.3-.52.91-.68 1.4-.17.52-.33.82-.99.55-.99-.39-2.06-.56-3.12-.63-1.24-.09-2.5-.12-3.67.45.34.04.67.03 1.01 0 1.88-.16 3.7.15 5.46.8.54.2.82.43.59 1.14-.53 1.7-.94 3.44-1.38 5.17-.13.53-.34.78-.95.87-1.55.23-3.1.53-4.52 1.57 1.82.06 3.27-1.35 5.01-.89-.4 2.1-.78 4.15-1.18 6.2-.08.41-.15.86-.71.93-.22.03-.24.23-.11.33.55.43.29.97.2 1.46-.27 1.51-.58 3.02-.87 4.53.3-.38.52-.79.57-1.22.06-.5.3-.91.44-1.37.58-2.05.6-2.05 2.14-.47.08-.73-.49-1.01-.88-1.39-.24-.23-.57-.36-.49-.79.36-2.06.71-4.12 1.05-6.18.08-.46.27-.49.73-.43 1.03.12 1.79.76 2.88 1.34-.79-1.08-1.61-1.55-2.67-1.67-.63-.07-.92-.26-.63-1.06.49-1.37.93-2.8 1.05-4.23.1-1.14.67-1.16 1.46-1.2 1.04-.05 2.06.1 3.1.14-1.03-.51-2.13-.64-3.24-.55-.62.05-.78-.08-.6-.75.36-1.34.89-2.65 1-4.06.47.09.82-.18 1.18-.39 1.04-.57 2.12-1.04 3.24-1.44 1.66-.6 3.39-.91 5.12-1.21-3.28-.24-6.2.95-9.14 2.39.23-1.53.96-2.81.93-4.26-.53.74-.28 1.76-.94 2.48-1.17-2.34-2.55-4.46-4.98-5.64 2.52 2.14 4.78 4.4 4.61 8.09zm-7.69 18.99c.65-.06 1.09-.32 1.68-.72-.76-.01-1.17.34-1.68.72z"></path>
                </svg>
            </span>

           by <a href="https://tabuna.github.io" class="link-body-emphasis text-decoration-none opacity-75">Alexandr Chernyaev</a></p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
