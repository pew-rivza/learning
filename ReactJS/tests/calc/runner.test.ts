import {runner} from "../../src/calc/runner";

describe("RUNNER function:", () => {
    test("should solve expressions", () => {
        expect(+runner("5 + 0 + -2 + 0.3 + -1.25")).toBeCloseTo(2.05);
        expect(+runner("-6 - -2 - 10 - .21 - -0.7")).toBeCloseTo(-13.51);
        expect(+runner("-0.89 * 45 * -1 * 0 * 5.721")).toBeCloseTo(0);
        expect(+runner("-16 / -0.17 / 30 / -23 / 0 / 16.5")).toBeCloseTo(-Infinity);
        expect(+runner("12 + -.2 - 2.4 / 1.5 * -20")).toBeCloseTo(43.8);
        expect(+runner("16")).toBeCloseTo(16);
        expect(+runner("-0.2")).toBeCloseTo(-0.2);
        expect(+runner("13 - Infinity")).toBeCloseTo(-Infinity);
        expect(+runner("-11 + Infinity")).toBeCloseTo(Infinity);
        expect(+runner("0")).toBeCloseTo(0);
        expect(+runner("Infinity")).toBeCloseTo(Infinity);
        expect(+runner("5 + 2 * 7 - 4 / 1")).toBeCloseTo(15);
        expect(+runner("15 * 0.5 / 2")).toBeCloseTo(3.75);
        expect(+runner("1 + 2 * 3 * 4 + 5")).toBeCloseTo(30);
        expect(+runner(".7 - 2.1 / 0.5")).toBeCloseTo(-3.5);
        expect(+runner("23 + 7")).toBeCloseTo(30);
        expect(+runner("23 * 2")).toBeCloseTo(46);
        expect(+runner("23")).toBeCloseTo(23);
        expect(+runner("5 + 14 - 4")).toBeCloseTo(15);
        expect(+runner("5 / 0 * 2")).toBeCloseTo(Infinity);
        expect(+runner("0")).toBeCloseTo(0);
        expect(+runner("7 * 3 / 1")).toBeCloseTo(21);
    })

    test("should throw errors in incorrect expressions", () => {
        expect(() => runner("")).toThrow();
        expect(() => runner(" ")).toThrow();
        expect(() => runner("- 2 + 2")).toThrow();
        expect(() => runner("2 + 2 *")).toThrow();
        expect(() => runner("16 + NaN")).toThrow();
        expect(() => runner("2*7+-1.4-7/23")).toThrow();
        expect(() => runner("0,6 + 2 - ,7")).toThrow();
        expect(() => runner("5 + 0 / 0")).toThrow();
    })
})