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
         //read from database
         $query = "select * from users1 where user_name = '$user_name' limit 1";

         $result = mysqli_query($con, $query);

         if($result)
         {
            if($result && mysqli_num_rows($result) > 0)
            {
    
                $user_data = mysqli_fetch_assoc($result);
              
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] =  $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
         }  
         echo "Wrong username or password!";
    }else
    {
        echo "Wrong username or password!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="wrapper">
        <form method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="user_name" required>
                <i class='bx bxs-user'></i>
            </div>    
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div> 
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have account? <a href="signup.php">Register</a></p>
            </div>
        </form>
   </div>
</body>
</html>