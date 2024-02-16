-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Program</title>
</head>
<body>
    
    <form method="post" action="">
    <fieldset>Discount Program</fieldset>
        Total Amount: 
        <input type="number" name="product"><br>
        <?php
$amount='';
$discount='';
if(isset($_POST['sub'])){
 $price=$_POST['product'];
 if($price>5000){
    $amount=$price-($price*10/100);
$discount='10%'; }
 else{
    $amount=$price;
    $discount='No discount applicable';
 }
 
};
?>      Discount:
        <input type="text" name="disc" disabled value="<?php echo $discount 
?>"><br>
        Payable Amount: 
        <input type="number" name="amount" disabled value="<?php echo $amount 
?>"><br>
        <input type="submit" name="sub">

    </form>
  
</body>
</html>
