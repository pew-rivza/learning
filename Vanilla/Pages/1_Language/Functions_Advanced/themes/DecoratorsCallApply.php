<script src="/Vanilla/Code/1_Language/Functions_Advanced/DecoratorsCallApply.js"></script>

<div class="theme">
    <h3 id="decorators-call-apply">Декораторы и переадресация вызова, сall/apply</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать декоратор spy(func), возвращающий обертку, которая сохраняет все вызовы
        функции в своем свойстве calls. Каждый вызов должен сохраняться как массив аргументов.
        Реализовать следующий пример:
        <pre>
function work(a, b) { alert( a + b ); }
work = spy(work);

work(1, 2);
work(4, 5);

for (let args of work.calls) {
  alert( 'call:' + args.join() );
}
</pre>

        <div class="header">Решение</div>
        <button onclick="getSpyDecorator();">Посмотреть результат spy</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Создать декоратор delay(f, ms), который задерживает каждый вызов f на ms
        миллисекунд.

        <div class="header">Решение</div>
        <button onclick="getDelayDecorator();">Посмотреть результат delay</button>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Создать декоратор debounce(f, ms), результатом которого должна быть обертка,
        которая передает вызов в f не более одного раза в ms миллисекунд. Реализовать
        таким образом логирование в консоль фразы "Я функция и я выполнилась!" не чаще,
        чем раз в 2 секунды.

        <div class="header">Решение</div>
        <button onclick="logPhrase('Я функция и я выполнилась!');">Залогировать фразу</button>
    </div>

    <div class="task">
        <div class="header">Задача 4</div>
        Создать «тормозящий» декоратор throttle(f, ms), возвращающий обертку, передавая вызов
        в f не более одного раза в ms миллисекунд. Отличие от debounce – если проигнорированный
        вызов является последним во время «задержки», то он выполняется в конце. Реализовать выведение
        даты с эффектом торможения на 2 секунды.

        <div class="header">Решение</div>
        <button onclick="logDate();">Посмотреть торможение</button>
    </div>
</div>