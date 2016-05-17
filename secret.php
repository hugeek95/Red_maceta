<?php

require_once 'initFer.php';

if (!$user->premium){
	header('Location: galeriaFer.php');
	exit();
}
?>