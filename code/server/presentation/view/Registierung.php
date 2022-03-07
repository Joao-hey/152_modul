<h1>Neues Profile erstellen</h1>
<?php include("app/server/presentation/controller/Registierung.php"); ?>

<?php if (!empty($signup_error)) : ?>
    <p class="error-box"><?php echo $signup_error; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="email" require="true" maxlength="500" placeholder="E-Mail-Adresse" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
    <input type="password" name="password" require="true" maxlength="500" placeholder="Passwort">
    <input type="submit" name="submit" value="Registrieren" class="button default">
</form>

<p>Durch die Anmeldung wird ein Cookie gespeichert. Mehr Informationen unter <a href="Datenschutz.php">Datenschutz</a>.</p>
<p>Wenn du schon ein Konto hast, kannst du dich <a href="Anmeldung.php" class="button">hier anmelden ❯</a></p>