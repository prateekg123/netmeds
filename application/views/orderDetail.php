<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      <div class="row">
        <div class="main_title_hmbrg mt-3">
            <h6 class="page-title-heading mr-0 mr-r-5"><a href="<?= base_url() ?>">Home</a> &gt; <a href="<?= base_url() ?>test/list">Book-Test</a>&gt; Order-Details</h6>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <br />
        <h3 align="center" style="color: #239b27">ORDER SUCCESSFULLY PLACED</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Count</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $total_amount = 0;
                $total_count = 0;
                foreach ($cart_data as $key => $value) { 
                    
                $total_amount += $value->count*$value->minPrice;
                $total_count += $value->count; ?>
                <tr>
                    <td><?= $value->itemName ?></td>
                    <td><?= $value->count ?></td>
                    <td><?= $value->count*$value->minPrice ?></td>
                    <td></td>
                    
                </tr>
                <?php } ?>
                <tr>
                    <td>Total</td>
                    <td><?= $total_count ?></td>
                    <td><?= $total_amount ?></td>
                    <td style="color: #239b27" >PAID</td>
                    
                </tr>

                </tbody>
            </table>
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
