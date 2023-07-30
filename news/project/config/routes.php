<?php
	use \Core\Route;
	
	return [
		new Route('', 'news', 'main'),				//главная страница новостей(1-я страница)
		new Route('/page/:page', 'news', 'main'),	//главная страница новостей(1-я и все остальные)
		new Route('/id/:id', 'news', 'newspage'),	//страница, показывающая конкретную новость
		new Route('/error', 'error', 'notFound'),	//страничка ошибки
	];
	
