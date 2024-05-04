

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-md-6 mt-4">
		<h1>Surat Keterangan Mahasiswa Aktif (Umum)</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
				<div class="form-group">
						<label>CONTOH PENGISIAN DI SETIAP FORM</label>
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
						<label>Email</label>
						<input type="text" name="email" required="" class="form-control">
					</div>
				
					
					<div class="form-group">
						<label>Tahun Sekarang</label>
						<input type="text" name="tahunsekarang" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<textarea class="form-control" name="nama"></textarea>
					</div>
					<div class="form-group">
						<label>Tempat Tanggal Lahir</label>
						<textarea class="form-control" name="tempattgllahir"></textarea>
					</div>
					<div class="form-group">
						<label>Alamat Desa, Kelurahan</label>
						<textarea class="form-control" name="alamatdesakelurahan"></textarea>
					</div>
					<div class="form-group">
						<label>Alamat Kecamatan, Kota/Kabupaten</label>
						<textarea class="form-control" name="alamatkecamatankotakabupaten"></textarea>
					</div>
					<div class="form-group">
						<label>Fakultas</label><br>
					    <input type="radio" name="fakultas" value="Fakultas Teknologi dan Sains" required> Fakultas Teknologi dan Sains<br>
	    				<input type="radio" name="fakultas" value="Fakultas Pedagodi dan Psikologi"> Fakultas Pedagodi dan Psikologi<br>
						<input type="radio" name="fakultas" value="Agama Islam"> Agama Islam<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>Program Studi</label><br>
					     <input type="radio" name="programstudi" value="Pend. Agama Islam" required> Pend. Agama Islam<br>
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
						<textarea class="form-control" name="nim"></textarea>
					</div>
					<div class="form-group">
						<label>Tahun Akademik (2022-2023)</label>
						<textarea class="form-control" name="tahunakademik"></textarea>
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
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan</button>
					<a href="surat keterangan mahasiswa aktif (umum).php" class="btn btn-danger">Kosongkan</a>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
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

					//query untuk menambahkan skripsi ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into sukematif (contoh,email,tahunsekarang,nama,tempattgllahir,alamatdesakelurahan,alamatkecamatankotakabupaten,fakultas,programstudi,nim,tahunakademik,semester,skma)
					values('$contoh','$email','$tahunsekarang','$nama','$tempattgllahir','$alamatdesakelurahan','$alamatkecamatankotakabupaten','$fakultas','$programstudi','$nim','$tahunakademik','$semester','$skma')") or die(mysqli_error($koneksi));

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('Data berhasil di simpan');window.location='surat keterangan mahasiswa aktif (umum).php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>