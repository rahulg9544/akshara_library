<!-- Content -->
<div class="page-content bg-white">
   <!-- inner page banner -->
   <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
      <div class="container">
         <div class="dz-bnr-inr-entry">
            <h1>Users</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>"> Home</a></li>
                  <li class="breadcrumb-item">Users List</li>
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
                     <div class="table-container">

                        <table>
                           <tbody>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Address</th>
                              </tr>
                              <?php 
                              $i=1;
                              foreach ($user as $user) : ?>
                                 <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $user->username; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td><?php echo $user->phone; ?></td>
                                    <td><?php echo $user->address; ?></td>
                                 </tr>
                              <?php
                              endforeach; ?>

                           </tbody>
                        </table>
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Browse Jobs END -->
   </div>
</div>
<!-- Content END-->