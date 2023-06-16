<?php
 require 'back/articles.php';
 require 'back/language.php' ;
 $language = 'en';
 $articles = loadArticles();
 loadLanguage($language);
?>
<html>
<head>
    <title>Ma boutique en ligne</title>
</head>
 <body>
      <?php
        $headerTitle = TEXT_WELCOME;
        require 'front/header.php' ;
      ?>
  <div>
    <h2>
    <?php
      echo TEXT_ARTICLES; 
    ?>
    </h2>
  <?php
    foreach ($articles as $article) 
      {
        $title = $article['name'];
        $price = $article['price'];
        $description =$article['description'];
        require 'front/article.php' ;
      }
  ?>
  </div>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>