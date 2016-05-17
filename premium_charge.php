<?php

require_once 'init.php';

   
    require("Carrito.class.php");
   
 
       $carrito = new Carrito();

   $carrito->update_carrito();
  
          

if(isset($_POST['stripeToken'])){
    $token = $_POST['stripeToken'];
    
    try{
         Stripe_Charge::create([
             
        "amount" => $carrito->precio_total()*100,
        "currency" => "mxn",  ///gbp
        "source" => $token, // obtained with Stripe.js
            "description" => $user->email
        ]);       
        
        $db->query("
            UPDATE users
            SET premium =1
            WHERE id = {$user->id}
        ");
        
    } catch(Stripe_CardError $e){
        // do something with the error here
    }
    
    $carrito->destroy();
    
   $carrito->update_carrito();
    
    header('Location: ejemplo.php');
    exit();

}

?>