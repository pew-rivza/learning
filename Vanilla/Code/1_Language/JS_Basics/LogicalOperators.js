'use strict';

function login() {
    let login = prompt("Введите логин", "");
    login = login && login.toLowerCase();

    if (!login) {
        alert("Отменено");
    } else if (login === "админ") {
        askPassword();
    } else {
        alert("Я вас не знаю")
    }
}

function askPassword() {
    let password = prompt("Введите пароль", "");
    password = password && password.toLowerCase();

    if (!password) {
        alert("Отменено");
    } else if (password === "я главный") {
        alert("Здравствуйте!");
    } else {
        alert("Неверный пароль")
    }
}