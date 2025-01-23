<?php
class Logout extends CI_Controller{
public function aksilogout()
{
    $this->session->sess_destroy();  // Menghancurkan session
    redirect('login'); 
}
}
