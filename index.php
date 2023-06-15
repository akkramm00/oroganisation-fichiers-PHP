<?php
 $language = 'fr';
?>


<html>
  <head>
    <title>Ma boutique en ligne</title>
  </head>
  <body>
      <?php
        $headerTitle = 'Test' ;
        require 'front/header.php' ;
      ?>
  <div>
    <h2>
    <?php
      $pageTitle = 'Page de test';
      echo $pageTitle; 
    ?>
    </h2>
  <?php
    for ($i = 0; $i < 3 ; $i++ ) 
      {
        $title = 'Article Test' .$i;
        $price = 30 ;
        $description = 'Une description test ' ;
        require 'front/article.php' ;
      }
  ?>
  </div>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>