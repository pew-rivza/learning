'use strict';

let tooltip = createTooltip();

document.addEventListener("DOMContentLoaded", function () {
    let house = document.getElementById('house');

    house.addEventListener('mouseover', function (event) {
        let target = event.target.closest('[data-tooltip]');
        fillTooltip(target);
        target.append(tooltip);
    });

    house.addEventListener('mouseout', function (event) {
        let tooltip = event.target.querySelector('.tooltip');
        if (tooltip) tooltip.remove();
    });
});

function createTooltip() {
    let tooltip = document.createElement('div');
    tooltip.className = 'tooltip';

    return tooltip;
}
function fillTooltip(target) {
    tooltip.innerHTML = target.dataset.tooltip;
    tooltip.style.left = target.getBoundingClientRect().x + 'px';
    tooltip.style.top = target.getBoundingClientRect().y - 50 + 'px';
}

/**
 *
 *  TODO:
 *
 *  1. Сделать позиционирование относительно target-элемента;
 *  2. Если подсказка не помещается в окно, помещать ее внизу;
 *  3. Вынести подсказку в отдельный класс;
 *  4. Выполнить вторую задачу.
 *
 */