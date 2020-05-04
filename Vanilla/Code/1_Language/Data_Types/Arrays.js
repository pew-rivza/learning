'use strict';

function sumInput() {
    let term = "0";
    let sumArr = [];

    do {
        sumArr.push(+term);
        term = prompt("Введите слагаемое");
    }
    while(term === "0" || +term);

    let sum = sumArr.reduce( (acc, cur) => (acc + cur), 0 );
    alert(sum);
}

function getMaxSubSumN2(arr) {
    let startTime = new Date();
    let maxSum = 0;

    for (let i = 0; i < arr.length; i++) {
        let subSum = 0;

        for (let j = i; j < arr.length; j++) {
            subSum += arr[j];
            maxSum = Math.max(subSum, maxSum);
        }
    }

    console.log(`Время медленного O(n^2) алгоритма: ${new Date() - startTime} мс`);
    return maxSum;
}

function getMaxSubSumN(arr) {
    let startTime = new Date();
    let maxSum = 0;
    let subSum = 0;

    for (let i = 0; i < arr.length; i++) {
        subSum += arr[i];
        maxSum = Math.max(maxSum, subSum);
        subSum = Math.max(subSum, 0);
    }

    console.log(`Время быстрого O(n) алгоритма: ${new Date() - startTime} мс`);
    return maxSum;
}

function makeBigArray() {
    let bigArr = [];

    for (let i =0; i <= 1000; i++) {
        let number = parseInt( '' + (Math.random() * 201 - 100) );
        bigArr.push(number);
    }

    return bigArr;
}

function getArraySum() {
    let array = makeBigArray();

    alert(`Медленный алгоритм\n${getMaxSubSumN2(array)}`);
    alert(`Быстрый алгоритм\n${getMaxSubSumN(array)}`);

    console.log(`Массив:\n${array.toString().replace(/,/g, ', ')}`);
}