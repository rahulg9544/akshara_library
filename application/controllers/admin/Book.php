<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(0);

class Book extends CI_Controller
{
    // public function index()
    // {

    //     $isLoggedIn = $this->session->userdata('is_logged_in');

    //     if ($isLoggedIn === NULL) {

    //         redirect('signup');
    //     }

    //     $this->load->view('admin/includes/header');
    //     $this->load->view('admin/category_list');
    //     $this->load->view('admin/includes/footer');
    // }

    public function __construct()
	{
	    parent::__construct();		

        if (!$this->session->userdata('is_logged_in')) {

            header('Location: ' . base_url() . 'login');
           // redirect('login');
        }

		$this->load->library('form_validation');
		// $this->load->model('registration_model');
		$this->load->library('pagination'); 
		$this->load->library('upload');
        $this->load->model('admin/book_model');
	}

    public function index()
    {
         $book = array();
		 if(($this->session->userdata('is_logged_in')->role) == 0)
         {
            
			   $book = $this->book_model->getAllUsersBooks();
		 }
		 else
		 {
            	// Get all of the users
				$book = $this->book_model->getAllBooks();
		 }
	

        //   // Pass the users data to the view

        $this->load->view('admin/includes/header');
        $this->load->view('admin/book_list', ['book' => $book]);
        $this->load->view('admin/includes/footer');
    }

    public function save()
	{    
        if($this->uri->segment(4)){

            $data['pageType'] = 'Update';
    //        $editId = $this->uri->segment(3);

    $editId = $this->input->post('edit_id');

            $data['editInfo'] =  $this->book_model->getBookInfoById($editId);
        }else{

            $data['pageType'] = 'Add';
        }

        $categories = $this->book_model->getAllCategories();
		
		if($this->input->post()){  


            // echo "test"; die;


			$config = array(
				'file_name'=>time(),
				// 'overwrite'=>TRUE,
				// 'max_width'=>'1028',
				// 'max_height'=>'800',
				'max_size'=>'24000000',
				'allowed_types' => "gif|jpg|png|jpeg",
				'upload_path'=>'./uploads/' 
			); 
			$this->upload->initialize($config); 
			if($this->upload->do_upload('image1')){
				 $imageData = $this->upload->data();
				 $data['editInfo']->image1;
				$fileName = $imageData['file_name'];
				$record['image1'] = $fileName; 

              //  $image1 = $this->upload->data('file_name');

				@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$data['editInfo']->image1);
				
			}


			if($this->upload->do_upload('image2')){
				 $imageData = $this->upload->data();
				 $data['editInfo']->image2;
				$fileName = $imageData['file_name'];
				$record['image2'] = $fileName; 

                // $image2 = $this->upload->data('file_name');



				@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$data['editInfo']->image2);
				
			}

           
            
            
            /* else{
				echo $this->upload->display_errors();
			}  */ 
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('cat_id','Category','trim|required');
			$this->form_validation->set_rules('book_name','Book Name','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');

           // echo "new tests"; die;
        //    echo $data['pageType'];

        //    die;
			
			if($this->form_validation->run() !== FALSE){

                $user_id = $this->session->userdata('is_logged_in') -> id;
           
                $record['cat_id'] = $this->input->post('cat_id');
				$record['book_name'] = $this->input->post('book_name');
				$record['description'] = $this->input->post('description');
                $record['availability'] = $this->input->post('availability') ?? '1';
                $record['user_id'] = $user_id ?? '0';
				$record['new_release'] = $this->input->post('new_release') ?? '0';
                $record['featured'] = $this->input->post('featured') ?? '0';

				if($data['pageType'] == 'Update'){

                    $response =  $this->book_model->updateRecord($record,$editId);
				
				}else{

                    $response  = $this->book_model->addRecord($record);

				}
				if($response){
					$messge = array('message' => $data['pageType'].' successfully','class' => 'alert alert-success');
					$this->session->set_flashdata('myMsj', $messge);
                  //  redirect('admin/book');

                    header('Location: ' . base_url() . 'admin/book');
				}else{
					$messge = array('message' => 'Something went wrong','class' => 'alert alert-danger');
					$this->session->set_flashdata('myMsj',$messge );
                  //  redirect('admin/book');

                  header('Location: ' . base_url() . 'admin/book');
				}


				
			} 

            

            // Pass the users data to the view
        
          
            $this->load->view('admin/includes/header');
            $this->load->view('admin/book', ['categories' => $categories]);
            $this->load->view('admin/includes/footer');

		 
		}
        // echo "testt";
        // die;
		//$title = $data['pageType'].' Registration';
	

	}

    public function save_old()
    {
        // $category = $this->input->post('category');

        // $this->load->model('admin/category_model');
        // $cat_id = $this->category_model->category_insert($category);

        // Check if the form has been submitted
        if ($this->input->post('submit')) {
            // Upload the image
            $image_config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'png|jpg|jpeg|gif',
            ];

            $this->load->library('upload', $image_config);

            if (!$this->upload->do_upload('image1')) {
                // Upload failed
                $error = $this->upload->display_errors();
                echo $error;
                die();
            }

            if (!$this->upload->do_upload('image2')) {
                // Upload failed
                $error = $this->upload->display_errors();
                echo $error;
                die();
            }


            // Insert the image and checkbox data to the database

            $data = [
                'cat_id' => $this->input->post('cat_id'),
                'book_name' => $this->input->post('book_name'),
                'image1' => $this->upload->data('file_name'),
                'image2' => $this->upload->data('file_name'),
                'description' =>  $this->input->post('description'),
                'new_release' =>  $this->input->post('new_release'),
                'featured' => $this->input->post('featured')
            ];

            // print_r($data);
            // exit;


            
            $this->book_model->book_insert($data);

            // Redirect to the success page
                    $redirectUrl = base_url() . 'admin/book';

            // Echo the window alert
            echo '<script type="text/javascript">
        alert("Insert sucess");
        window.location.href = "' . $redirectUrl . '";
    </script>';
        }

        // Load the view
        $this->load->view('book');


    }

    public function add()
    {

        $categories = $this->book_model->getAllCategories();

        // Pass the users data to the view
    
      
        $this->load->view('admin/includes/header');
        $this->load->view('admin/book', ['categories' => $categories]);
        $this->load->view('admin/includes/footer');
    }




    public function edit($id)
    {
        // Get the user by ID
        $this->load->model('admin/book_model');

        $book_id = $this->book_model->getBookById($id);
		
	//	print_r($book_id);
		
		$bookId=$book_id->id;
		$bookUserId=$book_id->user_id;
		// echo $bookUserId;
		$bookUserInfo=$this->book_model->getBookUserInfo($bookUserId);
		$bookUserInfo=$bookUserInfo[0];

        $categories = $this->book_model->getAllCategories();

        // Pass the user data to the view
        $this->load->view('admin/includes/header');
        $this->load->view('admin/book_edit', ['book' => $book_id, 'categories' => $categories, 'bookUserInfo' => $bookUserInfo]);
        $this->load->view('admin/includes/footer');
    }

    public function update()
    {
        // Get the user data from the request

        
        // Get the image and checkbox details by ID
        $id = $this->input->get('id');
   //     $image_details = $this->book_model->getImageAndCheckboxById($id);


 // Check if the form has been submitted
 if ($this->input->post('submit')) {
 


$image_config = [
    'upload_path' => './uploads/',
    'allowed_types' => 'png|jpg|jpeg|gif',
];

$this->load->library('upload', $image_config);


    if(!empty($_FILES['image']['image1']))
    {

if ($this->upload->do_upload('image1')) {
    // Upload failed
    $data = [
        'image1' => $this->upload->data('file_name')
    ];
}
    }

    if(!empty($_FILES['image']['image2']))
    {

if ($this->upload->do_upload('image2')) {
    // Upload failed
    $data = [
        'image2' => $this->upload->data('file_name')
    ];
}
    }

    // Insert the image and checkbox data to the database

    $data = [
        'cat_id' => $this->input->post('cat_id'),
        'book_name' => $this->input->post('book_name'),
        'description' =>  $this->input->post('description'),
        'new_release' =>  $this->input->post('new_release'),
        'featured' => $this->input->post('featured')
    ];

    // print_r($data);
    // exit;


    
    $this->book_model->updateBook($id,$data);

    // Redirect to the success page
            $redirectUrl = base_url() . 'admin/book';

    // Echo the window alert
    echo '<script type="text/javascript">
alert("Update sucess");
window.location.href = "' . $redirectUrl . '";
</script>';
}

// Load the view
$this->load->view('book');
    }

    public function delete($id)
    {
        // Delete the user from the database

        $image_name1 = $this->book_model->getImageFirstNameById($id);

        $image_name2 = $this->book_model->getImageSecondNameById($id);

        // Delete the image file
        @unlink('./uploads/' . $image_name1);

        @unlink('./uploads/' . $image_name2);

        $this->book_model->deleteBook($id);

        $messge = array('message' => 'Book Deleted successfully','class' => 'alert alert-success');
        $this->session->set_flashdata('myMsj', $messge);

      //  redirect('admin/book');

        header('Location: ' . base_url() . 'admin/book');


    }
}
