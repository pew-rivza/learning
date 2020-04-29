<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 29.04.2020
 * Time: 22:33
 */
?>

<script src="/Vanilla/Code/1_Language/Objects_Basics/Conversion2Primitive.js"></script>

<div class="theme">
    <h3 id="conversion-to-primitive">Преобразование объектов в примитивы</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Существует два объекта user1 и user2:
<pre>
let user1 = {
    name: "Петр",
    age: 25,
    rating: 5
};

let user2 = {
    name: "Иван",
    age: 19,
    rating: 7
};
</pre>
        Написать правила преобразования таким образом, чтобы можно было
        вывести информацию о user1 в виде "Имя, возраст, рейтинг"
        и найти максимальный рейтинг среди пользователей.

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="alert(user1);">Узнать о user1</button>
            <button onclick="alert( Math.max(user1, user2) );">
                Найти максимальный рейтинг</button>
        </div>
    </div>
</div>
