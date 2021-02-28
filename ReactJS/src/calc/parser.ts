import {Expression, isNumber, isOperator} from "./utils";

export function parser(str: string): Expression {
    if (!str) return [];

    let expression = str.split(" ");

    if (!isExpression(expression)) throw new Error("Cannot parse expression");

    return expression
}

export function isExpression(expression: Expression): boolean {
    let isOperand: boolean = true;

    for (let part of expression) {
        const isCorrectly: boolean =
            isOperand ? isNumber(part) : isOperator(part);

        if (!isCorrectly) return isCorrectly;

        isOperand = !isOperand;
    }

    return !isOperand;
}