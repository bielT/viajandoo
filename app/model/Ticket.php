<?php
namespace Model;
class Ticket{
    private $idticket;
    private $id_flight;

    function __construct(){
    }
    function set_idticket($idticket){
        $this->$idticket = $idticket;
    }
    function set_id_flight($id_flight) {
        $this->$id_flight = $id_flight;
    }
    function get_idticket(){
        return $this->idticket;
    }
    function get_id_flight() {
        return $this->id_flight;
    }

}
?>