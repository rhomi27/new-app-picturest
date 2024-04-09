$(document).ready(function () {
    $('#edit-photo').click(function () {
        $('#edit-photo-modal').addClass('flex')
        $('#edit-photo-modal').removeClass('hidden')
    })

    $('#cancel-btn').click(function () {
        $('#edit-photo-modal').addClass('hidden')
    })
    $('#cancel-change').click(function(){
        $('#crop-modal').addClass('hidden');
    })
    var cropper;

    $('#input-photo').change(function (event) {
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function (loadEvent) {
            $('#crop-modal').addClass('flex');
            $('#crop-modal').removeClass('hidden');
            var img = new Image();
            img.src = loadEvent.target.result;
            $('#preview').empty().append(img);

            // Initialize Cropper.js
            cropper = new Cropper(img, {
                aspectRatio: 1,
                viewMode: 1,
                crop: function (event) {
                }
            });
        };
        reader.readAsDataURL(file);
    });

    $('#cropButton').click(function () {
        // Get the cropped data as a data URL
        $('#crop-modal').addClass('hidden');
        var croppedCanvas = cropper.getCroppedCanvas();
        if (!croppedCanvas) {
            return;
        }
        var croppedImageData = croppedCanvas.toDataURL('image/jpg');
        $('#final-photo').attr('src', croppedImageData);

        $.ajax({
            url: '/picturest/edit-avatar',
            type: 'post',
            data: {
                avatar: croppedImageData
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('#avatar').attr('src', croppedImageData);
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        })
        // $('#preview-final').empty().append('<img src="' + croppedImageData + '">');
    });

    $('#delete-avatar').click(function () {
        $.ajax({
            url: '/picturest/delete-avatar',
            type: 'get',
            success: function (res) {
                $('#avatar').attr('src', 'avatar/userdefault.jpg');
                $('#final-photo').attr('src', 'avatar/userdefault.jpg');
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        })
    })

    function validateInputs($input) {
        var inputLength = $input.val().length;
        var maxInput = parseInt($('#' + $input.attr('id') + '-max').text());
        var $errorLabel = $('#' + $input.attr('id') + '-error');

        if ($input.hasClass('required') && $input.val().trim() === '') {
            $input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('This field is required');
            return false;
        } else if ($input.hasClass('max-text') && inputLength > maxInput) {
            $input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Input exceeds maximum character limit');
            return false;
        } else {
            $input.removeClass('border-red-600 focus:border-red-600');
            $errorLabel.text('');
            return true;
        }
    };

    $('.requiredIn, .max-text').on('input', function () {
        validateInputs($(this));
    });

    $('.save').click(function(){
        var isvalid = true
        $('.required, .max-text').each(function () {
            if (!validateInputs($(this))) {
                isvalid = false;
            }
        });
        if (isvalid){
            $.ajax({
                url: '/picturest/editprofile',
                type: 'post',
                data: {
                    name:$('#name').val(),
                    full_name: $('#fullname').val(),
                    gender: $('#gender').val(),
                    bio: $('#bio').val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res){
                    
                }
            })
        }
    })
});