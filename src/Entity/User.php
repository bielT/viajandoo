<?php

namespace src\Entity;

use  src\db\Database;
use  src\Entity\Address;
use PDO;

class User{

  private const tableName= 'user';

  private const columnNameId='iduser';
  private const columnsName = [ 'name' , 'email' , 'telefone' , 'cpf' ];
/*
*/
  public function __construct($nameC=null, $emailC=null, $telefoneC=null, $cpfC=null,$id=null)
  {
    $db = new Database('user');
    $this->id = $id;
    $this->nameC = $nameC;
    $this->emailC  = $emailC;
    $this->telefoneC = $telefoneC;
    $this->cpfC = $cpfC;
     $addressC = getAddress();
  }
  private $db;
  private $id;
  private $nameC;
  private $emailC;
  private $telefoneC;
  private $cpfC;
  private $addressC;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getAddress()
  {
    $arrayAddress = array( );
    $query = '(SELECT `idaddress` FROM `user_address` WHERE `iduser` ='.$this->id.')'
    $array = Address::getAddresses(Address::columnNameId.'in'.$QUERY);
    foreach ($array as $address) {
      $arrayAddress[] =new Address(
          $address->address,
          $address->city,
          $address->state,
          $address->number,
          $address->address->cep,
          $address->complete,
          $address->idaddress);
    }
    return  $arrayAddress;
  }

  public function register(){
    $this->id = (new Database('user'))->insert([
                                  self::columnsName[0]  => $this->nameC,
                                  self::columnsName[1]  => $this->emailC,
                                  self::columnsName[2]  => $this->telefoneC,
                                  self::columnsName[3]  => $this->cpfC
                                  ]);
    return true;
  }

  public function update(){
    return (new Database('user'))->update(self::columnNameId.' = '.$this->id,[
                            self::columnsName[0]  => $this->nameC,
                            self::columnsName[1]  => $this->emailC,
                            self::columnsName[2]  => $this->telefoneC,
                            self::columnsName[3]  => $this->cpfC
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

}

?>
