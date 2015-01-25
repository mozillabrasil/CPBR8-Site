<?php

	$authors = [

		0  => ['name' => 'Ricardo Panaggio'],
		1  => ['name' => 'Melissa Devens'],
		2  => ['name' => 'Guilherme Berghauser'],
		3  => ['name' => 'Samuel Moraes'],
		4  => ['name' => 'Westerley Campos'],

	];

	// Type:
	// 1 = Oficina
	// 2 = Palestra(em palco oficial)
	// 3 = Hackaton
	// 4 = Atividade na nossa bancada

	$cronograma = [

		["title" 		=> "The vengeance of XMPP: O que as forças inimigas tem de melhor?",
		 "description"	=> "Atualmente muitas pessoas utilizam o Telegram e o WhatsApp no seu dia-a-dia, porém pelo simples fato de eles serem plataformas fechadas e centralizadas não sabemos o que é feito com os nossos dados que passam através de tais serviços. Como alternativa segura e aberta, nossa comunidade está utilizando o protocolo XMPP com o seu próprio servidor, mas, para tal ferramenta ser utilizada precisamos que seja tão completa e fácil quanto suas alternativas do lado negro da força. Por isso precisamos de sua ajuda! Junte-se a nós, vamos instalar, configurar, revolver bugs e instalar novas features para tornar o nosso servidor XMPP tão bom quanto o Telegrão e o Zap Zap.",
		 "authors"		=> [0, 3],
		 "date"			=> 3,
		 "time"			=> "19:00",
		 "end-time"		=> "1:00",
		 "place"		=> "Nossa Bancada",
		 "type"			=> 4],

		["title" 		=> "Killers: Quais serviços devemos matar? Quem devemos chamar?",
		 "description"	=> "Nossa comunidade preza por sempre utilizar Software Livre. Nessa busca constante nosso servidor está rodando diversos serviços, muitos não estão sendo utilizados. Faremos uma limpeza no nosso servidor e precisamos da sua ajuda para decidirmos quais serviços podemos remover e quais alternativas abertas podemos utilizar como alternativa para os Softwares Proprietários atualmente utilizados pela comunidade.",
		 "authors"		=> 3,
		 "date"			=> 3,
		 "time"			=> "17:00",
		 "end-time"		=> "17:30",
		 "place"		=> "Palco 666",
		 "type"			=> 2]

	];

	// Variáveis globais

	date_default_timezone_set ( 'America/Sao_Paulo' );

	$cpbr_start = strtotime("03-02-2015");
	$cpbr_end = strtotime("08-02-2015");

	$now = strtotime("now");

	// Verificar se a CPBR está rolando

	if (($now >= $cpbr_start) && ($now <= $cpbr_end)){

		$hoje = date('d');

	} else if ($now <= $cpbr_start) {

		$hoje = 3;

	} else if ($now >= $cpbr_end) {

		$hoje = 8;

	}

	function to_timestamp(){



	}



?>