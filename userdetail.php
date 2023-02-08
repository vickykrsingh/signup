<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNo = $_POST['pno'];
$password = $_POST['password'];
$DOB = $_POST['DOB'];
$country = $_POST['country'];
$gender = $_POST['gender'];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./userdetail.css">
    <title>UserDetail</title>
</head>
<body>
    <div class="main-cont">
        <input type="text" value="First Name : <?php echo"$fname" ?>" disabled>
        <input type="text" value="Last Name : <?php echo"$lname" ?>" disabled>
        <input type="text" value="E-Mail : <?php echo"$email" ?>" disabled>
        <input type="text" value="Phone-Number : <?php echo"$phoneNo" ?>" disabled>
        <input type="text" value="Password : <?php echo"$password" ?>" disabled>
        <input type="text" value="Date-Of-Birth : <?php echo"$DOB" ?>" disabled>
        <input type="text" value="Country : <?php echo"$country" ?>" disabled>
        <hr>
        <div class="hobbies">
            <p>Hobbies : </p>
            <?php
            if(isset($_POST['sports'])){
                $sports = $_POST['sports'];
                echo "<input type=\"text\" value=\"$sports\" disabled >";
            }
            if(isset($_POST['movie'])){
                $movie = $_POST['movie'];
                echo "<input type=\"text\" value=\"$movie\" disabled >";
            }
            if(isset($_POST['webSeries'])){
                $webSeries = $_POST['webSeries'];
                echo "<input type=\"text\" value=\"$webSeries\" disabled >";
            }
            if(isset($_POST['comedy'])){
                $comedy = $_POST['comedy'];
                echo "<input type=\"text\" value=\"$comedy\" disabled >";
            }
            if(isset($_POST['action'])){
                $action = $_POST['action'];
                echo "<input type=\"text\" value=\"$action\" disabled >";
            }
            ?>
        </div>
        <hr>
        <div class="gender">
            <p>Gender</p>
            <input type="text" value="<?php echo"$gender" ?>" disabled>
        </div>
    </div>
</body>
</html>