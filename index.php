<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Hello, world!</title>

  </head>
  
  <body>
    <header>
      <img src="imagenes/logo.jpg" alt="logo" height = "120">
    </header>
    <div>
      <div class="container">
        <div class="row">
          <div class="col">
            <p> Tienda online</p>
          </div>
          <div class="col">
            <p>Precios inigualables</p>
          </div>
          <div class="col">
            <img src="imagenes/playa.jpg" alt="playa" height = "130">
          </div>
          <div class="col">
            <p>Envios gratis</p>
          </div>
        </div>
      </div>
      <div class="row">

    <?php for ($i=1; $i <= 12; $i++) { 

      echo '<div class="col-md-3">';
      echo '<img src="imagenes/foto'.$i.'.jpg">';
      echo '</div>';
    
      } ?>

</div>
   </div>
    <footer>

    </footer>




        <h1>Hola Vanesa</h1>
        <p id="uno" >Esto es el párrafo uno</p>
        <p id="dos">Esto es el párrafo dos</p>
        <p id="tres"class="cabecera">Esto es el párrafo tres</p>
        <p id="cuatro"class="cabecera">Esto es el párrafo cuatro</p>
        <p id="cinco"class=>Esto es el párrafo cinco</p>
        <p id="seis"class="destacado">Esto es el párrafo seis</p>
        <p id="siete"class="destacado">Esto es el párrafo siete</p>
        
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>