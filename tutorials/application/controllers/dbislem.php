<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 28.10.2016
 * Time: 20:37
 */

class Dbislem extends CI_Controller {

    public function index(){

        // Tüm sonuclari getirmek icin kullanilacak olan metot..
        $rows = $this->db->get("personel")->result();
        // Tek sonuc getirmek icin kullanilacak olan metot..
        //$rows = $this->db->get("personel")->row();

        $viewData = array("rows" => $rows);

        $this->load->view("dbislem", $viewData);

    }
    public function where(){

        /*
        $rows = $this
            ->db
            ->where("id >", 1)
            ->where("id <", 4)
            ->where("detail !=", "")
            ->get("personel")
            ->result();
        */

        $where = array(
            "id >"      => 1,
            "detail !=" => ""
        );

        /*
        $rows = $this
            ->db
            ->or_where($where)
            ->get("personel")
            ->result();

        $rows = $this
            ->db
            ->where_in("title", array("kablosuzkedi","felakettin"))
            ->get("personel")
            ->result();

        $rows = $this
            ->db
            ->where("id", 1)
            ->or_where_in("title", array("kablosuzkedi","felakettin"))
            ->get("personel")
            ->result();

        $rows = $this
            ->db
            ->where_not_in("title", array("kablosuzkedi","felakettin"))
            ->get("personel")
            ->result();
        */

        $rows = $this
            ->db
            ->or_where_not_in("title", array("kablosuzkedi","felakettin"))
            ->get("personel")
            ->result();

        echo $this->db->last_query();

        $viewData = array("rows" => $rows);

        $this->load->view("dbislem", $viewData);

    }
    public function like(){

        $like = array(
            "title"   => "ettin",
            "detail"  => "ok"
        );

        /*
        $rows = $this->db->like("title", "ettin")->get("personel")->result();
        $rows = $this->db->like($like)->get("personel")->result();
        $rows = $this->db->or_like($like)->get("personel")->result();
        $rows = $this->db->not_like($like)->get("personel")->result();
        */
        $rows = $this->db->or_not_like($like)->get("personel")->result();

        echo $this->db->last_query();
        echo "<br>";
        print_r($rows);

    }
    public function orderby(){

        /*
        $rows = $this->db->order_by("title", "asc")->get("personel")->result();
        $rows = $this->db->order_by("id", "desc")->get("personel")->result();
        */

        $rows = $this
            ->db
            ->order_by("title", "asc")
            ->order_by("id", "random")
            ->get("personel")
            ->result();

        print_r($rows);

    }
    public function limit(){

        $rows = $this->db->limit(1)->get("personel")->result();

        echo $this->db->last_query();
        echo "<br>";
        print_r($rows);

    }
    public function query(){

        //select * from  personel WHERE id > 1 AND title LIKE "%etti%" ORDER BY id DESC LIMIT 1

        $rows = $this
            ->db
            ->where("id >", 1)
            ->like("title", "etti")
            ->order_by("id", "desc")
            ->limit(1)
            ->get("personel")
            ->result();

        echo $this->db->last_query();
        echo "<br>";
        print_r($rows);



    }
    public function custom_query(){

        $rows = $this->db->query("SELECT * FROM (`personel`) WHERE `id` > 1 AND `title` LIKE '%etti%' ORDER BY `id` desc LIMIT 1")->result();

        echo $this->db->last_query();
        echo "<br>";
        print_r($rows);

    }
    public function insertPage(){
        $this->load->view("insert");
    }
    public function insert(){

        $title  = $this->input->post("title");
        $detail = $this->input->post("detail");

        $data = array(
            "title"     => $title,
            "detail"    => $detail
        );

        $insert = $this->db->insert("personel", $data);

        echo $insert;

    }
    public function updatePage(){
        $this->load->view("update");
    }
    public function update(){

        $id     = $this->input->post("id");
        $title  = $this->input->post("title");
        $detail = $this->input->post("detail");

        $data = array(
            "title"     => $title,
            "detail"    => $detail
        );

        $update = $this
            ->db
            ->where("id", $id)
            ->update("personel", $data);
        echo $update;
    }
    public function delete($id = -1){

        /*
        $delete = $this
            ->db
            ->where("id",3)
            ->delete("personel");
        */

        $delete = $this
            ->db
            ->where("id",$id)
            ->delete("personel");

        echo $delete;
    }

    public function model(){

        $this->load->model("personel_model");

        $results = $this->personel_model->get();

        print_r($results);

        $delete = $this->personel_model->delete(6);

        echo $delete;

    }
    public function model_usage(){

        $this->load->model("personel_model");

        // Veri Cekme
//        $result = $this->personel_model->get(array("id >" => 1));
//        $result = $this->personel_model->get_all(array("id <=" => 1));
//        print_r($result);

        // Veri Silme
//        $delete = $this->personel_model->delete(array("id" => 16));
//        echo $delete;

        // Veri Ekleme

        $data = array(
            "title"     => "Tayfun Er",
            "detail"    => "Cok Delikanli bir adam!!"
        );

        $insert = $this->personel_model->insert($data);
//        echo $insert;

        // Veri Guncelleme

//        $data = array(
//            "title"     => "Felakettin",
//        );
//
//        $where = array(
//            "id"    => 18
//        );
//
//        $update = $this->personel_model->update($data,$where);
//        echo $update;

        // Custom Query
//        $query = $this->personel_model->query("SELECT * from personel LIMIT 1");
//        print_r($query);

        // Last insert id
        echo $this->personel_model->get_last_id();

    }

}