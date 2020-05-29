
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
                    redirect('pcrProcess1.php');
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
function fillIntDispatch() {
    require('pdoConfig.php');
    $runId = $_SESSION['runId'];
    echo $patientRunId;
    $queryPCR = $conn->prepare('SELECT runId, pcrDate
                                FROM pcrtable
                                WHERE runId = ?');
    $queryPCR->execute([$runId]);
    
    foreach($queryPCR as $row) {
    
        $dispatchDate = $row['pcrDate'];
    }
    include(TEMPLATE_BACK. DS. "pcrProcess/dispatchIntProcess.php");
}

function fillDispatch1(){
    
    require('pdoConfig.php');
    //This is session because it passes from process1.php
    $runId = $_SESSION['runId'];
    //make connection for Dispatch Form
    $dispatchQuery = $conn->prepare('SELECT mileage, dispatchDate, runId, vehId, agencyName, 
                                    agencyLocation, locationCode, dispatchinfo, locationType, crossStreet, 
                                    timeReceived, timeRoute, timeAtScene, timeFromScene, timeAtDes, 
                                    timeInService, timeInQuarter, dispatchCallType, dispatchPatientNumb, dispatchMethod
                                     FROM dispatchtable
                                     WHERE runId = ?');
    $dispatchQuery->execute([$runId]);
    foreach ($dispatchQuery as $row) {
         $mileage = $row['mileage'];
         $dispatchDate = $row['dispatchDate'];
         $runId = $row['runId'];
         $vehId = $row['vehId'];
         $agencyName = $row['agencyName'];
         $agencyLocation = $row['agencyLocation'];
         $locationCode = $row['locationCode'];
         $dispatchinfo = $row['dispatchinfo'];
         $locationType = $row['locationType'];
         $crossStreet = $row['crossStreet'];
         $timeReceived = $row['timeReceived'];
         $timeRoute = $row['timeRoute'];
         $timeAtScene = $row['timeAtScene'];
         $timeFromScene = $row['timeFromScene'];
         $timeAtDes = $row['timeAtDes'];
         $timeInService = $row['timeInService'];
         $timeInQuarter = $row['timeInQuarter'];
         $dispatchCallType = $row['dispatchCallType'];
         $dispatchPatientNumb = $row['dispatchPatientNumb'];
         $dispatchMethod = $row['dispatchMethod'];
        
       /* $_SESSION['mileage'] = $row['mileage'];
        $_SESSION['dispatchDate'] = $row['dispatchDate'];
        $_SESSION['runId'] = $row['runId'];
        $_SESSION['vehId'] = $row['vehId'];
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
        $_SESSION['dispatchCallType'] = $row['dispatchCallType'];
        $_SESSION['dispatchPatientNumb'] = $row['dispatchPatientNumb'];
        $_SESSION['dispatchMethod'] = $row['dispatchMethod'];*/
    }
    include(TEMPLATE_BACK. DS. "pcrProcess/dispatchProcess.php");
}



function fillPresentProblem1() {
  
    require('pdoConfig.php');
    $patientRunId = $_SESSION['runId'];
    
    $query = $conn->prepare('SELECT traumaComplain, traumaInjury, presentProblem, medicalComplain, medicalHistory,
                                   patientMedication, patientAllergy, traumaMapItems, painKey
                            FROM problemtable
                            WHERE runId = ?'); 
    $query->execute([$patientRunId]);
    foreach ($query as $row) {
        $_SESSION['traumaComplain'] = $row['traumaComplain'];
        $_SESSION['traumaInjury'] = $row['traumaInjury'];
        $_SESSION['presentProblem'] = $row['presentProblem'];
        $_SESSION['medicalComplain'] = $row['medicalComplain'];
        $_SESSION['medicalHistory'] = $row['medicalHistory'];
        $_SESSION['patientMedication'] = $row['patientMedication'];
        $_SESSION['patientAllergy'] = $row['patientAllergy'];
        $_SESSION['traumaMapItems'] = $row['traumaMapItems'];
        $_SESSION['painKey'] = $row['painKey'];
    }
}
function fillVitalTable() {
    require('pdoConfig.php');
    $runId = $_SESSION['runId'];
    
    $query = $conn->prepare('SELECT maxRow, rowNum, vitalTime, vitalRes, vitalPulse,
                                    vitalCons, vitalPupils, vitalSkin, vitalStatus
                            FROM vitaltable
                            WHERE runId = ?');
    $query->execute([$runId]);
 
   // print_r($table[1]);
   echo "<table>";
   echo "<tr>";
   echo "<th>Vital Time</th>
        <th>Respiration</th>
        <th>Pulse/BP</th>
        <th>Level of Conscousness</th>
        <th>Pupils</th>
        <th>Skin</th>
        <th>Status</th>";
   
   foreach ($query as $row) {
     /*   $_SESSION['maxRow'] = $row['maxRow'];
        $_SESSION['rowNum'] = $row['rowNum'];
        
        $_SESSION['vitalTime'] = $row['vitalTime'];
       
        $_SESSION['vitalRes'] = $row['vitalRes'];
        $_SESSION['vitalPulse'] = $row['vitalPulse'];
        print_r($row['vitalPulse']);
        $_SESSION['vitalCons'] = $row['vitalCons'];
        $_SESSION['vitalPupils'] = $row['vitalPupils'];
        $_SESSION['vitalSkin'] = $row['vitalSkin'];
        $_SESSION['vitalStatus'] = $row['vitalStatus'];*/
        
        //Copy and past from output to html 
        echo "</tr><tr>";
        echo "<td>Vital time:" . $row['vitalTime'] . "</td>";
        echo "<td>Respiration: " . $row['vitalRes'] ."</td>";
        echo "<td>Pulse: ". $row['vitalPulse'] . "</td>";
        echo "<td>Level of Conscousness: ". $row['vitalCons'] ."</td>";
        echo "<td>Pupils: " . $row['vitalPupils'] . "</td>";
        echo "<td>Skin: " . $row['vitalSkin'] . "</td>";
        echo "<td>Status: " . $row['vitalStatus'] ."</td>";
        //I need to somehow pass this to session in array form
        //print "From Function". $_SESSION['vitalRes'] . "<br>";
      //  print "From Function". $_SESSION['maxRow'] . "<br>";
      //  print "From Function". $_SESSION['vitalTime'] . "<br>";
    };
    echo "</tr>";
    echo "</table>";
    
}
function fillNarrativeNote1() {
    require('pdoConfig.php');
    $patientRunId = $_SESSION['runId'];
    
    $query = $conn->prepare('SELECT narrativeNotes, amaSign, patientAmaSign
                            FROM narrativenotes
                            WHERE runId = ?');
    $query->execute([$patientRunId]);
    foreach ($query as $row) {
        $_SESSION['narrativeNotes'] = $row['narrativeNotes'];
        $_SESSION['amaSign'] = $row['amaSign'];
        $_SESSION['patientAmaSign'] = $row['patientAmaSign'];
    
    }
}

function fillAPCF1(){
    
    require('pdoConfig.php');
    $patientRunId = $_SESSION['runId'];
    $query = $conn->prepare('SELECT patientAppoint, patientBedConfined, reasonAmbulance, patientUlcer, patientPara, 
                            patientFracture, patientContractures, patientPsychiatric, patientMonitoring, patientIsolation, 
                            patientOtherAPCF, physicianPrint, physicianSign
                            FROM apcf
                            WHERE runId = ?');
    $query->execute([$patientRunId]);
    foreach ($query as $row) {
        $_SESSION['patientAppoint'] = $row['patientAppoint'];
        $_SESSION['patientBedConfined'] = $row['patientBedConfined'];
        $_SESSION['reasonAmbulance'] = $row['reasonAmbulance'];
        $_SESSION['patientUlcer'] = $row['patientUlcer'];
        $_SESSION['patientPara'] = $row['patientPara'];
        
        $_SESSION['patientFracture'] = $row['patientFracture'];
        $_SESSION['patientContractures'] = $row['patientContractures'];
        $_SESSION['patientPsychiatric'] = $row['patientPsychiatric'];
        $_SESSION['patientMonitoring'] = $row['patientMonitoring'];
        $_SESSION['patientIsolation'] = $row['patientIsolation'];
        
        $_SESSION['patientOtherAPCF'] = $row['patientOtherAPCF'];
        $_SESSION['physicianPrint'] = $row['physicianPrint'];
        $_SESSION['physicianSign'] = $row['physicianSign'];

    }
}
//-------------------Function to auto-fill Demographic Form -----
function fillDemographic1(){
    
    require('pdoConfig.php');
    $runId = $_SESSION['runId'];
    echo 'Run Id is ' . $runId . '<br>';
    
    if(!empty($runId)) {
        
        //Use run Id as an index to pull out patientId
        $queryPatientId = $conn->prepare('SELECT patientId
                                          FROM pcrtable
                                          WHERE runId = ?');
        $queryPatientId->execute([$runId]);
       
        foreach($queryPatientId as $row) {
            $patientId = $row['patientId'];
        }
        
        echo 'patientId: ' . $patientId;
        //make connection
        $query = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientAge, patientGender, patientRace, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients
                                WHERE patientId = ?');
        $query->execute([$patientId]);
        foreach($query as $row){
            $patientId = $row['patientId'];
            $patientFname = $row['patientFname'];
            $patientLname = $row['patientLname'];
            $patientAddress = $row['patientAddress'];
            $patientPhone1 = $row['patientPhone1'];
            $patientPhone2 = $row['patientPhone2'];
            $patientZipcode = $row['patientZipcode'];
            $patientDOB = $row['patientDOB'];
            $patientAge = $row['patientAge'];
            $patientGender = $row['patientGender'];
            $patientRace = $row['patientRace'];
            $patientSS = $row['patientSS'];
            $patientEmerContact = $row['patientEmerContact'];
            $patientEmerPhone = $row['patientEmerPhone'];
        }
        
        if(isset($patientZipcode)) {
            $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
            $queryZipcode->execute([$patientZipcode]);
            foreach($queryZipcode as $row) {
                $patientCity = $row['patientCity'];
                $patientState = $row['patientState'];
            }
        };
        
        if(!empty($patientId)) {
            $queryInsur = $conn->prepare('SELECT insurPolicy1, insurCompany1, insurAddress1, insurPhone1, insurGroup1,
                                    insurPol1, insurHolder1, insurSS1, insurDOB1, insurMedicaid1,
                                    insurMedicare1, insurClaim1
                                    FROM insurancetable
                                    WHERE patientId = ?');
            $queryInsur->execute([$patientId]);
            foreach($queryInsur as $row) {
                $insurPolicy1 = $row['insurPolicy1'];
                $insurCompany1 = $row['insurCompany1'];
                $insurAddress1 = $row['insurAddress1'];
                $insurPhone1 = $row['insurPhone1'];
                $insurGroup1 = $row['insurGroup1'];
                $insurPol1 = $row['insurPol1'];
                $insurHolder1 = $row['insurHolder1'];
                $insurSS1 = $row['insurSS1'];
                $insurDOB1 = $row['insurDOB1'];
                $insurMedicaid1 = $row['insurMedicaid1'];
                $insurMedicare1 = $row['insurMedicare1'];
                $insurClaim1 = $row['insurClaim1'];
            }
        }
    }
    include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php");
}


function fillDemographicFromSearchPatient(){
    require('pdoConfig.php');
    //Pick up patient index infor from addPatient
    $patientFname = $_SESSION['patientFname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientDOB = $_SESSION['patientDOB'];
    $patientId = $_SESSION['patientId'];
    //Prepare the SQL statement
    $queryDemo = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientAge, patientGender, patientRace, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients
                                WHERE patientId = ?');
  
    $queryDemo->execute([$patientId]);
    foreach($queryDemo as $row){
     
        $patientFname = $row['patientFname'];
        $patientLname = $row['patientLname'];
        $patientAddress = $row['patientAddress'];
        $patientPhone1 = $row['patientPhone1'];
        $patientPhone2 = $row['patientPhone2'];
        $patientZipcode = $row['patientZipcode'];
        $patientDOB = $row['patientDOB'];
        $patientAge = $row['patientAge'];
        $patientGender = $row['patientGender'];
        $patientRace = $row['patientRace'];
        $patientSS = $row['patientSS'];
        $patientEmerContact = $row['patientEmerContact'];
        $patientEmerPhone = $row['patientEmerPhone'];
    }
 
  
    if(isset($patientZipcode)) {
        $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
        $queryZipcode->execute([$patientZipcode]);
        foreach($queryZipcode as $row) {
            $patientCity = $row['patientCity'];
            $patientState = $row['patientState'];
        }
    };
   
    if($patientId) {
        //This is missing preventing duplication
        $queryInsur = $conn->prepare('SELECT insurPolicy1, insurCompany1, insurAddress1, insurPhone1, insurGroup1, 
                                    insurPol1, insurHolder1, insurSS1, insurDOB1, insurMedicaid1,
                                    insurMedicare1, insurClaim1
                                    FROM insurancetable
                                    WHERE patientId = ?');
        $queryInsur->execute([$patientId]);
        foreach($queryInsur as $row) {
            $insurPolicy1 = $row['insurPolicy1'];
            $insurCompany1 = $row['insurCompany1'];
            $insurAddress1 = $row['insurAddress1'];
            $insurPhone1 = $row['insurPhone1'];
            $insurGroup1 = $row['insurGroup1'];
            $insurPol1 = $row['insurPol1'];
            $insurHolder1 = $row['insurHolder1'];
            $insurSS1 = $row['insurSS1'];
            $insurDOB1 = $row['insurDOB1'];
            $insurMedicaid1 = $row['insurMedicaid1'];
            $insurMedicare1 = $row['insurMedicare1'];
            $insurClaim1 = $row['insurClaim1'];
        }
    }
    include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php");
}

function fillDemographicForUpdate() {
    require('pdoConfig.php');
    //Pick up patient index infor from addPatient
    $patientFname = $_SESSION['patientFname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientDOB = $_SESSION['patientDOB'];
    $patientId = $_SESSION['patientId'];
    //Prepare the SQL statement
    $queryDemo = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientAge, patientGender, patientRace, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients
                                WHERE patientId = ?');
    
    $queryDemo->execute([$patientId]);
    foreach($queryDemo as $row){
        
        $patientFname = $row['patientFname'];
        $patientLname = $row['patientLname'];
        $patientAddress = $row['patientAddress'];
        $patientPhone1 = $row['patientPhone1'];
        $patientPhone2 = $row['patientPhone2'];
        $patientZipcode = $row['patientZipcode'];
        $patientDOB = $row['patientDOB'];
        $patientAge = $row['patientAge'];
        $patientGender = $row['patientGender'];
        $patientRace = $row['patientRace'];
        $patientSS = $row['patientSS'];
        $patientEmerContact = $row['patientEmerContact'];
        $patientEmerPhone = $row['patientEmerPhone'];
    }
    
    
    if(isset($patientZipcode)) {
        $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
        $queryZipcode->execute([$patientZipcode]);
        foreach($queryZipcode as $row) {
            $patientCity = $row['patientCity'];
            $patientState = $row['patientState'];
        }
    };
    
    if($patientId) {
        $queryInsur = $conn->prepare('SELECT insurPolicy1, insurCompany1, insurAddress1, insurPhone1, insurGroup1,
                                    insurPol1, insurHolder1, insurSS1, insurDOB1, insurMedicaid1,
                                    insurMedicare1, insurClaim1
                                    FROM insurancetable
                                    WHERE patientId = ?');
        $queryInsur->execute([$patientId]);
        foreach($queryInsur as $row) {
            $insurPolicy1 = $row['insurPolicy1'];
            $insurCompany1 = $row['insurCompany1'];
            $insurAddress1 = $row['insurAddress1'];
            $insurPhone1 = $row['insurPhone1'];
            $insurGroup1 = $row['insurGroup1'];
            $insurPol1 = $row['insurPol1'];
            $insurHolder1 = $row['insurHolder1'];
            $insurSS1 = $row['insurSS1'];
            $insurDOB1 = $row['insurDOB1'];
            $insurMedicaid1 = $row['insurMedicaid1'];
            $insurMedicare1 = $row['insurMedicare1'];
            $insurClaim1 = $row['insurClaim1'];
        }
    }
    include(TEMPLATE_BACK. DS. "pcrProcess/updateProcess.php");
}
//-------------------Function to auto-fill Demographic Form End-----
function submitRunId() {
    if(isset($_POST['searchSubmit'])) {
        require('pdoConfig.php');
        if(isset($_POST['pcrId'])) {
            $runId = $_POST['pcrId'];
            $_SESSION['runId'] = $runId;
            redirect('pcrHTML1.php');
        }
    }
}
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

//----------------------- to database function start here-----------------------------
function dataCheck($runId,$tableName) {
    require('pdoConfig.php');
   
    
    $sqlRunIdIndex = "SELECT runId FROM $tableName WHERE runId = ? ";
  
    $stmt = $conn->prepare($sqlRunIdIndex);
    
    $stmt->execute([$runId]);
   
    $count = $stmt->rowCount();
   
    return $count;
   
}
//-------------------Insert the entire form------------------------
function insertEntireForm() {
    if (!empty($_POST['mileTotal'])) {
        insertDispatchForm();
    } 
    
    if (!empty($_POST['traumaComplain']) || !empty($_POST['medicalComplain'])) {
        insertPresentProblem();   
        
    }
    
    if ((!empty($_POST['checkALS']) || !empty($_POST['checkBLS']))) {
        
        insertTreatmentGiven();
        
    }
    
    if (!empty($_POST['txtNarrativeNote']) ) {
       insertNarrativeNote();
    }
    
    if(!empty($_POST['signSec1']) || !empty($_POST['signsSec2']) || !empty($_POST['signSec3'])) {
        insertSignature();
    }
    
     if(!empty($_POST['txtDisDes'])) {
        insertDisposition();
    }
    
    if(!empty($_POST['chkScheduleApp'])) {
        insertAPCF();  
    }
    
    //Hello
}

function insertPcrPdf(){
    require('pdoConfig.php');
    //Get the SESSION from Demographic Form Variable, check it right here
    $patientFname = $_POST['patientFname'];
    $patientLname = $_POST['patientLname'];
    $patientAddress = $_POST['patientAddress'];
    $patientPhone1 = $_POST['patientPhone1'];
    $patientPhone2 = $_POST['patientPhone2'];
    $patientZipcode = $_POST['patientZipcode'];
    $patientDOB = $_POST['patientDOB'];
    $patientGender = $_POST['patientGender'];
    $patientSS = $_POST['patientSS'];
    $patientEmerContact = $_POST['patientEmerContact'];
    $patientEmerPhone = $_POST['patientEmerPhone'];
    //Get the SESSION VARIABLE for INSERT QUERTY, check it right here
    $runId = $_POST['runId'];
    $dispatchDate = $_POST['dispatchDate'];
    
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
        
        $sqlInsert = "INSERT INTO pcrtable (runId, userId, patientId, pcrDate) VALUE (?,?,?,?)";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->execute([$runId,$userId, $patientId, $dispatchDate]);
        if ($stmt = 'true') {
            echo '<script language="javascript">';
            echo 'alert("Patient Care Report intialized! Continue to the form.")';
            echo '</script>';
            $_SESSION['runId'] = $runId;
            redirect('pcrAppInt.php');
        }
    } else {
        
        echo '<script language="javascript">';
        echo 'alert("Patient Care Report Run Id is already existed")';
        echo '</script>';
    }
}

//-------------------Insert Dispatch Form -------------------------

function insertDispatchForm() {
    require('pdoConfig.php');
    //set Dispatch form inputs to Session Varible for printing
    $mileTotal = ($_POST['mileTotal']);
    $dispatchDate = ($_POST['dispatchDate']);
    $runId = ($_POST['runId']);
    $vehId = ($_POST['vehId']);
    $dispatchAgency = ($_POST['dispatchAgency']);
    $dispatchLocation = ($_POST['dispatchLocation']);
    $lCode = ($_POST['lCode']);
    $dispatchInfo = ($_POST['dispatchInfo']);
    $lType = ($_POST['lType']);
    $dispatchCross = ($_POST['dispatchCross']);
    $timeReceived = ($_POST['timeReceived']);
    $timeRoute = ($_POST['timeRoute']);
    $timeAtScene = ($_POST['timeAtScene']);
    $timeFromScene = ($_POST['timeFromScene']);
    $timeAtDes = ($_POST['timeAtDes']);
    $timeInService = ($_POST['timeInService']);
    $timeInQuarter = ($_POST['timeInQuarter']);
    $dispatchCallType = ($_POST['dispatchCallType']);
    $dispatchPatientNumb = ($_POST['dispatchPatientNumb']);
    $dispatchMethod = ($_POST['dispatchMethod']);
    
    //check if runId is existed in the table or not
    $tableName = 'dispatchtable';
    $index = dataCheck($runId, $tableName);
    
    if ($index == 0 ) {
        //Make SQL connection and Prepare    `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
        //`timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod`,
        $sql = "INSERT INTO `dispatchtable` (`mileage`, `dispatchDate`, `runId`, `vehId`, `agencyName`,
                                         `agencyLocation`, `locationCode`, `dispatchinfo`, `locationType`, `crossStreet`,
                                         `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
                                         `timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod` )
                       VALUE (:mileTotal, :dispatchDate, :runId, :vehId, :dispatchAgency,
                              :dispatchLocation, :lCode, :dispatchInfo, :lType, :dispatchCross,
                              :timeReceived, :timeRoute, :timeAtScene, :timeFromScene, :timeAtDes,
                              :timeInService, :timeInQuarter, :dispatchCallType, :dispatchPatientNumb, :dispatchMethod )";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':mileTotal', $mileTotal);
        $stmt->bindValue(':dispatchDate', $dispatchDate);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':vehId', $vehId);
        $stmt->bindValue(':dispatchAgency', $dispatchAgency);
        $stmt->bindValue(':dispatchLocation', $dispatchLocation);
        $stmt->bindValue(':lCode', $lCode);
        $stmt->bindValue(':dispatchInfo', $dispatchInfo);
        $stmt->bindValue(':lType', $lType);
        $stmt->bindValue(':dispatchCross', $dispatchCross);
        
        $stmt->bindValue(':timeReceived', $timeReceived);
        $stmt->bindValue(':timeRoute', $timeRoute);
        $stmt->bindValue(':timeAtScene', $timeAtScene);
        $stmt->bindValue(':timeFromScene', $timeFromScene);
        $stmt->bindValue(':timeAtDes', $timeAtDes);
        $stmt->bindValue(':timeInService', $timeInService);
        $stmt->bindValue(':timeInQuarter', $timeInQuarter);
        $stmt->bindValue(':dispatchCallType', $dispatchCallType);
        $stmt->bindValue(':dispatchPatientNumb', $dispatchPatientNumb);
        $stmt->bindValue(':dispatchMethod', $dispatchMethod);
        
        $stmt->execute();
        
    } else {
        echo "Dispatch runId is already existed";
    }
    /*$stmt1 = $conn->prepare("SELECT runId FROM dispatchtable WHERE runId = ?");
    $stmt1->execute([$runId]);
    $count = $stmt1->rowCount();
    echo $count;
    if($count == '0') {
        //Make SQL connection and Prepare    `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
        //`timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod`,
        $sql = "INSERT INTO `dispatchtable` (`mileage`, `dispatchDate`, `runId`, `vehId`, `agencyName`,
                                         `agencyLocation`, `locationCode`, `dispatchinfo`, `locationType`, `crossStreet`,
                                         `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
                                         `timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod` )
                       VALUE (:mileTotal, :dispatchDate, :runId, :vehId, :dispatchAgency,
                              :dispatchLocation, :lCode, :dispatchInfo, :lType, :dispatchCross,
                              :timeReceived, :timeRoute, :timeAtScene, :timeFromScene, :timeAtDes,
                              :timeInService, :timeInQuarter, :dispatchCallType, :dispatchPatientNumb, :dispatchMethod )";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':mileTotal', $mileTotal);
        $stmt->bindValue(':dispatchDate', $dispatchDate);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':vehId', $vehId);
        $stmt->bindValue(':dispatchAgency', $dispatchAgency);
        $stmt->bindValue(':dispatchLocation', $dispatchLocation);
        $stmt->bindValue(':lCode', $lCode);
        $stmt->bindValue(':dispatchInfo', $dispatchInfo);
        $stmt->bindValue(':lType', $lType);
        $stmt->bindValue(':dispatchCross', $dispatchCross);
        
        $stmt->bindValue(':timeReceived', $timeReceived);
        $stmt->bindValue(':timeRoute', $timeRoute);
        $stmt->bindValue(':timeAtScene', $timeAtScene);
        $stmt->bindValue(':timeFromScene', $timeFromScene);
        $stmt->bindValue(':timeAtDes', $timeAtDes);
        $stmt->bindValue(':timeInService', $timeInService);
        $stmt->bindValue(':timeInQuarter', $timeInQuarter);
        $stmt->bindValue(':dispatchCallType', $dispatchCallType);
        $stmt->bindValue(':dispatchPatientNumb', $dispatchPatientNumb);
        $stmt->bindValue(':dispatchMethod', $dispatchMethod);
        
        $stmt->execute();
    } else {
        echo "Dispatch runId is already existed";
    }*/
    
   
}

function insertDispatchForm1(){
    require('pdoConfig.php');
    if(isset($_POST['pcrSubmit'])){
        //Asssign Post variable to local varibles
        $mileTotal = ($_POST['mileTotal']);
        $dispatchDate = ($_POST['dispatchDate']);
        $runId = ($_POST['runId']);
        $vehId = ($_POST['vehId']);
        $dispatchAgency = ($_POST['dispatchAgency']);
        $dispatchLocation = ($_POST['dispatchLocation']);
        $lCode = ($_POST['lCode']);
        $dispatchInfo = ($_POST['dispatchInfo']);
        $lType = ($_POST['lType']);
        $dispatchCross = ($_POST['dispatchCross']);
        $timeReceived = ($_POST['timeReceived']);
        $timeRoute = ($_POST['timeRoute']);
        $timeAtScene = ($_POST['timeAtScene']);
        $timeFromScene = ($_POST['timeFromScene']);
        $timeAtDes = ($_POST['timeAtDes']);
        $timeInService = ($_POST['timeInService']);
        $timeInQuarter = ($_POST['timeInQuarter']);
        $dispatchCallType = ($_POST['dispatchCallType']);
        $dispatchPatientNumb = ($_POST['dispatchPatientNumb']);
        $dispatchMethod = ($_POST['dispatchMethod']);
        
        //Make SQL connection and Prepare    `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
        //`timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod`,
        $sql = "INSERT INTO `dispatchtable` (`mileage`, `dispatchDate`, `runId`, `vehId`, `agencyName`,
                                         `agencyLocation`, `locationCode`, `dispatchinfo`, `locationType`, `crossStreet`,
                                         `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
                                         `timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod` )
                       VALUE (:mileTotal, :dispatchDate, :runId, :vehId, :dispatchAgency,
                              :dispatchLocation, :lCode, :dispatchInfo, :lType, :dispatchCross,
                              :timeReceived, :timeRoute, :timeAtScene, :timeFromScene, :timeAtDes,
                              :timeInService, :timeInQuarter, :dispatchCallType, :dispatchPatientNumb, :dispatchMethod )";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':mileTotal', $mileTotal);
        $stmt->bindValue(':dispatchDate', $dispatchDate);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':vehId', $vehId);
        $stmt->bindValue(':dispatchAgency', $dispatchAgency);
        $stmt->bindValue(':dispatchLocation', $dispatchLocation);
        $stmt->bindValue(':lCode', $lCode);
        $stmt->bindValue(':dispatchInfo', $dispatchInfo);
        $stmt->bindValue(':lType', $lType);
        $stmt->bindValue(':dispatchCross', $dispatchCross);
        
        $stmt->bindValue(':timeReceived', $timeReceived);
        $stmt->bindValue(':timeRoute', $timeRoute);
        $stmt->bindValue(':timeAtScene', $timeAtScene);
        $stmt->bindValue(':timeFromScene', $timeFromScene);
        $stmt->bindValue(':timeAtDes', $timeAtDes);
        $stmt->bindValue(':timeInService', $timeInService);
        $stmt->bindValue(':timeInQuarter', $timeInQuarter);
        $stmt->bindValue(':dispatchCallType', $dispatchCallType);
        $stmt->bindValue(':dispatchPatientNumb', $dispatchPatientNumb);
        $stmt->bindValue(':dispatchMethod', $dispatchMethod);
        
        $insertShit = $stmt->execute();
    } 
    elseif(isset($_POST['dispatchSubmit'])){
        //set Dispatch form inputs to Session Varible for printing
        $mileTotal = ($_POST['mileTotal']);
        $dispatchDate = ($_POST['dispatchDate']);
        $runId = ($_POST['runId']);
        $vehId = ($_POST['vehId']);
        $dispatchAgency = ($_POST['dispatchAgency']);
        $dispatchLocation = ($_POST['dispatchLocation']);
        $lCode = ($_POST['lCode']);
        $dispatchInfo = ($_POST['dispatchInfo']);
        $lType = ($_POST['lType']);
        $dispatchCross = ($_POST['dispatchCross']);
        $timeReceived = ($_POST['timeReceived']);
        $timeRoute = ($_POST['timeRoute']);
        $timeAtScene = ($_POST['timeAtScene']);
        $timeFromScene = ($_POST['timeFromScene']);
        $timeAtDes = ($_POST['timeAtDes']);
        $timeInService = ($_POST['timeInService']);
        $timeInQuarter = ($_POST['timeInQuarter']);
        $dispatchCallType = ($_POST['dispatchCallType']);
        $dispatchPatientNumb = ($_POST['dispatchPatientNumb']);
        $dispatchMethod = ($_POST['dispatchMethod']);
        
        //Make SQL connection and Prepare    `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
        //`timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod`,
        $sql = "INSERT INTO `dispatchtable` (`mileage`, `dispatchDate`, `runId`, `vehId`, `agencyName`,
                                         `agencyLocation`, `locationCode`, `dispatchinfo`, `locationType`, `crossStreet`,
                                         `timeReceived`, `timeRoute`, `timeAtScene`, `timeFromScene`, `timeAtDes`,
                                         `timeInService`, `timeInQuarter`, `dispatchCallType`, `dispatchPatientNumb`, `dispatchMethod` )
                       VALUE (:mileTotal, :dispatchDate, :runId, :vehId, :dispatchAgency,
                              :dispatchLocation, :lCode, :dispatchInfo, :lType, :dispatchCross,
                              :timeReceived, :timeRoute, :timeAtScene, :timeFromScene, :timeAtDes,
                              :timeInService, :timeInQuarter, :dispatchCallType, :dispatchPatientNumb, :dispatchMethod )";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':mileTotal', $mileTotal);
        $stmt->bindValue(':dispatchDate', $dispatchDate);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':vehId', $vehId);
        $stmt->bindValue(':dispatchAgency', $dispatchAgency);
        $stmt->bindValue(':dispatchLocation', $dispatchLocation);
        $stmt->bindValue(':lCode', $lCode);
        $stmt->bindValue(':dispatchInfo', $dispatchInfo);
        $stmt->bindValue(':lType', $lType);
        $stmt->bindValue(':dispatchCross', $dispatchCross);
        
        $stmt->bindValue(':timeReceived', $timeReceived);
        $stmt->bindValue(':timeRoute', $timeRoute);
        $stmt->bindValue(':timeAtScene', $timeAtScene);
        $stmt->bindValue(':timeFromScene', $timeFromScene);
        $stmt->bindValue(':timeAtDes', $timeAtDes);
        $stmt->bindValue(':timeInService', $timeInService);
        $stmt->bindValue(':timeInQuarter', $timeInQuarter);
        $stmt->bindValue(':dispatchCallType', $dispatchCallType);
        $stmt->bindValue(':dispatchPatientNumb', $dispatchPatientNumb);
        $stmt->bindValue(':dispatchMethod', $dispatchMethod);
        
        $insertShit = $stmt->execute();
        echo $insertShit;
    }
}

//-------------------Insert Dispatch Form End ---------------------

//-----------------Insert Presenting Problem-------------------
function insertPresentProblem(){
    require('pdoConfig.php');
    $runId = $_POST['runId'];
    $traumaComplain = trim_input($_POST['traumaComplain']);
    $traumaInjury = implode(',', $_POST['trauma_injury']);
    $patientSeatbelt = $_POST['patientSeatbelt'];
    $presentProblem = implode(',', $_POST['present_problem']);
    $medicalComplain = $_POST['medicalComplain'];
    $medicalHistory = implode(',',$_POST['past_medical']);
    $patientMedication = $_POST['patientMedication'];
    $patientAllergy = $_POST['patientAllergy'];
    $traumaMapItems = $_POST['traumaMapItems'];
    $painKey = $_POST['painKey'];
    
    $tableName = 'problemtable';
    $index = dataCheck($runId, $tableName);
    
    if ($index == 0 ) {
        //make connection
        $sql = "INSERT INTO `problemtable` (`runId`, `traumaComplain`, `traumaInjury`, `patientSeatbelt`, `presentProblem`,
                                        `medicalComplain`, `medicalHistory`, `patientMedication`, `patientAllergy`,
                                        `traumaMapItems`, `painKey`)
            VALUE(:runId,:traumaComplain, :traumaInjury, :patientSeatbelt, :presentProblem,
                  :medicalComplain, :medicalHistory, :patientMedication, :patientAllergy,
                  :traumaMapItems, :painKey)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':traumaComplain', $traumaComplain);
        $stmt->bindValue(':traumaInjury', $traumaInjury);
        $stmt->bindValue(':patientSeatbelt', $patientSeatbelt);
        $stmt->bindValue(':presentProblem', $presentProblem);
        $stmt->bindValue(':medicalComplain', $medicalComplain);
        $stmt->bindValue(':medicalHistory', $medicalHistory);
        $stmt->bindValue(':patientMedication', $patientMedication);
        $stmt->bindValue(':patientAllergy', $patientAllergy);
        $stmt->bindValue(':traumaMapItems', $traumaMapItems);
        $stmt->bindValue(':painKey', $painKey);
        $stmt->execute();
        insertVital();
    }
    else {
        echo "<br>" . "Problem table run id is existed";
    }
   
}

//----------------- Presenting Problem End-------------------

//-----------------Insert TreatmentGiven Start-------------------

function insertTreatmentGiven() {
    require('pdoConfig.php');
    $runId = trim_input($_POST['runId']);
    
    //Insert ALS here
    $chkALS = implode(',', $_POST['chkALS']);
    
    $chkELS = $_POST['chkELS'];
    if(isset($chkELS)) {
        $ekgALS = $_POST['ekgALS'];
    } else {
        $ekgALS = '';
    }
    
    $chkCardio = $_POST['chkCardio'];
    if(isset($chkCardio)) {
        $radCardio = trim_input($_POST['radCardio']);
        $cardioALS = $_POST['cardioALS'] . '(' . $radCardio . ')';
    } else {
        $cardioALS = '';
    }
    
    $chkIV1 = $_POST['chkIV1'];
    if(isset($chkIV1)) {
        $ivFluidALS = $_POST['ivFluidALS'];
        $ivGaugeALS = $_POST['ivGaugeALS'];
        $ivALS = $ivFluidALS . ',' . $ivGaugeALS;
    } else {
        $ivALS = '';
    }
    
    $chkIV2 = $_POST['chkIV2'];
    if(isset($chkIV2)) {
        $ivALS2 = $_POST['ivALS2'];
    } else {
        $ivALS2 = '';
    }
    //Insert BLS here
    $chkBLS = implode(',', $_POST['chkBLS']);
    
    $chkVenBLS = $_POST['chkVenBLS'];
    if(isset($chkVenBLS)) {
        $venMethod = $_POST['venMethod'];
    } else {
        $venMethod = '' ;
    }
    
    $chkCPRby = $_POST['chkCPRby'];
    if(isset($chkCPRby)) {
        $cprBy = $_POST['cprBy'];
    } else {
        $cprBy = '';
    }
    
    $chkCprStart = $_POST['chkCprStart'];
    if(isset($chkCprStart)) {
        $cprArrest = $_POST['cprArrest'];
        $cprStart = $_POST['cprStart'] . "(Time from Arrest til CPR:'" . $cprArrest . ')';  
    } else {
        $cprStart = '';
    }
    
    $chkDefi = $_POST['chkDefi'];
    if(isset($chkDefi)) {
        $radDefi = $_POST['radDefi'];
        $defiTimes = $_POST['defiTimes'] . '(' . $radDefi . ')';
    } else {
        $defiTimes = '';
    }
    
    $chkMast = $_POST['chkMast'];
    if(isset($chkCPRby)) {
        $mastBLS = $_POST['mastBLS'];
    } else {
        $mastBLS = '';
    }
    
    $chkBleed = $_POST['chkBleed'];
    if(isset($chkBleed)) {
        $bleedBLS = $_POST['bleedBLS'];
    } else {
        $bleedBLS = '';
    }
    
    $chkVomit = $_POST['chkVomit'];
    if(isset($chkVomit)) {
        $vomitBLS = $_POST['vomitBLS'];
    } else {
        $vomitBLS = '';
    }
    
    $chkRestraint = $_POST['chkRestraint'];
    if(isset($chkRestraint)) {
        $restraintBLS = $_POST['restraintBLS'];
    } else {
        $restraintBLS = '';
    }
    
    $chkBleed = $_POST['chkBleed'];
    if(isset($chkBleed)) {
        $bleedBLS = $_POST['bleedBLS'];
    } else {
        $bleedBLS = '';
    }
    
    $chkBaby = $_POST['chkBaby'];
    if(isset($chkBaby)) {
        $txtBabyDelivery = $_POST['txtBabyDelivery'];
        $txtBabyCountry = $_POST['txtBabyCountry'];
        $radBaby = $_POST['radBaby'];
        $babyBLS = 'Baby Delivered @' . $txtBabyDelivery . '. ' 
                . 'In country: ' . $txtBabyCountry . '(' . $radBaby .')';
    } else {
        $babyBLS = '';
    }
    
    $chkAED = $_POST['chkAED'];
    if(isset($chkAED)) {
        $aedBLS = $_POST['aedBLS'];
    } else {
        $aedBLS = '';
    }
    
    $chkOtherBLS = $_POST['chkOtherBLS'];
    if(isset($chkOtherBLS)) {
        $otherBLS = $_POST['otherBLS'];
    } else {
        $otherBLS = '';
    }
    
    $stmt1 = $conn->prepare("SELECT runId FROM  treatmengiven WHERE runId = ?");
    $stmt1->execute([$runId]);
    $count = $stmt1->rowCount();
    echo $count; 
    if ($count == "0") {
        $sql = "INSERT INTO `treatmengiven` (`runId`, `inputALS`, `ekgALS`, `cardioALS`, `ivALS`,
                                        `inputBLS`, `venMethod`, `cprBy`, `cprStart`, `defiTimes`,
                                        `mastBLS`, `bleedBLS`, `vomitBLS`, `restraintBLS`, `babyBLS`,
                                        `aedBLS`, `otherBLS`)
            VALUE(:runId,:inputALS, :ekgALS, :cardioALS, :ivALS,
                  :inputBLS, :venMethod, :cprBy, :cprStart, :defiTimes,
                  :mastBLS, :bleedBLS, :vomitBLS, :restraintBLS, :babyBLS,
                  :aedBLS, :otherBLS)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':inputALS', $chkALS);
        $stmt->bindValue(':ekgALS', $ekgALS);
        $stmt->bindValue(':cardioALS', $cardioALS);
        $stmt->bindValue(':ivALS', $ivALS);
        
        $stmt->bindValue(':inputBLS', $chkBLS);
        $stmt->bindValue(':venMethod', $venMethod);
        $stmt->bindValue(':cprBy', $cprBy);
        $stmt->bindValue(':cprStart', $cprStart);
        $stmt->bindValue(':defiTimes', $defiTimes);
        
        $stmt->bindValue(':mastBLS', $mastBLS);
        $stmt->bindValue(':bleedBLS', $bleedBLS);
        $stmt->bindValue(':vomitBLS', $vomitBLS);
        $stmt->bindValue(':restraintBLS', $restraintBLS);
        $stmt->bindValue(':babyBLS', $babyBLS);
        
        $stmt->bindValue(':aedBLS', $aedBLS);
        $stmt->bindValue(':otherBLS', $otherBLS);
        
        $stmt->execute();
    } else {
        echo "treatment runId is already existed";
    }
    
    //State SQL to prepare  
   
    /*echo $chkALS . '<br>';
    echo $ekgALS . '<br>';
    echo $cardioALS . '<br>';
    echo $ivALS . '<br>';
    echo $ivALS2 . '<br>';
    echo $chkBLS . '<br>';
    echo $cprBy . '<br>';
    echo $cprStart . '<br>';
    echo $defiTimes . '<br>';
    echo $mastBLS . '<br>';
    echo $bleedBLS . '<br>';
    echo $babyBLS . '<br>';
    echo $aedBLS . '<br>';
    echo $otherBLS . '<br>';*/
   
}

//-----------------TreatmentGiven End--------------------------


//-----------------Insert Disposition Start------------------
function insertDisposition() {
    require('pdoConfig.php');
    $runId = $_POST['runId'];
    
    $dispoCode = $_POST['txtDisCode'];
    $dispoDestination = $_POST['txtDisDes'];
    $dispoPurpose = $_POST['selDisPurpose'];
    $dispoRequester = $_POST['selDisRequester'];
    
    $patientWeight = $_POST['txtDisWeight'];
    $roundtripPurpose = $_POST['txtDisRound'];
    $stretcherReason = $_POST['txtDisStretcher'];
    
    $dispoDeath = implode(' ,', $_POST['chkDisDeath']);
    $dispoTransportation = implode(', ', $_POST['chkDisTransport']);
    
    $tableName = "disposition";
    $count = datacheck($runId, $tableName);
    
    if ($count == "0") {
        $query = "INSERT INTO `disposition` (`runId`, `dispoCode`, `dispoDestination`, `dispoPurpose`, `dispoRequester`,
                                        `patientWeight`, `roundtripPurpose`, `stretcherReason`, `dispoDeath`, `dispoTransportation`)
              VALUE (:runId, :dispoCode, :dispoDestination, :dispoPurpose, :dispoRequester,
                    :patientWeight, :roundtripPurpose, :strecherReason, :dispoDeath, :dispoTransportation);";
        $stmt = $conn->prepare($query);
        
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':dispoCode', $dispoCode);
        $stmt->bindValue(':dispoDestination', $dispoDestination);
        $stmt->bindValue(':dispoPurpose', $dispoPurpose);
        $stmt->bindValue(':dispoRequester', $dispoRequester);
        
        $stmt->bindValue(':patientWeight', $patientWeight);
        $stmt->bindValue(':roundtripPurpose', $roundtripPurpose);
        $stmt->bindValue(':strecherReason', $stretcherReason);
        $stmt->bindValue(':dispoDeath', $dispoDeath);
        $stmt->bindValue(':dispoTransportation', $dispoTransportation);
        $stmt->execute();
    } else {
        
        echo "<br>" . "Disposition run Id is existed";
        
    }
    
}
//-----------------Insert Disposition End ------------------

//-----------------Insert Crew Member --------------
function insertCrew() {
   require('pdoConfig.php');
   $runId = $_POST['runId'];
 
   $pkIdSql = $conn->prepare('SELECT pk_PatientCareReport WHERE runId = ?');
   $pkIdSql->execute([$runId]);
   foreach ($pkIdSql as $row) {
       $fr_pk_PatientCareReport = $row['pk_PatientCareReport'];
   }
   
   
   
    
}
//-----------------Insert Crew Member --------------


//-------------------Insert Authorization Form-----------------
function insertSignature() {
    require('pdoConfig.php');
    $runId = $_POST['runId'];
    
    $sec1PatientSign = $_POST['signSec1'] ;
    $sec1WitSign = $_POST['signSec2'] ;
    $sec1WitPrint = $_POST['txtWitnessName'] ;
    
    $sec2Reason = $_POST['txtReasonII'] ;
    $sec2RepSign = $_POST['signSec3'] ;
    $sec2RepPrint = $_POST['txtRepName'] ;
    
    $sec3Reason = $_POST['txtReasonIII'] ;
    $sec3FacName = $_POST['txtFacilityIII'] ;
    $sec3ReTime = $_POST['txtFacilityTime'] ;
    $sec3CrewSign = $_POST['signSec4'] ;
    $sec3CrewPrint = $_POST['txtCrewIII'] ;
    $sec3FacRep = $_POST['signSec5'] ;
    $sec3RepPrint = $_POST['txtRepIII'] ;
    $sec3Secondary = $_POST['chkSecIII'] ;
    
  /*  echo $runId . '<br>';
    
    echo $sec1PatientSign . '<br>' ;
    echo $sec1WitSign . '<br>';
    echo $sec1WitPrint . '<br>';
    
    echo $sec2Reason . '<br>';
    echo $sec2RepSign . '<br>';
    echo $sec2RepPrint . '<br>';
    
    echo $sec3Reason . '<br>';
    echo $sec3FacName . '<br>';
    echo $sec3ReTime . '<br>';
    echo $sec3CrewSign . '<br>';
    echo $sec3CrewPrint . '<br>';
    echo $sec3FacRep . '<br>';
    echo $sec3RepPrint . '<br>';
    echo $sec3Secondary . '<br>'; */
    
    //Make query and connection
    $tableName = "signatures";
    $count = dataCheck($runId, $tableName);
    
    if($count == '0') {
        $query = "INSERT INTO `signatures`(`runId`, `sec1PatientSign`, `sec1WitSign`, `sec1WitPrint`,
                                       `sec2Reason`, `sec2RepSign`, `sec2RepPrint`, `sec3Reason`,
                                       `sec3FacName`, `sec3ReTime`, `sec3CrewSign`, `sec3CrewPrint`,
                                       `sec3FacRep`, `sec3RepPrint`, `sec3Secondary`)
              VALUE(:runId, :sec1PatientSign, :sec1WitSign, :sec1WitPrint, :sec2Reason,
                    :sec2RepSign, :sec2RepPrint, :sec3Reason, :sec3FacName, :sec3ReTime,
                    :sec3CrewSign, :sec3CrewPrint, :sec3FacRep, :sec3RepPrint, :sec3Secondary)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':sec1PatientSign', $sec1PatientSign);
        $stmt->bindValue(':sec1WitSign', $sec1WitSign);
        $stmt->bindValue(':sec1WitPrint', $sec1WitPrint);
        
        $stmt->bindValue(':sec2Reason', $sec2Reason);
        $stmt->bindValue(':sec2RepSign', $sec2RepSign);
        $stmt->bindValue(':sec2RepPrint', $sec2RepPrint);
        
        $stmt->bindValue(':sec3Reason', $sec3Reason);
        $stmt->bindValue(':sec3FacName', $sec3FacName);
        $stmt->bindValue(':sec3ReTime', $sec3ReTime);
        $stmt->bindValue(':sec3CrewSign', $sec3CrewSign);
        $stmt->bindValue(':sec3CrewPrint', $sec3CrewPrint);
        $stmt->bindValue(':sec3FacRep', $sec3FacRep);
        $stmt->bindValue(':sec3RepPrint', $sec3RepPrint);
        $stmt->bindValue(':sec3Secondary', $sec3Secondary);
        
        $stmt->execute();
    } else {
        echo "<br>" . "Signature Run Id existed!";
    }
    
}
//-------------------Insert Authorization Form End -------------

//-------------------Insert APCF Form Start ------------------

function insertAPCF() {
    require('pdoConfig.php');
    
    $runId = $_POST['runId'];
    
    $patientAppoint = implode(',', $_POST['chkScheduleApp']);
    if(isset($_POST['chkAPCFtxt0'])) {
        $txtOtherApp = $_POST['txtOtherApp'];
        $patientAppoint = $txtOtherApp . ', ' . implode(',', $_POST['chkScheduleApp']);
    }
    
    
    $patientBedConfined = $_POST['patientBedConfined'];
    
    $reasonAmbulance = implode(',', $_POST['chkAmbulance']);
    if(isset($_POST['chkAmbulance1'])) {
        $txtAmbulance1 = $_POST['txtAmbulance1'];
        $reasonAmbulance .= $txtAmbulance1 . ', ';
    }
    if(isset($_POST['chkAmbulance2'])) {
        $txtAmbulance2 = $_POST['txtAmbulance2'];
        $reasonAmbulance .= $txtAmbulance2 . ', ';
    }
    
    $patientUlcer = implode(', ', $_POST['chkUlcer']) . " ";
    if(isset($_POST['chkUlcer1'])) {
        $txtUlcer1 = $_POST['txtUlcer1'];
        $patientUlcer .= $txtUlcer1 . ', ';
    }
    if(isset($_POST['chkUlcer2'])) {
        $txtUlcer2 = $_POST['txtUlcer2'];
        $patientUlcer .= $txtUlcer2 . ', ';
    }
    
    $patientPara = implode(', ',$_POST['chkPara']);
    
    $patientFracture = implode(', ', $_POST['chkFracture']);
    if(isset($_POST['chkFracture1'])) {
        $txtFracture1 = $_POST['txtFracture1'];
        $patientFracture .= $txtFracture1 . ', ';
    }
    
    $patientContractures = implode(',', $_POST['chkContractures']);
    $patientPsychic = implode(',', $_POST['chkPsychic']);
    $patientMonitoring = implode(',', $_POST['chkPatientRequire']);
    
    $patientIsolation = implode(',', $_POST['chkIsolation']);
    if(isset($_POST['chkIsolation1'])) {
        $txtIsolation1 = $_POST['txtIsolation1'];
        $patientIsolation .= $txtIsolation1 . ', ';
    }
    
    $patientOtherAPCF = $_POST['txtAPCFother'];
    $physicianPrint = $_POST['txtPhysicianName'];
    $physicianSign = $_POST['signAPCF'];
    
    $tableName = "apcf";
    $count = dataCheck($runId, $tableName);
    if ($count == "0") {
    //prepare SQL and make connection
    $sql = "INSERT INTO `apcf` (`runId`, `patientAppoint`, `patientBedConfined`, `reasonAmbulance`, `patientUlcer`,
                                        `patientPara`, `patientFracture`, `patientContractures`, `patientPsychiatric`, `patientMonitoring`,
                                        `patientIsolation`, `patientOtherAPCF`, `physicianPrint`, `physicianSign`)
             VALUE(:runId,:patientAppoint, :patientBedConfined, :reasonAmbulance, :patientUlcer,
                   :patientPara,:patientFracture, :patientContractures, :patientPsychiatric, :patientMonitoring,
                    :patientIsolation,:patientOtherAPCF, :physicianPrint, :physicianSign)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':runId', $runId);
    $stmt->bindValue(':patientAppoint', $patientAppoint);
    $stmt->bindValue(':patientBedConfined', $patientBedConfined);
    $stmt->bindValue(':reasonAmbulance', $reasonAmbulance);
    $stmt->bindValue(':patientUlcer', $patientUlcer);
    $stmt->bindValue(':patientPara', $patientPara);
    $stmt->bindValue(':patientFracture', $patientFracture);
    $stmt->bindValue(':patientContractures', $patientContractures);
    $stmt->bindValue(':patientPsychiatric', $patientPsychic);
    $stmt->bindValue(':patientMonitoring', $patientMonitoring);
    $stmt->bindValue(':patientIsolation', $patientIsolation);
    $stmt->bindValue(':patientOtherAPCF', $patientOtherAPCF);
    $stmt->bindValue(':physicianPrint', $physicianPrint);
    $stmt->bindValue(':physicianSign', $physicianSign);
    $stmt->execute();
    }   else {
        
        echo "<br>" . $tableName . "APCF run Id  is already existed.";
        
    }
    
}

//-------------------Insert APCF Form End ------------------

//---------------------Insert Narrative Notes --------------------------

function insertNarrativeNote() {
    require('pdoConfig.php');
    $runId = $_POST['runId'];
    $narrativeNote = $_POST['txtNarrativeNote'];
    $amaSign = $_POST['signOut1'];
    $patientAmaSign = $_POST['signOut2'];
    
    //make query and start connection
    $tableName = 'narrativeNotes';
    $count = dataCheck($runId, $tableName);
    
    if ($count == "0") {
        $query = "INSERT INTO `narrativeNotes`(`runId`,`narrativeNotes`, `amaSign`, `patientAmaSign`)
              VALUE(:runId, :narrativeNotes, :amaSign, :patientAmaSign) ";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':runId', $runId);
        $stmt->bindValue(':narrativeNotes', $narrativeNote);
        $stmt->bindValue(':amaSign', $amaSign);
        $stmt->bindValue(':patientAmaSign', $patientAmaSign);
        $stmt->execute();
    } else {
        echo "<br>" .'Narrativenote runs Id exist';
    }
}
//--------------------Insert Narrative Notes End ----------------------

//--------------------Insert Authorization --------------------------

//--------------------Insert Authorization End ---------------------

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


//Insert vital table into database vital table 
function insertVital1(){
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
        
        $rowNum = $i;
        echo $maxRow;
        echo $vitalRes;
        echo $vitalPulse;
        $sqlVital = "INSERT INTO vitaltable (runId, maxRow, rowNum, vitalTime, vitalRes, vitalPulse, vitalCons, vitalPupils, vitalSkin, vitalStatus)
                     VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlVital);
        $stmt->execute([$runId, $maxRow, $rowNum, $vitalTime[$i], $vitalRes, $vitalPulse, $radCons, $radPupil, $radSkin, $radStatus]);
    }
}

function insertVital(){
    require('pdoConfig.php');
    //Get the POST or session input
    $runId = $_POST['runId'];
    
    $row = explode("_", $_POST['rowNumber']);
    
    if($row[1] >= 0){
        $maxRow =  $row[1];
        $_SESSION['maxRow'] = $maxRow;
    }
    
    $vitalTime = $_POST['vitalTime'];
    $vitalResRate = $_POST['vitalResRate'];
    $vitalPulseRate = $_POST['vitalPulseRate'];
    $txtBP = $_POST['txtBP'];
    //Need to loops through i to get all the values
    for ($i = 0; $i <= $maxRow; $i++) {
        $radCons = $_POST['radCons'. $i];
        $radRightPupil = $_POST['radRightPupil'. $i];
        $radLeftPupil = $_POST['radLeftPupil'. $i];
        $radPupil = $radRightPupil + $radLeftPupil;
        $radSkin = $_POST['radSkin'. $i];
        $radStatus = $_POST['radStatus'. $i];
        
        $vitalResCheck = $_POST['vitalResCheck' . $i];
        $vitalPulseCheck = $_POST['chkPulse' . $i];
        
        $vitalRes = ($vitalResRate[$i] . ' ' . implode(',', $vitalResCheck));
        $vitalPulse = ($vitalPulseRate[$i] . ' ' . implode(',', $vitalPulseCheck));
        
        $rowNum = $i;
        echo $maxRow;
        echo $vitalRes;
        echo $vitalPulse;
        $sqlVital = "INSERT INTO vitaltable (runId, maxRow, rowNum, vitalTime, vitalRes, vitalPulse, vitalCons, vitalPupils, vitalSkin, vitalStatus)
                     VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
    /*    $patientFname = $_POST['firstName'];
        $patientLname = $_POST['lastName'];
        $patientAddress = $_POST['address'];
        $patientDOB = $_POST['dob'];
        $patientPhone1 = $_POST['phone1'];
        $_SESSION['patientFname'] = $patientFname;
        $_SESSION['patientLname'] = $patientLname;
        $_SESSION['patientAddress'] = $patientAddress;
        $_SESSION['patientDOB'] = $patientDOB;
        $_SESSION['patientPhone1'] = $patientPhone1;*/
        $patientId = $_POST['modalId'];
        $_SESSION['patientId'] = $patientId;
        redirect('initializePCR.php');
    }
    
    if(isset($_POST['updatePatient'])){
        $patientId = $_POST['modalId'];
        $_SESSION['patientId'] = $patientId;
        redirect('updatePatient.php');
    }
}
//------------------ Add Patient to DB ----------------
function addPatient() {
    
        require("pdoConfig.php");
        $patientFname = trim_input($_POST['patientFname']);
        $patientLname = trim_input($_POST['patientLname']);
        $patientAddress = trim_input($_POST['patientAddress']);
        $patientPhone1 = trim_input($_POST['patientPhone1']);
        $patientPhone2 = trim_input($_POST['patientPhone2']);
        $patientZipcode = trim_input($_POST['patientZipcode']);
        $patientDOB = trim_input($_POST['patientDOB']);
        $patientAge = trim_input($_POST['patientAge']);
        $patientGender = trim_input($_POST['patientGender']);
        $patientRace = trim_input($_POST['patientRace']);
        $patientSS = trim_input($_POST['patientSS']);
        $patientEmerContact = trim_input($_POST['patientEmerContact']);
        $patientEmerPhone = trim_input($_POST['patientEmerPhone']);
        
        //Select patient info in DB then compare to not allow duplicate
        $sqlPatientIndex = 'SELECT patientFname, patientLname, patientAddress, patientDOB
                                       FROM patients
                                       WHERE (patientFname = ?
                                       AND patientLname = ?
                                       AND patientAddress = ?
                                       AND patientAge = ?)';
        $stmtIndex = $conn->prepare($sqlPatientIndex);
        $stmtIndex->execute([$patientFname, $patientLname, $patientAddress, $patientAge]);
        $row = $stmtIndex->fetch(PDO::FETCH_ASSOC);
        
        if($row >= 1) {
            echo '<script language="javascript">';
            echo 'alert("Patient Is Already Existed. Please Search for The Patient or Retry!")';
            echo '</script>';
        }
        else {
            //PDO prepare SQL and Insert if patient is not existed
            $sqlPatientInfo = "INSERT INTO patients (patientFname, patientLname, patientAddress, patientPhone1, patientPhone2, patientZipcode, patientDOB, patientAge, patientGender, patientRace, patientSS,patientEmerContact,patientEmerPhone)
                           VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sqlPatientInfo);
            $stmt->execute([$patientFname,$patientLname,$patientAddress,$patientPhone1,$patientPhone2, $patientZipcode,$patientDOB, $patientAge, $patientGender, $patientRace, $patientSS,$patientEmerContact,$patientEmerPhone]);
          
            echo '<script language="javascript">';
            echo 'alert("Patient has been added sucessfully")';
            echo '</script>';
           
        }
     
}

function addInsurance() {
    require('pdoConfig.php');
    //specific patient info to find patient Id
    $patientFname = trim_input($_POST['patientFname']);
    $patientLname = trim_input($_POST['patientLname']);
    $patientAddress = trim_input($_POST['patientAddress']);
    $patientAge = trim_input($_POST['patientAge']);
    $patientRace = trim_input($_POST['patientRace']);
   echo $patientFname;
   echo $patientLname;
   echo 'Age: ' . $patientAge;
   echo $patientAddress;
   echo $patientRace;
    //gotta find patientId based on the form input 
    $sqlId = 'SELECT patientId 
              FROM patients
              WHERE (patientFname = ? AND patientLname = ? AND
                     patientAddress = ? AND patientAge = ? AND 
                     patientRace = ?)';
    $stmtId = $conn->prepare($sqlId);
    $stmtId->execute([$patientFname, $patientLname, $patientAddress, $patientAge, $patientRace]);
    foreach ($stmtId as $row) {
        $patientId = $row['patientId'];
    }
    
    echo $patientId;
    //Found patientId
    
    $insurPolicy1 = trim_input($_POST['insurPolicy1']);
    $insurCompany1 = trim_input($_POST['insurCompany1']);
    $insurAddress1 = trim_input($_POST['insurAddress1']);
    $insurPhone1 = trim_input($_POST['insurPhone1']);
    $insurGroup1 = trim_input($_POST['insurGroup1']);
    $insurPol1 = trim_input($_POST['insurPol1']);
    $insurHolder1 = trim_input($_POST['insurHolder1']);
    $insurSS1 = trim_input($_POST['insurSS1']);
    $insurDOB1 = trim_input($_POST['insurDOB1']);
    $insurMedicare1 = trim_input($_POST['insurMedicare1']);
    $insurMedicaid1 = trim_input($_POST['insurMedicaid1']);
    $insurClaim1 = trim_input($_POST['insurClaim1']);
    
    $insurPolicy2 = ($_POST['insurPolicy2']);
    $insurCompany2 = ($_POST['insurCompany2']);
    $insurAddress2 = ($_POST['insurAddress2']);
    $insurPhone2 = ($_POST['insurPhone2']);
    $insurGroup2 = $_POST['insurGroup2'];
    $insurPol2 = $_POST['insurPol2'];
    $insurHolder2 = $_POST['insurHolder2'];
    $insurSS2 = $_POST['insurSS2'];
    $insurDOB2 = $_POST['insurDOB2'];
    $insurMedicare2 = $_POST['insurMedicare2'];
    $insurMedicaid2 = $_POST['insurMedicaid2'];
    $insurClaim2 = $_POST['insurClaim2'];
    
    //Query and Connection
    $sql = "INSERT INTO insurancetable(patientId, insurPolicy1, insurCompany1, insurAddress1,
                                       insurPhone1, insurGroup1, insurPol1, insurHolder1,
                                       insurSS1, insurDOB1, insurMedicare1, insurMedicaid1, 
                                       insurClaim1)
                        VALUE(?, ?, ?, ?,
                              ?, ?, ?, ?, 
                              ?, ?, ?, ?, 
                              ?) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$patientId, $insurPolicy1, $insurCompany1, $insurAddress1, 
        $insurPhone1, $insurGroup1, $insurPol1, $insurHolder1, 
        $insurSS1, $insurDOB1, $insurMedicare1, $insurMedicaid1,
        $insurClaim1]);
    
} 
//------------------- End Add Patient -----------------

//------------------- Update Patient Start ------------
function updatePatient() {
    require('pdoConfig.php');
    $patientId = trim_input($_SESSION['patientId']);
    $patientFname = trim_input($_POST['patientFname']);
    $patientLname = trim_input($_POST['patientLname']);
    $patientAddress = trim_input($_POST['patientAddress']);
    $patientPhone1 = trim_input($_POST['patientPhone1']);
    $patientPhone2 = trim_input($_POST['patientPhone2']);
    $patientZipcode = trim_input($_POST['patientZipcode']);
    $patientDOB = trim_input($_POST['patientDOB']);
    $patientAge = trim_input($_POST['patientAge']);
    $patientGender = trim_input($_POST['patientGender']);
    $patientRace = trim_input($_POST['patientRace']);
    $patientSS = trim_input($_POST['patientSS']);
    $patientEmerContact = trim_input($_POST['patientEmerContact']);
    $patientEmerPhone = trim_input($_POST['patientEmerPhone']);
    //Make sql to update patient 
    $updateSQL = $conn->prepare('UPDATE patients 
                                 SET patientFname = ?, patientLname = ?, patientAddress = ?, patientPhone1 = ?, patientPhone2 = ?,
                                     patientZipcode = ?, patientDOB = ?, patientAge= ?, patientGender = ?, patientRace = ?, 
                                     patientSS = ?, patientEmerContact = ?, patientEmerPhone = ?
                                WHERE patientId = ?');
    $updateSQL->execute([$patientFname, $patientLname, $patientAddress, $patientPhone1, $patientPhone2,
                        $patientZipcode, $patientDOB, $patientAge, $patientGender, $patientRace,
                        $patientSS, $patientEmerContact, $patientEmerPhone, $patientId]);
    echo '<script language="javascript">';
    echo 'alert("Patient has been updated!")';
    echo '</script>';
}

function updateInsurance() {
    require('pdoConfig.php');
    $patientId = trim_input($_SESSION['patientId']);
    //Get input from the Form
    $insurPolicy1 = trim_input($_POST['insurPolicy1']);
    $insurCompany1 = trim_input($_POST['insurCompany1']);
    $insurAddress1 = trim_input($_POST['insurAddress1']);
    $insurPhone1 = trim_input($_POST['insurPhone1']);
    $insurGroup1 = trim_input($_POST['insurGroup1']);
    $insurPol1 = trim_input($_POST['insurPol1']);
    $insurHolder1 = trim_input($_POST['insurHolder1']);
    $insurSS1 = trim_input( $_POST['insurSS1']);
    $insurDOB1 = trim_input($_POST['insurDOB1']);
    $insurMedicare1 = trim_input($_POST['insurMedicare1']);
    $insurMedicaid1 = trim_input($_POST['insurMedicaid1']);
    $insurClaim1 = trim_input($_POST['insurClaim1']);
    //If the patient Id is existed in the Insurance table then update, if not, initilize row insert
    $sqlcount = $conn->prepare('SELECT patientId FROM insurancetable WHERE patientId = ?');
    $sqlcount->execute([$patientId]);
    if ($sqlcount->rowcount() > 1) {
        $sql = "INSERT INTO insurancetable(patientId, insurPolicy1, insurCompany1, insurAddress1,
                                       insurPhone1, insurGroup1, insurPol1, insurHolder1,
                                       insurSS1, insurDOB1, insurMedicare1, insurMedicaid1,
                                       insurClaim1)
                        VALUE(?, ?, ?, ?,
                              ?, ?, ?, ?,
                              ?, ?, ?, ?,
                              ?) ";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$patientId, $insurPolicy1, $insurCompany1, $insurAddress1,
            $insurPhone1, $insurGroup1, $insurPol1, $insurHolder1,
            $insurSS1, $insurDOB1, $insurMedicare1, $insurMedicaid1,
            $insurClaim1]);
    } else {
        $updateInsurance = $conn->prepare('UPDATE insurancetable 
                                           SET insurPolicy1 = ?, insurCompany1 = ?, insurAddress1 = ?,
                                           insurPhone1 = ?, insurGroup1 = ?, insurPol1 = ?, insurHolder1 = ?,
                                           insurSS1 = ?, insurDOB1 = ?, insurMedicare1 = ?, insurMedicaid1 = ?,
                                           insurClaim1 = ?');
        $updateInsurance->execute([$insurPolicy1, $insurCompany1, $insurAddress1,
            $insurPhone1, $insurGroup1, $insurPol1, $insurHolder1,
            $insurSS1, $insurDOB1, $insurMedicare1, $insurMedicaid1,
            $insurClaim1]);
    }
    
}
//------------------- Update Patient Ends -------------

//--------------------Printing Function Start Here -------------------
function getDemographic() {
    require('pdoConfig.php');
    $runId = trim_input($_SESSION['runId']);
    //User run Id to get Dispatch table rows 
    //make connection for Dispatch Form
    $dispatchQuery = $conn->prepare('SELECT mileage, dispatchDate, runId, vehId, agencyName,
                                    agencyLocation, locationCode, dispatchinfo, locationType, crossStreet,
                                    timeReceived, timeRoute, timeAtScene, timeFromScene, timeAtDes,
                                    timeInService, timeInQuarter, dispatchCallType, dispatchPatientNumb, dispatchMethod
                                     FROM dispatchtable
                                     WHERE runId = ?');
    $dispatchQuery->execute([$runId]);
    foreach ($dispatchQuery as $row) {
        $mileage = $row['mileage'];
        $dispatchDate = $row['dispatchDate'];
        $runId = $row['runId'];
        $vehId = $row['vehId'];
        $agencyName = $row['agencyName'];
        $agencyLocation = $row['agencyLocation'];
        $locationCode = $row['locationCode'];
        $dispatchinfo = $row['dispatchinfo'];
        $locationType = $row['locationType'];
        $crossStreet = $row['crossStreet'];
        $timeReceived = $row['timeReceived'];
        $timeRoute = $row['timeRoute'];
        $timeAtScene = $row['timeAtScene'];
        $timeFromScene = $row['timeFromScene'];
        $timeAtDes = $row['timeAtDes'];
        $timeInService = $row['timeInService'];
        $timeInQuarter = $row['timeInQuarter'];
        $dispatchCallType = $row['dispatchCallType'];
        $dispatchPatientNumb = $row['dispatchPatientNumb'];
        $dispatchMethod = $row['dispatchMethod'];
        
        /* $_SESSION['mileage'] = $row['mileage'];
         $_SESSION['dispatchDate'] = $row['dispatchDate'];
         $_SESSION['runId'] = $row['runId'];
         $_SESSION['vehId'] = $row['vehId'];
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
         $_SESSION['dispatchCallType'] = $row['dispatchCallType'];
         $_SESSION['dispatchPatientNumb'] = $row['dispatchPatientNumb'];
         $_SESSION['dispatchMethod'] = $row['dispatchMethod'];*/
    }
        
    //Use run Id as an index to pull out patientId
    $queryPatientId = $conn->prepare('SELECT patientId
                                          FROM pcrtable
                                          WHERE runId = ?');
    $queryPatientId->execute([$runId]);
    foreach($queryPatientId as $row) {
        $patientId = $row['patientId'];
    }
    
    echo 'patientId: ' . $patientId;
    //make connection
    $query = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientAge, patientGender, patientRace, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients
                                WHERE patientId = ?');
    $query->execute([$patientId]);
    foreach($query as $row){
        $patientId = $row['patientId'];
        $patientFname = $row['patientFname'];
        $patientLname = $row['patientLname'];
        $patientAddress = $row['patientAddress'];
        $patientPhone1 = $row['patientPhone1'];
        $patientPhone2 = $row['patientPhone2'];
        $patientZipcode = $row['patientZipcode'];
        $patientDOB = $row['patientDOB'];
        $patientAge = $row['patientAge'];
        $patientGender = $row['patientGender'];
        $patientRace = $row['patientRace'];
        $patientSS = $row['patientSS'];
        $patientEmerContact = $row['patientEmerContact'];
        $patientEmerPhone = $row['patientEmerPhone'];
    }
    
    if(!empty($patientZipcode)) {
        $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
        $queryZipcode->execute([$patientZipcode]);
        foreach($queryZipcode as $row) {
            $patientCity = $row['patientCity'];
            $patientState = $row['patientState'];
        }
    }
    
    if(!empty($patientId)) {
        $queryInsur = $conn->prepare('SELECT insurPolicy1, insurCompany1, insurAddress1, insurPhone1, insurGroup1,
                                    insurPol1, insurHolder1, insurSS1, insurDOB1, insurMedicaid1,
                                    insurMedicare1, insurClaim1
                                    FROM insurancetable
                                    WHERE patientId = ?');
        $queryInsur->execute([$patientId]);
        foreach($queryInsur as $row) {
            $insurPolicy1 = $row['insurPolicy1'];
            $insurCompany1 = $row['insurCompany1'];
            $insurAddress1 = $row['insurAddress1'];
            $insurPhone1 = $row['insurPhone1'];
            $insurGroup1 = $row['insurGroup1'];
            $insurPol1 = $row['insurPol1'];
            $insurHolder1 = $row['insurHolder1'];
            $insurSS1 = $row['insurSS1'];
            $insurDOB1 = $row['insurDOB1'];
            $insurMedicaid1 = $row['insurMedicaid1'];
            $insurMedicare1 = $row['insurMedicare1'];
            $insurClaim1 = $row['insurClaim1'];
        }
    }
    
    //Get input from Problemtable
    $query = $conn->prepare('SELECT traumaComplain, traumaInjury, presentProblem, medicalComplain, medicalHistory,
                                   patientMedication, patientAllergy, traumaMapItems, painKey
                            FROM problemtable
                            WHERE runId = ?');
    $query->execute([$runId]);
    foreach ($query as $row) {
        $traumaComplain = $row['traumaComplain'];
        $traumaInjury = $row['traumaInjury'];
        $presentProblem = $row['presentProblem'];
        $medicalComplain = $row['medicalComplain'];
        $medicalHistory = $row['medicalHistory'];
        $patientMedication = $row['patientMedication'];
        $patientAllergy = $row['patientAllergy'];
        $traumaMapItems = $row['traumaMapItems'];
        $painKey = $row['painKey'];
    }
    
    //get input from narrative notes
    $query = $conn->prepare('SELECT narrativeNotes, amaSign, patientAmaSign
                            FROM narrativenotes
                            WHERE runId = ?');
    $query->execute([$patientRunId]);
    foreach ($query as $row) {
        $narrativeNotes = $row['narrativeNotes'];
        $amaSign = $row['amaSign'];
        $patientAmaSign = $row['patientAmaSign'];
        
    }
    
    include(TEMPLATE_BACK . DS . "printTemplate.php");
}
function fillPDF() {
  
    $runId = trim_input($_SESSION['runId']);
    echo 'Run Id is ' . $runId . '<br>';
    if(!empty($runId)) {
       
        getDemographic();
        
    }
}

//--------------------Printing Function End Here ------------
?>