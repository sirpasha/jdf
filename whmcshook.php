<?php
// You can hold the jdf.php file in the hooks folder
// for more information about WHMCS Hooks you can check their website.
// 
add_hook('ClientAreaPageSupportTickets', 1, function($vars) {
        $date = $vars['lastreply'];
        $date = str_replace(array('(', ')'), array('', ''), $date);
        $date = ltrim($date);
        $date = rtrim($date);
        $date = trim($date);
        if (strtotime($date) > 0){
            $jdate = '<span class="text-info">' . jdate("Y/m/d H:i", strtotime($date)) . '</span>';
        }
				return $jdate;

});
?>
