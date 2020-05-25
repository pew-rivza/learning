'use strict';

function showCircleCallback(radius, callback) {
    let circle = document.createElement('div');
    Object.assign(circle.style, configureStyles(radius));
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

function showTextCallback(text) {
    let container = document.createElement('div');
    container.append(text);

    let circle = document.getElementById("circle");
    circle.append(container);
}

function configureStyles(radius) {
    return {
        width: "0",
        height: "0",
        left: (radius + 20) + 'px',
        top: (radius + 20) + 'px',
        backgroundColor: '#' + (Math.random().toString(16) + '000000').slice(2,8)
    }
}