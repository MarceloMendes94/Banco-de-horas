<?php
    require_once 'Membro.php';
    class Coordenador extends Membro{
        //empty
        private $projeto;
        function Coordenador($m,$n,$s,$p){   
            $this->setMatricula($m);
            $this->setNome($n);
            $this->setSobrenome($s);            
            $this->setProjeto($p);
        }

        /**
         * Get the value of projeto
         */ 
        public function getProjeto()
        {
                return $this->projeto;
        }


        public function setProjeto($projeto)
        {
                $this->projeto = $projeto;

                return $this;
        }
    }
    /*
        $coor = new Coordenador(002,'carlos','lins',0);
        var_dump($coor);
        echo $coor->getNome()." ".$coor->getSobrenome();
    */

?>