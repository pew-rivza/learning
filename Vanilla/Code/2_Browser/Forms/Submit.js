import {ConfirmModal} from "../../ConfirmModal.js";

function showPrompt(html, callback) {
    let modal = new ConfirmModal(html, callback);
    modal.open();
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('show-modal').onclick = function () {
        showPrompt('Введите что-нибудь<br>...умное :)', function(value) {
            alert(value);
        });
    }
});