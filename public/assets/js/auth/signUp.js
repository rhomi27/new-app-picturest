$(document).ready(function () {
    // open modal
    $('#btn-signUp').click(function () {
        $('body').addClass('overflow-hidden')
        $('#sign-up-modal').removeClass('hidden');
        $('#sign-up-modal').addClass('flex animate__fadeIn');
        $('#sign-up-modal').on('animationend', function () {
            $(this).removeClass('hidden');
            $(this).removeClass('animate__fadeIn')
        });
    });

    $('#signUp-btn').click(function () {
        $('body').addClass('overflow-hidden')
        $('#sign-up-modal').removeClass('hidden');
        $('#sign-up-modal').addClass('flex animate__fadeIn');
        $('#sign-up-modal').on('animationend', function () {
            $(this).removeClass('hidden');
            $(this).removeClass('animate__fadeIn')
        });
    });

    $('#close-signUp').click(function () {
        $('#sign-up-modal').addClass('animate__fadeOut');
        $('body').removeClass('overflow-hidden')
        $('#sign-up-modal').on('animationend', function () {
            $(this).removeClass('animate__fadeOut');
            $(this).addClass('hidden');
        });
    });

    // show password
    $('#show-passwordUp-btn').click(function () {
        if ($('#passwordUp').attr('type') === 'password') {
            $('#passwordUp').attr('type', 'text')
            $('#show').addClass('hidden')
            $('#unshow').removeClass('hidden')
        } else {
            $('#passwordUp').attr('type', 'password')
            $('#show').removeClass('hidden')
            $('#unshow').addClass('hidden')
        }
    })

    // validasi
    function validasi(field, msg) {
        if (msg) {
            $("#" + field).addClass("border-red-600").removeClass("border-blue-600");
            $("#" + field + "-error").text(msg);
        } else {
            $("#" + field).addClass("border-blue-600").removeClass("border-red-600");
            $("#" + field + "-error").text('');
        }
    }
    function validateInput(input) {
        var inputLength = input.val().length;
        var maxInput = 25;
        var minInput = 8;
        var $errorLabel = $('#' + input.attr('id') + '-error');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (input.hasClass('required') && input.val().trim() === '') {
            input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('This field is required');
            $('#submit-signUp-btn').attr('disabled', true)
            return false;
        } else if (input.hasClass('min-text') && inputLength < minInput) {
            input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Minimum input must be 8 characters');
            return false;
        } else if (input.hasClass('email') && !emailRegex.test(input.val())) {
            input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Invalid email format');
            return false;
        } else if (input.hasClass('max-text') && inputLength > maxInput) {
            input.addClass('border-red-600 focus:border-red-600');
            $errorLabel.text('Maximum input is 25 characters');
            return false;
        } else {
            input.removeClass('border-red-600 focus:border-red-600');
            $errorLabel.text('');
            $('#submit-signUp-btn').removeAttr('disabled')
            return true;
        }
    };

    $('.required, .min-text, .email, .max-text').on('input', function () {
        validateInput($(this));
    });

    $('#signUp-form').submit(function (event) {
        event.preventDefault();
        var allInputsValid = true;
        $('.required, .email ,.min-text, .max-text').each(function () {
            if (!validateInput($(this))) {
                allInputsValid = false;
            }
        });
        if (allInputsValid) {
            $.ajax({
                url: '/auth/sign-up',
                type: 'post',
                data: {
                    name: $('#usernameUp').val(),
                    email: $('#emailUp').val(),
                    password: $('#passwordUp').val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('#textSignUp').addClass('hidden')
                    $('.loading').removeClass('hidden')
                },
                success: function (res) {
                    $('#textSignUp').removeClass('hidden')
                    $('.loading').addClass('hidden')
                    console.log(res);
                    if (res.status === 400) {
                        validasi('usernameUp', res.error.name)
                        validasi('emailUp', res.error.email)
                        setTimeout(() => {
                            $('#usernameUp-error', '#emailUp-error').empty();
                        }, 3000);
                    } else {
                        $('#signUp-form')[0].reset();
                        $('#sign-up-modal').addClass('hidden');
                        window.location.href = '/home'
                    }
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            })


        }
    });
})
