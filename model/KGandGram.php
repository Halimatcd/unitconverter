<?php 
class KGandGram{
    public $valueInKG;
    public $valueInGram;
    public $MG;

// public function __construct(){
//     echo "please input your values all aproximatted to two decimal places"; echo "</br>";

// }
public function KGtoGram(int $valueInKG){
    $this->valueInKG = $valueInKG;
    $answer = $valueInKG *1000 . "g";
    return  $answer;

}
public function GramTOKG(int $valueInGram){
    $this->valueInGram = $valueInGram;
    $answer = $valueInGram/1000 . "kg";
    return $answer;
}
public function MGtoG(int $MG){
    $this->MG = $MG;
    $answer = $MG / 1000 . "g";
    return $answer;
}
public function GramtoMG(int $valueInGram){
    $this->$valueInGram = $valueInGram;
    $answer = $valueInGram * 1000 . "mg";
    return $answer;
}
public function KGtoMG(int $valueInKG){
    $this->$valueInKG = $valueInKG;
    $answer =$valueInKG * 1000000 . "mg";
    return $answer;
}
public function MGtoKG (int $MG){
    $this->$MG = $MG;
    $answer = $MG/1000000 . "kg";
    return $answer;
}
}