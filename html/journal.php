<?php
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

    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;

        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #00bfff;
        }



    </style>
</head>
    <body>

    <?php
    include "navbar.php";
    ?>
<div id="journalEntry">
    <textarea rows="10" cols="50" placeholder="Journal entries will appear here"></textarea>
    <form id="edit">
        <input type="submit" value="Edit">
    </form>
</div>

    <div class="panel panel-default">

        <div class="panel-heading">Your Journal Entries</div>
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
            $sql = mysqli_query($conn, "SELECT * FROM journal");

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
                        <!--<td><?php //print($rows['id']); ?></td>-->
                        <td><?php print($rows['date']); ?></td>
                        <td><?php print($rows['entry']); ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Select<span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
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

    </body>
</html>