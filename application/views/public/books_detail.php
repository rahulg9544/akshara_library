
         <div class="page-content ">
            <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
               <div class="container">
                  <div class="dz-bnr-inr-entry">
                     <h1>Think and Grow Rich</h1>
                     <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                           <li class="breadcrumb-item">Think and Grow Rich</li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <section class="content-inner-1">
               <div class="container">
                  <div class="row book-grid-row style-4 m-b60">
                     <div class="col">
                        <div class="dz-box">
                               <img class="img-fluid BookTop" src="<?php echo base_url() . 'uploads/' . $book_detail[0]['image1']; ?>">
                                <img class="img-fluid BookTop" src="<?php echo base_url() . 'uploads/' . $book_detail[0]['image2']; ?>">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="product-description tabs-site-button">
                           <ul class="nav nav-tabs">
                              <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a></li>
                           </ul>
                           <div class="tab-content">
                               
                               <div class="dz-body">
                              
                                 <p class="text-1"><?php echo $book_detail[0]['description']; ?></p>
                                 </div>
                               
                              <div class="tab-pane show active">
                                 <table class="table border book-overview">
                                    <tr>
                                       <th>Book Status :</th>

                                       <?php if($book_detail[0]['availability'] == 1) {?>
                                       <td>Available</td>

                                       <?php } else {?>
                                          <td> Not Available</td>   
                                          <?php } ?>
                                    </tr>
                                 </table>
                              </div>
                               
                               <p class="broow">Borrow this book. Below are the current contact details</p>
                               
                               <div class="tab-pane show active">
                                 <table class="table border book-overview">
                                    <tr>
                                       <th>Contact Person :</th>
                                       <td><?php echo $book_detail[0]['username']; ?></td>
                                    </tr>
                                     <tr>
                                       <th>Phone :</th>
                                       <td><?php echo $book_detail[0]['phone']; ?></td>
                                    </tr>
                                     <tr>
                                       <th>Email :</th>
                                       <td><?php echo $book_detail[0]['email']; ?></td>
                                    </tr>
                                     <tr>
                                       <th>Contact Address :</th>
                                       <td><?php echo $book_detail[0]['address']; ?></td>
                                    </tr>
                                 </table>
                              </div>
                               
                               
                               <!--<div class="book-footer">
                                    <div class="product-num">
                                       <a href="#" class="btn btn-primary btnhover btnhover2"><span> Request book</span></a>
                                    </div>
                               </div>-->
                               
                               
                            <!--   <div class="footer-category">
									<div class="container">
										<div class="category-toggle">
											<a href="javascript:void(0);" class="toggle-btn">Add Comments</a>
											<div class="toggle-items row book-grid-row">
												<div class="footer-col-book">
													   <div class="input-group">
														 <textarea required="" name="dzMessage" rows="5" class="form-control">Content</textarea>
													  </div>
													  <div>
														 <button name="submit" type="submit" value="submit" class="btn w-100 btn-primary btnhover">SUBMIT</button>
													  </div>
												</div>
											</div>
										</div>
									</div>
								</div>-->
                               
                           </div>
                        </div>
                     </div>
                     <!--<div class="col-xl-4 mt-5 mt-xl-0">
                        <div class="widget">
                           <h4 class="widget-title">Related Books</h4>
                           <div class="row">
                              <div class="col-xl-12 col-lg-6">
                                 <div class="dz-shop-card style-5">
                                    <div class="dz-media">
                                       <img src="<?php // echo base_url(); ?>public/images/books/2.jpg" alt="">
                                    </div>
                                    <div class="dz-content">
                                       <h5 class="subtitle">Terrible Madness</h5>
                                       <ul class="dz-tags">
                                          <li>THRILLE,</li>
                                          <li>DRAMA,</li>
                                          <li>HORROR</li>
                                       </ul>
                                       <a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Select</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-6">
                                 <div class="dz-shop-card style-5">
                                    <div class="dz-media">
                                       <img src="<?php // echo base_url(); ?>public/images/books/3.jpg" alt="">
                                    </div>
                                    <div class="dz-content">
                                       <h5 class="subtitle">Terrible Madness</h5>
                                       <ul class="dz-tags">
                                          <li>THRILLE,</li>
                                          <li>DRAMA,</li>
                                          <li>HORROR</li>
                                       </ul>
                                       <a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Select</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-6">
                                 <div class="dz-shop-card style-5">
                                    <div class="dz-media">
                                       <img src="<?php // echo base_url(); ?>public/images/books/5.jpg" alt="">
                                    </div>
                                    <div class="dz-content">
                                       <h5 class="subtitle">Terrible Madness</h5>
                                       <ul class="dz-tags">
                                          <li>THRILLE,</li>
                                          <li>DRAMA,</li>
                                          <li>HORROR</li>
                                       </ul>
                                       <a href="shop-cart.html" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Select</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>-->
                  </div>
               </div>
            </section>
            <!-- Feature Box -->
      