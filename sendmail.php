<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  
 mail( "gaurav12trivedi@gmail.com", "Gaurav Website Details",
    $message,"From: $email" );
  header( "Location: http://www.gauravtrivedi.orgfree.com/thanks.htm" );
?>