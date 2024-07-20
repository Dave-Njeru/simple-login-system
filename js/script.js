// Function to validate email
function validateEmail(email) {
    const trimmedEmail = email.trim().toLowerCase();
    const pattern = /^[a-zA-Z0-9._-]+@(gmail\.com|yahoo\.com|outlook\.com)$/;
    return pattern.test(trimmedEmail);
}

// Get the email input element
const emailInput = document.getElementById('username');

// Add event listener for 'blur' event
emailInput.addEventListener('blur', function() {
    const email = emailInput.value;

    if (!validateEmail(email)) {
        emailInput.classList.add('error'); // Add error class for styling
        emailInput.setCustomValidity('Please enter a valid Gmail, Outlook, or Yahoo email address.');
    } else {
        emailInput.classList.remove('error'); // Remove error class
        emailInput.setCustomValidity('');
    }
});