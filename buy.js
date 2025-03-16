document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get form data
    const formData = new FormData(event.target);
    const data = {};
    formData.forEach((value, key) => {
      data[key] = value;
    });
    
    // Show pop-up message
    alert('Details submitted successfully!');
    
    // Redirect to home page
    window.location.href = 'index.html';
  });
  