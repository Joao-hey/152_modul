<?php
//mit der datenbank verbinden
require_once "code/server/presentation/helper/Profilmanager.php";

?>


<?php
//schaut nach ob man angemeldet ist
if (Profilmanager::initialize() === FALSE) : 
    
    echo "  <a href=\"login.php\">anmelden</a>
            <a href=\"signup.php\">registieren</a>";
    
else :
    
    echo "
            <a class=\"logoff\" href=\"logoff.php\">Abmelden</a>
            <img class=\"user-icon\" src=\"code/client/img/user-icon.png\" alt=\"\">
          ";
endif;