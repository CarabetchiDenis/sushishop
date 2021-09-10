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
         
            <div class="form">
             <h3 class="titre">Welcome to SushiShop </h3>
             <h4>Choisissez votre command</h4>
             <h5> Attention paquet de 0 morceaux par default </h5> <br>

              <!-- Choice option -->         
                          
               <label for="California">***California Roll***</label>
               <name="California" id="California"> 
               <input type="number" name="California" id="California" min="0" value="0"><<< Select here == "coût  5$/morceaux"<br><br><br>
               
                <label for="Rainbow">***Rainbow Roll***</label>
                <name="Rainbow" id="Rainbow">
                <input type="number" name="Rainbow" id="Rainbow" min="0" value="0"><<< Select here == "coût  8$/morceaux"<br><br><br>
             
                <label for="Est">***Est Roll***</label>
                <name="Est" id="Est">
                <input type="number" name="Est" id="Est" min="0" value="0"><<< Select here == "coût  3$/morceaux"<br><br><br>
             
                <label for="Philadelphia">***Philadelphia Roll***</label>
                <name="Philadelphia" id="Philadelphia">
                <input type="number" name="Philadelphia" id="Philadelphia" min="0" value="0"><<< Select here == "coût  4$/morceaux"<br><br><br>
             
                <label for="Valcano">***Valcano Roll***</label>
                <name="Valcano" id="Valcano">
                <input type="number" name="Valcano" id="Valcano" min="0" value="0"><<< Select here == "coût  9$/morceaux"<br><br><br>
             
                <label for="Avocado">***Avocado Roll***</label>
                <name="Avocado" id="Avocado">
                <input type="number" name="Avocado" id="Avocado" min="0" value="0"><<< Select here == "coût  10$/morceaux"<br><br><br>
                <br> <br> <br>
        
                <!--Submit button-->
                <input type="submit" value="Submit order" name="submit">
            </div>
        </form>

    </body>
</html>