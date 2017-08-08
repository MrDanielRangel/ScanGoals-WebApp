<?php
include "../include/session.php";
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

    <style>
        html {
            background-color: rgb(38, 32, 63);
        }
    </style>

<script>
    //shortcut for getting elements
    function _(id) { return document.getElementById(id); }

    function sendMail()
    {
        //prevents user from double clicking button and sending more than one request at once
        _("myButton").disabled = true;

        //message after user submits form
        _("status").innerHTML = 'please wait...';

        var formdata = new FormData();

        //id = POST variable for PHP
        //value = getelement
        //(id, value);
        formdata.append("name", _("name").value);
        formdata.append("email", _("email").value);
        formdata.append("msg", _("msg").value);

        var ajax = new XMLHttpRequest();
        ajax.open("POST", "../include/contactProcess.php");
        ajax.onreadystatechange = function()
        {
            if(ajax.readyState == 4 && ajax.status == 200)
            {
                if(ajax.responseText == "success")
                {
                    _("myForm").innerHTML = '<h2>Thanks '+_("name").value+', your message got sent.</h2>';
                }
                else
                    {
                    _("status").innerHTML = ajax.responseText;
                    _("myButton").disabled = false;
                }
            }
        }

        ajax.send(formdata);
    }

</script>
</head>
<body>
<?php
include "navbar.php";
?>
<div id="divCenter">
    <h2>Contact Us</h2>
    <p>For any questions, concerns, or feedback please send us an email</p>

    <form id="myForm" onsubmit="sendMail(); return false;">
        <p><input id="name" placeholder="Name" value="<?php echo $_SESSION['login_user']; ?>" required> </p>
        <p><input id="email" placeholder="Email Address" type="email" required> </p>
        <textarea id="msg" placeholder="Write Your Message" rows="10" required></textarea>
        <p><input id="myButton" type="submit" value="Send"><span id="status"></span> </p>
    </form>

</div>



</body>
</html>