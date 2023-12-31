<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOMEPAGE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- BootStrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body style="height: 100vh">
        <header>
            <nav class="navbar navbar-expand-lg bg-black">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-underline text-white" aria-current="page" href="/">
                                    <u>HOME</u>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/php">PHP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/laravel">LARAVEL</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card text-center border-dark">
                            <div class="card-header p-3">
                                <h1>{{ $message }}</h1>
                            </div>
                            <div class="card-body p-5">
                                <h3>
                                    <strong>Nome:</strong><span> {{ $name }} </span>
                                </h3>
                                <h3>
                                    <strong>Cognome:</strong><span> {{ $surname }} </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
