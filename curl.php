<?php
include "view/header2.php";
$curl = curl_init();
$email=(filter_input(INPUT_GET,'email'));
$c=(filter_input(INPUT_GET,'c'));
curl_setopt_array($curl, array(
  CURLOPT_URL => 'localhost:3333/api/v1/usuarios/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "email":"'.$email.'",
    "password":"'.$c.'"   
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

$v1=explode("{",$response);
$v2=explode("}",$v1[1]);
$v3=explode(",",$v2[0]);
$v4=explode(":",$v3[0]);
$v5=explode('"',$v3[0]);
$v22=$v2[0];
$v33=explode(",",$v22);
$v44=explode(":",$v33[1]);
$v55=explode('"',$v44[1]);
$v6=$v5[1];
if($v6=="type"){
  echo '<br><br><div class="container col-md-4">
      <div class="row text-center py-5">
      <div class="col-sm-6 col-md-3 my-2" style="border 1px; ">
        <form method="post" action="curlproyectos.php">
          <div class="card shadow" style="width: 18rem;">
            <img class="card-img-top" src="https://blog.hubspot.es/hs-fs/hubfs/ES%20Blog%20images/Los%2015%20logos%20m%C3%A1s%20creativos%20e%20inspiradores%20del%20mundo/logos_creativos_nasa.png?width=650&name=logos_creativos_nasa.png">
            <div class="card-body">
              <h5 class="card-title">Bienvenido(a)</h5>
              <p class="card-text">Encantado de verte de nuevo.</p>
              <div style="visibility:hidden;">
              <input type="text" name="key" value="'.$v55[1].'"></input></div>
              <button type="submit" class="btn btn-primary">Ver Proyectos</button>
            </div>
          </div>
        </form>
        </div>
        </div>
        </div>';
  //header("location: proyectos.php");
}
else{
  echo $v6;
  //header("location: login.php");
}
curl_close($curl);
//echo $response;

?>