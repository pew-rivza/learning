import {isExpression, parser} from "../../src/calc/parser";

describe("PARSER function:", () => {
    test("should parse correctly right strings", () => {
        expect(parser("5 + 0 + -2 + 0.3 + -1.25"))
            .toEqual(["5", "+", "0", "+", "-2", "+", "0.3", "+", "-1.25"]);
        expect(parser("-6 - -2 - 10 - .21 - -0.7"))
            .toEqual(["-6", "-", "-2", "-", "10", "-", ".21", "-", "-0.7"]);
        expect(parser("-0.89 * 45 * -1 * 0 * 5.721"))
            .toEqual(["-0.89", "*", "45", "*", "-1", "*", "0", "*", "5.721"]);
        expect(parser("-16 / -0.17 / 30 / -23 / 0 / 16.5"))
            .toEqual(["-16", "/", "-0.17", "/", "30", "/", "-23", "/", "0", "/", "16.5"]);
        expect(parser("12 + -.2 - 2 / 81.3 * -20"))
            .toEqual(["12", "+", "-.2", "-", "2", "/", "81.3", "*", "-20"]);
    })

    test("should parse correctly extreme values", () => {
        expect(parser("")).toEqual([]);
        expect(parser("16")).toEqual(["16"]);
        expect(parser("-0.2")).toEqual(["-0.2"]);
    })

    test("should throw errors in incorrect strings", () => {
        const error = "Cannot parse expression";

        expect(() => parser(" ")).toThrow(error);
        expect(() => parser("- 2 + 2")).toThrow(error);
        expect(() => parser("2 + 2 *")).toThrow(error);
        expect(() => parser("2*7+-1.4-7/23")).toThrow(error);
        expect(() => parser("-2*7+-1.4-7/23*")).toThrow(error);
        expect(() => parser("0,6 + 2 - ,7")).toThrow(error);
        expect(() => parser("some string")).toThrow(error);
        expect(() => parser("50 / some + 4.11 * string")).toThrow(error);
    })
})

describe("IS_EXPRESSION function:", () => {
    test("should check if a string is an expression", () => {
        expect(isExpression(["5", "+", "0", "+", "-2", "+", "0.3", "+", "-1.25"]))
            .toBe(true);
        expect(isExpression(["-6", "-", "-2", "-", "10", "-", ".21", "-", "-0.7"]))
            .toBe(true);
        expect(isExpression(["-0.89", "*", "45", "*", "-1", "*", "0", "*", "5.721"]))
            .toBe(true);
        expect(isExpression(["-16", "/", "-0.17", "/", "30", "/", "-23", "/", "0", "/", "16.5"]))
            .toBe(true);
        expect(isExpression(["12", "+", "-.2", "-", "2", "/", "81.3", "*", "-20"]))
            .toBe(true);
        expect(isExpression(["16"]))
            .toBe(true);
        expect(isExpression(["13", "-", "Infinity"]))
            .toBe(true);
        expect(isExpression(["-0.2"]))
            .toBe(true);
    })

    test("should check if a string is NOT an expression", () => {
        expect(isExpression([])).toBe(false);
        expect(isExpression([""])).toBe(false);
        expect(isExpression(["", ""])).toBe(false);
        expect(isExpression(["-", "2", "+", "2"])).toBe(false);
        expect(isExpression(["2", "+", "2", "*"])).toBe(false);
        expect(isExpression(["2*7+-1.4-7/23"])).toBe(false);
        expect(isExpression(["2*7+-1,4-7/23"])).toBe(false);
        expect(isExpression(["0,6", "+", "2", "-", ",7"])).toBe(false);
        expect(isExpression(["some", "string"])).toBe(false);
        expect(isExpression(["NaN", "+", "7"])).toBe(false);
        expect(isExpression(["50", "/", "some", "+", "4.11", "*", "string"])).toBe(false);
    })
})