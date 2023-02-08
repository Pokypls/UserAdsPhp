<?php
    require('../model/model_ads.php'); 
    require('../model/model_user.php');
    require('../model/classes/myuser.php'); 

    function list_users() {
        $users = list_all_users();
        $userobjects = array();
        foreach ($users as $act_user) {
            $userobj = new MyUser($act_user[0], $act_user[1]);
            array_push($userobjects, $userobj);
        };
        return $userobjects;
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