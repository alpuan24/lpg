<?php

	$page=$_GET['menu'];
	switch($page)
		{
				//navbar halaman utama /menu utama
			case 'halaman1' : include("halaman1.php"); break;
				//navbar Agen
			case 'agen' : include("agen/agen.php"); break;
			case 'tbagen' : include("agen/formulirAgen.php"); break;
			case 'formulirAgen' : include("agen/formulirAgen.php"); break;

				// navbar pangkalan
			case 'pangkalan' : include("pangkalan/pangkalan.php"); break;
			case 'tbpangkalan' : include("pangkalan/formulirPangkalan.php"); break;
			case 'formulirPangkalan' : include("pangkalan/formulirPangkalan.php"); break;

				//navbar distribusi
			case 'distribusi' : include("distribusi/distribusi.php"); break;
			case 'rekapitulasi' : include("distribusi/rekapDistribusi.php"); break;

				//Navbar pengguna
			case 'user' : include("user/user.php"); break;
			case 'tbuser' : include("user/formulirUser.php"); break;
			case 'formulirUser' : include("user/formulirUser.php"); break;
		}
?>