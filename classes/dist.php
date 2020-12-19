<?php
class distance {
    public $CM;
    public $M;

    public function CMtoM(int $CM){
        $this->CM = $CM;
        $answer = $CM/100 . "m";
        return $answer;

    }
    public function MtoCM(int $M){
        $this->M = $M;
        $answer = $M*100 . "cm";
    }
}


?>