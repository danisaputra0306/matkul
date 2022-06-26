<?php include('class_matkul.php');
$data=new class_matkul;
$dataAll=$data->get_dataAll();
?>
<html>
<body>
	<h1>Data Matakuliah</h1>
	<p><a href="tambah.php"><button>Tambah</button></a></p>
	<table border="1px">
	<tr>
		<th>No</th>
		<th>kode matkul</th>
		<th>Mata Kuliah</th>
		<th>sks</th>
		<th>Aksi</th>
	</tr>
		<?php
		$no=1;
		while($rec=$dataAll->fetch_array()){
			echo "<tr>
			<td>".$no++."</td>
			<td>".$rec['kd_matkul']."</td>
			<td>".$rec['nama']."</td>
			<td>".$rec['sks']."</td>
			<td><a
	href='edit.php?kd_matkul=".$rec['kd_matkul']."'>edit</a><a
	href='hapus.php?kd_matkul=".$rec['kd_matkul']."'>hapus</a></td></tr>";
	}
		?>
		</table>
	</body>
</html>