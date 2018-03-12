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

  // $db->set_charset("utf8_unicode_ci");

  $table = "CREATE TABLE tasks (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name text NOT NULL,
    done TINYINT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";

  $tasks = $db->query($table);

?>
