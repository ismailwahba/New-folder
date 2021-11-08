<?php

  $firstchar = 'a';
  $nextchar = ++$firstchar; 
  function speci($bla){
    global $nextchar;
    if (strlen($nextchar) > 1) 
    {
    $nextchar = $nextchar[0];
    }
    echo $nextchar;
  }
  speci($nextchar);

  ?>

