document.getElementById('surveyForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent default form submission behavior

  // Get the form data
  const formData = new FormData(this);

  // Create a new XMLHttpRequest object
  const xhr = new XMLHttpRequest();

  // Set up the request
  xhr.open('POST', 'save_survey.php', true);

  // Set the event handler to handle the response
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Handle the response from the server
      console.log(xhr.responseText);
      // Show a dialog box with the message
      alert('Your survey is completed. Click OK to continue to the home page.');
      // Redirect to the home page (replace "home.html" with the actual home page URL)
      window.location.href = 'home.html';
    } else {
      // Handle errors (if any)
      console.error('Error saving the survey data.');
      // Show an error message to the user
      alert('Error saving the survey data. Please try again.');
    }
  };

  // Send the form data to the server
  xhr.send(formData);
});
