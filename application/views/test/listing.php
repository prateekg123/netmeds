<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <div class="profilePage">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="main_title_hmbrg mt-3">
            <h6 class="page-title-heading mr-0 mr-r-5"><a href="<?= base_url() ?>">Home</a> &gt; Book-Test</h6>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-12 col-xl-6">
          <div class="main_title_2 text-left">
            <h2>Search Result</h2>
          </div>
        </div>
        <div class="col-12">
          <form class="w-60" action="<?php echo base_url(); ?>test/search" method="POST">
            <div class="">
              <div class="">
                <div class="row no-gutters custom-search-input-2 inner-search inner-search1">
                  <div class="col-12 col-sm-9 col-lg-9 col-lg-9 col-xl-9">
                    <div class="form-group">
                      <img style="" src="http://tabibi.ae/admin/web/assets/website/img/SVG/search.svg" class="search-index">
                      <input class="form-control search" name="search" type="text" placeholder="Search Tests & Packages..." data-type="" data-id="">
                    </div>
                    <div class="search-suggestion-list"> 
                    </div>
                  </div>
                  <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <input type="submit" class="btn_search" value="Search">
                  </div>
                </div>
              </div>
            </div>
            <!-- /row -->
          </form>
        </div>
      </div>
    </div>
    <!-- /container -->
    <div class="full-width margin_50_0 bg_color_1">
      <div class="container">
        <div class="tabs tabs-bordered">
          <ul class="nav nav-tabs user-log tb-1">
            <li class="nav-item  lg-tb active">
              <a class="nav-link clr" href="#clinic-tab-bordered-1" data-toggle="tab" aria-expanded="true">Tests</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#topdoc-tab-bordered-1" data-toggle="tab" aria-expanded="true">Packages</a>
            </li>
          </ul>
          <!-- /.nav-tabs -->
          <div class="tab-content lg-top">
            <div class="tab-pane" id="topdoc-tab-bordered-1">
              <div class="main_title_3">
                <h2> Packages </h2>
              </div>
              <div class="row">
                
                <!-- /aside -->
                 <?php foreach ($package as $key => $value) { ?>
         <div class="col-md-6 isotope-item popular">
            <a href="#">
               <div class="box_grid doct-add">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-3">
                           <figure>
                              <img src="http://tabibi.ae/admin/public/pharmacy/deals_images/2020_02_18_5e4b969740280.jpg" class="img-fluid" alt="" width="800" height="533">
                           </figure>
                          
                        </div>
                        <div class="col-lg-9">
                           <div class="doct-list-detl">
                              <div class="doct-list-detl-inner">
                                 <h3 class="pull-left"> <?= $value->itemName ?></h3>
                                 <p class="pull-right">0 % off</p>
                              </div>
                              <div class="doct-list-detl-nm mt-2">
                                 <ul>
                                    <li><?= $value->labName ?></li>
                                    <li></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm mt-2">
                                 <ul>
                                    <li>Fasting Required</li>
                                    <li><?php if($value->labName == 0){echo "NO";}else{echo "YES";} ?></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm">
                                 <ul>
                                    <li>Test Cost</li>
                                    <li><?= $value->minPrice ?></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm">
                                 <ul>
                                    <li>Total Number of Test</li>
                                    <li><?= $value->testCount ?></li>
                                 </ul>
                              </div>
                             
                              <div class="doct-list-detl-btn mt-3">
                                 <!-- <button class="btn_1 rounded prime-bg">Pay Now: AED  720</button> -->
                                 <form action="<?php echo base_url(); ?>cart/add" method="POST">
                                    <input type="hidden" name="item_id" value="<?= $value->id ?>">
                                    <button class="btn_1 rounded prime-bg" type="submit">Add the Test</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         </div>

       <?php } ?>
              </div>
            </div>
            <div class="tab-pane active" id="clinic-tab-bordered-1">
              <div class="main_title_3">
                <h2> Tests </h2>
              </div>
              <div class="row">
                
                <div class="col-lg-12">
                  
                  <div class="isotope-wrapper">
                    <div class="row clinic_list_filtered">
                    </div>
                    <div class="row">

        <?php foreach ($test as $key => $value) { ?>
         <div class="col-md-6 isotope-item popular">
            <a href="#">
               <div class="box_grid doct-add">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-3">
                           <figure>
                              <img src="http://tabibi.ae/admin/public/pharmacy/deals_images/2020_02_18_5e4b969740280.jpg" class="img-fluid" alt="" width="800" height="533">
                           </figure>
                          
                        </div>
                        <div class="col-lg-9">
                           <div class="doct-list-detl">
                              <div class="doct-list-detl-inner">
                                 <h3 class="pull-left"> <?= $value->itemName ?></h3>
                                 <p class="pull-right">0 % off</p>
                              </div>
                              <div class="doct-list-detl-nm mt-2">
                                 <ul>
                                    <li><?= $value->labName ?></li>
                                    <li></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm mt-2">
                                 <ul>
                                    <li>Fasting Required</li>
                                    <li><?php if($value->labName == 0){echo "NO";}else{echo "YES";} ?></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm">
                                 <ul>
                                    <li>Test Cost</li>
                                    <li><?= $value->minPrice ?></li>
                                 </ul>
                              </div>
                              <div class="doct-list-detl-nm">
                                 <ul>
                                    <li>Total Number of Test</li>
                                    <li><?= $value->testCount ?></li>
                                 </ul>
                              </div>
                             
                              <div class="doct-list-detl-btn mt-3">
                                 <!-- <button class="btn_1 rounded prime-bg">Pay Now: AED  720</button> -->
                                 <form action="<?php echo base_url(); ?>cart/add" method="POST">
                                    <input type="hidden" name="item_id" value="<?= $value->id ?>">
                                    <button class="btn_1 rounded prime-bg" type="submit">Add the Test</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         </div>

       <?php } ?>
         <!-- TEST list -->
      </div>
      <!-- /row -->
                    <!-- /row -->
                  </div>
                  <!-- /isotope-wrapper -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
      </div>
    </div>
  </div>
</main>


<script>
  $( function() {
    var availableTags = [<?= $search_array ?>];
    $( ".search" ).autocomplete({
      source: availableTags
    });
  } );
  </script>


<?php $this->load->view('layout/footer'); ?>
