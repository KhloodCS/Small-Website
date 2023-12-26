function validateForm() {
    var email = document.getElementById('email').value;
    var emailError = document.getElementById('emailError');
  
    // Basic email validation using a regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (!emailPattern.test(email)) {
      emailError.style.display = 'inline';
      return false; // Prevent form submission
    } else {
      emailError.style.display = 'none';
      return true; // Allow form submission
    }
  }