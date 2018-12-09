<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    echo 'Connected failure<br>';
};
mysqli_select_db( $conn,'first site' );