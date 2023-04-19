<?php
  include '../classes/Database.php';

  var_dump($_POST);

  $db = new Database();

  $query = "INSERT INTO todos (title, content) VALUES(?, ?);";

  $title = $_POST['title'];
  $content = $_POST['content'];

  $result = $db->insert($query, [$title, $content]);

  echo json_encode($result);
?>