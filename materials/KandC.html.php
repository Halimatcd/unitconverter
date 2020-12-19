<?php
include "../classes/KtoC.php";
    $kelvin =61;
    $celsius = 23;
if (isset($_GET["submit"])){
$celsius = $_GET["celsius"];
$kelvin = $_GET["kelvin"];
}else{
echo "you must enter a value";
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../view/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Kelvin</title>
</head>
<body>
<div style= " width:400px; margin-right:auto; margin-left:auto;margin-top:10%; border:1px solid #000; background-color: #859aa8;  ">
<form method ="get" action= <?php echo ($_SERVER["PHP_SELF"]); ?> id ="leemah" >
    <label for ="celsius">celsius: </label> <br>
    <input type="text" id= "fname" name= "celsius" > <br>
    <label for ="fahrenheit">Kelvin: </label> <br>
    <input type="text" id="pname" name="kelvin" ><br>
    <?php if (empty($celsius)){
    $new = new KtoC;
    $celsiusAnswer= $new->KelvinToCelsius($kelvin);?>
    <label for ="answer">Answer: </label> <br>
    <input type="text" id="pname" name="Answer" value= <?=$celsiusAnswer; ?>><br>
    <?php }else if (empty($kelvin)){
    $new = new KtoC;
    $kelvinAnswer= $new->celsiusToKelvin($celsius);?>
    <label for ="answer">Answer: </label> <br>
    <input type="text" id="pname" name="Answer" value= <?=$kelvinAnswer; ?>><br>
    <?php }
    ?>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary btn-lg" href="../view/temperature.html.php" role="button">Back</a>
</form>
</div>
</body>
</html>