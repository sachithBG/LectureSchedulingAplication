<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 9/20/2018
 * Time: 11:37 PM
 */


////////////////////////////////////////////////////////
include 'service.php';
$myEmail = $_GET['Email'];
$mypassword = $_GET['Pwd'];

$result = $connection->query("SELECT NID AND Name FROM registration WHERE Email = '$myEmail' and Password = '$mypassword'");
$result = (bool)(($connection->affected_rows) == 1);

if ($result) {
    echo "OK";
} else {
    echo "NO";
    //$message = "Customer has not been saved";
  //  echo "<script> alert('Not loged')</script>";
  //  echo "<script>window.location.replace('http://localhost/Document/PHP/LSAplication/login.html')</script>";
}

?>