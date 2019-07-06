<?php
	function NamaAngka($user){
		$convert = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8, 'i'=>9, 'j'=>10, 'k'=>11, 'l'=>12, 'm'=>13, 'n'=>14, 'o'=>15, 'p'=>16, 'q'=>17, 'r'=>18, 's'=>19, 't'=>20, 'u'=>21, 'v'=>22, 'w'=>23, 'x'=>24, 'y'=>25, 'z'=>26];

		//memecah nama
		$break = explode(" ", $user);
		$nilai = '';

		foreach ($break as $key => $value) {
			$nilainama[$key] = 0;
			$index = $key+1;
			$value = strtolower($value);
			$array_data = str_split($value);
			foreach ($array_data as $value) {
				$nilainama[$key] = $nilainama[$key] + $convert[$value] * $index;
			}
			$nilai .= $nilainama[$key]."<br>";
	}
	return $nilai;
}

$total = NamaAngka('Christoper Slovanoski');
echo $total;

?>