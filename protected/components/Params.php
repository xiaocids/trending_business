<?php

class Params
{

    public static function aktifNonAktif($data = null)
    {

        $status = array(true => 'Aktif', false => 'Tidak Aktif', );
        return $status[$data];

    }
    
    public static function listBulan()
    {
        return array(
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September', 
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        );
    }
    
    public static function listTahun()
    {
        $thisYear = date('Y');
        $endYear = $thisYear + 5;
        $i = $thisYear;
        
        $listTahun = array();
        
        while ($i < $endYear) {
            $listTahun[$i] = $i;
            $i++;
        }
        return $listTahun;
    }
    
    public static function getNamaBulan($id)
    {
        
        switch ($id) {
           case 1:
                return 'Januari';
                break;
                  
           case 2:
                return 'Februari';
                break;
                
           case 3:
                return 'Maret';
                break;
           case 4:
                return 'April';
                break;
           case 5:
                return 'Mei';
                break;
           case 6:
                return 'Juni';
                break;
           case 7:
                return 'Juli';
                break;
           case 8:
                return 'Agustus';
                break;
           case 9:
                return 'September';
                break;
           case 10:
                return 'Oktober';
                break;
           case 11:
                return 'November';
                break;
           case 12:
                return 'Desember';
                break;
        }
    }
}
