<?php
//mit der datenbank verbinden
require_once "code/server/database.php";

//Mach nichts wenn der button nicht gepressed wurde
if (!isset($_POST["submit"])) {
    return;
}

//error message falls leer
if (!isset($_POST["email"]) || !isset($_POST["password"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    $login_error = "Du musst eine e-mail und passwort eingeben.";
    return;
}

//holt die werte
$email = $_POST["email"];
$password = $_POST["password"];


//holt das gespeicherte password hash
$user = DatabaseManager::$database->getFirstResult(DatabaseManager::$database->query("SELECT user_id, password FROM user WHERE email = ? LIMIT 1", array($email), array("s")));

$login_error = "";


//Falls kein nutzer mit dieser email und passwort existiert, wird das anmelden fehlschlagen
if (!$user || !password_verify($email . $password, $user["password"])) {
    $login_error = "Die Anmeldaten sind falsch oder account existiert nicht";
    return;
}

//session wird gestartet und alte session id werden gelöscht
session_start();
session_regenerate_id(true);

//seesion wird in die database "gespeichert"
DatabaseManager::$database->query("UPDATE user SET session = ? WHERE user_id = ? LIMIT 1", array(session_id(), $user["user_id"]), array("s", "s"));

//Stellt ein wann die session ablaufen soll
$_SESSION["expiration_time"] = time() + 30 * 60;


// wenn die registierung bis hier nicht fehlgeschlagen hat, wird ein neues fenster geöffnet
header("Location: index.php");
