<?php

 /*** create the database registry object ***/
 /*Os c�digos s�o apenas exemplos! N�O S�O DE AUTORIA DO GRUPO!*/

	class router {
		/*
		* @the registry
		*/
		private $registry;

		/*
		* @the controller path
		*/
		private $path;

		private $args = array();

		public $file;

		public $controller;

		public $action;

		function __construct($registry) {
			$this->registry = $registry;
		}
	}
?>