<?php
require_once(__DIR__. "/../models/UserModel.php");
require_once(__DIR__."/../../wp-load.php");

class UserService
{
    private $user;
     function __construct($name, $email, $english_level,$extra_column)
    {


        $this->user=new User($name,$email,$english_level,null,null,$extra_column);

    }
    function generateUserPassword($strength = 4)
    {
        $input = $this->user->getName() . explode("@", $this->user->getEmail())[0] . $this->user->getEnglish_level();
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return preg_replace('/\s+/', '_',$random_string);
    }

    function createUser()
    {
        if(str_contains($this->user->getEmail(),"@")){
          $this->user->setUsername(explode("@",$this->user->getEmail())[0]);
        }else{
          $this->user->setUsername($this->generateUserPassword());
        }

        $this->user->setPassword($this->generateUserPassword(8));
        wp_create_user($this->user->getUsername(), $this->user->getPassword(), $this->user->getEmail(), $this->user->getEnglish_level(),$this->user->getExtra_column());
        $this->sendEmail($this->user->getEmail(),"Welcome to Canady Academy",
        "Welcome! Your English level is:  <b>".$this->user->getEnglish_level()."</b>   Access your account here:  <b>".$_SERVER['SERVER_NAME']."/wp-admin"."</b>   and use these credentials:     Username:  <b>".$this->user->getUsername()."</b>     Password:  <b>".$this->user->getPassword()."</b> ");
    }
    function updateUser()
    {
        $user = $this->getUser();
        $user->data->user_english_level = $this->user->getEnglish_level();
        wp_update_user($user);
        $this->sendEmail($this->user->getEmail(),"Congratulations - Canady Academy",
        "Congratulations! Your English level is:  <b>".$this->user->getEnglish_level()."</b>   Access your account here:  <b>".$_SERVER['SERVER_NAME']."/wp-admin"."</b> ");
    }
    function getUser()
    {
        $user_id = get_user_by('email', $this->user->getEmail());
        return $user_id;
    }
    function sendEmail($to,$subject,$message)
    {
        $header="From: diezer_diego@hotmail.com\r\n";

        $header .= "Content-type: text/html\r\n";
        mail($to,$subject,$message,$header);
    }
}

