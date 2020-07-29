import { Tooltip } from './Tooltip/Tooltip.js';

document.addEventListener("DOMContentLoaded", function () {
    let house = document.getElementById('house');
    let tooltip = new Tooltip();

    house.addEventListener('mouseover', function (event) {
        let target = event.target.closest('[data-tooltip]');
        tooltip.add(target, { x: house });
    });

    house.addEventListener('mouseout', function (event) {
        tooltip.remove(event.target);
    });
});