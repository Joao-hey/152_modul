<?php
//verbindet mit dem server

require_once "code/server/database.php";
class Profilmanager
{
    private static $user;

    //holt den user aus der sql bank
    public static function initialize()
    {    
        session_start();
        if (!isset($_SESSION["expiration_time"])){
            return false;
        }
        self::$user = DatabaseManager::$database->getFirstResult(DatabaseManager::$database->query("SELECT * FROM user WHERE session = ? LIMIT 1", array(session_id()), array("s")));
        
        echo(DatabaseManager::$database->getError());
        

        if (!self::$user) {
            return false;
        }
        return true;
    }

    //holt die email adresse
    public static function getEmailAddress()
    {
        return self::$user["email"];
    }
}
?>