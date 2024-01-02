<?php 

namespace app\config;

use PDO;
use PDOException;

class db_conn{


   private static $connection;

   private function __construct()
  {
    $db_host='localhost';
    $db_user='root';
    $db_password='';
    $db_name='immoconnect';

    try{
        $dsn="mysql:host=" . $db_host .";dbname=" . $db_name;
        self::$connection=new PDO($dsn,$db_user,$db_password);
        
    }
    catch(PDOException $e){
        echo"connection failed: " . $e->getMessage();
    }

   }

   public static function getconnection(){
       if(!self::$connection){
        new self();
       }
       else{
        return self::$connection;
       }
   }

}
