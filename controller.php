<?php  
	/*bilangan kelipatan 3 maka cetak marlin
	bilangan kelipatan 5 maka cetak booking
	bilangan kelipatan keduanya maka cetak marlin booking
	setelah marlin booking cetak 2 kali kondisi akan dirubah 
	3 cetak booking, 5 cetak marlin dan bilangan yang habis dibagi 5 cetak 'marlin booking'
	dan pastikan sebelum mencetak booking 
	pastikan sebelum mencetak marlin booking kata marlin dan booking telah dicetak sebanyak lebih atau sama dengan 2 kali hentikan program ketika text marlin booking dicetak 2 kali
	*/

	$angka = range(1, 60);

	$no = 0;
	for ($index = 1; $index <=count($angka)  ; $index++) {
		
		if ($no != 2) {
			if ($index % 3 == 0 && $index % 5 == 0) {
				echo 'marlin booking' . PHP_EOL;
				$no++;
			} else if ($index % 3 == 0) {
				echo 'marlin' . PHP_EOL;
			} else if ($index % 5 == 0) {
				echo 'booking' . PHP_EOL;
			} else {
				echo $index . PHP_EOL;
			}
		} else {
			if ($index % 3 == 0 && $index % 5 == 0) {
				echo 'booking marlin' . PHP_EOL;
			} else if ($index % 3 == 0) {
				echo 'booking' . PHP_EOL;
			} else if ($index % 5 == 0) {
				echo 'marlin' . PHP_EOL;
			} else {
				echo $index . PHP_EOL;
			}		
		}

	}

	// foreach(range(1, 100) as $number) {
	//   if ($number % 3 != 0 && $number % 5 != 0) {
	//     echo $number . '<br>';
	//     continue;
	//   }
	//   if ($number % 3 == 0) echo 'se';
	//   if ($number % 5 == 0) echo 'to';
	//   echo '<br>';
	// }
	/*
	1,2,m,4,b,6,7,m,8,9,b,11,12,m,14,mb
	*/

	// 	// switch ($i) {
	// 	// 	case $i % 3 == 0:
	// 	// 		echo "Marlin";
	// 	// 		continue;
	// 	// 	case $i % 5 == 0:
	// 	// 		echo "Booking";
	// 	// 		continue;
	// 	// 	case $i % 3 == 0 && $i % 5 == 0:
	// 	// 		echo "marlin<br>";
	// 	// 		continue;
	// 	// 	default:
	// 	// 		// code...
	// 	// 		break;
	// 	// }

	// }
?>