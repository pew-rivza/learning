'use strict';

function toJSONExcludeCircular(obj) {
    function replacer(key, value) {
        return value === obj && key !== "" ?
            undefined : value;
    }

    return JSON.stringify(obj, replacer,2);
}

function serializeMeetup() {
    let room = {
        number: 23
    };

    let meetup = {
        title: "Совещание",
        occupiedBy: [{name: "Иванов"}, {name: "Петров"}],
        place: room,
        keke1: 123
    };

    room.occupiedBy = meetup;
    meetup.self = meetup;

    alert( toJSONExcludeCircular(meetup) );
}