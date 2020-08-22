<?php
  // jdf.php uses 'jalali_to_gregorian' function to convert Jalali Date to Gregorian
  // This function gets 'year', 'month' and 'day' as Integer as first to third parameters.
  // fourth parameter is used for Formatting
  
  $year = 1399; // Jalali year as Integer
  $month = 5; // Jalali month as Integer
  $day = 31; // Jalali day as Integer
  
  // Gathering all date inputs together and setting format to convert
  $jDate = jalali_to_gregorian($year , $month, $day , '-' ); 
 
  echo $jDate; // Results will be something like 2020-08-21
?>
