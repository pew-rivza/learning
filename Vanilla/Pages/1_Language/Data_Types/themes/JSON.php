<?php
?>

<script src="/Vanilla/Code/1_Language/Data_Types/JSON.js"></script>

<div class="theme">
    <h3 id="json">Формат JSON, метод toJSON</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию, которая сериализует объект, исключая из него все свойства,
        которые ссылаются на этот же объект. Необходимо сериализовать объект meetup:
<pre>
let room = {
  number: 23
};

let meetup = {
  title: "Совещание",
  occupiedBy: [{name: "Иванов"}, {name: "Петров"}],
  place: room
};

room.occupiedBy = meetup;
meetup.self = meetup;
</pre>

        <div class="header">Решение</div>
        <button onclick="serializeMeetup();">Сериализовать объект meetup</button>
    </div>
</div>