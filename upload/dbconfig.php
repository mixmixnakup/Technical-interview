<?php

define('HOST','localhost');
define('USER','root');
define('PASS','12345678');
define('DB','upload_db');


$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>