<?php
include "../model/index.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href= "index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>unit conveter</title>
</head>
<body>
  
  <!-- As a heading -->
  <nav  class="navbar navbar-light bg-light" >
    <span id= "cool" class="navbar-brand mb-0 h1">My Unit Converter</span>
  </nav>
    <div  class="jumbotron">
        <h1 class="display-4">Unit converter</h1>
        <p class="lead"> This site helps you convert values from one unit to another</p>
        <hr class="my-4"
        <p>Eg kelvin to celsius, fahrenheit to celsius, celsius to degree, Kg to g,  to Kg and so on</p>
        
    </div>
    <div  class="alert alert-danger" style = "width:200px; color:color:cornflowerblue; background-color:red; " role="alert">
        <?=$mssg;?>
    </div>
    <div>
       <form method ="post" action=<?php echo ($_SERVER["PHP_SELF"]);?> id ="leemah" >
          FROM: <select name = "from" class="btn btn-primary btn-lg" style = "background-color:cornflowerblue; ">
                    <option value = "selectb">select option </option>
                    <option value = "kilogram1b">kilogram </option>
                    <option value = "gram2b">gram</option>
                    <option value = "cm3b">cm </option>
                    <option value = "m4b">m </option>
                    <option value = "fahrenheit5b">fahrenheit </option>
                    <option value = "celsius6b">celsius </option>
                    <option value = "kelvin7b">kelvin </option>
                    <option value = "mg8b">mg </option>
                </select>
        TO:    <select name = "to" class="btn btn-primary btn-lg"style = "background-color:cornflowerblue; " >
                    <option value = "selecta">select option </option>
                    <option value="kilogram1a"> kilogram </option>
                    <option value="gram2a"> gram</option>
                    <option value="cm3a"> cm </option>
                    <option value="m4a"> m </option>
                    <option value="fahrenheit5a"> fahrenheit </option>
                    <option value="celsius6a"> celsius </option>
                    <option value="kelvin7a"> kelvin </option>
                    <option value = "mg8a"> mg </option>
                </select> </br>
            <label for ="VALUE">ENTER VALUE: </label> <br>
            <input type="text" id= "fresh" name= "value" style = "width:200px;" > <br>
            <label for ="ANSWER">ANSWER: </label> <br>
            <input type="text" id= "fresh" name= "answer" style = "width:200px;"value =<?=$answer;?>> <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>