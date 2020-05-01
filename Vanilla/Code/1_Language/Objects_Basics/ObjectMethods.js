'use strict';

const user = {
    operandA: null,
    operandB: null,
    read,
    sum,
    mul
};

function read() {
    let operandA = "";
    while(!(operandA === "0" || +operandA || operandA === null)) {
        operandA = prompt("Введите ПЕРВОЕ число");
    }

    let operandB = "";
    while(!(operandB === "0" || +operandB || operandB === null)) {
        operandB = prompt("Введите ВТОРОЕ число");
    }

    if(operandA !== null) this.operandA = operandA;
    if(operandB !== null) this.operandB = operandB;
}

function sum() {
    if(this.operandA !== null && this.operandB !== null) {
        const sum = +this.operandA + +this.operandB;
        alert(`Сумма чисел = ${+sum.toFixed(2)}`);
    } else {
        alert(`Невозможно посчитать сумму, так как 
        отсутствует одно из значений`);
    }
}

function mul() {
    if(this.operandA !== null && this.operandB !== null) {
        const mul = this.operandA * this.operandB;
        alert(`Произведение чисел = ${+mul.toFixed(2)}`);
    } else {
        alert(`Невозможно посчитать произведение, так как 
        отсутствует одно из значений`);
    }
}