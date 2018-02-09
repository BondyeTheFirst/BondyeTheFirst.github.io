<?php
// the message
$msg = "This is a test";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("giulio.faldetta@gmail.com","Test",$msg);

header("location:index.html");
?> 
