<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){


    case 'index.php':
        $title = 'Temperature Converter';
        // $logo = 'calc?';
        $PageID = 'Home';
        break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Home';
}


?>