
         <div class="page-content bg-white">
            <!--Swiper Banner Start -->
            <div class="main-slider style-1">
               <div class="main-swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide bg-blue" style="background-image:url(<?php echo base_url('public/images/waveelement.png'); ?>);">
                        <div class="container">
                           <div class="banner-content">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="swiper-content">
                                       <div class="content-info">
                                          <h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT </h6>
                                          <h1 class="title mb-0" data-swiper-parallax="-20">Check your favoutite Book from here</h1>
                                          <ul class="dz-tags" data-swiper-parallax="-30">
                                             <li><a >Read Novels, Journals, and Non-fictions you like</a></li>
                                          </ul>
                                          <div class="content-btn" data-swiper-parallax="-60">
                                             <a class="btn btn-primary btnhover" href="<?php echo base_url();?>book">See Details</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="banner-media" data-swiper-parallax="-100">
                                       <img src="<?php echo base_url(); ?>public/images/slide1.png" alt="banner-media">
                                    </div>
                                    <img class="pattern" src="<?php echo base_url(); ?>public/images/Group.png" data-swiper-parallax="-100" alt="dots">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide bg-blue" style="background-image: url(images/waveelement.png);">
                        <div class="container">
                           <div class="banner-content">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="swiper-content">
                                       <div class="content-info">
                                          <h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT </h6>
                                          <h1 class="title mb-0" data-swiper-parallax="-20">Check your favoutite Book from here</h1>
                                          <ul class="dz-tags" data-swiper-parallax="-30">
                                             <li><a >Read Novels, Journals, and Non-fictions you like</a></li>
                                          </ul>
                                          <div class="content-btn" data-swiper-parallax="-60">
                                             <a class="btn btn-primary btnhover" href="<?php echo base_url();?>book">See Details</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="banner-media" data-swiper-parallax="-100">
                                       <img src="<?php echo base_url(); ?>public/images/slide2.png" alt="banner-media">
                                    </div>
                                    <img class="pattern" src="<?php echo base_url(); ?>public/images/Group.png" data-swiper-parallax="-100" alt="dots">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper main-swiper-thumb">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide"></div>
                  </div>
               </div>
            </div>
            <section class="content-inner-1 bg-grey ">
               <div class="container">
                  <div class="row about-style1 align-items-center">
                     <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row sp10 about-thumb">
                           <div class="col-sm-6 aos-item ">
                              <div class="split-box">
                                 <div>
                                    <img class="m-b30" src="<?php echo base_url(); ?>public/images/about1.jpg" alt="/">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="split-box ">
                                 <div>
                                    <img class="m-b20 aos-item" src="<?php echo base_url(); ?>public/images/about2.jpg" alt="/">
                                 </div>
                              </div>
                              <div class="exp-bx aos-item">
                                 <div class="exp-head">
                                    <div class="counter-num">
                                       <h2><span class="counter">02</span><small>+</small></h2>
                                    </div>
                                    <h6 class="title">Years of Experience</h6>
                                 </div>
                                 <div class="exp-info">
                                    <ul class="list-check primary">
                                       <li>Comics & Graphics</li>
                                       <li>Biography</li>
                                       <li>Literary Collections</li>
                                       <li>Children Fiction</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-content">
                           <div class="section-head style-1">
                              <h2 class="title">Akshara Library Is Best Choice For Learners</h2>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration which don’t look even slightly believable. It Is A Long Established Fact That A Reader Will Be Distracted</p>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration which don’t look even slightly believable. It Is A Long Established Fact That A Reader Will Be Distracted</p>
                           </div>
                           <a href="<?php echo base_url();?>about_us" class="btn btn-primary shadow-primary btnhover">About Us</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content-inner-2 ">
               <div class="container">
                  <div class="section-head book-align">
                     <h2 class="title mb-0">Special Category</h2>
                     <div class="pagination-align style-1">
                        <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                     </div>
                  </div>
                  <div class="swiper-container book-swiper">
                     <div class="swiper-wrapper">
                     <?php foreach ($special_category as $row) { ?>
                        <div class="swiper-slide">
                           <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="dz-media">
                                 <a href="<?php echo base_url('book/detail/' . $row['id']); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $row['image1']; ?>" alt="/"></a>
                              </div>
                              <div class="dz-info">
                                 <h4 class="dz-title"><a href="books-detail.html"><?php echo $row['book_name']; ?></a></h4>
                                 <p><?php echo $row['description']; ?></p>
                                 <div class="bookcard-footer">
                                    <a href="<?php echo base_url('book/detail/' . $row['id']); ?>" class="btn btn-primary btnhover btnhover2">
                                    <i class="flaticon-open-book m-r10"></i> Explore now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </section>
            <!--Recommend Section Start-->
            <section class="content-inner-1 bg-grey reccomend">
               <div class="container">
                  <div class="section-head text-center">
                     <h2 class="title">New Releases</h2>
                  </div>
                  <!-- Swiper -->
                  <div class="swiper-container swiper-two">
                     <div class="swiper-wrapper">
                        
                     <?php foreach ($new_release as $row) { ?>
                        <div class="swiper-slide">
                           <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="dz-media">
                                 <a href="<?php echo base_url('book/detail/' . $row['id']); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $row['image1']; ?>" alt="book"></a>									
                              </div>
                              <div class="dz-content">
                                 <h4 class="title"><?php echo $row['book_name']; ?></h4>
                                 <a href="<?php echo base_url('book/detail/' . $row['id']); ?>" class="btn btn-secondary btnhover btnhover2">
                                 <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>">
                                   <i class="flaticon-open-book m-r10"></i> More details
                                 </a>
                                  <span><i class="AvaiBook fa fa-check" aria-hidden="true"></i></span>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content-inner-1">
               <div class="container">
                  <div class="section-head book-align">
                     <h2 class="title mb-0">Featured Books</h2>
                     <div class="pagination-align style-1">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-two"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                     </div>
                  </div>
                  <div class="swiper-container books-wrapper-3 swiper-four">
                     <div class="swiper-wrapper">

                     <?php foreach ($featured as $row) { ?>
                        <div class="swiper-slide">
                           <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="dz-media">
                                 <a href="<?php echo base_url('book/detail/' . $row['id']); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $row['image1']; ?>" alt="book"></a>									
                              </div>
                              <div class="dz-content">
                                 <h4 class="title"><?php echo $row['book_name']; ?></h4>
                                 <a href="<?php echo base_url('book/detail/' . $row['id']); ?>" class="btn btn-secondary btnhover btnhover2">
                                 <i class="flaticon-open-book m-r10"></i> More details
                                 </a>
                              </div>
                           </div>
                        </div>
                        
                       <?php } ?>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content-inner-1 bg-grey reccomend">
               <div class="container">
                  <div class="section-head text-center">
                     <div class="circle style-1"></div>
                     <h2 class="title">Most Viewed</h2>
                  </div>
               </div>
               <div class="container">
                  <div class="swiper-container books-wrapper-2 swiper-three">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="books-card style-2">
                              <div class="dz-media">
                                 <img src="<?php echo base_url(); ?>public/images/books/2.jpg" alt="book">									
                              </div>
                              <div class="dz-content">
                                 <h6 class="sub-title">BEST SELLER</h6>
                                 <h2 class="title Mttitle">Sampoorna Krithikal</h2>
                                 <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Business & Strategy</li>
                                 </ul>
                                 <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                                 <div class="bookcard-footer">
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="books-card style-2">
                              <div class="dz-media">
                                 <img src="<?php echo base_url(); ?>public/images/books/3.jpg" alt="book">									
                              </div>
                              <div class="dz-content">
                                 <h6 class="sub-title">BEST SELLER</h6>
                                 <h2 class="title Mttitle">Education & Study Aid</h2>
                                 <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Business & Strategy</li>
                                 </ul>
                                 <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                                 <div class="bookcard-footer">
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="books-card style-2">
                              <div class="dz-media">
                                 <img src="<?php echo base_url(); ?>public/images/books/4.jpg" alt="book">									
                              </div>
                              <div class="dz-content">
                                 <h6 class="sub-title">BEST SELLER</h6>
                                 <h2 class="title Mttitle">Computer & Internet</h2>
                                 <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Business & Strategy</li>
                                 </ul>
                                 <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                                 <div class="bookcard-footer">
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="books-card style-2">
                              <div class="dz-media">
                                 <img src="<?php echo base_url(); ?>public/images/books/5.jpg" alt="book">									
                              </div>
                              <div class="dz-content">
                                 <h6 class="sub-title">BEST SELLER</h6>
                                 <h2 class="title Mttitle">A Heavy LIft</h2>
                                 <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Business & Strategy</li>
                                 </ul>
                                 <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                                 <div class="bookcard-footer">
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pagination-align style-2">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-three"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content-inner-2 testimonial-wrapper">
               <div class="container">
                  <div class="testimonial">
                     <div class="section-head book-align">
                        <div>
                           <h2 class="title mb-0">Testimonials</h2>
                           <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="pagination-align style-1">
                           <div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                           <div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-container testimonial-swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="testimonial-info">
                              <div class="testimonial-text">
                                 <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                              </div>
                              <div class="testimonial-detail">
                                 <div class="testimonial-pic">
                                    <img src="images/testimonial1.jpg" alt="">
                                 </div>
                                 <div class="info-right">
                                    <h6 class="testimonial-name">Jason Huang</h6>
                                    <span class="testimonial-position">Book Lovers</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="testimonial-info">
                              <div class="testimonial-text">
                                 <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                              </div>
                              <div class="testimonial-detail">
                                 <div class="testimonial-pic">
                                    <img src="<?php echo base_url(); ?>public/images/testimonial1.jpg" alt="">
                                 </div>
                                 <div class="info-right">
                                    <h6 class="testimonial-name">Jason Huang</h6>
                                    <span class="testimonial-position">Book Lovers</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="testimonial-info">
                              <div class="testimonial-text">
                                 <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                              </div>
                              <div class="testimonial-detail">
                                 <div class="testimonial-pic">
                                    <img src="<?php echo base_url(); ?>public/images/testimonial1.jpg" alt="">
                                 </div>
                                 <div class="info-right">
                                    <h6 class="testimonial-name">Jason Huang</h6>
                                    <span class="testimonial-position">Book Lovers</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="testimonial-info">
                              <div class="testimonial-text">
                                 <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                              </div>
                              <div class="testimonial-detail">
                                 <div class="testimonial-pic">
                                    <img src="<?php echo base_url(); ?>public/images/testimonial1.jpg" alt="">
                                 </div>
                                 <div class="info-right">
                                    <h6 class="testimonial-name">Jason Huang</h6>
                                    <span class="testimonial-position">Book Lovers</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content-inner  bgClnt">
               <div class="container">
                  <div class="row sp15">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                           <div class="icon-bx-lg">
                              <i class="fa-solid fa-users icon-cell"></i>
                           </div>
                           <div class="icon-content">
                              <h2 class="dz-title counter m-b0">125,663</h2>
                              <p class="font-20">Happy Customers</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                           <div class="icon-bx-lg"> 
                              <i class="fa-solid fa-book icon-cell"></i>
                           </div>
                           <div class="icon-content">
                              <h2 class="dz-title counter m-b0">50,672</h2>
                              <p class="font-20">Book Collections</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                           <div class="icon-bx-lg"> 
                              <i class="fa-solid fa-store icon-cell"></i>
                           </div>
                           <div class="icon-content">
                              <h2 class="dz-title counter m-b0">1,562</h2>
                              <p class="font-20">Our Stores</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                           <div class="icon-bx-lg"> 
                              <i class="fa-solid fa-leaf icon-cell"></i>
                           </div>
                           <div class="icon-content">
                              <h2 class="dz-title counter m-b0">457</h2>
                              <p class="font-20">Famous Writers</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
        