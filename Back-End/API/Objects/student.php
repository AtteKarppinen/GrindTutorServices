<?php
/*
    Student class. Includes properties and CRUD methods.
    Actual CRUD operations are made in separate scripts
    which initialize an object from this class.
*/

    class Student {
    
        // Database connection and table name
        private $conn;
        private $tableName = "Student_table";
    
        // Student properties
        public $s_num;
        public $s_fname;
        public $s_lname;
        public $s_bdate;
        public $s_sex;
        public $t_email;
        public $s_password;     // TODO: Remove, only for developing purposes
        public $s_address;
        // public $Location;
    
        // Constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

        // Fetch all students
        function fetchAll() {
        
            // Select all 
            $query = "SELECT * FROM ".$this->tableName;
        
            // Prepare query statement
            $students = $this->conn->prepare($query);
        
            // Execute query
            $students->execute();
        
            return $students;
        }
    }
?>