<script src="/Vanilla/Code/1_Language/Promises/Promises.js"></script>

<div class="theme">
    <h3 id="promises">Введение: колбэки</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Существует функция showCircle(radius), которая рисует постепенно растущий круг.
        Необходимо реализовать круг с сообщением внутри, которое должно появляться после
        анимации (когда круг достигнет своих размеров). Реализация должна быть на промисах.

        <div class="header">Решение</div>

        <button onclick="showCirclePromise(50).then(showTextPromise)">Нарисовать круг (промис)</button>
        <div id="circle-container2"></div>
    </div>
</div>