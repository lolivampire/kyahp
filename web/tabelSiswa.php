<?php 

include 'koneksi.php';
include '../web/config/library.php';
include '../web/config/functions.php';

	if (isset($_POST['kelasPilih'])) {
		$pilihanKelas = $_POST['kelasPilih'];
		global $conn;


?>

		<table class="table bg-white rounded shadow-sm  table-hover">
			<thead>
				<tr>
				<th scope="col" width="10%">ID</th>
				<th scope="col" width="20%">Nama</th>
				<th scope="col" width="10%">Email</th>
				<th scope="col" width="10%">Password</th>
				<th scope="col"width="10%">Hak Akses</th>
				<th scope="col"width="20%">Date Created</th>
				<th scope="col">Action</th>
				</tr>
			</thead>

<?php 
		if ($pilihanKelas != 0) {

		} else {
			$sql1 = mysqli_query($conn, getSiswaKelas($pilihanKelas));
				while ($roww = mysqli_fetch_array($sql1,MYSQLI_ASSOC)){
?>
				<tr>
			        <th scope="row"> <?= $roww["ID"]; ?> </th>
			        <td> <?= $roww["nama"]; ?> </td>
			        <td> <?= $roww["email"]; ?> </td>
			        <td> <?= $roww["Pass"]; ?> </td>
			        <td> <?= $roww["hak_akses"]; ?> </td>
			         <td> <?= $roww["date_created"]; ?> </td>
			        <td>
			            <a href="#" class="btn btn-warning">Rincian</a> 
			            <a href="#" class="btn btn-primary">Edit</a>
						<a href="#" class="btn btn-danger">Hapus</a>  
					<td>
			    </tr>

<?php 
				}
		}
				?>


		</table>
<?php } ?>