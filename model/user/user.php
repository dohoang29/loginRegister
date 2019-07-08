<?php
class user extends database{
    protected $userPass;
    protected $userLevel;
    protected $userId;
    protected $firstName;
    protected $lastName;
    protected $email;

    public function __construct(){
        $this->connect();
    }
    public function setName($firstName,$lastName){
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
    }

    public function getName(){
        return $firstName;
        return  $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $email;
    }

    public function setUserPass($userPass){
        $this->userPass = $userPass;
    }

    public function getUserPass(){
        return $userPass;
    }

    public function setUserLevel($userLevel){
        $this->userLevel = $userLevel;
    }

    public function getUseLevel(){
        return $userLevel;
    }

    public function setId($userId){
        $this->userId = $userId;
    }

    public function getId(){
        return $userId;
    }

    public function login(){
        $sql = "SELECT * FROM user WHERE email = '$this->email' AND userPass = '$this->userPass'";
        $this->query($sql);
        if($this->num_row() >=1){
            $row = $this->fetch();
            $_SESSION['email'] = $row['email'];
            $_SESSION['userLevel'] = $row['userLevel'];
            return "success";
        }
    }

    public function listUser(){
        $sql = "SELECT * FROM user";
        $this->query($sql);
        $result =array();
        $i = 0;
        while($row = $this->fetch()){
            $result[$i] = array(                
                "email" => $row['email'],
                "userPass" =>$row['userPass'],
                "firstName" => $row['firstName'],
                "lastName" => $row['lastName'],
                "userLevel" => $row['userLevel']);
            $i++;
        }
        return $result;
    }

    public function addUser(){
        $sql = "SELECT * FROM user WHERE email = '$this->email'";
        $this->query($sql);
        if($this->num_row() == 0){
            $sql = "INSERT INTO user(firstName,lastName,email,userPass,userLevel) VALUES ('$this->firstName','$this->lastName','$this->email','$this->userPass','$this->userLevel')";
            $this->query($sql);
        }
        else{
            return "fail";
        }
    }
}
?>