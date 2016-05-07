<!DOCTYPE html>
<html>
<body>
  <?php
    $host_name  = "db624747361.db.1and1.com";
    $database   = "db624747361";
    $user_name  = "dbo624747361";
    $password   = "tomates";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);

    if(mysqli_connect_errno())
    {
    echo '<p>Error al conectar a base de datos: '.mysqli_connect_error().'</p>';
    }

    $sql = "SELECT * FROM Producto";
    $result = mysqli_query($conn, $sql);
    echo "string";
    echo mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        $x = 1;
        if ($x == 1){
        echo '<div class="row">';
        }
    ?>
      <!--  card <?php echo $x ?> -->
      <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/productos/<?php echo $row["Imagen"] ?>.jpg">
              </div>
              <div class="card-content">
                <p class="card-title"><?php echo $row["Nombre"] ?></p>
                <p class="card-subtitle">Texcoco - 42km</p>
                <p class="precio">$<?php echo $row["Precio"] ?> MXN - <?php echo $row["Unidad"] ?></p>
              </div>
              <!-- Productor -->
              <a class="modal-trigger" href="#productor<?php echo $row["id"] ?>">
                <div class="foto-productor">
                  <img src="img/jpgs/vlad.png" class="circle responsive-img" alt="" />
                  <p>Rancho Xaltipa</p>
                </div>
              </a>
              <!-- Productor Modal Structure -->
              <div id="productor<?php echo $row["id"] ?>" class="modal modal-productor">
                    <div class="modal-content">
                      <div class="row">
                        <div class="col l6 m6 s12">
                          <img src="img/jpgs/vlad.png" class="circle responsive-img" alt="" />
                        </div>
                        <div class="col l6 m6 s12 ">
                            <h4>Rancho Xaltipa</h4>
                            <h5>Texcoco</h5>
                            <p><?php echo $row["Descripcion"] ?> </p>
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
      <!--  /card <?php echo "$x" ?> -->
      <?php
        $x++;
        }
      ?>
      </div>
</body>
</html>
