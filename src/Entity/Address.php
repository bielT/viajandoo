<?php

namespace src\Entity;

use  src\db\Database;
use PDO;

class Address{

  const tableName='address';
  const columnNameId='idaddress';
  const columnsName = [ 'address' , 'city' , 'state' ,
 'number' , 'cep' ,'complete' , 'idUser'];
  /*
  */
  public function __construct($addressC=null, $cityC=null, $stateC=null, $numberC=null,
  $cepC=null,$completeC=null,$idUserC= null,$id=null)
  {
    $db = new Database(self::tableName);
    $this->id = $id;
    $this->addressC = $addressC;
    $this->cityC  = $cityC;
    $this->stateC = $stateC;
    $this->numberC = $numberC;
    $this->completeC = $completeC;
    $this->cepC = $cepC;
    $this->idUserC = $idUserC;
  }

  private $id;
  private $addressC;
  private $cityC;
  private $stateC;
  private $numberC;
  private $completeC;
  private $cepC;
  private $idUserC;

  public function setId($id)
  {
    $this->id = $id;
  }


  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->addressC,
      self::columnsName[1]  => $this->cityC,
      self::columnsName[2]  => $this->stateC,
      self::columnsName[3]  => $this->numberC,
      self::columnsName[4]  => $this->completeC,
      self::columnsName[5]  => $this->cepC,
      self::columnsName[6]  => $this->idUserC
    ]);
    return true;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->addressC,
      self::columnsName[1]  => $this->cityC,
      self::columnsName[2]  => $this->stateC,
      self::columnsName[3]  => $this->numberC,
      self::columnsName[4]  => $this->completeC,
      self::columnsName[5]  => $this->cepC,
      self::columnsName[6]  => $this->idUserC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }
  public static function deleteUser($idUserC){
    return (new Database(self::tableName))->delete(self::columnsName[6].'='.$idUserC);
  }

  public static function getAddresses($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getAddress($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }
  public static function getAddressByUser($id){
    return (new Database(self::tableName))->select(self::columnsName[6].' = '.'"'.$id.'"')
    ->fetchAll(PDO::FETCH_CLASS);
  }

}

?>
