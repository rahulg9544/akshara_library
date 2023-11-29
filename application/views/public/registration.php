         <div class="page-content">
            <!-- inner page banner -->
            <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(<?php echo base_url('public/images/inner-banner.jpg'); ?>);">
               <div class="container">
                  <div class="dz-bnr-inr-entry">
                     <h1>Registration</h1>
                     <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                           <li class="breadcrumb-item">Registration</li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <!-- inner page banner End-->
            <!-- contact area -->
            <section class="content-inner shop-account">
               <!-- Product -->
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-5 mb-4">
                         <img class="img-fluid" src="<?php echo base_url(); ?>public/images/reg.png">
                      </div>
                     <div class="col-md-7 mb-4">
                        <div class="login-area">
                           <form action="<?php echo base_url('signup/register'); ?>" method="post">
                              <h4 class="text-secondary">Registration</h4>
                              <p class="font-weight-600">If you don't have an account with us, please Registration.</p>
                               
                               <div class="row">
                              <div class="col-md-6 mb-4">
                                 <label class="label-title">Name *</label>
                                 <input name="username" class="form-control" placeholder="name" type="text" value="<?php echo set_value('username'); ?>">
                                 <?php echo form_error('username'); ?>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="label-title">Email address *</label>
                                 <input name="email" class="form-control" placeholder="Email" type="email" value="<?php echo set_value('email'); ?>">
                                 <?php echo form_error('email'); ?>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="label-title">Password *</label>
                                 <input name="password" class="form-control " placeholder="Password" type="password" value="<?php echo set_value('password'); ?>">
                                 <?php echo form_error('password'); ?>
                              </div>
                            
                              <div class="col-md-6 mb-4">
                                 <label class="label-title">Phone *</label>
                                 <input name="phone" class="form-control" placeholder="Phone" type="number" value="<?php echo set_value('phone'); ?>">
                                 <?php echo form_error('phone'); ?>
                              </div>
                                <div class="col-md-12 mb-4">
                                 <label class="label-title">Address *</label>
                                 <textarea name="address" class="form-control" rows="4" cols="50" placeholder="Address" type="text"><?php echo set_value('address'); ?></textarea>
                                 <?php echo form_error('address'); ?>
                              </div>
                              <!--<div class="mb-3">
                                 <small>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.html">privacy policy</a>.</small>
                              </div>-->
                            </div>
                              <div class="text-left">
                                 <button class="btn btn-primary btnhover w-100 me-2">Register</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Product END -->
            </section>
            <!-- contact area End--> 
         </div>
       