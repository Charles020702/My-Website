<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>My Website</title>
</head>
<body background="img/Dark.jpg" class="vh-100 overflow-hidden">

<script src="js/index.js"></script>

<ul class="navbar">
        <li><a href="#" data-scroll="Home">Home</a></li>
        <li><a href="#" data-scroll="About-Us">About Us</a></li>
        <li><a href="#" data-scroll="Services">Services</a></li>
        <li><a href="#" data-scroll="Products">Products</a></li>
        <li><a href="#" data-scroll="Contact-Us">Contact Us</a></li>
    </ul>
    <!--End Nav-->

    <!--Start Section-->
        <div id="Home" class="block">
            <h2> Home </h2>
            <br>
            <br>
            <br>
            <h1>  Hello, <?php echo $user_data['user_name'];?>.</h1>
        </div>
        <div id="About-Us" class="block">
            <h2> About Us </h2>
        </div>
        
        <div id="Services" class="block">
                <h2> Services </h2>
        </div>

        <div id="Products" class="block">
                <h2> Products </h2>
        </div>

        <div id="Contact-Us" class="block">
                <h2> Contact Us </h2>
        </div>
    <!---End Section--->
    <!---srart scroll To Top--->
        <a class="scroll-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
     <!---End scroll To Top--->
     <a href="logout.php">Logout</a>
     
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>