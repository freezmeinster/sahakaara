  <div id="col-top"></div>
  <div id="cols2" class="box">
   <div id="col-left"></div>
    <div id="col-right">
     <script type="text/javascript">
     function getmemusage() {
      $("#mem_usage").fadeOut("fast"); 
      $("#mem_usage").load("<?php echo site_url();?>/sys/sys_info/mem_usage",'',callback);
     }
     function callback() {
       $("#mem_usage").fadeIn('fast');
       setTimeout("getmemusage();", 2000);
     }
      $(document).ready(getmemusage);   
      </script>
      <?php echo $this->lang->line('content_home_system_mem_total');?><span><?php echo $this->sys_storage->info('totalmem');?> Mb</span><br/>
      <?php echo $this->lang->line('content_home_system_mem_usage');?><span id="mem_usage"></span><br/>
      </div>
  </div>
  <div id="col-bottom"></div>
