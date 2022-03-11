<?php
namespace src\db;

use \PDO;
use \PDOException;
class  Database {
    const HOST  = '127.0.0.1:3307';
    const NAME  = 'viajandoo';
    const USER  = 'root';
    const PASS  = '1234';

    private $table;
    private $connection;

    public function __construct($table=null)
    {
      $this->table = $table;
      $this->setConnection();
    }

    private function setConnection()
    {
      try {
          $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
          die('ERRO:'.$e->getMessage());
      }

    }

  private  function execute($query,$params = [])
    {
        try {
          $statement = $this->connection->prepare($query);
          $statement->execute($params);
          return $statement;

        } catch (PDOException $e) {
            die('ERRO:'.$e->getMessage());
        }

    }

    public function insert($values)
    {
        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
        $query  = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES  ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'){

    //DADOS DA QUERY
    $where = strlen($where) ? 'WHERE '.$where : '';
    $order = strlen($order) ? 'ORDER BY '.$order : '';
    $limit = strlen($limit) ? 'LIMIT '.$limit : '';

    //MONTA A QUERY
    $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

    $debug=$this->execute($query);

    //EXECUTA A QUERY
    return $debug;
  }

  /**
   * Método responsável por executar atualizações no banco de dados
   * @param  string $where
   * @param  array $values [ field => value ]
   * @return boolean
   */
  public function update($where,$values){
    //DADOS DA QUERY
    $fields = array_keys($values);

    //MONTA A QUERY
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //EXECUTAR A QUERY
    $this->execute($query,array_values($values));

    //RETORNA SUCESSO
    return true;
  }

  /**
   * Método responsável por excluir dados do banco
   * @param  string $where
   * @return boolean
   */
  public function delete($where){

    //MONTA A QUERY
    $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

    //EXECUTA A QUERY
    $this->execute($query);

    //RETORNA SUCESSO
    return true;
  }




}
?>
