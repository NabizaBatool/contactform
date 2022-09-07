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
    <form method='post' action="contactform.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Your name..">
        </div>
        <div class="form-group"><label for="email">Email:</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Your Email here..">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" class="form-control" placeholder="Write something.." style="height:200px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>