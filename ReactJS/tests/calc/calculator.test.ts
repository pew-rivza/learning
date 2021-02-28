import {calculate} from "../../src/calc/calculator";
import {PRIORITIES} from "../../src/calc/operators";

describe("CALCULATE function: ", () => {
    test("should calculate expressions with SECOND priority operators", () => {
        expect(calculate(["5", "+", "2", "*", "7", "-", "4", "/", "1"], PRIORITIES.second))
            .toEqual(["5", "+", "14", "-", "4"]);
        expect(calculate(["15", "*", "0.5", "/", "2"], PRIORITIES.second))
            .toEqual(["3.75"]);
        expect(calculate(["1", "+", "2", "*", "3", "*", "4", "+", "5"], PRIORITIES.second))
            .toEqual(["1", "+", "24", "+", "5"]);
        expect(calculate([".7", "-", "2.1", "/", "0.5"], PRIORITIES.second))
            .toEqual([".7", "-", "4.2"]);
        expect(calculate(["23"], PRIORITIES.second))
            .toEqual(["23"]);
        expect(calculate(["23", "+", "7"], PRIORITIES.second))
            .toEqual(["23", "+", "7"]);
        expect(calculate(["23", "*", "2"], PRIORITIES.second))
            .toEqual(["46"]);
        expect(calculate(["-4.1", "*", "2", "+", "8"], PRIORITIES.second))
            .toEqual(["-8.2", "+", "8"]);
        expect(calculate(["0", "+", "15", "*", "0.5", "/", "2", "-", "2"], PRIORITIES.second))
            .toEqual(["0", "+", "3.75", "-", "2"]);
        expect(calculate(["5", "/", "0", "*", "2"], PRIORITIES.second))
            .toEqual(["Infinity"]);
        expect(calculate(["1", "/", "0", "+", "0.4"], PRIORITIES.second))
            .toEqual(["Infinity", "+", "0.4"]);
        expect(calculate(["-3.7", "+", "2", "*", "0", "/", "7", "+", "3.8"], PRIORITIES.second))
            .toEqual(["-3.7", "+", "0", "+", "3.8"]);
    })

    test("should calculate expressions with THIRD priority operators", () => {
        expect(calculate(["5", "+", "14", "-", "4"], PRIORITIES.third))
            .toEqual(["15"]);
        expect(calculate(["3.75"], PRIORITIES.third))
            .toEqual(["3.75"]);
        expect(calculate(["1", "+", "24", "+", "5"], PRIORITIES.third))
            .toEqual(["30"]);
        expect(calculate([".7", "-", "4.2"], PRIORITIES.third))
            .toEqual(["-3.5"]);
        expect(calculate(["23"], PRIORITIES.third))
            .toEqual(["23"]);
        expect(calculate(["-8.5", "+", "8"], PRIORITIES.third))
            .toEqual(["-0.5"]);
        expect(calculate(["0", "+", "3.75", "-", "2"], PRIORITIES.third))
            .toEqual(["1.75"]);
        expect(calculate(["Infinity"], PRIORITIES.third))
            .toEqual(["Infinity"]);
        expect(calculate(["Infinity", "+", "0.4"], PRIORITIES.third))
            .toEqual(["Infinity"]);
        expect(calculate(["12", "-", "Infinity", "+", "0.4"], PRIORITIES.third))
            .toEqual(["-Infinity"]);
        expect(calculate(["-12", "+", "Infinity"], PRIORITIES.third))
            .toEqual(["Infinity"]);
        expect(calculate(["-3.7", "+", "0", "+", "3.95"], PRIORITIES.third))
            .toEqual(["0.25"]);
        expect(calculate(["5", "/", "0", "*", "2"], PRIORITIES.third))
            .toEqual(["5", "/", "0", "*", "2"]);
        expect(calculate(["23", "-", "7"], PRIORITIES.third))
            .toEqual(["16"]);
        expect(calculate(["5", "+", "2", "*", "7", "-", "4", "/", "1"], PRIORITIES.third))
            .toEqual(["7", "*", "3", "/", "1"]);
    })

    test("should trow errors in incorrect expressions", () => {
        expect(() => calculate([], PRIORITIES.second))
            .toThrow("Expression is empty");
        expect(() => calculate(["5", "+", "0", "/", "0"], PRIORITIES.second))
            .toThrow("Trying to divide zero by zero");
    })
})