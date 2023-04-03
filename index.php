<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $sum=10;
    echo $sum;
    ?>
    <?php
    $content="Hello,This is <b> news </b> ";
    echo $content;

    $user="admin";
    if($user=="admin"){
        echo "you are admin";
    }
    else{
        echo " you are not admin";
    }
    for($i=0;$i<5;$i++){
        echo "<div class='x'>Hello </div>";
    }
    ?>
    <?php $name="kiran";
    if($name=="admin"){
        ?>
    
    <div class="auth"> you are </div>
    <?php
    }
    ?>


</body>
</html>