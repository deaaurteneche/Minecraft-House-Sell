<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tp.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decoracion</title>
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
            <form action="compra.php" method="post">
                <article>
                    <div class="casitas">
                        <div class="ima">
                            <img src="img1.jpg"><br><br>
                        </div>
                        <p>Diseño Cocina</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod1"> Seleccionar</label> 
                                <input type="checkbox" name="prod1" id="prod1" value="500"><br><br>
                                <label for="cant1"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant1" id="cant1"><br><br>
                            </div>
                            <div class="precio" id="prod1">
                                <p><strong>$500</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="casitas">
                        <div class="ima">
                            <img src="img.jpg"><br><br>
                        </div>
                        <p>Diseño Sala Encantamientos</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod2"> Seleccionar </label>
                                <input type="checkbox" name="prod2" id="prod2" value="300"><br><br>
                                <label for="cant2"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant2" id="cant2"><br><br>
                            </div>
                            <div class="precio">
                                <p><strong>$300</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="casitas">
                        <div class="ima">
                            <img src="img3.jpg"><br><br>
                        </div>
                            <p>Diseño Tunel</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod3"> Seleccionar </label>
                                <input type="checkbox" name="prod3" id="prod3" value="200"><br><br>
                                <label for="cant1"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant3" id="cant3"><br><br>
                            </div>
                            <div class="precio">
                                <p><strong>$200</strong></p>
                            </div>
                        </div>
                    </div>


                </article>
                <article>
                <div class="casitas">
                        <div class="ima">
                            <img src="img4.jpg"><br><br>
                        </div>
                            <p>Diseño Cucha de Perro</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod4"> Seleccionar </label>
                                <input type="checkbox" name="prod4" id="prod4" value="150"><br><br>
                                <label for="cant4"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant4" id="cant4"><br><br>
                            </div>
                            <div class="precio">
                                <p><strong>$150</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="casitas">
                        <div class="ima">
                            <img src="img5.jpg"><br><br>
                        </div>
                            <p>Casita de Tatos</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod5"> Seleccionar </label>
                                <input type="checkbox" name="prod5" id="prod5" value="700"><br><br>
                                <label for="cant5"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant5" id="cant5"><br><br>
                            </div>
                            <div class="precio">
                                <p><strong>$700</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="casitas">
                        <div class="ima">
                            <img src="img6.jpg"><br><br>
                        </div>
                            <p>Diseño Habitacion</p>
                        <div class="inputprecio">
                            <div class="seleccionar">
                                <label for="prod6"> Seleccionar </label>
                                <input type="checkbox" name="prod6" id="prod6" value="500"><br><br>
                                <label for="cant6"> Cantidad <label>
                                <input class="cantidad" type="number" name="cant6" id="cant6"><br><br>
                            </div>
                            <div class="precio">
                                <p><strong>$500</strong></p>
                            </div>
                        </div>
                    </div>


                </article>
                <div class="uwu">
               
                    <label for="enviar"> Enviar Compra: </label>
                    <input class="send" type="submit"  name="enviar" id="enviar"><br><br>
                </div>
            </form>
        </section>

           
    </div>
    

    <footer></footer>
</body>
</html>
