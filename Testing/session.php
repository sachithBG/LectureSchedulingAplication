<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 01:02 PM
 */

include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select UName from efaclecture where UName = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}