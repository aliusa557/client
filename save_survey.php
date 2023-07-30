<?php
// Get form data from POST request
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$heardBefore = $_POST['heardBefore'];
$findOut = $_POST['findOut'];
$paymentPlan = $_POST['paymentPlan'];
$features = $_POST['features'];
$pricingSuitable = $_POST['pricingSuitable'];
$expectations = $_POST['expectations'];
$satisfaction = $_POST['satisfaction'];
$recommendation = $_POST['recommendation'];
$improvements = $_POST['improvements'];
$specificServices = $_POST['specificServices'];
$talentPreference = $_POST['talentPreference'];
$serviceFrequency = $_POST['serviceFrequency'];
$promotionalOffers = $_POST['promotionalOffers'];
$comments = $_POST['comments'];

// Replace "your_username", "your_password", and "your_database_name" with your MySQL credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert the data into the database (adjust the table name)
$sql = "INSERT INTO survey_responses (name, email, phone, age, gender, occupation, heardBefore, findOut, paymentPlan, features, pricingSuitable, expectations, satisfaction, recommendation, improvements, specificServices, talentPreference, serviceFrequency, promotionalOffers, comments)
        VALUES ('$name', '$email', '$phone', '$age', '$gender', '$occupation', '$heardBefore', '$findOut', '$paymentPlan', '$features', '$pricingSuitable', '$expectations', '$satisfaction', '$recommendation', '$improvements', '$specificServices', '$talentPreference', '$serviceFrequency', '$promotionalOffers', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Survey response saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
