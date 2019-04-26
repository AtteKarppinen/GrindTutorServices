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
        private $subjectTable='Subject_table';
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
        public $t_location;
       
        //Subject_table items
        public $subject_name;
        public $subject_level;
    
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
        
        //Select tutors with fee
        function fetchTutorFee(){
        
            // Select all 
            $query = "SELECT * FROM $this->tableName WHERE t_fee <= $this->t_fee";
            
            // Prepare query statement
            $tutors = $this->conn->prepare($query);
        
            // Execute query
            $tutors->execute();
            
            return $tutors;
        }
        
        function fetchTutorThree(){
            
            /*            
            select t_fname,t_lname,t_sex,t_bdate,t_location,subject_name,subject_level,t_fee,t_email
            from Subject_table
            inner join Tutor_table 
            on (t_subject_num=subject_num)
            and (subject_level="Senior Cycle");
            */

            //Select the info we need
            $query = "SELECT * FROM Tutor_table
            INNER JOIN Subject_table
            ON (t_subject_num=subject_num)
            AND(t_location=$this->t_location)
            AND(subject_name=$this->subject_name)
            AND(subject_level=$this->subject_level)";
            
           

            // Prepare query statement
            $tutors = $this->conn->prepare($query);
        
            // Execute query
            $tutors->execute();
            
            return $tutors;
        }
    }
?>