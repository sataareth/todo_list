<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "todo";

  $db = new mysqli($servername, $username, $password, $dbname);

  if ($db->connect_errno) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL.
    $db->connect_errno . PHP_EOL.
    $db->connect_error . PHP_EOL;
    exit;
  }

  // echo "Соединение с MySQL установлено!" . PHP_EOL;

?>
