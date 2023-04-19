<script>
  function addTodo (event) {
    // On prépare les données pour envoyer à l'API
    const formData = new FormData()
    // On récupère la saisie dans le champ "title"
    const title = document.getElementsByName('title')[0].value
    // On récupère la saisie dans le champ "content"
    const content = document.getElementsByName('content')[0].value
    formData.append('title', title)
    formData.append('content', content)

    window.fetch('http://localhost/todo-list/backend/api/create-todo.php',
    {
      method: "post",
      body: formData
    })
    .then(result => console.log(result))
    .catch(error => console.error(error))
    return false
  }
</script>

<form novalidate>
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
  <button onclick="return addTodo()">
    Ajouter le todo
  </button>
</form>