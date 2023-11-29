<?php

function my_hook()
{
    // Load necessary libraries
    get_instance()->load->library('session');

    // Check if the session is set
    if (!get_instance()->session->userdata('is_logged_in')) {
        // Redirect the user to the login page
        redirect('login');
    }
}

?>



