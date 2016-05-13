<!DOCTYPE html>
<html>
<body>
  <?php
    header("Content-Type: text/html;charset=utf-8");
    $host_name  = "db624747361.db.1and1.com";
    $database   = "db624747361";
    $user_name  = "dbo624747361";
    $password   = "tomates";

    $conn = mysqli_connect($host_name, $user_name, $password, $database);
    $conn->query("SET NAMES 'utf8'");
    if(mysqli_connect_errno())
    {
    echo '<p>Error al conectar a base de datos: '.mysqli_connect_error().'</p>';
    }
    $b = $_REQUEST["b"];
    $sql = "SELECT * FROM Producto WHERE id = $b ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>
      <!--  row  -->
      <tr id="row<?php echo $b ?>">
        <td><img  src="img/productos/<?php echo $row["Imagen"] ?>.jpg" class="img-canasta"alt="" /></td>
        <td><span><?php echo $row["Nombre"] ?></span></td>
        <td>$<span id="precio"><?php echo $row["Precio"] ?></span> MXN <?php echo $row["Unidad"] ?></td>
        <td>
        <i class="controles material-icons green-text" onclick="document.getElementById('cantidad<?php echo $b ?>').stepDown()">remove_circle</i>
        <input value="0" id="cantidad<?php echo $b ?>" type="number" min="0" max="20" class="validate">
        <i class="controles material-icons green-text" onclick="document.getElementById('cantidad<?php echo $b ?>').stepUp()">add_circle</i>
        </td>
        <td id="importe">$0.00</td>
        <td>
        <i class="controles material-icons red-text" onclick="quitar('row<?php echo $b ?>')">cancel</i>
        </td>
      </tr>
      <!--  /row  -->
      <?php } ?>
</body>
</html>
