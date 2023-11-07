<?php 

class tortmuyesh{
    public $uzinligi;
    public $eni;

     

public function __construct($uzinligi,$eni) {


    $this->uzinligi=$uzinligi;
    $this->eni=$eni;
 }


 public function maydani() {
   return ($this->uzinligi + $this->eni) *2;

}
public function param() {
 return $this->uzinligi * $this->eni;
}
}

$Q = new tortmuyesh("25cm", "10cm");
// echo $BYD->get_uzinligi()."\n";
// echo $BYD->get_eni();

echo $Q->maydani()."\n";
echo $Q->param();





// class shenber{
//     public $radios;
//     public function she() {  
//     return $this->radios/1;
//     }
    
// }

// $n = new shenber("");
// echo $n->she();




?>







