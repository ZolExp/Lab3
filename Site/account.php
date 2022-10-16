<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Аккаунт</title>
    <style>
        body
        {
            background-color: rgb(63, 88, 157);
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 50%;
            /* height: 200px; */
            background: white;
            border-radius: 25px;
        }

        .btn {

        }

        .container h1{
            text-align: center;

        }

        .container h3{
            text-align: left;
        }

        /* Full-width input fields */
        input[type=email], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            border-radius: 25px;
        }

        input[type=email]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        input[type=submit]{ 
            width: 50%;
            height: 50px;
            background: #4CAF50;
            border-radius: 25px;
            font-size: 18px;
            color: white;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .container form{
            padding: 0 40px;
            box-sizing: border-box;
        }

        .signoutbtn {
            background-color: #920b0b;
            color: white;
            position: fixed;
            left: 63%;
            top: 90%;
            /* transform: translate(-50%, 0); */
            padding: 15px, 18px;
            border: none;
            cursor: pointer;
            width: 33%;
            opacity: 0.9;
            border-radius: 25px;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <h1>Аккаунт</h1>
            <hr>
            <form action="data.php">
                <h3>Добро пожаловать!</h3>
                <form>
                    <p> Почта (Логин): <?php echo $_COOKIE['emal']; ?></p>
                    
                 </form>
            </form>
            <br>
            <a href="signin.php"><button type="submit" class="signoutbtn">Выйти из аккаунта</button></a>
        </div>
    </body>
</html>