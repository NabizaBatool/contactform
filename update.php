<?php
include 'connect.php';
$sno = $_GET['updateid'];
// Usage of WHERE Clause to Update Data
if (isset($_POST["done"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject =$_POST["subject"];
    $sql = "UPDATE `contactform` SET  `sno` = '$sno', `name` = '$name', `email`='$email' , `message`='$subject' WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:contactform.php');
    } else {
        echo "We could not update the record successfully";
    }
} else {
    
    $sql = "SELECT * FROM `contactform`  WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $subject = $row['message'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container my-4">
        <form method='post' action= 'update.php?updateid=<?php echo $sno?>'>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value=<?php echo $name; ?> placeholder="Your name..">
            </div>
            <div class="form-group"><label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" value=<?php echo $email; ?> placeholder="Your Email here..">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <textarea id="subject" class="form-control" name="subject"  placeholder="Write something.."  style="height:100px"><?php echo $subject; ?></textarea>
            </div>
            <button type="submit" name="done" class="btn btn-primary">Update</button>

        </form>
    </div>
</body>

</html>