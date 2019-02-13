<?php
    class Fiador{
        private $codigo;
        private $nome;       

        /**
         * Getter and Setter
         */
        public function getNome()
        {
                return $this->nome;
        }
 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

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
         * Construtor
         */
        public function Fiador($c,$n){
            setNome($n);
            setCodigo($c);
        }



    }
?>
