<?php 

	function Operasi($n){

			echo $n . " ";
			for ($i = $n; $i >= 1;) { 
				//seleksi bilangan ganjil atau genap
				if ($n != 1) {
					$seleksi = $n % 2;
					if ($seleksi == 0) {
						$n = $n/2;
						echo $n . " ";
					}else{
						$n = $n*3+1;
						echo $n . " ";
					}
				}else{
					return;
				}
			}
	}

	echo "<b> Nilai 100 </b> <br>";
	echo Operasi('100') . "<br>";
	echo "<b> Nilai 97 </b> <br>";
	echo Operasi('97') . "<br>";
?>