'use strict'

function aclean(arr) {
    let cleanMap = new Map();

    for (let word of arr) {
        let mapKey = word.toLowerCase().split('').sort().join();
        cleanMap.set(mapKey, word);
    }

    alert( Array.from( cleanMap.values() ) );
}

function unique(arr) {
    alert( Array.from( new Set(arr) ) );
}