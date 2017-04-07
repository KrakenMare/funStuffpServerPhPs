<?php

 $DBUSER = 'root';
 $DBPASS = 'Arcanuo';
 $DBHOST = 'localhost';
 $DBNAME = 'rotmgprod';
 
 $conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
