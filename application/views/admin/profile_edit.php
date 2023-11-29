
         <!-- Content -->
         <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
               <div class="container">
                  <div class="dz-bnr-inr-entry">
                     <h1>Profile</h1>
                     <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo base_url();?>"> </a></li>
                           <li class="breadcrumb-item">Profile Edit</li>
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
                                 <h5 class="text-uppercase">Edit</h5>
                              </div>
                              <form action="<?php echo base_url('admin/profile/update/'); ?>" method="post" enctype="multipart/form-data">

                              <?php
					if ($this->session->flashdata('myMsj')) {
						$message =  $this->session->flashdata('myMsj');
					?>
 					<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?> </div>
 				<?php } ?>

                              <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Name</label>
                                 <input type="text" name="username" class="form-control" id="formcontrolinput1" placeholder="name" value="<?php echo $profile->username; ?>">
                              </div>
                              <?php echo form_error('username'); ?>
                           </div>

                        </div>
                            
                        
                       
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Email</label>
                                 <input type="text" name="email" class="form-control" id="formcontrolinput1" placeholder="email" value="<?php echo $profile->email; ?>">
                              </div>
                              <?php echo form_error('email'); ?>
                           </div>

                        </div>

                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">New Password</label>
                                 <input type="password" name="password" class="form-control" id="formcontrolinput1" placeholder="" value="">
                              </div>
                              <?php //echo form_error('password'); ?>
                           </div>

                        </div>

                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Phone</label>
                                 <input type="text" name="phone" class="form-control" id="formcontrolinput1" placeholder="phone" value="<?php echo $profile->phone; ?>">
                              </div>
                              <?php echo form_error('phone'); ?>
                           </div>

                        </div>
                        
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Address</label>
								 <textarea  class="form-control" rows="5" name="address" id="description"><?php echo $profile->address; ?></textarea>
                              </div>
                              <?php echo form_error('address'); ?>
                           </div>

                        </div>
                        
						

                        <input type="hidden" name="edit_id" value="<?php echo $profile->id; ?>">
               
                                 <button class="btn btn-primary btnhover" name="submit">Update</button>
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
        