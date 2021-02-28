import {mul, div, sum, sub, PRIORITIES} from "../../src/calc/operators";

describe("All operators:", () => {
    test("PRIORITY and CALC functions should be defined", () => {
        expect(mul.priority).toBeDefined();
        expect(mul.calc).toBeDefined();
        expect(div.priority).toBeDefined();
        expect(div.calc).toBeDefined();
        expect(sum.priority).toBeDefined();
        expect(sum.calc).toBeDefined();
        expect(sub.priority).toBeDefined();
        expect(sub.calc).toBeDefined();
    });
})

describe("MUL operator:", () => {
    test("should have SECOND priority", () => {
        expect(mul.priority).toBe(PRIORITIES.second);
    });

    test("should multiply numbers correctly", () => {
        expect(mul.calc(0, 0)).toBe(0);
        expect(mul.calc(1, 0)).toBe(0);
        expect(mul.calc(1, 1)).toBe(1);
        expect(mul.calc(5, 11)).toBe(55);
        expect(mul.calc(-1, 7)).toBe(-7);
        expect(mul.calc(3, -5)).toBe(-15);
        expect(mul.calc(12, 12)).toBe(144);
        expect(mul.calc(0.2, 12)).toBeCloseTo(2.4);
        expect(mul.calc(0.07, 0.5)).toBeCloseTo(0.035);
    });
})

describe("DIV operator:", () => {
    test("should have SECOND priority", () => {
        expect(div.priority).toBe(PRIORITIES.second);
    });

    test("should divide numbers correctly", () => {
        expect(div.calc(0, 0)).toBeNaN();
        expect(div.calc(1, 0)).toBe(Infinity);
        expect(div.calc(1, 1)).toBe(1);
        expect(div.calc(48, 4)).toBe(12);
        expect(div.calc(-1, 5)).toBeCloseTo(-0.2);
        expect(div.calc(75, -5)).toBe(-15);
        expect(div.calc(-12, -12)).toBe(1);
        expect(div.calc(12, 0.2)).toBeCloseTo(60);
        expect(div.calc(0.15, 0.3)).toBeCloseTo(0.5);
    });
})

describe("SUM operator:", () => {
    test("should have THIRD priority", () => {
        expect(sum.priority).toBe(PRIORITIES.third);
    });

    test("should sum numbers correctly", () => {
        expect(sum.calc(0, 0)).toBe(0);
        expect(sum.calc(7, 0)).toBe(7);
        expect(sum.calc(7, 11)).toBe(18);
        expect(sum.calc(52, 18)).toBe(70);
        expect(sum.calc(-1, 5)).toBeCloseTo(4);
        expect(sum.calc(75, -5)).toBe(70);
        expect(sum.calc(-12, -12)).toBe(-24);
        expect(sum.calc(-12, 12)).toBe(0);
        expect(sum.calc(0.2, 12)).toBeCloseTo(12.2);
        expect(sum.calc(-0.7, 0.5)).toBeCloseTo(-0.2);
    });
})

describe("SUB operator:", () => {
    test("should have THIRD priority", () => {
        expect(sub.priority).toBe(PRIORITIES.third);
    });

    test("should subtract numbers correctly", () => {
        expect(sub.calc(0, 0)).toBe(0);
        expect(sub.calc(7, 0)).toBe(7);
        expect(sub.calc(7, 11)).toBe(-4);
        expect(sub.calc(52, 18)).toBe(34);
        expect(sub.calc(-1, 5)).toBeCloseTo(-6);
        expect(sub.calc(75, -5)).toBe(80);
        expect(sub.calc(-12, -12)).toBe(0);
        expect(sub.calc(0.2, 12)).toBeCloseTo(-11.8);
        expect(sub.calc(-0.7, 0.5)).toBeCloseTo(-1.2);
    });
})