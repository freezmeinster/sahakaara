<?php

class Gui extends Controller {

	function Gui()
	{
		parent::Controller();	
	}
	
	function setlang($lang,$before)
	{
		$newdata = array(
                   'lang'  => $lang
                );

               $this->session->set_userdata($newdata);
               redirect("/storage/$before");
	}
}

