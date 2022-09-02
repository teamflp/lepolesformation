<?php 
class DBaseAbstract {
     private static $DB_HOST;
     private static $DB_NAME;
     private static $DB_USER;
     private static $DB_PWRD;

     public function __construct( $DB_HOST, $DB_NAME, $DB_USER, $DB_PWRD ){
          self::$DB_HOST = $DB_HOST;
          self::$DB_NAME = $DB_NAME;
          self::$DB_USER = $DB_USER;
          self::$DB_PWRD = $DB_PWRD;
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