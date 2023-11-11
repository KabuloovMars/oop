<?php 
class user{
    public $name;
    public $email;

public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;
}

public function getname(){
    return $this->name;

}
public function getmail(){
    return $this->email;   
}

}
class best extends user{
    public $phone;



    public function setphone($phone){
        $this->phone = $phone;
    }
     function getphone(){
        return $this->phone;
    }



    }

$con = new best("MARS", "KABULOV");



echo $con->getname(). "<br>";
echo $con->getmail(). "<br>";
echo $con->setphone("1905");
echo $con->getphone(). "\n";
?>
