$(document).ready(function () {
    var page = 1
    loadmorePrivate(page)
    loadmorePublic(page)



    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 0.5)) {
            page++;
            loadmorePrivate(page);
            loadmorePublic(page)

        }
    });

    function loadmorePrivate(page) {
        $.ajax({
            url: '/picturest/profile/private?page=' + page + '',
            type: 'get',
            datatype: 'html',
            data: {
                id: $('#user_id').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $('.loading').removeClass('hidden')
            },
            success: function (res) {
                if (res.length <= 0) {
                    $('.loading').html('')
                    return
                }
                $('.loading').addClass('hidden')
                $('#list-private').append(res)
            },
            error: function (jqXHR, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    }

    function loadmorePublic(page) {
        $.ajax({
            url: '/picturest/profile/publish?page=' + page + '',
            type: 'get',
            datatype: 'html',
            data: {
                id: $('#user_id').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $('.loading').removeClass('hidden')
            },
            success: function (res) {
                if (res.length <= 0) {
                    $('.loading').html('')
                    return
                }
                $('.loading').addClass('hidden')
                $('#list-publish').append(res)
            },
            error: function (jqXHR, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    }

    function loadmoreLiked(page) {
        $.ajax({
            url: '/picturest/profile/liked?=page' + page + '',
            type: 'get',
            datatype: 'html',
            beforeSend: function () {
                $('.loading').removeClass('hidden')
            },
            success: function (res) {
                $('.loading').addClass('hidden')
                $('#list-photo').append(res)
            },
            error: function (jqXHR, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    }
})