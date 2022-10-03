<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'users');

if (!$conn)
{
      print('Connect not found!'.mysqli_error());
}

$email = $_GET['email'];
$password = $_GET['psw'];

$query = "INSERT INTO users (id, email, password) VALUES (NULL, '$email', '$password')";
$test = mysqli_query($conn, $query);
if($test == true)
{
      echo 'Вы успешно зарегистрировались!';
}
else
{
      echo 'Проблема!!!!!!!!!!!';
}

mysqli_close($conn);
?>