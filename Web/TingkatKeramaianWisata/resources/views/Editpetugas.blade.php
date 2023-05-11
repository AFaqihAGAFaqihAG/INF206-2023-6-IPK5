<!DOCTYPE html>
<html>
<head>
	<title>EDIT - Status</title>
	<link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">
</head>
<body>
	<h1>EDIT</h1>
	<form>
		<label for="status">Status:</label>
		<select id="status" name="status">
			<option value="penuh">Penuh</option>
			<option value="ramai">Ramai</option>
			<option value="normal">Normal</option>
			<option value="sepi">Sepi</option>
		</select>
		<br><br>
		<label for="deskripsi">Deskripsi:</label><br>
		<textarea id="deskripsi" name="deskripsi" rows="4" cols="50"></textarea>
		<br><br>
		<label for="jam-buka">Jam Buka:</label>
		<input type="time" id="jam-buka" name="jam-buka"><br><br>
		<label for="jam-tutup">Jam Tutup:</label>
		<input type="time" id="jam-tutup" name="jam-tutup"><br><br>
		<label for="status-buka-tutup">Status Buka/Tutup:</label>
			<input type="radio" id="buka" name="status-buka-tutup" value="buka">
			<label for="buka">Buka</label>
			<input type="radio" id="tutup" name="status-buka-tutup" value="tutup">
			<label for="tutup">Tutup</label><br><br>
		<label for="jumlah-pengunjung">Jumlah Pengunjung:</label>
		<input type="number" id="jumlah-pengunjung" name="jumlah-pengunjung"><br><br>
		<input type="submit" value="Submit" class="btn">
	</form>
</body>
</html>
