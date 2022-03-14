<?php
namespace src\Entity;

use  src\db\Database;
use PDO;

class Airport{

  const tableName='airport';
  const columnNameId='idAirport';
  const columnsName = ['name', 'city','state','country'];
  /*
  */
  private $id;
  private $nameC;
  private $cityC;
  private $stateC;
  private $country;

  public function __construct($nameC=null, $cityC=null, $stateC=null,
 $countryC=null,$id=null)
  {
    $db = new Database(self::tableName);
    $this->id = $id;
    $this->nameC = $nameC;
    $this->cityC  = $cityC;
    $this->stateC = $stateC;
    $this->countryC = $countryC;
  }


  public function setId($id)
  {
    $this->id = $id;
  }

  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->nameC,
      self::columnsName[1]  => $this->cityC,
      self::columnsName[2]  => $this->stateC,
      self::columnsName[3]  => $this->countryC
    ]);
    return true;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->nameC,
      self::columnsName[1]  => $this->cityC,
      self::columnsName[2]  => $this->stateC,
      self::columnsName[3]  => $this->countryC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }

  public static function getAirports($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getAirport($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }

}

?>
