
function validateInputs($input) {
    var inputLength = $input.val().length;
    var maxInput = parseInt($('#' + $input.attr('id') + '-max').text());
    $('#' + $input.attr('id') + '-count').text(inputLength)
    var $errorLabel = $('#' + $input.attr('id') + '-error');

    if ($input.hasClass('max-text-album') && inputLength > maxInput) {
        $input.addClass('border-red-600 focus:border-red-600 border-2');
        $errorLabel.text('Input exceeds maximum character limit');
        return false;
    } else if ($input.hasClass('required-album') && $input.val().trim() === '') {
        $input.addClass('border-red-600 focus:border-red-600 border-2');
        $errorLabel.text('This field is required');
        return false;
    } else {
        $input.removeClass('border-red-600 focus:border-red-600');
        $errorLabel.text('');
        return true;
    }
};

$('.required-album, .max-text-album').on('input change', function () {
    validateInputs($(this));
});

function validasi(field, msg) {
    if (msg) {
        $("#" + field).addClass("border-red-600").removeClass("border-blue-600");
        $("#" + field + "-error").text(msg);
    } else {
        $("#" + field).addClass("border-blue-600").removeClass("border-red-600");
        $("#" + field + "-error").text('');
    }
}

$('#save-album').click(function(e){
    e.preventDefault();
    var inputValid = true
    $('.required-album, .max-text-album').each(function () {
        if (!validateInputs($(this))) {
            inputValid = false;
        }
    });

    if(inputValid) {
        var thumbnail = $('#thumbnail')[0].files[0];

        // Membuat objek FormData dan menambahkan data ke dalamnya
        var formData = new FormData();
        formData.append('thumbnail', thumbnail);
        formData.append('title', $('#title-album').val());
        formData.append('description', $('#description-album').val());
        $.ajax({
            url: '/picturest/upload/album',
            type: 'post',
            data: formData, // Mengirimkan objek FormData
            contentType: false, // Tidak mengatur tipe konten
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                if(res.status === 400){
                    validasi('thumbnail', res.error.thumbnail)
                    validasi('title-album', res.error.title)
                    validasi('description-album', res.error.description)
                    setTimeout(() => {
                        $('#thumbnail-error', 'title-album-error','description-album-error').empty();
                    }, 3000);
                }else{
                    $('#close-modal-album').click()
                    $('#form-add-album')[0].reset();
                }
            }
        })
    }

})

$('#new-album').click(function () {
    $('#create-album').addClass('flex');
    $('#create-album').removeClass('hidden');
    $('#modal-album').addClass('animate__bounceIn');
    $('#create-album').on('animationend', function () {
        $(this).removeClass('hidden');
    });
})

$('#close-modal-album').click(function () {
    $('#modal-album').removeClass('animate__bounceIn');
    $('#modal-album').addClass('animate__bounceOut')
    $('#create-album').on('animationend', function () {
        $('#modal-album').removeClass('animate__bounceOut');
        $(this).addClass('hidden');
    });
})


function viewThumbnail() {
    var previewThumbnail = document.getElementById('previewThumbnail');
    var fileInputThumbnail = document.getElementById('thumbnail');
    var labelThumbnail = document.getElementById('labelthumbnail');
    var fileThumbnail = fileInputThumbnail.files[0];
    var readerThumbnail = new FileReader();

    readerThumbnail.onloadend = function () {
        previewThumbnail.src = readerThumbnail.result;
    }

    if (fileThumbnail) {
        labelThumbnail.classList.add('hidden');
        previewThumbnail.classList.remove('hidden');
        readerThumbnail.readAsDataURL(fileThumbnail);
    } else {
        previewThumbnail.classList.add('hidden');
        labelThumbnail.classList.remove('hidden');
    }
}