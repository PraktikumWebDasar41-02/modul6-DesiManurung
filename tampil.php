<?php
session_start();
include 'conn.php';
$nim8 = $_SESSION['id'];
$nama8=$_SESSION['nm'];

$qry = "SELECT * FROM t_desi WHERE nim = '$nim8'";
$hasil=$simpan->query($qry);
if($hasil==true){
	foreach($hasil as $value){
		$nim8=$value['nim'];
		$kelas8=$value['kelas'];
		$jenis8=$value['jenis'];
		$hobi8=$value['hobi'];
		$fakultas8=$value['fakultas'];
		$alamat8=$value['alamat'];
		
		
	}
}
	

?>


<form method="post">
<table>
	</tr>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nim8."<br>"; ?></td>
	</tr>
	<tr>
		<td>Kelas :</td>
		<td><?php echo $kelas8."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin :</td>
		<td><?php echo $jenis8."<br>"; ?></td>
	</tr>
	<tr>
		<td>Hobi :</td>
		<td><?php echo $hobi8."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fakultas8."<br>"; ?></td>
	</tr>
		<td>Alamat :</td>
		<td><?php echo $alamat8."<br>"; ?></td>
	</tr>
	

	<tr>
		<td><input type="submit" name="keluar" value="Input baru"></td>
	</tr>
</table>

</form>
<?php
if (isset($_POST['keluar'])) {
	session_destroy();
	header("Location:data.php");
}
 ?>
