<?php
class database{
    protected $host = "127.0.0.1";
    protected $name = "root";
    protected $pass = "password";
    protected $db = "user";

    protected $conn;
    protected $result;

    public function connect(){
            $this->conn = mysqli_connect($this->host,"root",$this->pass,$this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            } 
            
    }

    public function query($sql){
        if($this->conn){
            $this->free_query();
            $this->result = mysqli_query($this->conn,$sql);
        }
    }

    public function free_query(){
        if($this->result){
            mysqli_free_result($this->result);
        }
    }

    public function num_row(){
        if($this->result){
            $row = mysqli_num_rows($this->result);
            return $row;
        }
    }

    public function fetch(){
        if($this->result){
            $row = mysqli_fetch_array($this->result);
            return $row;
        }
    }
}
?>