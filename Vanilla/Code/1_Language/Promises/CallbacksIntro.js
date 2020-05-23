'use strict';

function showCircle(radius, callback) {
    let circle = document.createElement('div');
    circle.style.width = "0";
    circle.style.height = "0";
    circle.style.left = (radius + 20) + 'px';
    circle.style.top = (radius + 20) + 'px';
    circle.style.backgroundColor = '#' + (Math.random().toString(16) + '000000').slice(2,8);
    circle.id = 'circle';

    let prevCircle = document.getElementById("circle");
    let container = document.getElementById('circle-container');

    if (prevCircle) prevCircle.remove();
    container.append(circle);


    setTimeout(() => {
        circle.style.width = radius * 2 + 'px';
        circle.style.height = radius * 2 + 'px';

        circle.addEventListener('transitionend', function handler() {
            circle.removeEventListener('transitionend', handler);
            callback("Hello");
        });
    }, 10);
}

function showText(text) {
    let container = document.createElement('div');
    container.append(text);

    let circle = document.getElementById("circle");
    circle.append(container);
}