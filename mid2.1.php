<?php

function myErrorHandler($errorNo, $errorMessage)
{
    echo "<b>Error Number:</b> " . $errorNo . "<br>";
    echo "<b>Custom Error Message:</b> " . $errorMessage . "<br>";
}

set_error_handler("myErrorHandler");

trigger_error("This is a user-defined warning!", E_USER_WARNING);

?>