<?php 
    Class Atividadealo{
        $descricao;
        $hora_inicio;
        $hora_fim;
        $data;
        $validacao;
        $bolsista;

        public function Atividade($descricao,$hora_inicio,$hora_fim, $data, $validacao, $bolsista){
            $this->descricao    = $descricao;
            $this->hora_inicio  = $hora_inicio;
            $this->$hora_fim    = $hora_fim;
            $this->$data        = $data ;
            $this->$validacao   = $validacao;
            $this->$bolsista    = $bolsista;
        }
    }
?>