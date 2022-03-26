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
  private $countryC;

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
    return $this->id;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->nameC,
      self::columnsName[1]  => $this->cityC,
      self::columnsName[2]  => $this->stateC,
      self::columnsName[3]  => $this->countryC
    ]);
  }

  public  function delete(){

    self::deletePathAirport($this->idairport);
    return (new Database(self::tableName))->delete(self::columnNameId.'= '.$this->idairport);

  }
  public static function deletePathAirport($id){
    $a =self::getPathAirport($id);

    foreach ($a as  $value) {

      if (file_exists($value->path_image_description)){
              unlink($value->path_image_description);
      }
      if (file_exists($value->path_miniature)){
          unlink($value->path_miniature);
      }
      if (file_exists($value->path)){
          unlink($value->path);
      }
    }
  }
  public static function getPathAirport($id){
    return (new Database("path_by_id_view"))->select('id_page = '.$id)
    ->fetchAll(PDO::FETCH_CLASS);
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
