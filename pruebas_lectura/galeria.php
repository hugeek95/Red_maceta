<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Red Maceta</title>
      <link rel="icon" href="img/favicon.png" type="image/png">
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800italic,400italic,600,600italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href="css/materialize_custom.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script src="https://checkout.stripe.com/checkout.js"></script>
    </head>
    <body>
    <!--Navegador-->
    <div class="navbar-fixed green">
      <nav class="green">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo"><img src="img/png/red.png" alt="" /></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="funcionamiento.html">Así funciona</a></li>
          <li><a href="conocenos.html">¡Conócenos!</a></li>
          <li><a href="index.html#productores">Soy productor</a></li>
          <li class="active"><a href="#">Llévele</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="funcionamiento.html">Así funciona</a></li>
          <li><a href="conocenos.html">¡Conócenos!</a></li>
          <li><a href="index.html#productores">Soy productor</a></li>
          <li class="active"><a href="#">Llévele</a></li>
        </ul>
      </div>
      </nav>
    </div>
    <!--/Navegador-->
    <!-- Inicio -->
    <div class="inicio">
      <!--Encabezado-->
      <div class="encabezado conocenos green valign-wrapper">
        <div class="slider center-align">
                 <ul class="slides">
            <!--     <li>
                  <img src="img/jpgs/slider1.jpg">
                </li>-->
           <li>
                  <img src="img/jpgs/slider2.jpg">
                </li>
                <li>
                  <img src="img/jpgs/slider3.jpg">
                </li>-->
              </ul>
        </div>

      </div>

      <!--/Encabezado-->

      <!--Galeria-->
      <div class="green galeria">
      <br/><br/>
      <div class="categorias center">
           <a id="" onclick="categoria(this.id)"><img src="img/png/categoria_todos.png"></a>
           <a id="2" onclick="categoria(this.id)"><img src="img/png/categoria6_horneados.png"></a>
           <a id="3" onclick="categoria(this.id)"><img src="img/png/categoria3_frutas.png"></a>
           <a id="4" onclick="categoria(this.id)"><img src="img/png/categoria2_hortalizas.png"></a>
           <a id="5" onclick="categoria(this.id)"><img src="img/png/categoria4_bebidas.png"></a>
           <a id="6" onclick="categoria(this.id)"><img src="img/png/categoria5_derivadosanim.png" ></a>
           <a id="7" onclick="categoria(this.id)"><img src="img/png/categoria7_condim.png"></a>
           <a id="8" onclick="categoria(this.id)"><img src="img/png/categoria8_tradi.png"></a>
      </div>
      <br/>
      <div class="container">
        <form id="formulario" class="row">
        <div class="input-field white col l11 m11 s12 center-align">
          <input id="busqueda" name="busqueda" placeholder="aguacate, pollo, huevo" type="text" class="validate">
        </div>
        <div class="col l1 m1 s12 center-align">
          <a id="boton_buscar" class="btn-floating btn-large waves-effect waves-light red" ><i class="material-icons">search</i></a>
        </form>
        </div>
      </div>
      <!-- Contenido galería-->
      <div id="galeria" class="container center-align green">
        <div id="overlay" class="green">
            <div class='oops white-text'>Tus productos locales se estan cargando...</div>
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
      </div>
      <!-- /Contenido galería-->

      <!--Numeración
      <div class="paginas center-align">
              <ul class="pagination text-white">
              <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>
      </div>
      /Numeración-->
      </div>
      <!--/Galeria-->
      <!--Canasta-->
       <!-- Modal Trigger -->
       <div class="canasta">
       <a class="modal-trigger" href="#canasta"><img src="img/png/btn_canasta_ir.png" class="responsive-img waves-effect waves-light" alt="" /></a>
       <h6 class="white-text">Ver canasta</h6>
       </div>
       <!-- Modal Structure -->
       <div id="canasta" class="modal bottom-sheet">
         <div class="modal-content">
           <h4>Mi canasta</h4>
           <table>
                <thead>
                  <tr>
                      <th data-field="id">Producto</th>
                      <th data-field="nombre" class="hide-on-small-only">Nombre</th>
                      <th data-field="precio">Precio</th>
                      <th data-field="cantidad">Cantidad</th>
                      <th data-field="importe">Importe</th>
                      <th data-field="importe">Eliminar</th>
                  </tr>
                </thead>
                <tbody id="cont_bol">
                </tbody>
            </table>
         </div>

         <div class="modal-footer">
           <div class="total red-text">
             TOTAL: $ <span id="total" ></span> MXN
           </div>
           <a class="modal-action modal-close waves-effect waves-red btn red" href="#login" onclick="pagar()">CONTINUAR</a>
         </div>
       </div>

      <!--/Canasta-->
      <!--Login-->
       <!-- Modal Trigger -->
       <!-- El modal se activa cuando se va a pagar -->
       <!-- Modal Structure -->
       <div id="login" class="modal login">
         <div class="modal-content">
           <h4 class="red-text">Confirmar pedido</h4>
            <div class="row">
              <form class="" action="premium_charge.php" method="post">
                <div class="row">
                  <p>
                    Estás a un paso de sembrar la diferencia, este es tu pedido.
                  </p>
                </div>
                <div class="row">
                  <table>
                       <thead>
                         <tr>
                             <th data-field="id">Producto</th>
                             <th data-field="cantidad">Cantidad</th>
                             <th data-field="cantidad">Unidad</th>
                             <th data-field="importe">Importe</th>
                         </tr>
                       </thead>
                       <tbody id="tabla_confirmar">
                       </tbody>
                   </table>
                </div>
                <p>
                  <input type="checkbox" id="termcheck" onclick="activar_reg()"/>
                  <label for="termcheck">Acepto <a href="/legal.html" target="_blank">Términos y Condiciones</a></label>
                </p>
              <button type="submit" id="estraip" class="btn disabled red">Pagar</button>
              </form>
            </div>
         </div>
       </div>

      <!--/Login-->
      <!--Registro-->
       <!-- Modal Trigger -->
       <!-- El modal se activa cuando se va a pagar -->
       <!-- Modal Structure -->
       <div id="registro" class="modal login">
         <div class="modal-content">
             <h4 class="red-text">Únete a la red</h4>
             <br/><br/>
                <form id="form_reg" name="form_reg" class="" action="" method="POST">
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="user" placeholder="" type="text" name="user" required>
                          <label for="user">Nombre</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col l6 m6 s12">
                              <input id="email" name="email" data-error="Formato incorrecto" type="email" class="validate" required>
                              <label for="email">Email</label>
                        </div>
                        <div class="input-field col l6 m6 s12">
                              <input id="telefono" type="tel" name="telefono" class="validate" required>
                              <label for="telefono">Teléfono</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col l6 m6 s12">
                              <input id="password1" name="password1" type="password" class="validate">
                              <label for="password1">Password</label>
                        </div>
                        <div class="input-field col l6 m6 s12">
                              <input id="password2" name="password2" type="password" class="validate" onkeyup="checkpass(); return false;">
                              <label for="password2">Repeat password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="g-recaptcha" align="center" data-sitekey="6LcWqB8TAAAAAKQfCKJBvOL1ZjcyA3ME0_OUQW7D"></div>
                      </div>
                      <div class="row">
                        <p>
                          <input type="checkbox" id="termcheck" onclick="activar_reg()"/>
                          <label for="termcheck">Acepto Términos y Condiciones</label>
                        </p>
                      </div>
                      <div class="row">
                         <div class="col l12 m12 s12">
                             <button id="btn_reg" type="submit" name="button" disabled class="btn disabled green">REGISTRARME</button>
                         </div>
                      </div>
              </form>
        </div>
      <!--/Login-->
      </div>
    <!-- /Inicio -->


    <footer class="page-footer green">
        <div class="row">
              <div class="col l4 push-l4 m4 push-m4 s12">
                <img class="img-responsive" src="img/png/ilus_red.png" alt="Únete" />
                <p class="white-text">Únete a la red</p>
              </div>
              <div class="col l4 pull-l4 pull-m4 m4 s12">
                <a href="https://www.youtube.com/channel/UCgfJfuLthCYz6ojpH8xHq1g" target="_blank"><img class="img-responsive" src="img/png/redes_youtube.png" alt="Canal de youtube" /></a>
                <a href="https://www.youtube.com/channel/UCgfJfuLthCYz6ojpH8xHq1g" target="_blank"><img class="img-responsive" src="img/png/redes_insta.png" alt="Instagram" /></a>
                <a href="https://www.facebook.com/redmaceta/?fref=ts" target="_blank"><img class="img-responsive" src="img/png/redes_face.png" alt="Facebook" /></a>
                <a href="https://twitter.com/RedMaceta" target="_blank"><img class="img-responsive" src="img/png/redes_twitter.png" alt="Twitter" /></a>
              </div>
              <div class="col l4 m4 s12 patron">
              </div>
        </div>
      <div class="footer-copyright white">
        <div class="container center-align term">
          <h6 class="black-text"><a href="legal.html">Aviso de privacidad</a> | <a href="legal.html">Términos y condiciones</a></h6>
        </div>
      </div>
    </footer>
    <!--/Footer-->
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/galeria.js"></script>
    <script src="https://checkout.stripe.com/v2/checkout.js"></script>
    <script>
      var handler = StripeCheckout.configure({
        key: 'pk_test_7Hli1EdDwN0BMP3VI4t4Ytzb',
        //key: 'pk_live_7zVF7HnpsFQsamuOlZCKMruB',
        image: 'img/png/logorojo.png',
        locale: 'auto',
        billingAddress: 'true',
        token: function(token) {
          console.log(token);
          var stripeToken = token.id;
          var stripeEmail = token.email;
          $.post(
              "/premium_charge.php", /* your route here */
              { stripeToken: token.id, stripeEmail: stripeEmail },
              function(data) {
                console.log(data);
              }
          );

        }
      });

      $('#estraip').on('click', function(e) {
        // Open Checkout with further options:
        handler.open({
          name: 'Red Maceta',
          description: 'Siembra la diferencia',
          currency: "MXN",
          amount: total()*100
        });
        e.preventDefault();
      });

      // Close Checkout on page navigation:
      $(window).on('popstate', function() {
        handler.close();
      });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-77722516-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script src="js/init.js"></script>
    </body>
</html>
