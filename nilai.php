<?php
	$quiz = $_POST["quiz"];
	$uts = $_POST["uts"];
	$uas = $_POST["uas"];
	
	$nilai = 0.25*$quiz + 0.35*$uts + 0.4*$uas;
	
	$huruf = "";
	
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
		else if($nilai<40 && $nilai>=0)
		{
			$huruf = "E";
		}
		else
		{
			echo "Periksa Kembali Nilai Yang Anda Masukan!<br>";
		}
		echo "Nilai Akhir : ".$nilai."<br>";
		echo "Nilai Huruf : $huruf";
?>