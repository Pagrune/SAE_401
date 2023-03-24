<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');

	$items = <<< HEREDOC
[
	{
		"article": "Suppositoire paracétamol 300 mg",
		"conditionnement": 12,
		"prix": 2.49,
		"popularité": 50,
		"stock": "Indisponible",
		"img": "img/suppo.jpg"
	},{
		"article": "Gel glissant facilitant l'insertion 200 ml",
		"conditionnement": 1,
		"prix": 2.49,
		"popularité": 50,
		"stock": "En stock",
		"img": "img/flacon.jpg"
	},{
		"article": "Suppositoire paracétamol 300 mg",
		"conditionnement": 24,
		"prix": 3.99,
		"popularité": 60,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire paracétamol 600 mg",
		"conditionnement": 12,
		"prix": 2.99,
		"popularité": 100,
		"stock": "Indisponible",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire paracétamol 600 mg",
		"conditionnement": 24,
		"prix": 4.99,
		"popularité": 30,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire constipation à la glycérine",
		"conditionnement": 20,
		"prix": 2.99,
		"popularité": 10,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire constipation à la glycérine",
		"conditionnement": 50,
		"prix": 4.99,
		"popularité": 40,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire constipation à la glycérine",
		"conditionnement": 100,
		"prix": 6.99,
		"popularité": 100,
		"stock": "Indisponible",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire crise hemorroïdaire",
		"conditionnement": 6,
		"prix": 1.99,
		"popularité": 20,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},
	{
		"article": "Suppositoire crise hemorroïdaire",
		"conditionnement": 12,
		"prix": 2.99,
		"popularité": 80,
		"stock": "En stock",
		"img": "img/suppo.jpg"
	},{
		"article": "Gel glissant facilitant l'insertion 200 ml",
		"conditionnement": 2,
		"prix": 3.49,
		"popularité": 100,
		"stock": "En stock",
		"img": "img/flacon.jpg"
	}
]
HEREDOC;

	echo $items;
?>