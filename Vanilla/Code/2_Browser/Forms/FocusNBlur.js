'use strict';

document.addEventListener("DOMContentLoaded", function () {
    let container = document.getElementById('fake-input');
    let block = document.querySelector('#fake-input div');
    let fakeTextarea = document.createElement('textarea');

    block.addEventListener('focus', function () {
        makeEditable();
    })

    function makeEditable() {
        fakeTextarea.value = block.textContent;
        block.remove();
        fakeTextarea.addEventListener('blur', makeReadable);
        fakeTextarea.addEventListener('keyup', function (event) {
            if (event.key === 'Enter') fakeTextarea.blur();
        });
        container.append(fakeTextarea);
        fakeTextarea.focus();
    }

    function makeReadable() {
        block.textContent = fakeTextarea.value;
        fakeTextarea.remove();
        container.append(block);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let table = document.getElementById('bagua-table');
    let tableTextarea = document.createElement('textarea');
    let prevContent = '';

    let buttonsContainer = document.createElement('div');
    buttonsContainer.className = 'textarea-buttons';
    let okButton = createButton('ok');
    let cancelButton = createButton('cancel');
    okButton.onclick = saveChanges;
    cancelButton.onclick = cancelChanges;
    buttonsContainer.append(okButton, cancelButton);

    table.addEventListener('click', function (event) {
            let td = event.target.closest('td');
            if (!td) return;
            if (table.querySelector('textarea')) return;

            makeEditable(td);
        });

    function makeEditable(td) {
        tableTextarea.value = prevContent = td.innerHTML;
        td.innerHTML = '';
        td.classList.add('editable');
        td.append(tableTextarea, buttonsContainer);
        tableTextarea.focus();
    }

    function saveChanges(event) {
        let td = event.target.closest('td.editable');
        td.innerHTML = tableTextarea.value;
        td.classList.remove('editable');
        buttonsContainer.remove();
    }

    function cancelChanges(event) {
        let td = event.target.closest('td.editable');
        td.innerHTML = prevContent;
        td.classList.remove('editable');
        buttonsContainer.remove();
    }
});

function createButton(name) {
    let button = document.createElement('button');
    button.id = button.textContent = name;

    return button;
}