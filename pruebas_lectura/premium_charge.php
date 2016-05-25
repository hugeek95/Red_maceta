<?php
require_once 'init.php';

if (isset($_POST['stripeToken'])){
	$token = $_POST['stripeToken'];


	try{
		Stripe_Charge::create([
  "amount" => $_SESSION['total'],
  "currency" => "mxn",
  "source" => $token, // obtained with Stripe.js
  "description" => $user->email
]);

		$db->query("
			UPDATE users
			SET premium = 1
			WHERE id = 1
			");


	} catch(Stripe_CardError $e){
		//Do something whit the error here

	}

    unset($_SESSION['total']);

   ///session_destroy();
}

  echo "<script>alert('¡Pago exitoso!, por favor revise su email.');window.location='galeria';</script>";
?>
