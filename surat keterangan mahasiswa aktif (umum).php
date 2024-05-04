<?php
include('koneksi.php');
$datas = mysqli_query($koneksi, "SELECT * FROM sukematif") or die(mysqli_error($koneksi));
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Surat</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-md-12 mt-5">
        <h1>Surat Keterangan Mahasiswa Aktif (Umum)</h1>
        <div class="card">
            <div style="position:fixed" class="card">
			<div class="card-header bg-success text-white ">
				Universitas PGRI Wiranegara Pasuruan <a href="login.php" class="btn btn-sm btn-danger float-right mr-2">Keluar</a>
				<a href="beranda.html" class="btn btn-sm btn-warning float-right mr-2">Kembali</a>
				<a href="tambah.php" class="btn btn-sm btn-primary float-right mr-2">Tambah</a>
			</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
						<th>Contoh Pengisian Di Setiap Form</th>
							<th>Email</th>
							<th>Tahun Sekarang</th>
							<th>Nama</th>
							<th>Tempat tanggal lahir</th>
							<th>Alamat desa, kelurahan</th>
							<th>Alamat kecamatan, kota/kabupaten</th>
							<th>Fakultas</th>
							<th>Programstudi</th>
							<th>Nim</th>
							<th>Tahun Akademik (2020-2023)</th>
							<th>Semester</th>
							<th>Surat Keterangan Ini Sebagai Apa?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($datas)) : ?>
                            <tr>
                                <td><?= $row['contoh'] ?></td>
                               <td><?= $row['email']; ?></td>
						<td><?= $row['tahunsekarang']; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['tempattgllahir']; ?></td>
						<td><?= $row['alamatdesakelurahan']; ?></td>
						<td><?= $row['alamatkecamatankotakabupaten']; ?></td>
						<td><?= $row['fakultas']; ?></td>
						<td><?= $row['programstudi']; ?></td>
						<td><?= $row['nim']; ?></td>
						<td><?= $row['tahunakademik']; ?></td>
						<td><?= $row['semester']; ?></td>
						<td><?= $row['skma']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['nim'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapus.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-danger" 
								onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
								<a href="view.php?nim=<?= $row['nim'];?>" class="btn btn-sm btn-primary">View</a>
                                </td>
                            </tr>
                        <?php
                            
                            endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>