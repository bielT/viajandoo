<?php
namespace Model;
class Address{
    private $idaddress;
    private $Address;
    private $city;
    private $number;
    private $complete;
    private $cep;

    function __construct(){}

    function set_id_address($idaddress) {
        $this->$idaddress = $idaddress;
    }
    function set_address($Address){
        $this->$Address = $Address;
    }
    function set_city($city) {
        $this->$city = $city;
    }
    function set_number($number) {
        $this->$number = $number;
    }
    function set_complete($complete) {
        $this->$complete = $complete;
    }
    function set_cep($cep) {
        $this->$cep = $cep;
    }

    function get_id_address(){
        return $this->idaddress;
    }
    function get_address(){
        return $this->Address;
    }
    function get_city() {
        return $this->city;
    }
    function get_number(){
        return $this->number;
    }
    function get_complete(){
        return $this->complete;
    }
    function get_cep(){
        return $this->cep;
    }
}
?>