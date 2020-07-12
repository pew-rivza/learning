'use strict';

document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener('click', function (event) {
        let element = event.target;

        if(element.dataset.action === 'delete') {
            element.parentElement.remove();
        }
    });

    document.getElementById('toggling-list').addEventListener('click', function (event) {
        let children = event.target.querySelector('ul');

        if (children) {
            children.hidden = !children.hidden;
        }
    });

    document.getElementById('sorting-table').addEventListener('click', function (event) {
        let element = event.target;
        if (element.nodeName !== 'TH') return;

        let table = element.closest('table');
        let index = element.cellIndex;
        let type = element.dataset.type;

        sortColumn(table, index, type);
    });

    document.getElementById('buttons-with-hint').addEventListener('mouseover', function (event) {
        let element = event.target;
        if (!element.dataset.tooltip) return;
        let elementRect = element.getBoundingClientRect();

        let hint = document.createElement('div');
        hint.className = 'hint';
        hint.innerHTML = element.dataset.tooltip;
        this.append(hint);

        let xLimit = document.getElementById('buttons-with-hint').getBoundingClientRect().left;
        let xShift = elementRect.left + (element.offsetWidth - hint.offsetWidth) / 2;
        xShift = Math.max(xShift, xLimit);

        let yLimit = document.querySelector('.menu-container').offsetHeight;
        let yShift = elementRect.top - hint.offsetHeight - 10;
        yShift = yShift < yLimit + 10 ? elementRect.top + element.offsetHeight + 10 : yShift;

        hint.style.top = yShift + 'px' ;
        hint.style.left = xShift + 'px';
    });

    document.getElementById('buttons-with-hint').addEventListener('mouseout', function (event) {
        let element = event.target;
        if (!element.dataset.tooltip) return;

        document.querySelector('.hint').remove();
    });
});

function sortColumn(table, index, type) {
    let rows = Array.from(table.tBodies[0].rows);

    rows.sort((a, b) => {
        let value1 = a.cells[index].textContent;
        let value2 = b.cells[index].textContent;

        switch (type) {
            case 'number':
                return +value1 - +value2;
            case 'string':
                let collator = new Intl.Collator('ru');
                return collator.compare(value1, value2);
        }
    });

    table.tBodies[0].append(...rows);

}