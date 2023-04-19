<?php
  include '../classes/Database.php';

  $db = new Database();

  $todos = $db->select("SELECT * FROM todos");

  echo json_encode($todos);

  exit();
?>