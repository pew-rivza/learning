export class DelayTooltip {
    constructor(options) {
        this.targetElement = options.element;
        this.over = options.over;
        this.out = options.out;
        this.speed = 3;
        this.prevPosition = 0;
        this.init();
    }

    init() {
        this.create();
        let tooltip = this.tooltip;
        let self = this;

        this.targetElement.addEventListener('mousemove', function (event) {
            if (Math.abs(event.clientX - self.prevPosition) <= self.speed) {
                this.append(tooltip);
                self.over();
            } else {
                self.prevPosition = event.clientX;
            }
        });

        this.targetElement.addEventListener('mouseleave', function () {
            tooltip.remove();
            self.out();
        })
    }

    create() {
        this.tooltip = document.createElement('div');
        this.tooltip.className = 'tooltip';
        this.tooltip.innerHTML = this.targetElement.dataset.tooltipContent;
    }
}

/* TODO:
    1. проверять скорость не только по х, но и по у;
    2. спозиционировать подсказку;
    3. добавить функции over и out из аргументов;
    4. отрефакторить self;
    5. вынести листенеры в отдельные функции;
    6. подумать, как вывести self.over один раз (ввести state).
 */