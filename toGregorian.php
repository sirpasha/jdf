<?php
  //First include jdf.php
  include('path/to/jdf.php');
  // jdf.php uses 'jalali_to_gregorian' function to convert Jalali Date to Gregorian
  // This function gets 'year', 'month' and 'day' as Integer as first to third parameters.
  // fourth parameter is used for Formatting  
  $jyear = 1399; // Jalali year as Integer
  $jmonth = 5; // Jalali month as Integer
  $jday = 31; // Jalali day as Integer
  
  // Gathering all date inputs together and setting format to convert
  $gDate = jalali_to_gregorian($jyear , $jmonth, $jday , '-' ); 
 
  echo $gDate; // Results will be something like 2020-08-21
?>
