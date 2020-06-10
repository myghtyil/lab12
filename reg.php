<?php
$username = $_POST['login'];
$password = $_POST['password'];
if(!file_exists("users"))
{
mkdir("users");
}
file_put_contents("users/" . $username . ".txt", $password);
header ('Location: login.html');
 ?>
