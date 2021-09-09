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
         <h5> Attention paquet de 6 morceaux </h5> <br>

         <!-- Choice option -->
         
         
         <!--row 1-->
         <tr>
             <td><input type="radio" name="C" value="1">California Roll   == "coût 5$"</td><br><br>
             <td><input type="radio" name="R" value="2"> Rainbow Roll   ==  "coût 8$"</td><br><br>
             <td><input type="radio" name=" E" value="3"> Est Roll  ==  "coût 18$"  </td><br><br>
         </tr>  <br><br><br>
         
         <!--row 2-->
         <tr>
             <td><input type="radio" name="P" value="4">Philadelphia Roll    ==  "coût 28$"</td><br><br>
             <td><input type="radio" name="V" value="5"> Valcano Roll    ==  "coût 15$"</td><br><br>
             <td><input type="radio" name="A" value="6"> Avocado Roll    ==  "coût 10$"</td><br><br>
         </tr> <br> <br> <br>
        
         <!--Submit button-->

            
          <input type="submit" value="Submit order" name="submit">
        </div>
    </form>

</body>
</html>