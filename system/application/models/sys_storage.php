<?php
class Sys_storage extends Model {

    function Sys_storage()
    {
        parent::Model();
    }
    
    function info($item)
    {
      if ( $item == "totalmem"){
      $total = shell_exec("free -m | grep Mem | awk '{print $2}'");
      return $total;
      }else  if ( $item == "usagemem"){
      $total = shell_exec("free -m | grep Mem | awk '{print $3}'");
      return $total;
      }else if ( $item == "freemem"){
      $total = shell_exec("free -m | grep Mem | awk '{print $4}'");
      return $total;
      }else if ( $item == "userproc"){
      $total = shell_exec("procinfo | grep user | awk '{print $4}' | cut -d % -f1");
      return $total;
      }
    }
}
?>
