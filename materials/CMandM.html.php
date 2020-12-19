<?php
include "../classes/dist.php";
    $CM =61;
    $M = 23;
if (isset($_POST["submit"])){
$CM = $_POST["centimeter"];
$M = $_POST["meter"];
echo $CM;
}else {
    echo "you must enter a value";
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../view/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Distance</title>
</head>
<body>
<div style= " width:400px; margin-right:auto; margin-left:auto;margin-top:10%; border:1px solid #000; background-color: #859aa8;  ">
<form method ="post" action= <?php echo ($_SERVER["PHP_SELF"]); ?> id ="leemah" >
    <label for ="centimeter">CM: </label> <br>
    <input type="text" id= "fname" name= "centimeter" > <br>
    <label for ="meter">M: </label> <br>
    <input type="text" id="pname" name="meter" ><br>
    <?php if (empty($CM)){
    $new = new distance;
    $CmAnswer= $new->MtoCM($M);?>
    <label for ="answer">Answer: </label> <br>
    <input type="text" id="pname" name="Answer" value= <?=$CmAnswer; ?>><br>
    <?php }else if (empty($CM)){
    $new = new distance;
    $MAnswer= $new->CMtoM($CM);?>
    <label for ="answer">Answer: </label> <br>
    <input type="text" id="pname" name="Answer" value= <?=$MAnswer; ?>><br>
    <?php }
    ?>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary btn-lg" href="../view/distance.html.php" role="button">Back</a>
</form>
</div>
</body>
</html>