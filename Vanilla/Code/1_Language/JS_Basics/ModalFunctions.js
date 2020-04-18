'use strict';

function get2Power() {
    let tryMore;
    const power = prompt("В какую степень Вы хотите возвести 2?", "2");

    if (isNaN(+power) || power === "") {
        tryMore = confirm(`Не удалось преобразовать в число. 
        Попробовать еще раз?`);
    } else if (power === null) {
        tryMore = false;
    } else {
        tryMore = confirm(`2 в степени ${power} = ${2**power}. 
        Попробовать еще раз?`);
    }

    tryMore ? get2Power() : alert("Приходите еще!");
}