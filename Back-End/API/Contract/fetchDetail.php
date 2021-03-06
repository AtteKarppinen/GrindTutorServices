<?php

/*
    This script is resbonsible for fetching contracts join the student and tutor from 
    database and returning them in json-format.

    Now $contract->read() call returns every contract
    like readBySubject().

    API call now is made using GET to this script.
*/

    // Required headers
    // First line allows API calls from any address
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");

    // Include database and object files
    include_once "../Config/database.php";
    include_once "../Objects/contract.php";
    
    // Instantiate database
    $database = new Database();
    $db = $database->getConnection();
    
    // Initialize contract object
    $contract = new Contract($db);

    // Query contracts
    $contracts = $contract->fetchDetail();
    $num = $contracts->rowCount();
    echo $num;
    // Check if more than 0 record found
    if ($num > 0) {
    
        // Contracts array
        $contractsArray["Contracts"] = array();
    
        // Retrieve our table contents
        while ($row = $contracts->fetch(PDO::FETCH_ASSOC)) {
            echo $num;
            extract($row);
    
            // "Description for data" => Contract property (fields from db)
            $contractItem=array(
                "Contract number" => $contract_num,
                "Contract tutor fname" => $t_fname,
                "Contract tutor lname" => $t_lname,
                "Contract student fname" => $s_fname,
                "Contract student lname" => $s_lname,
                "Contract subject number" => $contract_subject_num
            );
            array_push($contractsArray["Contracts"], $contractItem);
        }
    
        // Set response code - 200 OK
        http_response_code(200);
    
        // Show contracts data in json format
        echo json_encode($contractsArray);
    }
    else {
    
        // Set response code - 404 Not Found
        http_response_code(404);
    
        // Tell the user no contracts found
        echo json_encode(
            array("Message" => "No contracts found.")
        );
    }
?>