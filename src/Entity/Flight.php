<?php

namespace src\Entity;

use  src\db\Database;
use PDO;

class Flight{

  const tableName='flight';
  const columnNameId='idFlight';
  const columnsName = [ 'id_outbound_airport' , 'id_arrival_airport' ,
  'check_out_date_hour' , 'check_in_date_hour' ];
  /*
  */



  public function __construct($idOutboundAirportC=null, $idArrivalAirportC=null,
  $checkOutDateHourC=null, $checkInDateHourC=null,$id=null)
  {
    $db = new Database(self::tableName);
    $this->id = $id;
    $this->idOutboundAirportC = $idOutboundAirportC;
    $this->idArrivalAirportC  = $idArrivalAirportC;
    $this->checkOutDateHourC = $checkOutDateHourC;
    $this->checkInDateHourC = $checkInDateHourC;

  }

  private $id;
  private $idOutboundAirportC;
  private $idArrivalAirportC;
  private $checkOutDateHourC;
  private $checkInDateHourC;


  public function setId($id)
  {
    $this->id = $id;
  }

  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->idOutboundAirportC,
      self::columnsName[1]  => $this->idArrivalAirportC,
      self::columnsName[2]  => $this->checkOutDateHourC,
      self::columnsName[3]  => $this->checkInDateHourC
    ]);
    return true;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->idOutboundAirportC,
      self::columnsName[1]  => $this->idArrivalAirportC,
      self::columnsName[2]  => $this->checkOutDateHourC,
      self::columnsName[3]  => $this->checkInDateHourC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }

  public static function getFlights($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getFlight($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }

}

?>
