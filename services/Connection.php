<?php

class Connection {

  private PDO $pdo;

  public function __construct() {
    $configs = getenv();
    try {
      $dsn = "mysql:dbname={$configs['MYSQL_DATABASE']};host={$configs['MYSQL_HOST']};charset=utf8";
      $user = $configs['MYSQL_USER'];
      $pass = $configs['MYSQL_PASSWORD'];
      $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

      $this->pdo = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
      echo 'Ошибка подключения: ' . $e->getMessage();
    }
  }

  public function insert(string $tableName, array $fields): int {
    $field_names = [];
    $parameters = [];
    foreach ($fields as $key => $val) {
      $field_names[] = $key;
      $parameters[] = ":{$key}";
    }

    $field_names = implode(', ', $field_names);
    $parameters = implode(', ', $parameters);
    $query = "INSERT INTO {$tableName} ({$field_names}) VALUES ({$parameters})";
    $statement = $this->pdo->prepare($query);
    $statement->execute($fields);

    return $this->pdo->lastInsertId();
  }

}