<html>
<body>
  <?php
    require 'recipesLoaders.php';
    $articles = loadRecipes();

    foreach ($articles as $article) {
      $title = $article['title'];
      $preparationTime = $article['preparationTime'];
      $timer = $article['timer'];
      $difficulty = $article['difficulty'];
      require 'article.php';
  };
  ?>
</body>
</html>