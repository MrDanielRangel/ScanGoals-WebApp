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







    </body>
</html>