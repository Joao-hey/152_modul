<?php require_once "app/server/presentation/controller/Empfehlung-erstellung.php"; ?>

<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();

        reader.onload = function() {

            var output = document.getElementById('output_image');
            output.src = reader.result;

        }

        reader.readAsDataURL(event.target.files[0]);
    }

    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();

            fileReader.onload = function(event) {

                $('#preview').html('<img src="' + event.target.result + '" width="300" height="auto"/>');

            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#image").change(function() {
        imagePreview(this);
    });
</script>

<style>
    :root {
        --navigatio-height: 110px;
        --footer-height: 20px;
        --design-color1: rgb(115, 53, 62);
        --design-color2: rgb(169, 128, 126);
        --white: rgb(255, 245, 227);
    }

    .box-container {
        text-align: center;
        align-content: center;
        padding-bottom: 20px;
    }

    .content {
        height: auto;
    }

    .box {
        border: 2px dotted;
        display: inline-block;
        text-align: center;
        padding: 20px;
        width: 100%;
        max-width: 1100px;
        vertical-align: middle;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .emp {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

    .content-preseberator {
        border-top: 32px solid var(--design-color1);
        width: 0%;
        height: 0% - 1px;

        max-width: 0%;
    }

    .content-preseberator img {
        min-width: 0%;
        max-width: 0%;
    }


    .text-box {
        width: 100%;
    }

    .input {
        display: flex;
        flex-direction: row;
    }

    .input div {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .image-button {
        max-width: 100px;
    }

    .content {
        display: inline-block;
        text-align: left;
        padding: 10px;
        box-shadow: 2px 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #a8a8a8;
        width: 100%;
        max-width: 90%;
        vertical-align: middle;
        box-sizing: border-box;

        border-radius: 16px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }
</style>

<form method="POST" class="ee" enctype="multipart/form-data">


    <h1>Empfehlung erstellen</h1>

    <?php if (!empty($signup_error)) : ?>
        <p class="error-box"><?php echo $signup_error; ?></p>
    <?php endif; ?>

    <div id="wrapper">
        <input type="text" name="titel" id="titel" placeholder="titel">
    </div>
    <div class="input">
        <div>
            <textarea class="text-box" name="Beschreibung" id="Beschreibung" placeholder="Text" cols="20" rows="100"></textarea>
        </div>
        <div>
            <div>
                <input class="image-button" type="file" name="image" id="image" accept="image/*" onchange="preview_image(event)">

            </div>
            <div id="image-box"><img id="output_image" alt="Preview" /></div>

            <p><input type="submit" name="submit"></p>
        </div>



    </div>

</form>