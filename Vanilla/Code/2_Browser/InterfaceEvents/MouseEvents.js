'use strict';

document.addEventListener("DOMContentLoaded", function () {
    let fileStructure = document.getElementById('file-structure');
    fileStructure.addEventListener('click', function (event) {
        if (event.target.tagName !== 'LI') return;

        if (!event.ctrlKey && !event.metaKey) {
            let listItems = Array.from(this.querySelectorAll('li'));

            listItems.map(item => {
                item.classList.remove('selected');
            });

            event.target.classList.add('selected');
        } else {
            event.target.classList.toggle('selected');
        }
    });

    fileStructure.onmousedown = () => { return false; };
});