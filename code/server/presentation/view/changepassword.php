<h1>Passwort ändern</h1>
<?php include("app/server/presentation/controller/changepassword.php"); ?>


<?php if (empty($password_change_error)) : ?>
    <form method="POST">
        <input type="email" name="email" placeholder="E-Mail-Adresse" required="true" maxlength="500" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
        <input type="password" name="alte_password" placeholder="Altes Password" required="true" maxlength="500">
        <input type="password" name="neue_password" placeholder="Neues Password" required="true" maxlength="500">
        <input type="submit" name="submit" value="Ändern" class="button default">
    </form>
<?php endif; ?>

<?php if (!empty($Password_change_error)) : ?>
    <p class="error-box"><?php echo $Password_change_error; ?></p>
<?php endif; ?>