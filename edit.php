	<?php
include('koneksi.php');

$id = $_GET['id'];

$datas = mysqli_query($koneksi, "SELECT * FROM sukematif WHERE nim = '$id'");
$result = mysqli_fetch_assoc($datas);

if (isset($_POST['submit'])) {
					$contoh = $_POST['contoh'];
					$email = $_POST['email'];
					$tahunsekarang = $_POST['tahunsekarang'];
					$nama = $_POST['nama'];
					$tempattgllahir = $_POST['tempattgllahir'];
					$alamatdesakelurahan = $_POST['alamatdesakelurahan'];
					$alamatkecamatankotakabupaten = $_POST['alamatkecamatankotakabupaten'];
					$fakultas = $_POST['fakultas'];
					$programstudi = $_POST['programstudi'];
					$nim = $_POST['nim'];
					$tahunakademik = $_POST['tahunakademik'];
					$semester = $_POST['semester'];
					$skma = $_POST['skma'];
    $datas = mysqli_query($koneksi, "UPDATE `sukematif` SET `contoh`='$contoh', email='$email', tahunsekarang='$tahunsekarang', nama='$nama', tempattgllahir='$tempattgllahir', alamatdesakelurahan='$alamatdesakelurahan', alamatkecamatankotakabupaten='$alamatkecamatankotakabupaten', fakultas='$fakultas', programstudi='$programstudi', nim ='$nim', tahunakademik='$tahunakademik', semester='$semester', skma='$skma' WHERE `sukematif`.nim = '$id'") or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil diedit');window.location='surat keterangan mahasiswa aktif (umum).php';</script>";
}
				
				?>
<!DOCTYPE html>
<html>

<head>
	<title>edit</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Surat Keterangan Mahasiswa Aktif (Umum)</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit
			</div>
			<div class="card-body">
				
				<form action="" method="post" role="form">
					
					<div class="form-group">
                        <label for="contoh">Contoh Pengisian Di Setiap Form</label>
						
						<br>Deskripsi yang Benar :<br>
     1) Salam Patriot, Gagah Berani Tangguh<br>
      2) Pasuruan, 1 Januari 2022<br>
    <br>
      Deskripsi yang  Salah :<br>
       1) salam patriot, gagah berani tangguh<br>
     2) SALAM PATRIOT, GAGAH BERANI TANGGUH<br>
     3) pasuruan, 1 januari 2022<br>
      
      4) PASURUAN, 1 JANUARI 2022<br>
     <br>
						
					    <input type="radio" name="contoh" value="Mengerti" required> Mengerti<br>
	    				<input type="radio" name="contoh" value="Tidak Mengerti, Saya Harus Konsultasi Ke BAAK"> Tidak Mengerti, Saya Harus Konsultasi Ke BAAK<br>
						</div>
					<div class="form-group">
                        <label for="email">Email</label>
						 <input value="<?= $result['email'] ?>" type="text" id="email" name="email" class="form-control" required >
						
					</div>
					<div class="form-group">
						<label>Tahun Sekarang</label>
						<input value="<?= $result['tahunsekarang']?>"  type="text" id="tahunsekarang" name="tahunsekarang" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
                        <input value="<?= $result['nama'] ?>" type="text" id="nama" name="nama" class="form-control" required >
                    </div>
					<div class="form-group">
						<label>Tempat, Tanggal Lahir</label>
						<input value="<?= $result['tempattgllahir'] ?>" type="text" id="tempattgllahir" name="tempattgllahir" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Alamat Desa, Kelurahan</label>
						<input value="<?= $result['alamatdesakelurahan'] ?>" type="text" id="alamatdesakelurahan" name="alamatdesakelurahan" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Alamat Kecamatan, Kota/Kabupaten</label>
						<input value="<?= $result['alamatkecamatankotakabupaten'] ?>" type="text" id="alamatkecamatankotakabupaten" name="alamatkecamatankotakabupaten" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Fakultas</label><br>
					    <input type="radio" name="fakultas" value="Fakultas Teknologi dan Sains" required> Fakultas Teknologi dan Sains<br>
	    				<input type="radio" name="fakultas" value="Fakultas Pedagodi dan Psikologi"> Fakultas Pedagodi dan Psikologi<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>Program Studi</label><br>
					    <input type="radio" name="programstudi" value="Pend. Bahasa dan Sastra Indonesia" required> Pend. Bahasa dan Sastra Indonesia<br>
	    				<input type="radio" name="programstudi" value="Pend. Bahasa Inggris"> Pend. Bahasa Inggris<br>
				    	<input type="radio" name="programstudi" value="Pend. Matematika"> Pend. Matematika<br>
						<input type="radio" name="programstudi" value="Pend. Ekonomi"> Pend. Ekonomi<br>
						<input type="radio" name="programstudi" value="Pend. Pancasila dan Kewarganegaraan"> Pend. Pancasila dan Kewarganegaraan<br>
						<input type="radio" name="programstudi" value="Ilmu Komputer"> Ilmu Komputer<br>
						<input type="radio" name="programstudi" value="Teknik Industri"> Teknik Industri<br>
						<input type="radio" name="programstudi" value="Teknologi Pangan"> Teknologi Pangan<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>Nim</label>
						<input value="<?= $result['nim'] ?>" type="text" id="nim" name="nim" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Tahun Akademik</label>
						<input value="<?= $result['tahunakademik'] ?>" type="text" id="tahunakademik" name="tahunakademik" class="form-control" required >
					</div>
					<div class="form-group">
						<label>Semester</label><br>
					    <input type="radio" name="semester" value="I" required> I (Satu)<br>
	    				<input type="radio" name="semester" value="II"> II (Dua)<br>
				    	<input type="radio" name="semester" value="III"> III (Tiga)<br>
						<input type="radio" name="semester" value="IV"> IV (Empat)<br>
						<input type="radio" name="semester" value="V"> V (Lima)<br>
						<input type="radio" name="semester" value="VI"> VI (Enam)<br>
						<input type="radio" name="semester" value="VII"> VII (Tujuh)<br>
						<input type="radio" name="semester" value="VIII"> VIII (Delapan)<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>Surat Keterangan Ini Sebagai Apa?</label><br>
						 <input type="radio" name="skma" value="Sebagai Keterangan Mahasiswa Aktif" required> Sebagai Keterangan Mahasiswa Aktif<br>
						 <input type="radio" name="skma" value="Sebagai Persyaratan Untuk Mengaktifkan BPJS" > Sebagai Persyaratan Untuk Mengaktifkan BPJS<br>
					<input type="radio" name="skma" value="Sebagai Semestinya" > Sebagai Semestinya<br>
					<input type="radio" name="skma" value="Yang lain" > Yang lain: <input type="text" name="other">  </label><br>
					</div>

					<a href="surat keterangan mahasiswa aktif (umum).php"><button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button></a>
					<a href="surat keterangan mahasiswa aktif (umum).php" class="btn btn-danger">Cancel</a>
				</form>

				
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>