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
      <h1>welcome to my site</h1>
      <div class="chat_wrapper">
        <div id="chat"></div>
          <form class="" action="" method="POST">
            <textarea name="message" rows="7" cols="94" class="textarea"></textarea>

          </form>

      </div>
    </div>

    <script>
      $('.textarea').keyup(function(e){
        //alert when pressed enter
        if (e.which == 13) {
          $('form').submit();
        }
      });

      $('form').submit(function(){

        var message = $('.textarea').val();

        $.post('handlers/messages.php?action=sendMessage&message='+message, function(response){
          alert(response);
        })
        return false;
      })
    </script>



  </body>
</html>
