<?php require_once "code/server/presentation/controller/create.php"; ?>

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
            <textarea class="text-box" name="Beschreibung" id="Beschreibung" placeholder="Text" cols="20"
                rows="100"></textarea>
        </div>
        <div>
            <div>
                <input class="image-button" type="file" name="image" id="image" accept="image/*"
                    onchange="preview_image(event)">

            </div>
            <div id="image-box"><img id="output_image" alt="Preview" /></div>

            <div>
                <input type="radio" id="cc0" name="drone" value="cc0" checked>
                <label for="cc0">cc0</label>
            </div>

            <div>
                <input type="radio" id="cc-by" name="drone" value="cc-by">
                <label for="cc-by">cc-by</label>
            </div>

            <div>
                <input type="radio" id="cc-by-nd" name="drone" value="cc-by-nd">
                <label for="cc-by-nd">cc-by-nd</label>
            </div>

            <div>
                <input type="radio" id="cc-by-nc" name="drone" value="cc-by-nc" checked>
                <label for="cc-by-nc">cc-by-nc</label>
            </div>

            <div>
                <input type="radio" id="cc-by-nc-sa" name="drone" value="cc-by-nc-sa">
                <label for="cc-by-nc-sa">cc-by-nc-sa</label>
            </div>

            <div>
                <input type="radio" id="cc-by-nc-nd" name="drone" value="cc-by-nc-nd">
                <label for="cc-by-nc-nd">cc-by-nc-nd</label>
            </div>
            
            <p><input type="submit" name="submit"></p>
        </div>



    </div>

</form>