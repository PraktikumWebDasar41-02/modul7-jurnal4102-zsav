<a href="form.php"><button style="text-decoration: none">input baru</button></a>
<?php
include '1.php';
$que = mysqli_query($con,"SELECT * FROM t_jurnal7");
echo "<table border=2>";
echo "<th>Nama</th>
	  <th>NIM</th>
	  <th>Tanggal_lahir</th>
	  <th>Jenis_kelamin</th>
	  <th>Program_studi</th>
	  <th>Fakultas</th>
	  <th>Asal</th>
	  <th>Moto_hidup</th>
	  <th>aksi</th>";
	  while ($ar = mysqli_fetch_array($que)) {
	  	echo "<br>";
	  	echo "<tr>";
	  	echo "<td>".$ar['Nama']."</td>";
	  	echo "<td>".$ar['NIM']."</td>";
	  	echo "<td>".$ar['Tanggal_lahir']."</td>";
	  	echo "<td>".$ar['Jenis_kelamin']."</td>";
	  	echo "<td>".$ar['Program_studi']."</td>";
	  	echo "<td>".$ar['Fakultas']."</td>";
	  	echo "<td>".$ar['Asal']."</td>";
	  	echo "<td>".$ar['Moto_hidup']."</td>";
	  	echo "<td><a href =table.php?nim=".$ar['NIM'].">delete</a></td>";
	  	echo "</tr>";
	  
	  }
	  	echo "</table>";
	  	if (isset($_GET['nim'])) {
	  		$nim = $_GET['nim'];
	  		$del = mysqli_query($con,"DELETE FROM `t_jurnal7` WHERE NIM = $nim");
	  		if ($del) {
	  			header("location :table.php");
	  		}
	  	}
	  	?>