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