<?php

function loadLanguage(string $language)
  {
    if($language === 'fr') {
      require 'constants/text_fr.php' ;
    }else{
      require 'constants/text_en.php' ;
    }
  }