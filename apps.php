<?php require_once 'header.php'; ?>
<?php require_once 'apps_list.php'; ?>

		<!-- header -->
		<header class="site-head">
			<div class="jumbotron text-center text-uppercase" style="background-image: url(assets/images/intro/hackathon.jpg);">
				<div class="caption">
					<div class="container">
						<h1 class="title">Aplicativos</h1>
						<p class="lead">Confira os Aplicativos que você pode desenvolver para o Firefox OS</p>
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- wam-apps -->
		<section class="page-content wam-apps margin-top-bottom-60">
			<div class="container">

				<div class="page-header"><h1>Aplicativos</h1></div>

				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th><a href="#">App</a></th>
			          <th><a href="#">Descrição</a></th>
			          <th><a href="#">Prioridade</a></th>
			        </tr>
			      </thead>
			      <tbody>

			      	<?php foreach ($aplicativos as $app) {
			      		
			      		if($app['type'] == "p1"){

			      			$priority = '<span class="label label-danger">P1</span>';

			      		} else if($app['type'] == "p2"){

			      			$priority = '<span class="label label-warning">P2</span>';

			      		} else if($app['type'] == "p3"){

			      			$priority = '<span class="label label-success">P3</span>';

			      		}

			      		echo '<tr>
			          		  <th scope="row">'.$app['title'].'</th>
			          		  <td>'.$app['description'].'</td>
			          		  <td>'.$priority.'</td>
			        		  </tr>';

			      	} ?>


			      </tbody>
			    </table>

				<div class="page-header"><h1>Jogos</h1></div>

				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th><a href="#">App</a></th>
			          <th><a href="#">Prioridade</a></th>
			          <th></th>
			        </tr>
			      </thead>
			      <tbody>
			      	<?php foreach ($games as $app) {

			      		if($app['type'] == "p1"){

			      			$priority = '<span class="label label-danger">P1</span>';

			      		} else if($app['type'] == "p2"){

			      			$priority = '<span class="label label-warning">P2</span>';

			      		} else if($app['type'] == "p3"){

			      			$priority = '<span class="label label-success">P3</span>';

			      		}
			      		
			      		echo '<tr>
			          		  <th scope="row">'.$app['title'].'</th>
			          		  <td>'.$priority.'</td>
			        		  </tr>';

			      	} ?>
			      </tbody>
			    </table>


			</div>
		</section>
		<!-- //wam-apps -->

<?php require_once 'footer.php'; ?>
