<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 9/25/2018
 * Time: 03:30 PM
 */

define('DB_SERVER', 'localhost:3036');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '1234');
define('DB_DATABASE', 'efaclecture');

$connection = mysqli_connect("127.0.0.1", "root", "1234", "efaclecture", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}

?>