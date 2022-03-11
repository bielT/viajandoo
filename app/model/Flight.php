<?php
namespace Model;
class Flight{
    private $idFlight;
    private $idOutboundAirport;
    private $idArrivalAirport;
    private $checkOutDateHour;
    private $checkInDateHour;
    function __construct(){}
   

   function set_id_flight($idFlight) {
        $this->$idFlight = $idFlight;
    }
    function set_id_outbound_airport($idOutboundAirport) {
        $this->$idOutboundAirport = $idOutboundAirport;
    }
    function set_id_arrival_airport($idArrivalAirport){
        $this->$idArrivalAirport = $idArrivalAirport;
    }
    
    function set_check_out_date_hour($checkOutDateHour) {
        $this->$checkOutDateHour = $checkOutDateHour;
    }
    function set_check_in_date_hour($checkInDateHour) {
        $this->checkInDateHour = $checkInDateHour;
    }
    
    function get_id_flight() {
        return $this->idFlight;
    }
    function get_id_outbound_airport(){
        return $this->idOutboundAirport;
    }
    function get_id_arrival_airport(){
        return $this->idArrivalAirport;
    }
    function get_check_out_date_hour(){
        return $this->checkOutDateHour;
    }
    function get_check_in_date_hour(){
        return $this->checkInDateHour;
    }
}
?>