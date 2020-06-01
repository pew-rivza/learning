'use strict';

let range = {
    from: 1,
    to: 5,
    [Symbol.asyncIterator]() {
        return {
            current: this.from,
            last: this.to,
            async next() {
                await new Promise(resolve => setTimeout(resolve, 1000));

                if (this.current <= this.last) {
                    return { value: this.current++, done: false }
                } else {
                    return { done: true }
                }
            }
        }
    }
};

async function iterateAsyncObject() {
    let string = '';
    for await (let number of range) {
        string += number + " ";
    }

    alert(string);
}