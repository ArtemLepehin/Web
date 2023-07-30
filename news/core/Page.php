<?php
	namespace Core;
	
	class Page
	{
		private $layout; 	//имя файла с макетом сайта
		private $title;		//тайтл страницы
		private $view;		//имя представления
		private $data;		//данные
		
		public function __construct($layout, $title = '', $view = null, $data = [])
		{
			$this->layout = $layout;
			$this->title  = $title;
			$this->view   = $view;
			$this->data   = $data;
		}
		
		public function __get($property)
		{
			return $this->$property;
		}
	}
