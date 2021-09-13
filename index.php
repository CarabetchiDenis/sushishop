<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SushiShop</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
</head>
    <body>
      <!-- sushi delivery from-->
        <form action="delivery.php" method="post"  class="formulaire"> 
         
             <h1 class="titre">Welcome to SushiShop </h1>
             <h2>Choisissez votre command</h2>
             <h3> Attention paquet de 0 morceaux par default </h3> <br>

              <!-- Choice option -->  
                                          
               <label for="California">***California Roll***</label>
               <name="California" id="California"> 
               <input type="number" name="California" id="num1"  min="0" value="0"><< Select here = "coût  5$/morc"<br><br><br>
               
                <label for="Rainbow">***Rainbow Roll***</label>
                <name="Rainbow" id="Rainbow">
                <input type="number" name="Rainbow" id="num2" min="0" value="0"><< Select here = "coût  8$/morc"<br><br><br>
             
                <label for="Est">***Est Roll***</label>
                <name="Est" id="Est">
                <input type="number" name="Est" id="num3" min="0" value="0"><< Select here = "coût  3$/morc"<br><br><br>
             
                <label for="Philadelphia">***Philadelphia Roll***</label>
                <name="Philadelphia" id="Philadelphia">
                <input type="number" name="Philadelphia" id="num4" min="0" value="0"><< Select here = "coût  4$/morc"<br><br><br>
             
                <label for="Valcano">***Valcano Roll***</label>
                <name="Valcano" id="Valcano">
                <input type="number" name="Valcano" id="num5" min="0" value="0"><< Select here = "coût  9$/morc"<br><br><br>
             
                <label for="Avocado">***Avocado Roll***</label>
                <name="Avocado" id="Avocado">
                <input type="number" name="Avocado" id="num6" min="0" value="0"><< Select here = "coût  10$/morc"<br><br><br>
                <br> <br> 
        
                <!--Submit button-->
                <input type="submit" value="Submit order" name="submit">
                <input type="submit" id="prev" value="preview" name="preview">

                <div class="afficher"> </div>
                <p>Output: <span id="txtHint"></span></p>
                <h2 id="output"><h2>
                <img src="loader.gif" id="loader" style="display: none;">
            
        </form>


        <script type="text/javascript">
          $(document).ready(function(){
          $('#prev').click(function(){
           $.ajax({
           type:'POST',
           url:'delivery.php',
           data:{
           num1:$('#num1').val(),
           num2:$('#num2').val(),
           num3:$('#num3').val(),
           num4:$('#num4').val(),
           num5:$('#num5').val(),
           num6:$('#num6').val(),
         },
          beforeSend:function(){
          $("#loader").show();
          $("#output").hide();
        },
        success:function(data){
          $('#output').html(data);
          $("#loader").hide();
          $("#output").show(); 
        }
      });
    });
  });
</script>
     
    </body>
</html>