<?php

    //start session
    session_start();

    //storing connection to a variable
    $con = mysqli_connect("localhost", "camelbac_goals", "santos13", "camelbac_scangoals");

    //grabs input from user
    $username = $_POST["uname"];
    $password = md5($_POST["psw"]);

    //prevent mysql injection
    //$username = stripcslashes($username);
    //$password = stripcslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    //query the database for user
    $result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    $row = mysqli_fetch_array($result);

    //check if username was grabbed
    if($row['username'] == $username && $row['password'] == $password)
    {
        echo "Login Success. Welcome";
        echo $row['username'];
        //initialize session
        $_SESSION['login_user'] = $username;
        header("Location: ../html/home.php");
    }
    else
        {
            echo "Login Failed. <a href='../html/index.php'>Login</a>";
        }


?>
