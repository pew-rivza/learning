'use strict';


let range = {
    from: 1,
    to: 5
};

range[Symbol.iterator] = function() {
    return {
        current: this.from,
        last: this.to,
        next: function() {
            if (this.current <= this.last) {
                return {
                    done: false,
                    value: this.current++
                }
            } else {
                return {done: true}
            }
        }
    }
}

function iterateObject() {
    let string = '';
    for (let number of range) {
        string += number + " ";
    }

    alert(string);
}