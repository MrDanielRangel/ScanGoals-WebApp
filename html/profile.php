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
    <script src="../js/jquery.js"></script>
    <script>
        //show form
        $(document).ready(function(){
            $("#profileForm").hide();
        });
    </script>
    <style>
        th, td{
            text-align: center;
        }

        html {
            background-color: rgb(38, 32, 63);
        }
    </style>
</head>
<body>
<?php
include "navbar.php";
?>

<div class="panel">

    <h1>Profile Account</h1><hr>

    <div id="profileForm">
        <h2>Profile Form</h2>
        <hr>
        <form name="frmItems" action="" onsubmit="UpdateProfile(id, action1); return false;" method="POST">
            <input type="text" name="name" title="name" placeholder="Enter Name" required>
            <input type="text" name="age" title="age" placeholder="Enter Age" required>
            <input type="text" name="weight" title="weight" placeholder="Enter Weight" required>
            <input type="text" name="height" title="height" placeholder="Enter Height" required>
            <input type="submit">
        </form>
    </div>


    <table id="orders" class="table table-responsive">
        <thead>
        <tr><!--headings-->
            <th>Name</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Profile Picture</th>
        </tr>
        </thead>

        <tbody>
        <?php

        include "../include/dbconnect.php";

        //retrieve data from the database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username='$login_session'");

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
                    <td><?php print($rows['height']); ?></td>
                    <td>
                        <div class="btn-group">
                            <ul>
                                <li><a href="#" onclick="UpdateOrderModal('<?php print($rows['id']); ?>',
                                            '<?php print($rows['age']); ?>',
                                            '<?php print($rows['weight']); ?>',
                                            '<?php print($rows['height']); ?>');">Edit</a></li>
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

<script type="text/javascript">

    var action1;
    var myId;

    function UpdateOrderModal(id, name, age, weight, height)
    {
        //have our EDIT Action
        action1 = 'EDIT';
        myId = id;

        //find the field in the document and then supply the value
        document.frmItems.name.value = name;
        document.frmItems.age.value = age;
        document.frmItems.weight.value = weight;
        document.frmItems.height.value = height;


        //show form
        $(document).ready(function(){
            $("#profileForm").show();
        });
    }

</script>
<script src="../js/ajaxOrder.js"></script>

</body>
</html>