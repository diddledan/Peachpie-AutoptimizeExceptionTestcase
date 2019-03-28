<?php

function str_is_valid_regex( $string )
{
    set_error_handler( function() {}, E_WARNING );
    $is_regex = ( false !== preg_match( $string, '' ) );
    restore_error_handler();

    return $is_regex;
}

print_r(str_is_valid_regex('<!--[if'));
