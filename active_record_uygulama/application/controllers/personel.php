<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 28.10.2016
 * Time: 22:35
 */
class Personel extends CI_Controller {

    public function index(){

        $rows = $this->db->get("personel")->result();

        /*
            $viewData = array(
                "rows" => $rows
            );
        */

        $viewData = new stdClass();
        $viewData->rows = $rows;

        $this->load->view("listeleme", $viewData);

    }

    public function updatePage(){

        $id = $this->uri->segment(3);

        $row = $this
            ->db
            ->where("id", $id)
            ->get("personel")->row();

        $viewData = new stdClass();
        $viewData->row = $row;

        $this->load->view("duzenle", $viewData);

    }

    public function update($id){

        $title  = $this->input->post("title");
        $detail = $this->input->post("detail");

        $data = array(
            "title"     => $title,
            "detail"    => $detail
        );

        $update = $this
            ->db
            ->where("id", $id)
            ->update("personel",$data);

        if($update){
            redirect(base_url("personel"));
        }else{
            echo "Düzenleme işlemi sırasında bir problem oluştu..";
        }

    }

    public function insertPage(){

        $this->load->view("ekle");
    }

    public function insert(){

        $title  = $this->input->post("title");
        $detail = $this->input->post("detail");

        $data = array(
            "title"  => $title,
            "detail" => $detail
        );

        $insert = $this->db->insert("personel", $data);

        if($insert){
            redirect(base_url("personel"));
        }else{
            echo "Kayıt Başarılı Değildir!!";
        }

    }

    public function delete($id){

        $delete = $this->db->where("id", $id)->delete("personel");

        if($delete){
            redirect(base_url("personel"));
        }else{
            echo "Silme işlemi sırasında bir problem oluştu!!!!";
        }
    }

}