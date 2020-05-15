'use strict';

// Сумма чисел

function sumToNCycle(number) {
    let sum = 0;

    for (let i = 1; i <= number; i++) {
        sum += i;
    }

    return {result: sum, method: "цикл"};
}

function sumToNRecursion(number) {
    let sum = sumTo(number);

    return {result: sum, method: "рекурсия"};
}

function sumTo(n) {
    return n === 0 ? n : ( n + sumTo(n - 1) );
}

function sumToNProgression(number) {
    let sum = number * ((1 + number) / 2);

    return {result: sum, method: "арифметическая прогрессия"};
}

// Число Фибоначчи

function fibCycle(number) {
    let a = 1;
    let b = 1;

    if (number === 0) return {result: number, method: "цикл"};
    if (number === 1 || number === 2) return {result: 1, method: "цикл"};

    for (let i = 3; i <= number; i++) {
        let c = a + b; a = b; b = c;
    }

    return {result: b, method: "цикл"};
}

function fibRecursion(number) {
    return {result: fibN(number), method: "рекурсия"};
}

function fibN(number) {
    return number <= 1 ? number :
        fibN(number - 1) + fibN(number - 2);
}

function fibBinet(number) {
    let s5 = Math.sqrt(5);
    let s5Sum = (1 + s5) / 2;
    let s5Diff = (1 - s5) / 2;
    let fibNumber = 1 / s5  * (s5Sum**number - s5Diff**number);

    return {result: fibNumber.toFixed(0), method: "формула Бине"};
}

// Связный список

let list = {
    value: 1,
    next: {
        value: 2,
        next: {
            value: 3,
            next: {
                value: 4,
                next: null
            }
        }
    }
};

function enumListCycle() {
    if (Object.entries(list).length === 0) {
        alert("Список пуст");
    } else {
        let values = [];
        let copyList = Object.assign({}, list);

        do {
            values.push(copyList.value);
            copyList = copyList.next;
        }
        while (copyList)

        alert(values);
    }
}

function enumListRecursion() {
    alert(enumList(list));
}

function enumList(list) {
    return list.next ?
        ( list.value + ',' + enumList(list.next) )  :
        list.value;
}

function enumListRevCycle() {
    if (Object.entries(list).length === 0) {
        alert("Список пуст");
    } else {
        let values = [];
        let copyList = Object.assign({}, list);

        do {
            values.push(copyList.value);
            copyList = copyList.next;
        }
        while (copyList)

        alert( values.reverse() );
    }
}

function enumListRevRecursion() {
    alert(enumListRev(list));
}

function enumListRev(list) {
    return list.next ?
        (enumListRev(list.next) + ',' + list.value)  :
        list.value;
}

// Вспомогательные функции

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
        let {result, method} = sumFunc(+number);
        execEnd = Date.now();

        alert(`Результат для ${number} = ${result}`);

        console.log(`Время выполнения (${method}):`);
        console.log(`${execEnd - execStart} мс`);
    }
}