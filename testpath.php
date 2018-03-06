<?php
   $path = getcwd();
   echo "Your Absoluthe Path is: ";
   echo $path;
   
   echo "<br>max post size:".ini_get('post_max_size');
   echo "<br>max memory:".ini_get('memory_limit');
   echo "<br>upload_max_filesize:".ini_get('upload_max_filesize');
   ini_set('max_input_vars', 99999);
   echo "<br>max_input_vars:".ini_get('max_input_vars');
?>