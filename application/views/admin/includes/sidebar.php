<div class="col-xl-3 col-lg-4 m-b30">
   <div class="sticky-top">
      <div class="shop-account">
         <div class="account-detail text-center">
            <div class="my-image">
               <a href="javascript:void(0);">
                  <img alt="" src="images/profile3.jpg">
               </a>
            </div>
            <div class="account-title">
               <div class="">
                  <h4 class="m-b5"><a href="javascript:void(0);"></a></h4>
                  <p class="m-b0"><a href="javascript:void(0);"></a></p>
               </div>
            </div>
         </div>
         <ul class="account-list">

         <?php 
		 $active="";

         if ($this->uri->segment(2) == "profile")
					{
					   $active="active";
					}
                  ?>
               
            <li>
               <a href="<?php echo base_url('admin/profile'); ?>" class="<?php echo $active;?>"><i class="far fa-user" aria-hidden="true"></i>
                  <span>Profile</span></a>
            </li>
         

         <?php 
		 $active="";
		// echo "uri = " . $this->uri->segment(2);
		 if (($this->session->userdata('is_logged_in')->role) == 1) 
		 {
					if ($this->uri->segment(2) == "category")
					{
					   $active="active";
					}
                  ?>
               
            <li>
               <a href="<?php echo base_url('admin/category'); ?>" class="<?php echo $active;?>"><i class="far fa-user" aria-hidden="true"></i>
                  <span>Categories</span></a>
            </li>

        <?php } 
		
			if ($this->uri->segment(2) == "book")
			{
			   $active="active";
			}
			else
			{
			 $active="";
			}
		?>
            <li>
               <a href="<?php echo base_url('admin/book'); ?>" class="<?php echo $active;?>"><i class="flaticon-shopping-cart-1"></i>
                  <span>Books</span></a>
            </li>

            <?php 
			if($this->uri->segment(2) == "user")
			{
			   $active="active";
			}
			else
			{
			 $active="";
			}
			if (($this->session->userdata('is_logged_in')->role) == 1) {

?>
            <li>
               <a href="<?php echo base_url('admin/user'); ?>" class="<?php echo $active;?>"><i class="flaticon-shopping-cart-1"></i>
                  <span>Users</span></a>
            </li>
            <?php } ?>
            <li>
               <a href="<?php echo base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                  <span>Log Out</span></a>
            </li>
         </ul>
      </div>
   </div>
</div>