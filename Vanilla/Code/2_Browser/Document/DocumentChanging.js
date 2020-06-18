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