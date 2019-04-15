<?php
    require_once('pessoa.php');
    class Coordenador extends Pessoa{

        //construtor
        public function Coordenador ( $nome, $sobrenome, $email, $senha, $matricula){
            $this->nome      = $nome;
            $this->sobrenome = $sobrenome;
            $this->email     = $email;
            $this->senha     = $senha;
            $this->matricula = $matricula;
        }
    }
?>