<?php

	$page=$_GET['menu'];
	switch($page)
		{
			case 'halaman1' : include("halaman1.php"); break;
			case 'pangkalan' : include("pangkalan/pangkalan.php"); break;
			case 'halaman3' : include("halaman3.php"); break;
			case 'halaman4' : include("halaman4.php"); break;
			case 'halaman5' : include("halaman5.php"); break;
			case 'halaman6' : include("halaman6.php"); break;
			case 'halaman7' : include("halaman7.php"); break;
			case 'halaman8' : include("halaman8.php"); break;
		}
?>