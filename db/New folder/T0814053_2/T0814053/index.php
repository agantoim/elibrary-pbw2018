<?php include('layout/header.php');?>

		<form method="get" action="transaction.php">
			Judul buku : <input name="title" type="text" /> </br>
			Pengarang : <input name="author" type="text" /> </br>
			Lama peminjaman : <input name="duration" type="number" /> hari</br>
			<input type="submit" value="Submit" />
		</form>

<?php include('layout/footer.php');?>