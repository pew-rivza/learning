'use strict';

let EventMixin = {
    _eventHandlers: {},
    trigger(eventName, ...args) {
        let handlers = this._eventHandlers && this._eventHandlers[eventName]

        if (!handlers) return;
        handlers.forEach( handler => handler.apply(this, args) );
    },

    on(eventName, handler) {
        if (!this._eventHandlers) this._eventHandlers = {};

        if (!this._eventHandlers[eventName]) {
            this._eventHandlers[eventName] = [];
        }

        this._eventHandlers[eventName].push(handler);
    },

    off(eventName, handler) {
        let handlers = this._eventHandlers && this._eventHandlers[eventName];
        if (!handlers) return;

        for (let i = 0; i < handlers.length; i++) {
            if (handlers[i] === handler) {
                handlers.splice(i--, 1);
            }
        }
    }
}

class Button {
    _handler = () => {
        alert("Я обработчик и я сработал!");
    };

    hangHandler() {
        this.on('press', this._handler);
    }

    cancelHandler() {
        this.off('press', this._handler);
    }

    pressButton() {
        this.trigger('press');
    }
}

Object.assign(Button.prototype, EventMixin);

let button = new Button();
console.log(button);
