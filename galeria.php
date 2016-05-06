<!DOCTYPE html>
<html>
<body>

  <?php  for ($x = 1; $x <= 8; $x++){
              if (fmod($x-1, 3) == 0){
              echo '<div class="row">'; }
  ?>
      <!--  card 1 -->
      <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/productos/leche.jpg">
              </div>
              <div class="card-content">
                <p class="card-title">LECHE ENTERA TRADICIONAL</p>
                <p class="card-subtitle">Texcoco - 42km</p>
                <p class="precio">$30 MXN - litro</p>
              </div>
              <!-- Productor -->
              <a class="modal-trigger" href="#productor1">
                <div class="foto-productor">
                  <img src="img/jpgs/vlad.png" class="circle responsive-img" alt="" />
                  <p>Rancho Xaltipa</p>
                </div>
              </a>
              <!-- Productor Modal Structure -->
              <div id="productor1" class="modal modal-productor">
                    <div class="modal-content">
                      <div class="row">
                        <div class="col l6 m6 s12">
                          <img src="img/jpgs/vlad.png" class="circle responsive-img" alt="" />
                        </div>
                        <div class="col l6 m6 s12 ">
                            <h4>Rancho Xaltipa</h4>
                            <h5>Texcoco</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <div class="row">
                            <div class="medallas">
                                <!--<span class="left">Medallas:</span>-->
                                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Local"><img class="responsive-img" src="img/png/local.png" alt=""/></a>
                                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Orgánico"><img class="responsive-img" src="img/png/organico.png" alt=""/></a>
                                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Pequeño"><img class="responsive-img" src="img/png/pequeño.png" alt=""/></a>
                                <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Urbano"><img class="responsive-img" src="img/png/urbano.png" alt=""/></a>
                            </div>
                            </div>
                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn green">¡Entendido!</a>
                        </div>
                    </div>
                </div>

              </div>
              <!-- /Productor Modal Structure -->
              <!-- /Productor -->
              <!-- Atrás card -->
              <div class="card-reveal">
                <span class="card-title">LECHE ENTERA TRADICIONAL<i class="material-icons right">close</i></span>
                <span class="precio_grande red-text left">$30 MXN</span>
                <br>
                <p class="descripcion">Leche de vaca pasteurizada elaborada de la manera tradicional, 100% pura, sin rebajar. Al hervirla se consigue una exquisita nata.</p>
                <div class="compra">
                        <a class="waves-effect waves-light btn red">A la canasta</a>
                </div>
              </div>
              <!-- /Atrás card -->
              <!-- Botón delantero -->
              <div class="boton-delantero">
                <a><img src="img/png/btn_canasta_compra.png" class="responsive-img waves-effect waves-light" alt="" /></a>
              </div>
              <!-- /Botón delantero -->
          </div>
          </div>
      <!--  /card 1 -->
      <?php  if (fmod($x, 3) == 0){
                  echo '</div>'; }
        }
      ?>
</body>
</html>
