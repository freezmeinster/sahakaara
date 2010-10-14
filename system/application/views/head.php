<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Sahakaara</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" HREF="<?php echo base_url();?>/favicon.ico">
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url();?>css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url();?>css/main.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url();?>css/style.css" />
<link rel="stylesheet" media="print" type="text/css" href="<?php echo base_url();?>css/print.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/overcast/jquery-ui-1.8.5.custom.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.5.custom.min.js"></script>

</head>
<body>
<div id="main">
  <div id="header">
    <h1 id="logo">Sahakaara </h1>
    <span id="slogan"><?php echo $this->lang->line('site');?></span>
    <hr class="noscreen" />
    <?php $lang=$this->gui_storage->getlang(); ?>
    <div id="nav"> 
     <a <?php if ($lang=="english"){echo "id=\"nav-active\"";} ?> href="<?php echo site_url();?>/gui/setlang/english/<?php echo $this->uri->segment(2); ?>">English</a> 
     <span>|</span>
     <a <?php if ($lang=="endonesia"){echo "id=\"nav-active\"";} ?> href="<?php echo site_url();?>/gui/setlang/endonesia/<?php echo $this->uri->segment(2);?>">Endonesia</a> 
     <span>|</span> 
     <a <?php if ($lang=="spanyol"){echo "id=\"nav-active\"";} ?> href="<?php echo site_url();?>/gui/setlang/spanyol/<?php echo $this->uri->segment(2);?>">Spanyol</a>
     <span>|</span> 
     <a <?php if ($lang=="china"){echo "id=\"nav-active\"";} ?> href="<?php echo site_url();?>/gui/setlang/china/<?php echo $this->uri->segment(2);?>">China</a>
   </div>
  </div>
