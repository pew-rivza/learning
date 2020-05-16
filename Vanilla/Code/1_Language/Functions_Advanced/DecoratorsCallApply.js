'use strict';

function spy(func) {
    function wrapper(...args) {
        wrapper.calls.push(args);
        return func.apply(this, args);
    }

    wrapper.calls = [];

    return wrapper;
}

function getSpyDecorator() {
    function work(a, b) {
        alert(a + b);
    }

    work = spy(work);

    work(1, 2);
    work(4, 5);

    for (let args of work.calls) {
        alert('call:' + args.join());
    }
}

function delay(f, ms) {
    return function wrapper(...args) {
        setTimeout(() => f.apply(this, args), ms);
    }
}

function getDelayDecorator() {
    function f(x) {
        alert(x);
    }

    let f1000 = delay(f, 1000);
    let f3000 = delay(f, 3000);

    f1000("test");
    f3000("test");
}

function debounce(f, ms) {
    let isAvailable = true;

    return function (...args) {
        if (isAvailable) {
            f.apply(this, args);
            isAvailable = false;
            setTimeout(() => {
                isAvailable = true;
            }, ms);
        }
    }
}

function logPhrase(phrase) {
    console.log(phrase);
}

logPhrase = debounce(logPhrase, 2000);

function throttle(f, ms) {
    let isAvailable = true;
    let savedFunc = {context: null, arguments: null};

    function wrapper(...args) {
        if (isAvailable) {
            f.apply(this, args);
            isAvailable = false;

            setTimeout(function () {
                isAvailable = true;

                if (savedFunc.arguments) {
                    f.apply(savedFunc.context, savedFunc.arguments);
                    savedFunc.context = savedFunc.arguments = null;
                }
            }, ms);
        } else {
            savedFunc.context = this;
            savedFunc.arguments = args;
        }
    }

    return wrapper;
}

function logDate() {
    console.log(`${new Date()} (${Date.now()})`);
}

logDate = throttle(logDate, 2000);