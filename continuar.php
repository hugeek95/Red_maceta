<?php

require_once 'init.php';

	//Recibimos el string
	$products = $_REQUEST["products"];
	$quants = $_REQUEST["quants"];
	//Creamos los dos arreglos separados
	$ids = explode(',',$products);
	$cants = explode(',',$quants);

	$idslenght = count($ids);
	$total=0;
	for ($i=0; $i < $idslenght; $i++) {
		$stmt = $db->query('SELECT * FROM Producto WHERE id ='.$ids[$i]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$precio[$i] = $row['Precio'];
		$importe = $precio[$i]*$cants[$i];
		$total = $total+$importe;
	}
	$_SESSION['total']=$total;


/*
	$row["Precio"]
	$_SESSION['user_id']
	$fecha = $hoy = date("d.m.y");*/


?>
