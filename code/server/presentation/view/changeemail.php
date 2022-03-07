<h1>E-Mail-Adresse ändern</h1>

<?php include("app/server/presentation/controller/changeemail.php"); ?>


<?php if (!empty($email_change_error)) : ?>
    <p class="error-box"><?php echo $email_change_error; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="alte_email" placeholder="Alte E-Mail-Adresse" required="true" maxlength="500" value="<?php echo (isset($_POST[""]) ? $_POST[""] : ""); ?>  ">
    <input type="email" name="neue_email" placeholder="Neue E-Mail-Adresse" required="true" maxlength="500" value="<?php echo (isset($_POST[""]) ? $_POST[""] : ""); ?>  ">
    <input type="password" name="password" placeholder="passwort" required="true" maxlength="500">
    <input type="submit" name="submit" value="Ändern" class="button default">
</form>