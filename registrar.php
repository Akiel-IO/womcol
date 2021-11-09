<?php

include("con_db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['typeDoc']) >= 1 && strlen($_POST['doc']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['cel']) >= 1 && strlen($_POST['operador']) >= 1 && strlen($_POST['typePlan']) >= 1 && strlen($_POST['tengoActual']) >= 1){
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $typeDoc = trim($_POST['typeDoc']);
        $doc = trim($_POST['doc']);
        $email = trim($_POST['email']);
        $cel = trim($_POST['cel']);
        $operador = trim($_POST['operador']);
        $typePlan = trim($_POST['typePlan']);
        $tengoActual = trim($_POST['tengoActual']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO registros(nombres, apellidos, tipo_documento, numero_documento, email, celular, operador_actual, interes, sv_actual, fecha_registro) VALUES ('$name','$lastname','$typeDoc','$doc','$email','$cel','$operador','$typePlan','$tengoActual','$fechareg')";
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

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL =>'https://190.84.119.167/ipdialbox/api_campaing.php?token=7b69645f6469737472697d2d3230323131313039313632303131&action=insert_json&type_campaing=predictive&campaing=4547',
    CURLOPT_RETURNTRANSFER => true ,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true ,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '[ { "nombre_cliente": "name", "apellido_cliente": "lastname", "tipo_doc": "typeDoc", "id_cliente": "doc", "edad": "", "sexo": "", "pais": "", "departamento": "", "ciudad": "", "zona": "", "direccion": "", "opt1": "operador", "opt2": "typePlan", "opt3": "tengoActual", "opt4": "", "opt5": "", "opt6": "", "opt7": "", "opt8": "", "opt9": "", "opt10": "", "opt11": "", "opt12": "", "tel1": "cel", "tel2": "", "tel3": "", "tel4": "", "tel5": "", "tel6": "", "tel7": "", "tel8": "", "tel9": "", "tel10": "", "tel_extra": "", "email": "email", "rellamada": "", "rellamada_tel": "", "rellamada_status": "" } ]' ,
    CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
    )));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;
}

?>