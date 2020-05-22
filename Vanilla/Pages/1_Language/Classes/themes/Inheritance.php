<script src="/Vanilla/Code/1_Language/Classes/Inheritance.js"></script>

<script src="/Vanilla/Code/1_Language/Classes/classes/Clock.js"></script>
<script src="/Vanilla/Code/1_Language/Classes/classes/PreciseClock.js"></script>

<div class="theme">
    <h3 id="inheritance">Наследование классов</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Есть класс Clock, который выводит время каждую секунду. Нужно создать новый
        класс PreciseClock, который будет наследоваться от Clock и добавить параметр
        precision – количество миллисекунд между «тиками» (значение по умолчанию 1000).
        Создать экземпляр класса с precision = 500;

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="preciseClock.start();">Запустить часы (см. консоль)</button>
            <button onclick="preciseClock.stop();">Остановить часы (см. консоль)</button>
        </div>
    </div>
</div>