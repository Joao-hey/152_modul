<h1>Anmelden</h1>

<?php include("app/server/presentation/controller/Anmeldung.php"); ?>

<?php if (!empty($login_error)) : ?>
    <p class="error-box"><?php echo $login_error; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="email" require="true" maxlength="500" placeholder="E-Mail-Adresse" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
    <input type="password" name="password" require="true" maxlength="500" placeholder="Passwort">
    <input type="submit" name="submit" value="Anmelden" class="button default">
</form>

<p>Durch die Anmeldung wird ein Cookie gespeichert. Mehr Informationen unter <a href="Datenschutz.php">Datenschutz</a>.</p>
<p>Wenn du kein Konto hast, kannst du dich <a href="Registierung.php" class="button">hier registrieren ❯</a></p>