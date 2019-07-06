<?php
     function UserValid($username) {
        
        // Cara menggunakan fungsi di atas
	     if (preg_match('/^(?![0-9])(?=.*[A-z])(?=.*[0-9])\S{5,9}$/',$username)) {
	         echo "Username Is Valid" ;
	     } else {
	         echo "Username Is Invalid" ;
	     }
     }

     function PassValid($password) {
        
        // Cara menggunakan fungsi di atas
	     if (preg_match('/^(?![0-9])(?=.*[A-z])(?=.*[@])(?=.*[0-9])\S{8,}$/',$password)) {
	         echo "Password Is Valid" ;
	     } else {
	         echo "Password Is Invalid" ;
	     }
     }
	
	// Menjalankan Fungsi Username & Password Dengan Benar
    echo "<b> Validasi Yang Benar </b>";
    echo "<br>";
	UserValid('Ayu99v');
	echo "<br>";
	PassValid('p@ssW0rd#');
	echo "<br>";
	echo "<br>";
	echo "<b> Validasi Yang Salah </b>";
    echo "<br>";
	UserValid('zeronull');
	echo "<br>";
	PassValid('C0d3YourFuture!#');
?>