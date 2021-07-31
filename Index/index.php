<html>
<body>
  <?php
    require 'back/recipesLoaders.php';
    $articles = loadRecipes();

    foreach ($articles as $article) {
      $title = $article['title'];
      $preparationTime = $article['preparationTime'];
      $timer = $article['timer'];
      $difficulty = ['difficulty'];
      require 'front/article.php';
  };
  ?>
</body>
</html>