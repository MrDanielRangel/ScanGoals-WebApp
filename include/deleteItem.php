<?php
/**
 * Created by PhpStorm.
 * User: santos
 * Date: 5/19/17
 * Time: 10:52 PM
 */

//require the connection to database
include "dbconnect.php";

$id = $_POST['myId'];

//update the database
$sql = "DELETE FROM journal WHERE id='$id'";

if(mysqli_query($conn, $sql))
{
    echo "Successfully Delete Item From Database!<br>";
}
else
{
    echo "Error Deleting Row From Database!";

}

mysqli_close($conn);