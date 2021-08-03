<?php
class miembro{
    public $nombres;
    public $email;
    public $genero;

    public function __construct($nombres, $email, $genero){
        $this->nombres=$nombres;
        $this->email=$email;
        $this->genero=$genero;
    }
    public function getNombre(){
        return $this->nombres;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getGenero(){
        return $this->genero;
    }
}
?>