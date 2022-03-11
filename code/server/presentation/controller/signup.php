<?php
//mit der datenbank verbinden
require_once "code/server/database.php";

//Mach nichts wenn der button nicht gepressed wurde
if (!isset($_POST["submit"])) {
    return;
}

//error message falls leer
if (!isset($_POST["email"]) || !isset($_POST["password"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    $signup_error = "Du musst eine e-mail und passwort eingeben.";
    return;
}

//holt die werte
$email = $_POST["email"];
$password = $_POST["password"];


//länge sicherstellen
if (strlen($email) > 500) {
    $signup_error = "Die email zu lange";
    return;
}

if (strlen($password) > 500) {
    $signup_error = "Dass password ist zu lange";
    return;
}

//macht sicher ob gültige email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $signup_error = "Die E-mail ist nicht gültig";
    return;
}

//seht nach ob der nuter mit dieser e-mail addresse scon existiert
$getUser = DatabaseManager::$database->query("SELECT user_id FROM user WHERE email = ?", array($email), array("s"));
if ($getUser === false || $getUser !== true && ($getUser->num_rows > 0)) {
    $signup_error = "Dieser benutzer existiert schon";
    return;
}

//session is started if no session exist
if (!session_id()) {
    session_start();
}
session_regenerate_id(true);

//erstellt eine neuen nutzer
$creteUser = DatabaseManager::$database->query("INSERT INTO user(email, password, session) VALUES(?, ?, ?)", array($email, password_hash($email . $password, PASSWORD_DEFAULT), session_id()), array("s", "s", "s"));



//falls die erstellung nicht erfolgreich war ergibt es eine fehler meldung
//echo $database->getError();
if (!$creteUser || ($creteUser !== true && $creteUser->affected_rows != 1)) {
    $signup_error = "Die registierung hat fehlgeschlagen versuchen sie es enuet oder meden sie sich";
    return;
}

//erstellt time to live für die session
$_SESSION["expiration_time"] = time() + 30 * 60;

// wenn die registierung bis hier nicht fehlgeschlagen hat, wird ein neues fenster geöffnet
header("Location: index.php");
