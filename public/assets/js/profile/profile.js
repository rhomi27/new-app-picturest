$(document).ready(function () {
    var page = 1
    showAlbum()
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

    function showAlbum() {
        $.ajax({
            url: '/picturest/album',
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
                $('.loading').addClass('hidden')
                console.log(res)
                res.data.forEach(function (album) {
                    var albumList = `
                <a href="/picturest/album/show=${album.uuid}"
                    class="flex flex-col justify-center items-center hover:scale-105 scale-100 transition-all duration-200">
                    <img style="width:50px; height:50px; object-fit:cover;" class="border-2 border-blue-600 rounded-full" src="/thumbnail/${album.thumbnail}"
                        alt="">
                    <h1 class="text-xs lg:text-sm text-black"></h1>
                </a>`
                    $('#list-album').append(albumList)
                })
            },
            error: function (jqXHR, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    }
})