<?php
/*
    Due to limited time this script got approved.
    It should fetch this data using API, this way 
    there is no way to implement tokens and gives way too
    much power to the user.
    But at its current state project is not safe at all to begin with.
*/
	session_start();
    include("navigationbar.php");
    if ( isset( $_GET["cycle"] ) && isset($_GET["subject"]) && isset($_GET["location"])) {
        $cycle = $_GET["cycle"];
        $subject = $_GET["subject"];
        $location = $_GET["location"];

        include_once "../Back-End/API/Config/database.php";
        include_once "../Back-End/API/Objects/tutor.php";
        // Instantiate database
        $database = new Database();
        $db       = $database->getConnection();
        // Initialize tutor object
        $tutors = new Tutor($db);
    
        //Sets values from front-end
        $tutors->t_location    = $location;
        $tutors->subject_name  = $subject;
        $tutors->subject_level = $cycle;
        //Query tutor with fee
        //Call the method from the other file
        //The other file returns Tutors and we set it here
        $foundTutors = $tutors->fetchTutorThree();
        $num         = $foundTutors->rowCount();
        //Check if any tutors found
        if ($num > 0) {
            
            $tutorsArray["Tutors"] = array();
            
            // Retrieve our table contents
            while ($row = $foundTutors->fetch(PDO::FETCH_ASSOC)) {
                
                // This will make $row["Fname"] to
                // Just $Fname only
                extract($row);
                
                // "Description for data" => Tutor property (fields from db)
                //Fetches 2 tables from the subject table ike name and level for user to see
                $tutorItem = array(
                    "Tutor Number" => $t_num,
                    "First Name" => $t_fname,
                    "Last Name" => $t_lname,
                    "Birthday" => $t_bdate,
                    "Sex" => $t_sex,
                    "Email" => $t_email,
                    "Address" => $t_address,
                    "Location" => $t_location,
                    "Fee" => $t_fee,
                    "Subject Name" => $subject_name,
                    "Subject Level" => $subject_level
                    // Location is in unrecognised format, breaking this call
                    // "Location" => $Location
                    //I added subject name and level from the subject table to the array
                );
                array_push($tutorsArray["Tutors"], $tutorItem);
            } //End while    
            //Set response code 200 okay
        } else {
            echo "not found.... 404";
        }
    }
    else{
        echo "error";
    }
?>

	<body>
		<div class="container">
			<div class="topReg">
				<h3>Search Tutor</h3>
			</div>
		</div>
		
     
		<div class="container">
            <?php
                foreach ($tutorsArray['Tutors'] as $elem) {
                    echo "<div>";
                    echo "<div class='tutorInfo'>".
                        $elem['First Name'].
                        $elem['Last Name'].
                        $elem['Birthday'].
                        $elem['Sex'].
                        $elem['Address'].
                        $elem['Location'].
                        $elem['Fee'].
                        $elem['Subject Name'].
                        $elem['Subject Level']."</div>";
                    echo "<div>
                        <button onclick=\"document.getElementById('id03').style.display='block'\">Contact</button>
				
					    <div id='id03' class='modal'>
						<form id='PaymentSubmit' class='modal-content animate'>
							<div class='imgcontainer'>
							<span onclick=\"document.getElementById('id03').style.display='none'\" class='close' title='Close Modal'>&times;</span>
							</div>
							<div class='regcontainer'>
                                <h1>Contract</h1>
                                <label for='CardNum'>Card Number</label>
                                <input type='text' placeholder='Enter your Card Number' id='PayCardNumber' required>
                                <button type='submit'>Contact</button>
							</div>
						</form>
					</div>
                        </div>";
                    echo "</div>";
                }
            ?>
		</div>      
	</body>
</html>

