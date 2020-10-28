<?php
	$Angka[0] = 5;
	$Angka[1] = 9;
	$Angka[2] = 4;
	$Angka[3] = 3;
	$Angka[4] = 1;
	$Angka[5] = 8;
	$Angka[6] = 7;
	$Angka[7] = 6;
	$Angka[8] = 3;
	$Angka[9] = 2;
	
	$nilai = $_POST ["nilai"];
	
	$jumlah = 0;
	for($i=0;$i<10;$i++)
	{
		if($nilai == $Angka[$i])
		{
			$jumlah++;
		}
	}
	echo"Angka $nilai Yang Muncul Sebanyak $jumlah kali";
?>