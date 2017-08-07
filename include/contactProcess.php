<?php

//check for submitted items
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = nl2br($_POST['msg']); //change new lines to break tags

    $to = "santos@phoenixunion.org";
    $from = $email;
    $subject = "Contact Form Message";
    $message = '<b>Name: </b>'.$name .'<br><b>Email: </b>'.$email.'<p>'.$msg.'</p>';

    $headers = "From: $from\n";
    $headers = "MIME-Version: 1.0\n";
    $headers = "Content-type: text/html; charset=iso-8859-1\n";

    if(mail($to, $subject, $message, $headers))
    {
        echo "success";
    }
    else
        {
            echo "The Server failed to send your message. Please try again later.";
        }
}