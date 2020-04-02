<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 03.11.2019
 * Time: 16:24
 */
?>

<div class="chapters-container">
    <div id="main">
        <?php include_once __DIR__ . '/MainPart/MainPart.php'; ?>
    </div>
    <div data-id="behavioral" class="pattern-type-container">
        <?php include_once __DIR__ . '/../Chapters/Chapter_1/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_2/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_6/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_8/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_91/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_10/Example.php'; ?>
    </div>
    <div data-id="structural" class="pattern-type-container">
        <?php include_once __DIR__ . '/../Chapters/Chapter_3/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_71/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_72/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_92/Example.php'; ?>
    </div>
    <div data-id="generative" class="pattern-type-container">
        <?php include_once __DIR__ . '/../Chapters/Chapter_4/Example.php'; ?>
        <?php include_once __DIR__ . '/../Chapters/Chapter_5/Example.php'; ?>
    </div>
</div>
