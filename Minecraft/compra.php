<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmacion de Compra</title>
</head>
<body>
    <div class="contenedor">
        <header>
        <div class="imalogo">   
            <img src="logo.jpg" class="logo">
        </div>   
        <div class="nc">    
            <h1>Ventas de Cositas de Minecraft</h1>
        </div>
        </header>
  

    <section>
        <form action="pago.php" method="post" ecntype="multipart/form-data">
   <div class="precio">
    <?php
        $total1=0;
        $total2=0;
        $total3=0;
        $total4=0;
        $total5=0;
        $total6=0;
        if(isset($_POST['prod1'])){
            
            $precio=$_POST['prod1'];
            $cant=$_POST['cant1'];
            $total1=$precio*$cant;

            echo"Compró $cant de Casita Arbolistica a $precio cada uno, total $total1 <br>";
        }
       
        if(isset($_POST['prod2'])){
            
            $precio=$_POST['prod2'];
            $cant=$_POST['cant2'];
            $total2=$precio*$cant;

            echo"Compró $cant de Casita Medieval a $precio cada uno, total $total2 <br>";
        }

        if(isset($_POST['prod3'])){
            
            $precio=$_POST['prod3'];
            $cant=$_POST['cant3'];
            $total3=$precio*$cant;

            echo"Compró $cant de Casita Granja a $precio cada uno, total $total3 <br>";
        }

        if(isset($_POST['prod4'])){
            
            $precio=$_POST['prod4'];
            $cant=$_POST['cant4'];
            $total4=$precio*$cant;

            echo"Compró $cant de Castillo a $precio cada uno, total $total4 <br>";
        }

        if(isset($_POST['prod5'])){
            
            $precio=$_POST['prod5'];
            $cant=$_POST['cant5'];
            $total6=$precio*$cant;

            echo"Compró $cant de Casita Biem Pro a $precio cada uno, total $total6 <br>";
        }


        if(isset($_POST['prod6'])){
            
            $precio=$_POST['prod6'];
            $cant=$_POST['cant6'];
            $total6=$precio*$cant;

            echo"Compró $cant de Casita del Bosque a $precio cada uno, total $total6 <br>";
        }

        $totalFinal=$total1+$total2+$total3+$total4+$total5+$total6;

        echo"<br> Total a pagar $totalFinal <br><br>";
    ?>
  </div>
  <div class="precio">
      <p>
        ¿Con qué medio de pago desea abonar?:<br/>
        <input type="radio" name="tarjeta" value="visa" id="visa"/><label for="visa">Visa</label><br/>
        <input type="radio" name="tarjeta" value="visa" id="visa"/><label for="visa">Mastercard</label><br/>
        


      </p>
  </div>
  
    
        <div class="send">
            <input type="submit" name="enviar" value="EMVIAR PAGO">
        </div>
    </form>
    </section>
  </div>

</body>
</html>