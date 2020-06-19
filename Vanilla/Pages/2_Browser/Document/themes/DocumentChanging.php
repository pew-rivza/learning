<script src="/Vanilla/Code/2_Browser/Document/DocumentChanging.js"></script>

<div class="theme">
    <h3 id="document-changing">Изменение документа</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию createTree, которая создает вложенный список
        ul/li из объекта data и вставляет его в элемент container. Преобразовать
        в список следующий объект:
<pre>
let data = {
    "Рыбы": {
    "форель": {},
    "лосось": {}
    },

    "Деревья": {
        "Огромные": {
            "секвойя": {},
            "дуб": {}
        },
        "Цветковые": {
            "яблоня": {},
            "магнолия": {}
        }
    }
};
</pre>

        <div class="header">Решение</div>
        <button onclick="createTree(document.getElementById('tree'), data);">Преобразовать</button>
        <div id="tree" class="decision-container"></div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Есть дерево, организованное в виде вложенных списков ul/li. Написать код,
        который добавит каждому элементу списка количество вложенных в него элементов.
        Узлы нижнего уровня, без детей пропускаются.

        <div class="header">Решение</div>
        <button onclick="calcChilds();">Вычислить</button>
        <div id="animals" class="decision-container">
            <ul>
                <li>Животные
                    <ul>
                        <li>Млекопитающие
                            <ul>
                                <li>Коровы</li>
                                <li>Ослы</li>
                                <li>Собаки</li>
                                <li>Тигры</li>
                            </ul>
                        </li>
                        <li>Другие
                            <ul>
                                <li>Змеи</li>
                                <li>Птицы</li>
                                <li>Ящерицы</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Рыбы
                    <ul>
                        <li>Аквариумные
                            <ul>
                                <li>Гуппи</li>
                                <li>Скалярии</li>
                            </ul>
                        </li>
                        <li>Морские
                            <ul>
                                <li>Морская форель</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Написать функцию createCalendar(elem, year, month). Вызов функции должен создать
        календарь для заданного месяца month в году year и вставить его в elem. Календарь
        должен быть таблицей, где неделя – это tr, а день – это td. У таблицы должен быть
        заголовок с названием месяца, а также заголовок с названиями дней недели, каждый
        день – th, первым днем недели должен быть понедельник. Вывести календарь на текущий
        месяц.

        <div class="header">Решение</div>
        <button onclick="createCalendar(document.getElementById('calendar'),
        new Date().getFullYear(),
        new Date().getMonth()+1);">
            Создать календарь</button>
        <div id="calendar" class="decision-container">
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 4</div>
        Написать интерфейс для создания списка.
        Для каждого пункта:

        <ol>
            <li>Запросить содержимое пункта у пользователя с помощью prompt.</li>
            <li>Создать элемент li и добавляйте его к ul.</li>
            <li>Процесс прерывается, когда пользователь нажимает Esc или вводит пустую строку.</li>
        </ol>
        Все элементы должны создаваться динамически. Если пользователь вводит HTML-теги - пусть в
        списке они показываются как обычный текст.

        <div class="header">Решение</div>
        <button onclick="generateList();">Создать список</button>
        <div id="dynamic-list" class="decision-container">
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 5</div>
        Создать цветные часы.

        <div class="header">Решение</div>
        <div class="buttons-bar">
            <button onclick="colorClock.startTime();">Старт</button>
            <button onclick="colorClock.stopTime();">Стоп</button>
        </div>

        <div id="clock" class="decision-container">
            <span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 6</div>
        Отсортировать таблицу по столбцу Имя (по возрастанию) с учетом русской локали.

        <div class="header">Решение</div>
        <button onclick="sortTableByName();">Отсортировать</button>

        <div id="sorted-table" class="decision-container">
            <table>
                <thead>
                    <tr><th>Имя</th><th>Возраст</th></tr>
                </thead>
                <tbody>
                    <tr><td>Максим</td><td>25</td></tr>
                    <tr><td>Анна</td><td>21</td></tr>
                    <tr><td>Ёнхи</td><td>23</td></tr>
                    <tr><td>Клим</td><td>18</td></tr>
                    <tr><td>Галина</td><td>27</td></tr>
                    <tr><td>Мария</td><td>27</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>