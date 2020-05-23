<script src="/Vanilla/Code/1_Language/Classes/Mixins.js"></script>

<div class="theme">
    <h3 id="mixins">Примеси</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Реализовать класс Button для работы с элементом Кнопка и примесь
        EventMixin для работы с событиями. Реализовать функции для генерации,
        удаления и вызова события.

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="button.hangHandler();">Навесить обработчик</button>
            <button onclick="button.cancelHandler();">Удалить обработчик</button>
        </div>
        <div class="buttons-bar">
            <button onclick="button.pressButton();">Кнопка с обработчиком</button>
        </div>
    </div>
</div>