<?php

	require_once 'header.php';
	require_once 'functions.php';

?>

<!-- intro -->
<div id="intro" class="carousel slide site-head" data-ride="carousel" data-interval="false">
	<div class="carousel-inner">
		<article class="item active">
			<img src="assets/images/intro/mozbr.jpg" alt="Mozilla na CPBR">
			<div class="overlay"></div>
			<div class="carousel-caption jumbotron text-uppercase">
				<h1 class="title">MozBR na CPBR8</h1>
				<p class="lead">Juntos por uma web livre.</p>

			</div>
		</article>

		<article class="item">
			<img src="assets/images/intro/firefox.jpg" alt="Experimente o melhor Firefox de todos">
			<div class="overlay"></div>
			<div class="carousel-caption jumbotron text-uppercase">
				<h1 class="title">Experimente o melhor Firefox de todos</h1>
				<p class="lead">Conheça tudo sobre o navegador gratuito que é comprometido com você, sua privacidade e a Web Aberta.</p>
				<p class="text-uppercase"><a href="https://www.mozilla.org/pt-BR/firefox/new/" target="_blank" class="btn btn-orange btn-lg">Faça o download</a></p>
			</div>
		</article>

		<article class="item">
			<img src="assets/images/intro/webmaker.jpg" alt="Nós ensinamos Web">
			<div class="overlay"></div>
			<div class="carousel-caption jumbotron text-uppercase">
				<h1 class="title">Nós ensinamos Web</h1>
				<p class="lead">Vamos explorar, testar e inventar juntos para construir uma Web aberta e feita por todos nós.</p>
				<p class="text-uppercase"><a href="oficinas" class="btn btn-orange btn-lg">Quero saber mais</a></p>
			</div>
		</article>

		<article class="item">
			<img src="assets/images/intro/comunity.jpg" alt="Estamos construindo uma Internet melhor!">
			<div class="overlay"></div>
			<div class="carousel-caption jumbotron text-uppercase">
				<h1 class="title">Estamos construindo uma Internet melhor!</h1>
				<p class="lead">Nossa missão é promover abertura, inovação e oportunidades na Web.</p>
				<p class="text-uppercase"><a href="comunidade" class="btn btn-orange btn-lg">Quero saber mais</a></p>
			</div>
		</article>
	</div>
	<ol class="carousel-indicators">
		<li data-target="#intro" data-slide-to="0" class="active"></li>
		<li data-target="#intro" data-slide-to="1"></li>
		<li data-target="#intro" data-slide-to="2"></li>
		<li data-target="#intro" data-slide-to="3"></li>
	</ol>
	<a class="left carousel-control" href="#intro" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="right carousel-control" href="#intro" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Proximo</span>
	</a>
</div>
<!-- //intro -->

<section class="page-content margin-top-bottom-60">
	<div class="container">

		<div class="rsocial share row">

			<div class="col-sm-6 photo"><img src="assets/images/mozilla/fox.jpg"></div>

			<div class="col-sm-6 content">

				<div class="page-header" style="text-align:center;"><h1>#mozillanacpbr8</h1></div>

				<p>A Comunidade Mozilla Brasil quer interagir com você durante a CPBR8 e 
				para isso preparamos diversas ações superdivertidas em nossos perfis nas 
				redes sociais. Não perca nenhum passo da Fox na Campus, siga <a href="http://twitter.com/mozillabrasil">nosso 
				Twitter</a> e curta nossa <a href="http://fb.com/mozillabrasil">página no Facebook</a>. 
				Divirta-se com a gente e não fique de fora dessa festa! #mozillanacpbr8</p>

			</div>

		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="title">Atividades do dia</h2>

				<?php

					$zero = 0;

					function time_sort($a,$b){

					    if($a['time'] > $b['time'])

					        return 1;

					    if($a['time'] < $b['time'])

					        return -1;

					    if($a['time'] == $b['time'])

					        return 0;
					}

					uasort($cronograma,'time_sort');


					foreach ($cronograma as $atividade) {
						
						if ($atividade['date'] == $hoje) {

							$actstart = strtotime($atividade['date']."-02-2015 ".$atividade['time'].":00");
							$actend = strtotime($atividade['date']."-02-2015 ".$atividade['end-time'].":00");
							$nowtmtmp = strtotime("now");

							if ($zero % 2 == 0) {
  								echo '<div class="row todayact">';
							}

							echo '<div class="col-sm-6"><div class="page-header" style="padding-bottom: 0;border-bottom: 0;"><h3 style="line-height:1.5em;"><span class="label label-primary">'.$atividade['time'].'</span> ';

							if (($nowtmtmp >= $actstart) && ($nowtmtmp < $actend)){

								// Está acontecendo agora esta atividade
								echo '<span class="label label-danger"><span class="glyphicon glyphicon-time"></span> Agora</span> ';

							}

							echo $atividade['title'].' <small>por ';

							if (gettype($atividade['authors']) == "array"){

								// Mais de um autor
								$autores = [];

								foreach ($atividade['authors'] as $author) {
									
									array_push($autores, '<a href="#" data-toggle="modal" data-target="#author'.$author.'">'.$authors[$author]['name'].'</a>');

									$autor = implode(" e ", $autores);

								}

								echo $autor;

							} else {

								// Único autor
								echo $authors[$atividade['authors']]['name'];

							}

							echo '</small></h3></div>';
							
							echo '<p><b>Onde:</b> '.$atividade['place'].'</p>';
							echo '</div>';

							if ($zero % 2 != 0) {
  								echo '</div><hr class="separator">';
							}

							$zero++;

						}

					}

				?>
			</div>
			</div>
		</div>
	</div>
</section>

<?php $socialheight = true; ?>

<?php require_once 'footer.php'; ?>
