
<?php 
//error_reporting (E_ALL ^ E_NOTICE); 
?>
<?php

// Form a connection.
$conn = new mysqli('localhost', 'root', '', 'latur_complaints');
// Check the connection.
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

// Declare variables and collect values.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$Mnumber = $_POST['Mnumber'];
$email = $_POST['email'];
$problems = $_POST['problems'];
$address1 = $_POST['address1'];
$comments = $_POST['comments'];

// Write a query to the table.
$sql = "INSERT INTO complaints (fname, lname, Mnumber, email, problems, address1, comments) VALUES ('$fname', '$lname', '$Mnumber', '$email', '$problems', '$address1', '$comments')";

// Display a message on successful insertion.
if(mysqli_query($conn, $sql)) {
    echo "Complaint Successfully Raised...";
}
mysqli_close($conn);
?>