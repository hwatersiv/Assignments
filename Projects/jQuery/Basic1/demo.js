  $(document).ready(function(){
    $('#addclass.row .col-md-4.text-right button').click(function(){
      $('#addclass.row .col-md-8.text-left p').addClass('red');
    })

    $('#after.row .col-md-4.text-right button').click(function(){
      $('#after.row .col-md-8.text-left p').after("<p>, I say 'Hello'</p>");
    })

    $('#append.row .col-md-4.text-right button').click(function(){
      $('#append.row .col-md-8.text-left p').append("<strong> INSIDE the tags</strong>");
    })

    $('#attr.row .col-md-4.text-right button').click(function(){
      $('#attr.row .col-md-8.text-left p').attr("class", "blue");
    })

    $('#before.row .col-md-4.text-right button').click(function(){
      $('#before.row .col-md-8.text-left p').before("<p>.before is like .after,</p>");
    })

    $('#html.row .col-md-4.text-right button').click(function(){
      $('#html.row .col-md-8.text-left p').html("<b>place of</b> the existing html. Even images <img src='star.png'>");
    })

    $('#text.row .col-md-4.text-right button').click(function(){
      $('#text.row .col-md-8.text-left p').text("<b>Example<b> <--- this isn't bolded and the tags aren't read");
    })

    $('#val.row .col-md-4.text-right button').click(function(){ alert($('#val.row input:checkbox:checked').val());
    })

    $('#toggle.row .col-md-4.text-right button').click(function(){
      $('#toggle.row .col-md-8.text-left img').toggle(
        function(){
          $('#toggle.row .col-md-8.text-left img').attr("src", "MJ.gif");
        }, function(){
          $('#toggle.row .col-md-8.text-left img').attr("src", "moonwalkerrobot.jpg");
        }
      );
    })

    $('#hide.row .col-md-4.text-right button').click(function(){
      $('#hide.row .col-md-8.text-left img').hide();
    })

    $('#show.row .col-md-4.text-right button').click(function(){
      $('#show.row .col-md-8.text-left img').show();
    })

    $('#slidedown.row .col-md-4.text-right button').click(function(){
      if ( $('#slidedown.row .col-md-8.text-left p').is(":hidden")) {
        $('#slidedown.row .col-md-8.text-left p').slideDown();
      } else { $('#slidedown.row .col-md-8.text-left p').hide() };
    })

    $('#slidetoggle.row .col-md-4.text-right button').click(function(){
      $('#slidetoggle.row .col-md-8.text-left img').slideToggle();
    })

    $('#slideup.row .col-md-4.text-right button').click(function(){
      if ( $('#slideup.row .col-md-8.text-left img').is(":hidden")) {
        $('#slideup.row .col-md-8.text-left img').show("slow");
      } else { $('#slideup.row .col-md-8.text-left img').slideUp() };
    })

    $('#fadeout.row .col-md-4.text-right button').click(function(){
      $('#fadeout.row .col-md-8.text-left img').fadeOut();
    })

    $('#fadein.row .col-md-4.text-right button').click(function(){
      $('#fadein.row .col-md-8.text-left img').fadeIn("slow");
    })

    $('#focus.row .col-md-4.text-right button').focus(function(){
      $('#focus.row .col-md-8.text-left p').css("display", "inline").fadeOut(2000);
    })


});
