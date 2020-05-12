function formatDate(date) {
    let now = Date.now();
    let diff = now - date;

    let formattedDate = "Где-то в будущем";

    if (diff >= 0) {
        if (diff < 1000) {
            formattedDate = "Прямо сейчас";
        } else if (diff < 1000*60) {
            formattedDate = `${Math.round(diff/1000)} сек. назад`;
        } else if (diff < 1000*3600) {
            formattedDate = `${Math.round(diff/1000/60)} мин. назад`
        } else {
            formattedDate = makeUserFriendlyDate(date);
        }
    }

    return formattedDate;
}

function makeUserFriendlyDate(date) {
    let [day, month, year, hours, minutes] =
        [date.getDate(), date.getMonth() + 1, date.getFullYear(),
            date.getHours(), date.getMinutes()];

    day = day < 10 ? ('0' + day) : day;
    month = month < 10 ? ('0' + month) : month;
    hours = hours < 10 ? ('0' + hours) : hours;
    minutes = minutes < 10 ? ('0' + minutes) : minutes;

    return `${day}.${month}.${year} ${hours}:${minutes}`;
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
                (day ? day.length : 0) === 2 &&
                +year && +month && +day
            );
        }
    }
    while(tryMore);

    return date;
}

function askTime() {
    let time;
    let tryMore;

    do {
        time = prompt('Введите время в формате ЧЧ:ММ:СС');

        if (time !== null) {
            let [hours, minutes, seconds] = time.split(":");
            tryMore = !(
                (hours ? hours.length : 0) === 2 &&
                (minutes ? minutes.length : 0) === 2 &&
                (seconds ? seconds.length : 0) === 2 &&
                (+hours || hours === "00") &&
                (+minutes || minutes === "00") &&
                (+seconds || seconds === "00")
            );
        }
    }
    while(tryMore);

    return time;
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