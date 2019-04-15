<?php
    require_once('pessoa.php');
    class Orientador extends Pessoa{
        //construtor
        public function Orientador ( $nome, $sobrenome, $email, $senha, $matricula){
            $this->nome      = $nome;
            $this->sobrenome = $sobrenome;
            $this->email     = $email;
            $this->senha     = $senha;
            $this->matricula = $matricula;
        }
    }
?>