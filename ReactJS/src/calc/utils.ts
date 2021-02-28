import {div, mul, sub, sum} from "./operators";
import {Operator} from "./operators";
const chalk = require('chalk');

export type Expression = string[];

export const OPERATORS: {[prop: string]: Operator} = {
    "+": sum,
    "-": sub,
    "*": mul,
    "/": div
}

export function isNumber(num: string): boolean {
    return !isNaN(parseFloat(num)) && !isNaN(+num);
}

export function isOperator(op: string): boolean {
    return !!~Object.keys(OPERATORS).indexOf(op);
}

export const log = (data, isError = false) => {
    console.log(chalk.white[isError ? "bgRed" : "bgCyan"]
        .bold(` ${isError ? "Error" : "Result"}: ${data} `));
}