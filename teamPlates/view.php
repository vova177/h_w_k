

<html>


    <head>
        <title>view</title>
        <meta charset="utf-8">
    </head>

       <body>

          <form method="post" action="">
              <label>Name:</label>
              <input type="text" name="form[name]">
              <br/><br/>
              <label>Surname</label>
              <input type="text" name="form[surname]">
              <br/><br/>
              <label>Email</label>
              <input type="text" name="form[email]">
              <br/><br/>
              <label>Message</label>
              <textarea name="form[message]" rows="10" cols="45"></textarea>
              <br/><br/>
              <input type="submit" value="Send">
          </form>


       <?php

       foreach( $data['message'] as $val ) {
           echo $val['name'].'<br/>';
           echo $val['surname'].'<br/>';
           echo $val['email'].'<br/>';
           echo $val['message'].'<br/>';
           echo '<hr/>';
       }

           ?>

       </body>


</html>

