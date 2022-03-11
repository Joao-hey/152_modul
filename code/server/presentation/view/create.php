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

            $('#preview').html('<img src="' + event.target.result + ' margin-bottom:"2em" height="auto"/>');

        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}

$("#image").change(function() {
    imagePreview(this);
});
</script>

<div class="box-body-create">
    <form class="box-body-create-data" method="POST" enctype="multipart/form-data">
        <div class="box-body-create-left">

            <h1>Post</h1>

            <?php if (!empty($signup_error)) : ?>
            <p class="error-box"><?php echo $signup_error; ?></p>
            <?php endif; ?>

            <div id="wrapper">
                <input type="text" class="titel" name="titel" rows="10" id="titel" placeholder="Titel">
            </div>

            <div class="input">
                <div class="text-box">
                    <textarea class="text-box-data" name="text-box" id="text-box" placeholder="Text" cols="26" rows="30"
                       ></textarea>
                </div>
            </div>
        </div>

        <div class="box-body-create-right">
            <div class="input">
                <div>
                    
                    <div class="image-button-container">
                        <label for="image">Bild:</label>
                        <button for="image" type="button" class="dummy-button">Bild Hinzufügen</button>
                        <input class="image-button" type="file" name="image" id="image" accept="image/*"
                            onchange="preview_image(event)">

                    </div>
                    <div id="image-box"><img id="output_image" alt="Preview" /></div>
                    <div id="wrapper">
                        <label for="textImage">Bild untertitel</label>
                        <input type="text" class="textImage" name="textImage" rows="10" id="textImage" placeholder="">
                    </div>

                    <label for="license">Lizens:</label>
                    <div class="licens">
                        <div>
                            <input type="radio" id="cc0" name="license" value="cc0" checked>
                            <label for="cc0">cc0</label>
                        </div>

                        <div>
                            <input type="radio" id="cc-by" name="license" value="cc-by">
                            <label for="cc-by">cc-by</label>
                        </div>

                        <div>
                            <input type="radio" id="cc-by-nd" name="license" value="cc-by-nd">
                            <label for="cc-by-nd">cc-by-nd</label>
                        </div>

                        <div>
                            <input type="radio" id="cc-by-nc" name="license" value="cc-by-nc" checked>
                            <label for="cc-by-nc">cc-by-nc</label>
                        </div>

                        <div>
                            <input type="radio" id="cc-by-nc-sa" name="license" value="cc-by-nc-sa">
                            <label for="cc-by-nc-sa">cc-by-nc-sa</label>
                        </div>

                        <div>
                            <input type="radio" id="c" name="license" value="cc-by-nc-nd">
                            <label for="cc-by-nc-nd">cc-by-nc-nd</label>
                        </div>
                    
                        <p>Sehe <a href="https://de.wikipedia.org/wiki/Creative_Commons"> creative Commons</a></p>
                    </div>

                    <label for="role">Rolle:</label>
                    <div class="role">
                        <input type="radio" id="Recipy" name="role" value="Recipy">
                        <label for="Recipy">Recipy</label>

                        <input type="radio" id="Story" name="role" value="Story">
                        <label for="Story">Story</label>

                        <input type="radio" id="Shitpost" name="role" value="Shitpost">
                        <label for="Shitpost">Shitpost</label>
                    </div>

                    <p class="image-button-container">
                       
                        <button for="submit" type="button" class="dummy-button">Posten</button>
                        <input type="submit" name="submit">
                    </p>
                </div>
            </div>
        </div>
    </form>

</div>

</div>