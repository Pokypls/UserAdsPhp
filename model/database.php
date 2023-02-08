<?php
 
function connectdb() {
    $dbuser="root";
    $dbpw="";
    try {
        $conn = new PDO('mysql:host=localhost; dbname=database', $dbuser, $dbpw);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e){
        echo "Adatbázis kapcsolódási hiba: ".$e->getMessage();
    } catch (Exception $e){
        echo "Hiba: ".$e->getMessage();
    }
    die();
}

?>