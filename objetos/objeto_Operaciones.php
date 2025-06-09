<?php 
    require_once('../clases/Operaciones_basicas.php');
    //Creamos un objeto o instaciamos una clase
    $operaciones = new OperacionesBasicas();
    // $operaciones es un objeto de tipo OperacionesBasicas
    $operaciones->valor1 = $_POST['txt_valor1'];
    $operaciones->valor2 = $_POST['txt_valor2'];

    if(isset($_POST['btn-suma'])){
        echo $operaciones->sumar();
    }elseif(isset($_POST['btn-resta'])){
        echo $operaciones->restar();
    }elseif(isset($_POST['btn-multi'])){
        echo $operaciones->multiplicar();
    }elseif(isset($_POST['btn-div'])){
        echo $operaciones->dividir();
    }else{
        echo "No se ha seleccionado ninguna operacion";
    }


?>