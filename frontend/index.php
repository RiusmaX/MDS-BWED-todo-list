<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application de gestion des Todos</title>
</head>
<body>
    <h1>Bienvenue dans l'application de Todo List</h1>
    <form method='POST' action='../backend/api/create-todo.php'>
      <label>
        Titre :
        <input name='title' />
      </label>
      <br />
      <label>
        Texte :
        <textarea name='content'></textarea>
      </label>
      <br />
      <input type="submit" value='Ajouter le todo' />
    </form>
</body>
</html>