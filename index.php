<?php
  include 'form11.php';
?>

<!--
$elements = [
'Animaux' => [
['nom' => 'Chat', 'description' => 'Petit félin domestique'],
['nom' => 'Chien', 'description' => 'Meilleur ami de l\'homme'],
['nom' => 'Perroquet', 'description' => 'Oiseau qui peut parler'],
['nom' => 'Lapin', 'description' => 'Aime les carottes'],
['nom' => 'Tortue', 'description' => 'Vieille et lente']
],
'Plats' => [
['nom' => 'Ratatouille', 'description' => 'Plat végétarien français'],
['nom' => 'Lasagnes', 'description' => 'Couches de pâtes à la bolognaise'],
['nom' => 'Sushi', 'description' => 'Riz vinaigré et poisson cru'],
['nom' => 'Paella', 'description' => 'Riz espagnol avec fruits de mer'],
['nom' => 'Tajine', 'description' => 'Plat marocain mijoté']
]
];
?>
<div class="row">
  <div class="col">
    <?php foreach ($elements as $type => $liste): ?>
    <h3><?php echo $type; ?></h3>
    <table border="1">
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Description</th>
      </tr>
      <?php $compteur = 1; ?>
      <?php foreach ($liste as $element): ?>
      <tr>
        <td><?php echo $compteur++; ?></td>
        <td><?php echo $element['nom']; ?></td>
        <td><?php echo $element['description']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table><br>
    <?php endforeach; ?>
  </div>
</div> -->
