<?php

class Sys extends Controller {

	function Sys()
	{
		parent::Controller();	
                $lang = $this->gui_storage->getlang();
                $this->lang->load('main', $lang);
	}
        function sys_info($item){
          $totalmem = $this->sys_storage->info('totalmem');
          $freemem = $this->sys_storage->info('freemem');
          
          if ($item == "mem_total"){
             echo "$totalmem Mb";
          }else if ($item == "mem_free"){
          $percent = floor(($freemem / $totalmem )* 100); 
          echo "<script> $(function() { $( \"#progressbar2\" ).progressbar({value: $percent});}); </script>
	        <span>$percent %</span> <div style=\"height:20px;\"  id=\"progressbar2\"></div>    
               ";
          }else if ($item == "userproc"){
          $percent = $this->sys_storage->info('userproc'); 
          echo "<script> $(function() { $( \"#proc\" ).progressbar({value: $percent});}); </script>
	        <span>$percent %</span> <div id=\"proc\"></div>    
               ";
          }
        }
}
