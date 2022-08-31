<?php 

class DBase extends DBaseAbstract{
  private static $DB_HOST;
  private static $DB_NAME;
  private static $DB_USER;
  private static $DB_PWRD;

  public function __construct( $DB_HOST, $DB_NAME, $DB_USER, $DB_PWRD ){
    self::$DB_HOST = 'localhost';
    self::$DB_NAME = 'pole_formation';
    self::$DB_USER = 'paterne';
    self::$DB_PWRD = 'Mardochee2008';
  }

  static function Connexion(){
    try {
      $pdo = new PDO("mysql:host=" . self::$DB_HOST.";dbname=". self::$DB_NAME, self::$DB_USER, self::$DB_PWRD);
    } catch (PDOException $e) {
      die($e->getMessage()); 
    }
    return $pdo;
  }

  public static function closePDO(){
    $db = null;
  }
}
