/*
MODERATION PANEL - ALGATHIAMC - EYWEK
*/

// -- Recherche d'un joueur sur l'index --

$('body').find('input[name="search"]').keyup(function(e) {

  var value = $(this).val();

  if(value.length < 3) {
    $('body').find('.list-group.users-found').slideUp(250);
    return;
  }

  $.ajax({
    url: 'find/'+encodeURI(value),
    method: 'GET',
    dataType: 'JSON',
    success: function(data) {

      $('body').find('.list-group.users-found').empty();

      if(data.need_connect !== undefined) {
        window.location = window.location;
        return;
      }

      if(data.status) {

        var users = data.data;

        for (var i = 0; i < users.length; i++) {

          $('body').find('.list-group.users-found').prepend('<a href="see/'+users[i]['pseudo']+'" class="list-group-item">'+users[i]['pseudo']+'</a>')

        }

        $('body').find('.list-group.users-found').slideDown(250);

      } else {
        $('body').find('.list-group.users-found').slideUp(250);
      }

    },
    error: function(data) { $('body').find('.list-group.users-found').slideUp(250); }
  })

});
