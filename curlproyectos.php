<?php
include "view/header2.php";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3333/api/v1/proyectos',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$_POST['key'].''
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$v1=explode("{",$response);
 $longitud =(count($v1));
 if($longitud==1)
 {
   echo '<br><br><div class="container col-md-4">
   <div class="row text-center py-5">
   <div class="col-sm-6 col-md-3 my-2" style="border 1px; ">
     <form method="post" action="curlproyectos.php">
       <div class="card shadow" style="width: 18rem;">            
         <div class="card-body">
           <h5 class="card-title">Aun no tienes proyectos</h5>
           <p class="card-text"></p>              
           <button type="submit" class="btn btn-primary">Agregar</button>
         </div>
       </div>
     </form>
     </div>
     </div>
     </div>';
 }
 else
 {
  for ($i=1; $i < $longitud; $i++) { 
  
    $v2=explode("}",$v1[$i]);
    echo '<br><br><div class="container col-md-4">
        <div class="row text-center py-5">
        <div class="col-sm-6 col-md-3 my-2" style="border 1px; ">
          <form method="post" action="curlproyectos.php">
            <div class="card shadow" style="width: 18rem;">            
              <div class="card-body">
                <h5 class="card-title">Proyecto '.$i.'</h5>
                <p class="card-text">'.$v2[0].'</p>              
                <button type="submit" class="btn btn-primary">Ver Proyectos</button>
              </div>
            </div>
          </form>
          </div>
          </div>
          </div>';
   }
 }

 
  

  //print_r($v2[0]);

  //print_r($v3[0]);

?>