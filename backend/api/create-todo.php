<?php
  include '../classes/Database.php';

  var_dump($_POST);

  $db = new Database();

  $query = "INSERT INTO todos (title, content) VALUES(?, ?);";

  $title = $_POST['title'];
  $content = $_POST['content'];

  $db->insert($query, [$title, $content]);

  echo 'OK';

?>