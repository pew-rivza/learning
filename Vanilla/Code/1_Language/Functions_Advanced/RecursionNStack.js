'use strict';

function sumToNCycle(number) {
    let sum = 0;

    for (let i = 1; i <= number; i++) {
        sum += i;
    }

    return {sum, method: "цикл"};
}

function sumToNRecursion(number) {
    let sum = sumTo(number);

    return {sum, method: "рекурсия"};
}

function sumTo(n) {
    return n === 0 ? n : ( n + sumTo(n - 1) );
}

function sumToNProgression(number) {
    let sum = number * ((1 + number) / 2);

    return {sum, method: "арифметическая прогрессия"};
}



function askNumber() {
    let number = "";
    do {
        number = prompt("Введите целое положительное число");
    } while
        (!( isInt(number) && number >= 0 || number === null ));

    return number;
}

function isInt(n) {
    return (n === "0" || +n) && !( +n - Math.trunc(+n) );
}

function execTimeTemplate(sumFunc) {
    let number = askNumber();
    let execStart, execEnd;

    if (number !== null) {
        execStart = Date.now();
        let {sum, method} = sumFunc(+number);
        execEnd = Date.now();

        alert(`Результат от 0 до ${number} = ${sum}`);

        console.log(`Время выполнения (${method}):`);
        console.log(`${execEnd - execStart} мс`);
    }
}