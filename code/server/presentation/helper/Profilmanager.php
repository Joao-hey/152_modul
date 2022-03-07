<?php
//verbindet mit dem server
require_once "app/server/presentation/helper/DatabaseConnection.php";
class Profilmanager
{
    private static $user;
    private static $database;

    //holt den user aus der sql bank
    public static function initialize()
    {   
        
        session_start();
        if (!isset($_SESSION["expiration_time"])){
            return false;
        }
        self::$database = new DatabaseConnection("localhost", "root", "", "data");

        self::$user = self::$database->getFirstResult(self::$database->query("SELECT * FROM user WHERE session = ? LIMIT 1", array(session_id()), array("s")));

        echo(self::$database->getError());
        

        if (!self::$user) {
            return false;
        }
    }

    //holt die email adresse
    public static function getEmailAddress()
    {
        return self::$user["email"];
    }
}
?>