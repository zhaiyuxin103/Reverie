import { describe, expect, it } from 'vitest';

describe('vitest harness', () => {
    it('runs and resolves the @ alias toolchain', () => {
        expect(1 + 1).toBe(2);
    });
});
