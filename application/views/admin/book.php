<!-- Content -->
<div class="page-content bg-white">
   <!-- inner page banner -->
   <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
      <div class="container">
         <div class="dz-bnr-inr-entry">
            <h1>Book</h1>
           <nav aria-label="breadcrumb" class="breadcrumb-row">
			<ul class="breadcrumb">
			   <li class="breadcrumb-item"><a href="<?php echo base_url();?>"> </a></li>
			   <li class="breadcrumb-item">Book</li>
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
                     <form action="<?php echo base_url('admin/book/save'); ?>" method="post" enctype="multipart/form-data">
                        <!-- <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Select category</label>
                                 <input type="text" name="category" class="form-control" id="formcontrolinput1" placeholder="Category Name">
                              </div>
                           </div>

                        </div> -->

                        <?php
                        if ($this->session->flashdata('myMsj')) {
                           $message =  $this->session->flashdata('myMsj');
                        ?>
                           <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?> </div>
                        <?php } ?>

                        <label for="formcontrolinput1" class="form-label">Select category</label>
                        <select name="cat_id">
                           <option value="">Select Category</option>
                           <?php

                           foreach ($categories as $cat) : ?>
                              <option value="<?php echo $cat->id; ?>"><?php echo $cat->title; ?></option>
                           <?php endforeach; ?>
                        </select>
                        <?php echo form_error('cat_id'); ?>

                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Name</label>
                                 <input type="text" name="book_name" class="form-control" id="formcontrolinput1" placeholder="Book Name">
                                 <?php echo form_error('book_name'); ?>
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Front Image</label>
                                 <input type="file" name="image1" class="form-control" required id="formcontrolinput1" placeholder="Category Name">
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Back Image</label>
                                 <input type="file" name="image2" class="form-control" required id="formcontrolinput1" placeholder="Category Name">
                                 <small></small>
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Description</label>
								  <textarea class="form-control" rows="5" name="description" id="description" placeholder="Description"></textarea>
                                 <?php echo form_error('description'); ?>
                              </div>
                           </div>

                        </div>

                        <label for="formcontrolinput1" class="form-label">Select Book Availability</label>
                        <select name="availability">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      
                        </select>
                        <?php echo form_error('availability'); ?>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">New releases</label>
                                 <input type="checkbox" name="new_release" class="" id="" value="1">
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Featured</label>
                                 <input type="checkbox" name="featured" class="" id="" value="1">
                              </div>
                           </div>

                        </div>

                        <button class="btn btn-primary btnhover" name="submit">Save</button>
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