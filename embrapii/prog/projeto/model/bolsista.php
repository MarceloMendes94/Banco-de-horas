<?php
    require_once('pessoa.php');
    class Bolsista extends Pessoa{

        //construtor
        public function Bolsista ( $nome, $sobrenome, $email, $senha, $matricula){
            $this->nome      = $nome;
            $this->sobrenome = $sobrenome;
            $this->email     = $email;
            $this->senha     = $senha;
            $this->matricula = $matricula;
        }
    }
?>