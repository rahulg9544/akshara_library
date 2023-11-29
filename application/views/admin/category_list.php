<!-- Content -->
<div class="page-content bg-white">
   <!-- inner page banner -->
   <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/inner-banner.jpg);">
      <div class="container">
         <div class="dz-bnr-inr-entry">
            <h1>Category</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>"> Home</a></li>
                  <li class="breadcrumb-item">Category List</li>
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

                     <a href="<?php echo base_url('admin/category/add'); ?>">Add Category</a>
                     <?php
					if ($this->session->flashdata('myMsj')) {
						$message =  $this->session->flashdata('myMsj');
					?>
 					<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?> </div>
 				<?php } ?>
                        <table>
                           <tbody>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Action</th>
                              </tr>
                              <?php 
                              $i=1;
                              foreach ($categories as $cat) : ?>
                                 <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $cat->title; ?></td>
                                    <td><a href="<?php echo base_url('admin/category/edit/' . $cat->id); ?>">Edit</a>
                                       | <a href="<?php echo base_url('admin/category/delete/' . $cat->id); ?>">Delete</a>
                                    </td>

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