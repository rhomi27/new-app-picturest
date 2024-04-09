
$(document).ready(function() {
    $('#signIn-tab').click(function(){
        $('#sign-up-modal').addClass('hidden')
        $('#sign-in-modal').addClass('flex')
        $('#sign-in-modal').removeClass('hidden')
        $('#signUp-form')[0].reset();
        $('input').removeClass('border-red-600 focus:border-red-600')
        $('p').text('')
    });

    $('#signUp-tab').click(function(){
        $('#sign-in-modal').addClass('hidden')
        $('#sign-up-modal').addClass('flex')
        $('#sign-up-modal').removeClass('hidden')
        $('#signIn-form')[0].reset();
        $('input').removeClass('border-red-600 focus:border-red-600')
        $('p').text('')
    })




    $('a[href^="#"]').on('click', function(event) {
        // Pastikan hash telah diset
        if (this.hash !== "") {
            // Menghentikan default behavior
            event.preventDefault();
            // Simpan hash
            var hash = this.hash;
            // Menggunakan offset() untuk menyesuaikan posisi
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                // Tambahkan hash ke URL setelah scroll
                window.location.hash = hash;
            });
        }
    });
});

$(window).scroll(function() {
    // Ambil tinggi dokumen dan tinggi jendela browser
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();

    // Ambil posisi scroll
    var scrollPosition = $(window).scrollTop();

    // Tentukan kondisi untuk mengatur posisi kucing
    if (scrollPosition + windowHeight >= documentHeight) {
        // Ketika pengguna mencapai bagian bawah halaman
        $('#darat').removeClass('bg-opacity-0').addClass('bg-opacity-40');
        $('#cat').css('transform', 'translateY(150%)');
    } else {
        // Ketika pengguna berada di bagian lain halaman
        $('#cat').css('transform', 'translateY(0)');
        $('#darat').addClass('bg-opacity-0').removeClass('bg-opacity-40');
    }
});
