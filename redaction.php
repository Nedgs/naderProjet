<?php
include "conf.php";

$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $mode_edition = 1;
   $edit_id = htmlspecialchars($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } else {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      if($mode_edition == 0) {
         $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
         $ins->execute(array($article_titre, $article_contenu));
         $message = 'Votre article a bien été posté';
      } else {
         $update = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ?, date_time_publication = NOW() WHERE id = ?');
         $update->execute(array($article_titre, $article_contenu, $edit_id));
         header('Location: http://127.0.0.1/final/article.php?id='.$edit_id);
         $message = 'Votre article a bien été mis à jour !';
      }
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="style.css">  
   <title>Rédaction / Edition</title>
   <meta charset="utf-8">
</head>
<body>
   
   <form method="POST" id ="form">
      <div class="input-contain">
         <div class="circle circle-quill">
            <svg class="quill" x="0px" y="0px"
            width="25.167px" height="25.167px" viewBox="0 0 25.167 25.167" enable-background="new 0 0 25.167 25.167" xml:space="preserve">
            <path fill="#4e3332" d="M0,25C3.125,15.625,11.304,0,25,0c-6.421,5.151-9.375,17.188-14.062,17.188s-4.688,0-4.688,0L1.562,25H0z"/>
            </svg>
         </div>
         <div class="circle circle-paper">
            <svg class="paper" x="0" y="0" width="25.1" height="25.1" viewBox="0 0 25.1 25.1" enable-background="new 0 0 25.125 25.125" xml:space="preserve"><path fill="#b1dbd3" d="M24 2.1C23.5 2.3 1.2 10.2 0.8 10.3c-0.4 0.1-0.5 0.5 0 0.6 0.5 0.2 5 2 5 2H5.8l3 1.2c0 0 14.2-10.4 14.4-10.6 0.2-0.1 0.4 0.1 0.3 0.3 -0.1 0.2-10.3 11.2-10.3 11.2 0 0 0 0 0 0l-0.6 0.7 0.8 0.4c0 0 6.1 3.3 6.5 3.5 0.4 0.2 0.9 0 1-0.4 0.1-0.6 3.7-16.1 3.8-16.4C24.7 2.3 24.4 2 24 2.1zM8.7 21.2c0 0.3 0.2 0.4 0.4 0.2 0.3-0.3 3.7-3.4 3.7-3.4l-4.2-2.2V21.2z"/></svg>
         </div>
         <h2 class="info">ADD ARTICLE</h2>
         
         <input type="text" name="article_titre" placeholder="Titre" id="titre"<?php if($mode_edition == 1) { ?> value="<?= 
            $edit_article['titre'] ?>"<?php } ?> /><br />
         <textarea name="article_contenu" placeholder="Contenu de l'article" id="contenu"><?php if($mode_edition == 1) { ?><?= 
            $edit_article['contenu'] ?><?php } ?></textarea><br />
         
         
         <div class="allsub">
            <button class="submit">Envoyer</button>
            <div class="submit-under"></div>
         </div>
         <p><?php if(isset($message)) { echo $message; } ?></p>
      
         
      </div><!--input-contain-->
</form>



   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="script.js"></script>  

</body>
</html>