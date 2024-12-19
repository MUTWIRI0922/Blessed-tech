<?php
if (isset($_POST['submit'])) {
    $Name=$_POST['Name'];
    $email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];
    $errors= array();
    
    mail("amutwiri07@gmail.com",$Subject,$Message,"From:".$email);
    /* if (empty($Name)) {array_push($errors,"Please enter your name");}
    if (empty($email)) {array_push($errors,"Please enter your email");}
    if (empty($Subject)) {array_push($errors,"Please enter subject");}
    if (empty($Message)) {array_push($errors,"You cannot send an empty message");} */
}
/* if (count($errors) == 0) {
   
}else {
   echo $errors[0],$errors[1],$errors[2];
} */
?>