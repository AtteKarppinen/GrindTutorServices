<?php
/*
    Tutor class. Includes properties and CRUD methods.
    Actual CRUD operations are made in separate scripts
    which initialize an object from this class.
*/

    class Tutor {
    
        // Database connection and table name
        private $conn;
        private $tableName = "Tutor_table";
    
        // Tutor properties
        public $t_num;
        public $t_fname;
        public $t_lname;
        public $t_bdate;
        public $t_sex;
        public $t_email;
        public $t_password;     // TODO: Remove. Only for developing purposes
        public $t_address;
        public $t_fee;          // How much tutor wants for an hour
        public $t_subject_num;  // Subject tutor teaches
        // public $Location;
    
        // Constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

        // Fetch all tutors
        function fetchAll() {
        
            // Select all 
            $query = "SELECT * FROM ".$this->tableName;
        
            // Prepare query statement
            $tutors = $this->conn->prepare($query);
        
            // Execute query
            $tutors->execute();
        
            return $tutors;
        }
    }
?>