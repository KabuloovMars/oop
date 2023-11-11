<?php 

class Database{
    public $host = "localhost";
    public $password = "root";
    public $username = "root";
    public $database = "oop";
    public  $conn;

    public function __construct() {
        
try {
    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


    }
    public function insert($table , $param = []) {
      
      global $conn;
      $coll = '';
      $row = '';
     $i = 0;
      foreach ($param as $key => $value) {
         if($i==0){
 
             $coll = $coll." $key ";
             $row = $row."'". " $value "."'";
         }else{
             $coll = $coll.", $key ";
             $row = $row.", '". "$value"."'";
         }
         
         $i++;
         
      }
      
      $sql = "INSERT INTO $table ($coll) VALUES ($row)";
      $sql = $this->conn->prepare($sql);
      $sql->execute();
      return $this->conn->lastInsertId();
      
 
 
 
 
  
 
        
}

function selectAll($table, $param = []) {





  $sql = "SELECT * FROM $table";

  if(!empty($param)){
      $i = 0;
      foreach ($param as $key => $value){
          if (!is_numeric($value)){
              $value = "'".$value."'";
          }
          if ($i === 0){
              $sql = $sql . " WHERE $key=$value";
          
          }else{
              $sql = $sql . " AND $key=$value";
          }
          $i++;
      }
  }

  $query = $this->conn->prepare($sql);
  $query->execute();
  
  return $query->fetchAll(PDO::FETCH_OBJ);

}






public function update($table, $id, $param = []){


  $row = '';
  $i = 0;
  foreach ($param as $key => $value) {
     if ($i===0) {
      $row = $row.$key."= '".$value."'";

     }else{

      $row = $row.",".$key."= '".$value."'";
       
     }
     $i++;
  }

  $sql = "UPDATE $table SET $row WHERE id =$id";
  $sql=$this->conn->prepare($sql);
  return $sql->execute();
  //  echo "ozgerdigoo";


  
}


function delete( $table , $id){
  $sql = "DELETE FROM $table WHERE id = $id";
  $sql = $this->conn->prepare($sql);
  $sql->execute();
  return "hello baby";

}





}




?>