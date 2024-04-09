$(document).ready(function () {
    var page = 1
    loadmore(page)

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 1)) {
            page++;
            loadmore(page);
        }
    });

    function loadmore(page) {
        $.ajax({
            url: '/picturest/home/getdata?page=' + page + '',
            type: 'get',
            datatype: 'html',
            beforeSend: function () {
                $('.loading').removeClass('hidden')
            },
            success: function (res) {
                if (res.length <= 0) {
                    $('.loading').html('')
                    return
                }
                $('.loading').addClass('hidden')
                $('#list-photo').append(res)
            },
            error: function (jqXHR, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    }
})