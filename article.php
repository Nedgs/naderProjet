<?php
include "conf.php";


if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $get_id = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
   $article->execute(array($get_id));
   if($article->rowCount() == 1) {
      $article = $article->fetch();
      $titre = $article['titre'];
      $contenu = $article['contenu'];
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="style.css"> 

   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
<center>
   <div class="blocArticle">
      <h1><?= $titre ?></h1>
      <p><?= $contenu ?></p>
      <div class="lien">
         <a href="index.php">Voir Articles</a>
         <a href="redaction.php">Ajout Articles</a>
      </div>
   </div>
</Center>
</body>
</html>