<?php 
    //session gelösst und auf die anmelde seite verlinkt
    session_start();
    session_unset(); 
    session_destroy(); 
    
    header("Location: Index.php");
?> 