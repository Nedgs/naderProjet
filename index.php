<?php


include "conf.php";


$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');
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
      <div class="bloc">
         <h1>Les Articles</h1>
         <ul>
            <?php while($a = $articles->fetch()) { ?>
            <li><a href="article.php?id=<?= $a['id'] ?>" ><?= $a['titre'] ?></a><a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a><a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a></li>
            <?php } ?>
         <ul>
         <div>
            <a href="redaction.php">Ajouter article </a>
         </div>
      </div>  
   </center>    

<script src="https://kit.fontawesome.com/90e2b62310.js" crossorigin="anonymous"></script>   

</body>
</html>