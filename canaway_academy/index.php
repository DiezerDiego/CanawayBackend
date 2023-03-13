<?php

$tokenServer='$213c/*sScxS5ax:sad_s';

  $headers = apache_request_headers();
  $token = explode("Bearer ",$headers['Authorization'])[1];
  if($_SERVER["REQUEST_METHOD"]!="OPTIONS"){
    if($token==$tokenServer){
      require_once(__DIR__."/controller/controller.php");
    }else{

      echo json_encode(["data"=>["message"=>"unauthorized, token is incorrect or empty"]]);
      http_response_code(401);
      throw new Exception("unauthorized, token is incorrect or empty");

    }

  }

