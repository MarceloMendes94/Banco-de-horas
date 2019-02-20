<?php
    Class Atividade{
        private $data;
        private $hora_inicio;
        private $hora_fim;
        private $descricao;
        
        /**
         * 
         * Getters and Setters
         */
            public function getDescricao() {
                    return $this->descricao;
            }

            public function setDescricao($descricao){
                    $this->descricao = $descricao;
                    return $this;
            }
    
            public function getHora_fim(){
                    return $this->hora_fim;
            }

            public function setHora_fim($hora_fim){
                    $this->hora_fim = $hora_fim;
                    return $this;
            }

            public function getHora_inicio(){
                    return $this->hora_inicio;
            }

            public function setHora_inicio($hora_inicio){
                    $this->hora_inicio = $hora_inicio;
                    return $this;
            }

            public function getData(){
                    return $this->data;
            }

            public function setData($data){
                    $this->data = $data;
                    return $this;
            }
            



    }
?>