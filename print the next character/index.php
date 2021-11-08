<?php

  $firstchar = 'a';
  $nextchar = ++$firstchar; 
  function speci($firstchar,$nextchar){

    if (strlen($nextchar) > 1) 
    {
    $nextchar = $nextchar[0];
    }
    echo $nextchar;
  }
  speci($firstchar,$nextchar);

  ?>

