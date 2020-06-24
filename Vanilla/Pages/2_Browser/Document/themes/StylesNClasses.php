<script src="/Vanilla/Code/2_Browser/Document/StylesNClasses.js"></script>

<div class="theme">
    <h3 id="styles-n-classes">Стили и классы</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать функцию showNotification(options), которая создает
        уведомление `div.notification` с заданным содержимым. Уведомление
        должно автоматически исчезнуть через 1,5 секунды. Показать уведомление
        с текстом "Hello".

        <div class="header">Решение</div>
        <button onclick="showNotification({top: '10px', right: '10px', html: 'Hello'})">Показать уведомление</button>
    </div>
</div>