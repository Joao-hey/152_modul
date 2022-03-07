<style>
    .change {
        display: flex;
        color: black;
        padding: 5px;
        border: 1px solid none;
        border-color: black;
        background-color: rgb(255, 245, 227);
        box-shadow: 2px 6px 20px rgba(0, 0, 0, 0.3);
        width: 90%;
        margin-top: 2px;
        border-radius: 5px;
    }

    @media screen and (max-width: 630px) {
        .change {
            display: flex;
            color: black;
            margin-top: 5px;
            padding: 5px;
            border: 1px solid none;
            background-color: white;
            box-shadow: 2px 6px 20px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            margin-right: 10px;
        }
    }
</style>

<?php include("app/server/presentation/controller/Profile.php"); ?>

<h1>Mein Profil</h1>

<p><?php echo Profilmanager::getEmailAddress(); ?></p>
<a class="change" href="changeemail.php" class="button">Change email</a>
<a class="change" href="changepassword.php" class="button">Change password</a>
<a class="change" href="Abmelden.php" class="button destructive">Logout</a>