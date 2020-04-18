'use strict';

function getSeason() {
    let month = prompt("Введите название месяца", "январь");
    month = month && month.toLowerCase();

    switch (month) {
        case null:
            break;

        case 'январь':
        case 'март':
        case 'май':
        case 'июль':
        case 'август':
        case 'октябрь':
        case 'декабрь':
            alert("31 день");
            break;

        case 'апрель':
        case 'июнь':
        case 'сентябрь':
        case 'ноябрь':
            alert("30 дней");
            break;

        case 'февраль':
            let date = new Date;
            console.log(date);
            date.setMonth(2); date.setDate(0);
            console.log(date);
            alert(`В этом году ${date.getDate()} дней`);
            break;


        default: alert("Неизвестное значение");
    }
}

function getQuadrant() {
    let coords = prompt("Введите X и Y через пробел", "1 2");
    coords = coords && coords.split(" ");
    const coordsStr = coords ? `X = ${coords[0]}; Y = ${coords[1]}.` : "";

    switch (true) {
        case coords === null:
        case coords === "":
            break;

        case coords[0] > 0 && coords[1] > 0:
            alert(`${coordsStr} 1 квадрант`);
            break;

        case coords[0] < 0 && coords[1] < 0:
            alert(`${coordsStr} 3 квадрант`);
            break;

        case coords[0] > 0 && coords[1] < 0:
            alert(`${coordsStr} 4 квадрант`);
            break;

        case coords[0] < 0 && coords[1] > 0:
            alert(`${coordsStr} 2 квадрант`);
            break;

        case coords[0] === "0" || coords[1] === "0":
            alert(`Невозможно определить квадрант, так как 
            одна из коодинат равна нулю`);
            break;

        default: alert("Значения введены неверно");
    }
}

