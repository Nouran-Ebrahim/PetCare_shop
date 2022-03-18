<?php
session_start();
$servername = "localhost";
$dbname ="pet_care";
$username = "root";
$pasword ="";
   // $admins = array("ahmed@gmail.com","mohammed","mahmoud","hamed");
    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname",$username,$pasword);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql2 = $conn->query("SELECT full_name FROM users ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
        $sql0 = $conn->query("SELECT passwordd FROM users ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
        $sql3 = $conn->query("SELECT full_name FROM users where typee='admain'")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
        $sql1 = $conn->query("SELECT full_name FROM users where typee='doctor'")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
        if( isset($_SESSION["user"]) ){
           if((in_array($_SESSION['user'],$sql2)) && (in_array($_SESSION['pass'],$sql0))) {
            if( in_array($_SESSION['user'],$sql3) ){
               header("location:control.php");
                  exit();
            }
            else if( in_array($_SESSION['user'],$sql1) ){
             header("location:doctorprofile.html");
              exit();
            }
            else{
                header("location:index.php");
                exit();
            }
        }

      
      else{
        session_unset();
        session_destroy();
        header("location:incorrect.php");
        exit();
    }
    
   }
  else{
    header("location:log in.php");
    exit();
    }
}

    catch(PDOException $e){
        echo "connection error" . $e->getMessage();
    }