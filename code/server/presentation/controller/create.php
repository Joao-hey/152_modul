<?php
//mit der datenbank verbinden
require_once "code/server/database.php";
?>


<?php
//ENGLISSSSSSSSSSSS PLSSSSSSSSSSSSSSSSSSSSSSSSS
//schaut nach ob man angemeldet ist
if (DatabaseManager::initialize() === false) : ?>
    <script>
        alert("Sie müssen Sie sich anmelden");
        window.open("index.php", "_self");
    </script>

    <?php die(); ?>
<?php endif; ?>

<?php
//checkt ob der knopf gedrückt wurde
if (!isset($_POST["submit"])) {
    return;
}


//einstellungen für die bilder und abspeicher ort
$uploadTo = $_SERVER["DOCUMENT_ROOT"] . "code/client/img/img-post/";
$allowedImageType = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'doc');
$countFile = 0;
$totalFiles = glob($uploadTo . "*");


//zählt die dateien
if ($totalFiles) {
    $countFile = count($totalFiles);
}

//variabeln gesetzt
$titel = $_POST["titel"];
$text = $_POST["Beschreibung"];
$realName = $_FILES["image"]["name"];
$imageName = $_FILES["image"]["name"] = $countFile + 1 . ".png";
$licens = $_FILES["licens"];

//namen der dateien
$tempPath = $_FILES["image"]["tmp_name"];
$basename =  basename($imageName);

//Path zum abspeicher ort
$originalPath = ($uploadTo . $basename);
$imageType = pathinfo($originalPath, PATHINFO_EXTENSION);


if (!empty($imageName)) {

    if (in_array($imageType, $allowedImageType)) {
        //dateien werden auf den server geladen 
        if (move_uploaded_file($tempPath, $originalPath)) {

            $createEmp = $database->query("INSERT INTO posts(titel, text, img, lizens) VALUES(?, ?, ?, ?)", array($titel, $text, $basename, ), array("s", "s", "s", "i"));

            //falls die erstellung nicht erfolgreich war ergibt es eine fehler meldung
            if (!$createEmp || ($createEmp !== true && $createEmp->affected_rows != 1)) {
                echo $signup_error = "Die registierung hat fehlgeschlagen versuchen sie es enuet oder meden sie sich";
                return;
            }
            header("Location: Empfehlungen.php");
        } else {
            echo $signup_error = 'image Not uploaded ! try again';
            return;
        }
    } else {
        echo $signup_error = $imageType . " image type not allowed";
        return;
    }
} else {
    echo $signup_error = "Please Select a image";
    return;
}
?>