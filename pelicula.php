<?php 
	
	class VideoClub{
		private $titulo;
		private $anio;
		private $director;
		private $alquilada;
		private $precio;
		private $fechaDevolucion;
		private $fechaAlquier;

		function __constructor(){
			$this -> titulo = "";
			$this -> anio = 0;
			$this -> director = "";
			$this -> alquilada = "";
			$this -> precio =0;
			$this -> fechaDevolucion = "";
			$this -> fechaAlquier = "";
		}

		public function getTitulo(){
			return $this -> titulo ;
		}
		public function setTitulo($titulo){
			$this -> titulo = $titulo;
		}
		public function getAnio(){
			return $this -> anio ;
		}
		public function setAnio($anio){
			$this -> anio = $anio;
		}
		public function getDirector(){
			return $this -> director ;
		}
		public function setDirector($director){
			$this -> director = $director;
		}
		public function getPrecio(){
			return $this -> precio;
		}
		public function setPrecio($precio){
			$this -> precio = $precio;
		}
		public function getAlquilada(){
			return $this -> alquilada;
		}
		public function setAlquilada($alquilada){
			$this -> alquilada = $alquilada;
		}
		public function getFechaDevolucion(){
			return $this -> fechaDevolucion;
		}
		public function setFechaDevolucion($fechaDevolucion){
			$this -> fechaDevolucion = $fechaDevolucion;
		}
		public function getFechaAlquiler(){
			return $this -> fechaAlquiler;
		}
		public function setFechaAlquiler($fechaAlquiler){
			$this -> fechaAlquiler = $fechaAlquiler;
		}

		public function calcularPago($fechaDevolucion,$fechaAlquiler){

			$objAlquiler = new DateTime($fechaAlquiler);
			$objDevolucion = new DateTime($fechaDevolucion);

			$dias = $objAlquiler ->diff($objDevolucion);

			$resultado = ($dias-5)*1000;

			return $resultado;

		}	

	}


 ?>