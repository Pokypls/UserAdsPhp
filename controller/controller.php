<?php
    require('../model/model_ads.php'); 
    require('../model/model_user.php');

    function list_users() {
        $users = list_all_users();
        return $users;
    }

    function list_ads($userid) {
        if (isset($userid)) {
            $allads = list_user_ads($userid); 
        } else {
            $allads = list_all_ads();
        }
        return $allads;
    }
?>