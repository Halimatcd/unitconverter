<?php
 class KtoC{
     public $valueInKelvin;
     public $valueInCelsius;
     public $valueInfahrenheit;

     public function KelvinToCelsius(int $valueInKelvin){
         $this->$valueInKelvin = $valueInKelvin;
         $answer = $valueInKelvin - 273.15. "C";
         return $answer;

     }
     public function celsiusToKelvin(int $valueInCelsius){
         $this->$valueInCelsius = $valueInCelsius;
         $answer = $valueInCelsius + 273.15."K";
         return $answer; 
     }
     public function fahrenheitTocelsius(int $valueInfahrenheit){
         $this->valueInfahrenheit = $valueInfahrenheit;
         $firstanswer = 5/9;
         $secondanswer = $valueInfahrenheit-32;
         $answer = $secondanswer * $firstanswer. "C";
         return $answer;
     }
     public function celsiusToFahrenheit(int $valueInCelsius){
         $this->$valueInCelsius = $valueInCelsius;
         $firstanswer = 1.8 * $valueInCelsius;
         $answer2 = $firstanswer + 32;
         $answer = $answer2 . "F";
         return $answer;
     }
     public function kelvinToFahrenheit(int $valueInKelvin){
         $this->$valueInKelvin = $valueInKelvin;
         $firstanswer = $valueInKelvin - 273.15;
         $secondvalue = 9/5;
         $answer2 = $firstanswer * $secondvalue + 32;
         $answer = $answer2. "F";
         return $answer;
     }
     public function fahrenheitToKelvin(int $valueInfahrenheit){
         $this->$valueInfahrenheit = $valueInfahrenheit;
         $firstvalue = $valueInfahrenheit - 32;
         $secondvalue = 5/9;
         $answer2 = $firstvalue * $secondvalue + 273.15;
         $answer = $answer2. "K";
         return $answer; 
     }
 }