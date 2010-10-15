<?php

class Sys extends Controller {

	function Sys()
	{
		parent::Controller();	
                $lang = $this->gui_storage->getlang();
                $this->lang->load('main', $lang);
	}
        function sys_info($item){
          $totalmem = $this->sys_storage->totalmem();
          $usagemem = $this->sys_storage->totalmem();
          if ($item == "mem"){
          $mess=$this->lang->line('content_home_system_mem');
          echo "<div>$mess $totalmem Mb</div>";
          } 
        }
}
