
<?php
//establish connection
require('pdoConfig.php');

//----------Santasizer Function User Input----------------
function trim_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//----------Santasizer Function User Input End Here----------------
function redirect($location) {
    return header("Location: $location");
}

function set_message($msg){
    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message(){
    if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
}


//Login User Start Here
function userLogin(){
    if(isset($_POST['loginSubmit'])) {
        require('pdoConfig.php');
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $query = $conn->prepare('SELECT userName, userPassword, userRole FROM users WHERE username = ? AND userPassword = ?');
        $query->execute([$userName, $password]);
       
        if($query->rowCount() > 0) {
            foreach($query as $row) {
                $_SESSION['userRole'] = $row['userRole'];
            }
            $_SESSION['userName'] = $userName;
            
            switch($_SESSION['userRole']) {
                case 'admin':
                    redirect('pcrApp.php');
                    break;
                case 'medic':
                    redirect('pcrProcess1.php');
                    break;
                case 'dispatcher':
                    redirect('searchPatient.php');
                    break;
            }
            
        } else {
            set_message("Your User Name or Password is Wrong!");
            redirect('index.php');
        }
    }
}

//-------------Finding Information Function Start Here--------------------

//Function to autofill Form For Medic
function fillDispatch1(){
    
    require('pdoConfig.php');
    
    $patientRunId = $_SESSION['patientRunId'];
    //make connection for Dispatch Form
    $dispatchQuery = $conn->prepare('SELECT mileage, dispatchDate, runId, veId, agencyName, agencyLocation, locationCode, dispatchinfo, locationType, crossStreet, timeReceived, timeRoute, timeAtScene, timeFromScene, timeAtDes, timeInService, timeInQuarter
                                        FROM dispatchtable
                                        WHERE runId = ?');
    $dispatchQuery->execute([$patientRunId]);
    foreach ($dispatchQuery as $row) {
        $_SESSION['mileage'] = $row['mileage'];
        $_SESSION['dispatchDate'] = $row['dispatchDate'];
        $_SESSION['runId'] = $row['runId'];
        $_SESSION['veId'] = $row['veId'];
        $_SESSION['agencyName'] = $row['agencyName'];
        $_SESSION['agencyLocation'] = $row['agencyLocation'];
        $_SESSION['locationCode'] = $row['locationCode'];
        $_SESSION['dispatchinfo'] = $row['dispatchinfo'];
        $_SESSION['locationType'] = $row['locationType'];
        $_SESSION['crossStreet'] = $row['crossStreet'];
        $_SESSION['timeReceived'] = $row['timeReceived'];
        $_SESSION['timeRoute'] = $row['timeRoute'];
        $_SESSION['timeAtScene'] = $row['timeAtScene'];
        $_SESSION['timeFromScene'] = $row['timeFromScene'];
        $_SESSION['timeAtDes'] = $row['timeAtDes'];
        $_SESSION['timeInService'] = $row['timeInService'];
        $_SESSION['timeInQuarter'] = $row['timeInQuarter'];
    }

}

function fillDemographic1(){
    //test whether the patient Run id is passed or not
    require('pdoConfig.php');
    $patientRunId = $_SESSION['patientRunId'];
    if(!empty($patientRunId)) {
        
        //Use run Id as an index to pull out database information
        //make connection
        $query = $conn->prepare('SELECT patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientGender, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients INNER JOIN pcrtable
                                ON patients.patientId = pcrtable.patientId
                                WHERE runId = ?');
        $query->execute([$patientRunId]);
        foreach($query as $row){
            $_SESSION['patientFname'] = $row['patientFname'];
            $_SESSION['patientLname'] = $row['patientLname'];
            $_SESSION['patientAddress'] = $row['patientAddress'];
            $_SESSION['patientPhone1'] = $row['patientPhone1'];
            $_SESSION['patientPhone2'] = $row['patientPhone2'];
            $_SESSION['patientZipcode'] = $row['patientZipcode'];
            $_SESSION['patientDOB'] = $row['patientDOB'];
            $_SESSION['patientGender'] = $row['patientGender'];
            $_SESSION['patientSS'] = $row['patientSS'];
            $_SESSION['patientEmerContact'] = $row['patientEmerContact'];
        }
        if(!empty($_SESSION['patientZipcode'])) {
            $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
            $queryZipcode->execute([$_SESSION['patientZipcode']]);
            foreach($queryZipcode as $row) {
                $_SESSION['patientCity'] = $row['patientCity'];
                $_SESSION['patientState'] = $row['patientState'];
            }
        }
    }
}


//-------------------Function to auto-fill Demographic Form -----

function fillDemographic(){
    require('pdoConfig.php');
    //Pick up patient index infor from addPatient
    $patientFname = $_SESSION['patientFname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientDOB = $_SESSION['patientDOB'];
    
    //Prepare the SQL statement
    $queryDemo = $conn->prepare('SELECT patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientGender, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients
                                WHERE patientFname = ?
                                AND patientLname = ?
                                AND patientAddress = ?
                                AND patientDOB = ?');
    $queryDemo->execute([$patientFname, $patientLname, $patientAddress,$patientDOB]);
    foreach($queryDemo as $row){
        $_SESSION['patientFname'] = $row['patientFname'];
        $_SESSION['patientLname'] = $row['patientLname'];
        $_SESSION['patientAddress'] = $row['patientAddress'];
        $_SESSION['patientPhone1'] = $row['patientPhone1'];
        $_SESSION['patientPhone2'] = $row['patientPhone2'];
        $_SESSION['patientZipcode'] = $row['patientZipcode'];
        $_SESSION['patientDOB'] = $row['patientDOB'];
        $_SESSION['patientGender'] = $row['patientGender'];
        $_SESSION['patientSS'] = $row['patientSS'];
        $_SESSION['patientEmerContact'] = $row['patientEmerContact'];
    }
    if(!empty($_SESSION['patientZipcode'])) {
        $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
        $queryZipcode->execute([$_SESSION['patientZipcode']]);
        foreach($queryZipcode as $row) {
            $_SESSION['patientCity'] = $row['patientCity'];
            $_SESSION['patientState'] = $row['patientState'];
        }
    };
    
}
//-------------------Function to auto-fill Demographic Form End-----

function findPatient(){
    if(isset($_POST['btnSearchPatient'])){
        require('pdoConfig.php');
    }
}
function pcrFindOnDate(){
    if(isset($_POST['searchSubmit'])) {
         require('pdoConfig.php');
         if(!empty($_POST['pcrDate'])) {
             $pcrDate = $_POST['pcrDate'];
             $query = $conn->prepare('SELECT runId, userId, pcrForm, pcrDate FROM pcrtable WHERE pcrDate = ?');
             $query->execute([$pcrDate]);
             
             echo "<table class='table mt-2'>";
             echo "<tr>";
             echo "<th>Run Id</th>";
             echo "<th>User Id</th>";
             echo "<th>PCR pdf</th>";
             echo "</tr>";
             foreach ($query as $row) {
                 echo "<tr>";
                 echo '<td>' . $row['runId'] . "</td>";
                 echo '<td>' . $row['userId'] . "</td>";
                 echo "<td>
                       <a href='" .$row['pcrForm'] ."'>Click to PDF</a>
                       </td>";
                 echo "</tr>";
             }
             echo '</table>';
         }
         if($_POST['pcrUserId'] != ""){
             $pcrUserId = $_POST['pcrUserId'];
             $stmt= $conn->prepare("SELECT runId, userId, pcrForm, pcrDate FROM pcrtable WHERE userId = ?");
             $stmt->execute([$pcrUserId]);
             echo "<table class='table mt-2'class='table mt-2'>";
             echo "<tr>";
             echo "<th>Run Id</th>";
             echo "<th>User Id</th>";
             echo "<th>PCR pdf</th>";
             echo "<th>Dispatch Date</th>";
             echo "</tr>";
             foreach ($stmt as $row) {
                 echo "<tr>";
                 echo '<td>' . $row['runId'] . "</td>";
                 echo '<td>' . $row['userId'] . "</td>";
                 echo "<td>
                       <a href='" .$row['pcrForm'] ."'>Click to PDF</a>
                       </td>";
                 echo '<td>' . $row['pcrDate'] . "</td>";
                 echo "</tr>";
             }
             echo '</table>';
         }
    }
};

function pcrFindOnPatient(){
    if(isset($_POST['searchSubmit'])) {
        require('pdoConfig.php');
        if($_POST['pcrPatientFname'] != "" & $_POST['pcrPatientLname'] != "") {
            $patientFname = $_POST['pcrPatientFname'];
            $patientLname = $_POST['pcrPatientLname'];
            $sqlPcrFind = "SELECT patientFname, patientLname, patientSS, runId, pcrForm, pcrDate 
                           FROM patients NATURAL JOIN pcrtable
                           WHERE patientFname = ? AND patientLname = ?";
            $stmt= $conn->prepare($sqlPcrFind);
            $stmt->execute([$patientFname,$patientLname]);
            echo "<table class='table mt-2'class='table mt-2'>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Social Security</th>";
            echo "<th>Dispatch Run Id</th>";
            echo "<th>PCR pdf</th>";
            echo "<th>PCR Date</th>";
            echo "</tr>";
            foreach ($stmt as $row) {
                echo "<tr>";
                echo '<td>' . $row['patientFname'] . "</td>";
                echo '<td>' . $row['patientLname'] . "</td>";
                echo '<td>' . $row['patientSS'] . "</td>";
                echo '<td>' . $row['runId'] . "</td>";
                echo "<td>
                       <a href='" .$row['pcrForm'] ."'>Click to PDF</a>
                       </td>";
                echo '<td>' . $row['pcrDate'] . "</td>";
                echo "</tr>";
            }
            echo '</table>';
        } else {
            return false;
        }
    }
};

function pcrFindOnSS() {
    if(isset($_POST['searchSubmit'])) {
        require('pdoConfig.php');
        if($_POST['pcrPatientSS'] != "") {
            $patientSS = $_POST['pcrPatientSS'];
            $sqlSSfindPCR = "SELECT patientFname, patientLname, patientSS, runId, pcrForm, pcrDate
                    FROM patients NATURAL JOIN pcrtable
                    WHERE patientSS = ?";
            $stmt= $conn->prepare($sqlSSfindPCR);
            $stmt->execute([$patientSS]);
            echo "<table class='table mt-2'class='table mt-2'>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Social Security</th>";
            echo "<th>Dispatch Run Id</th>";
            echo "<th>PCR pdf</th>";
            echo "<th>PCR Date</th>";
            echo "</tr>";
            foreach ($stmt as $row) {
                echo "<tr>";
                echo '<td>' . $row['patientFname'] . "</td>";
                echo '<td>' . $row['patientLname'] . "</td>";
                echo '<td>' . $row['patientSS'] . "</td>";
                echo '<td>' . $row['runId'] . "</td>";
                echo "<td>
                       <a href='" .$row['pcrForm'] ."'>Click to PDF</a>
                       </td>";
                echo '<td>' . $row['pcrDate'] . "</td>";
                echo "</tr>";
            }
            echo '</table>';
        } 
    }
};

//-------------Finding Information Function END Here--------------------

//-----------------------Insert to database function start here-----------------------------
function insertPcrPdf(){
    require('pdoConfig.php');
    //Get the SESSION from Demographic Form Variable, check it right here
    $patientFname = $_SESSION['patientFname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientPhone1 = $_SESSION['patientPhone1'];
    $patientPhone2 = $_SESSION['patientPhone2'];
    $patientZipcode = $_SESSION['patientZipcode'];
    $patientDOB = $_SESSION['patientDOB'];
    $patientGender = $_SESSION['patientGender'];
    $patientSS = $_SESSION['patientSS'];
    $patientEmerContact = $_SESSION['patientEmerContact'];
    $patientEmerPhone = $_SESSION['patientEmerPhone'];
    //Get the SESSION VARIABLE for INSERT QUERTY, check it right here
    $runId = $_SESSION['runId'];
    $dispatchDate = $_SESSION['dispatchDate'];
    
    //Get userId from userName to insert to DB later
    $userName = $_SESSION['userName'];
    $sqlUserId = "SELECT userId FROM users where userName = ?";
    $stmtUserId = $conn->prepare($sqlUserId);
    $stmtUserId->execute([$userName]);
    $userId = $stmtUserId->fetchColumn();
    //if patient based on patient Fname, Lname, DOB and Address does not exist, add a row to patientsTable.
    //Find the patientId with the following conditions, more restriction mean more duplicated patient rows
    $sqlPatientUnique = "SELECT patientId FROM patients WHERE patientFname = ? 
                        AND patientLname = ? AND patientAddress = ?  
                        AND patientDOB = ? AND patientSS = ?";
    $stmtPatientUnique = $conn->prepare($sqlPatientUnique);
    $stmtPatientUnique->execute([$patientFname,$patientLname,$patientAddress, $patientDOB, $patientSS]);
    $patientUnique = $stmtPatientUnique->fetchColumn();
   
    
    //If PatientId are false as not existed, insert a new row of patient. If patient existed, do not add more row
    if ($patientUnique == false) {
        //Use Bind Method because patientId is auto_increment 
        $sqlPatientInfo = "INSERT INTO `patients` (`patientFname`, `patientLname`, `patientAddress`, `patientPhone1`, `patientPhone2`, `patientZipcode`, `patientDOB`, `patientGender`, `patientSS`, `patientEmerContact`, `patientEmerPhone`)
                       VALUE (:patientFname, :patientLname, :patientAddress, :patientPhone1, :patientPhone2, :patientZipcode, :patientDOB, :patientGender, :patientSS, :patientEmerContact, :patientEmerPhone)";
        $stmt = $conn->prepare($sqlPatientInfo);
        $stmt->bindValue(':patientFname', $patientFname);
        $stmt->bindValue(':patientLname', $patientLname);
        $stmt->bindValue(':patientAddress', $patientAddress);
        $stmt->bindValue(':patientPhone1', $patientPhone1);
        $stmt->bindValue(':patientPhone2', $patientPhone2);
        $stmt->bindValue(':patientZipcode', $patientZipcode);
        $stmt->bindValue(':patientDOB', $patientDOB);
        $stmt->bindValue(':patientGender', $patientGender);
        $stmt->bindValue(':patientSS', $patientSS);
        $stmt->bindValue(':patientEmerContact', $patientEmerContact);
        $stmt->bindValue(':patientEmerPhone', $patientEmerPhone);
        $insertPatientInfo = $stmt->execute();
    } else {
    }
    
    //Find whether the run Id is existed, if exist, do nothing. If it does not, find patientId and Insert new PCR Form
    $sqlRunIdIndex = "SELECT runId FROM pcrtable WHERE runId = ? ";
    $stmt2 = $conn->prepare($sqlRunIdIndex);
    $stmt2->execute([$runId]);
    $count = $stmt2->fetchColumn();
    if ($count != $runId) {
        //---gotta find Patient Id--- (There are more conditions so that the patientId will be selected more precisely in the database)
        $sqlPatientId = "SELECT patientId FROM patients WHERE patientFname = ?
                        AND patientLname = ? AND patientAddress = ?
                        AND patientDOB = ? AND patientSS = ?";
        $stmt1 = $conn->prepare($sqlPatientId);
        $stmt1->execute([$patientFname,$patientLname,$patientAddress, $patientDOB, $patientSS]);
        $patientId = $stmt1->fetchColumn();
        
        // Patient Id is newly Inserted, thanks for the above INSERT, so we find it (If the insert of new Patient fail, this will not work).
        $pcrForm = 'PCRapp/PatientReport'. $runId .'.pdf';
        $sqlInsert = "INSERT INTO pcrtable (runId, userId, patientId, pcrForm, pcrDate) VALUE (?,?,?,?,?)";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->execute([$runId,$userId, $patientId, $pcrForm, $dispatchDate]);
    }
}

//Temporary do not need the function
function insertPatientInfo(){
    require('pdoConfig.php');
    //Get the SESSION from Form Variable, check it right here
    $patientFname = $_SESSION['patientFname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientPhone1 = $_SESSION['patientPhone1'];
    $patientPhone2 = $_SESSION['patientPhone2'];
    $patientZipcode = $_SESSION['patientZipcode'];
    $patientDOB = $_SESSION['patientDOB'];
    $patientGender = $_SESSION['patientGender'];
    $patientSS = $_SESSION['patientSS'];
    $patientEmerContact = $_SESSION['patientEmerContact'];
    $patientEmerPhone = $_SESSION['patientEmerPhone'];
    //Select patient Social Security to not allow duplicate 
    $sqlPatientIndex = "SELECT patientId FROM patients WHERE patientFname = ? AND patientLname = ? AND patientAddress = ?";
    $stmt1 = $conn->prepare($sqlPatientIndex);
    $stmt1->execute([$patientSS]);
    $count = $stmt1->fetchColumn();
    //PDO prepare SQL and Insert if patient social is not existed
    if($count != $patientSS) {
    $sqlPatientInfo = "INSERT INTO patients (patientFname, patientLname, patientAddress, patientPhone1, patientPhone2, patientZipcode, patientDOB, patientGender, patientSS,patientEmerContact,patientEmerPhone)
                       VALUE (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sqlPatientInfo);
    $stmt->execute([$patientFname,$patientLname,$patientAddress,$patientPhone1,$patientPhone2, $patientZipcode,$patientDOB,$patientGender,$patientSS,$patientEmerContact,$patientEmerPhone]);
    } else {
        return false;
    }
}

//Insert zipcode SQL into zipcodes database, duplicate zipcodes will return to do nothing
function insertZipcodeInfo(){
    require('pdoConfig.php');
    $patientZipcode = $_SESSION['patientZipcode'];
    $patientCity = $_SESSION['patientCity'];
    $patientState = $_SESSION['patientState'];
    //Select and check whether Zipcode is duplicated, if Zipcode is duplicated, return false
    $sqlZipcodeIndex = "SELECT patientZipcode FROM zipcodes WHERE patientZipcode = ?";
    $stmt = $conn->prepare($sqlZipcodeIndex);
    $stmt->execute([$patientZipcode]);
    $count = $stmt->fetchColumn();
    if ($count != $patientZipcode) {
        $sqlZipcode = "INSERT INTO zipcodes (patientZipcode, patientCity, patientState) VALUE (?,?,?)";
        $stmt2 = $conn->prepare($sqlZipcode);
        $stmt2->execute([$patientZipcode,$patientCity,$patientState]);
    } else {
        return false;
    }
}

//Insert Form information to problemtable
function insertProblem(){
    require('pdoConfig.php');
    //Get the POST input from 
    $runId = $_SESSION['runId'];
    $traumaComplaint = $_SESSION['traumaComplaint'];
    $traumaInjury = implode(',', $_SESSION['traumaInjury']);
    $presentProblem = $_SESSION['presentProblem'];
    $medicalComplaint = $_SESSION['medicalComplaint'];
    $pastMedical = $_SESSION['pastMedical'];
    $patientMedication = $_SESSION['patientMedication'];
    $traumaMapItems = $_SESSION['traumaMapItems'];
    //Creat SQL and start insert
    $sqlProblem = "INSERT INTO problemtable (runId, traumaComplain, traumaInjury, presentProblem, medicalComplain, medicalHistory, medicalMedi, problemMap)
                   VALUE (?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sqlProblem);
    $stmt->execute([$runId,$traumaComplaint,$traumaInjury,$presentProblem, $medicalComplaint, $pastMedical, $patientMedication,$traumaMapItems]);
}
//Insert vital table into database vital table 
function insertVital(){
    require('pdoConfig.php');
    //Get the POST or session input
    $runId = $_SESSION['runId'];
    $maxRow = $_SESSION['maxRow'];
    $vitalTime = $_SESSION['vitalTime'];
    $vitalResRate = $_SESSION['vitalResRate'];
    $vitalPulseRate = $_SESSION['vitalPulseRate'];
    $txtBP = $_SESSION['txtBP'];
    //Need to loops through i to get all the values
    for ($i = 0; $i <= $maxRow; $i++) {
        $radCons = $_SESSION['radCons'. $i];
        $radRightPupil = $_SESSION['radRightPupil'. $i];
        $radLeftPupil = $_SESSION['radLeftPupil'. $i];
        $radPupil = $radRightPupil + $radLeftPupil;
        $radSkin = $_SESSION['radSkin'. $i];
        $radStatus = $_SESSION['radStatus'. $i];
        
        $vitalResCheck = $_SESSION['vitalResCheck' . $i];
        $vitalPulseCheck = $_SESSION['chkPulse' . $i];
        
        $vitalRes = ($vitalResRate[$i] . implode(',', $vitalResCheck));
        $vitalPulse = ($vitalPulseRate[$i] . implode(',', $vitalPulseCheck));
        
        $rowNum = ($runId . $i);
        echo $maxRow;
        echo $vitalRes;
        echo $vitalPulse;
        $sqlVital = "INSERT INTO vitaltable (runId, maxRow, rowNum, vitalTime, vitalRes, vitalPulse, vitalCons, vitalPupils, vitalSkin, vitalStatus)
                     VALUE (?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sqlVital);
        $stmt->execute([$runId, $maxRow, $rowNum, $vitalTime[$i], $vitalRes, $vitalPulse, $radCons, $radPupil, $radSkin, $radStatus]);
    }
}
//-----------------------Insert to database function END here-----------------------------
//----------------------Interactive Function----------------------
function findUserRole(){
    require('pdoConfig.php');
    $userName = $_SESSION['userName'];
    $sql = "SELECT userRole FROM users WHERE userName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$userName]);
    foreach($stmt as $row) {
        $userRole = $row['userRole'];
        $_SESSION['userRole'] =  $userRole;
    }
}

function transferPatient(){
    require('pdoConfig.php');
    if(isset($_POST['selectSubmit'])){
        $patientFname = $_POST['firstName'];
        $patientLname = $_POST['lastName'];
        $patientAddress = $_POST['address'];
        $patientDOB = $_POST['dob'];
        $patientPhone1 = $_POST['phone1'];
        $_SESSION['patientFname'] = $patientFname;
        $_SESSION['patientLname'] = $patientLname;
        $_SESSION['patientAddress'] = $patientAddress;
        $_SESSION['patientDOB'] = $patientDOB;
        $_SESSION['patientPhone1'] = $patientPhone1;
        redirect('pcrApp.php');
    }
}
?>