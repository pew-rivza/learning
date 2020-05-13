<script src="/Vanilla/Code/1_Language/Functions_Advanced/RecursionNStack.js"></script>

<div class="theme">
    <h3 id="recursion-n-stack">Рекурсия и стек</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию sumTo(n), которая вычисляет сумму чисел 1 + 2 + ... + n.
        Сделать три варианта решения:
        <ul>
            <li>С использованием цикла</li>
            <li>Через рекурсию</li>
            <li>С использованием формулы арифметической прогрессии</li>
        </ul>

        <div class="header">Решение</div>
        <div class="decision-description">Посчитать сумму (время выполнения см. в консоли):</div>
        <div class="buttons-bar">
            <button onclick="execTimeTemplate(sumToNCycle);">Цикл</button>
            <button onclick="execTimeTemplate(sumToNRecursion);">Рекурсия</button>
            <button onclick="execTimeTemplate(sumToNProgression);">Прогрессия</button>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию fib(n) которая возвращает n-е число Фибоначчи.
        Сделать три варианта решения:
        <ul>
            <li>С использованием цикла</li>
            <li>Через рекурсию</li>
            <li>С использованием формулы Бине</li>
        </ul>

        <div class="header">Решение</div>
        <div class="decision-description">Посчитать сумму (время выполнения см. в консоли):</div>
        <div class="buttons-bar">
            <button onclick="execTimeTemplate(fibCycle);">Цикл</button>
            <button onclick="execTimeTemplate(fibRecursion);">Рекурсия</button>
            <button onclick="execTimeTemplate(fibBinet);">Формула Бине</button>
        </div>
    </div>
</div>