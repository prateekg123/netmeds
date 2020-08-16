<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h2>NETMEDS ASSESSMENT</h2>
          </div>


          
          <?php if($this->session->userdata('id')){ ?>
          <div class="full-width margin_20_0 bg_color_1 mt-4">
              <div class="col-md-12 col-lg-10 mx-auto">
                <div class="row">

                  <div class="col-sm-3 col-md-3 col-lg-3">
                        
                    </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <a href="<?php echo base_url(); ?>test/list" class="mdl-1">
                          <div class="left-user">
                               <img src="<?php echo asset_url();?>images/1583731845.jpg" class="resp-img" alt="img" width="" height="">
                               <div class="radius-btn">
                                <div class="box-shadow">Book Tests / Packages</div>
                              </div>
                           </div>  
                        </a>   
                    </div>
                                        
                    
               
                </div>      
              </div>
          </div> 
        <?php }else{ ?>

          <div class="full-width margin_20_0 bg_color_1 mt-4">
              <div class="col-md-12 col-lg-10 mx-auto">
                <div class="row">
                  <ul>
                    <li>Login( USERNAME: netmeds@gmail.com || Password: netmeds)</li>
                    <li>Sign UP</li>
                    <li>Smart Search</li>
                    <li>Cart Management</li>
                  </ul>
                    
                    
               
                </div>      
              </div>
          </div>  
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<?php $this->load->view('layout/footer'); ?>
