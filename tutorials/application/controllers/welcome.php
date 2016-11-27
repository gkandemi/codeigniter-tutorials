<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	    // Burası View Yuklemek için kullanilan bölümdür...

        $sayi_1 = 5;
        $sayi_2 = 20;
        $toplam = $sayi_1 + $sayi_2;

        $viewData = array();
/*
         $viewData["sayi1"]  = $sayi_1;
        $viewData["sayi2"]  = $sayi_2;
        $viewData["toplam"] = $toplam;
*/
        $viewData = array(
            "sayi1"     => $sayi_1,
            "sayi2"     => $sayi_2,
            "toplam"    => $toplam
        );

        // View tarafinda viewData isimli degisken bize $toplam isimli bir degisken olarak donusuyor..

        $personel_listesi = array(
            array(
                "isim"  => "Gokhan Kandemir",
                "email" => "gokhan@gkandemir.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
            array(
                "isim"  => "kablosuzkedi",
                "email" => "admin@kablosuzkedi.com"
            ),
        );

        $viewData["personel_listesi"] = $personel_listesi;

	    $this->load->view("personel_listesi", $viewData);
	}

	//sitename/controllerAdi/metotAdi
    // http://localhost/codeigniter/tutorials/controllerAdi/metotAdi/parametre/parametre/parametre

	public function getMessage(){
        echo "Burasi diger metottur!!!";
    }

    public function deneme(){
        echo "kablosuzkedi";
    }

    public function helper_test(){

        get_full_date(date("Y-m-d"));

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */