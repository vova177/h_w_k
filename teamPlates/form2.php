


<html>
<head>
    <title>file_load</title>
</head>
<body>
<form action="/form2" method="POST" enctype="multipart/form-data">

    <br/><br/>
    <label> Name: </label>
    <input type="text" name="message"/>
<!--    <input type="hidden" name="MAX_FILE_SIZE" value="3000"/>-->
    <br/><br/>
    <label> File: </label>
    <input type="file" name="file"/>
    <br/><br/>
    <input type="submit" value="Save File" />


    <?php
      foreach($data['data'] as $value){
        echo '<br/>'.$value['message'].'<br/>';
          echo $value['file_ini'].'<br/>';
    }

    ?>

</form>
</body>

</html>