<?php
  // Singleton to connect db.
class ConnectDb {
  // Hold the class instance.
  private static $instance;
  private $conn;

  //private $host = '35.232.2.245'; // '35.232.2.245';
  //private $user = 'root';
//  private $pass = 'Vnptst@123';
//  private $name = 'qlcangca';
  private $host = 'localhost'; // '35.232.2.245';
  private $user = 'root' ;
  private $pass = '';
  private $name = 'layykien';

  // The db connection is established in the private constructor.
  private function __construct()
  {
    $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  }

  public static function getInstance()
  {
    // if(!isset(self::$instance))
    // {
    //   self::$instance = new self();
    // }
    self::$instance = new self();
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->conn;
  }

  private function __clone() {}
  private function __wakeup() {}
}

?>
