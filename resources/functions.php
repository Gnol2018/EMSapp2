<?php 
//Helper Function
/*if($connection) {
    echo 'you are connected';
} else {
    echo 'server is not connected';
}*/
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

function escape_string($string){
    
    global $connection;
    
    return mysqli_real_escape_string($connection, $string);
       
}

function query($sql) {
    
    global $connection;
    
    return mysqli_query($connection, $sql);
    
}

function confirm($result){
    
    global $connection;
    
    if(!$result) {      
        die("QUERY FAILED " . mysqli_error($connection));  
    }
}
//Helper Function End Here

//Login User Start Here
function userLogin(){
    if(isset($_POST['loginSubmit'])) {
        $userName = escape_string($_POST['userName']);
        $password = escape_string($_POST['password']);
        
        $query = query("SELECT * FROM users WHERE username = '{$userName}' AND password = '{$password}'");
        confirm($query);
        
        if (mysqli_num_rows($query) == 0) {
           set_message("Your User Name or Password is Wrong!");
           redirect('index.php');
        } else {
           redirect('form.php');
        }
    }
}
//Login End Here

/*$mileTotal = "";
$dispatchDate =  "";
$runId = "";
$timeReceived = "";
$timeRoute = "";
$timeAtScene =  "";
$timeFromScene = "";
$timeAtDes = "";
$timeInService =  "";
$timeInQuarter = "";*/
/*
if(isset($_POST['dispatchSubmit'])) {
    //set Dispatch form inputs to Session Varible for printing
    $mileTotal = escape_string($_POST['mileTotal']);
    $dispatchDate = escape_string($_POST['dispatchDate']);
    $runId = escape_string($_POST['runId']);
    $dispatchAgency = escape_string($_POST['dispatchAgency']);
    $dispatchLocation = escape_string($_POST['dispatchLocation']);
    $timeReceived = escape_string($_POST['timeReceived']);
    $timeRoute = escape_string($_POST['timeRoute']);
    $timeAtScene = escape_string($_POST['timeAtScene']);
    $timeFromScene = escape_string($_POST['timeFromScene']);
    $timeAtDes = escape_string($_POST['timeAtDes']);
    $timeInService = escape_string($_POST['timeInService']);
    $timeInQuarter = escape_string($_POST['timeInQuarter']);
    $dispatchCallType = escape_string($_POST['dispatchCallType']);
    $dispatchPatientNumb = escape_string($_POST['dispatchPatientNumb']);
    $dispatchMethod = escape_string($_POST['dispatchMethod']);
    
    //Set Demographic form inputs to SEssion Variable for printing
    $patientFname = escape_string($_POST['patientFname']);
    $patientMname = escape_string($_POST['patientMname']);
    $patientLname = escape_string($_POST['patientLname']);
    $patientAddress = escape_string($_POST['patientAddress']);
    $patientPhone1 = escape_string($_POST['patientPhone1']);
    
    //Set Presenting Problem form to Session Variable
    $traumaComplaint = $_POST['traumaComplaint'];
    $traumaInjury = $_POST['trauma_injury'];
    $presentProblem = $_POST['present_problem'];
    $medicalComplaint = $_POST['medicalComplaint'];
    $pastMedical = $_POST['past_medical'];
    $traumaMapItems = $_POST['traumaMapItems'];
    
    //Narrative Notes
    $signOut1= $_POST['signOut1'];
    }    
        
$_SESSION['mileTotal'] = $mileTotal;
$_SESSION['dispatchDate'] = $dispatchDate;
$_SESSION['runId'] = $runId;
$_SESSION['dispatchAgency'] = $dispatchAgency;
$_SESSION['dispatchLocation'] = $dispatchLocation;
$_SESSION['timeReceived'] = $timeReceived;
$_SESSION['timeRoute'] = $timeRoute;
$_SESSION['timeAtScene'] = $timeAtScene;
$_SESSION['timeFromScene'] = $timeFromScene;
$_SESSION['timeAtDes'] = $timeAtDes;
$_SESSION['timeInService'] = $timeInService;
$_SESSION['timeInQuarter'] = $timeInQuarter;
$_SESSION['dispatchCallType'] = $dispatchCallType;
$_SESSION['dispatchPatientNumb'] = $dispatchPatientNumb;
$_SESSION['dispatchMethod'] = $dispatchMethod;

//Demographic Session Variable
$_SESSION['patientFname'] = $patientFname;
$_SESSION['patientMname'] = $patientMname;
$_SESSION['patientLname'] = $patientLname;
$_SESSION['patientAddress'] = $patientAddress;
$_SESSION['patientPhone1'] = $patientPhone1;

//Presenting Problems
$_SESSION['traumaComplaint'] = $traumaComplaint;
$_SESSION['traumaInjury'] = $traumaInjury;
$_SESSION['presentProblem'] = $presentProblem;
$_SESSION['medicalComplaint'] = $medicalComplaint;
$_SESSION['pastMedical'] = $pastMedical;
$_SESSION['traumaMapItems'] = $traumaMapItems;

//Narrative Notes
$_SESSION['signOut1'] = $signOut1;

foreach($_SESSION['traumaInjury'] as $result){
    echo $result, '<br>';
}
foreach($_SESSION['presentProbem'] as $result){
    echo $result, '<br>';
}
foreach($_SESSION['pastMedical'] as $result){
    echo $result, '<br>';
}

echo $traumaComplaint;
echo $medicalComplaint;
echo $traumaMapItems;*/
?>