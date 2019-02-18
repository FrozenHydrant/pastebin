<?php
  $log_file_name = 'mylog.txt'; // Change to the log file name
  $message = $_POST['message']; // incoming message
  file_put_contents($log_file_name, $message);
  header('Location: /');
?>