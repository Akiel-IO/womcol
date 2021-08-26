<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="Porta tu linea movil y recibe el primer mes gratis, inscribete.">
    <meta property="og:image:secure_url" content="https://www.https://womcol.com//images/wom_logo.png">
    <meta property="og:image" itemprop="image" content="https://www.https://womcol.com//images/wom_logo.png">
    <meta property="og:site_name" content="WOM Colombia: ¡Llegamos a cambiar la Telefonía Móvil!">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:updated_time" content="1548518508"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="name=no">
    <meta name="format-detection" content="lastname=no">
    <title>WOM Colombia: ¡Llegamos a cambiar la Telefonía Móvil!</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="https://1701336841.rsc.cdn77.org/_assets/img/iconfavicon.ico" type="image/x-icon">
</head>
<body>
    <section>
        <div class="logowom" align="center">
          <img style="width:250px; padding-top:10px; padding-bottom:10px;" src="images/LogoAliado.png" width="100%" >
        </div>
    </section>
    <section>
        <div class="contenedor">
        <img src="images/planpospago.jpg" width="100%" >
            <div align="center">
                <p style="color:#ffff;font-size:2rem;font-weight: 500">¡NOSOTROS TE LLAMAMOS!</p>
            </div>
        </div>
    </section>
    <section class="wrapper style1 align-center">
        <div class="inner medium">
            <form method="post" autocomplete="off" id="formSend" >
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" value="" placeholder="Nombres*" onkeypress="return /[a-zA-Z ]/i.test(event.key)" onkeyup="validarSqlInyection()"  minlength="3" maxlength="25" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  autocomplete="off" required/>
                    </div>
                    <div class="field half">
                        <input type="text" name="lastname" id="lastname" value="" placeholder="Apellidos*" onkeypress="return /[a-zA-Z ]/i.test(event.key)" onkeyup="validarSqlInyection()" minlength="3" maxlength="25" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  autocomplete="off" required/>
                    </div>
                    <div class="field half">
                        <select name="typeDoc" id="typeDoc" onchange="getValue(value)" required>
                            <option value="" selected >Tipo de documento*</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                        </select>
                    </div>
                    <div class="field half">
                        <input type="number" name="doc" id="doc" value=""  placeholder="Número de Documento*" min="1" minlength="6" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  autocomplete="off" required/>
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" value="" placeholder="Correo Electrónico*" maxlength="50" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  autocomplete="off" required/>
                    </div>
                    <div class="field half">
                        <input type="number" name="cel" id="tel" value=""  placeholder="Número Celular*" min="0 " max="3999999999" minlength="10" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  autocomplete="off" required/>
                    </div>
                    <div class="field half">
                        <select name="typePlan" id="typePlan" required>
                            <option value="" selected >Estoy interesado en...*</option>
                            <option value="Prepago">Prepago</option>
                            <option value="Pospago">Pospago</option>
                        </select>
                    </div>
                    <div class="field">
                        <select name="tengoActual" id="tengoActual" required>
                            <option value="" selected>Actualmente tengo...*</option>
                            <option value="Prepago">Prepago</option>
                            <option value="Pospago">Pospago</option>
                        </select>
                    </div>
                    </div>
                    <ul class="actions special">
                        <li>
                            <input name="register" type="submit" id="submit" value="Enviar"/>
                        </li>
                    </ul>
                    <p style="text-align:justify;">
                        Al diligenciar el formato y dar clic en “enviar”, autorizas de forma, previa, libre, voluntaria, expresa e informada a Punto Mayorista TechCol S.A.S., el tratamiento de sus datos personales con las finalidad de recibir noticias e Información sobre las marcas, productos, servicios y actividades promocionales de PTC de forma directa o a través de aliados o colaboradores.
                    </p>
            </form>

            <?php
            include("registrar.php");
            ?>
            
        </div>
        <div class="mymap" id="mymap">

        </div>
        <script>
                if(navigator.geolocation){

                    navigator.geolocation.getCurrentPosition(success, error, options);

                }else{

                    alert("Activate Location");

                }

                function success(geolocationPosition){
                    let coords = geolocationPosition.coords;

                        document.getElementById("mymap").innerHTML = coords.latitude + coords.longitude;
                }   

                function error(){

                    alert("Por favor activa tu ubicacion para ubicarte la tienda mas cercana.");

                }

                var options = {

                    EnableHighAccuracy:true,
                    Timeout:500,
                    MaximunAge:0     

                }
            </script>
    </section>
</body>
</html>