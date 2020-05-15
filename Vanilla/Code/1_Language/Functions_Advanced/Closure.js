'use strict';

let arr = [1, 2, 3, 4, 5, 6, 7];

function isBetween(min, max) {
    return function (item) {
        return item >= min && item <= max;
    };
}

function inArray(array) {
    return function (item) {
        return array.includes(item);
    };
}


function abc() {
    alert( arr.filter(inArray([1,2,10])) );
}