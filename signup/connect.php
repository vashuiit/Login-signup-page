<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='signupforms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "Connection Successful";
    
}
else{
    die(mysqli_error($con));
}
?> 