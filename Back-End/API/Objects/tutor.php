<?php
/*
    Tutor class. Includes properties and CRUD methods.
    Actual CRUD operations are made in separate scripts
    which initialize an object from this class.
*/

    class Tutor {
    
        // Database connection and table name
        private $conn;
        private $table_name = "Tutor";
    
        // Tutor properties
        public $tutor_number;
        public $Fname;
        public $Lname;
        public $Bdate;
        public $Sex;
        public $Address;
        public $desired_tuition_fee;
        public $t_subject_number;
        // public $Location;
    
        // Constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        // Read tutors
        function read(){
        
            // Select all 
            $query = "SELECT * FROM ".$this->table_name;
        
            // Prepare query statement
            $tutors = $this->conn->prepare($query);
        
            // Execute query
            $tutors->execute();
        
            return $tutors;
        }
    }
?>