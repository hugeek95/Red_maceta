<?php
   require_once 'init.php';
   
    require("Carrito.class.php");
   
 
       $carrito = new Carrito();


    if($user->premium){
        
        // header('Location: index.php');
        // exit();
    }


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
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>       
<link rel="stylesheet" href="https://checkout.stripe.com/v3/checkout/button.css"/>
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
                <li>
                  <img src="img/jpgs/slider1.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/jpgs/slider2.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/jpgs/slider3.jpg"> <!-- random image -->
                </li>
              </ul>
        </div>

      </div>

      <!--/Encabezado-->

      <!--Galeria-->
      <div class="green galeria">
      <br/><br/>

      <div class="categorias center">
           <a id="1" onclick="categoria(this.id)"><img src="img/png/categoria1_paqt.png"></a>
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
          <input id="busqueda" name="busqueda" placeholder="duraznos, aguacate, pollo, huevo" type="text" class="validate">
        </div>
        <div class="col l1 m1 s12 center-align">
          <a id="boton_buscar" class="btn-floating btn-large waves-effect waves-light red" ><i class="material-icons">search</i></a>
        </form>
        </div>
      </div>
      <!-- Contenido galería-->
      <div id="galeria" class="container center-align green">
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
                      <th data-field="nombre">Nombre</th>
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
      
             
             <form action="premium_charge.php" method="post">
        <noscript>You must <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> in your web browser in order to pay via Stripe.</noscript>

        <input 
            type="submit" 
            value="Ir a paggar"
               data-key="<?php echo $stripe['publishable']; ?>"
    data-name="Red Maceta"
    data-description="Premium membership"
    data-currency="mxn"
    data-email="<?php echo $user->email; ?>"
    data-amount="<?php 
             
                $carrito->update_carrito();
                 echo $carrito->precio_total()*100; 
                 
                 ?>"
       class="waves-effect waves-light btn" />

        <script src="https://checkout.stripe.com/v2/checkout.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
        $(document).ready(function() {
            $(':submit').on('click', function(event) {
                 
                event.preventDefault();
                var $button = $(this),
                    $form = $button.parents('form');
                var opts = $.extend({}, $button.data(), {
                    token: function(result) {
                        $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                    }
                });
                StripeCheckout.open(opts);
            });
        });
        </script>
</form>
             
             
           </div>
       </div>

      <!--/Canasta-->
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
        <h6 class="black-text">Términos y condiciones</h6>
        <p class="black-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        </div>
      </div>
    </footer>
    <!--/Footer-->
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script type="text/javascript">
    document.getElementById('boton_buscar').onclick = function() {
    var search = document.getElementById('busqueda').value;
    loadgaleria(search);
    }
    document.getElementById('formulario').addEventListener('submit', function(e) {
    loadgaleria(document.getElementById('busqueda').value);
    e.preventDefault();
    }, false);
    total();
    function loadgaleria(str) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                          document.getElementById("galeria").innerHTML = xhttp.responseText;
                          $('.modal-trigger').leanModal();
                          $('.tooltipped').tooltip({delay: 50});
                        }
                };
                xhttp.open("GET", "fichas.php?q=" + str, true);
                xhttp.send();
      }
      function categoria(str) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                          document.getElementById("galeria").innerHTML = xhttp.responseText;
                          $('.modal-trigger').leanModal();
                          $('.tooltipped').tooltip({delay: 50});
                        }
                };
                xhttp.open("GET", "fichas.php?cat=" + str, true);
                xhttp.send();
      }
      var paramstr = window.location.search.substr(1);
      var paramarr = paramstr.split ("&");
      var params = {};
      for ( var i = 0; i < paramarr.length; i++) {
      var tmparr = paramarr[i].split("=");
      params[tmparr[0]] = tmparr[1];
      }
      if (params['cat']) {
      categoria(params['cat']);
      }
      else if (params['bsq']) {
      loadgaleria(params['bsq']);
      }
      else {
      loadgaleria("");
    }
      /*CARRITO*/
      function agregar(str){
  
          <?
    $host_name  = "db624747361.db.1and1.com";
    $database   = "db624747361";
    $user_name  = "dbo624747361";
    $password   = "tomates";

    $conn = mysqli_connect($host_name, $user_name, $password, $database);
          $str = ?> str; <?
                $sql_productor = "SELECT * FROM Producto WHERE id = $str ";
                $result_productor  = mysqli_query($conn, $sql_productor);
                $row3 = mysqli_fetch_assoc($result_productor);
              
          
          
          $carrito->add(   $articulo = array(
                "id"			=>		$str,
                "cantidad"		=>		1,
                "precio"		=>		$row3['Precio'],
                "nombre"		=>		$row3['Nombre']
            )
                );
          ?>
          
        var xhttp = new XMLHttpRequest();
        var id = [];
        var cantidad = [];
        var x = document.getElementsByClassName("quantity");
        for (var i = 0; i < x.length; i++) {
          cantidad[i] = x[i].value;
          id[i] = x[i].id;
        }
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                      document.getElementById("cont_bol").innerHTML += xhttp.responseText;
                      for (var i = 0; i < cantidad.length; i++) {
                        document.getElementById(id[i]).value = cantidad[i];
                      }
                      Materialize.toast('Agregado', 4000);
                      total();
                    }
            };
            xhttp.open("GET", "bolsa.php?b=" + str, true);
            xhttp.send();
      }
      function quitar(rowid)
      {
          var row = document.getElementById(rowid);
          row.parentNode.removeChild(row);
          total();
      }
      function cantidad(id,n){
        if(n == 1){
          document.getElementById("cantidad"+id).stepUp();
        }
        else{
          document.getElementById("cantidad"+id).stepDown();
        }
        importe(id);
      }

      function importe(id)
      {
        str="importe"+id;
        a="cantidad"+id;
        b="precio"+id;
        document.getElementById(str).innerHTML =  document.getElementById(a).value * document.getElementById(b).innerHTML;
        document.getElementById(a).innerHTML = document.getElementById(a).value;
        total();
      }
      function total(){
        var tot=0;
        var x = document.getElementsByClassName("importe");
        for (var i = 0; i < x.length; i++) {
          console.log(x[i].innerText);
          tot += parseFloat(x[i].innerText);
        }
        document.getElementById("total").innerHTML =tot;
      }
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
