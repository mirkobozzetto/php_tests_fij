<?php
$donnees = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donnees['nom'] = htmlspecialchars($_POST['nom']);
    $donnees['prenom'] = htmlspecialchars($_POST['prenom']);
    $donnees['code_postal'] = htmlspecialchars($_POST['code_postal']);
    $donnees['email'] = htmlspecialchars($_POST['email']);
    $donnees['livraison'] = isset($_POST['livraison']) ? "Oui" : "Non";
    $donnees['message'] = htmlspecialchars($_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Formulaire de Contact</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
  }

  .container {
    display: flex;
    justify-content: space-between;
  }

  .form-container,
  .result-container {
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .form-container {
    width: 60%;
  }

  .result-container {
    width: 35%;
    overflow: auto;
    height: 300px;
  }

  .form-group {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    padding: 8px;
    border: 1px solid #ddd;
    box-sizing: border-box;
  }

  input[type="checkbox"] {
    margin-top: 5px;
  }

  button {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }
  </style>
</head>

<body>

  <div class="container">
    <div class="form-container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
          <label for="code_postal">Code postal</label>
          <input type="text" id="code_postal" name="code_postal" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="livraison">Livraison</label>
          <input type="checkbox" id="livraison" name="livraison">
        </div>
        <div class="form-group">
          <label for="message">Votre message</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Envoyer votre demande</button>
      </form>
    </div>
    <div class="result-container">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<pre>";
            var_dump($donnees);
            echo "</pre>";
        }
        ?>
    </div>
  </div>

</body>

</html>
