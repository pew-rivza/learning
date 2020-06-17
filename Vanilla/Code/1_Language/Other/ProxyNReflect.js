'use strict';

function propWrapper(target) {
    return new Proxy(target, {
        get(target, prop, receiver) {
            if (prop in target) {
                return Reflect.get(target, prop, receiver);
            } else {
                throw new ReferenceError(`Свойство "${prop}" не существует`)
            }
        }
    });
}

function handleUserProp() {
    let user = {
        name: "John"
    };

    user = propWrapper(user);

    try {
        alert(user.name);
        alert(user.age);
    } catch (e) {
        alert(e);
    }
}

function arrWrapper(target) {
    return new Proxy(target, {
        get(target, prop, receiver) {
            if (prop < 0) {
                return Reflect.get(target, target.length + +prop, receiver);
            } else {
                return Reflect.get(target, prop, receiver);
            }
        }
    });
}

function handleNegativeIndexArr() {
    let array = [1, 2, 3];

    array = arrWrapper(array);

    alert( array[-1] );
    alert( array[-2] );
}

let handlers = Symbol('handlers');

function makeObservable(target) {
    target[handlers] = [];
    target.observe = function(handler) {
        this[handlers].push(handler);
    }

    return new Proxy(target, {
        set(target, prop, value, receiver) {
            let success = Reflect.set(target, prop, value, receiver);

            if (success) {
                target[handlers].forEach(handler => {
                    handler(prop, value);
                });
            }

            return success;
        }
    });
}

function handleObservable() {
    let user = {};

    user = makeObservable(user);

    user.observe((key, value) => {
        alert(`SET ${key}=${value}`);
    });

    user.name = "John";
}