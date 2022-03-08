<?php
//mit der datenbank verbinden
require_once "code/server/database.php";
require_once "app/server/presentation/helper/Profilmanager.php";
?>


<?php
//schaut nach ob man angemeldet ist
if (Profilmanager::initialize() === false) : ?>
<script>
echo "<p>hahahahahahahahh</p>";
</script>

<?php die(); ?>
<?php endif; ?>

<?php
echo"<a href=\"login.php\">anmelden</a>
<a href=\"signup.php\">registieren</a>";