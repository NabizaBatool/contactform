<?php
// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = "";
$name = $email = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($nameErr or $emailErr or $subjectErr) {
    echo "$nameErr  <br>";
    echo "$emailErr <br>";
    echo "$subjectErr <br>";
} else {
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbContact";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo "Connection was successful<br>";
        echo "<p>Welcome  $name </p>";
        echo "<p>Your Email address is:  $email</p>";
        // Sql query to be executed
       
    }
    $sql = "INSERT INTO `contactform` ( `name`, `email`, `message`) VALUES ( '$name', '$email' , '$subject')";
    $insertion = mysqli_query($conn, $sql);
    if ($insertion) {
        echo "The record was inserted successfully!<br>";
    } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
    }
}



