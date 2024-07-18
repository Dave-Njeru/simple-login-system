// Function to validate email
function validateEmail(email) {
    const trimmedEmail = email.trim().toLowerCase();
    const pattern = /^[a-zA-Z0-9._-]+@(gmail\.com|yahoo\.com|outlook\.com)$/;
    return pattern.test(trimmedEmail);
}
//export function to be used by other files
module.exports = validateEmail;