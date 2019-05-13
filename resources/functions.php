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
           $_SESSION['userName'] = $userName;
        }
    }
}
//PCR Form Find Function
function pcrFindOnDate(){
    if(isset($_POST['searchSubmit'])) {
       
        $pcrDate = $_POST['pcrDate'];
        echo $pcrDate;
        $query = query("SELECT runId, userId, pcrForm FROM pcrtable WHERE pcrDate = '{$pcrDate}'");
        confirm($query);
        echo "<table>";
        echo "<tr>";
        echo "<th>Run Id</th>";
        echo "<th>User Id</th>";
        echo "<th>PCR pdf</th>";
        echo "</tr>";
            
        while($row = mysqli_fetch_row($query)) {
            echo '<td>' . $row[0] . "</td><br>";
            echo '<td>' . $row[1] . "</td><br>";
            echo '<td>' . $row[2] . "</td><br>";
        }
        echo "</table>";
    }
}

//PCR Insert to Databse function
function insertPcrPdf(){
    require(TEMPLATE_BACK . DS . "pdoConnect.php");
    //Insert PCR form info to database
    $runId = $_SESSION['runId'];
    $pcrForm = '../resources/templates/back/PCRapp/PatientReport'. $runId .'.pdf';
    $dispatchDate = $_SESSION['dispatchDate'];
    //Get userId from userName
    $userName = $_SESSION['userName'];
    $userId = "";
    $sqlUserId = "SELECT userId FROM users where userName = ?";
    $stmt1 = $conn->prepare($sqlUserId);
    $stmt1->execute([$userName]);
    //stmt1 should have the row value, just use foreach function to pass out the value
    foreach ($stmt1 as $row){
        $userId = $row['userId'];
    }
    var_dump($userId);
    //Insert into pcrTable
  /*  if (!empty($userId)) {
        //Find whether the run Id is existed.
        $sqlRunIdIndex = "SELECT runId FROM pcrTable WHERE userId = ? AND runId = ? ";
        $stmt2 = $conn->prepare($sqlRunIdIndex);
        $stmt2->execute([$userId, $runId]);
        $count = $stmt2->fetchColumn();
    }
    if ($count == 0) {
        
        $sqlInsert = "INSERT INTO pcrtable (runId, userId, pcrForm, pcrDate) VALUE (?,?,?,?)";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->execute([$runId,$userId,$pcrForm, $dispatchDate]);
        echo "Insert It";
    }*/
    
}


?>