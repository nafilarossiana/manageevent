<!doctype html>
<html lang="ar" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <title>Management Event</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">

            <a class="navbar-brand" href="#">EventYok</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href=<?= base_url('/pages/home'); ?>>Home</a>
                    <a class="nav-link" href=<?= base_url('/pages/event'); ?>>Event</a>
                    <a class="nav-link" href=<?= base_url('/pages/register'); ?>>Register</a>
                </div>
            </div>
        </div>
    </nav>
</body>