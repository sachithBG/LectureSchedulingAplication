<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 01:04 PM
 */


   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>