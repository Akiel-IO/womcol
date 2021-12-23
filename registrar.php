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
}

  $url = 'https://wv200.91.222.198.wolkvox.com/api/v2/campaign.php?api=add_record&amp;type_campaign=predictive&amp;campaign_id=4638',
  CURLOPT_RETURNTRANSFER =&gt; true,
  CURLOPT_ENCODING =&gt; '',
  CURLOPT_MAXREDIRS =&gt; 10,
  CURLOPT_TIMEOUT =&gt; 0,
  CURLOPT_FOLLOWLOCATION =&gt; true,
  CURLOPT_HTTP_VERSION =&gt; CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST =&gt; 'POST',
  CURLOPT_POSTFIELDS =&gt;'{
    "customer_name": "$name",
    "customer_last_name": "",
    "id_type": "",
    "customer_id": "$doc",
    "age": "",
    "gender": "",
    "country": "",
    "state": "",
    "city": "",
    "zone": "",
    "address": "",
    "opt1": "",
    "opt2": "",
    "opt3": "",
    "opt4": "",
    "opt5": "",
    "opt6": "",
    "opt7": "",
    "opt8": "",
    "opt9": "",
    "opt10": "",
    "opt11": "",
    "opt12": "",
    "tel1": "$cel",
    "tel2": "",
    "tel3": "",
    "agent_id": ""
}',
  CURLOPT_HTTPHEADER =&gt; array(
    'wolkvox-token: 7b69645f6469737472697d2d3230323131323233313030363335',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>