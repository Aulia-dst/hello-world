<?php
	$jumlah =$_POST['jumlah'];
	$i = $jumlah;
	
	for($i=$jumlah;$i>=2;$i--){
	echo "Anak Ayam Turun ".$i." Mati 1 Tinggal ".($i-1)."<br>";
	echo "<br>";
	}
	echo "Anak Ayam Turun 1 Mati 1 Tinggal Induknya";
?>