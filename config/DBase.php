<?php

// Classe abstraite DBaseAbstract

abstract class DBaseAbstract{
  private $DB_HOST;
  private $DB_NAME;
  private $DB_USER;
  private $DB_PWRD;

  public function __construct( $DB_HOST, $DB_NAME, $DB_USER, $DB_PWRD ){
    $this->DB_HOST = $DB_HOST;
    $this->DB_NAME = $DB_NAME;
    $this->DB_USER = $DB_USER;
    $this->DB_PWRD = $DB_PWRD;
  }

  // Getters & Setters
  public function getDB_HOST(){
    return $this->DB_HOST;
  }

  public function setDB_HOST($DB_HOST){
    $this->DB_HOST = $DB_HOST;
  }

  public function getDB_NAME(){
    return $this->DB_NAME;
  }

  public function setDB_NAME($DB_NAME){
    $this->DB_NAME = $DB_NAME;
  }

  public function getDB_USER(){
    return $this->DB_USER;
  }

  public function setDB_USER($DB_USER){
    $this->DB_USER = $DB_USER;
  }

  public function getDB_PWRD(){
    return $this->DB_PWRD;
  }

  public function setDB_PWRD($DB_PWRD){
    $this->DB_PWRD = $DB_PWRD;
  }

  public function getPDO(){
    return new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PWRD);
  }

  public function getPDOStatement( $query ){
    return $this->getPDO()->prepare($query);
  }

  public function getPDO_UTF8_ERRMODE(){
    return new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PWRD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // pour avoir les accents dans les requêtes SQL et gérer les erreurs
  }

  public function getPDOStatement_UTF8_ERRMODE( $query ){
    return $this->getPDO_UTF8_ERRMODE()->prepare($query);
  }

  // Function static pour se déconnecter de la base de données
  public static function disconnect(){
    $db = null;
  }
}

// Classe DBase : hérite de DBaseAbstract
class DBase extends DBaseAbstract{
  public function __construct(){
    parent::__construct('localhost', 'pole_formation', 'paterne', 'Mardochee2008');
  }

  public function getPDO(){
    return parent::getPDO();
  }

  public function getPDOStatement( $query ){
    return parent::getPDOStatement($query);
  }

  public function getPDO_UTF8_ERRMODE(){
    return parent::getPDO_UTF8_ERRMODE();
  }

  // Function static pour se déconnecter de la base de données
  public static function closePDO(){
    parent::disconnect();
  }
}
