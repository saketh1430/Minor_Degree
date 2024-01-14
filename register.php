<?php

// Connect to the database 
$db = mysqli_connect("localhost", "root", "", "student_database");

// Check connection
if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$roll_number = $_POST['roll-number']; 
$branch = $_POST['branch'];
$email = $_POST['email'];
$mobile = $_POST['mobile-number'];
$branch_radio = $_POST['branch-radio'];

// Insert data into database
$query = "INSERT INTO store (Name, Roll, Branch, Email, Mobile, Mbranch)
          VALUES ('$name', '$roll_number', '$branch', '$email', '$mobile', '$branch_radio')";
          
mysqli_query($db, $query);
          
// Close database connection
mysqli_close($db);

?>