<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $club = $_POST["club"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $department = $_POST["department"];
    $rollNo = $_POST["rollNo"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $reasonForJoining = $_POST["reasonForJoining"];
    $expectations = $_POST["expectations"];
    $contribution = $_POST["contribution"];

    // Database connection details
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "clubsform";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the registration table
    $sql = "INSERT INTO registration (name, club, age, gender, address, department, roll_no, email, phone_number, reason_for_joining, expectations, contribution)
            VALUES ('$name', '$club', $age, '$gender', '$address', '$department', $rollNo, '$email', '$phoneNumber', '$reasonForJoining', '$expectations', '$contribution')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case where the form is not submitted
    echo "Form not submitted";
}
?>
