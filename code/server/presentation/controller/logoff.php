<?php 
    
    //seesion wird in die database "gelöscht"
    DatabaseManager::$database->query("UPDATE user SET session = NULL WHERE session = ? LIMIT 1", array(session_id()), array("s"));


    session_start();
    session_unset(); 
    session_destroy(); 

    header("Location: Index.php");
?>