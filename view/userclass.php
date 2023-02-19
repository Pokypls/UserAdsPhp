<?php 
class User {
    public $username;

    public $password;

    function __construct($someusername, $somepassword){
        $this->username = $someusername;
        $this->password = $somepassword;
        
    }
  
}
//ez csak a uswrname létezését ellenőrzi le, de nem sql es


?>