<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbContact";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// for checking for particular name (means same name k how many )
$particular = "SELECT * FROM `contactform` WHERE `name`='hira'";
$res = mysqli_query($conn, $particular);
$num1 = mysqli_num_rows($res);
echo "<p>$num1</p>" ;

$sql = "SELECT * FROM `contactform`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo "<b>$num</b>"." ";
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['sno'] . " " .$row['name'] . " " . $row['email']." ". $row['message'] ;
        echo "<br>";
    }
}
