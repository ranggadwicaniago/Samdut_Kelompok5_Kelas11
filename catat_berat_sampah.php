<!DOCTYPE html>
<html>
<head>
	<title>Halaman Catatan Berat Timbangan Sampah yang Akan Diangkut</title>
	
	<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f5f5f5;
	}
	
	.container {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}
	
	.box {
		width: 500px;
		background-color: #3f3434;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}
	
	h1 {
		text-align: center;
		margin-bottom: 20px;
	}
	
	form label {
		display: block;
		font-weight: bold;
		margin-bottom: 5px;
		margin-left: auto;
	}
	
	form input[type="date"],
	form input[type="number"],
	form input[type="text"] {
		width: 96%;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 3px;
		margin-bottom: 10px;
	}
	
	form input[type="submit"] {
		background-color: #4caf50;
		color: #2e2828;
		border: none;
		padding: 10px 20px;
		border-radius: 3px;
		cursor: pointer;
	}
	
	form input[type="submit"]:hover {
		background-color: #45a049;
	}
</style>
	
</head>
<body>
	<div class="container">
		<div class="box">
			<h1>Catatan Berat Timbangan Sampah yang Akan Diangkut</h1>
			<form>
				<label for="tanggal">Tanggal:</label>
				<input type="date" id="tanggal" name="tanggal"><br>

				<label for="lokasi">Lokasi:</label>
				<input type="text" id="lokasi" name="lokasi"><br>

				<label for="berat-organik">Berat Sampah Organik:</label>
				<input type="number" id="berat-organik" name="berat-organik"><br>

				<label for="berat-anorganik">Berat Sampah Anorganik:</label>
				<input type="number" id="berat-anorganik" name="berat-anorganik"><br>

				<label for="berat-berbahaya">Berat Sampah Berbahaya:</label>
				<input type="number" id="berat-berbahaya" name="berat-berbahaya"><br>

				<input type="submit" value="Simpan">
			</form>
		</div>
	</div>
</body>
</html>
