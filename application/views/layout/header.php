<body>    
<div id="page">    
<header class="header menu_fixed" id="header">
  <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
  <div class="container">
    <div id="logo">

      <a href="<?= base_url(); ?>">
        <img src="https://www.reviewsxp.com/image/Netsmeds.jpg" width="150" height="auto" data-retina="true" alt="" class="logo_normal">
        <img src="https://www.reviewsxp.com/image/Netsmeds.jpg" width="150" height="auto" data-retina="true" alt="" class="logo_sticky">
      </a>
    </div>
    <ul id="top_menu">
        
        <?php if($this->session->userdata('id')){ ?>
          <li><a href="<?= base_url() ?>private_area/logout" class="btn_1 rounded prime-bg btn-log"><i class="icon-login"></i> Logout</a></li>

        <?php }else{ ?>
          <li><a href="<?= base_url() ?>login" class="btn_1 rounded prime-bg btn-log"><i class="icon-login"></i> Login</a></li>
          <!-- <li><a href="login.php" class="btn_1 rounded prime-bg btn-log"><i class="fa fa-power-off"></i> Logout</a></li> -->
          <li><a href="<?= base_url() ?>register" class="btn_1 rounded prime-bg btn-sin"><i class="icon-logout"></i> Signup</a></li>
        <?php } ?>
            
      
    
    </ul>
    <nav id="menu" class="main-menu">
      <ul>

    
     <li><span style="color: black" ><a href="<?= base_url() ?>cart"><i class="fa fa-shopping-cart" style="font-size:24px;color:black"></i> &nbsp;<?php echo $this->session->userdata('basket_count'); ?></a> </span></li>
     
           

      

      </ul>
    </nav>
    <!-- /top_menu -->

  </div>
</header>

