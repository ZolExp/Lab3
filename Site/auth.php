<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'users');

if (!$conn)
{
      print('Connect not found!'.mysqli_error());
}

$email = $_GET['email'];
$password = $_GET['psw'];

setcookie("emal", $email);
setcookie("pass", $password);

$query = "SELECT password FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if($row['password'] == '')
{
      echo 'Вы не зарегистрированы!';
}

if (!strcmp($row['password'], $password))
{
      mysqli_close($conn);
      header("Location: account.php", true, 303);
}
else
{
      $msg = 'Вы ввели неверный пароль!';
      setcookie("msg", $msg);
      mysqli_close($conn);
      // echo 'Вы ввели неверный пароль!';

      // sleep(5);

      header("Location: signin.php", true, 303);
}

mysqli_close($conn);
?>