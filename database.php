<?php
$connect=mysqli_connect('localhost','betaform','prem@123','betaform');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>