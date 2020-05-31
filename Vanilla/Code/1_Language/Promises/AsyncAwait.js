'use strict';

class HttpError extends Error {
    constructor(response) {
        super(`${response.status} for ${response.url}`);
        this.name = 'HttpError';
        this.response = response;
    }
}

async function loadJson(url) {
    let response = await fetch(url);

    if (response.status === 200) {
        return response.json();
    } else {
        throw new HttpError(response);
    }
}

async function demoGithubUser() {
    let name, user;

    do {
        name = prompt("Введите логин:", "pew-rivza");

        try {
            user = await loadJson(`https://api.github.com/users/${name}`);
            alert(`Полное имя: ${user.name}.`);
            return user;
        } catch (error) {
            if (error instanceof HttpError && error.response.status === 404) {
                alert("Такого пользователя не существует, пожалуйста, повторите ввод.");
            } else {
                throw error;
            }
        }

    } while (!user)
}