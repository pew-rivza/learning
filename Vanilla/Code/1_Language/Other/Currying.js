'use strict';

function curry(func) {

    return function curried(...args) {
        if (args.length >= func.length) {
            return func.apply(this, args);
        } else {
            return function(...args2) {
                return curried.apply(this, args.concat(args2));
            }
        }
    };

}

function sum(a,b,c,d) {
    return a + b + c + d;
}

sum = curry(sum);