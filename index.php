<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
	<script src="https://unpkg.com/ml5@latest/dist/ml5.min.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	
	<div class="container-fluid" align="center" style="height: 100%; ">
		<h1>Image Classification using Feature Extractor with MobileNet</h1>
		<div id="videoContainer"></div>
		<p><span id="modelStatus">Loading MobileNet</span></p>
		<p>
			<button id="catButton">Tambah Gambar</button>
			<span id="amountOfCatImages">0</span> di tambahkan<br />
			<br />
			<button id="train">Train Gambar</button><span id="loss"></span>
			<button id="buttonPredict">Mulai Menebak!</button><br />
		</p>
		<p>Label : <span id="result">...</span><br />Akurasi : <span id="confidence">...</span></p>
		<p>
			<label for="avatar">Unggah Model : </label>
			<input type="file" id="load" multiple/>|
			<button id="save">Simpan Model</button>
		</p>
	</div>
	<script src="sketch.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>