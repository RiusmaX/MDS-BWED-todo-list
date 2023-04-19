<script>
  function deleteTodo (id) {
    console.log('Supprimer le todo ID : ' + id)
    const formData = new FormData()

    formData.append('id', id)

    window.fetch('http://localhost/todo-list/backend/api/delete-todo.php',
    {
      method: "post",
      body: formData
    })
    .then(result => console.log(result))
    .catch(error => console.error(error))

    fetchTodos()
  }
  // Chargement des todos en Javascript pour accélérer l'affichage
  function fetchTodos () {
    // 1. Appel du fichier todos.php retournant la liste des todos depuis la base de données
    window.fetch('http://localhost/todo-list/backend/api/todos.php')
    // 2. Traitement de la reponse au format JSON
    .then(response => response.json())
    // 3. Affichage des éléments dans le tableau
    .then(result => {
      // 4. Afficher le résultat dans la console du navigateur
      console.log(result)
      // 5. On récupère le tableau dans notre page HTML
      const table = document.getElementById('table-body')
      table.innerHTML = ''
      // 6. On boucle sur la liste des todos (pour chaque todo)
      for (const todo of result) {
        // 7. On insère une ligne par todo
        const row = table.insertRow()
        // 8. On ajoute 2 cellules par ligne (titre et contenu)
        const cell1 = row.insertCell(0)
        const cell2 = row.insertCell(1)
        const cell3 = row.insertCell(2)
        // 9. On insère le contenu de la base de donnée dans les cellules HTML 
        cell1.innerHTML = '<button onclick="deleteTodo('+todo.id+')">🗑️</button>'
        cell2.innerHTML = todo.title
        cell3.innerHTML = todo.content
      }
    })
  }

  fetchTodos()
</script>

<table>
  <thead>
    <tr>
      <th>Actions</th>
      <th>Titre</th>
      <th>Contenu</th>
    </tr>
  </thead>
  <tbody id='table-body'>
  </tbody>
</table>