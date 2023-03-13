<?php
try {
    require_once(__DIR__."/../service/userService.php");
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array

    if(empty( $input["name"]) || empty($input["email"]) || empty($input["english_level"]) || empty($input["extra_column"])){
      echo json_encode(["data"=>["note"=>"You can send next fields: name, email, english_level"]]);
      http_response_code(505);
      throw new Exception("You can send next fields: name, email, english_level");
      exit;
    }
    $name = $input["name"];
    $email = $input["email"];
    $english_level = $input["english_level"];
    $extra_column=$input["extra_column"];
    $user_service = new UserService($name, $email, $english_level,$extra_column);
    $user_search = $user_service->getUser();
    if (!$user_search) {
        $user_service->createUser();
    } else {
        $user_service->updateUser();
    }

    echo json_encode(["message"=>"ok"]);
    http_response_code(200);

} catch (\Exception $th) {
    echo json_encode(["message"=>"Server Error :" .$th->getMessage()]);
}
