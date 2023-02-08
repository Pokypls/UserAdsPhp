<?php

class MyAd {
    private $id;
    private $userid;

    private $title;

    function __construct($idparam, $useridparam, $titleparam) {
        $this->id = $idparam;
        $this->userid = $useridparam;
        $this->title = $titleparam;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userid;
    }

    public function getTitle() {
        return $this->title;
    }

}

?>