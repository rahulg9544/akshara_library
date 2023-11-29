
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
                           <li class="breadcrumb-item">Book Edit</li>
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
                              <form action="<?php echo base_url('admin/book/save/').$book->id; ?>" method="post" enctype="multipart/form-data">
                              <label for="formcontrolinput1" class="form-label">Select category</label>

                        
                        <select name="cat_id">
                           <option value="">Select Category</option>
                           <?php

                           foreach ($categories as $cat) : ?>

                              <option value="<?php echo $cat->id; ?>" <?php if($cat->id==$book->cat_id) { echo 'selected="selected"'; } ?>><?php echo $cat->title; ?></option>
                           <?php endforeach; ?>
                        </select>

                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Name</label>
                                 <input type="text" required name="book_name" class="form-control" id="formcontrolinput1" placeholder="Book Name" value="<?php echo $book->book_name; ?>">
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Front Image</label>
                                 <input type="file" name="image1" class="form-control" id="formcontrolinput1" placeholder="Category Name">
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Book Back Image</label>
                                 <input type="file" name="image2" class="form-control" id="formcontrolinput1" placeholder="Category Name">
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Description</label>
								 <textarea  class="form-control" rows="5" name="description" id="description"><?php echo $book->description; ?></textarea>
                              </div>
                           </div>

                        </div>
                        
                        <label for="formcontrolinput1" class="form-label">Select Book Availability</label>
                        <select name="availability">
                        <option value="1" <?php if($book->availability == 1) { echo 'selected="selected"'; }?>>Yes</option>
                        <option value="0"<?php if($book->availability == 0) { echo 'selected="selected"'; }?>>No</option>
                      
                        </select>
                        <?php echo form_error('availability'); ?>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">New releases</label>

                                 <?php if($book->new_release == 0) {?>
                                 <input type="checkbox" name="new_release" class="" id=""  value="1">
                                 <?php } else {?>
                                    <input type="checkbox" name="new_release" class="" id=""  value="1" checked>
                                    <?php } ?>  
                              </div>
                           </div>

                        </div>
                        <div class="row m-b30">
                           <div class="col-lg-6 col-md-6">
                              <div class="mb-3">
                                 <label for="formcontrolinput1" class="form-label">Featured</label>
                                 <?php if($book->featured == 0) {?>
                                 <input type="checkbox" name="featured" class="" id="" value="1">
                                 <?php } else {?>
                                 <input type="checkbox" name="featured" class="" id="" value="1" checked> 
                                 <?php } ?>  
                              </div>
                           </div>

                        </div>
						
						
						
						<?php
						  // print_r($bookUserInfo);
						 //  $bookUserInfo=$bookUserInfo[0];
						?>
						
						<div class="row m-b30">
							   <div class="col-lg-6 col-md-6">
								  <div class="mb-3">
									 <label for="formcontrolinput1" class="form-label">Contact Details </label>
									 <table class="table border book-overview">
										<tr>
										   <th>Contact Person </th>
										   <td><?php echo $bookUserInfo->username; ?></td>
										</tr>
										 <tr>
										   <th>Phone </th>
										   <td><?php echo $bookUserInfo->phone; ?></td>
										</tr>
										 <tr>
										   <th>Email </th>
										   <td><?php echo $bookUserInfo->email; ?></td>
										</tr>
										 <tr>
										   <th>Contact Address </th>
										   <td><?php echo $bookUserInfo->address; ?></td>
										</tr>
									 </table>
								  </div>
							   </div>
                        </div>
						
						

                        <input type="hidden" name="edit_id" value="<?php echo $book->id; ?>">
               
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
        