<?php

	 $DBhost = "localhost";
	 $DBuser = "atlan_admin";
	 $DBpass = "Sales17atlanti!,.!";
	 $DBname = "atlanti1_admin";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
