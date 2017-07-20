<?php
include "../include/session.php";
$activePage = "profile";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
<?php
include "navbar.php";
?>

<div class="panel">
    <h1>Profile Account</h1><hr>
    <table id="orders" class="table table-responsive">
        <thead>
        <tr><!--headings-->
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
        </thead>

        <tbody>
        <?php

        include "../include/dbconnect.php";

        //retrieve data from the database
        $sql = mysqli_query($conn, "SELECT username, age, weight FROM users WHERE username='$login_session'");

        //array that holds all the fields
        $rows = mysqli_fetch_assoc($sql);

        //check to see if there's fields in table
        if(!$rows){
            echo "No Results.";
        }
        else{

            do{
                ?>
                <tr>
                    <td><?php print($rows['username']); ?></td>
                    <td><?php print($rows['age']); ?></td>
                    <td><?php print($rows['weight']." lbs"); ?></td>
                    <td>
                        <div class="btn-group">
                            <ul>
                                <li><a href="#" onclick="UpdateOrderModal('<?php print($rows['id']); ?>','<?php print($rows['entry']); ?>');">Edit</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php
            } while($rows = mysqli_fetch_assoc($sql));

        }

        mysqli_free_result($sql);
        ?>
        </tbody>
    </table>
</div>

</body>
</html>