<?php 
function userLogin(){
    if (isset($_POST['submitBtn'])){
        $userName = escape_string($_POST['userName']);
        $password = escape_string($_POST['password']);
        
        $query = query("SELECT * FROM users WHERE userName = '{$userName}' AND password = '{$password}'");
        confirm($query);
    }
}

?>