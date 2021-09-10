<?php
 session_start();

 //1. INPUT
 //2. VALIDATE INPUT
 //3. BUSINESS LOGIC (tvq tps)
 //4. OUTPUT
   echo "Thanks<br><br>";
   echo "Votre commande est:<br><br><br>";


 //verif
    if (isset($_POST['California'])) {
    }
    if(isset($_POST['Rainbow'])) {
    }    
    if(isset($_POST['Est'])) {
    } 
    if(isset($_POST['Philadelphia'])) {
    } 
    if(isset($_POST['Valcano'])) {
    } 
    if(isset($_POST['Avocado'])) {
    } 
     
    
    // creer variable
      $California = $_POST['California'];
      $Rainbow = $_POST['Rainbow'];
      $Est = $_POST['Est'];
      $Philadelphia = $_POST['Philadelphia'];
      $Valcano = $_POST['Valcano'];
      $Avocado = $_POST['Avocado'];
      $txt = "SUSHISHOP";
      $QuantityCal = $_POST['California'];
      $QuantityRai = $_POST['Rainbow'];
      $QuantityEst = $_POST['Est'];
      $QuantityPhil = $_POST['Philadelphia'];
      $QuantityVal = $_POST['Valcano'];
      $QuantityAvo = $_POST['Avocado'];
      $C = 5;
      $R = 8;
      $E = 3;
      $P = 4;
      $V = 9;
      $A = 10;
      $TP = 0.05;
      $TQ = 0.1;

    // Calcul quantity  
      $TotalCalifornia = $California *  $C;
      $TotalRainbow = $Rainbow * $R;
      $TotalEst = $Est * $E;
      $TotalPhiladelphia = $Philadelphia * $P;
      $TotalValcano = $Valcano * $V;
      $TotalAvocado = $Avocado * $A;

    //Calcul

      $SousTotal = $TotalCalifornia + $TotalRainbow + $TotalEst + $TotalPhiladelphia + $TotalValcano + $TotalAvocado;
      $TPS = $SousTotal * $TP;
      $TPQ = $SousTotal * $TQ;
      $Total = $SousTotal + $TPS + $TPQ;


        echo " Sushi California Roll =  $QuantityCal  morceaux,  ça coût: $TotalCalifornia $ <br>
               Sushi Rainbow Roll   = $QuantityRai  morceaux, ça coût:  $TotalRainbow $ <br>
               Sushi Est Roll = $QuantityEst  morceaux, ça coût:  $TotalEst $ <br>
               Sushi Philadelphia Roll = $QuantityPhil  morceaux, ça coût:  $TotalPhiladelphia $ <br>
               Sushi Valcano Roll =  $QuantityVal  morceaux, ça coût:  $TotalValcano $ <br>
               Sushi Avocado Roll  = $QuantityAvo  morceaux, ça coût:  $TotalAvocado $ <br><br>";

       
         
        echo  "Sous-Total : $SousTotal  $ <br>";
        echo  "TPS : $TPS  $  <br> ";
        echo  "TVQ : $TPQ  $ <br>";
        echo  " Total : $Total  $ <br><br> ";
        echo  "Notre Slogan 'I love $txt'<br><br>";

      

       echo "<a href='index.php'>BACK HOME</a>"; 
        
?>
    
