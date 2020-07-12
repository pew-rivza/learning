<script src="/Vanilla/Code/2_Browser/EventsIntro/EventsDelegation.js"></script>

<div class="theme">
    <h3 id="event-delegation">Делегирование событий</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Дан список сообщений с кнопками для удаления [x]. С помощью делегирования событий
        написать обработчик для удаления соответствующего блока.
        <div class="header">Решение</div>

        <div id="deleting-list">
            <div class="pane">
                <h3>Лошадь</h3>
                <p>Домашняя лошадь - животное семейства непарнокопытных, одомашненный и единственный сохранившийся подвид дикой лошади, вымершей в дикой природе, за исключением небольшой популяции лошади Пржевальского.</p>
                <button class="remove-button" data-action="delete">[x]</button>
            </div>
            <div class="pane">
                <h3>Осёл</h3>
                <p>Домашний осёл или ишак — одомашненный подвид дикого осла, сыгравший важную историческую роль в развитии хозяйства и культуры человека. Все одомашненные ослы относятся к африканским ослам.</p>
                <button class="remove-button" data-action="delete">[x]</button>
            </div>
            <div class="pane">
                <h3>Кошка</h3>
                <p>Кошка, или домашняя кошка (лат. Félis silvéstris cátus), — домашнее животное, одно из наиболее популярных (наряду с собакой) "животных-компаньонов". С точки зрения научной систематики, домашняя кошка — млекопитающее семейства кошачьих отряда хищных. Ранее домашнюю кошку нередко рассматривали как отдельный биологический вид.
                </p>
                <button class="remove-button" data-action="delete">[x]</button>
            </div>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Создать дерево, которое по клику на заголовок скрывает-показывает потомков.
        <div class="header">Решение</div>

        <div id="toggling-list">
            <ul>
                <li>Животные
                    <ul>
                        <li>Млекопитающие
                            <ul> <li>Коровы</li> <li>Ослы</li> <li>Собаки</li> <li>Тигры</li> </ul>
                        </li>
                        <li>Другие
                            <ul> <li>Змеи</li> <li>Птицы</li> <li>Ящерицы</li> </ul>
                        </li>
                    </ul>
                </li>
                <li>Рыбы
                    <ul>
                        <li>Аквариумные
                            <ul> <li>Гуппи</li> <li>Скалярии</li> </ul>
                        </li>
                        <li>Морские
                            <ul> <li>Морская форель</li> </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Сделать таблицу сортируемой по возрастанию: при клике на элемент th строки таблицы
        должны сортироваться по соответствующему столбцу.
        <div class="header">Решение</div>
            <table id="sorting-table">
                <thead>
                <tr>
                    <th data-type="number">Возраст</th>
                    <th data-type="string">Имя</th>
                </tr>
                </thead>
                <tbody>
                <tr> <td>5</td> <td>Вася</td> </tr>
                <tr> <td>2</td> <td>Петя</td> </tr>
                <tr> <td>12</td> <td>Женя</td> </tr>
                <tr> <td>9</td> <td>Маша</td> </tr>
                <tr> <td>1</td> <td>Илья</td> </tr>
                <tr> <td>4</td> <td>Ё</td> </tr>
                </tbody>
            </table>
    </div>

    <div class="task">
        <div class="header">Задача 3</div>
        Сделать таблицу сортируемой по возрастанию: при клике на элемент th строки таблицы
        должны сортироваться по соответствующему столбцу.
        <div class="header">Решение</div>
        <div id="buttons-with-hint">
            <button data-tooltip="эта подсказка длиннее, чем элемент">Короткая кнопка</button>
            <button data-tooltip="HTML<br>подсказка">Ещё кнопка</button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>