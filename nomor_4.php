<?php 
function buyNoodle($tgl_belanja,$uang){
	$harga_mi = 2000;
	$jml_beli = $uang/$harga_mi;
	$bonus;
	$bonus_klp5 = 10;
	
	
	if($tgl_belanja%2==1&&$tgl_belanja%5!=0){
		if($jml_beli==3){
			$bonus = $jml_beli+1;
			echo "bonus mie tgl ganjil = $bonus";
		}
		
	}elseif($tgl_belanja%2 == 0 &&$tgl_belanja%5!=0){
		echo "genap";
		if($jml_beli == 4){
			$bonus = $jml_beli+1; 
			echo "bonus mie tgl genap = $bonus";
		}
	}elseif($tgl_belanja % 5 ==0){
		if($bonus_klp5 % 2 == 0){
			$hasil = $bonus_klp5*10;
			echo "bonus di hari kelipatan 5 = $hasil";
		}else{
			$hasil = $bonus_klp5*5;
			echo "bonus di hari kelipatan 5 = $hasil";
		}
	}
	
}
buyNoodle(22,8000);


	
	
	
?>

