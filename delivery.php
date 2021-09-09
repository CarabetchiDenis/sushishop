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
        $txt = "SUSHISHOP";
          

         
        echo  "Sous-Total : <br>";
        echo  "TPS :  <br>";
        echo  "TVQ : <br>";
        echo  " Total : <br><br> ";
        echo  "Notre Slogan 'I love $txt'<br><br>";
        
?>
    
