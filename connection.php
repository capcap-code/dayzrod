<?php
error_reporting(0);
ini_set('display_errors', 0);
//if(!defined("PROCESSWIRE")) die();


$connection_string = 'DRIVER={ODBC Driver 18 for SQL Server};SERVER=127.0.0.1;DATABASE=CF_SA_GAME;TrustServerCertificate=yes;';
$connection_string2 = 'DRIVER={ODBC Driver 18 for SQL Server};SERVER=127.0.0.1;DATABASE=CF_SA_GUILD;TrustServerCertificate=yes;';
$connection_string3 = 'DRIVER={ODBC Driver 18 for SQL Server};SERVER=127.0.0.1;DATABASE=G4BOX_SA_BILL_DB;TrustServerCertificate=yes;';
$connection_string4 = 'DRIVER={ODBC Driver 18 for SQL Server};SERVER=127.0.0.1;DATABASE=CF_WEB;TrustServerCertificate=yes;';
$connection_string5 = 'DRIVER={ODBC Driver 18 for SQL Server};SERVER=127.0.0.1;DATABASE=CF_SA_LOG;TrustServerCertificate=yes;';


$user = '';
$pass = '';

$connection = odbc_connect( $connection_string, $user, $pass );
$connection2 = odbc_connect( $connection_string2, $user, $pass );
$connection3 = odbc_connect( $connection_string3, $user, $pass );
$connection4 = odbc_connect( $connection_string4, $user, $pass );
$connection5 = odbc_connect( $connection_string5, $user, $pass );





?>




