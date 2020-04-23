<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 23.04.2020
 * Time: 22:20
 */
?>

<script src="/Vanilla/Code/1_Language/Objects_Basics/ObjectMethods.js"></script>

<div class="theme">
    <h3 id="object-methods">Методы объекта, "this"</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать объект calculator с тремя методами:
        <ul>
            <li>
                read() : запрашивает два значения и сохраняет
                их как свойства объекта.
            </li>
            <li>
                sum(): возвращает сумму сохраненных значений.
            </li>
            <li>
                mul(): перемножает сохранённые значения и возвращает
                результат.
            </li>
        </ul>

        <div class="header">Решение</div>
        <button onclick="user.read();">Ввести значения</button>
        <button onclick="user.sum();">Посчитать сумму</button>
        <button onclick="user.mul();">Посчитать произведение</button>
    </div>
</div>
