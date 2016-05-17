<?php

require_once 'initFer.php';

if($user->premium){
	header('Location: index.php');
	exit();
}
?>

<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Red Maceta Premium</title>
      <link rel="icon" href="img/favicon.png" type="image/png">
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800italic,400italic,600,600italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>

    	<p>Ir a Premium</p>
    	<form action="/premiumFer_charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable']; ?>"
    data-amount= "<?php $_SESSION['total'] ?>"
    data-name="Sitio Web"
    data-description="Premium"
    data-email="<?php echo $user->email; ?>"
    data-currency="mxn">

  </script>
</form>

    </body>
  </html>
