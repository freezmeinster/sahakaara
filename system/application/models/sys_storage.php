<?php
class Sys_storage extends Model {

    function Sys_storage()
    {
        parent::Model();
    }
    
    function totalmem()
    {
      $total = shell_exec("free -m | grep Mem | awk '{print $4}'");
      return $total;
    }
}
?>
