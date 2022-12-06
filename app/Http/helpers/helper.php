<?php 

function format_uang($number)
{
      return number_format($number,0,',','.');
}

function say_number($number)
{
      $number = abs($number);
      $read = array('','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas');
      $say = '';

      if ($number < 12){
            $say = ' '.$read[$number] ;
      }elseif($number < 20){
            $say = say_number($number - 10) . ' belas';
      }elseif ($number < 100){
            $say = say_number($number / 10) . ' puluh'. say_number($number % 10);
      }elseif ($number < 200){
            $say = 'seratus' . say_number($number - 100);
      }elseif($number < 1000){
            $say = say_number($number / 100) . ' ratus' . say_number($number%100);
      }elseif($number < 2000){
            $say = 'seribu' . say_number($number - 1000);
      }elseif($number < 1000000){
            $say = say_number($number / 1000) . ' ribu' . say_number($number % 1000);
      }elseif($number < 1000000000){
            $say = say_number($number / 1000000) . ' juta'. say_number($number % 1000000);            
      }

      return $say;
}

function say_date($tgl, $show_day = true){

      $name_days = array('minggu','selasa','rabu','kamis',"jum'at",'sabtu');
      $name_months = array(1=>
      'January','February','Maret','April','Mei','Juni','July','Agustus','September','Oktober','November','Desember');

      //25-02-2002
      $date = substr($tgl,0,2);
      $month = $name_months[(int) substr($tgl,4,2)];
      $year = substr($tgl,6,4);
      $text = "$date $month $year";
      
      if($show_day){
            $sort_day = date('w',mktime(0,0,0,(int)substr($tgl,4,2),$date,$year));
            $name_day = $name_days[$sort_day];
            $text = "$name_day, $date $month $year";
      }

      return $text;

}

?>