export class Modal {
    constructor() {
        this.close = this.close.bind(this);
        this.create();
    }

    create() {
        this.modal = document.createElement('div');
        this.modal.className = 'modal-overlay';

        this.modal.innerHTML =
            '<div class="modal">' +
            '<span class="cross">✖</span>' +
            '</div>';

        this.modal.querySelector('.cross').onclick = this.close;
    }

    addContent(content) {
        this.modal.querySelector('.modal').append(content);
    }

    open() {
        document.body.append(this.modal);
        document.body.style.overflowY = 'hidden';
    }

    close() {
        this.modal.remove();
        document.body.style.overflowY = '';
    }
}