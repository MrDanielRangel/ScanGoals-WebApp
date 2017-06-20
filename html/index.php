<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>

    <h1>Scan Goals</h1>
    <div class="container">

        <img src="../img/profile.jpg" alt="profile-pic">
        <form action="../include/Login.php" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>

            <input class="btn-login" type="submit" name="submit">
        </form>
    </div>

</body>
</html>