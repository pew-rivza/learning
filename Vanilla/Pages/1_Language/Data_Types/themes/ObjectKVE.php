<?php
?>

<script src="/Vanilla/Code/1_Language/Data_Types/ObjectKVE.js"></script>

<div class="theme">
    <h3 id="object-kve">Object.keys, values, entries</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Есть объект salaries с произвольным количеством свойств, содержащих
        заработные платы. Необходимо написать функцию sumSalaries(salaries),
        которая возвращает сумму всех зарплат с помощью метода Object.values
        и цикла for..of. Если объект salaries пуст, то результат должен быть 0.

<pre>
let salaries = {
    "John": 100,
    "Pete": 300,
    "Mary": 250
};
</pre>

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="sumSalaries({John: 100, Pete: 300,Mary: 250})">
                Вывести сумму зарплат</button>
            <button onclick="sumSalaries({})">
                Вывести сумму зарплат для пустого объекта</button>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Написать функцию count(obj), которая возвращает количество свойств объекта:

<pre>
let user = {
    name: 'John',
    age: 30
};
</pre>
        <div class="header">Решение</div>
        <button onclick="countObj({name: 'John', age: 30})">
            Вывести длину объекта</button>
    </div>
</div>