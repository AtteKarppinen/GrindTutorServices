<!-- 
    Makes and returns connection to database.
 -->

<?php
    class Database {

        private $servername = '134.209.83.193';
        private $username = 'user';
        private $password_db = 'memorophiliaForFallenPineCones';
        private $dbname = 'grind_tutor_service';
        public $conn;
     
        // Get the database connection
        public function getConnection() {
     
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password_db);
                $this->conn->exec("set names utf8");
                // Change error to exception and handle it
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $exception) {
                // TODO: Handle exception better
                // Let the user know something is wrong
                echo "<script type='text/javascript'>alert('Connection to database failed');</script>";
            }

            return $this->conn;
        }
    }
?>