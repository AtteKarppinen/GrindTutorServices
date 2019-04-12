<?php
/*
    Student class. Includes properties and CRUD methods.
    Actual CRUD operations are made in separate scripts
    which initialize an object from this class.
*/

    // Script for validating any user input
    include_once "../Shared/testInput.php";

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
        public $s_email;
        public $s_password;     
        //public $s_address;    // Probably not necessary
        // public $Location;    // Probably not necessary
    
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

        // All data is sent in request's body, no need for parameters
        function register() {

            // Validate data
            $this->s_fname      = testInput($this->s_fname);
            $this->s_lname      = testInput($this->s_lname);
            $this->s_bdate      = testInput($this->s_bdate);
            $this->s_sex        = testInput($this->s_sex);
            $this->s_email      = testInput($this->s_email);
            $this->s_password   = testInput($this->s_password);

            // Check that student is not registered already
            $user_exists = $this->conn->query("SELECT * FROM $this->tableName WHERE s_email LIKE '$this->s_email'");
            
            if ($user_exists->rowCount() === 0) {

                // Insert query 
                $query = "INSERT INTO Student_table (s_fname, s_lname, s_bdate, s_sex, s_email, s_password)
                          VALUES(:firstName, :lastName, :birthday, :sex, :email, :hashedPassword)";

                // Prepare insert statement
                $insert = $this->conn->prepare($query);

                $insert->bindParam(':firstName', $this->s_fname);
                $insert->bindParam(':lastName', $this->s_lname);
                $insert->bindParam(':birthday', $this->s_bdate);
                $insert->bindParam(':sex', $this->s_sex);
                $insert->bindParam(':email', $this->s_email);
                // Hash password before storing it
                $this->s_password = password_hash($this->s_password, PASSWORD_DEFAULT);
                $insert->bindParam(':hashedPassword', $this->s_password);

                // Send new user to DB
                try {
                    $insert->execute();
                    return true;
                }
                catch(PDOException $e) {
                    return false;
                }
            }
            else {
                return false;
            }
        }

        // Same like in registration, expect data in body
        function login() {

            // Validate data

            // Fetch data from db with given email

            // Check that row count is greater than 0

            // Check password match

            // Return true/false
        }
    }
?>