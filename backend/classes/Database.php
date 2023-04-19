<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_CONNECTION_QUERY', 'mysql:host=localhost;dbname=todos;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

class Database
{
  protected $connection = null;

  public function __construct()
  {
    try {
      $this->connection = new PDO(DB_CONNECTION_QUERY, DB_USER, DB_PASSWORD);
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  private function executeStatement($query = "") 
  {
    try {
      $query = $this->connection->prepare($query);
      $query->execute();
      return $query;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  public function select($query = "")
  {
    try {
      $query = $this->executeStatement($query);
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  public function insert($query = "", $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $result = $statement->execute($params);
      return $result;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  public function delete($query = "", $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $result = $statement->execute($params);
      return $result;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}
?>