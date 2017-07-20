<?php

    //require the connection to database
    include "dbconnect.php";

    $username = $_POST['username'];
    $password = $_POST['psw'];
    $repwd = $_POST['psw-repeat'];


    //check if password matches]
    if($password == $repwd)
    {
        //create the query to insert data
        //INSERT INTO table_name (no QUOATIONS) VALUES (inQUOTATIONS)
        //$sql = "INSERT INTO journal (entry) VALUE ('$msg')";
        $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";

        if(mysqli_query($conn, $sql))
        {
            echo "Successfully Entered Into Database!<br>";
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