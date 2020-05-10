<?php
?>

<script src="/Vanilla/Code/1_Language/Data_Types/MapNSet.js"></script>

<div class="theme">
    <h3 id="map-n-set">Map и Set</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Анаграммы – это слова, у которых те же буквы в том же количестве, но они
        располагаются в другом порядке. Необходимо написать функцию aclean(arr), которая
        возвращает массив слов, очищенный от анаграмм. Очистите от анаграмм следующий массив:
<pre>
["nap", "teachers", "cheaters", "PAN", "ear", "era", "hectares"]
</pre>

        <div class="header">Решение</div>
        <button onclick="aclean(['nap', 'teachers', 'cheaters', 'PAN', 'ear', 'era', 'hectares'])">
            Посмотреть результат очистки</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Создать функцию unique(arr), которая вернет массив уникальных, не повторяющихся
        значений массива arr:
<pre>
["Hare", "Krishna", "Hare", "Krishna", "Krishna", "Krishna", "Hare",
"Hare", ":-O" ];
</pre>

        <div class="header">Решение</div>
        <button onclick="unique(['Hare', 'Krishna', 'Hare', 'Krishna', 'Krishna', 'Krishna', 'Hare', 'Hare', ':-O' ])">
            Посмотреть уникальные значения</button>
    </div>
</div>