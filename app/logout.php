<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 01:04 PM
 */
include 'allURL.php';
   session_start();
   if(session_destroy()) {
       header("$indexHTML");
   }
?>