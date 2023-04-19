<?php
  include '../classes/Database.php';

  $db = new Database();

  $query = "DELETE FROM todos WHERE id=?";

  $id = $_POST['id'];

  $result = $db->delete($query, [$id]);

  echo json_encode($result);

  exit();
?>