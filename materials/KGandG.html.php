<?php
include "../classes/KGandG.php";
    $kilogram = 43;
    $gram = 32;
if (isset($_GET["submit"])){
    $kilogram = $_GET["kilogram"];
    $gram = $_GET["gram"];
}
    if (empty($kilogram && $gram)){
        echo "enter a value";
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../view/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>MASS</title>
</head>
<body>
<div style= " width:400px; margin-right:auto; margin-left:auto;margin-top:10%; border:1px solid #000; background-color: #859aa8;  ">
<form method ="get" action= <?php echo ($_SERVER["PHP_SELF"]); ?> id ="leemah" >
    <label for ="kilogram">Kilogram: </label> <br>
    <input type="text" id= "fname" name= "kilogram" ><br>
    <label for ="gram">Gram: </label> <br>
    <input type="text" id="name" name="gram" ><br>
    <?php if (empty($gram)){
        $new = new KGandGram;
        $gramAnswer = $new->KGtoGram($kilogram);
    ?>
    <label for ="answer">Answer: </label><br>
    <input type="text" id="pname" name="Answer" value=<?=$gramAnswer;?>><br>
    <?Php } 
    ?>
    <?php if (empty($kilogram)){;
         $new = new KGandGram;
         $kilogramAnswer = $new->GramTOKG($gram);
    ?>
    <label for ="answer">Answer: </label> <br>
    <input type="text" id="pname" name="Answer" value=<?=$kilogramAnswer;?>><br>
    <?php }
    ?>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary btn-lg" href="../view/weight.html.php" role="button">Back</a>
</form>
</div>
</body>
</html>