<?php

define('ROOT_URL', 'http://localhost/taskdb/');
define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS', 'franz');
define('DB_NAME', 'taskss');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno())
echo "error";

?>