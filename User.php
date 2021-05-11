<?php

class User {
    private $id;
    public $name;
    public $lastname;
    public $mail;
    public $birth_date;
    public $permission = 'member';
    public $news = false;
    public $posts;

    public function __construct($_id, $_name, $_lastname, $_mail, $_birth_date)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->mail = $_mail;
        $this->birth_date = $_birth_date;
    }

    public function setId($_id) {
        if(!is_int($_id)){
            throw new Exception('Non è un numero');
        }
        $this->id = $_id;
    }

    public function getId() {
        echo $this->id;
    }
}