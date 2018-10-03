<?php

class user
{
    private $conn;
    private $connect;
    function __construct($con)
    {
        $this->connect = $con;
    }

    private function onlyRead_Function()
    {
        $this->conn = $this->connect->onlyRead_Connection();
    }

    private function onlyAlter_Function()
    {
        $this->conn = $this->connect->onlyAlter_Connection();
    }

    private function onlyUpdate_Function()
    {
        $this->conn = $this->connect->onlyUpdate_Connection();
    }

    function insertUser($name,$email)
    {
        $this->onlyUpdate_Function();
        mysqli_query($this->conn,"insert into user values('$name','$email')");
        mysqli_close($this->conn);
       
    }
	function getUser()
    {
        $this->onlyRead_Function();
        $res=mysqli_query($this->conn,"Select * from user");
        mysqli_close($this->conn);
		return $res ;
       
    }
	function getSubjects($sem)
    {
        $this->onlyRead_Function();
        $res=mysqli_query($this->conn,"Select * from subject where sem=$sem");
        mysqli_close($this->conn);
		return $res ;  
    }
	
	function getPracticals($code)
    {
        $this->onlyRead_Function();
        $res=mysqli_query($this->conn,"Select * from file where code=$code");
        mysqli_close($this->conn);
		return $res ;  
    }
}

?>