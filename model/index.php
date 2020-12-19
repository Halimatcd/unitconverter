<?php
include "classes/degree.php";
include "classes/KtoC.php";

$new = new KGandGRAM;
echo $new->kGtoGRAM(50);
echo $new->GRAMtoKG(6000);
echo $new->MGtoG(5000);

$new2 = new KtoC;
echo $new2->KelvinToCelsius(379);
echo $new2->celsiusToKelvin(62);
echo $new2->fahrenheitTocelsius(76);
echo $new2->celsiusToFahrenheit(68);
echo $new2->kelvinToFahrenheit(345);
echo $new2->fahrenheitToKelvin(243);