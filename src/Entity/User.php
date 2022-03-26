<?php

namespace src\Entity;

use  src\db\Database;
use  src\Entity\Address;
use PDO;

class User{

  private const tableName= 'user';

  private const columnNameId='iduser';
  private const columnsName = [ 'name' , 'email' , 'telefone' , 'cpf','profile','password'];
  /*
  */
  public function __construct($nameC=null, $emailC=null, $telefoneC=null, $cpfC=null,$passwordC=null,$id=null,$profileC =1)
  {
    $db = new Database('user');
    $this->id = $id;
    $this->nameC = $nameC;
    $this->emailC  = $emailC;
    $this->telefoneC = $telefoneC;
    $this->cpfC = $cpfC;
    $this->passwordC = $passwordC;
    $this->profileC = $profileC;
  }
  private $db;
  private $id;
  private $nameC;
  private $emailC;
  private $telefoneC;
  private $cpfC;
  private $profileC;
  private $passwordC;
  public function setId($id)
  {
    $this->id = $id;
  }

  public function register(){
    $this->id = (new Database('user'))->insert([
      self::columnsName[0]  => $this->nameC,
      self::columnsName[1]  => $this->emailC,
      self::columnsName[2]  => $this->telefoneC,
      self::columnsName[3]  => $this->cpfC,
      self::columnsName[4]  =>  $this->profileC,
      self::columnsName[5]  => $this->passwordC
    ]);
    return $this->id;
  }

  public function update(){
    return (new Database('user'))->update(self::columnNameId.' = '.$this->id,[
      self::columnsName[0]  => $this->nameC,
      self::columnsName[1]  => $this->emailC,
      self::columnsName[2]  => $this->telefoneC,
      self::columnsName[3]  => $this->cpfC,
      self::columnsName[4]  =>  $this->profileC,
      self::columnsName[5]  => $this->passwordC
    ]);
  }

  public function delete(){
    return (new Database(self::tableName))->delete(self::columnNameId.'='.$this->id);

  }

  public static function getUsers($where = null, $order = null, $limit = null){
    return (new Database(self::tableName))->select($where,$order,$limit)
    ->fetchAll(PDO::FETCH_CLASS);
  }


  public static function getUser($id){
    return (new Database(self::tableName))->select(self::columnNameId.' = '.$id)
    ->fetchObject(__CLASS__);
  }

  public static function getUserByEmail($Email){
    return (new Database(self::tableName))->select(self::columnsName[1].' = '.'"'.$Email.'"')
    ->fetchObject(__CLASS__);
  }

}

?>
