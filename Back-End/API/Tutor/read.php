<!-- 
    This script is resbonsible for fetching tutors from 
    database and returning them in json-format.

    Now $tutor->read() call returns every tutor, make 
    more functions in objects/tutor.php for different purposes
    like readBySubject().

    API call now is made using GET/POST to this script.
 -->

<?php
    // Required headers
    // First line allows API calls from any address
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // Include database and object files
    include_once '../Config/database.php';
    include_once '../Objects/tutor.php';
    
    // Instantiate database
    $database = new Database();
    $db = $database->getConnection();
    
    // Initialize tutor object
    $tutor = new Tutor($db);

    // Query tutors
    $tutors = $tutor->read();
    $num = $tutors->rowCount();
    
    // Check if more than 0 record found
    if ($num > 0) {
    
        // Tutors array
        $tutors_arr["tutors"] = array();
    
        // Retrieve our table contents
        while ($row = $tutors->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['Fname'] to
            // just $Fname only
            extract($row);
    
            $tutor_item=array(
                "tutor_number" => $tutor_number,
                "Fname" => $Fname,
                "Lname" => $Lname,
                "Bdate" => $Bdate,
                "Sex" => $Sex,
                "Address" => $Address,
                "desired_tuition_fee" => $desired_tuition_fee,
                "t_subject_number" => $t_subject_number
                // Location is in unrecognised format, breaking this call
                // "Location" => $Location
            );
            array_push($tutors_arr["tutors"], $tutor_item);
        }
    
        // Set response code - 200 OK
        http_response_code(200);
    
        // Show tutors data in json format
        echo json_encode($tutors_arr);
    }
    else{
    
        // Set response code - 404 Not found
        http_response_code(404);
    
        // Tell the user no tutors found
        echo json_encode(
            array("message" => "No tutors found.")
        );
    }
?>