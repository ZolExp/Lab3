<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
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
                background: white;
                border-radius: 25px;
            }

            .btn {

            }

            .container h1{
                text-align: center;

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

            .registerbtn {
                background-color: #4CAF50;
                color: white;
                position: relative;
                left: 50%;
                transform: translate(-50%, 0);
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 49%;
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
            <form method="GET" action="reg.php">
            <h1>Регистрация</h1>
            <hr>
            <table>
                <tr>
                    <td> <label for="email"><b>Email</b></label> </td>
                    <td> <input type="email" placeholder="Введите Email" name="email" required> </td>
                </tr>
                    <br>
                <tr>
                    <td> <label for="psw"><b>Пароль</b></label> </td>
                    <td> <input type="password" placeholder="Введите пароль" name="psw" required> </td>
                </tr>
                    <br>
                <tr>
                    <td> <label for="psw-repeat"><b>Повторите пароль</b></label> </td>
                    <td> <input type="password" placeholder="Повторите пароль" name="psw-repeat" required> </td>
                </tr>
            </table>
            <br>

            <a href="signin.php"><button type="submit" class="registerbtn">Зарегистрироваться</button></a>

            <p>У вас уже есть аккаунт? <a href="signin.php">Вход</a>.</p>
            </form>
        </div>
    </body>
</html>