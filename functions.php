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

		0 => ['name'		=> 'Ricardo Panaggio',
			  'biography'	=> 'Ricardo Panaggio é ativista pela liberdade e vive falando de privacidade, software livre, liberdade e afins. Membro da comunidade Mozilla desde o início, acompanha vários de seus projetos desde seu estágio embrionário, como o Firefox OS e o Webmaker. Já proferiu diversas palestras e cursos sobre assuntos relacionados com open web e software livre.',
			  'photo'		=> 'panaggio.jpg',
			  'links'		=> [

			  		'envelope'	=> 'mailto:panaggio@panaggio.net'

			  ]],

		1 => ['name'		=> 'Melissa Devens',
			  'biography'	=> 'Apaixonada pela web desde que era ainda menor, escolheu fazer dela seu meio de trabalho. Melissa Devens é formada em Comunicação Digital e trabalhou como social media e web designer em empresas como Grêmio FBPA e Grupo RBS. Voluntária da Mozilla Brasil desde o começo de 2014, já faz parte de diversos projetos, entre eles o Webmaker, pelo qual organizou diversos eventos pelo Brasil. Hoje luta por uma web aberta e pelo bem estar animal, afinal, a web é feita de gatinhos!',
			  'photo'		=> 'mel.jpg',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:mel@mozillabrasil.org.br',
			  		'globe' 	=> 'http://melc.at',
			  		'github'	=> 'http://github.com/melissacd',
			  		'twitter'	=> 'http://twitter.com/mel__',
			  		'facebook'	=> 'http://facebook.com/melissa.devens'

			  ]],

		2 => ['name'		=> 'Samuel Moraes',
			  'biography'	=> 'Headbanguer, Student, Mozillian, Businessman, Programmer and SysAdmin. Work as volunteer in the Mozilla Brasil community infrastructure and Marketing. Speaker on some FOSS events on Brazil(like Latinoware and FISL).',
			  'photo'		=> 'samuelmoraes.jpg',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:samuel@samuelmoraes.com',
			  		'globe' 	=> 'http://samuelmoraes.com',
			  		'github'	=> 'http://github.com/samuelmoraesf',
			  		'comments-o'=> 'http://social.samuelmoraes.com'

			  ]],

		3 => ['name'		=> 'Guilherme Berghauser',
			  'biography'	=> 'Geógrafo formado pela UNIOESTE - Universidade Estadual Do Oeste do Paraná, estudante de Sistema de Informação pela UTFPR – Universidade Tecnológica Federal do Paraná, voluntário da Mozilla (Mozillian), participa do projeto Firefox Student Ambassador, líder do Club Firefox de Pato Branco – PR e membro do grupo de usuários de Software Livre PatoLivre, Sócio-Fundador da QiLeverage empresa especializada no desenvolvimento de softwares educacionais, apaixonado por tecnologia, educação e software livre, foi professor durante sete anos e nos últimos quatro anos se dedica ao desenvolvimento web e mobile.',
			  'photo'		=> 'guilherme.jpg',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:tortoyoyo@gmail.com',
			  		'globe' 	=> 'http://softwarelivre.org/tortoyo/blog',
			  		'github'	=> 'http://github.com/tortoyoyo',
			  		'twitter'	=> 'http://twitter.com/tortoyo',
			  		'facebook'	=> 'http://www.facebook.com/tortoyo'

			  ]],

		4 => ['name'		=> 'André Garzia',
			  'biography'	=> 'Andre Garzia é voluntário da Mozilla focado principalmente no Firefox OS e desenvolvimento de Open Web Apps ele é autor de dois livros sobre o sistema e membro do Firefox OS Launch Team.',
			  'photo'		=> 'andre.jpg',
			  'links'		=> [

			  		'twitter'	=> 'http://twitter.com/agarzia',
			  		'globe'		=> 'http://andregarzia.com',
			  		'github'	=> 'http://github.com/soapdog',

			  ]],

		5 => ['name'		=> 'Qaiq "Thiaguinho" Alves',
			  'photo'		=> 'qaiq.jpg',
			  'biography'	=> 'Pagodeiro da galera, faz parte do Creative Team da Mozilla Brasil e contribui com divulgação e evangelismo e palestras sobre desenvolvimento de apps para Firefox OS. Designer por paixão e vocação, é especialista em experiência de usuário e faz também algumas coisas legais com CSS. Ama deixar o ambiente agradável e tem piadas de gostos duvidosos.',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:qaiq@mozillabrasil.com.br',
			  		'globe' 	=> 'http://qaiq.com.br',
			  		'github'	=> 'http://github.com/qaiqalves',
			  		'twitter'	=> 'http://twitter.com/QaiqAlves',
			  		'facebook'	=> 'http://www.facebook.com/qaiqalves'

			  ]],
			  
		6 => ['name'		=> 'Cynthia Pereira',
			  'photo'		=> 'cynthia.jpg',
			  'biography'	=> 'Participa da Comunidade Mozilla Brasil desde Setembro de 2014 como voluntária contribuindo principalmente com os projetos WoMoz e WAM. Também é organizadora do São Paulo Mozilla Brasil Meetup, grupo destinado à todas as pessoas interessadas em participar e contribuir com a Comunidade Mozilla Brasil e os projetos e tecnologias desenvolvidos pela Mozilla.',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:cynthipereira@mozillabrasil.org.br',
			  		'globe' 	=> 'http://cynthiapereira.com',
			  		'github'	=> 'http://github.com/cynthiapereira'

			  ]],

		7 => ['name'		=> 'Mariana Mioto',
			  'photo'		=> 'mariana.jpg',
			  'biography'	=> 'Adoro lidar com pessoas, organizar eventos, aprender coisas, ensinar coisas, hackear coisas! Sou membro do Grupo de Pesquisa em Auxílio ao Diagnóstico por Imagem (GPADI), da USP. Pós-graduanda em Bioengenharia pela EESC – USP, formada em Informática Biomédica pela FMRP; desenvolvedora e pesquisadora na área de processamento de imagens médicas. Trabalho com desenvolvimento de sistemas e bioinformática em grupos de pesquisa da FMRP. Voluntária da Mozilla, participante em alguns projetos como o SUMO e Womoz. Entusiasta da web aberta, inovadora e que seja comprometida com as pessoas dentro dela. Além de ter uma veia empreendedora, mas sempre visando ajudar pessoas.',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:mariana.mioto@gmail.com',
			  		'github'	=> 'http://github.com/marianamioto',
			  		'twitter'	=> 'http://twitter.com/mari_mioto',
			  		'facebook'	=> 'http://www.facebook.com/marimioto'

			  ]],

		8 => ['name'		=> 'Westerley Campos',
			  'photo'		=> 'westerley.jpg',
			  'biography'	=> 'Formado em Tecnologia em Redes de Computadores, voluntário na Comunidade Mozilla Brasil desde de outubro de 2014 e com contribuição na parte de divulgação/evangelismo e também as vezes na parte de localização. Participei de alguns eventos de SLs como o FLISOL/DF 2012 e 2013 (esse como palestrante) e 9° Conferência Latino Americana de Software Livre(Latinoware) em Foz do Iguaçu/PR em 2012. Sempre em busca de conhecimentos novos com o foco de poder ajudar e divulgar esses conhecimentos de forma livre e aberta a todos que desejam aprender.',
			  'links'		=> [

			  		'envelope' 	=> 'mailto:westdfcampos@gmail.com',
			  		'twitter'	=> 'http://twitter.com/WesterleyCampos ',
			  		'facebook'	=> 'http://www.facebook.com/westerley.campos'

			  ]],

	];



	// I C O N E S
	//
	// Icones utilizados para cada tipo de atividade

	$icons = [

		1 => 'users',
		2 => 'slideshare',
		3 => 'rocket',
		4 => 'bullhorn',
		5 => 'child',

	];



	// N O M E  D O S  T I P O S

	$types = [

		1 => 'Oficina',
		2 => 'Palestra',
		3 => 'Hackaton',
		4 => 'Atividade na nossa bancada',
		5 => 'Self Services'

	];



	// C R O N O G R A M A
	//
	// title (string)
	// description (string)
	// authors (array/integer)
	// 		Array = Múltiplos Autores
	//		Int  = Único Autor
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
	//		5 = Self-Service

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
		 "time"			=> "01:00",
		 "end-time"		=> "02:00",
		 "place"		=> "Palco Urano",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/programando-com-o-apache-cordova-para-diversas-plataformas-cpbr8"],

    ["title"        => "WoMozCoffee",
     "description"  => "Durante uma hora vamos reunir algumas meninas  interessadas em aprender sobre os projetos da Mozilla em especial sobre o  WoMoz para conversar, tomar um cafezinho e comer uns biscoitinhos.",
     "authors" => 1,
     "date" => 5,
     "time" => "17:30",
     "end-time" => "18:00",
     "place" => "Nossa mesa",
     "type" => 4],

    ["title"        => "WoMozCoffee",
     "description"  => "Durante uma hora vamos reunir algumas meninas  interessadas em aprender sobre os projetos da Mozilla em especial sobre o  WoMoz para conversar, tomar um cafezinho e comer uns biscoitinhos.",
     "authors" => 1,
     "date" => 7,
     "time" => "17:00",
     "end-time" => "17:30",
     "place" => "Nossa mesa",
     "type" => 4],

		["title" 		=> "Desenvolvedores Firefox OS: O encontro",
		 "description"	=> "Nesta palestra apresentaremos uma visão geral para desenvolvedores da plataforma Firefox OS, começando pelos motivos que fundamentaram a criação do sistema e seu potencial transformador para países emergentes. Em seguida, aprofundaremos a conversa ao mostrar como criar aplicativos e monetizá-los. Mostraremos também detalhes técnicos como chamadas das WebAPIs, workflow de debug das apps e o processo completo de criação e distribuição de um app.",
		 "authors"		=> 5,
		 "date"			=> 4,
		 "time"			=> "23:00",
		 "end-time"		=> "00:00",
		 "place"		=> "Palco Júpiter",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/desenvolvedores-firefox-os-o-encontro-cpbr8/"], 

		["title" 		=> "Firefox OS First: Desenvolvendo para Firefox OS e portando para outras plataformas",
		 "description"	=> "Nessa palestra mostraremos um workflow de desenvolvimento que permite a construção de apps para Firefox OS e entrega para diversos sistemas como Firefox OS, Android e iOS. A ideia é mostrar como o desenvolvimento de Open Web Apps reduz o custo de tempo e dinheiro na produção de um app e maximiza sua capacidade de entrega. Além disso mostraremos a importância da defesa da web como plataforma e o que isso significa para o nosso futuro enquanto desenvolvedores.",
		 "authors"		=> 4,
		 "date"			=> 5,
		 "time"			=> "16:30",
		 "end-time"		=> "17:30",
		 "place"		=> "Palco Júpiter",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/firefox-os-first-desenvolvendo-para-firefox-os-e-portando-para-outras-plataformas-cpbr8"],

		["title" 		=> "Envolva-se: como você pode contribuir para a comunidade Mozilla Brasil.",
		 "description"	=> "Esta palestra tem como objetivo principal mostrar às pessoas que qualquer um pode colaborar com uma comunidade de software livre. Você não precisa saber escrever código para contribuir com a Mozilla, basta gostar e querer defender a web.",
		 "authors"		=> 2,
		 "date"			=> 6,
		 "time"			=> "00:00",
		 "end-time"		=> "01:00",
		 "place"		=> "Palco Saturno",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/envolva-se-como-voce-pode-contribuir-para-a-comunidade-mozilla-brasil-cpbr8"],

		["title" 		=> "Women & Mozilla - Conheça o WoMoz e saiba como envolver-se",
		 "description"	=> "Women & Mozilla (WoMoz) é uma comunidade composta de membros de diversos projetos de software livre que dedicam-se principalmente a aumentar o envolvimento e a visibilidade de mulheres nesses projetos, em especial na Mozilla, e em aumentar o número de contribuidoras. Tecnologia deve ser aberta, livre e acessível da mesma forma para homens e mulheres. O projeto é um exemplo de como promover e dar visibilidade as minorias. Qualquer pessoa pode participar do WoMoz, não importa o gênero, orientação sexual, trabalho, etc. Nós acreditamos que o software livre precisa de mais mulheres! :) Contribua conosco! :)",
		 "authors"		=> 1,
		 "date"			=> 6,
		 "time"			=> "17:30",
		 "end-time"		=> "18:30",
		 "place"		=> "Palco Urano",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/women-mozilla-womoz-cpbr8/"],

		["title" 		=> "Women & Mozilla - Conheça o WoMoz e saiba como envolver-se (Repetição)",
		 "description"	=> "Women & Mozilla (WoMoz) é uma comunidade composta de membros de diversos projetos de software livre que dedicam-se principalmente a aumentar o envolvimento e a visibilidade de mulheres nesses projetos, em especial na Mozilla, e em aumentar o número de contribuidoras. Tecnologia deve ser aberta, livre e acessível da mesma forma para homens e mulheres. O projeto é um exemplo de como promover e dar visibilidade as minorias. Qualquer pessoa pode participar do WoMoz, não importa o gênero, orientação sexual, trabalho, etc. Nós acreditamos que o software livre precisa de mais mulheres! :) Contribua conosco! :)",
		 "authors"		=> 1,
		 "date"			=> 7,
		 "time"			=> "00:00",
		 "end-time"		=> "01:00",
		 "place"		=> "Palco Urano",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/women-mozilla-womoz-cpbr8"],

		["title" 		=> "Webmaker: Faça algo incrível com a Web!",
		 "description"	=> "A web é a segunda língua do mundo, e uma habilidade vital no século 21. É crucial que nós demos às pessoas as habilidades que elas precisam para entender, modelar e participar ativamente desse mundo, ao invés de apenas consumi-lo passivamente. Nessa palestra, serão apresentadas ferramentas e materiais para ensinar a web, o padrão de alfabetização para a web, quem está por trás de tudo isso, como estamos criando uma comunidade de criadores para a Web no Brasil e como você pode fazer parte dela.",
		 "authors"		=> [0, 1],
		 "date"			=> 6,
		 "time"			=> "23:00",
		 "end-time"		=> "00:00",
		 "place"		=> "Palco Saturno",
		 "type"			=> 2,
		 "campusero"	=> "http://campuse.ro/events/campus-party-brasil-2015/talk/webmaker-faca-algo-incrivel-com-a-web-cpbr8"],
		 
		["title" 		=> "Feira de troca de addons",
		 "description"	=> "O que torna o Firefox um dos melhores navegadores é a sua vasta lista de extensões. Nessa atividade informal, cada um apresentará os addons que utiliza e conhecerá novos que podem facilitar nosso dia-a-dia.",
		 "authors"		=> [2, 0],
		 "date"			=> 4,
		 "time"			=> "13:30",
		 "end-time"		=> "14:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 4],
		 
		["title" 		=> "O que me irrita no Firefox: terapia de grupo",
		 "description"	=> "Roda de conversas para que as pessoas tragam suas frustrações e problemas no uso cotidiano do Firefox, desabafem e compartilhem soluções para assim tornarmos o Firefox um excelente navegador!",
		 "authors"		=> [2, 1, 0, 6, 7],
		 "date"			=> 5,
		 "time"			=> "14:30",
		 "end-time"		=> "15:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 4],
		 
		["title" 		=> "Oficina de localização de artigos do MDN",
		 "description"	=> "Você é desenvolvedor web? Sabe inglês? Gostaria de contribuir para a melhor documentação de desenvolvimento web que existe? Então venha participar da maratona de tradução e localização do MDN, a melhor documentação para desenvolvedores web da internet inteira!",
		 "authors"		=> [0, 7, 1, 6],
		 "date"			=> 4,
		 "time"			=> "14:30",
		 "end-time"		=> "15:30",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina: Criando Jogos em HTML5 para Firefox OS",
		 "description"	=> "Aprenda a desenvolver jogos em HTML5 para FirefoxOS utilizando a biblioteca Pharser, venha aprender e se divertir criando um jogo com algum tema da Mozilla Firefox",
		 "authors"		=> [2, 3],
		 "date"			=> 4,
		 "time"			=> "16:30",
		 "end-time"		=> "18:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina: Firefox & Desenvolvedores",
		 "description"	=> "Nessas oficinas rapidas vamos botar a mão nas ferramentas de  desenvolvimento do Firefox, conhecer a versao do Firefox especifica para  desenvolvedores e outras coisas que a Mozilla tem feito por você, desenvolvedor.",
		 "authors"		=> [0, 6, 3],
		 "date"			=> 4,
		 "time"			=> "19:30",
		 "end-time"		=> "20:30",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina: Conheça o Webmaker",
     "description"  => "Gosta de ensinar? Gosta de aprender? Então venha conhecer o projeto da Mozilla que tem como objetivo ensinar a web para qualquer pessoa.",
		 "authors"		=> [0, 1, 8, 6, 7],
		 "date"			=> 4,
		 "time"			=> "20:30",
		 "end-time"		=> "21:30",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],

		["title" 		=> "WoMoz para o Sumo",
		 "description"	=> "Quer ajudar usuarios de Firefox? Sabe inglês? Entao venha participar da maratona de traduçao do SUMO, onde artigos do suporte da Mozilla serao traduzidos e localizados para o Portugues do Brasil!",
		 "authors"		=> [7, 1, 6, 8],
		 "date"			=> 7,
		 "time"			=> "13:00",
		 "end-time"		=> "14:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina de localização e atualização de artigos do SUMO",
		 "description"	=> "Quer ajudar usuarios de Firefox? Sabe inglês? Entao venha participar da maratona de traduçao do SUMO, onde artigos do suporte da Mozilla serao traduzidos e localizados para o Portugues do Brasil!",
		 "authors"		=> [7, 1, 6, 8],
		 "date"			=> 5,
		 "time"			=> "12:00",
		 "end-time"		=> "13:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],

		["title" 		=> "Oficina: Webmaker save the Cats =^.^=",
		 "description"	=> "Aprenda a produzir cartazes super divertidos para salvar animais perdidos ou abandonados com a ferramenta Thimble. Você não precisa ter nenhum conhecimento em ferramentas de edição gráfica ou desenvolvimento para a web.",
		 "authors"		=> [0, 1, 6, 7],
		 "date"			=> 5,
		 "time"			=> "18:00",
		 "end-time"		=> "19:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Gravação do Podcast da comunidade (episódio #1)",
		 "description"	=> "Em Breve...",
		 "authors"		=> [0, 1, 6, 7],
		 "date"			=> 5,
		 "time"			=> "20:00",
		 "end-time"		=> "22:30",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 4],
		 
		["title" 		=> "Oficina de localização do Webmaker",
		 "description"	=> "Qualquer pessoa que saiba bem português e inglês e queira contribuir com a Mozilla ou Webmaker",
		 "authors"		=> [0, 1, 8, 7],
		 "date"			=> 6,
		 "time"			=> "13:00",
		 "end-time"		=> "14:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Softwares abertos alternativos aos proprietários, quais são? por que usar?",
		 "description"	=> "Muitas  vezes não é uma questão de segurança/privacidade, mas sim de custo X  beneficio, muitas aplicações livres são tão boas quanto e até melhores  que as proprietárias. Nessa atividade apresentaremos tais aplicações  como alternativa aos serviços fechados que utilizamos no nosso dia-a-dia.",
		 "authors"		=> [2, 0, 3, 5],
		 "date"			=> 6,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 4],
		 
		["title" 		=> "Por que você deveria testar o Firefox no seu Android?",
		 "description"	=> "Em Breve...",
		 "authors"		=> [0, 8, 3, 2],
		 "date"			=> 6,
		 "time"			=> "20:30",
		 "end-time"		=> "21:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 4],

		["title" 		=> "Oficina: Origamimaker",
		 "description"	=> "Em Breve...",
		 "authors"		=> [0, 1, 7],
		 "date"			=> 6,
		 "time"			=> "15:00",
		 "end-time"		=> "16:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina: Conheça o Webmaker",
		 "description"	=> "Em Breve...",
		 "authors"		=> [0, 1, 7],
		 "date"			=> 7,
		 "time"			=> "15:00",
		 "end-time"		=> "16:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],
		 
		["title" 		=> "Oficina: Appmaker",
		 "description"	=> "Em Breve...",
		 "authors"		=> [0, 1, 2, 7],
		 "date"			=> 7,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 1],

		["title" 		=> "Suporte aos participantes da Hackathon",
		 "description"	=> "Durante todo o período em que a hackathon estiver acontecendo, estaremos na bancada dando suporte aos participantes.",
		 "authors"		=> [0, 1, 2, 7],
		 "date"			=> 7,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 5],

		["title" 		=> "Criação de apps de utilidade pública",
		 "description"	=> 'Do dia 04 até o dia 06 de fevereiro estaremos em nossa bancada durante 2 horas, desenvolvendo aplicativos de utilidade pública para a Marketplace, você pode conferir a lista de apps que precisam ser desenvolvidos para o Firefox OS <a href="apps">aqui</a>.',
		 "authors"		=> [0, 1, 2, 7],
		 "date"			=> 7,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 5],

		["title" 		=> "Exército dos incríveis",
		 "description"	=> "Venha ajudar MUITO no Twitter! Respondendo perguntas sobre o Firefox, para usuários do Twitter junte-se ao Exercito dos Incriveis.",
		 "authors"		=> [0, 1, 2, 7],
		 "date"			=> 7,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 5],


		["title" 		=> "Fórum de suporte",
		 "description"	=> "O suporte da Mozilla é formado por uma comunidade de voluntários empenhada em ajudar usuários em todo o mundo. Junte-se a nós nessa aventura incrível! O fórum de suporte da Mozilla são perguntas sobre  o uso do Firefox, Firefox para Android, Firefox OS, Thunderbird ou  Webmaker, ou respostas sobre estas perguntas. Venha saber como ajudar.",
		 "authors"		=> [0, 1, 2, 7],
		 "date"			=> 7,
		 "time"			=> "16:00",
		 "end-time"		=> "17:00",
		 "place"		=> "Nossa Mesa",
		 "type"			=> 5],

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
