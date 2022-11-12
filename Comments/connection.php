<?php
$conn = mysqli_connect('localhost', 'root', '', 'comments');

if (!$conn) {
    die("ОШИБКА!!!!".mysqli_connect_error());
}
?>