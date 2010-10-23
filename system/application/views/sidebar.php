 <div id="col-right">
       <h3>Memory status</h3>
      <script type="text/javascript">
     function getmemusage() {
      $("#mem_free").fadeOut(100); 
      $("#mem_free").load("<?php echo site_url();?>/sys/sys_info/mem_free",'',callback);
     }

     function callback() {
       $("#mem_free").fadeIn(100);
       setTimeout("getmemusage();", 8000);
     }
     
      $(document).ready(getmemusage);
      </script>
      <?php echo $this->lang->line('content_home_system_mem_total');?><span><?php echo $this->sys_storage->info('totalmem');?> Mb</span><br/>
      <?php echo $this->lang->line('content_home_system_mem_free');?><span id="mem_free"></span><br/>
      </div>