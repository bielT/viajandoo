<?php

namespace src\Entity;

use  src\db\Database;
use PDO;

class ImagemCarousel{

  const tableName='imagemcarousel';
  const columnNameId='idimagem';
  const columnsName = [ 'path', 'id_page' ];
  /*
imagemcarousel
Columns:
idimagem int PK
path varchar(255)
id_page int
  */

  public function __construct($pathC=null, $idPageC=null,$id=null)
  {
    $this->id = $id;
    $this->pathC = $pathC;
    $this->idPageC  = $idPageC;
  }

  private $id;
  private $pathC;
  private $idPageC;



  public function setId($id)
  {
    $this->id = $id;
  }

  public function register(){
    $this->id = (new Database(self::tableName))->insert([
      self::columnsName[0]  => $this->pathC,
      self::columnsName[1]  => $this->idPageC
    ]);
    return true;
  }

  public function update(){
    return (new Database(self::tableName))->update(self::columnNameId.' = '.$this->id,
    [
      self::columnsName[0]  => $this->pathC,
      self::columnsName[1]  => $this->idPageC
    ]);
  }

  public function delete(){
    if (file_exists($this->path)){
            unlink($this->path);
    }
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->idimagem);

  }

  public static function getImagemCarousels($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public static function getImagemCarousel($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__class__);
  }
  public static function getImagemCarouselByPage($id){
    return (new Database(self::tableName))->select(self::columnsName[1] .' = '.$id)
    ->fetchAll(PDO::FETCH_CLASS);
  }

  public function getAirportByPage($id){

    return (new Database("get_airport_by_age"))->select(self::columnsName[1] .' = '.$this->id_page)
      ->fetchObject(__class__);
  }

}

?>
