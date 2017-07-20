<?php
/**
 * Created by PhpStorm.
 * User: santos
 * Date: 5/19/17
 * Time: 9:16 PM
 */

    //require the connection to database
    require_once "dbconnect.php";

    $id = $_POST['myId'];
    $msg = $_POST['msg'];
    $date = date("Y-m-d");

    //update the database
    $sql = "UPDATE journal SET entry='$msg', date='$date' WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "Successfully Updated Database!<br>";
    }
    else
    {
        echo "Error Updating Database!";

    }

        mysqli_close($conn);