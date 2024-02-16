-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Recommedation</title>
    <style>
        fieldset{background-color:skyblue;}
        </style>
</head>
<body>
    <form method="post" action="">
        <fieldset> Weather Recommedation Program</fieldset>
        Enter tempreture (in celcius) : 
        <input type="number" name="temp"><br>
        <?php 
    $weather="";
if(isset($_POST['temp_rec'])){
    $temprature=$_POST['temp'];
    if($temprature>25){
        $weather="It's sunny day";
    }
    else{
        $weather="Consider taking an umbrella";
    }
}
    ?>
        Recommedation : 
        <input type="text" name="reccom" disabled value="<?php echo $weather ?>"><br>
        <input type="submit" name="temp_rec" value="Check">
    </form>
    
</body>
</html>
