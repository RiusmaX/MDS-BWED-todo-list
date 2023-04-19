<?php
  include '../classes/Database.php';

  $db = new Database();

  $query = "INSERT INTO `todos`(
    `id`,
    `title`,
    `content`,
    `created_at`,
    `updated_at`,
    `deadline`,
    `is_done`
)
VALUES(
    NULL,
    'Mon deuxième TODO',
    'BlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablablaBlablablabla',
    CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP(), NULL, '0');";

?>