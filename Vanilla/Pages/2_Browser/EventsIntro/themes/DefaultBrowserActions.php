<script src="/Vanilla/Code/2_Browser/EventsIntro/DefaultBrowserActions.js"></script>

<div class="theme">
    <h3 id="default-browser-actions">Действия браузера по умолчанию</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Необходимо сделать так, чтобы при клике на ссылки внутри элемента fieldset пользователю
        выводился вопрос о том, действительно ли он хочет покинуть страницу, и если он не хочет,
        то прерывать переход по ссылке.

        <ul>
            Детали:
            <li>
                Содержимое элемента fieldset может быть загружено динамически и присвоено
                при помощи innerHTML. Так что найти все ссылки и поставить на них обработчики
                нельзя. Используйте делегирование.
            </li>
            <li>
                Содержимое может иметь вложенные теги, в том числе внутри ссылок.
            </li>
        </ul>

        <div class="header">Решение</div>
        <div id="preventing-links">
            <fieldset>
                <legend>fieldset</legend>
                <p>
                    Как насчёт того, чтобы прочитать <a href="http://wikipedia.org">Википедию</a> или
                    посетить <a href="http://w3.org"><i>W3.org</i></a> и узнать о современных стандартах?
                </p>
            </fieldset>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Используя делегирование, необходимо создать галерею изображений, в которой основное
        изображение изменяется при клике на уменьшенный вариант.

        <div class="header">Решение</div>
        <div id="linked-gallery">
            <p>
                <img id="largeImg"
                     src="https://en.js.cx/gallery/img1-lg.jpg"
                     alt="Large image">
            </p>

            <ul id="thumbs">
                <li>
                    <a href="https://en.js.cx/gallery/img2-lg.jpg" title="Image 2">
                        <img src="https://en.js.cx/gallery/img2-thumb.jpg" alt="Image 2">
                    </a>
                </li>
                <li>
                    <a href="https://en.js.cx/gallery/img3-lg.jpg" title="Image 3">
                        <img src="https://en.js.cx/gallery/img3-thumb.jpg" alt="Image 3">
                    </a>
                </li>
                <li>
                    <a href="https://en.js.cx/gallery/img4-lg.jpg" title="Image 4">
                        <img src="https://en.js.cx/gallery/img4-thumb.jpg" alt="Image 4">
                    </a>
                </li>
                <li>
                    <a href="https://en.js.cx/gallery/img5-lg.jpg" title="Image 5">
                        <img src="https://en.js.cx/gallery/img5-thumb.jpg" alt="Image 5">
                    </a>
                </li>
                <li>
                    <a href="https://en.js.cx/gallery/img6-lg.jpg" title="Image 6">
                        <img src="https://en.js.cx/gallery/img6-thumb.jpg" alt="Image 6">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>