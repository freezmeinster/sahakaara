  <div id="col-top"></div>
  <div id="col" class="box">
    <div id="col-left">
     <script type="text/javascript">
			$(function(){
				$("#progressbar").progressbar({
					value: 20 
				});
	
				
			});
	</script>

      <p><?php echo $this->lang->line('content_home_system_mem');?> <?php echo $this->sys_storage->totalmem();?> Mb</p>
      <div id="progressbar"></div>
      </div>
  </div>
  <div id="col-bottom"></div>
