<?php

require_once("init.php");

if(isset($_GET["mark_task"])){
  $id = $_GET["mark_task"];
  $result = "UPDATE tasks SET done='1' WHERE id=$id;";
  $db->query($result);
  header("Location: ../index.php?mark=success");
}

?>
