<?php
/**
 * Created by PhpStorm.
 * User: santos
 * Date: 5/19/17
 * Time: 9:16 PM
 */

    //require the connection to database
    require_once "dbconnect.php";

    //grab info from POST
    $id = $_POST['myId'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    //update the database
    $sql = "UPDATE users SET username='$name', age='$age', weight='$weight', height='$height' WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "Successfully Updated Profile!<br>";
    }
    else
    {
        echo "Error Updating Database!";

    }


    mysqli_close($conn);