'use strict';

let data = {
    ["Рыбы"]: {
        ["форель"]: {},
        ["лосось"]: {}
    },

    ["Деревья"]: {
        ["Огромные"]: {
            ["секвойя"]: {},
            ["дуб"]: {}
        },
        ["Цветковые"]: {
            ["яблоня"]: {},
            ["магнолия"]: {}
        }
    }
};

function createTree(container, data) {
    if (!Object.keys(data).length) return;

    let ul = document.createElement('ul');

    for (let key in data) {
        let li = document.createElement('li');
        li.textContent = key;
        createTree(li, data[key]);
        ul.append(li);
    }

    container.append(ul);

    document.getElementById('tree').previousElementSibling.disabled = true;
}

function calcChilds() {
    let lis = document.getElementById('animals')
        .querySelectorAll('li');

    for(let li of lis) {
        let childsCount = li.querySelectorAll('ul li').length;

        if (!childsCount) continue;

        li.firstChild.data += ` [${childsCount}]`;
    }

    document.getElementById('animals').previousElementSibling.disabled = true;
}

function createCalendar(container, year, month) {
    let date = new Date(year, month - 1, 1);
    let table = document.createElement('table');
    let week;

    table.innerHTML = createCalendarHeader(date);

    while (date.getMonth() !== month) {
        let currentDay = date.getDay() ? date.getDay() - 1 : 6;

        if (date.getDate() === 1 || !currentDay) {
            week = createEmptyWeek();
            table.append(week);
        }

        week.children[currentDay].textContent = date.getDate().toString();
        date.setDate(date.getDate() + 1);
    }

    container.append(table);

    document.getElementById('calendar').previousElementSibling.disabled = true;
}

function createEmptyWeek() {
    let week = document.createElement('tr');

    for(let i = 0; i < 7; i++) {
        let day = document.createElement('td');
        week.append(day);
    }

    return week;
}

function createCalendarHeader(date) {
    let monthFormatter = new Intl.DateTimeFormat('ru', { month: 'long' });

    return (
        `<tr><th colspan="7">${ monthFormatter.format(date) }</th></tr>` +
        '<tr><th>ПН</th><th>ВТ</th><th>СР</th><th>ЧТ</th><th>ПТ</th><th>СБ</th><th>ВС</th></tr>'

    );
}

function generateList() {
    let container = document.getElementById('dynamic-list');
    let list = document.createElement('ul');
    let liContent;

    do {
        liContent = prompt("Введите текст пункта:");

        if (liContent) {
            let li = document.createElement('li');
            li.textContent = liContent;
            list.append(li);
        }
    } while(liContent)

    container.append(list);
    container.previousElementSibling.disabled = true;
}

let colorClock = {
    timer: null,
    startTime,
    stopTime
};

function getTime(date) {
    let hours = date.getHours();
    hours = hours < 10 ? `0${hours}` : hours;
    let minutes = date.getMinutes();
    minutes = minutes < 10 ? `0${minutes}` : minutes;
    let seconds = date.getSeconds();
    seconds = seconds < 10 ? `0${seconds}` : seconds;

    return [hours, minutes, seconds];
}

function fillTime() {
    let date = new Date();
    let [hours, minutes, seconds] = getTime(date);
    let clock = document.getElementById("clock");

    clock.querySelector('#hours').textContent = hours;
    clock.querySelector('#minutes').textContent = minutes;
    clock.querySelector('#seconds').textContent = seconds;
}

function startTime() {
    fillTime()
    this.timer = setInterval(() => fillTime(),1000)
}

function stopTime() {
    clearInterval(this.timer);
}

function sortTableByName() {
    let collator = new Intl.Collator('ru');

    let items = document.getElementById('sorted-table')
        .querySelector('table').tBodies[0];
    let rows = Array.from(items.rows);

    rows.sort((a, b) => {
        return collator.compare(a.cells[0].innerHTML, b.cells[0].innerHTML);
    })

    items.innerHTML = '';
    items.append(...rows);
}