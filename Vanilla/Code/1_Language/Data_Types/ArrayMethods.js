'use strict';

function camelize() {
    let string = prompt("Введите строку вида ___-___-___...");
    if (string) {
        let arrayFromString = string.split("-");

        for (let i = 1; i < arrayFromString.length; i++) {
            arrayFromString[i] =
                arrayFromString[i][0].toLocaleUpperCase() +
                arrayFromString[i].slice(1);
        }

        alert(arrayFromString.join(""));
    }
}

function filterRange() {
    let tryMore;

    do {
        initialData.create();

        initialData.filteredArr =
            initialData.array
                .filter((value) =>
                    (value >= initialData.start && value <= initialData.end));

        tryMore = confirm(initialData.getState('filter'));
    } while (tryMore)
}

function sortDesk() {
    let tryMore;

    do {
        initialData.create();

        initialData.sortedDeskArray =
            initialData.array.slice()
                .sort((a, b) => b - a);

        tryMore = confirm(initialData.getState('sort'));
    } while (tryMore)
}

function Calculator() {
    this["+"] = (a, b) => ( +a + +b );
    this["-"] = (a, b) => ( a - b );

    this.calculate = (expression) => {
        let exprParts = expression.split(" ");

        let op1 = exprParts[0];
        let op2 = exprParts[2];
        let func = exprParts[1];

        return this[func](op1, op2);
    }

    this.addMethod = (name, func) => {
        this[name] = func;
    }
}

function makeComputations() {
    let calculator = new Calculator();

    calculator.addMethod("*", (a,b) => (a * b) );
    calculator.addMethod("/", (a,b) => (a / b) );
    calculator.addMethod("**", (a,b) => (a ** b) );

    let result = `
8 + 2 = ${calculator.calculate('8 + 2')}
8 - 2 = ${calculator.calculate('8 - 2')}
8 * 2 = ${calculator.calculate('8 * 2')}
8 / 2 = ${calculator.calculate('8 / 2')}
8 в степени 2 = ${calculator.calculate('8 ** 2')}`;

    alert(result);
}

function shuffle(arr) {
    let tryMore;

    do {
        for (let i = 0; i < arr.length; i++) {
            let j = Math.trunc(Math.random() * (arr.length - 1));

            let temp = arr[i];
            arr[i] = arr[j];
            arr[j] = temp;
        }

        tryMore = confirm(arr)
    } while (tryMore)
}
