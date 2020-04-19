<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 14.04.2020
 * Time: 23:09
 */
?>

<script src="/Vanilla/Code/1_Language/JS_Basics/Cycles.js"></script>

<div class="theme">
    <h3 id="cycles">Циклы while и for</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать цикл, который предлагает через prompt ввести число, большее 100.
        Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее.
        Цикл должен спрашивать число пока либо посетитель не введёт число, большее
        100, либо не нажмёт кнопку Отмена (ESC).

        <div class="header">Решение</div>
        <button onclick="getNumGT100()">Ввести число >100</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Написать код, который выводит все простые числа из интервала от 2 до n.

        <div class="header">Решение</div>
        <button onclick="calcPrimeNum()">Вывести простые числа</button>
    </div>
</div>