
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>


        form{
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .center{
            margin: auto;
            width: 60%;
            padding: 270px;
        }

        input[type=text], input[type=password]{
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

        .container{
            padding: 16px;
        }

        #center {
            position:static;
            margin-top: 100px;
        }

        button {
            background-image: url('../img/button.png');
            background-size: 150%;
            background-position: center;
        }



    </style>
</head>
<body>

    <div id="center">
        <h1>ScanGoals</h1>

        <form action="../include/Login.php" method="POST">
            <div class="container">

                <label><b>Username</b></label><br />
                <input type="text" placeholder="Enter Username" name="uname" required/><br />

                <label><b>Password</b></label><br />
                <input type="password" placeholder="Enter password" name="psw" required/>

                <button type="submit">Login</button>

                <button formaction="register"><a href="register.php">Register</a></button>
            </div>
        </form>
    </div>

</body>
</html>