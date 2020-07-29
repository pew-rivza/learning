export class Tooltip {
    constructor() {
        this.tooltip = document.createElement('div');
        this.tooltip.className = 'tooltip';
    }

    position(target, limitObjects) {
        let targetRect = target.getBoundingClientRect();

        let xLimit = limitObjects.x ? limitObjects.x.getBoundingClientRect().left : 0;
        let xShift = targetRect.left + (target.offsetWidth - this.tooltip.offsetWidth) / 2;
        xShift = Math.max(xShift, xLimit);

        let yLimitObject = limitObjects.y || document.querySelector('.menu-container');
        let yLimit = yLimitObject.offsetHeight;
        let yShift = targetRect.top - this.tooltip.offsetHeight - 10;
        yShift = yShift < yLimit + 10 ? targetRect.top + target.offsetHeight + 10 : yShift;

        this.tooltip.style.top = yShift + 'px' ;
        this.tooltip.style.left = xShift + 'px';
    }

    add(target, limitObjects) {
        this.tooltip.innerHTML = target.dataset.tooltip;
        target.append(this.tooltip);
        this.position(...arguments);
    }

    remove(target) {
        let tooltip = target.querySelector('.tooltip');
        if (tooltip) tooltip.remove();
    }
}