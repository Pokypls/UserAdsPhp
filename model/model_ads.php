<?php
function list_user_ads($userid_filter) {
    $conn = connectdb();

    $sql = "SELECT advertisement.id,advertisement.userid,advertisement.title 
            FROM advertisement INNER JOIN user ON advertisement.userid=user.id 
            WHERE userid=:param_userid";
    $query=$conn->prepare($sql);

    $query->bindParam(":param_userid", $userid_filter, PDO::PARAM_INT);
    $query->execute();

    $list = $query->fetchAll();
    return $list;
}

function list_all_ads() {
    $conn = connectdb();

    $sql = "SELECT advertisement.id,advertisement.userid,advertisement.title 
            FROM advertisement INNER JOIN user ON advertisement.userid=user.id";
    $query=$conn->prepare($sql);   
    $query->execute();

    $list = $query->fetchAll();
    return $list;
}
?>

