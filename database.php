<?php
$connect=mysqli_connect('localhost','root','','WebProject');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

if ($connect->ping()) {
  printf ("Our connection is ok!\n"); 
} else {
  printf ("Error: %s\n", $connect->error); 
}

?>