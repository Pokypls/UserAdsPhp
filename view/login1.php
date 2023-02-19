<?php 
 require('../model/model_user.php');

    if (empty($_POST["u_Name"]) || empty($_POST["u_Pw"])) {
        header('Location: http://localhost/rabIT/view/index.php?error=missing_uname_or_pw');
    }
   
if (!empty($_POST["u_Name"]) && !empty($_POST["u_Pw"])) {
    try {
        $conn = connectdb();

        $phpName = trim($_POST["u_Name"]);
        $phpPw = trim($_POST["u_Pw"]);

        $sql = "SELECT username,password FROM user 
        WHERE username=:sqlName AND password=:u_Pw";

        $query=$conn->prepare($sql);
        $query->bindParam(":sqlName", $phpName, PDO::PARAM_STR);
        $query->bindParam(":u_Pw", $phpPw, PDO::PARAM_STR);
        $query->execute();

        $userek = $query->fetchAll();
        if (empty($userek)) {
            header('Location: http://localhost/rabIT/view/index.php?error=wrong_uname_or_pw');
        }
        echo "lskd";
        return $userek;
    } catch (PDOException $e) {
        // txtbe a hiba okát utánanézni
        header('Location: http://localhost/rabIT/view/index.php?error=wrong_db');
    }
}






?>