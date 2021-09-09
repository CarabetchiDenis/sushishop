<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
</head>
<body>
    <h1> Thanks </h1>

    <?php
    //verif
      if (isset($_POST['submit'])) {
        /*if (isset($_POST['C']) && isset($_POST['R']) && isset($_POST['E'])&& 
        isset($_POST['P']) && isset($_POST['V'] && isset($_POST['A'])){*/

        // creer variable
      //  $C=htmlspecialchars($_POST['C']);
      //  $R=htmlspecialchars($_POST['R']);
      //  $E=htmlspecialchars($_POST['E']);
      //  $P=htmlspecialchars($_POST['P']);
      //  $V=htmlspecialchars($_POST['V']);
      //  $A=htmlspecialchars($_POST['A']);
      //  $txt = "SUSHISHOP";



        //echo " your receipt today : <br> <br>   
        //1) : " . $C . ",
        //2) : " . $R . ",
        //3) : " . $E . ",
        //4) : " . $E . ",
        //5) : " . $E . ",
       // 6) : " . $E . ",

         
        echo  "Total : <br>";
        echo  "TPS :  <br>";
        echo  "TVQ : <br>";
        echo  " Total :  ";
        echo  "Notre Slogan 'I love $txt'<br><br>";
          
       //}
    }   
    
    
    ?>
    
</body>
</html>