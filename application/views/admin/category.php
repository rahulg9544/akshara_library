
         <!-- Content -->
         <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
               <div class="container">
                  <div class="dz-bnr-inr-entry">
                     <h1>Category</h1>
                     <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo base_url();?>"> </a></li>
                           <li class="breadcrumb-item">Category</li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <!-- contact area -->
            <div class="content-block">
               <!-- Browse Jobs -->
               <section class="content-inner bg-white">
                  <div class="container">
                     <div class="row">
                        <?php $this->load->view('admin/includes/sidebar'); ?>
                        <div class="col-xl-9 col-lg-8 m-b30">
                           <div class="shop-bx shop-profile">
                              <div class="shop-bx-title clearfix">
                                 <h5 class="text-uppercase">Add</h5>
                              </div>
                              <form action="<?php echo base_url('admin/category/save'); ?>" method="post" >
                                 <div class="row m-b30">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="mb-3">
                                          <label for="formcontrolinput1" class="form-label">Title</label>
                                          <input type="text" name="category" class="form-control" id="formcontrolinput1" placeholder="Category Name">
                                          <?php echo form_error('category'); ?>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 
                                 
                                 <button class="btn btn-primary btnhover">Save</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Browse Jobs END -->
            </div>
         </div>
         <!-- Content END-->
        