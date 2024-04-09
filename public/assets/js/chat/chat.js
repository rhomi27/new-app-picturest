$(document).ready(function () {
  function getmessage(iduser) {
    $.ajax({
      url: `/picturest/getusermsg/=${iduser}`,
      type: 'get',
      dataType: 'json',
      success: function (res) {
        console.log(res)
        $('#username').text(res.users.name);
        $('#to_user').val(res.users.id);
        $('#profile').attr('href', '/picturest/profile/@_' + res.users.name + '')
        $('#avatar').attr('src', '/avatar/' + res.users.avatar + '')
        $('#room-chat').addClass('block');
        $('#room-chat').removeClass('hidden');
        $('#content').empty();

        res.message.sort((a, b) => new Date(a.created_at) - new Date(b.created_at));
        res.message.forEach(function (msg) {
          const timestamp = msg.created_at;
          const dateObject = new Date(timestamp);
          // Ambil jam dan menit
          const hours = String(dateObject.getHours()).padStart(2, '0');
          const minutes = String(dateObject.getMinutes()).padStart(2, '0');

          const isToUser = msg.from === res.users.id
          const alignmentClass = isToUser ? 'justify-start' : 'justify-end';
          $('#content').append(`
              <div class="flex ${alignmentClass} items-center">
                <div class="inline-block">
                  <div class="flex flex-col ${alignmentClass} max-w-80 p-2 px-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                    <p class="text-sm font-normal text-gray-900 dark:text-white">${msg.message}</p>
                    <span class="text-sm font-normal text-gray-400">${hours}:${minutes}</span>
                  </div>
                </div>
            </div>
            `);
        })
        $('#space').scrollTop($('#space')[0].scrollHeight);
      },
      error: function (xhr, status, err) {
        console.log(err);
      }
    })
  }
  $('.chat').on('click', function () {
    const iduser = $(this).data('user-id')
    getmessage(iduser)
  })




  $('#close-chat').click(function () {
    $('#room-chat').addClass('hidden');
    $('#room-chat').removeClass('overflow-y-scroll');
  })

  $('#text-chat').on('input', function () {
    if ($(this).val() === '') {
      $('#send-chat').addClass('bg-gray-400')
      $('#send-chat').removeClass('bg-blue-500')
      $('#send-chat').prop('disabled', true);
    } else {
      $('#send-chat').removeClass('bg-gray-400')
      $('#send-chat').addClass('bg-blue-500')
      $('#send-chat').prop('disabled', false);
    }
  })

  $('#message-form').submit(function (e) {
    e.preventDefault()
    const iduser = $('#to_user').val()
    $.ajax({
      url: '/picturest/sendmessage',
      type: 'post',
      data: {
        to: iduser,
        message: $('#text-chat').val()
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (res) {
        getmessage(iduser)
        $('#message-form')[0].reset();
      }
    })
  })

})
