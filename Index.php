<?php
$insert = false;
if(isset($_POST['name']))
{
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $desc = $_POST['other'];

    $query = "INSERT INTO `trip`.`trip` ( `name`, `phone`, `email`, `gender`, `desc`) VALUES ( '$name', '$phone', '$email', '$gender', '$desc')";

    if($conn->query($query)){
        $insert = true;
    }

    $conn->close();
}
    //INSERT INTO `trip` (`sequence`, `name`, `phone`, `email`, `gender`, `desc`) VALUES ('1', 'Taniya', '1234', 'vermataniya@gmail', 'female', 'bcz i want  to enjoy');
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>College Trip</title>
</head>

<body>
    
    <img class="img" src="bg.jpg" alt="college pic">
    <div class="box">
        <form id="form" action="Index.php" method="post">
            <H1>Welcome to the college trip</H1>
            <?php
            if($insert == true){
                echo "<p style = 'color : green; font-size: 30px;'> Thank You for submitting the form </p>";
            }
            ?>
            <input id="name" name="name" type="text" placeholder="Enter your name">

            <input id="gender" name="gender" type="text" placeholder="Enter your gender">

            <input id="phone" type="text" name="phone" placeholder="Enter your phone number">

            <input id="email" type="text" name="email" placeholder="Enter your email">

            <textarea name = "other" placeholder="Write where do you want to go and why"></textarea>
            <button id="btn" type="submit"> Submit </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>