<?php
    class ALTString{
        function getRupiah($value = ''){
            return "Rp " . number_format($value,2,',','.');
        }
        
        function getAge($birth){
            $date1 = new DateTime(date('Y-m-d', strtotime($birth)));
            $date2 = new DateTime(date('Y-m-d'));
            $interval = $date1->diff($date2);
            return $interval->y;
        }

        function getPermalink($str = '')
        {
            setlocale(LC_ALL, 'en_US.UTF8');
            $permalink = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
            $permalink = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $permalink);
            $permalink = strtolower(trim($permalink, '-'));
            $permalink = preg_replace("/[\/_| -]+/", '-', $permalink);

            return $permalink;
        }
        function formatTanggalID($date,$format = "l, j F Y"){
            $date = date_create($date);
            $tmp = date_format($date, $format);
            $tmp = str_ireplace("Monday","Senin",$tmp);
            $tmp = str_ireplace("Tuesday","Selasa",$tmp);
            $tmp = str_ireplace("Wednesday","Rabu",$tmp);
            $tmp = str_ireplace("Thursday","Kamis",$tmp);
            $tmp = str_ireplace("Friday","Jum'at",$tmp);
            $tmp = str_ireplace("Saturday","Sabtu",$tmp);
            $tmp = str_ireplace("Sunday","Minggu",$tmp);
            
            $tmp = str_ireplace("January","Januari",$tmp);
            $tmp = str_ireplace("February","Februari",$tmp);
            $tmp = str_ireplace("March","Maret",$tmp);
            $tmp = str_ireplace("April","April",$tmp);
            $tmp = str_ireplace("May","Mei",$tmp);
            $tmp = str_ireplace("June","Juni",$tmp);
            $tmp = str_ireplace("July","Juli",$tmp);
            $tmp = str_ireplace("August","Agustus",$tmp);
            $tmp = str_ireplace("October","Oktober",$tmp);
            $tmp = str_ireplace("December","Desember",$tmp);
            return $tmp;
        }
        
        function getBulanID(){
            $bulan = array("01" => "Januari",
                            "02" => "Februari",
                            "03" => "Maret",
                            "04" => "April",
                            "05" => "Mei",
                            "06" => "Juni",
                            "07" => "Juli",
                            "08" => "Agustus",
                            "09" => "September",
                            "10" => "Oktober",
                            "11" => "November",
                            "12" => "Desember");
            return $bulan;
        }
    }
?>