<script src="/Vanilla/Code/2_Browser/Forms/FocusNBlur.js"></script>

<div class="theme">
    <h3 id="focus-n-blur">Фокусировка: focus/blur</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать div, который превращается в textarea, если на него кликнуть. Textarea позволяет
        редактировать текст в элементе div. Когда пользователь нажимает Enter или переводит фокус,
        textarea превращается обратно в div, и его содержимое становится текстом в div.

        <div class="header">Решение</div>
        <div id="fake-input">
            <div tabindex="0">Текст</div>
        </div>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Сделать ячейки таблицы редактируемыми по клику.

        <ul>
            При этом:
            <li>По клику – ячейка должна стать «редактируемой» (textarea появляется внутри),
                мы можем изменять HTML. Изменение размера ячейки должно быть отключено.</li>
            <li>Кнопки OK и ОТМЕНА появляются ниже ячейки и, соответственно, завершают/отменяют
                редактирование.</li>
            <li>Только одну ячейку можно редактировать за один раз. Пока td в «режиме
                редактирования», клики по другим ячейкам игнорируются.</li>
            <li>Таблица может иметь множество ячеек.</li>
        </ul>

        <div class="header">Решение</div>
        <div id="editable-table">
            <table id="bagua-table">
                <tr>
                    <th colspan="3">Квадрат <em>Bagua</em>: Направление, Элемент, Цвет, Значение</th>
                </tr>
                <tr>
                    <td class="nw"><strong>Северо-Запад</strong>
                        <br>Металл
                        <br>Серебро
                        <br>Старейшины
                    </td>
                    <td class="n"><strong>Север</strong>
                        <br>Вода
                        <br>Синий
                        <br>Перемены
                    </td>
                    <td class="ne"><strong>Северо-Восток</strong>
                        <br>Земля
                        <br>Жёлтый
                        <br>Направление
                    </td>
                </tr>
                <tr>
                    <td class="w"><strong>Запад</strong>
                        <br>Металл
                        <br>Золото
                        <br>Молодость
                    </td>
                    <td class="c"><strong>Центр</strong>
                        <br>Всё
                        <br>Пурпурный
                        <br>Гармония
                    </td>
                    <td class="e"><strong>Восток</strong>
                        <br>Дерево
                        <br>Синий
                        <br>Будущее
                    </td>
                </tr>
                <tr>
                    <td class="sw"><strong>Юго-Запад</strong>
                        <br>Земля
                        <br>Коричневый
                        <br>Спокойствие
                    </td>
                    <td class="s"><strong>Юг</strong>
                        <br>Огонь
                        <br>Оранжевый
                        <br>Слава
                    </td>
                    <td class="se"><strong>Юго-Восток</strong>
                        <br>Дерево
                        <br>Зеленый
                        <br>Роман
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>