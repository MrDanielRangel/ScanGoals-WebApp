<?php
$activePage = "contact";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/mystyle.css">


</head>
<body>
<?php
include "navbar.php";
?>

<div class="container">
    <h1>Contact Us</h1>
    <p>For any questions, concerns, or feedback please send us your comments.</p>
    <hr>
    <form id="centerForm">

        <label><b>Title</b></label><br />
        <input type="text" placeholder="Enter Title" name="uname" required/><br />

        <label><b>Email</b></label><br />
        <input type="email" placeholder="Enter Email" name="email" required/>

        <label><b>Comments</b></label><br />
        <textarea title="comments" form="centerForm" name="comments">Enter Comments Here...</textarea>

        <button type="submit">Send</button>
    </form>
</div>


</body>
</html>