<?php
 session_start();
 

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

   $quantity_cali =  0;
   $quantity_rain =  0;
   $quantity_est =  0;
   $quantity_phil = 0;
   $quantity_valc =  0;
   $quantity_avoc =  0;

   //input validation verif
   $errors = Array();
   sleep(3);
  
 
   if (isset($_POST['submit'])){
       if (isset($_POST['California'])) {
            $quantity_cali = htmlspecialchars($_POST['California']);
            if (is_numeric($quantity_cali)){
               if ($quantity_cali < 0){
                   $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
               $errors[] = "Quantity of California must be a number...";
            }
        }else {
           $errors [] = "You did not submit the quantity of California...";
        }
        if (isset($_POST['Rainbow'])) {
            $quantity_rain = htmlspecialchars($_POST['Rainbow']);
            if (is_numeric($quantity_rain)){
                if ($quantity_rain < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Rainbow must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Rainbow...";
        }
        if (isset($_POST['Est'])) {
            $quantity_est = htmlspecialchars($_POST['Est']);
            if (is_numeric( $quantity_est)) {
                if ( $quantity_est < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Est must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Est...";
        } 
        if (isset($_POST['Philadelphia'])) {
            $quantity_phil = htmlspecialchars($_POST['Philadelphia']);
            if (is_numeric($quantity_phil)) {
                if ($quantity_phil < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else{
                $errors[] = "Quantity of Philadelphia must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Philadelphia...";
        }
        if (isset($_POST['Valcano'])) {
            $quantity_valc = htmlspecialchars($_POST['Valcano']);
            if (is_numeric( $quantity_valc)) {
                if ( $quantity_valc < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
                $errors[] = "Quantity of Valcano must be a number...";
            }
        }else {
            $errors [] = "You did not submit the quantity of Valcano...";
        }
        if (isset($_POST['Avocado'])) {
            $quantity_avoc = htmlspecialchars($_POST['Avocado']);
            if (is_numeric($quantity_avoc)) {
                if ($quantity_avoc < 0){
                    $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
                }
            }else {
               $errors[] = "Quantity of Avocado must be a number...";
            }
        } else {
        $errors [] = "You did not submit the quantity of Avocado...";
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
        echo "California  Roll     :"  . $quantity_cali .    "...ça coût:" .$price_california     *  $quantity_cali . "$<br>";
        echo "Rainbow  Roll        :"  . $quantity_rain .    "...ça coût:" .$price_rainbow        *  $quantity_rain . "$<br>";
        echo "Est  Roll            :"  .  $quantity_est .    "...ça coût:" .$price_est            *   $quantity_est . "$<br>";
        echo "Philadelphia  Roll   :"  . $quantity_phil .    "..ça coût:" .$price_philadelphia    *  $quantity_phil . "$<br>";
        echo "Valcano  Roll        :"  .  $quantity_valc.    "...ça coût:" .$price_valcano        *   $quantity_valc .  "$<br>";
        echo "Avocado  Roll        :"  . $quantity_avoc .    "...ça coût:" .$price_avocado        *  $quantity_avoc.  "$<br>";

        //calculate TPS && TVQ
        $sub_total = 0;
        $sub_total += $price_california * $quantity_cali + $price_rainbow * $quantity_rain + $price_est *  $quantity_est + $price_philadelphia * $quantity_phil + $price_valcano *  $quantity_valc + $price_avocado * $quantity_avoc;

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