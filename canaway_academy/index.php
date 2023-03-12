<?php
$tokenServer='$213c/*sScxS5ax:sad_s';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo  json_encode(['data'=>
  ["message"=>"Only request is permitted: Post","note"=>"You can send next fields: name, email, english_level"]]);
        throw new Exception("You can send next fields: name, email, english_level");

}else{
  $headers = apache_request_headers();
  $token = explode("Bearer ",$headers['Authorization'])[1];
  if($token==$tokenServer){
    require_once(__DIR__."/controller/controller.php");
  }else{

    echo json_encode(["data"=>["message"=>"unauthorized, token is incorrect or empty"]]);
    http_response_code(401);
    throw new Exception("unauthorized, token is incorrect or empty");

  }

}
