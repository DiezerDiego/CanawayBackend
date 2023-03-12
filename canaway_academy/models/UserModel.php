<?php

class User
{
    private $name;
    private $username;
    private $password;
    private $email;
    private $english_level;
    function __construct($name, $email, $english_level,$username=null,$password=null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->english_level = $english_level;
        $this->username = $username;
        $this->password = $password;
    }
   

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of english_level
     */ 
    public function getEnglish_level()
    {
        return $this->english_level;
    }

    /**
     * Set the value of english_level
     *
     * @return  self
     */ 
    public function setEnglish_level($english_level)
    {
        $this->english_level = $english_level;

        return $this;
    }
}

