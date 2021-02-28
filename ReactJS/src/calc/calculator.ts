import {Expression, isNumber, isOperator, OPERATORS} from "./utils";
import {PRIORITIES, Priority} from "./operators";

export function calculate(expression: Expression, priority: Priority): Expression {
    if (!expression.length) throw new Error("Expression is empty")

    let newExpression: Expression;

    newExpression = expression.reduce<string[]>((result: Expression, next: string): Expression => {
        const current = result[result.length - 1];
        const prev = result[result.length - 2];

        if (isOperator(current) && OPERATORS[current].priority === priority) {
            if (current === "/" && prev === "0" && next === "0") {
                throw new Error("Trying to divide zero by zero")
            }

            const calculation = OPERATORS[current].calc(+prev, +next);
            result = result.slice(0, -2);
            result.push(calculation.toString());
        } else {
            result.push(next);
        }

        return result;
    }, []);

    return newExpression;
}