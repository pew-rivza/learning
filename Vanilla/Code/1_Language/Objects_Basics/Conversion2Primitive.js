'use strict';

let user1 = {
    name: "Петр",
    age: 25,
    rating: 5,
    [Symbol.toPrimitive]: userToPrimitive
};

let user2 = {
    name: "Иван",
    age: 19,
    rating: 7,
    [Symbol.toPrimitive]: userToPrimitive
};

function userToPrimitive(hint) {
    return (
        hint === "string" ?
            `${this.name}, ${this.age} лет, ★${this.rating}` :
            this.rating
    )
}