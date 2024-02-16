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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="form-container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="form-group-half">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
          </div>
          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom">
          </div>
        </div>

        <div class="form-group-half">
          <div class="form-group">
            <label for="code_postal">Code postal</label>
            <input type="text" id="code_postal" name="code_postal">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
          </div>
        </div>

        <div class="form-group">
          <label for="livraison">Livraison</label>
          <input type="checkbox" id="livraison" name="livraison">
        </div>

        <div class="form-group">
          <label for="message">Votre message</label>
          <textarea id="message" name="message"></textarea>
        </div>

        <div class="form-group">
          <button type="submit">Envoyer votre demande</button>
        </div>
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
