import { Tooltip } from './Tooltip/Tooltip.js';
import { DelayTooltip } from './Tooltip/DelayTooltip.js';

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

    new DelayTooltip({
        element: document.getElementById('delay-tooltip'),
        over() { console.log("on element!"); },
        out() { console.log("out element!"); }
    });
});