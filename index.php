<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat app</title>
    <link rel="stylesheet" href="style.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
  </head>
  <body>

    <div id="wrapper">
      <h1>LapZchat</h1>
      <div class="chat_wrapper">
        <div id="chat"></div>
          <form class="" action="" method="POST" id="msgForm">
            <textarea name="message" rows="7" cols="94" class="textarea"></textarea>

          </form>

      </div>
    </div>

    <script>
    loadChat();

    setInterval(function(){
      loadChat();
    },1000);

      function loadChat(){
        $.post('handlers/messages.php?action=getMessages',function(response){
          $('#chat').html(response);
          $('#chat').scrollTop( $('#chat').prop('scrollHeight'));
        });
      }

      $('.textarea').keyup(function(e){
        //alert when pressed enter
        if (e.which == 13) {
          $('form').submit();
        }
      });

      $('form').submit(function(){

        var message = $('.textarea').val();

        $.post('handlers/messages.php?action=sendMessage&message='+message, function(response){

          if(response==1){
            loadChat();
            document.getElementById('msgForm').reset();
          }
        });
        return false;
      });
    </script>



  </body>
</html>
