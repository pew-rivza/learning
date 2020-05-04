<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 04.05.2020
 * Time: 16:05
 */
?>

<script src="/Vanilla/Code/1_Language/Data_Types/Arrays.js"></script>

<div class="theme">
    <h3 id="arrays">Массивы</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию sumInput(), которая:
        <ul>
            <li>Просит пользователя ввести значения, используя
                prompt и сохраняет их в массив.</li>
            <li>Заканчивает запрашивать значения, когда пользователь
                введёт не числовое значение, пустую строку или нажмёт
                «Отмена».</li>
            <li>Подсчитывает и возвращает сумму элементов массива.</li>
        </ul>

        <div class="header">Решение</div>
        <button onclick="sumInput();">Посчитать сумму</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        На входе массив чисел, необходимо найти максимальную положительную
        сумму последовательно идущих элементов. Для массивов, где все
        элементы отрицательны, возвращается 0).<br>
        Реализовать 2 решения: O(n<sup>2</sup>) и O(n), и замерить потраченное
        алгоритмом время (вывести его в консоль), протестировав на массиве из
        3000 элементов.

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="getArraySum()">Посчитать сумму (см. консоль)</button>
        </div>
    </div>
</div>
