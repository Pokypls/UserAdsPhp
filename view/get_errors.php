<?php 
        if (!empty($_GET["error"])) {
            $error = $_GET["error"];
            if ($error == "missing_uname_or_pw") {
                echo "Can not log in whithout username and password!";
            } else if ($error == "wrong_uname_or_pw") {
                echo "Wrong username or password!";
            } else if ($error == "wrong_db") {
                echo "Oooops..Database error! ";
            }
        }
   
    ?>