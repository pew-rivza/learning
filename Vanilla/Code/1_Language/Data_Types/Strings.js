'use strict';

function ucFirst() {
    let str = prompt("Введите строку");
    if (str) {
        alert( str[0].toUpperCase() + str.slice(1) );
    }
}

function checkSpam() {
    let str = prompt("Введите сообщение");

    if (str) {
        let lowerStr = str.toLowerCase();

        lowerStr.includes("viagra") ||
        lowerStr.includes("xxx") ?
            alert("Это спам") :
            alert("Письмо не содержит спам");
    }
}

function truncate() {
    let str = prompt("Введите сообщение");

    if (str !== null) {
        let maxLength = "";

        while (!(maxLength === "0" || +maxLength || maxLength === null)) {
            maxLength = prompt("Введите ограничение")
        }

        if (maxLength !== null) {
            let limit = parseInt(maxLength);

            if (str.length > limit && limit) {
                alert(`${str.slice(0, limit)}...`);
            } else {
                alert(str.length <= limit ? str : "");
            }
        }
    }
}

function template(strings, ...keys) {
    return function (...words) {
        let song = [];
        
        keys.map(key => {
            key === '.' ?
                song.push('\n'):
                song.push(words[key] + " ");
        });
        
        return song.join("");
    }

}

function singSBV() {
    let singTemplate =
        template`${0}${0}${1}${1}${'.'}
        ${0}${0}${2}${2}${'.'}
        ${0}${1}${0}${2}${'.'}
        ${0}${1}${2}`;

    alert(singTemplate('соку', 'бачи', 'вира'));
}