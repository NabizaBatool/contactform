<?php
include 'connect.php';
// Usage of WHERE Clause to Update Data

if(isset($_POST['editid'])){
    $sno = $_GET['editid'];
    $sql = "UPDATE `contactform` SET WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
   
// $sql = "UPDATE `contactform` SET `name` = 'Ali' , `email` = 'ali@gmail.com'  WHERE `sno` = 12 ";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "We updated the record successfully";
} else {
    echo "We could not update the record successfully";
}}

?>
<?php include 'userform.php' ?>