<?php

ob_start();

//session_start();

error_reporting(E_ALL & E_STRICT);

ini_set('display_errors', '1');

ini_set('log_errors', '0');

ini_set('error_log', './');

ini_set("max_execution_time",120);

ini_set("upload_max_filesize ",'10M');

ini_set("post_max_size ",'2048M');

ini_set('memory_limit','32M');

function includeFile($file)

{

    if(!file_exists($file))

    {

     echo "Unable to locate the file path:".$file;

    }

    include $file;

}

$commonFilePath = '../common/';

includeFile($commonFilePath."config/config.php");

includeFile($commonFilePath."lib/mysql.php");

includeFile($commonFilePath."lib/function.php");

includeFile($commonFilePath."lib/admin.php");

includeFile($commonFilePath."lib/class.functions.php");

includeFile($commonFilePath."lib/class.agency.php");



$adminObj 		= new admin();

$agencyObj	        = new agency();




 

if(isset($_SESSION['msg_admin_id']))

$admin_id = $_SESSION['msg_admin_id'];



$siteLink = 'http://localhost/staff-solution/';



?>

