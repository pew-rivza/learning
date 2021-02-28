import readline from 'readline-promise';
import {runner} from "./runner";
import {log} from "./utils";

const rlp = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
    terminal: true
});

const question = () => rlp.questionAsync("\nEnter the expression:\n");

function ask(func) {
    func()
        .then(
            expression => log(runner(expression)),
            error => log(error.message, true)
        )
        .catch(error => log(error.message, true))
        .then(() => ask(func))
}

ask(question);