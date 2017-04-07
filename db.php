<?php

 $DBUSER = 'root';
 $DBPASS = '';
 $DBHOST = 'localhost';
 $DBNAME = 'rotmgUsers';
 
 $conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
