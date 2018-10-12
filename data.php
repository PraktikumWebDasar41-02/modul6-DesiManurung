<form method="POST" action="tampil.php">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="number" name="nim" required></td>
		</tr>
		<tr>
			<td>Kelas :
			<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01 <br>
			<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin :</td>
			<td>
				<input type="radio" name="jenis" value="Perempuan">Perempuan <br>
				<input type="radio" name="jenis" value="Laki-Laki">laki-laki
			</td>
		</tr>

		<tr>
			<tr>
			<td>Hobby </td>
			<td>
    		<input type="checkbox" name="hobi" value="Membaca" />Membaca<br />
    		<input type="checkbox" name="hobi" value="Dengar Musik" />Dengar Musik<br />
    		<input type="checkbox" name="hobi" value="Berenang" />Berenang<br />
    		<input type="checkbox" name="hobi" value="Bernyanyi" />Bernyanyi<br />
    		<input type="checkbox" name="hobi" value="" />Naik Sepeda
		</td>
		</tr>

		<tr>
			<td>Fakultas :</td>
			<td><select name="fak">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
				<option value="FEB">FEB</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat :</td>
			<td><input type="text" name="alamat" required></td>
		</tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

<?php
include 'conn.php';
	
if (isset($_POST['submit'])) {

	if (isset($_POST['jenis'])) {
		$jenis1 = $_POST['jenis'];
	}
	if (isset($_POST['kelas'])) {
		$kelas1 = $_POST['kelas'];
	}

	if (isset($_POST['hobi'])){
		$hobi1=$_POST['hobi'];
		$hobi2=$_POST['hobi'];
		$hobi3=$_POST['hobi'];
		$hobi4=$_POST['hobi'];
		$hobi5=$_POST['hobi'];
	}

	$nim1 = $_POST['nim'];

	$kelas1 = $_POST['kelas'];

	$fakultas1 = $_POST['fak'];

	$alamat1 = $_POST['alamat'];
	

	
	
	session_start();

	$_SESSION['id'] = $nim1;
	$_SESSION['nm'] = $kelas1;
	
	$qry = "INSERT INTO t_desi VALUES ($nim1,'$kelas1','$jenis1','$hobi1','$fakultas1','$alamat1')";
	$tambah=$simpan->query($qry);
	if($tambah==true){
		echo "Berhasil";

		header("Location:tampil.php");
}
}

 ?>