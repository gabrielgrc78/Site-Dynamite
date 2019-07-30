<?php
function sql_sanitize( $sCode ) {
    if (function_exists("mysqli_real_escape_string" ) ) {
        $sCode = mysqli_real_escape_string( $sCode );
    } else {
        $sCode = addslashes( $sCode );
    }
    return $sCode;
}
