<?php
    class Fiador{
        private $codigo;
        private $nome;       


        
        /**
         * Construtor
         */
        public function Fiador($c,$n){
                $this->nome = $n;
                $this->codigo = $c;
        }
        /**
         * funções
         */
        public function show_f(){
                echo   $this->nome." ".$this->codigo;
        }


        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }
 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }
    }
?>
