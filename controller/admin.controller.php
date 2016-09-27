<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 24.09.16
 * Time: 16:07
 */

if($action=="admin"){

    $reset = isset($_POST['reset']) ? $_POST['reset'] : null ;
    $check_message=isset($_POST['message']) ? $_POST['message'] : null;
    $check_file=isset($_POST['file']) ? $_POST['file'] : null;
    if ( $reset ) {
          if($check_message) {
              file_put_contents(FILE_DIRECTORY_MESSAGE, '');
          }
          if($check_file) {
              $data = read_file(FILE_DIRECTORY_FILE_UPLOAD);
              file_delete($data);
              file_put_contents(FILE_DIRECTORY_FILE_UPLOAD,'');
          }
    }
    view('admin');
}
