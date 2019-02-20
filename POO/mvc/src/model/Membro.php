<?php
Class  Membro{
    //atributos 
    var $matricula;
    var $nome;
    var $sobrenome;

        
        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
            return $this;            
        }
 
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
            return $this;
        }
        
        public function getMatricula()
        {
            return $this->matricula;
        }
 
        public function setMatricula($matricula)
        {
            $this->matricula = $matricula;
            return $this;
        }
    }

   
?>