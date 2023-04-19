<?php
  include '../classes/Database.php';

  $db = new Database();

  $users = $db->select("SELECT * FROM users");

  echo json_encode($users);

  exit();

?>