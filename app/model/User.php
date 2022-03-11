<?php
namespace Model;
class User implements Model{
    private $idUser;
    private $name;
    private $email;
    private $telefone;
    private $cpf;
    function __construct(){}
   

   function set_id_user($idUser) {
        $this->$idUser = $idUser;
    }
    function set_name($name) {
        $this->$name = $name;
    }
    function set_email($email){
        $this->$email = $email;
    }
    
    function set_telefone($telefone) {
        $this->$telefone = $telefone;
    }
    function set_cpf($cpf) {
        $this->cpf = $cpf;
    }
    
    function get_id_user() {
        return $this->idUser;
    }
    function get_name(){
        return $this->name;
    }
    function get_email(){
        return $this->email;
    }
    function get_telefone(){
        return $this->telefone;
    }
    function get_cpf(){
        return $this->cpf;
    }
}
?>