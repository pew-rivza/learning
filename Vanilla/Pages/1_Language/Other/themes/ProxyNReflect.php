<script src="/Vanilla/Code/1_Language/Other/ProxyNReflect.js"></script>

<div class="theme">
    <h3 id="proxy-n-reflect">Proxy и Reflect</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать прокси, который генерирует ошибку при попытке прочитать
        несуществующее свойство. Создать объект user и прочитать свойства
        name и age. Объект user:
<pre>
let user = {
    name: "John"
};
</pre>

        <div class="header">Решение</div>
        <button onclick="handleUserProp();">Посмотреть результат</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Создать прокси, который позволяет взять элемент массива по отрицательному
        индексу. Создать объект array = [1, 2, 3] и вывести его последний (-1) и
        предпоследний (-2) элементы.

        <div class="header">Решение</div>
        <button onclick="handleNegativeIndexArr();">Посмотреть результат</button>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Создайте функцию makeObservable(target), которая делает объект
        «наблюдаемым», возвращая прокси. Другими словами, возвращаемый
        makeObservable объект аналогичен исходному, но также имеет метод
        observe(handler), который позволяет запускать handler при записи
        свойств. При изменении любого свойства вызывается handler(key, value)
        с именем и значением свойства.<br>
        Необходимо создать пустой объект user, сделать его наблюдаемым и
        присвоить ему любое свойство.

        <div class="header">Решение</div>
        <button onclick="handleObservable();">Посмотреть результат</button>
    </div>
</div>