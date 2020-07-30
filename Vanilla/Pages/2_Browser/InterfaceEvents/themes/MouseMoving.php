<script type="module" src="/Vanilla/Code/2_Browser/InterfaceEvents/MouseMoving.js"></script>

<div class="theme">
    <h3 id="mouse-moving">Движение мыши</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать JavaScript код, который показывает подсказку над элементом с атрибутом
        data-tooltip.
        <ul>
            При этом:
            <li>Значение атрибута должно становиться текстом подсказки.</li>
            <li>Элементы с подсказками могут быть вложены друг в друга.</li>
            <li>Показываться должна подсказка на самом глубоко вложенном элементе.</li>
            <li>Только одна подсказка может быть показана в любой момент времени.</li>
            <li>Функционал подсказки должен быть реализован в виде класса Tooltip.</li>
        </ul>

        <div class="header">Решение</div>
        <div data-tooltip="Здесь домашний интерьер" id="house">
            <div data-tooltip="Здесь крыша" id="roof"></div>

            <p>Жили-были на свете три поросенка. Три брата. Все одинакового роста,
                кругленькие, розовые, с одинаковыми веселыми хвостиками.</p>

            <p>
                <a href="https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B8_%D0%BF%D0%BE%D1%80%D0%BE%D1%81%D1%91%D0%BD%D0%BA%D0%B0"
                   data-tooltip="Читать далее…">
                    Наведи курсор на меня
                </a>
            </p>

        </div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>

        <div class="header">Решение</div>
        <div id="delay-tooltip" data-tooltip-content="Tooltip text">
            Тестовый текст в тестовом блоке
        </div>
    </div>
</div>