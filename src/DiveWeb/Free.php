<?php namespace DiveWeb;

use InvalidArgumentException;

class Free {

  public function ata ($feet)
  {
     if(!is_numeric($feet)){
       throw new InvalidArgumentException('please provide number');
     }
     return 1+(round($feet/33,1));
  }

}

?>
