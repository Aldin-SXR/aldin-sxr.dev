<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aldin-SXR</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css?v=1.1.1">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light nav-area">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#linksArea" aria-controls="links"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="links collapse navbar-collapse justify-content-end" id="linksArea">
            <ul class="navbar-nav links">
                <a class="nav-item" target="_blank" href="https://github.com/Aldin-SXR?tab=repositories">GitHub
                    Projects</a>
                <a class="nav-item" target="_blank" href="https://open.spotify.com/user/bjruw0dswnw3ryrh8zwqxzq3d/playlist/4Ga39lyM9YpN1TqTEwyHF7?si=ntkkPuj0TOuUu6rcaZw0JA">Essential
                    City Pop</a>
                <a class="nav-item" href="broken.html">Broken Link</a>
            </ul>
        </div>
    </nav>
    <div class="container-fluid content">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <p class="title m-b-md">
                    Hello, my name is Aldin Kovačević.
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="subtitle m-b-md">
                    And I suck at UI design. That's why I lifted this template off Laravel.
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="subtitle m-b-md">
                    But I'm good at other stuff. Backend and Blockchain developer @ <a class="no-decoration" target="_blank"
                        href="https://tribeos.io"><strong>tribeOS</strong></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <p class="subtitle m-b-md">
                    Primary technologies of interest include <strong>PHP</strong> (<a class="no-decoration" target="_blank"
                        href="https://en.wikipedia.org/wiki/Fact" title="Fact">which is vastly superior to JavaScript
                        in every possible regard)</a> and <strong>Python</strong>.
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <p class="subtitle m-b-md">
                    Primary areas of interest include <strong>backend development</strong>, <strong>decentralized
                        technologies</strong>, <strong>information security</strong> and <strong>data science</strong>.
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <p style="text-align: center" class="subtitle m-b-md">
                    よろしくお願いしま。
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="links">
                    <a class="account" target="_blank" href="https://github.com/Aldin-SXR"><i class="fab fa-github"></i></a>
                    <a class="account" target="_blank" href="https://www.linkedin.com/in/aldin-kovacevic/"><i class="fab fa-linkedin"></i></a>
                    <a class="account" target="_blank" href="https://www.facebook.com/aldin.sxr"><i class="fab fa-facebook"></i></a>
                    <a class="account" target="_blank" href="https://www.instagram.com/aldin_sxr/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once __DIR__."/vendor/autoload.php";
use HttpLog\HttpLogger;

$logger = HttpLogger::create("file", "full+h", "logs/debug.log");
$logger->log();
?>
