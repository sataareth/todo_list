<?php
    require_once("init.php");

    if(isset($_POST['name'])) {
      $name = $_POST['name'];
      $result = "INSERT INTO tasks (name, done) VALUES ('$name', 0);";
      $db->query($result);
      header("Location: ../index.php?add=success");
    }

?>
