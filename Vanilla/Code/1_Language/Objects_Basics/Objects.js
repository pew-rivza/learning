'use strict';

function sumSalaries() {
    let salaries = {
        John: 100,
        Ann: 160,
        Pete: 130
    };
    let sum = 0;
    
    for (let key in salaries) {
        sum += salaries[key];
    }

    alert(sum);
}

function multiplyNumeric() {
    let menu = {
        width: 200,
        height: 300,
        title: "My menu"
    };

    for (let key in menu) {
        if(typeof menu[key] === "number") {
            menu[key] *= 2;
        }
    }

    alert(JSON.stringify(menu));
}