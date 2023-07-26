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

<div class="p-5 mb-4 bg-body-tertiary d-flex user-select-none" style="background: url(/poster.png); background-size: cover; background-position: right bottom; height: 810px;">
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
    <div class="px-lg-5 mx-lg-5">


        @foreach($packages as $package)
            <div class="row overflow-hidden flex-md-row mb-4 align-items-baseline">
                <div class="col p-4 d-flex flex-column">

                    <a href="{{ $package['repository'] }}" style="color: #1E365C"><h3 class="text-uppercase package-title">{{ $package['name'] }}</h3></a>

                    <p class="mb-auto">
                        {{ $package['description'] }}
                    </p>

                </div>
                <div class="col-5 d-none d-lg-block">
                    <div class="">
                        Starts: {{ number_format($package['github_stars']) }}
                    </div>
                    <hr>
                    <div class="">
                        Downloads: {{ number_format($package['downloads']['total']) }}
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
        <p class="text-center text-body-secondary"><span class="text-muted">Esplora:</span> Unveiling a World of Open-Source Exploration and Collaboration!</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
