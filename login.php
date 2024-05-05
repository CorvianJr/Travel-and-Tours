<?php
session_start();

require("conn.php");
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   

    $sql = "SELECT * FROM tbl_users WHERE username = $username AND pass = $pass";
    $query = $conn->query($sql);
    if($query->rowCount() > 0){
        foreach($query as $row){
            $_SESSION['username'] = $row['username'];
            $_SESSION['userlvl'] = $row['userlvl'];
        }
        if($_SESSION['userlvl']=='admin'){
            echo "admin";
        }else{
            echo "client";
        }

    }else{
        echo "error";
    }
}

if(isset($_SESSION['username'])){
    if($_SESSION['userlvl'] == 'admin'){
        header("location: admin/admin.php");
    }else{
        header("location: client/client.php");
    }
}
?>