function getJSName() {
    const JSName = prompt("Какое «официальное» название JavaScript?", "");

    if (JSName !== null) {
        JSName.toLowerCase() === "ecmascript" ?
            alert("Верно!") :
            alert("Не знали? ECMAScript!");
    }
}

function getNumberSign() {
    let tryMore;
    const number = prompt("Введите число", "");

    if (isNaN(+number) || number === "") {
        tryMore = confirm("Не удалось преобразовать в число. Попробовать еще раз?");
    } else if (number === null) {
        tryMore = false;
    } else {
        tryMore = number > 0 ?
            confirm("Число больше нуля. Попробовать еще раз?") :
            (number < 0 ?
                confirm("Число меньше нуля. Попробовать еще раз?") :
                confirm("Число равно нулю. Попробовать еще раз?"));
    }

    tryMore ? getNumberSign() : alert("Приходите еще!");
}