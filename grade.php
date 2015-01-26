<?php $grade = true; ?>
<?php

	require_once 'header.php';
	require_once 'functions.php';

?>

		<!-- header -->
		<header class="site-head">
			<div class="jumbotron text-center text-uppercase" style="background-image: url(assets/images/intro/hackathon2.jpg);">
				<div class="caption">
					<div class="container">
						<h1 class="title">Nas Trilhas</h1>
						<p class="lead">Acompanhe a Comunidade Mozilla Brasil nos palcos da CPBR8</p>
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- page-content -->
		<section class="page-content margin-top-bottom-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<?php /* START */ ?>


						<ul class="timeline">
						    <?php 

						    	function time_sort($a,$b){

						    	if($a['time'] > $b['time'])

					        		return 1;

							    if($a['time'] < $b['time'])

					        		return -1;

					    		if($a['time'] == $b['time'])

					        		return 0;
								}

								uasort($cronograma,'time_sort');

						    	foreach ($dias as $dia) {

						    		echo '<li class="time-label">
						 				  <span class="bg-black timelabel" style="width:100%;text-align:center;font-size:1.2em;">0'.$dia.'/FEV</span>
						            	  </li>';

						            $horario = null;

						           	foreach ($cronograma as $atividade) {
						           		
						           		if ($atividade['date'] == $dia){

						           			$actstart = strtotime($atividade['date']."-02-2015 ".$atividade['time'].":00");
											$actend = strtotime($atividade['date']."-02-2015 ".$atividade['end-time'].":00");
											$nowtmtmp = strtotime("now");

						           			if ($atividade['time'] != $horario){

						           				echo '<li class="time-label">
						 				  			  <span class="bg-orange">'.$atividade['time'].'</span>
						            	  			  </li>';

						            	  		$horario = $atividade['time'];

						           			}

							           		echo '<li>
							                      <i data-toggle="tooltip" data-placement="right" title="'.$types[$atividade['type']].'" class="fa fa-'.$icons[$atividade['type']].'"></i>
							                      <div class="timeline-item">
							                      <span class="time"><i class="fa fa-clock-o"></i> 0'.$dia.'/Fev, '.$atividade['time'].' - '.$atividade['end-time'].'</span>
							                      <h3 class="timeline-header"><span style="color:#EF5438;">'.$atividade['title'].'</span></h3>
							                      <div class="timeline-body" style="font-weight: 200;font-size: 1.2em;">'.$atividade['description'].'</div>
							                      <div class="timeline-footer">';

											if (($nowtmtmp >= $actstart) && ($nowtmtmp < $actend)){

												// Está acontecendo agora esta atividade
							                	echo '<span class="label label-danger" style="font-weight:400;font-size:1em;padding:9px;"><span class="glyphicon glyphicon-time"></span> Agora</span> ';

											}

							                echo '<span class="label label-primary" style="font-weight:400;font-size:1em;padding:9px;"><i style="padding-right:5px;" class="fa fa-map-marker"></i> '.$atividade['place'].'</span>';

											if (gettype($atividade['authors']) == "array"){

												foreach ($atividade['authors'] as $author) {
													
													echo ' <a href="#" data-toggle="modal" data-target="#author'.$author.'" class="btn btn-default btn-md"><i class="fa fa-user"></i> '.$authors[$author]['name'].'</a>';

												}

											} else {

												// Único autor
												echo ' <a href="#" data-toggle="modal" data-target="#author'.$atividade['authors'].'" class="btn btn-default btn-md"><i class="fa fa-user"></i> '.$authors[$atividade['authors']]['name'].'</a>';

											}

											echo '</div></div></li>';

							            }

						           	}


						    	}

						     ?>

						</ul>

						<?php /* END */ ?>

					</div>
				</div>
			</div>
		</section>
		<!-- page-content -->

<?php

	foreach ($authors as $author => $data) {
		
		echo '<div class="modal fade" id="author'.$author.'" tabindex="-1" role="dialog" aria-labelledby="author'.$author.'" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="author'.$author.'">Sobre <b>'.$data['name'].'</b></h4>
      </div>
      <div class="modal-body" style="font-weight: 200;line-height: 2em;font-size:1.1em;">';

      	if(isset($data['photo'])){
      		echo '<div style="width:100%;display:block;text-align:center;"><img style="width:200px;height:auto;max-width:100%;" src="assets/images/photos/'.$data['photo'].'" alt="'.$data['name'].'" class="img-circle"></div><hr class="divider">';
      	}

      	if(isset($data['biography'])){
      		echo $data['biography'];
      	}
        
      	echo '<div class="modallinks" style="text-align:center;padding-top:10px;">';

      	if(isset($data['links'])){

	      	foreach ($data['links'] as $fa => $link) {
	      		
	      		echo '<a href="'.$link.'"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-'.$fa.' fa-stack-1x fa-inverse"></i></span>';

	      	}

      	}

      	echo '</div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

	}

?>

<?php $popover = true; ?>

<?php require_once 'footer.php'; ?>