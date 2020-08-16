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
            
            <br />
            <h3 align="center">Registration</h3>
            <br />
            <div class="panel panel-default">
             <div class="panel-heading">Register</div>
             <div class="panel-body">
              <form method="post" action="<?php echo base_url(); ?>register/validation">
               <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
               </div>
               <div class="form-group">
                <label>Enter Your Valid Email Address</label>
                <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
               </div>
               <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
               </div>
               <div class="form-group">
                <input type="submit" name="register" value="Register" class="btn btn-info" />
               </div>
              </form>
             </div>
            </div>
          </div>  
      </div>
    </div>
  </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<?php $this->load->view('layout/footer'); ?>
