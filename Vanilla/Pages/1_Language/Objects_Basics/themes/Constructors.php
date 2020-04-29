<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 29.04.2020
 * Time: 21:59
 */
?>

<script src="/Vanilla/Code/1_Language/Objects_Basics/Constructors.js"></script>

<div class="theme">
    <h3 id="constructors">Конструкторы, создание объектов через "new"</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию-конструктор Accumulator(startingValue).
        Объект, который она создаёт, должен уметь следующее:

        <ul>
            <li>
                Хранить «текущее значение» в свойстве value.
                Начальное значение устанавливается в аргументе
                конструктора startingValue.
            </li>
            <li>
                Метод read() использует prompt для получения числа
                и прибавляет его к свойству value.
            </li>
            <li>
                Таким образом, свойство value является текущей суммой
                всего, что ввёл пользователь при вызовах метода read(),
                с учётом начального значения startingValue.
            </li>
        </ul>

        <div class="header">Решение</div>
        <script>
            let accumulator = new Accumulator(1);
        </script>

        <div class="buttons-bar">
            <button onclick="accumulator.read();">Ввести значение</button>
            <button onclick="alert(accumulator.value);">Вывести сумму</button>
        </div>
    </div>
</div>
