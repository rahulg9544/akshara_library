<div class="page-content ">
   <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(<?php echo base_url('public/images/inner-banner.jpg'); ?>);">
      <div class="container">
         <div class="dz-bnr-inr-entry">
            <h1>All Category</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                  <li class="breadcrumb-item">All Category</li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
   <section class="content-inner-1 border-bottom bg-grey">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h4 class="title">Books</h4>
         </div>
         <div class="filter-area m-b30">
            <div class="category">
               <div class="filter-category">
                  <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     <i class="fas fa-list me-2"></i>
                     Categories
                  </a>
               </div>
               <!-- <div class="form-group">
                  <i class="fas fa-sort-amount-down me-2 text-secondary"></i>
                  <select class="default-select">
                     <option>Newest</option>
                     <option>1 Day</option>
                     <option>1 Week</option>
                     <option>3 Weeks</option>
                     <option>1 Month</option>
                     <option>3 Months</option>
                  </select>
               </div> -->
            </div>
         </div>
         <div class="acod-content collapse " id="collapseExample">
            <form id="checkboxForm">
               <div class="widget widget_services">
                  <?php foreach ($checkbox_data as $row) { ?>
                     <div class="form-check search-content">
                        <input class="form-check-input checkboxItem" type="checkbox" name="checkboxes[]" value="<?php echo $row['id']; ?>" id="checkbox">
                        <label class="form-check-label" for="productCheckBox2">
                           <?php echo $row['title']; ?>
                        </label>

                     </div>
                  <?php } ?>
               </div>
            </form>
         </div>


         <div class="row book-grid-row" id="bookContainer">

         <?php 
		  if($book_list)
		  {
							foreach($book_list as $book)
							{  ?>
			 
										 <div class="col-book style-1">
											<div class="dz-shop-card style-1">
											   <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
												  <div class="dz-media">
													 <img src="<?php echo base_url(); ?>uploads/<?php echo $book['image1']; ?>" alt="book">									
												  </div>
												  <div class="dz-content">
													 <h4 class="title"><?php echo $book['book_name']; ?></h4>
													 <a href="<?php echo base_url('book/detail/' . $book['id']); ?>" class="btn btn-secondary btnhover btnhover2">
													 <!-- <input type="hidden" name="id" value="<?php echo $book['id']; ?>"> -->
													 <i class="flaticon-open-book m-r10"></i> More details
													 </a>
												  </div>
											   </div>
											</div>
										 </div>
               
                     <?php } 
		  }	 
		  else
		  {
		  ?>
		  				Nothing To Show
		  
	  <?php
		  }		 
		?>

         </div>
         <!-- <div class="row page mt-0">
            <div class="col-md-6">
               <p class="page-text">Showing 12 from 50 data</p>
            </div>
            <div class="col-md-6">
               <nav aria-label="Blog Pagination">
                  <ul class="pagination style-1 p-t20">
                     <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
                     <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                     <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
                  </ul>
               </nav>
            </div>
         </div> -->
      </div>
   </section>
</div>

<script>
   $(document).ready(function() {

      $('#checkbox_sdfsdf').on('change', function() {


         var ids = [];

         $('#checkbox:checked').each(function() {
            ids.push($(this).val());
         });

         // console.log(ids);
         // return false;

         $.ajax({
            url: '<?php echo site_url('book/get_data_ajax'); ?>',
            type: 'post',
            data: {
               ids: ids
            },
            success: function(response) {
               if (response.status === 'success') {


                  // console.log(response.data);
                  // return false;


                  //    $('#data_container').html(response.data);

                  alert();

                  $('.col-book').empty();

                  // Append each book item to the target div
                  for (var i = 0; i < response.length; i++) {
                     var bookItem = response[i];
                     var bookHtml = '<div class="dz-shop-card style-1">' +
                        '<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">' +
                        '<div class="dz-media">' +
                        '<img src="' + bookItem.book_name + '" alt="book">' +
                        '</div>' +
                        '<div class="dz-content">' +
                        '<h4 class="title">' + bookItem.book_name + '</h4>' +
                        '<a href="' + bookItem.book_name + '" class="btn btn-secondary btnhover btnhover2">' +
                        '<i class="flaticon-open-book m-r10"></i> More details' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                     // Append the HTML to the target div
                     $('.book-append').append(bookHtml);

                     alert();

                  }
               } else {
                  alert('Something went wrong!');
               }
            }
         });
      });
   });
</script>

<script>
   $(document).ready(function() {
      $('.checkboxItem').change(function() {

         //    alert();

         var base_url = '<?php echo base_url(); ?>uploads/';

         var bas_url = '<?php echo base_url(); ?>book/detail/';
         
         var selectedItems = $('#checkboxForm input[name="checkboxes[]"]:checked').map(function() {
            return this.value;
         }).get();

         //   console.log(selectedItems);

         // return false;

         $.ajax({
            type: 'POST',
            url: '<?= base_url('book/get_data_ajax'); ?>',
            data: {
               selectedItems: selectedItems
            }, // Use an object with key 'selectedItems'
            dataType: 'json',
            success: function(response) {
               //  $('#resultContainer').html(response);

               console.log(response);

               // return false;


               $('#bookContainer').html('');

               if (selectedItems.length > 0) {

                  // Loop through the response and append new content
                  $.each(response, function(index, book) {
                     var newBookHtml = '<div class="col-book style-1">'+
                        '<div class="dz-shop-card style-1">' +
                        '<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">' +
                        '<div class="dz-media">' +
                        '<img src="' + base_url + book.image1 + '" alt="' + book.book_name + '">' +
                        '</div>' +
                        '<div class="dz-content">' +
                        '<h4 class="title">' + book.book_name + '</h4>' +
                        '<a href="'+bas_url+book.id+'" class="btn btn-secondary btnhover btnhover2">' +
                        '<i class="flaticon-open-book m-r10"></i> More details' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                     // Append the new book content to the div
                     $('#bookContainer').append(newBookHtml);
                  });

               } else {
                  // If no books are selected or all checkboxes are unchecked, reset the content
                  $('#bookContainer').html('<p>No books selected</p>');
               }

            },
            error: function(xhr, status, error) {
               console.error(xhr.responseText);
            }
         });
      });
   });
</script>