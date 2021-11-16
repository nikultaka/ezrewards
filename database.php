<?php
require "config.php";
$connectionInfo = array( "UID"=>$username,                            
                         "PWD"=>$password,                            
                         "Database"=>$database); 

$conn = sqlsrv_connect( $host, $connectionInfo); 
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

?>
