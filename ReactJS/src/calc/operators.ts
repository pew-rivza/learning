export type Priority = "first" | "second" | "third";
type Priorities = { first: Priority, second: Priority, third: Priority };
export const PRIORITIES: Priorities = {
    first: "first",
    second: "second",
    third: "third"
};

export interface Operator {
    priority: Priority,
    calc: (firstOperand: number, secondOperand: number) => number
}

export const mul: Operator = {
    priority: PRIORITIES.second,
    calc: (a: number, b: number): number => a * b
};

export const div: Operator = {
    priority: PRIORITIES.second,
    calc: (a: number, b: number): number => a / b

};

export const sum: Operator = {
    priority: PRIORITIES.third,
    calc: (a: number, b: number): number => a + b
};

export const sub: Operator = {
    priority: PRIORITIES.third,
    calc: (a: number, b: number): number => a - b
};