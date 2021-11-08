<?php

  $firstchar = 'z';
  $nextchar = ++$firstchar; 
  function speci($firstchar){

    if (strlen($nextchar) > 1) 
    {
    $nextchar = $nextchar[0];
    }
    echo $nextchar;
  }
  speci($firstchar);

  ?>

