<?php

namespace src\Entity;

use  src\db\Database;
use PDO;

class AirportPageContent{

  const tableName='airport_page_content';
  const columnNameId='idairport_page_content';
  const columnsName = [ 'resume' , 'description' , 'price' ,
 'path_image_description' ,'path_miniature'   , 'id_page'];
  /*
airport_page_content
idairport_page_content int PK
resume mediumtext
description longtext
price varchar(40)
path_image_description varchar(100)
id_page int
path_miniature
  */
  public function __construct($resumeC=null, $descriptionC=null, $priceC=null,
  $pathImageDescriptionC=null,$pathMiniatureC= null,$idPageC=null,$id=null)
  {
    $db = new Database(self::tableName);
    $this->id = $id;
    $this->resumeC  = $resumeC;
    $this->descriptionC = $descriptionC;
    $this->priceC = $priceC;
    $this->idPageC = $idPageC;
    $this->pathImageDescriptionC = $pathImageDescriptionC;
    $this->pathMiniatureC = $pathMiniatureC;
  }

  private $id;
  private $resumeC;
  private $descriptionC;
  private $priceC;
  private $idPageC;
  private $pathImageDescriptionC;
  private $pathMiniatureC;

  public function setId($id)
  {
    $this->id = $id;
  }

  /*
  airport_page_content
  idairport_page_content int PK
  resume mediumtext
  description longtext
  price varchar(40)
  path_image_description varchar(100)
  id_page int
  path_miniature
  */
  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->resumeC,
      self::columnsName[1]  => $this->descriptionC,
      self::columnsName[2]  => $this->priceC,
      self::columnsName[3]  => $this->pathImageDescriptionC,
      self::columnsName[4]  => $this->pathMiniatureC,
      self::columnsName[5]  => $this->idPageC
    ]);
    return $this->id;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->resumeC,
      self::columnsName[1]  => $this->descriptionC,
      self::columnsName[2]  => $this->priceC,
      self::columnsName[3]  => $this->pathImageDescriptionC,
      self::columnsName[4]  => $this->pathMiniatureC,
      self::columnsName[5]  => $this->idPageC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }

  public static function getPages($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getPage($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }
  public static function getPageByAirport($id){
    return (new Database(self::tableName))->select(self::columnsName[5].' = '.$id)
    ->fetchObject(__CLASS__);
  }

}

?>
