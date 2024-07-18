const {default: TestRunner} = require("jest-runner");
const validateEmail = require(`./script`);

test('check if email has the right format', () => {
    expect(validateEmail('dave@gmail.com')).toBe(true);
});

test('check if email has the right format', () => {
    expect(validateEmail('._-dave@yahoo.com')).toBe(true);
});