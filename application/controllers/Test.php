<?php
defined('BASEPATH') OR exit('No direct script access allowed');   

class Test extends CI_Controller {
                                 
    public function __construct()
    {
        parent::__construct();   
        error_reporting(E_ALL);
		date_default_timezone_set('Asia/Jakarta');
        $this->db->query("SET time_zone = '+07:00'");
        foreach($_GET as $key => $value){    
            if($key ==  "adminbiz" ){
                redirect('adminbiz/login'); exit;
            }
         } 
        $this->core->https();
    }       

  
    public function email(){
        $this->load->library("email");
      
        
        $config['protocol'] = 'smtp';
        $config["smtp_host"] = "ssl://vito.websitewelcome.com";
        $config["smtp_port"] =  465;                                                         
        $config["smtp_user"] = "admin@mirrel.com";
        $config['smtp_pass'] = "admin123";
        
                                                                                               
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      
       
        $this->email->initialize($config);
        $subject = "Email just mail helpdesk";
        $message = "Email test. HELLO : ";

       $this->email->from("admin@mirrel.com", "admin");
        $this->email->to("felix.mirrel@gmail.com");
      //  $this->email->to("helpdesk@qmatic.id");
      //  $this->email->to("rojalih@qmatic.id");
        
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo "Your email was sent, thanks bro.";
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function renungan(){
        $q = "select * from cms_content where id_pages = 11125;";
        $query = $this->db->query($q);           
        foreach ($query->result() as $row)
        { 
            $date = explode(' ',$row->name);
            //Renungan Harian - Selasa, 17 Januari 2017
            if($date[5] == 'Januari'){  $month = '01'; }
            if($date[5] == 'Februari'){  $month = '02'; }
            if($date[5] == 'Maret'){  $month = '03'; }
            if($date[5] == 'April'){  $month = '04'; }
            if($date[5] == 'Mei'){  $month = '05'; }
            if($date[5] == 'Juni'){  $month = '06'; }
            if($date[5] == 'Juli'){  $month = '07'; }
            if($date[5] == 'Agustus'){  $month = '08'; }
            if($date[5] == 'September'){  $month = '09'; }
            if($date[5] == 'Oktober'){  $month = '10'; }
            if($date[5] == 'November'){  $month = '11'; }
            if($date[5] == 'Desember'){  $month = '12'; }



            $newDate = $date[6].'-'.$month.'-'.$date[4].' 00:00:00';

            echo $row->name.' | '.$newDate.' <br>';

            $data = array(
                "input_date" => date('Y-m-d H:i:s',strtotime($newDate) ),
            );

            $this->db->update('cms_content',$data,' id = '.$row->id);

        }

    }

    public function importc(){
        $i = 1;
        $q = "select * from cms_content  order by ID";
        $query = $this->db->query($q);           
        foreach ($query->result() as $row)
        { 
            $content = htmlspecialchars_decode($row->content);
         
            $data = array(
                "content"   => $content,
            ); 

            $this->db->update('cms_content', $data, 'id='.$row->id);   
            echo 'done<br>';
        }
    }
   
   
}   
