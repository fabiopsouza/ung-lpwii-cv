<?php

function ErrorHandler($errno, $errstr, $errfile, $errline){

    switch ($errno) {
    case E_USER_ERROR:
        throw new Exception($errstr);
        break;

    case E_USER_WARNING:
        throw new Exception($errstr);
        break;

    case E_USER_NOTICE:
        throw new Exception($errstr);
        break;

    default:
        throw new Exception($errstr);
        break;
    }

    return true;
}