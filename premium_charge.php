<?php

require_once 'initFer.php';

if (isset($_POST['stripeToken'])){
	$token = $_POST['stripeToken'];

	try{
		Stripe_Charge::create([
  "amount" => 2000,
  "currency" => "mxn",
  "source" => $token, // obtained with Stripe.js
  "description" => $user->email
]);

		$db->query("
			UPDATE users
			SET premium = 1
			WHERE id = {$user->id}
			");


	} catch(Stripe_CardError $e){
		//Do something whit the error here

	}
}

?>