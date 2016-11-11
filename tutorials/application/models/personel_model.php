<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 11.11.2016
 * Time: 18:15
 */

class Personel_model extends CI_Model {

//
//    public function get(){
//        return $this->db->get("personel")->result();
//    }
//
//    public function delete($id){
//        return $this->db->where("id",$id)->delete("personel");
//    }


    public function get($where = array()){
        
        $result = $this->db
            ->where($where)
            ->get("personel")
            ->row();

        return $result;
    }

    public function get_all($where = array()){

        $result = $this->db
            ->where($where)
            ->get("personel")
            ->result();

        return $result;
    }

    public function delete($where = array()){

        $result = $this->db
            ->where($where)
            ->delete("personel");
        return $result;
    }

    public function insert($data = array()){

        $result = $this->db
            ->insert("personel", $data);
        return $result;

    }

    public  function update($data = array(), $where = array()){

        $result = $this->db
            ->where($where)
            ->update("personel", $data);
        return $result;
    }

    public function query($query){

        $result = $this->db
            ->query($query)
            ->result();
        return $result;
    }

    public function get_last_id(){
        return $this->db->insert_id();
    }







}