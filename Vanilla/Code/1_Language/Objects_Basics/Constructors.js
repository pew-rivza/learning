'use strict';

function Accumulator(startingValue) {
    this.value = startingValue;

    this.read = () => {
        let value = "";
        do {
            value = prompt("Введите число");
        } while
            (!(value === "0" || +value || value === null));

        if(value !== null) {
            this.value += +value;
        }
    }

}

