<?php

class Database {
  private $conn;

  public function __construct()
  {
    $dsn = "mysql:host=127.0.0.1;port=3306;dbname=demo;user=admin;password=root;charset=utf8mb4";

    $this->conn = new PDO($dsn);
  }

  public function query(String $query) 
  {
    $statement = $this->conn->prepare($query);

    $statement->execute();

    return $statement;
  }
}
