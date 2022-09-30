<?php
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "accounts";
      if (!$con = $connection = mysql_connect($dbhost, $dbuser, $dbpass, $dbname)
      {
         die("Connect not found!");
      }
?>