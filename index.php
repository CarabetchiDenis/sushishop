<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>SushiShop</title>
</head>
<body>
 <!-- <form action="delivery.php" method="post" id="result" class="formulaire"> -->
<h1>Welcome to SushiShop</h1>
<h2>Choisissez votre command</h2>
<div class="row">
    <div id="order_form" class="column">
        <!-- Choice option-->
        <label for="California">***California Roll**</label>        
        <input type="number" id="california" name="California"   min="0" value="0"><< here = "coût  5$/morc"<br><br><br>    

        <label for="Rainbow">****Rainbow Roll**</label>        
        <input type="number" id="rainbow" name="Rainbow"  min="0" value="0"><< here = "coût  8$/morc"<br><br><br>
        
        <label for="Est"> *********Est Roll**</label>        
        <input type="number" id="est" name="Est"  min="0" value="0"><< here = "coût  3$/morc"<br><br><br>
        
        <label for="Philadelphia">**Philadelphia Roll**</label>        
        <input type="number"id="philadelphia"  name="Philadelphia"  min="0" value="0"><< here = "coût  4$/morc"<br><br><br>
        
        <label for="Valcano">*****Valcano Roll**</label>        
        <input type="number"id="valcano"  name="Valcano"  min="0" value="0"><< here = "coût  9$/morc"<br><br><br>
        
        <label for="Avocado">****Avocado Roll**</label>        
        <input type="number" id="avocado" name="Avocado"  min="0" value="0"><< here = "coût  10$/morc"<br><br><br>
        <br> <br> 
        
       <!-- <input type="submit" value="Submit order" name="submit">-->
        <button onclick="get_receipt()">Preview</button>
    </div>

    <div id="receipt" class="column" style="background:#ec4343;">
     Order to get your receipt here...
    </div>
</div>
<!--</form>-->  
<script>
  function get_receipt() {

    var loader = '<div class="lds-hourglass"></div>';    
    document.getElementById("receipt").innerHTML = loader;

    var q_california = document.getElementById("california").value;
    var q_rainbow = document.getElementById("rainbow").value;
    var q_est = document.getElementById("est").value;
    var q_philadelphia = document.getElementById("philadelphia").value;
    var q_alcano = document.getElementById("valcano").value;
    var q_avocado = document.getElementById("avocado").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      document.getElementById("receipt").innerHTML = this.responseText;
      }
    };

   xhttp.open("POST", "delivery.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("submit=true&California=" + q_california + "&Rainbow=" + q_rainbow + "&Est=" + q_est + "&Philadelphia=" + q_philadelphia + "$Valcano" + q_alcano + "$Avocado" + q_avocado);
  }

</script>  

</body>
</html>