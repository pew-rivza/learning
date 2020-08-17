<script src="/Vanilla/Code/2_Browser/InterfaceEvents/DragNDrop.js"></script>

<div class="theme">
    <h3 id="drag-n-drop">Drag'n'Drop с событиями мыши</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Знаете, вот у меня сейчас отпуск, и я не хочу выполнять заготовленные
        современным учебником JavaScript задачи. У меня есть пес, такса, его зовут
        Драник. И я нарисовала его на CSS, вот он - ниже. Задача состоит в том, чтобы
        реализовать drag-n-drop Драника в булочку от хот-дога.

        <div class="header">Решение</div>
        <div id="dog-with-hot-dog">
            <div id="dog">
                <div id="head">
                    <div id="skull">
                        <div id="ear-left"></div>
                        <div id="ear-right"></div>
                        <div id="eye-left"></div>
                        <div id="eye-right"></div>
                        <div id="nose"></div>
                        <div id="tongue"></div>
                    </div>
                </div>
                <div id="body">
                    <div id="torso">
                        <div id="front-pow-left"></div>
                        <div id="front-pow-right"></div>
                        <div id="back-pow-left"></div>
                        <div id="back-pow-right"></div>
                        <div id="spot"></div>
                        <div id="tail"></div>
                    </div>
                </div>
            </div>
            <div id="hot-dog" class="droppable">
                <div id="deepening"></div>
            </div>
        </div>
    </div>
</div>