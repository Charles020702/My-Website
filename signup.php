<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
             //save to database
             $user_id = random_num(20);
             $query = "insert into users1 (user_id,user_name,password) values ('$user_id','$user_name','$password')";
 
             mysqli_query($con, $query);
 
             header("Location: login.php");
             die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/LoginandSignup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="wrapper">
        <form method="post">
            <h1>Signup</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="user_name" required>
                <i class='bx bxs-user'></i>
            </div>    
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div> 
               
                <button type="submit" class="btn">Signup</button>

            <div class="register-link">
                <p>Already have account? <a href="login.php">Login</a></p>
            </div>
        </form>
   </div>
</body>
</html>