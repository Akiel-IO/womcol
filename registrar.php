<?php

include("con_db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['typeDoc']) >= 1 && strlen($_POST['doc']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['cel']) >= 1 && strlen($_POST['mymap']) >= 1 && strlen($_POST['typePlan']) >= 1 && strlen($_POST['tengoActual']) >= 1){
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $typeDoc = trim($_POST['typeDoc']);
        $doc = trim($_POST['doc']);
        $email = trim($_POST['email']);
        $cel = trim($_POST['cel']);
<<<<<<< HEAD
        $mymap = trim($_POST['mymap']);
=======
        $operador = trim($_POST['operador']);
>>>>>>> parent of b841273 (temporal)
        $typePlan = trim($_POST['typePlan']);
        $tengoActual = trim($_POST['tengoActual']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO registros(nombres, apellidos, tipo_documento, numero_documento, email, celular, operador_actual, interes, sv_actual, fecha_registro) VALUES ('$name','$lastname','$typeDoc','$doc','$email','$cel','$mymap','$typePlan','$tengoActual','$fechareg')";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado){
            ?>
            <h3 class="ok">Envio Exitoso</h3>
            <?php
        }else {
            ?>
            <h3 class="bad">Error</h3>
            <?php
        }
    }else {
        ?>
            <h3 class="bad">Por favor complete los campos en blanco</h3>
            <?php
    }
}

?>