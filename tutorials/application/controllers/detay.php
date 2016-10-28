<?php

class Detay extends CI_Controller {


    public function index(){
        echo "Detay Controllerinin index metotu";
    }

    public function urun(){
        echo "Detay Controllerinin urun metotu";
    }

    public function getParams($param1, $param2, $param3){

        echo $param1 + $param2;
        echo $param3;
    }

    public function getParameters(){

        $sayi1 = $this->uri->segment(3);
        $sayi2 = $this->uri->segment(4);
        $islem = $this->uri->segment(5);

        echo $sayi1 . "<br>";
        echo $sayi2 . "<br>";
        echo $islem . "<br>";

    }

    public function islem(){

        // iletisim icin mail adresi
        // gokhan@gkandemir.com

    }

}

