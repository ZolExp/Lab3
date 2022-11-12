<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])) {
        $date = $_POST['date'];
        $title = $_POST['title'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (date, title, message) VALUES ('$date', '$title', '$message')";
        $result = $conn->query($sql);
    }
}

function getComments($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "Аноним";
        echo "<div>";
        echo $row['date']."<br>";
        echo $row['title']."<br>";
        echo $row['message']."<br><br>";
        echo "<div>";
    }
    
}

?>