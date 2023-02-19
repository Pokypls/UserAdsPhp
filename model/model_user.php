<?php
include('database.php');
function list_all_users() {
    $conn = connectdb();

    $sql = "SELECT id,name,username FROM user";
    $query=$conn->prepare($sql);

    $query->execute();
    $list = $query->fetchAll();

    return $list;
}

function add_User($userName,$pw,$name) {
    $error = "";
    $msg = "";
    
    $conn = connectdb();

    
        if (!empty($userName) && !empty($pw) && !empty($name)) {
            try {
                $sql = "INSERT INTO user (name,username,password) VALUES (:name,:username,:password)";
                $queryNewUser = $conn->prepare($sql);
                $queryNewUser->bindParam(":name",$name,PDO::PARAM_STR);
                $queryNewUser->bindParam(":username",$userName,PDO::PARAM_STR);
                $queryNewUser->bindParam(":password",$pw,PDO::PARAM_STR);
                $queryNewUser->execute();
                $msg .= "Regisztráció sikerült, jelentkezzen be!";
                return $msg;
            } catch (PDOException $e){
                $error = "Regisztráció mentési hiba: ";
            }
            catch (Exception $e){
                $error = "Regisztrációs hiba: ";
            }
        }
	   else {
		   $error .= "Hibás felhasználói adatok";
	    }
        return $error;
}
?>