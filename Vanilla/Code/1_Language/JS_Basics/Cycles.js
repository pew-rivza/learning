'use strict';

function getNumGT100() {
    let number = prompt("Введите число больше ста", "");

    if (number !== null) {
        while (+number <= 100 || !+number) {
            number = prompt("Неверно! Попробуйте еще раз:", "");
        }
        alert("Верно!");
    }
}

function getInterval() {
    let interval = NaN;

    while (
        !((+interval || interval === "0") &&
        (isValid(interval) && inRange(interval)))
        ) {

        if (interval === null) break;
        if (isValid(interval) && !inRange(interval)) {
            alert("Число выходит за рамки допустимого диапазона");
            interval = NaN;
            continue;
        }

        interval =
            prompt("Для вывода простых чисел от 2 до N введите N от 3 до 2251:",
                "2");
    }

    return interval;

    function inRange(number) {
        return +number > 2  && +number < 2252;
    }

    function isValid(number) {
        return number !== null && number !== "" && !isNaN(+number)
    }
}

function isPrime(number) {
    for (let i = 2; i < number; i++) {
        if (!(number % i)) return false;
    }

    return true;
}

function calcPrimeNum() {
    const interval = getInterval();

    if (interval !== null) {
        let primes = [];
        for (let num = 2; num <= interval; num++) {
            if (isPrime(num)) primes.push(num);
        }

        alert(`Простые числа от 2 до ${interval}: 
        ${primes.join(", ")}`);
    }
}