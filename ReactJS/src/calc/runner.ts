import {parser} from "./parser";
import {calculate} from "./calculator";
import {PRIORITIES} from "./operators";

export function runner(expression: string): string {
    if (expression === "exit") process.exit(1);

    const operationsOrder = [PRIORITIES.second, PRIORITIES.third];
    let result = parser(expression);

    for (let priority of operationsOrder) {
        result = calculate(result, priority);
    }

    return result[0];
}