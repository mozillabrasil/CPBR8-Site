<?php

  function active_class( $page ){

    $path = array_pop(explode("/", $_SERVER['REQUEST_URI']));

    if ($page == $path) {
      echo ' class="active"';
    }

  }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->

		<!-- Title -->
    <title>Mozilla Brasil</title>

		<!-- Fonts -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic|Roboto:300,300italic,400,400italic,700,700italic">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.2.3/css/nanogallery.min.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <?php if(isset($grade)){echo '<link rel="stylesheet" href="assets/css/timeline.css">';} ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>.rsocial img{max-width: 100%;width: 100%;}.rsocial .photo{max-height:350px;overflow: hidden;}.rsocial .content {background:#eee;}.navbar .twitter, .navbar .facebook, .navbar .plus {border-radius: 50px;margin-left:5px;font-size:1.6em;color:#fff !important;transition:0.5s;}.navbar .twitter {padding: 6px 6.5px 6px 6.5px;background:#52A6E6;border:0;}.navbar .facebook {padding: 6px 10px 6px 10px;background: #415E9B;border:0;}.navbar .plus {padding:6px 6.5px 6px 6.5px;background:#D4412C;border:0;}</style>

  </head>
  <body>
  	<!-- navbar -->
  	<div class="navbar-wrapper">
  		<div class="container">
  			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  				<div class="container">
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  							<span class="sr-only">Menu</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>
  						<a class="navbar-brand" href="index">Mozilla na CPBR8</a>
  					</div>
  					<div class="navbar-collapse collapse">
  						<ul class="nav navbar-nav navbar-right text-uppercase">
  							<li<?php active_class( 'index' ); ?>><a href="index">Home</a></li>
  							<li<?php active_class( 'comunidade' ); ?>><a href="comunidade">Comunidade</a></li>
                <li<?php active_class( 'hackathon' ); ?>><a href="hackathon">Hackathon</a></li>
  							<li<?php active_class( 'grade' ); ?>><a href="grade">Grade</a></li>
                <li><a href="https://facebook.com/mozillabrasil" class="btn btn-default navbar-btn facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/mozillabrasil" class="btn btn-default navbar-btn twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/116991215966661461225" class="btn btn-default navbar-btn plus"><i class="fa fa-google-plus"></i></a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- //navbar -->