  <div id="col-top"></div>
  <div id="cols2" class="box">
   <div id="col-left"></div>
    <div id="col-right">
       <h3>Memory status</h3>
      <script type="text/javascript">
     function getmemusage() {
      $("#mem_free").fadeOut("fast"); 
      $("#mem_free").load("<?php echo site_url();?>/sys/sys_info/mem_free",'',callback);
     }
       function proc() {
      $("#proc").fadeOut("fast"); 
      $("#proc").load("<?php echo site_url();?>/sys/sys_info/userproc",'',back);
     }
     function callback() {
       $("#mem_free").fadeIn('fast');
       setTimeout("getmemusage();", 2000);
     }
     
     function back() {
       $("#proc").fadeIn('fast');
       setTimeout("proc();", 2000);
     }
      $(document).ready(getmemusage);
      $(document).ready(back);
      </script>
      <?php echo $this->lang->line('content_home_system_mem_total');?><span><?php echo $this->sys_storage->info('totalmem');?> Mb</span><br/>
      <?php echo $this->lang->line('content_home_system_mem_free');?><span id="mem_free"></span><br/>
      </div>
  </div>
  <div id="col-bottom"></div>
