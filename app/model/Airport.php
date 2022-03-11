<?php
namespace Model;
class Airport{
    
    private $idAirport;
    private $name;
    private $city;
    private $country;


    function __construct(){}

    function set_id_airport($idAirport) {
        $this->$idAirport = $idAirport;
    }
    function set_name($name){
        $this->$name = $name;
    }
    function set_city($city) {
        $this->$city = $city;
    }
    function set_country($country) {
        $this->$country = $country;
    }
    

    function get_id_airport(){
        return $this->idAirport;
    }
    function get_name(){
        return $this->name;
    }
    function get_city() {
        return $this->city;
    }
    function get_country(){
        return $this->country;
    }
}
?>