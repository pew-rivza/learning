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

function getFormattedDate() {
    let date = askDate();
    let time;

    if (date !== null) {
        time = askTime();

        if (time !== null) {
            date = new Date(date);
            let [hours, minutes, seconds] = time.split(":");
            date.setHours(hours, minutes, seconds,0);

            alert( formatDate(date) )
        }

    }
}