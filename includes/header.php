<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page; ?></title>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/titan.css" />
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,300,500" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
   <header>
       <div class="row">
           <div class="small-12 column">
              <div class="row">
                  <div class="medium-5 column">
                      <a href="index.php"><img src="img/logo.png" alt="Pousada Águas do Mar"></a>
                  </div>
                  <div class="medium-7 column show-for-large-up">
                      <ul>
                        <li><i class="fa fa-home"></i><a href="">Águas do Mar</a></li>
                        <li><i class="fa fa-map-marker"></i><a href="">Localização</a></li>
                        <li><i class="fa fa-calendar-o"></i><a href="">Contato &amp; Reservas</a></li>
                        <li><i class="fa fa-image"></i><a href="">Galeria</a></li>
                      </ul>
                  </div>
              </div>
           </div>
       </div>
   </header>
   <section id="booking" class="show-for-medium-up">
       <div class="row">
           <div class="medium-5 column">
               <h1>Faça Agora sua Reserva!</h1>
           </div>
           <div class="medium-7 column">
               <form action="">
                   <label for="checkin">Entrada</label><input type="text" name="checkin">
                   <label for="checkout">saída</label><input type="text" name="checkout">
                   <input type="submit" value="&#xf002">
               </form>
           </div>
       </div>
   </section>