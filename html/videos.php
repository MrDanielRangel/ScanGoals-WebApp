<?php
include "../include/session.php";
$activePage = "videos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Videos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
            background-color: rgb(87, 166, 216);
        }
    </style>
</head>
<body>
<?php
include "navbar.php";
?>

<h1>How to use the app:</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/9Y2DMu-xQ9k" frameborder="0" allowfullscreen></iframe>

<hr />


<br />
<h1>Equipment instructional videos:</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/VYQdWftVWNY" frameborder="0" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/jh8ixeIyhJw" frameborder="0" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/_BnnyuO1QpY" frameborder="0" allowfullscreen></iframe>

</body>
</html>