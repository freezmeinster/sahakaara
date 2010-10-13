  <?php 
  $now = $this->uri->segment(2);
  ?>
  <div id="tray">
    <ul>
      <li <?php if ($now == ""){ echo "id=\"tray-active\""; }?>><a href="<?php echo site_url();?>/storage/"><?php echo $this->lang->line('link_home');?></a></li>
      <li <?php if ($now == "node"){ echo "id=\"tray-active\""; }?>><a href="<?php echo site_url();?>/storage/node"><?php echo $this->lang->line('link_node');?></a></li>
      <li <?php if ($now == "disk"){ echo "id=\"tray-active\""; }?>><a href="<?php echo site_url();?>/storage/disk"><?php echo $this->lang->line('link_disk');?></a></li>
      <li <?php if ($now == "about"){ echo "id=\"tray-active\""; }?>><a href="<?php echo site_url();?>/storage/about"><?php echo $this->lang->line('link_about');?></a></li>
    </ul>
    <hr class="noscreen" />
  </div>
