<?php
include('database.php');
function list_all_users() {
    $conn = connectdb();

    $sql = "SELECT id,name FROM user";
    $query=$conn->prepare($sql);

    $query->execute();
    $list = $query->fetchAll();

    return $list;
}


?>