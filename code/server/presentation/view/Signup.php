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
    width: 100%;
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

<div class="box-body-account">
    <div>
        <div>
            <h1>Neues Profile erstellen</h1>
            <?php include("code/server/presentation/controller/signup.php"); ?>

            <form method="POST">
                <input type="email" name="email" require="true" maxlength="500" placeholder="E-Mail-Adresse"
                    value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
                <input type="password" name="password" require="true" maxlength="500" placeholder="Passwort">
                <input type="submit" name="submit" value="Registrieren" class="button default">
            </form>
        </div>
        <?php if (!empty($signup_error)) : ?>
        <p class="error-box"><?php echo $signup_error; ?></p>
        <?php endif; ?>

        <p>Durch die Anmeldung wird ein Cookie gespeichert. Mehr Informationen unter <a
                href="Datenschutz.php">Datenschutz</a>.</p>
        <p>Wenn du schon ein Konto hast, kannst du dich <a href="login.php" class="button">hier anmelden</a></p>


    </div>
</div>