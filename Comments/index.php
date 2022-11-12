<?php
    date_default_timezone_set('Europe/Moscow');
    include 'connection.php';
    include 'functions.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Комментарии</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать в ленту комментариев</h1>
        <?php
            echo "<form method='POST' action='".setComments($conn)."'>
            <input type ='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <a>Title:</a><div>
            <textarea name='title'></textarea>
            <div>
            <a>Your message:</a><div>
            <textarea name='message'></textarea>
            <div>
            <button type='submit' name='commentSubmit'>Комментировать</button>
            </form>";

            getComments($conn);

        ?>
    </div>

</body>
</html>