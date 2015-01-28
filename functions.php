<?php

	// D I A S
	//
	// Dias que ocorre o evento
	//
	// PS.: Eu sei que seria bem mais bonito percorrer com um while
	// mas pretendo utilizar isto em outros eventos e alguns deles
	// param por um dia ;)

	$dias = [3, 4, 5, 6, 7, 8];



	// A U T O R E S
	//
	// name (string)
	// biography (string)
	// photo (string)
	//		Nome do arquivo da foto(Ex.: thiaguinho.jpg), ela deverá estar em /assets/images/photos/
	// links (array - OPTIONAL) - Supported services:
	// 		facebook
	//		flickr
	//		git
	//		github
	//		linkedin
	//		slideshare
	//		wordpress
	//		soundcloud
	//		instagram
	//		foursquare
	//		openid
	//		skype
	//		steam
	//		trello
	//		twitter
	//		vine
	//		youtube
	//		whatsapp
	//		tumblr
	//		pinterest
	//		google-plus
	//
	//	DICA: utilize o nome do icone no Font-Awesome[1] para criar um link personalizado ;)
	//
	//	[1]: http://fortawesome.github.io/Font-Awesome/icons/
	//

	$authors = [

		0  => ['name'		=> 'Ricardo Panaggio',
			   'biography'	=> 'Ricardo Panaggio é ativista pela liberdade e vive falando de privacidade, software livre, liberdade e afins. Membro da comunidade Mozilla desde o início, acompanha vários de seus projetos desde seu estágio embrionário, como o Firefox OS e o Webmaker. Já proferiu diversas palestras e cursos sobre assuntos relacionados com open web e software livre.',
			   'photo'		=> 'panaggio.jpg',
			   'links'		=> [

			   		'envelope'	=> 'mailto:panaggio@panaggio.net'

			   ]],

		1  => ['name'		=> 'Melissa Devens',
			   'biography'	=> 'Apaixonada pela web desde que era ainda menor, escolheu fazer dela seu meio de trabalho. Melissa Devens é formada em Comunicação Digital e trabalhou como social media e web designer em empresas como Grêmio FBPA e Grupo RBS. Voluntária da Mozilla Brasil desde o começo de 2014, já faz parte de diversos projetos, entre eles o Webmaker, pelo qual organizou diversos eventos pelo Brasil. Hoje luta por uma web aberta e pelo bem estar animal, afinal, a web é feita de gatinhos!',
			   'photo'		=> 'mel.jpg',
			   'links'		=> [

			   		'envelope' 	=> 'mailto:mel@mozillabrasil.org.br',
			   		'globe' 	=> 'http://melc.at',
			   		'github'	=> 'http://github.com/melissacd',
			   		'twitter'	=> 'http://twitter.com/mel__',
			   		'facebook'	=> 'http://facebook.com/melissa.devens'

			   ]],

		2  => ['name'		=> 'Samuel Moraes',
			   'biography'	=> 'Headbanguer, Student, Mozillian, Businessman, Programmer and SysAdmin. Work as volunteer in the Mozilla Brasil community infrastructure and Marketing. Speaker on some FOSS events on Brazil(like Latinoware and FISL).',
			   'photo'		=> 'samuelmoraes.jpg',
			   'links'		=> [

			   		'envelope' 	=> 'mailto:samuel@samuelmoraes.com',
			   		'globe' 	=> 'http://samuelmoraes.com',
			   		'github'	=> 'http://github.com/samuelmoraesf',
			   		'comments-o'=> 'http://social.samuelmoraes.com'

			   ]],

		3  => ['name'		=> 'Guilherme Berghauser',
			   'biography'	=> 'Geógrafo formado pela UNIOESTE - Universidade Estadual Do Oeste do Paraná, estudante de Sistema de Informação pela UTFPR – Universidade Tecnológica Federal do Paraná, voluntário da Mozilla (Mozillian), participa do projeto Firefox Student Ambassador, líder do Club Firefox de Pato Branco – PR e membro do grupo de usuários de Software Livre PatoLivre, Sócio-Fundador da QiLeverage empresa especializada no desenvolvimento de softwares educacionais, apaixonado por tecnologia, educação e software livre, foi professor durante sete anos e nos últimos quatro anos se dedica ao desenvolvimento web e mobile.',
			   'photo'		=> 'guilherme.jpg',
			   'links'		=> [

			   		'envelope' 	=> 'mailto:tortoyoyo@gmail.com',
			   		'globe' 	=> 'http://softwarelivre.org/tortoyo/blog',
			   		'github'	=> 'http://github.com/tortoyoyo',
			   		'twitter'	=> 'http://twitter.com/tortoyo',
			   		'facebook'	=> 'http://www.facebook.com/tortoyo'

			   ]],

		4  => ['name'		=> 'André Garzia',
			   'biography'	=> 'Andre Garzia é voluntário da Mozilla focado principalmente no Firefox OS e desenvolvimento de Open Web Apps ele é autor de dois livros sobre o sistema e membro do Firefox OS Launch Team.',
			   'photo'		=> 'andre.jpg',
			   'links'		=> [

			   		'twitter'	=> 'http://twitter.com/agarzia',
			   		'globe'		=> 'http://andregarzia.com',
			   		'github'	=> 'http://github.com/soapdog',

			   ]],

		5  => ['name'		=> 'Qaiq Alves',
			   'biography'	=> ''],

	];



	// I C O N E S
	//
	// Icones utilizados para cada tipo de atividade

	$icons = [

		1 => 'users',
		2 => 'slideshare',
		3 => 'rocket',
		4 => 'bullhorn'

	];



	// N O M E   D O S   T I P O S

	$types = [

		1 => 'Oficina',
		2 => 'Palestra',
		3 => 'Hackaton',
		4 => 'Atividade na nossa bancada'

	];



	// C R O N O G R A M A
	//
	// title (string)
	// description (string)
	// authors (array/integer)
	// 		Array = Múltiplos Autores
	//		Int   = Único Autor
	// date (integer)
	//		Dia da atividade(somente o dia)
	// time (string)
	//		Hora de inicio da atividade(Ex.: 23:58)
	// end-time (string)
	//		Hora de término da atividade(Ex.: 23:58)
	// place (string)
	//		Local da atividade(Ex.: Palco 666, Nossa Mesa, Oficina7...)
	// type: (integer)
	// 		1 = Oficina
	// 		2 = Palestra(em palco oficial)
	// 		3 = Hackaton
	// 		4 = Atividade na nossa bancada

	$cronograma = [

		/* ["title" 		=> "",
		 "description"	=> "",
		 "authors"		=> ,
		 "date"			=> ,
		 "time"			=> "",
		 "end-time"		=> "",
		 "place"		=> "",
		 "type"			=> ], */

		["title" 		=> "Programando com o Apache Cordova para diversas plataformas",
		 "description"	=> "Um dos maiores problemas atuais, enfrentados pelos desenvolvedores móveis, é a grande quantidade de linguagens de programação para se desenvolver uma aplicação multiplataforma, problema esse que encarece qualquer projeto. O Apache Cordova é um framework livre multiplataforma que permite desenvolver aplicativos para os principais sistemas a partir do mesmo código, utilizando HTML5, CSS3 e JavaScript. Assim, esta palestra tem como objetivo demostrar o que pode ser feito com o Cordova, ensinar como iniciar o desenvolvimento de aplicativos móveis e fazer o deploy em celulares, utilizando exemplos práticos no sistema operacional Firefox OS.",
		 "authors"		=> 3,
		 "date"			=> 5,
		 "time"			=> "1:00",
		 "end-time"		=> "2:00",
		 "place"		=> "Palco Urano",
		 "type"			=> 2],

		["title" 		=> "Desenvolvedores Firefox OS: O encontro",
		 "description"	=> "Nesta palestra apresentaremos uma visão geral para desenvolvedores da plataforma Firefox OS, começando pelos motivos que fundamentaram a criação do sistema e seu potencial transformador para países emergentes. Em seguida, aprofundaremos a conversa ao mostrar como criar aplicativos e monetizá-los. Mostraremos também detalhes técnicos como chamadas das WebAPIs, workflow de debug das apps e o processo completo de criação e distribuição de um app.",
		 "authors"		=> 5,
		 "date"			=> 4,
		 "time"			=> "23:00",
		 "end-time"		=> "00:00",
		 "place"		=> "Palco Júpiter",
		 "type"			=> 2], 

		["title" 		=> "Firefox OS First: Desenvolvendo para Firefox OS e portando para outras plataformas",
		 "description"	=> "Nessa palestra mostraremos um workflow de desenvolvimento que permite a construção de apps para Firefox OS e entrega para diversos sistemas como Firefox OS, Android e iOS. A ideia é mostrar como o desenvolvimento de Open Web Apps reduz o custo de tempo e dinheiro na produção de um app e maximiza sua capacidade de entrega. Além disso mostraremos a importância da defesa da web como plataforma e o que isso significa para o nosso futuro enquanto desenvolvedores.",
		 "authors"		=> 4,
		 "date"			=> 5,
		 "time"			=> "16:30",
		 "end-time"		=> "17:30",
		 "place"		=> "Palco Júpiter",
		 "type"			=> 2],

		["title" 		=> "Envolva-se: como você pode contribuir para a comunidade Mozilla Brasil.",
		 "description"	=> "Esta palestra tem como objetivo principal mostrar às pessoas que qualquer um pode colaborar com uma comunidade de software livre. Você não precisa saber escrever código para contribuir com a Mozilla, basta gostar e querer defender a web.",
		 "authors"		=> 2,
		 "date"			=> 6,
		 "time"			=> "0:00",
		 "end-time"		=> "1:00",
		 "place"		=> "Palco Saturno",
		 "type"			=> 2],

		["title" 		=> "Women & Mozilla - Conheça o WoMoz e saiba como envolver-se #CPBR8",
		 "description"	=> "Women & Mozilla (WoMoz) é uma comunidade composta de membros de diversos projetos de software livre que dedicam-se principalmente a aumentar o envolvimento e a visibilidade de mulheres nesses projetos, em especial na Mozilla, e em aumentar o número de contribuidoras. Tecnologia deve ser aberta, livre e acessível da mesma forma para homens e mulheres. O projeto é um exemplo de como promover e dar visibilidade as minorias. Qualquer pessoa pode participar do WoMoz, não importa o gênero, orientação sexual, trabalho, etc. Nós acreditamos que o software livre precisa de mais mulheres! :) Contribua conosco! :)",
		 "authors"		=> 1,
		 "date"			=> 6,
		 "time"			=> "17:30",
		 "end-time"		=> "18:30",
		 "place"		=> "Palco Urano",
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

?>