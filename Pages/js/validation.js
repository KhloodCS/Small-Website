function validateForm() {
    var fName = document.getElementById('fName').value;
    var lName = document.getElementById('lName').value;
    var location = document.getElementById('location').value;
    var city = document.getElementById('city').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var ageOK = document.getElementsByName('ageOK')[0].checked;
  
    // Check for empty fields
    if (fName === '' || lName === '' || location === '' || city === '' || phone === '' || email === '' || !ageOK) {
      alert('Please fill in all mandatory fields.');
      return false;
    }
  
    // Validate email format
    var emailRegex = /^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$/i;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }
  
    // Add more specific validations as needed for other fields
  
    return true;
  }


  function validateForm() {
    var firstName = document.getElementById("fName").value;
    var lastName = document.getElementById("lName").value;
    var homeAddress = document.getElementById("location").value;
  
    var lettersOnly = /^[A-Za-z\s]+$/; // Regular expression for letters and spaces
  
    if (!firstName.match(lettersOnly)) {
      alert("Please enter a valid first name with letters only.");
      return false;
    }
  
    if (!lastName.match(lettersOnly)) {
      alert("Please enter a valid last name with letters only.");
      return false;
    }
  
    if (!homeAddress.match(lettersOnly)) {
      alert("Please enter a valid home address with letters only.");
      return false;
    }
  
    return true; // Form is valid if it reaches this point
  }


  function validateForm() {
    var phoneNumber = document.getElementById("phone").value;
  
    var numbersOnly = /^[0-9]+$/; // Regular expression for numbers only
  
    if (!phoneNumber.match(numbersOnly) || phoneNumber.length !== 10) {
      alert("Please enter a valid 10-digit phone number with numbers only.");
      return false;
    }
  
    return true; // Form is valid if it reaches this point
  }
  