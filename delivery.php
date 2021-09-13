<?php
 session_start();
 sleep(3);

 //1. INPUT
 //2. VALIDATE INPUT
 //3. BUSINESS LOGIC (tvq tps)
 //4. OUTPUT

   echo "Thanks<br><br>";
   echo "Votre commande est:<br><br><br>";


   ////////////////////////
   ////Constants
   ///////////////////////

   $tps = 0.05;
   $tvq = 0.10;

   $price_california = 5;
   $price_rainbow = 8;
   $price_est = 3;
   $price_philadelphia = 4;
   $price_valcano = 9;
   $price_avocado = 10;
   $price_tp = 0.05;
   $price_tq = 0.1;

   $txt = "SUSHISHOP";


   ////////////////////
   ///end constants
   ///////////////////


   //getting the input

   $QuantityCal =  0;
   $QuantityRai =  0;
   $QuantityEst =  0;
   $QuantityPhil = 0;
   $QuantityVal =  0;
   $QuantityAvo =  0;

   //input validation verif
   $errors = Array();

 
   if (isset($_POST['submit'])){
       if (isset($_POST['California'])) {
            $QuantityCal = htmlspecialchars($_POST['California']);
            if (is_numeric($QuantityCal)){
               if ($QuantityCal < 0){
                   $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
               $errors[] = "Quantity of California must be a number...";
            }
        }else {
           $errors [] = "You did not submit the quantity of California...";
        }
        if (isset($_POST['Rainbow'])) {
            $QuantityRai = htmlspecialchars($_POST['Rainbow']);
            if (is_numeric($QuantityRai)){
                if ($QuantityRai < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Rainbow must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Rainbow...";
        }
        if (isset($_POST['Est'])) {
            $QuantityEst = htmlspecialchars($_POST['Est']);
            if (is_numeric($QuantityEst)) {
                if ($QuantityEst < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Est must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Est...";
        } 
        if (isset($_POST['Philadelphia'])) {
            $QuantityPhil = htmlspecialchars($_POST['Philadelphia']);
            if (is_numeric($QuantityPhil)) {
                if ($QuantityPhil < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else{
                $errors[] = "Quantity of Philadelphia must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Philadelphia...";
        }
        if (isset($_POST['Valcano'])) {
            $QuantityVal = htmlspecialchars($_POST['Valcano']);
            if (is_numeric($QuantityVal)) {
                if ($QuantityVal < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Valcano must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Valcano...";
        }
        if (isset($_POST['Avocado'])) {
            $QuantityAvo = htmlspecialchars($_POST['Avocado']);
            if (is_numeric($QuantityAvo)) {
                if ($QuantityAvo < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
               $errors[] = "Quantity ofAvocado must be a number...";
            }
        } else {
        $errors [] = "LPLYou did not submit the quantity of Avocado...";
     } 
    } else {
        $errors[] = "Error, you did not submit the form...";
    }
    //output
        
    $number_or_errors = count($errors);
    if ($number_or_errors > 0) {
        //show the errors
        for ($i = 0; $i < $number_or_errors; $i++) {
            echo $errors[$i] . "<br>";
        }
    } else {
        //show detailed receipt
        echo "California  Roll     :"  . $QuantityCal .   "...ça coût:" .$price_california    *  $QuantityCal . "$<br>";
        echo "Rainbow  Roll        :"  . $QuantityRai .   "...ça coût:" .$price_rainbow       *  $QuantityRai . "$<br>";
        echo "Est  Roll            :"  . $QuantityEst .   "...ça coût:" .$price_est           *  $QuantityEst . "$<br>";
        echo "Philadelphia  Roll   :"  . $QuantityPhil .  "..ça coût:" .$price_philadelphia  *  $QuantityPhil . "$<br>";
        echo "Valcano  Roll        :"  . $QuantityVal.    "...ça coût:" .$price_valcano       *  $QuantityVal .  "$<br>";
        echo "Avocado  Roll        :"  . $QuantityAvo .   "...ça coût:" .$price_avocado       *  $QuantityAvo .  "$<br>";

        //calculate TPS && TVQ
        $sub_total = 0;
        $sub_total += $price_california * $QuantityCal + $price_rainbow * $QuantityRai + $price_est * $QuantityEst + $price_philadelphia * $QuantityPhil + $price_valcano * $QuantityVal + $price_avocado * $QuantityAvo;

        $total = $sub_total + $sub_total * $tps;
        $pay_tps = $sub_total * $tps;
        $pay_tvq = $total * $tvq;
        $total += $total * $tvq;
        echo "<br><br>Your subtotal is: " . $sub_total . "$<br><br>";
        echo "TPS is: " . $pay_tps . "$<br>";
        echo "TVQ is: " . $pay_tvq . "$<br><br>";
        echo "________________________" . "<br><br>";
        echo "Total is: " . $total . "$<br><br>";
    
       echo "<a href='index.php'>BACK HOME</a><br><br><br>"; 
       echo "Today is " . date("Y-m-d"). "<br>";
       echo "Today is " . date("l");

    }
 
        
?>