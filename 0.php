<html>
    <head>
    </head>
    <body>
    <?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$umur = $_POST['umur'];
			$alamat = $_POST['alamat'];
			$jenis_kelamin = $_POST['jenis_kelamin'];

			echo "<h2>Hasil Input Biodata:</h2>";
			echo "Nama: $nama <br>";
			echo "Umur: $umur <br>";
			echo "Alamat: $alamat <br>";
			echo "Jenis Kelamin: $jenis_kelamin <br>";
		}
	?>
    </body>
</html>