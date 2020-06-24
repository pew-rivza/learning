'use strict';

function showNotification(options) {
    let notification = document.createElement('div');

    notification.classList.add('notification');
    if (options.className) notification.classList.add(options.className);
    notification.innerHTML = options.html;
    notification.style.top = options.top;
    notification.style.right = options.right;

    document.body.append(notification);
    setTimeout(() => notification.remove(), 1500)
}