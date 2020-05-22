class PreciseClock extends Clock {
    constructor(template, precision = 1000) {
        super(template);
        this.precision = precision;
    }

    start() {
        super.render();
        this.timer = setInterval(() => super.render(), this.precision);
    }
}