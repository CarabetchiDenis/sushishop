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
        echo $_POST['California'];
    }
    echo "<br><br>";
    if(isset($_POST['Rainbow'])) {
        echo $_POST['Rainbow'];
    }
    echo "<br><br>";
    if(isset($_POST['Est'])) {
        echo $_POST['Est'];
    } 
    echo "<br><br>";
    if(isset($_POST['Philadelphia'])) {
        echo $_POST['Philadelphia'];
    } 
    echo "<br><br>";
    if(isset($_POST['Valcano'])) {
        echo $_POST['Valcano'];
    } 
    echo "<br><br>";
    if(isset($_POST['Avocado'])) {
        echo $_POST['Avocado'];
    } 
    echo "<br><br>";  
    
    // creer variable
      $California = $_POST['California'];
      $Rainbow = $_POST['Rainbow'];
      $Est = $_POST['Est'];
      $Philadelphia = $_POST['Philadelphia'];
      $Valcano = $_POST['Valcano'];
      $Avocado = $_POST['Avocado'];
      $txt = "SUSHISHOP";
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


        echo " Sushi California Roll .$TotalCalifornia., <br>
               Sushi Rainbow Roll  .$TotalRainbow. , <br>
               Sushi Est Roll .$TotalEst. , <br>
               Sushi Philadelphia Roll .$TotalPhiladelphia. , <br>
               Sushi Valcano Roll .$TotalValcano. , <br>
               Sushi Avocado Roll .$TotalAvocado. ,<br><br>";

       
         
        echo  "Sous-Total : .$SousTotal. <br>";
        echo  "TPS 5% : .$TPS.  <br>";
        echo  "TVQ 10% : .$TPQ. <br>";
        echo  " Total : .$Total. <br><br> ";
        echo  "Notre Slogan 'I love $txt'<br><br>";

      

       echo "<a href='index.php'>BACK HOME</a>"; 
        
?>
    
