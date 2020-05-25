'use strict';

function showCirclePromise(radius) {
    return new Promise(resolve => {
        let circle = document.createElement('div');
        Object.assign(circle.style, configureStyles(radius));
        circle.id = 'circle2';

        let prevCircle = document.getElementById("circle2");
        let container = document.getElementById('circle-container2');

        if (prevCircle) prevCircle.remove();
        container.append(circle);

        setTimeout(() => {
            circle.style.width = radius * 2 + 'px';
            circle.style.height = radius * 2 + 'px';

            circle.addEventListener('transitionend', function handler() {
                circle.removeEventListener('transitionend', handler);
                resolve("Hello");
            });
        }, 10);
    });

}

function showTextPromise(text) {
    let container = document.createElement('div');
    container.append(text);

    let circle = document.getElementById("circle2");
    circle.append(container);
}