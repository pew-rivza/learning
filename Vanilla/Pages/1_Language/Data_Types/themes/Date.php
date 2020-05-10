<?php
?>

<script src="/Vanilla/Code/1_Language/Data_Types/Date.js"></script>

<div class="theme">
    <h3 id="date">Дата и время</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать функцию getDateAgo(), показывающую дату, которая была days дней назад
        от даты date. Функция должна надёжно работать при значении days = 365 и больших
        значениях. Функция не должна изменять переданный ей объект date.

        <div class="header">Решение</div>

        <button onclick="getDateAgo();">Вычислить дату X дней назад</button>
    </div>

    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию formatDate(), форматирующую дату по следующему принципу:

        <ul>
            <li>Если спустя date прошло менее 1 секунды, вывести "прямо сейчас"</li>
            <li>В противном случае, если с date прошло меньше 1 минуты, вывести "n сек. назад"</li>
            <li>В противном случае, если меньше часа, вывести "m мин. назад".</li>
            <li>В противном случае, полная дата в формате "DD.MM.YY HH:mm"</li>
        </ul>

        <div class="header">Решение</div>

        <button onclick="">Отформатировать дату</button>
    </div>
</div>