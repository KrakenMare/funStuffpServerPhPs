<?php
require_once 'db.php';

function countPlayers() {
$sql = "SELECT name FROM rotmgprod where accountInUse='1';
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0)
 {
    
    while($row = mysqli_fetch_assoc($result)) 
{
$count++;
    }
} else 
{
    $count = 0;
}
return $count;
}
