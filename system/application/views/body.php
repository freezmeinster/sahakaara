  <div id="col-top"></div>
  <div id="col" class="box">
    <div id="col-left">
     <script type="text/javascript">
     function getRandom() {
      $("#mem").fadeOut("fast");
      $("#mem").load("<?php echo site_url();?>/sys/sys_info/totalmem",'',callback);
     }
     function callback() {
       $("#mem").fadeIn("fast");
       setTimeout("getRandom();", 5000);
     }
       $(document).ready(getRandom);       
      </script>

      <p><?php echo $this->lang->line('content_home_system_mem');?> <span id="mem"></span></p>
      <div id="usagemem"></div>
      </div>
  </div>
  <div id="col-bottom"></div>
