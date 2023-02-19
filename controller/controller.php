<?php
    require('../model/model_ads.php'); 
    require('../model/model_user.php');
    require('../model/classes/allclass.php');


    function list_users() {
        $users = list_all_users();
        $userobjects = array();
        foreach ($users as $act_user) {
            $userobj = new MyUser($act_user[0], $act_user[1],$act_user[2]);
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

        $adsobjects = array();
        foreach ($allads as $act_ad) {
            $adobj = new MyAd($act_ad[0], $act_ad[1], $act_ad[2]);
            array_push($adsobjects, $adobj);
        };
        return $adsobjects;
    }


        function alreadyUser($chusern) {
            $alluser = list_users();

            $exist = false;

            foreach ($alluser as $user) {
                $user_Name = $user->getUserName();
                if ($user_Name == $chusern) {
                    $exist = true;
                }
            } 
            return $exist;
        }





        function reg_User($u,$p,$n) {
            $actunamexist = alreadyUser($u);
            if ($actunamexist == true) {
                $result = "Unsuccessful registration (username is already taken) :(";
            } else {
                $result = add_User($u,$p,$n);
            }
            return $result;
        }
            /*listuserst meg kell hivni és az eredményét odaadni az already user
             függvénynek plusz az $u -t és haez true akkor már létezik felhasználónév, akkor
             ezzel a szöveggel visszakell térni: létezik felh név, egyébként 
             padig addusert hivjuk meg és annaka  visszatérési értékével kell visszatérni. 
             username myuser és listallusersbe is bekerüljön */
           
        
?>