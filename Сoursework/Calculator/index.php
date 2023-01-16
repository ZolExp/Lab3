<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
   <link rel="stylesheet" href="../main.css">
      <meta charset="utf-8">
      <title>Calculator</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   <body>
        <?php include '../header.php'; ?>

        <div class="center">
            <form name="forms">
            <input type="text" id="display" name="display" disabled>
            <div class="buttons">
                <input type="button" id="seven" value="7">
                <input type="button" id="eight" value="8">
                <input type="button" id="nine" value="9">
                <input type="button" id="divide" value="/"><br>
                <input type="button" id="four" value="4">
                <input type="button" id="five" value="5">
                <input type="button" id="six" value="6">
                <input type="button" id="multi" value="*"><br>
                <input type="button" id="one" value="1">
                <input type="button" id="two" value="2">
                <input type="button" id="three" value="3">
                <input type="button" id="subs" value="-"><br>
                <input type="button" id="dot" value=".">
                <input type="button" id="zero" value="0">
                <input type="button" id="add" value="+">
                <input type="button" id="clear" value="C"><br>
                <input type="button" id="equal" value="=">
            </div>
            </form>
        </div>
        <script>
            $(document).ready(function(){
            $('#one').click(function(){
                document.forms.display.value += 1;
            });
            $('#two').click(function(){
                document.forms.display.value += 2;
            });
            $('#three').click(function(){
                document.forms.display.value += 3;
            });
            $('#four').click(function(){
                document.forms.display.value += 4;
            });
            $('#five').click(function(){
                document.forms.display.value += 5;
            });
            $('#six').click(function(){
                document.forms.display.value += 6;
            });
            $('#seven').click(function(){
                document.forms.display.value += 7;
            });
            $('#eight').click(function(){
                document.forms.display.value += 8;
            });
            $('#nine').click(function(){
                document.forms.display.value += 9;
            });
            $('#zero').click(function(){
                document.forms.display.value += 0;
            });
            $('#add').click(function(){
                document.forms.display.value += '+';
            });
            $('#subs').click(function(){
                document.forms.display.value += '-';
            });
            $('#multi').click(function(){
                document.forms.display.value += '*';
            });
            $('#divide').click(function(){
                document.forms.display.value += '/';
            });
            $('#dot').click(function(){
                document.forms.display.value += '.';
            });
            $('#equal').click(function(){
                if (display.value == "") {
                alert("Please enter any numbers to calculate!");
                }else{
                document.forms.display.value =
                eval(document.forms.display.value);
                }
            });
            $('#clear').click(function(){
                document.forms.display.value = "";
            });
            })
        </script>
   </body>
</html>