'use strict'

function getDateAgo() {
    let date = askDate();
    let daysAgo;

    if (date !== null) daysAgo = askDaysAgo();

    if (date !== null && daysAgo !== null) {
        let dateCopy = new Date(date)

        dateCopy.setDate(dateCopy.getDate() - daysAgo);
        alert(`${new Date(date)} - ${daysAgo} дн. = ${dateCopy}`);
    }
}

function askDate() {
    let date;
    let tryMore;

    do {
        date = prompt('Введите дату в формате ГГГГ-ММ-ДД');

        if (date !== null) {
            let [year, month, day] = date.split("-");
            tryMore = !(
                (year ? year.length : 0) === 4 &&
                (month ? month.length : 0) === 2 &&
                (day ? day.length : 0) === 2
            );
        }
    }
    while(tryMore);

    return date;
}

function askDaysAgo() {
    let daysAgo;
    let tryMore;

    do {
        daysAgo = prompt('Введите количество дней');

        if (daysAgo !== null) {
            tryMore = !(daysAgo === "0" || +daysAgo)
        }
    } while (tryMore)

    return daysAgo;
}

