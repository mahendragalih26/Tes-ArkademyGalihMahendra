<?php 
	function BonusMie($saku, $tgl){

		$harga = 2500; //harga Mie
		$total_mie = $saku / $harga; //Menghitung harga
		$lipat_lima = $tgl % 5; //tgl kelipatan 5
		$cek_tgl = $tgl % 2; //cek tgl genap

		if ($lipat_lima == 0) { //cek kelipatan 5
			if ($cek_tgl == 0) { // tgl genap, lalu menghitung bonus
				$pra_bonus = floor($total_mie/4);
				$bonus = $pra_bonus % 2;
				if ($bonus == 0) { 
					$total_b = $pra_bonus * 10; 
					$total_mie = $total_mie + $total_b;
				}else{
					$total_b = $pra_bonus * 5; 
					$total_mie = $total_mie + $total_b;
				}

			//Jika Ganjil
			}else{
				$pra_bonus = floor($total_mie/3);
				$bonus = $pra_bonus % 2;
				if ($bonus == 0) {
					$total_b = $pra_bonus * 10; 
					$total_mie = $total_mie + $total_b;
				}else{
					$total_b = $pra_bonus * 5; 
					$total_mie = $total_mie + $total_b;
				}
			}

		//bukan keliptan 5
		}else{
			if ($cek_tgl == 0) {
				$pra_bonus = floor($total_mie/4);
				$total_mie = $total_mie + $pra_bonus;
			}else{
				$pra_bonus = floor($total_mie/3);
				$total_mie = $total_mie + $pra_bonus;
			}

		}

		return $total_mie;

	}

	$saku = 50000;
	$tgl = 25;
	$bayar = BonusMie($saku, $tgl);
	echo "Total Mie Yang Di dapat = " . $bayar;

?>