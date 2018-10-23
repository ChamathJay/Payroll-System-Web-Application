<?php
    session_start();
    session_destroy();
    include_once "db.php";
    
    if (isset($_SESSION['email']) && $_SESSION['email'] === TRUE) {
    
          //set the session to null
            $_SESSION['user_id'] = null;
            $_SESSION['user_email'] = null;
            $_SESSION['user_password'] =null;
            $_SESSION['user_role'] = null;  
            session_destroy();
            header("Location:index.php");
        
    } else {
    // User is not authorized!
    header('Location: index.php');
    exit();
}
    
?>