<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])) {
        $date = $_POST['date'];
        $title = $_POST['title'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (date, title, message) VALUES ('$date', '$title', '$message')";
        $result = $conn->query($sql);
        unset($_POST['date']);
        unset($_POST['title']);
        unset($_POST['message']);
    }
}

function getComments($conn) {
    $sql = "SELECT DISTINCT* FROM comments ORDER BY date DESC";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>
            <br>
            <div class='name'> Аноним </div>
            ".$row['date']."<br>
            <div class='title'> ".$row['title']."<br> </div>
            ".$row['message']."
            <div><br>   <form method='POST' action='".likeSubmit($row)."'> <button type='submit' name='likeSubmit' class='likebtn'>♡ Like</button>  Likes: ".$row["likes"]."</form></div>
            <br>
        </div>
        <br>";
    }
}

function likeSubmit($message) {    
    require("connection.php");
    if(isset($_POST['likeSubmit'])) {
    $id = $message['message_id'];
    $likes = $message['likes']+1;
    $query = "UPDATE messages SET likes = $likes WHERE message_id = $id";
    $result = mysqli_query($con, $query);
    }
}

?>