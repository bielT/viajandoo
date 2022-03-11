<?php
namespace Model;
class UserAddress{
    private $idUserAddress;
    private $idUser;
    private $idaddress;
    private $main = false;
    function __construct(){}
   function set_id_user_address($idUserAddress){
        $this->$idUserAddress = $idUserAddress;
    }

   function set_id_user($idUser) {
        $this->$idUser = $idUser;
    }
    function set_id_address($idaddress) {
        $this->$idaddress = $idaddress;
    }
    
    function set_main($main) {
        $this->$main = $main;
    }

    function get_id_user_address(){
        return $this->idUserAddress;
    }
    function get_id_user() {
        return $this->idUser;
    }
    function get_id_address(){
        return $this->idaddress;
    }
    function get_id_main(){
        return $this->main;
    }
}
?>