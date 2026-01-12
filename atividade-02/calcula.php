<?php
    $nome = $_POST['nome'];
    $tarefa = $_POST['tarefa'];
    $atraso = $_POST['atraso'];

    if($tarefa >= 20 && $atraso <= 1){
        echo "desempenho excelente";
    }elseif($tarefa >= 10 && $tarefa <= 19 && $atraso <= 3){
        echo "desempenho regular";
    }else{
        echo "desempenho insastifatório";
    }

?>