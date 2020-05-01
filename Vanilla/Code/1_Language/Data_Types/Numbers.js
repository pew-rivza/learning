'use strict';

function getRandom(randomFunction) {
    let min = "";
    while(!(min === "0" || +min || min === null)) {
        min = prompt("Введите МИНИМАЛЬНОЕ значение диапазона");
    }

    let max = "";
    if (min !== null) {
        while(!(max === "0" || +max || max === null)) {
            max = prompt("Введите МАКСИМАЛЬНОЕ значение диапазона");
        }
    }

    if (min !== null && max !== null) {
        let tryMore;

        do {
            tryMore = confirm(randomFunction(min, max));
        }
        while(tryMore);
    }
}

function random(min, max) {
    return Math.random() * (max - min) + +min;
}

function randomInt(min, max) {
    return parseInt(
        '' +
        ( Math.random() * (max - min + 1) + +min )
    );
}