<?php

class Sys extends Controller {

	function Sys()
	{
		parent::Controller();	
	}
        function sys_info($item){
          $totalmem = $this->sys_storage->totalmem();
          $usagemem = $this->sys_storage->totalmem();
          if ($item == "totalmem"){
          echo "<div>$totalmem Mb</div>";
          } else if ($item == "usagemem"){
          echo "<div>$usagemem Mb</div>";
          } else if ($item == "avalhdd"){
          echo "<div>$totalmem</div>";
          }
        }
}
