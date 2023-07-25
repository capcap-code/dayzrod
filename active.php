<?php
session_start(); 
include("connection.php");
error_reporting(0);
ini_set('display_errors', 0);

$USN = $_GET['user'];
$firsts = $_GET['code'];

		
		
		
		    $query = odbc_exec($connection,"SELECT [USN] FROM [CF_MEMBER] WHERE [firsts] = '".$firsts."' AND [USN] = '".$USN."' ");
    $uu = 0;
    while ($cc = odbc_fetch_array($query)) {
        $uu++;
    }
    if ($uu > 0) {
        $check2 = odbc_exec($connection, "SELECT [USN] FROM [CF_MEMBER] WHERE [firsts] = '".$firsts."'");
	    $cc2 = odbc_fetch_array($check2);
	    $USN2 = $cc2['USN'];
	$query="UPDATE [CF_USER] SET [HOLD_TYPE] = 'A' WHERE [USN] = '".$USN2."'";    
        $result = odbc_exec($connection,$query);
		
		$query2="UPDATE [CF_MEMBER] SET [active] = '1' WHERE [USN] = '".$USN2."'";    
        $result2 = odbc_exec($connection,$query2);
		
		header('location: index.php'); 
        
    }else{
          return print "<script>alert('Not Found.');</script>";
    }
	
	
	
	
		
	

?>