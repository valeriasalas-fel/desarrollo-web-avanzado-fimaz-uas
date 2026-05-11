<?php
// Valeria Salas Felix

    class database {
        private $host = "localhost";
        private $db = "proyecto";
        private $username = "root";
        private $password = "root";

        public function __construct()
        {
            
        }

        public function connect(){
            try {
                $PDO=new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,
                $this->password);
                return $PDO;
            }
            catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>    