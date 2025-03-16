document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;
    
    // Validate password
    if (password !== confirmPassword) {
      alert("Passwords do not match");
      return;
    }
    
    // Here you can add your signup logic, for example, sending the data to a server
    
    alert("Sign up successful!");
  });
  
  document.getElementById('google-signup').addEventListener('click', function() {
    // Redirect to Google sign-up page or handle Google sign-up logic
    alert("Redirecting to Google sign-up page...");
  });
  