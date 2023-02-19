<?php

class MyId {
    protected $id;

    function __construct($idparam) {
        $this->id = $idparam;
    }

    public function getId() {
        return $this->id;
    }
}

class MyAd extends MyId {
    
    private $userid;

    private $title;

    function __construct($idparam, $useridparam, $titleparam) {
        parent::__construct($idparam);
        $this->userid = $useridparam;
        $this->title = $titleparam;
    }

    public function getUserId() {
        return $this->userid;
    }

    public function getTitle() {
        return $this->title;
    }
}


class MyUser extends MyId {
    
    public $name;

    public $username;

    function __construct($idparam, $nameparam, $username) {
        parent::__construct($idparam);
        $this->name = $nameparam;
        $this->username = $username;
    }


    public function getName() {
        return $this->name;
    }
    public function getUserName() {
        return $this->username;
    }
}
