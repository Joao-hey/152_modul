<?php
//mit der datenbank verbinden
require_once "code/server/presentation/helper/Profilmanager.php";

?>


<?php
//schaut nach ob man angemeldet ist
if (Profilmanager::initialize() === FALSE) : 
    
    echo "  
    <div class=\"button-no_account\">
        <a href=\"login.php\">anmelden</a>
        <a href=\"signup.php\">registieren</a>
    </div>
        ";
    
else :
    
    echo "
        <div class=\"button-with_Account\">
            <a class=\"logoff.php\" href=\"logoff.php\">Abmelden</a>
            <img class=\"user-icon\" src=\"code/client/img/user-icon.png\" alt=\"\">
        </div>
          ";
endif;