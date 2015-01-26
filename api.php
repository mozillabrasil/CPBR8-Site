<?php

	header('Content-Type: application/json');

	require_once 'functions.php';

	$api = [];

	foreach ($cronograma as $atividade) {
		
		$atividade['time'] = strtotime($atividade['date']."-02-2015 ".$atividade['time'].":00");
		$atividade['end-time'] = strtotime($atividade['date']."-02-2015 ".$atividade['end-time'].":00");

		$nowtmtmp = strtotime("now");

		if (($nowtmtmp >= $atividade['time']) && ($nowtmtmp < $atividade['end-time'])){

			unset($atividade['date']);

			if (gettype($atividade['authors']) == "array"){

				$tmpauth = [];

				foreach ($atividade['authors'] as $author) {
				
					array_push($tmpauth, ["id" => $author, "name" => $authors[$author]['name']]);

				}

			} else {

				$tmpauth = [["id" => $atividade['authors'], "name" => $authors[$atividade['authors']]['name']]];

			}

			$atividade['authors'] = $tmpauth;

			$atividade['type'] = ["id" => $atividade['type'], "name" => $types[$atividade['type']]];

			array_push($api, $atividade);

			echo json_encode($api);

		}

	}



?>