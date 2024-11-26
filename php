write a php script to insert a set of user details into a table named c1 in a mysql database called d1 . after inserting the details , update the users name to "mukesh" using a php


<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "d1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user_id = 1;
$user_name = "John Doe";
$user_email = "johndoe@example.com";


$insert_sql = "INSERT INTO c1 (id, name, email) VALUES ('$user_id', '$user_name', '$user_email')";

if ($conn->query($insert_sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $insert_sql . "<br>" . $conn->error;
}


$update_sql = "UPDATE c1 SET name='Mukesh' WHERE id='$user_id'";

if ($conn->query($update_sql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $update_sql . "<br>" . $conn->error;
}


$conn->close();
?>
