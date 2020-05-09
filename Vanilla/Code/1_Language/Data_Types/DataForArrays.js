'use strict'

let initialData = {
    array: [],
    filteredArray: [],
    sortedDeskArray: [],
    start: null,
    end: null,
    rangeLength: 9,
    create: createInitialData,
    getState: getState
}

function createInitialData() {
    for (let i = 0; i <= this.rangeLength; i++) {
        this.array[i] = Math.trunc(
            Math.random() * this.rangeLength + 1);
    }

    this.start = Math.trunc(Math.random() *
        this.rangeLength +
        1);

    this.end = Math.trunc(Math.random() *
        (this.rangeLength - this.start) +
        this.start + 1);
}

function getState(entity) {
    switch (entity) {
        case 'filter':
            return (
                `Начальный массив: ${this.array}
Диапазон: ${this.start}-${this.end} включительно

Отфильтрованный массив: ${this.filteredArr.length ? this.filteredArr : "Не найдено"}`
            )

        case 'sort':
            return (
                `Начальный массив: ${this.array}
Отсортированный массив: ${this.sortedDeskArray}`
            )
    }

}