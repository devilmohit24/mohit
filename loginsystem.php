-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
        fieldset{
            background-color:skyblue;
        }
        </style>
</head>
<body>
<form action="" method="post">
 <fieldset>Login / Signup</fieldset>
        Enter Username : 
        <input type="text" name="uname"><br>
        Password : 
        <input type="password" name="pword"><br>
        <input type="submit" name="log" value="Login">
        
        </form>
    <?php 
 $user_name='ryadavrohit26';
 $pass_word='@rohit32';
 if(isset($_POST['log'])){
     $name=$_POST['uname'];
     $pass=$_POST['pword'];
         if($name == $user_name && $pass_word == $pass){
         echo"login successfull";
     }
    else{
     echo"Invalid Credentials";
    }
 
 }
    ?>
     
</body>
</html>
