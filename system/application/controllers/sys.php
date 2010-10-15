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
          $usagemem = $this->sys_storage->info('usagemem');
          if ($item == "mem_usage"){
          $percent = floor(($usagemem / $totalmem )* 100); 
          echo "<script> $(function() { $( \"#progressbar\" ).progressbar({value: $percent});}); </script>
	        <div id=\"progressbar\"></div>      
               ";
          }else if ($item == "mem_total"){
             echo "$totalmem Mb";
          }
        }
}
