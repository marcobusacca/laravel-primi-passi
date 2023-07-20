<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP</title>

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
                                <a class="nav-link text-underline text-white" aria-current="page" href="/">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/php">
                                    <u>PHP</u>
                                </a>
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
                                <h1>PHP</h1>
                            </div>
                            <div class="card-body p-5">
                                <p class="text-start">
                                    PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. <br><br>
                                    L'interprete PHP è un software libero distribuito sotto la PHP License. <br><br>
                                    Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica. <br><br>
                                    Un esempio di software scritto in PHP è MediaWiki, su cui si basano i progetti wiki della Wikimedia Foundation come Wikipedia. <br><br>
                                    Grazie soprattutto alla diffusione di Wordpress (CMS scritto in PHP), secondo le statistiche, è il linguaggio lato server più usato al mondo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
