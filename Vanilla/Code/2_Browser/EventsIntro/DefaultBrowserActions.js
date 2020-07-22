'use strict';

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('preventing-links')
        .addEventListener('click', function (event) {
            let target = event.target.closest('a');

            if (!target || !confirmLink(target.href)) {
                event.preventDefault();
            }
        });

    document.querySelector('#linked-gallery #thumbs')
        .addEventListener('click', function (event) {
            let smallImage = event.target.closest('a');
            if (!smallImage) return;

            event.preventDefault();
            let largeImage = document.getElementById('largeImg');
            largeImage.setAttribute('src', smallImage.href);
        });
});

function confirmLink(href) {
    return confirm(`Вы действительно хотите перейти по ссылке ${href}?`);
}