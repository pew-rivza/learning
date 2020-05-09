<?php
?>

<script src="/Vanilla/Code/1_Language/Data_Types/ArrayMethods.js"></script>
<script src="/Vanilla/Code/1_Language/Data_Types/DataForArrays.js"></script>

<div class="theme">
    <h3 id="array-methods">Методы массивов</h3>

    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию, которая преобразует строки вида «my-short-string» в
        «myShortString». То есть дефисы удаляются, а все слова после них получают
        заглавную букву.

        <div class="header">Решение</div>
        <button onclick="camelize();">Преобразовать в верблюжью нотацию</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Написать функцию, которая ищет элементы в массиве в диапазоне от a до b и отдает
        массив этих элементов. Функция должна возвращать новый массив и не изменять
        исходный. Массив и границы диапазона формируются случайным образом.

        <div class="header">Решение</div>
        <button onclick="filterRange();">Посмотреть на фильтрацию массива</button>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Написать функцию, которая сортирует массив чисел по убыванию.

        <div class="header">Решение</div>
        <button onclick="sortDesk();">Посмотреть на сортировку массива</button>
    </div>

    <div class="task">
        <div class="header">Задача 4</div>
        Написать функцию-конструктор Calculator, которая создаёт «расширяемые» объекты
        калькулятора:
        <ul>
            <li>
                Во-первых, необходимо реализовать метод calculate(str), который принимает строку
                в формате «ЧИСЛО оператор ЧИСЛО» (разделено пробелами) и возвращает
                результат. Метод должен понимать плюс + и минус -.
            </li>
            <li>
                Затем нужно добавить метод addMethod(name, func), который добавляет в
                калькулятор новые операции. Он принимает оператор name и функцию с двумя аргументами
                func(a,b), которая описывает его. Добавьте операторы "*", "/" и возведение в степень.
            </li>
            <li>
                В конечном итоге нужно вывести результат работы всех пяти операторов на операндах 8 и 2.
            </li>
        </ul>

        <div class="header">Решение</div>
        <button onclick="makeComputations();">Посмотреть результат вычислений</button>
    </div>

    <div class="task">
        <div class="header">Задача 4</div>
        Написать функцию для перемещивания массива в случайном порядке. Запустить эту функцию
        для массива чисел от 1 до 10.

        <div class="header">Решение</div>
        <button onclick="shuffle([1,2,3,4,5,6,7,8,9,10])">Посмотреть результат вычислений</button>
    </div>
</div>

