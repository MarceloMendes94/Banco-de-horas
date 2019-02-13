<?php
    require_once 'Fiador.php';
    Class Projeto{
        private $nome;
        private $descricao;
        private $codigo;        
        private $fiador;
        
        /**
         * Getter and Setter
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

        public function getDescricao()
        {
                return $this->descricao;
        }

        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getFiador()
        {
                return $this->$fiador;
        }

        public function setFiador($fiador)
        {
                $this->fiador = $fiador;

                return $this;
        }

        /**
         *  construtor
         */
        public function Projeto($nome,$descricao,$codigo,$fiador){
            setNome($nome);
            setDescricao($descricao);
            setCodigo($codigo);
            setFiador($fiador);
        }
        /**
         *  persistencia 
        */



    }
?>