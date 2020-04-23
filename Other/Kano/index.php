<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 23.04.2020
 * Time: 23:17
 */

header("Content-Type: text/html; charset=utf-8");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<head>
    <title>Анализ по модели Кано</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
        }

        .fullscreen-bg {
            overflow: hidden;
            z-index: -100;
            position: relative;
            height: 100vh;
            width: 100%;
        }

        .fullscreen-bg__video {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
        }
        .overlay {
            background: rgba(0,0,0,0.6);
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100vh;
            z-index: 4;
        }
        .overlay h1 {
            text-align:center;
            color:#fff;
            font-size: 70px;
            margin-top:17%;
        }
    </style>
</head>
<body>
<div class="fullscreen-bg">
    <div class="overlay">
        <h1>Простой пример<br>фонового видео на сайте</h1>
    </div>
    <video loop="" muted="" autoplay="" poster="/Other/Kano/background-poster.jpg" class="fullscreen-bg__video">
        <source src="/Other/Kano/background.mp4" type="video/mp4">
    </video>
</div>
</body>
