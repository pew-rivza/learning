<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 02.05.2020
 * Time: 21:27
 */
?>

<script src="/Vanilla/Code/1_Language/Data_Types/Strings.js"></script>

<div class="theme">
    <h3 id="strings">Строки</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию ucFirst(), запрашивает строку str и возвращает
        str с заглавным первым символом.

        <div class="header">Решение</div>
        <button onclick="ucFirst();">Сделать первый символ заглавным</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Написать функцию checkSpam(), запрашивающую строку str и возвращающую
        "Это спам", если str содержит 'viagra' или 'XXX', а иначе "Письмо не
        содержит спам". Функция должна быть нечувствительна к регистру.

        <div class="header">Решение</div>
        <button onclick="checkSpam();">Проверить строку на спам</button>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Создать функцию truncate(), которая проверяет длину строки
        str и, если она превосходит maxLength, заменяет конец str
        на "…", так, чтобы её длина сообщений (без учета многоточия) стала
        равна maxLength. Результатом функции должна быть та же строка, если
        усечение не требуется, либо, если необходимо, усечённая строка.

        <div class="header">Решение</div>
        <button onclick="truncate();">Сократить сообщение</button>
    </div>

    <div class="task">
        <div class="header">Задача 4</div>
        Написать шаблон template для генерации текста песни "Соку бачи вира" и
        функцию для отображения текста этой песни.

        <div class="header">Решение</div>
        <button onclick="singSBV();">Текст "Соку бачи вира"</button>
    </div>
</div>
