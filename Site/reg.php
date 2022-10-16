<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'users');

if (!$conn)
{
      print('Connect not found!'.mysqli_error());
}

$email = $_POST['email'];
$password = md5($_POST['psw']);

$query = "INSERT INTO users (id, email, password) VALUES (NULL, '$email', '$password')";
$test = mysqli_query($conn, $query);
if($test == true)
{
      $msg = 'Вы успешно зарегистрировались!';
      setcookie("msg", $msg);
      mysqli_close($conn);
      header("Location: signin.php", true, 303);
}
else
{
      echo 'Проблема!!!!!!!!!!!';
}

mysqli_close($conn);
?>