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
    <link rel="stylesheet" href="/Other/Kano/assets/css/main.css"/>
    <link rel="stylesheet" href="/Other/Kano/assets/css/screen.css"/>
    <link rel="stylesheet" href="/Other/Kano/assets/css/description.css"/>
    <link rel="stylesheet" href="/Other/Kano/assets/css/question.css"/>
    <link rel="stylesheet" href="/Other/Kano/assets/css/thanks.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap"
          rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="/Other/Kano/assets/js/main.js"></script>
</head>

<?php include_once __DIR__ . "/screen.php"; ?>
<?php include_once __DIR__ . "/description.php"; ?>
<?php include_once __DIR__ . "/questions/q1.php"; ?>
<?php include_once __DIR__ . "/questions/q2.php"; ?>
<?php include_once __DIR__ . "/questions/q3.php"; ?>
<?php include_once __DIR__ . "/questions/q4.php"; ?>
<?php include_once __DIR__ . "/questions/q5.php"; ?>
<?php include_once __DIR__ . "/questions/q6.php"; ?>
<?php include_once __DIR__ . "/questions/q7.php"; ?>
<?php include_once __DIR__ . "/questions/q8.php"; ?>
<?php include_once __DIR__ . "/questions/q9.php"; ?>
<?php include_once __DIR__ . "/questions/q10.php"; ?>
<?php include_once __DIR__ . "/questions/q11.php"; ?>
<?php include_once __DIR__ . "/questions/q12.php"; ?>
<?php include_once __DIR__ . "/questions/q13.php"; ?>
<?php include_once __DIR__ . "/questions/q14.php"; ?>
<?php include_once __DIR__ . "/questions/q15.php"; ?>
<?php include_once __DIR__ . "/questions/q16.php"; ?>
<?php include_once __DIR__ . "/questions/q17.php"; ?>
<?php include_once __DIR__ . "/questions/q18.php"; ?>
<?php include_once __DIR__ . "/questions/q19.php"; ?>
<?php include_once __DIR__ . "/questions/q20.php"; ?>
<?php include_once __DIR__ . "/questions/q21.php"; ?>
<?php include_once __DIR__ . "/questions/q22.php"; ?>
<?php include_once __DIR__ . "/questions/q23.php"; ?>
<?php include_once __DIR__ . "/thanks.php"; ?>

