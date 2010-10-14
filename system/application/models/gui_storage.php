<?php
class Gui_storage extends Model {

    function Gui_storage()
    {
        parent::Model();
    }
    
    function getlang()
    {
        $lang = $this->session->userdata('lang');
        if ( $lang == "" ){
           $lang = "endonesia";
           return $lang;
        } else if ( $lang != "" ){
           return $lang;
        }
    }
}
?>
