<?php 
    
    function public_path($type="www")
    {
        return base_url()."public/";
    }

    function base_path($type="www")
    {
      return base_url();
    }

    function index_path($type="www")
    {
      return base_url()."index/";
    }

    function admin_path($type="www")
    {
      return base_url()."admin/";
    }

    function profile_img_path($type="www")
    {
        return base_url()."public/uploads/profile_images/";
    }
    function upload_path($type="www")
    {
        return base_url()."public/uploads/";
    }

    function translate($text)
    {
      $CI =& get_instance();
      $line=$CI->lang->line($text);
      if(empty($line))
      {
        $line=$text;
      }
      
      return $line;
    }

    function is_login()
    {

      $CI =& get_instance();
      $session = $CI->session->userdata('user_session');
      if (!isset($session['reg_id'])) {
        redirect(base_url());
      }
    }

    

?>