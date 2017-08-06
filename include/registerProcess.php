<?php

    //require the connection to database
    include "dbconnect.php";

    $username = $_POST['username'];
    $password = $_POST['psw'];
    $repwd = $_POST['psw-repeat'];


    //check if username hasn't been taken
    //query the database for user
    $result = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");

    $row = mysqli_fetch_array($result);

    echo $row['username'];

    //check if username was grabbed
    if($row['username'] === $username)
    {
        echo "Username already taken. Please enter another one.";
        echo "<a href='../html/register.php'>Go Back To Register</a>";
    }

    //check if password matches]
    if($password == $repwd)
    {

        //encrypt password
        $password = md5($password);

        //create the query to insert data
        //INSERT INTO table_name (no QUOATIONS) VALUES (inQUOTATIONS)
        //$sql = "INSERT INTO journal (entry) VALUE ('$msg')";
        $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";

        if(mysqli_query($conn, $sql))
        {
            echo "Successfully Entered Into Database!<br>";
            header("Location: ../html/profile.php");
        }
        else
        {
            echo "Error Inserting Data!";

        }

    }
    else
        {
            echo "Passwords Don't Match";
        }

        mysqli_close($conn);