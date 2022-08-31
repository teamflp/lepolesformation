<?php 

// CLASSE DBASE POUR SE CONNECTER A LA BASE DE DONNEES
/** @package  */
class DBase {
  private static $localhost = "localhost";
  private static $dbasename = "pole_formation";
  private static $username = "paterne";
  private static $password = "Mardochee2008";
  private static $conn = null;

  public static function connect(){
    try{
      self::$conn = new PDO("mysql:host=" . self::$localhost.";dbname=". self::$dbasename, self::$username, self::$password); 
    }catch(PDOException $e){
      die($e->getMessage()); // ON AFFICHE LE MESSAGE D'ERREUR
    }
    return self::$conn;
  }
   /** @return void  */
   static function disconnect(){
     self::$conn = null;
   }
}