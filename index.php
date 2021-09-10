<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SushiShop</title>
</head>
    <body>
      <!-- sushi delivery from-->
        <form action="delivery.php" method="post"> 
         
             <h1 class="titre">Welcome to SushiShop </h1>
             <h2>Choisissez votre command</h2>
             <h3> Attention paquet de 0 morceaux par default </h3> <br>

              <!-- Choice option -->  
                                          
               <label for="California">***California Roll***</label>
               <name="California" id="California"> 
               <input type="number" name="California"  min="0" value="0"><< Select here = "coût  5$/morc"<br><br><br>
               
                <label for="Rainbow">***Rainbow Roll***</label>
                <name="Rainbow" id="Rainbow">
                <input type="number" name="Rainbow"  min="0" value="0"><< Select here = "coût  8$/morc"<br><br><br>
             
                <label for="Est">***Est Roll***</label>
                <name="Est" id="Est">
                <input type="number" name="Est"  min="0" value="0"><< Select here = "coût  3$/morc"<br><br><br>
             
                <label for="Philadelphia">***Philadelphia Roll***</label>
                <name="Philadelphia" id="Philadelphia">
                <input type="number" name="Philadelphia" " min="0" value="0"><< Select here = "coût  4$/morc"<br><br><br>
             
                <label for="Valcano">***Valcano Roll***</label>
                <name="Valcano" id="Valcano">
                <input type="number" name="Valcano"  min="0" value="0"><< Select here = "coût  9$/morc"<br><br><br>
             
                <label for="Avocado">***Avocado Roll***</label>
                <name="Avocado" id="Avocado">
                <input type="number" name="Avocado"  min="0" value="0"><< Select here = "coût  10$/morc"<br><br><br>
                <br> <br> 
        
                <!--Submit button-->
                <input type="submit" value="Submit order" name="submit">
            
        </form>

    </body>
</html>