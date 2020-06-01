<script src="/Vanilla/Code/1_Language/Generators/Generators.js"></script>

<div class="theme">
    <h3 id="generators">Генераторы</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Реализовать так называемый «сеяный псевдослучайный генератор», который
        получает «зерно», как первое значение, и затем генерирует следующее,
        используя формулу. Задачей является создать функцию-генератор pseudoRandom(seed),
        которая получает seed и создаёт генератор с формулой ниже. Запустить функцию с
        зерном, равным 1. Формула для генерации:
        <pre>next = previous * 16807 % 2147483647</pre>


        <div class="header">Решение</div>
        <button onclick="alert( pseudoRandomGenerator.next().value )">
            Сгенерировать случайное число
        </button>
    </div>
</div>