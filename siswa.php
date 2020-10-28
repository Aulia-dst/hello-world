<?php
	
	$Mhs[0]['nim'] = 09071002001;
	$Mhs[1]['nim'] = 09071002002;
	$Mhs[2]['nim'] = 09071003001;
	$Mhs[3]['nim'] = 09071003002;
	$Mhs[4]['nim'] = 09071003003;
	
	$Mhs[0]['nama'] = "Doni";
	$Mhs[1]['nama'] = "Budi";
	$Mhs[2]['nama'] = "Sari";
	$Mhs[3]['nama'] = "Putri";
	$Mhs[4]['nama'] = "Rini";
	
	
	$Mhs[0]['quiz'] = 60;
	$Mhs[1]['quiz'] = 80;
	$Mhs[2]['quiz'] = 75;
	$Mhs[3]['quiz'] = 88;
	$Mhs[4]['quiz'] = 95;
	
	$Mhs[0]['uts'] = 90;
	$Mhs[1]['uts'] = 60;
	$Mhs[2]['uts'] = 78;
	$Mhs[3]['uts'] = 67;
	$Mhs[4]['uts'] = 85;
	
	$Mhs[0]['uas'] = 87;
	$Mhs[1]['uas'] = 65;
	$Mhs[2]['uas'] = 95;
	$Mhs[3]['uas'] = 76;
	$Mhs[4]['uas'] = 81;
	
	$nim = $_POST ["nim"];
	
	$nilai = 0.25*$quiz + 0.35*$uts + 0.4*uas;
	$huruf = "";
	
		
	if($nim == $Mhs["nim"])
	{	
		echo "NAMA : DASTI AULIA<br>";
		echo "NIM :09031181320046<br>";
		echo "====================<br>";
		echo "NIM 			: ".$Mhs['nim']."<br>";
		echo "nama 			: ".$Mhs['nama']."<br>";
		echo "quiz 			: ".$Mhs['quiz']."<br>";
		echo "uts 			: ".$Mhs['uts']."<br>";
		echo "uas 			: ".$Mhs['uas']."<br>";
	}else{
		echo "Nim Yang di Input Salah";
	}
		
		if($nilai<=100 && $nilai>=86)
		{
			$huruf = "A";
		}
		else if ($nilai<86 && $nilai>=70)
		{
			$huruf = "B";
		}
		else if ($nilai<70 && $nilai>=55)
		{
			$huruf = "C";
		}
		else if ($nilai<55 && $nilai>=40)
		{
			$huruf = "D";
		}
		else 
		{
			$huruf = "E";
		}
	
			echo " Nilai Akhir  : ".$nilai."<br>";
			echo " Nilai Huruf  : ".$huruf."<br>";
			
	
	
	
	
	
?>