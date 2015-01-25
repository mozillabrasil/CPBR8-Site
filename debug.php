<?php

	require_once 'functions.php';


	$tempo = "00:01";

	$tempop = explode(":", $tempo);

	echo date_interval_create_from_date_string('10 days');

?>