<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $notafinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    
 
  

    if($notafinal > 7){
        echo "aprovado com a média:" . $notafinal;
    }
    elseif($notafinal >= 5 && $notafinal < 7){
        echo "recuperação" . $notafinal;
    }else{
        echo "reprovado" . $notafinal;
    }
}
?>