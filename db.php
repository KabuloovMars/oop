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
    public function insert($table) {


    $sql="INSERT INTO posts (name,title) VALUES ('baxa', 'XAXAXAXA')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return "qosildi";

        
}


}



// $post =  new Database();
//  $post->insert("posts");



?>