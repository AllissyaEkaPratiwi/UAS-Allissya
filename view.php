<?php
// Menghubungkan ke database
include 'koneksi.php';
$id = $_GET['nim']; // Menampung nim

// Query untuk mengambil data
$query = "SELECT * FROM sukematif WHERE nim = '$id'";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "<h1>sukematif</h1>";
    echo "<table border='1'>";
    echo "<tr>
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
          </tr>";

    // Menampilkan data ke dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
		  echo "<td>" . $row['contoh'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['tahunsekarang'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['tempattgllahir'] . "</td>";
		echo "<td>" . $row['alamatdesakelurahan'] . "</td>";
        echo "<td>" . $row['alamatkecamatankotakabupaten'] . "</td>";
        echo "<td>" . $row['fakultas'] . "</td>";
        echo "<td>" . $row['programstudi'] . "</td>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['tahunakademik'] . "</td>";
        echo "<td>" . $row['semester'] . "</td>";
        echo "<td>" . $row['skma'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<div style='margin-top: 50px;'>";
	echo "<a href='surat keterangan mahasiswa aktif (umum).php' >Kembali ke halaman Surat Keterangan Mahasiswa Aktif (Umum)</a>";
    echo "</div>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
