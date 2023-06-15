<?php
 $language = 'fr';
?>


<html>
  <head>
    <title>Ma boutique en ligne</title>
  </head>
  <body>
    <header>
      <h1>
        <?php
        if($language === 'fr')
        {
          echo 'Bienvenue !';
        } else {
          echo 'Welcome !' ;        
        }
        ?>
      </h1>
    </header>
    <div>
      <h2>
        <?php
        if($language === 'fr')
        {
          echo 'Nos articles' ;
        }else{
          echo 'Our products !';
        }
        ?>:
      </h2>
      <?php
        function loadArticles (): array 
          {
            return [
              [
              'Name' => 'Carte mère' ,
              'Price'=> 120 ,
              'Description' => 'Une super carte mère !',
              ],
              [
              'Name' => 'Carte graphique',
              'Price'=> 500 ,
              'Description' => 'A vous le 4K', 
              ],
              [
              'Name' => 'Barrettes de RAM',
              'Price'=> 150 ,
              'Description' => '16Go DDR4',
              ],
            ];
          }

          foreach (loadArticles() as $article)
            {
              echo '<div>
                     <h3> '. $article['Name']. ' - '. $article['Price'].'€</h3>
                     <p>'.$article['Description'].'</p>
                    </div>';
            }
      ?>
    </div>
    <?php
?> 
