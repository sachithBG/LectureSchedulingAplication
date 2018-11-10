<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 01:02 PM
 */

include('service.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($connection,"select Name from efaclecture where Name= '$user_check' ");
echo "<script>alert('$user_check')</script>";
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['Name'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}