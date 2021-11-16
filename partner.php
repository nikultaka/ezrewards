<?php
require "./database.php";
function get_partner($conn)
{
    $result;
    $sql = "SELECT * FROM PARTNER where ID=8853";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       $result = $row;
    }

    sqlsrv_free_stmt( $stmt);
    return $result;

}


?>
