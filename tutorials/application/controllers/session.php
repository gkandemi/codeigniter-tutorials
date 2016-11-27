<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 15.11.2016
 * Time: 23:06
 */

class Session extends CI_Controller {


    public function index(){}

    public function set_session($name = ""){

        $list = $this->session->userdata("personel_list");
        array_push($list, $name);

        $this->session->set_userdata("personel_list", $list);

        $this->get_session();

    }

    public function get_session(){

        print_r($this->session->userdata("personel_list"));

    }

}