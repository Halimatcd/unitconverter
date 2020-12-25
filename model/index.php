<?php
include "../model/distance.php";
include "../model/KGandGram.php";
include "../model/KtoC.php";

    $answer = "invalid";
    $mssg = "Nice!";
    $from = "kilogram1b";
    $to = "gram2a";
if (isset($_POST["submit"])){
    $value = $_POST["value"];
    $from = $_POST["from"];
    $to = $_POST["to"];
}
if (empty($value)){
     $mssg = "Oops! enter a value";
     $answer = 0;
     $value = 0;
}
if ($from == "selectb" && $to == "selecta"){
    $answer = 0;
    $value = 0;
    $mssg = "select a valid option";
}
if ($from == "kilogram1b" && $to == "gram2a"){
    $new = new KGandGram;
    $answer = $new->KGtoGram($value); 
}else if ($from == "gram2b" && $to == "kilogram1a"){
    $new = new KGandGram;
    $answer = $new->GramTOKG($value);
}else if ($from == "mg8b" && $to == "gram2a" ){
    $new = new KGandGram;
    $answer = $new->MGtoG($value);
}else if ($from =="gram2b" && $to == "mg8a"){
    $new = new KGandGram;
    $answer = $new->GramtoMG($value);
}else if ($from == "cm3b" && $to == "m4a"){
    $new = new distance;
    $answer = $new->CMtoM($value);
}else if ($from == "m4b" && $to == "cm3a"){
    $new = new distance;
    $answer = $new->MtoCM($value);
}else if ($from == "fahrenheit5b" && $to == "kelvin7a"){
    $new = new ktoc;
    $answer = $new->fahrenheitToKelvin($value); 
}else if ($from == "kelvin7b" && $to == "fahrenheit5a"){
    $new = new KtoC;
    $answer = $new->kelvinToFahrenheit($value);
}else if ($from == "celsius6b" && $to == "kelvin7a"){
    $new = new KtoC;
    $answer = $new->celsiusToKelvin($value);
}else if ($from == "kelvin7b" && $to == "celsius6a"){
    $new = new KtoC;
    $answer = $new->KelvinToCelsius($value);
}else if ($from == "fahrenheit5b" && $to == "celsius6a"){
    $new = new KtoC;
    $answer = $new->fahrenheitTocelsius($value);
} else if ($from == "celsius6b"&& $to == "fahrenheit5a"){
    $new = new KtoC;
    $answer = $new->celsiusToFahrenheit($value);
}else if ($from == "kilogram1b" && $to == "mg8a"){
    $new = new KGandGram;
    $answer = $new->KGtoMG($value);
}else if ($from == "mg8b" && $to == "kilogram1a"){
    $new = new KGandGram;
    $answer = $new->MGtoKG($value);
}else if ($from == "kilogram1b" && $to == "kilogram1a"){
    $mssg = "invalid select option";
    $answer = $value . "kg";
}else if ($from == "gram2b" && $to == "gram2a"){
    $mssg = "invalid select option";
    $answer = $value . "g";
}else if ($from == "cm3b" && $to == "cm3a"){
    $mssg = "invalid select option";
    $answer = $value . "cm";
}else if ($from == "m4b" && $to == "m4a"){
    $mssg = "invalid select option";
    $answer = $value . "m";
}else if ($from == "fahrenheit5b" && $to == "fahrenheit5a"){
    $mssg = "invalid select option";
    $answer = $value . "f";
}else if ($from == "celsius6b" && $to == "celsius6a"){
    $mssg = "invalid select option";
    $answer = $value . "c";
}else if ($from == "kelvin7b" && $to == "kelvin7a"){
    $mssg = "invalid select option";
    $answer = $value . "k";
}else if ($from == "mg8b" && $to == "mg8a"){
    $mssg = "invalid select option";
    $answer = $value . "mg";
}else{
    $mssg = " Opps! enter a value";
}
