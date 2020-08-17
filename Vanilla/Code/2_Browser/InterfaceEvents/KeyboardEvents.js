'use strict';

function runOnKeys(func, ...codes) {
    let keysCodes = new Set();

    document.addEventListener('keydown', function (event) {
        keysCodes.add(event.code);

        let isAllPressed = codes.every( value => keysCodes.has(value) );
        if(keysCodes.size === codes.length && isAllPressed) {
            func();
            keysCodes.clear();
        }
    });

    document.addEventListener('keyup', function (event) {
        keysCodes.delete(event.code);
    });
}

document.addEventListener("DOMContentLoaded", function () {
    runOnKeys(() => alert("Oh yes! Love"), 'KeyL', 'KeyO', 'KeyV', 'KeyE');
});

