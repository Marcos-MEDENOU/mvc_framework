<?php

namespace Core;

use PDO;
use PDOException;

/**
 * Base model
 * 
 * PHP version 8.0
 */
abstract class Model
{
  /**
   * Get the PDO database connection
   * 
   * @return mixed
   */
  protected static function getDB()
  {
    static $db = null;

    if ($db === null) {
      $host = 'localhost';
      $dbname = 'mvc';
      $username = 'root';
      $password =  '';

      try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);

        return $db;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
  }
}
