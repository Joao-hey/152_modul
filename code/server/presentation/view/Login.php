<style>
form {
    color: var(--black);
    height: 2em;
    align-items: center;
    padding-top: 2em;
    padding-left: 1em;
}

p {
    color: var(--black);
}

.box-body div {
    display: flex;
    justify-content: left;
    color: var(--black);
}



form {
    color: var(--black);
    height: 2em;
    align-items: center;
    padding-top: 2em;
    padding-left: 1em;
}

.box-body-account {
    display: flex;
    justify-content: center;
    color: var(--black);
}

.box-body-account * {
    color: var(--black);
}

.box-body-account div {
    width: 70%;
    background-color: var(--white);
    padding: 5%;
    flex-wrap: nowrap;
    flex-direction: column;
}

.box-body-account div div {
    flex-direction: row;
    padding: 0px;
}


.box-body-account div {
    display: flex;
    justify-content: left;
    color: var(--black);
}
.error-box {
    color: var(--red);
    font-size: 1.5em;
}
</style>



<?php include("code/server/presentation/controller/login.php"); ?>

<div class="box-body-account">
    <div>
        <div>
        <h1>Login</h1>

        <form method="POST">
            <input type="email" name="email" require="true" maxlength="500" placeholder="E-Mail-Adresse"
                value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
            <input type="password" name="password" require="true" maxlength="500" placeholder="Passwort">
            <input type="submit" name="submit" value="Anmelden" class="button default">
        </form>
        </div>
        
        <p>Durch die Anmeldung werden Cookie's gespeichert. Mehr Informationen unter <a
                href="Datenschutz.php">Datenschutz</a>.</p>
        <p>Wenn du kein Konto hast, kannst du dich <a href="signup.php" class="button">hier registrieren ❯</a></p>
       
        <?php if (!empty($login_error)) : ?>
        <p class="error-box"><?php echo $login_error; ?></p>
        <?php endif; ?>

        
    </div>
    
</div>