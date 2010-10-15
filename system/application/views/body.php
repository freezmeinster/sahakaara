  <div id="col-top"></div>
  <div id="cols2" class="box">
   <div id="col-left"></div>
    <div id="col-right">
     <script type="text/javascript">
     function getmem() {
      $("#mem").fadeOut("fast"); 
      $("#mem").load("<?php echo site_url();?>/sys/sys_info/mem",'',callback);
     }
 
    function getproc() { 
      $("#proc").fadeOut("fast");
      $("#proc").load("<?php echo site_url();?>/sys/sys_info/mem",'',callback);
    }

     function callback() {
       $("#mem").fadeIn('fast');
       $("#proc").fadeIn('fast');
       setTimeout("getmem();", 5000);
       setTimeout("getproc();", 5000);
     }
       $(document).ready(getmem);
       $(document).ready(getproc);       
      </script>

      <p id="mem"></p>
      <p id="proc"></p>
      </div>
  </div>
  <div id="col-bottom"></div>
