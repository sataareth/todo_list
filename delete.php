<?php

require_once("init.php");

if(isset($_GET["del_task"])){
  $id = $_GET["del_task"];
  $result = "DELETE FROM tasks WHERE id=$id;";
  $db->query($result);
  header("Location: ../index.php?del=success");
}

?>
