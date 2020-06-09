<?php
$username = $_POST['login'];
$password = $_POST['password'];
if(file_exists("users/" . $username . ".txt"))
{
  if ($password == file_get_contents("users/". $username . ".txt"))
  {
    echo "Вход выполнен";
  }
  else
  {
    echo "Неверный пароль!";
  }
}
else
{
  echo "Неверный логин!";
}


 ?>
