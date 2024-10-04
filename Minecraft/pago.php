<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <title>Pago</title>
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
  
        
        <div class="confirmacion">
        <h3>¿Desea confirmar la siguiente compra?</h3><br>
        <form action="gracias.php" method="post" ecntype="multipart/form-data">
            <label for="cre">Ingrese su numero de tarjeta</label>
            <input type="text" name="cre"><br><br>
        </form>
        <form action="pagartarjeta.php" method="post" ecntype="multipart/form-data">
            <label for="cre">Ingrese fecha de vencimiento</label>
            <input type="text" name="cre"><br><br>
        </form>
        <form action="pagartarjeta.php" method="post" ecntype="multipart/form-data">
            <label for="cre">Ingrese codigo de seguridad</label>
            <input type="text" name="cre"><br><br>
        </form>
        
    </div>
    <form action="findecompra.php" method="post" ecntype="multipart/form-data">
           <div class="send">
             <input type="submit" name="enviar" value="COMFiRMAR COMPRA">
           </div>
    </form>


</body>
</html>