<?php

    //require the connection to database
    include "dbconnect.php";

    $username = $_POST['username'];
    $msg = $_POST['msg'];
    $date = date("Y-m-d");

    //create the query to insert data
    //INSERT INTO table_name (no QUOATIONS) VALUES (inQUOTATIONS)
    //$sql = "INSERT INTO journal (entry) VALUE ('$msg')";
    $sql = "INSERT INTO journal (entry, username, date) VALUES ('$msg', '$username','$date')";

    if(mysqli_query($conn, $sql))
    {
        echo "Successfully Entered Into Database!<br>";
    }
    else
        {
            echo "Error Inserting Data!";

        }

        mysqli_close($conn);