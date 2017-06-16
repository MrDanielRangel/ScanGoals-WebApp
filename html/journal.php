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