<?php

    class connection
    {
        private $_host;
        private $_username;
        private $_password;
        private $_database;
        private $_port;
        private $_socket;

        function __construct() //Constant for all users
        {
            $this->_host = 'localhost';
            $this->_database = 'id7242984_wat';
        }

        public function onlyRead_Connection()
        {
            $this->_username = "id7242984_root";
            $this->_password = "watproject";
            return($this->connect());
        }

        public function onlyUpdate_Connection()
        {
            $this->_username = "id7242984_root";
            $this->_password = "watproject";
            return($this->connect());
        }

        public function onlyAlter_Connection()
        {
            $this->_username = "id7242984_root";
            $this->_password = "watproject";
            return($this->connect());
        }

        private function connect()
        {
            $_conn = new mysqli($this->_host,$this->_username,$this->_password,$this->_database) 
            or die("An ERROR occured while accessing the server --".mysqli_connect_errno()." -- ".mysqli_connect_error());
            return $_conn;
        }
        public function useForID()
        {
            return($this->onlyRead_Connection());
        }

    }
?>