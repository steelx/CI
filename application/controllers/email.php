<?php
/*
 * How to send an email with CI PHP
 * and also send an attachment in mail
 */

class Email extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }
    
    function index() {
//        $config = Array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'ssl://smtp.googlemail.com',
//            'smtp_port' => 465,
//            'smtp_user' => 'your@gmail.com',
//            'smtp_pass' => 'gmailpassword'
//        );
        //Above code moved to config/email.php for better re-usability
        
        //basic email structure
        $this->load->library('email', $config);        
        $this->email->set_newline("\r\n");
        
        $this->email->from('your@gmail.com', 'Ajinkya Borade');
        $this->email->to('your@gmail.com');
        $this->email->subject('GMail email test');
        $this->email->message('This is test CI PHP email. WOrks great!');
        
        //how to add attachment in mail
        $path = $this->config->item('server_root');
        $file = $path . '/attachments/FILENAME.txt';
        $this->email->attach($file);    
        
        if($this->email->send()){
            echo 'Email was sent sucessfuly.';
        } else {
            echo 'Error sending email';            
            show_error($this->email->print_debugger());
        }
    }
}
?>