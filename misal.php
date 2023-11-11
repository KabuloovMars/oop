<?php
// class radios{


//     public static function qos($a, $b) {
        
        
//         return $a + $b;
// }
// public static function alatin($a, $b) {
//     return $a - $b;


// }
// public static function ab($a, $b) {
//     return self::qos($a,$b) * self::alatin($a,$b)   ;



// }



// echo radios::ab(2,3);




// class best{
//     public $a;
//     public $b;

//     public function __construct($a, $b){
//         $this->a = $a;
//         $this->b = $b;
//     }
//     public  function qos($a, $b) {
//         return $this->a + $this->b;

//     }
// }


// $post = new best(1,2);
// echo $post->qos(1,2);
// ?>


<?php 

abstract class make{
public $name;

public function __construct($name){ 
    $this->name = $name;
}
 abstract public function set() ;


}
class balasi extends make{
 public function set(){
    return "Hello my baby "  . $this->name; 
 }

}

$test = new balasi("Baxa");
echo $test->set();







?>



