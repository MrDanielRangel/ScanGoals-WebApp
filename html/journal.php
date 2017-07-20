<?php
include "../include/session.php";
$activePage = "journal";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#journalForm").hide();
        });
    </script>


</head>
    <body>

    <?php
    include "navbar.php";
    ?>

    <div class="panel">

        <div id="journalForm">
            <h2>New Journal Entry</h2>
            <hr>
            <form name="frmItems" action="" onsubmit="AddItem(myId, action1); return false;" method="POST">
                <input type="text" name="msg" title="journalMsg" placeholder="Enter Content" required>
                <input type="submit">
            </form>
        </div>

        <button onclick="AddOrderModal()" type="button">Add Journal Entry</button>
        <h1>Your Journal Entries</h1><hr>
        <table id="orders" class="table table-responsive">
            <thead>
            <tr><!--headings-->
                <th>Date</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>
            <?php

            include "../include/dbconnect.php";

            //retrieve data from the database
            $sql = mysqli_query($conn, "SELECT id, entry, date FROM journal WHERE username='$login_user'");

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
                        <td><?php print($rows['date']); ?></td>
                        <td><?php print($rows['entry']); ?></td>
                        <td>
                            <div class="btn-group">
                                <ul>
                                    <li><a onclick="UpdateOrderModal('<?php print($rows['id']); ?>','<?php print($rows['entry']); ?>');">Edit</a></li>
                                    <li><a onclick="DeleteItem('<?php print($rows['id']); ?>');">Delete</a></li>
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

        function AddOrderModal()
        {
            //new Action
            action1 = 'NEW';

            //clearing previous values
            document.frmItems.msg.value = "";

            //show form
            $(document).ready(function(){
                $("#journalForm").show();
            });
        }

        function UpdateOrderModal(id, msg)
        {
            //have our EDIT Action
            action1 = 'EDIT';
            myId = id;

            //find the field in the document and then supply the value
            document.frmItems.msg.value = msg;

            //show form
            $(document).ready(function(){
                $("#journalForm").show();
            });
        }

    </script>
    <script src="../js/ajaxOrder.js"></script>
    </body>
</html>