import {Modal} from "./Modal.js";

export class ConfirmModal extends Modal {
    constructor(html, callback) {
        super();
        this.html = html;
        this.callback = callback;
        this.makeAction = this.makeAction.bind(this);
        this.cancelAction = this.cancelAction.bind(this);
        this.init();
    }

    init() {
        let self = this;
        let content = document.createElement('div');

        content.innerHTML =
            `<div>${this.html}</div>` +
            '<form id="submit-form" name="submit-form">' +
                '<input type="text" name="input-value">' +
                '<div class="buttons">' +
                    '<button type="submit">ОК</button>' +
                    '<button id="cancel-button" type="button">ОТМЕНА</button>' +
                '</div>' +
            '</form>';

        document.onkeydown = function(event) {
            if (event.key === 'Escape') { self.cancelAction(); }
        };
        content.querySelector('#submit-form').onsubmit = this.makeAction;
        content.querySelector('#cancel-button').onclick = this.cancelAction;

        this.addContent(content);
    }

    open() {
        super.open();
        document.forms['submit-form'].elements['input-value'].focus();
        this.makeTabNavigation();
    }

    close() {
        super.close();
        document.onkeydown = null;
    }

    makeAction(event) {
        event.preventDefault();
        let value = document.forms['submit-form'].elements['input-value'].value;

        if (!value) return false;
        this.callback(value);
        this.close();
    }

    cancelAction() {
        this.callback(null);
        this.close();
    }

    makeTabNavigation() {
        let elements = document.forms['submit-form'].elements;
        let firstElem = elements[0];
        let lastElem = elements[elements.length - 1];

        firstElem.onkeydown = function (event) {
            if (event.key === 'Tab' && event.shiftKey) {
                lastElem.focus();
                return false;
            }
        }

        lastElem.onkeydown = function (event) {
            if (event.key === 'Tab' && !event.shiftKey) {
                firstElem.focus();
                return false;
            }
        }
    }
}