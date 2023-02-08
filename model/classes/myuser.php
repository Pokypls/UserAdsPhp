<?php

class MyUser {
    private $id;
    private $name;

    function __construct($idparam, $nameparam) {
        $this->id = $idparam;
        $this->name = $nameparam;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }


}

?>