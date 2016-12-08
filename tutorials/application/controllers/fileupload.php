<?php

class Fileupload extends CI_Controller {

    public function index(){

        $this->load->view("upload_form");
    }

    public function upload(){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
//        $config['allowed_types'] = '*';
//        $config['max_size']	= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';

        $this->load->library("upload", $config);

        if(!$this->upload->do_upload("file")){

            echo $this->upload->display_errors();

        }else{

            echo "Basarili";
        }


    }

}