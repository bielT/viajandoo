<?php

namespace src\Entity;

use  src\db\Database;
use PDO;

class Ticket{

  const tableName='ticket';
  const columnNameId='idTicket';
  const columnsName = [ 'id_flight', 'id_user' ];
  /*
  */

  public function __construct($idFlightC=null, $idUserC=null,$id=null)
  {
    $db = new Database(self::tableName);
    $this->id = $id;
    $this->idFlightC = $idFlightC;
    $this->idUserC  = $idUserC;
  }

  private $id;
  private $idFlightC;
  private $idUserC;



  public function setId($id)
  {
    $this->id = $id;
  }

  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->idFlightC,
      self::columnsName[1]  => $this->idUserC
    ]);
    return true;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,
    [
      self::columnsName[0]  => $this->idFlightC,
      self::columnsName[1]  => $this->idUserC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }

  public static function getTickets($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getTicket($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }

}

?>
