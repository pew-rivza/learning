'use strict'

function sumSalaries(salaries) {
    let sum = 0;

    for (let salary of Object.values(salaries)) {
        sum += salary;
    }

    alert(sum);
}

function countObj(obj) {
    alert(Object.entries(obj).length);
}