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
      <script src='https://www.google.com/recaptcha/api.js'></script>
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
         </div>8
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
           <h4 class="red-text">Ingresa</h4>
           <br/><br/>
            <div class="row">
              <form class="col s12" id="form1" name="form1" method="POST" action="login.php">
              <div class="row">
                  <div class="input-field col s12">
                      <input placeholder="" id="first_name" type="text" class="validate">
                      <label for="first_name">Usuario</label>
                  </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <input id="password" type="password" class="validate">
                          <label for="password">Password</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col l6 m6 s6">
                        <a href="#registro" class="modal-trigger modal-action modal-close waves-effect waves-red btn green">REGISTRARME</a>
                      </div>
                  <div class="col l6 m6 s6">
                        <a class="modal-action modal-close waves-effect waves-red btn red">CONTINUAR</a>
                  </div>
                </div>
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
                <form id="form_reg" name="form_reg" class="" action="registro_cliente.php" method="POST">
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
      function cantidad(id,n){
        if(n == 1){
          document.getElementById("cantidad"+id).stepUp();
        }
        else{
          document.getElementById("cantidad"+id).stepDown();
        }
        importe(id);
      }
      function agregar(str){
        var flag = 0;
        var ids = document.getElementsByClassName("idbolsa");
        for (var i = 0; i < ids.length; i++) {
          if (ids[i].innerText==str) {
              cantidad(str,1);
              Materialize.toast('Otro más', 4000);
              return;
          }
        }
        var xhttp = new XMLHttpRequest();
        var id = [];
        var cantidades = [];
        var x = document.getElementsByClassName("quantity");
        for (var i = 0; i < x.length; i++) {
          cantidades[i] = x[i].value;
          id[i] = x[i].id;
        }
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                      document.getElementById("cont_bol").innerHTML += xhttp.responseText;
                      for (var i = 0; i < cantidades.length; i++) {
                        document.getElementById(id[i]).value = cantidades[i];
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
          tot += parseFloat(x[i].innerText);
        }
        document.getElementById("total").innerHTML =tot;
      }
      function pagar(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                      //document.getElementById("galeria").innerHTML = xhttp.responseText;
                      $('#login').openModal();
                    }
            };
            xhttp.open("GET", "Carrito.class.php", true);
            xhttp.send();
      }
      function checkpass(){
        var pass1 = document.getElementById('password1');
        var pass2 = document.getElementById('password2');
        if(pass1.value == pass2.value){
          pass2.className = "validation valid";
        } else{
          pass2.className = "validation invalid";
        }
      }
      function activar_reg(){
        if (document.getElementById('termcheck').checked) {
          document.getElementById('btn_reg').className = "";
          document.getElementById('btn_reg').className = "modal-action modal-close waves-effect waves-red btn green";
        }
        else {
          document.getElementById('btn_reg').className = "";
          document.getElementById('btn_reg').className = "btn disabled green";
        }
      }
      function hoverimg(x){
         x.src="img/png/btn_canasta_over.png";
      }
      function mouseaway(x){
          x.src = "img/png/btn_canasta_compra.png";
      }
      function press(x){
          x.src = "img/png/btn_canasta_press.png";
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
