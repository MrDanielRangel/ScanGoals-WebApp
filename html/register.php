<?php
$activePage = "register";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>

        form {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        input[type=text], input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            text-align: center;
        }

        button {
            background-color: #00bfff;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
        }

        #cancel {
            background-color: red;
            color: white:
        }

        .container {
            padding: 16px;
        }

        #center {
            position:static;
            margin-top:100px;
        }

    </style>


</head>


<body>
<div id="center">

    <h1> ScanGoals Account Registration</h1>

    <form action="../include/registerProcess.php" method="POST">
        <div class="container">
            <label><b>Username</b></label><br />
            <input type="text" placeholder="Enter Username" name="username" required><br />

            <label><b>Password</b></label><br />
            <input type="password" placeholder="Enter Password" name="psw" required><br />

            <label><b>Confirm Password</b></label><br />
            <input type="password" placeholder="Confirm Password" name="psw-repeat" required>

            <div class="clearfix">
                <button id="cancel" type="button"><a href="index.php">Cancel</a></button>
                <button type="submit">Sign Up</button>
            </div>
        </div>
    </form>
</div>


</body>

</html>
