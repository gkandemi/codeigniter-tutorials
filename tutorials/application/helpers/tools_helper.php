<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 15.11.2016
 * Time: 22:52
 */

    function topla($sayi1, $sayi2){
        return $sayi1 + $sayi2;
    }

    //2016-11-15 => 15 Kasım 2016
    function get_full_date($date){

        $aylar = array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül" ,"Ekim", "Kasım", "Aralık");
        $tmp_date = explode("-", $date);
        $newDate = $tmp_date[2] . " " .  $aylar[$tmp_date[1] - 1] . " " . $tmp_date[0];
        echo $newDate;

    }