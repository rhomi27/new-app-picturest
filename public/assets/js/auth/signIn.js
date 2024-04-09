$(document).ready(function () {
    // open modal
    $('#signIn-btn').click(function () {
        $('body').addClass('overflow-hidden')
        $('#sign-in-modal').removeClass('hidden');
        $('#sign-in-modal').addClass('flex animate__fadeIn');
        $('#sign-in-modal').on('animationend', function () {
            $(this).removeClass('hidden');
            $(this).removeClass('animate__fadeIn');
        });
    });

    $('#close-signIn').click(function () {
        $('#sign-in-modal').addClass('animate__fadeOut');
        $('body').removeClass('overflow-hidden')
        $('#sign-in-modal').on('animationend', function () {
            $(this).removeClass('animate__fadeOut');
            $(this).addClass('hidden');
        });
    })

    // show password
    $('#show-passwordIn-btn').click(function () {
        if ($('#password').attr('type') === 'password') {
            $('#password').attr('type', 'text')
            $('#showIn').addClass('hidden')
            $('#unshowIn').removeClass('hidden')
        } else {
            $('#password').attr('type', 'password')
            $('#showIn').removeClass('hidden')
            $('#unshowIn').addClass('hidden')
        }
    })
    // validasi

    function validateInputs($input) {
        var inputLength = $input.val().length;
        var minInput = 8;
        var $errorLabel = $('#' + $input.attr('id') + '-error');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if ($input.hasClass('requiredIn') && $input.val().trim() === '') {
            $input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('This field is required');
            $('#submit-signIn').attr('disabled', true)
            return false;
        } else if ($input.hasClass('min-textIn') && inputLength < minInput) {
            $input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Minimum input must be 8 characters');
            return false;
        } else if ($input.hasClass('emailIn') && !emailRegex.test($input.val())) {
            $input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Invalid email format');
            return false;
        } else {
            $input.removeClass('border-red-600 focus:border-red-600');
            $errorLabel.text('');
            $('#submit-signIn').removeAttr('disabled')
            return true;
        }
    };

    $('.requiredIn, .min-textIn, .emailIn').on('input', function () {
        validateInputs($(this));
    });


    $('#close-btn-error').click(function () {
        $('#error-signin').animate({
            left: 0,
            opacity: 0.1,
        }, function () {
            $('#error-signin').hide()
            $('#error-signin').css({
                opacity: 0,
                top: '-20px',
                left: '50%',
                display: 'none'
            });
        });
    })

    function errorMsg(msg) {
        if (msg) {
            $('#error-signin').css({
                opacity: 0,
                top: '-20px',
                display: 'flex'
            });
            // Jalankan animasi masuk
            $('#error-signin').animate({
                opacity: 1,
                top: '20px'
            }, 500);
            $('#msg-error').text(msg)
            setTimeout(() => {
                $('#error-signin').animate({
                    left: 0,
                    opacity: 0.1,
                }, function () {
                    $('#error-signin').hide()
                    $('#error-signin').css({
                        opacity: 0,
                        top: '-20px',
                        left: '50%',
                        display: 'none'
                    });
                });
            }, 3000);
        } else {
            $('#error-signin').addClass('hidden')
            $('#msg-error').text('')
        }
    }


    $('#signIn-form').submit(function (event) {
        event.preventDefault();
        var allInputsValid = true;
        $('.requiredIn, .emailIn , .min-textIn').each(function () {
            if (!validateInputs($(this))) {
                allInputsValid = false;
            }
        });
        if (allInputsValid) {
            $.ajax({
                url: '/auth/sign-in',
                type: 'post',
                data: {
                    email: $('#email').val(),
                    password: $('#password').val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('#textSigin').addClass('hidden')
                    $('.loading').removeClass('hidden')
                },
                success: function (res) {
                    $('#textSigin').removeClass('hidden')
                    $('.loading').addClass('hidden')
                    if (res.status === 500) {
                        errorMsg(res.message)
                    }else if(res.status === 200){
                        $('#close-signIn').click();
                        window.location.href = '/home'
                    }
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            })
            // $('#signIn-form')[0].reset();
            // window.location.href = '/home';
            // // $('#success-upload').css({
            // //     opacity: 0,
            // //     top: '-20px',
            // //     display: 'flex'
            // // });
            // // // Jalankan animasi masuk
            // // $('#success-upload').animate({
            // //     opacity: 1,
            // //     top: '20px'
            // // }, 500);
        }
    });

});
