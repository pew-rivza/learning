export class DelayTooltip {
    constructor(options) {
        this.targetElement = options.element;
        this.over = options.over;
        this.out = options.out;

        this.prevPositionX = 0;
        this.prevPositionY = 0;
        this.distanceDelta = 3;

        this.trackMouse = this.trackMouse.bind(this);

        this.init();

    }

    init() {
        this.create();
        let self = this;

        this.targetElement.addEventListener('mouseenter', function () {
            self.targetElement.addEventListener('mousemove', self.trackMouse);
            self.over();
        })


        this.targetElement.addEventListener('mouseleave', function () {
            self.tooltip.remove();
            self.targetElement.removeEventListener('mousemove', self.trackMouse);
            self.out();
        })
    }

    create() {
        this.tooltip = document.createElement('div');
        this.tooltip.className = 'tooltip';
        this.tooltip.innerHTML = this.targetElement.dataset.tooltipContent;
    }

    trackMouse(event) {
        let dist = Math.sqrt(
            Math.pow(event.clientX - this.prevPositionX, 2)
            + Math.pow(event.clientY - this.prevPositionY, 2)
        );

        if (dist <= this.distanceDelta) {
            this.add();
        } else {
            this.prevPositionX = event.clientX;
            this.prevPositionY = event.clientY;
        }
    }

    add () {
        this.targetElement.append(this.tooltip);
        this.tooltip.style.left = this.targetElement.getBoundingClientRect().left + 'px';
        this.tooltip.style.top = (this.targetElement.getBoundingClientRect().top
            - this.tooltip.offsetHeight - 10) + 'px';
    }
}