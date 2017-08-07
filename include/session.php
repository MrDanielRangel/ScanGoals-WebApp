<?php

//connect to database
//storing connection to a variable
$con = mysqli_connect("localhost", "camelbac_goals", "santos13", "camelbac_scangoals");

//start session
session_start();

//storing session
$user_check = $_SESSION['login_user'];
$islogin = false;

//query to fetch complete information of user
$session_sql = mysqli_query($con, "SELECT username FROM users WHERE username='$user_check'");
$row = mysqli_fetch_assoc($session_sql);
$login_session = $row['username'];
$islogin = true;

//check if user is login, if not send it back to login
if(!isset($login_session))
{
    mysqli_close($con);
    header("Location: ../html/index.php");
}