-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Type </title>
</head>
<body>
    <form action="" method="post">
        <fieldset>Select The User Type</fieldset><br>
        <input type="submit" name="basic" value="Basic User" ><br><br>
        <input type="submit" name="premium" value="Premium User"><br>
        <?php 
        if(isset($_POST['basic'])){
            echo "Hello Basic User";
        }
        elseif( isset($_POST['premium']))
            {echo"Hello Premium User";}
        else{echo "";}
        ?>
        
    </form>
</body>
</html>
