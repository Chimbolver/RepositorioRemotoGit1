<?php
    class Animal
    {
        private $nombre;
        private $especie;
        private $edad;
    
        public function __construct($nombre, $especie, $edad)
        {
            $this->nombre = $nombre;
            $this->especie = $especie;
            $this->edad = $edad;
        }
    
        public function getNombre()
        {
            return $this->nombre;
        }
    
        public function getEspecie()
        {
            return $this->especie;
        }
    
        public function getEdad()
        {
            return $this->edad;
        }
    }
?>