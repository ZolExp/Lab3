<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Вход</title>
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

            .loginbtn {
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
            <h1>Вход</h1>
            <hr>

            <form action="account.php">
                <label for="email"><b>Email</b></label>
                <input type="email" class = "email" placeholder="Введите Email" name="email" required>
                <br>
                <label for="psw"><b>Пароль</b></label>
                <input type="password" class = "psw" placeholder="Введите пароль" name="psw" required>

                <a href="signup.php"> <button type="submit" class="loginbtn" onclick="transfer();return false">Войти</button></a>

                <script>
                    // function transfer(){
                    //     var a = forma
                    // }
                </script>

                <!-- <script src="script.js">
                    function opnAc() {
                        document.location.href='account.html';
                    }
                </script> -->

                <p>У вас ещё нет аккаунта? <a href="signup.php">Регистрация</a>.</p>
            </form>

            <!-- <button type="submit" class="registerbtn">Sign up</button> -->

            <!-- <script src="script.js">
                function opnAc() {
                    document.location.href='account.html';
                }
                // email = document.querySelector('.email');
                // psw = document.querySelector('.psw');
                // btn = document.querySelector('.btn');
                // btn.setAttrebute('disable', true);
                // inp.oninput = function() {
                //     if(psw.value.length < 5) {
                //         btn.setAttrebute('disable', true);
                //     } else {
                //         btn.removeAttrebute('disable');
                //     }
                //}
            </script> -->

          
        </div>
    </body>
</html>