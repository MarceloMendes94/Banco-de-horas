<?php
    
   require_once '../../connection/factoryConn.php';

    class Alterar{
        //modelo anemico
        var $fields;
        function __construct() {
            //session_start();
            $fk     = $_SESSION['fkey'];
            $conn = new Connection();
            $dados=$conn->mostrarAtividades($fk);
            $saida="";
            $i=0;
            $tam=sizeof($dados);
            //loop
            for($i;$i<$tam;$i++){
                $linha=$dados[$i];
                $list=explode("/", $linha["dia"]);
                $form="";
                $form=$form . "<br>  <div class='card'><div class='card-body'>";
                $form=$form . "<form method='post'"
                            . "action='../../control/realizarAlteracao.php'>";
                $form=$form . "<input type='hidden' "
                            . "value='".$linha["id"]."'"
                            . "name='id'>";
                $form=$form . "<label>Data</label>"
                            . "<br> "
                            . "<input type='date'"
                            . "value='".$list[2]."-".$list[1]."-".$list[0]."'"
                            . "name='data'>"
                            . "<br>";                
                $form=$form . "<label>Descrição</label>"
                            . "<br> "
                            . "<input type='text'"
                            . "value='".utf8_encode($linha["descricao"])."'"
                            . "name='desc'"
                            . "style='width:100%;'>"
                            . "<br>"
                            . "<br>";
                $form=$form . "<label>Hora de inicio</label> "
                            . "<input type='time'"
                            . "value='".$linha["hora_inicio"]."'"
                            . "name='inicio'>"
                            . "<br>";
                $form=$form . "<label>Hora de fim</label>"
                            . "<input type='time'"
                            . "value='".$linha["hora_fim"]."'"
                            . "name='fim'>"
                            . "<br>";
                $form=$form . "<button type='submit'> Alterar </button>"
                            . "<br>"
                            . "</form>"
                            . "</div></div>";
                $saida=$saida.$form;
                $form='';
            } 
            $this->fields=$saida;
        }//fim construtor
    }
    
    
