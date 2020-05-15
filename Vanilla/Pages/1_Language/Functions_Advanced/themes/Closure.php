<script src="/Vanilla/Code/1_Language/Functions_Advanced/Closure.js"></script>

<div class="theme">
    <h3 id="DATA">Замыкание</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        У нас есть встроенный метод arr.filter(f) для массивов. Он фильтрует все элементы с помощью функции f. Если она возвращает true, то элемент добавится в возвращаемый массив.

        Сделать набор «готовых к употреблению» фильтров для массива
        arr = [1, 2, 3, 4, 5, 6, 7]:
        <ul>
            <li>inBetween(a, b) – между a и b (включительно)</li>
            <li>inArray([...]) – находится в данном массиве</li>
        </ul>

        Они должны использоваться таким образом:
        <ul>
            <li>arr.filter(inBetween(3,6)) – выбирает только значения между 3 и 6 (включительно)</li>
            <li>arr.filter(inArray([1,2,3])) – выбирает только элементы, совпадающие с одним из элементов массива</li>
        </ul>

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="alert( arr.filter(isBetween(3, 6)) );">inBetween(3,6)</button>
            <button onclick="alert( arr.filter(inArray([1,2,10])) );">inArray( [1,2,3] )</button>
        </div>
    </div>
</div>