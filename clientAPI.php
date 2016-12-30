<?php
/**
 * @author Mauricio Villalba <mvillalba2013.02@gmail.com>
 */
 
    $url = 'http://myapi.com/login';   

    $data = array(
            "name"=>"user",
            "pass"=>"pass"

    );
  
    $data_string = json_encode($data);
  
  try{    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
    );

    $content = curl_exec( $ch );
    curl_close($ch);
      

    echo '<pre>';
    var_dump($content);
    echo '</pre>';
  }catch(Exception $ex){
  
    echo $ex;
  }
  
  ?>