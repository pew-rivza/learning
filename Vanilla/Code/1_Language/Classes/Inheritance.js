'use strict';

let preciseClock;

document.onreadystatechange = function () {
    if (document.readyState === "interactive") {
        preciseClock = new PreciseClock("h:m:s", 500);
        console.log(preciseClock);
    }
}