'use strict';

document.addEventListener("DOMContentLoaded",  function () {
    updateDeposit();
    document.forms.deposit.oninput = function () { updateDeposit(); };
});

function updateDeposit() {
    let form = document.forms.deposit;
    let initial = form.elements["first-deposit"].value;
    let interest = form.elements.interest.value / 100;
    let years = form.elements["deposit-time"].value / 12;
    let result = Math.round(initial * (1 + interest * years));

    document.querySelector('.deposit-result #was span').textContent = initial;
    document.querySelector('.deposit-result #became span').textContent = '' + result;
}