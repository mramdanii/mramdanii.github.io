<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leaf Spots</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
	<script src="https://unpkg.com/ml5@latest/dist/ml5.min.js" type="text/javascript"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	

	<style>
		.image-grid-cover {
			width: 100%;
			background-size: cover;
			min-height: 180px;
			position: relative;
			margin-bottom: 30px;
			text-shadow: rgba(0,0,0,.8) 0 1px 0;
			border-radius: 4px;
		}
		.image-grid-clickbox {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			display: block;
			width: 100%;
			height: 100%;
			z-index: 20;
			background: rgba(0,0,0,.45);
		}
		.cover-wrapper {
			font-size: 18px;
			text-align: center;
			display: block;
			color: #fff;
			text-shadow: rgba(0,0,0,.8) 0 1px 0;
			z-index: 21;
			position: relative;
			top: 80px;
		}
		a, a:focus, a:hover {
			text-decoration: none;
			outline: 0;
		}
	</style>

</head>
<body>
	<div class="container" style="   margin: auto;">	

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Orchid Leaf Disease Detection</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="../index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="index.php">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="container">
			<div class="my-3 p-3 bg-body rounded shadow-sm">
				<div class="container">
					<div class="row">
						<h3>Leaf Spots</h3>
						<hr>
						<section id="golf">
							<div class="fluid-container">
								<div class="row no-gutters">
									<div class="col-md-5">
										<div class="menu-image h-100 d-flex align-items-start">
											<img src="gambar/Images of Leaf Spots on Orchids/F1.jpg" width="500px" height="500px" class="img-fluid" alt="menu image">
										</div>
									</div>
									<div class="col-md">
										<div class="menu-text flex-grow-1">
											<p><b>Gejala Cercospora</b>: Infeksi pertama kali muncul sebagai bintik kuning di bagian bawah daun. Segera setelah infeksi terjadi, area kuning-hijau dapat terlihat pada permukaan atas daun. Saat bintik-bintik membesar dalam pola yang tidak teratur, mereka menjadi sedikit cekung dan nekrotik dan berubah menjadi coklat keunguan menjadi hitam keunguan. Bintik-bintik tersebut terus membesar dalam pola melingkar atau tidak beraturan dan akhirnya dapat menutupi seluruh daun. Margin maju tetap kuning. Daun yang terinfeksi berat biasanya jatuh dari tanaman sebelum waktunya, terutama jika infeksi dimulai di dekat pangkal daun.<br>
<b>Gejala Pseudocercospora</b>: Jamur Cercosporoid terutama menyebabkan bercak daun dan noda tidak beraturan. Tergantung pada spesies Pseudocercospora dan kultivar anggrek, bercak daun dapat melingkar hingga hampir melingkar, mencerminkan pola pertumbuhan koloni jamur. Kadang-kadang noda melingkar berwarna ungu hingga hitam, dengan jumlah bintik coklat hingga hitam yang lebih banyak terbentuk saat bintik-bintik membesar. Spesies lain dari Pseudocercospora menyebabkan noda yang lebih kecil dan tidak teratur umumnya dalam jumlah besar. Pola mosaik umum terjadi pada permukaan daun bagian atas ketika sebagian besar daun terserang penyakit. Bagian bawah daun dapat ditutupi dengan titik-titik, badan spora, yang sering cocok dengan pola pada permukaan daun bagian atas.<br>
<b>Gejala Guignardia</b>: Tanda-tanda pertama infeksi Guignardia adalah lesi kecil, ungu tua, memanjang di kedua permukaan daun. Lesi ini berjalan sejajar dengan vena dan memanjang menjadi garis-garis ungu atau daerah berbentuk berlian. Bintik-bintik sering bergabung untuk membentuk lesi tidak beraturan besar yang dapat mempengaruhi sebagian besar daun. Seiring bertambahnya usia, bagian tengah lesi berubah menjadi cokelat. Mengangkat, badan spora hitam berkembang di daerah yang terkena terasa seperti amplas. Mempengaruhi sebagian besar ascocentrums dan vanda dan hibrida mereka. Penyakit busuk ini juga dikenal sebagai Phyllosticta; nama tersebut berlaku untuk dua tahap seksual yang berbeda dari jamur yang sama.<br>
<b>Gejala Phyllosticta</b>: Bercak dari Phyllosticta dapat dimulai di mana saja pada daun atau pseudobulb. Lesi kecil, kuning dan sedikit cekung. Saat membesar, mereka menjadi bulat hingga lonjong dan lebih cekung, terutama jika infeksi terjadi pada daun. Seiring bertambahnya usia, mereka berubah menjadi cokelat tua dan mengembangkan margin merah ke ungu-hitam yang sedikit terangkat. Akhirnya, struktur spora hitam kecil yang terangkat berkembang di tengah bintik-bintik. Tempat individu sekitar di seberang. Daun yang terinfeksi parah dapat rontok sebelum waktunya. Penyakit ini juga dikenal sebagai Guignardia; nama tersebut berlaku untuk dua tahap seksual yang berbeda dari jamur yang sama.<br>
<b>Gejala Septoria</b>: Bintik-bintik kecil mungkin mulai di kedua permukaan daun sebagai lesi kuning yang cekung. Mereka terus membesar, menjadi coklat tua sampai hitam, lesi melingkar atau tidak teratur. Bintik-bintik dapat bergabung membentuk bercak besar dan tidak beraturan pada daun. Daun yang terinfeksi berat jatuh sebelum waktunya.
											</p>
											<p>
												<b>Perawatan</b>: Semprot dengan fungisida yang sesuai yang mengandung senyawa tembaga atau amonium kuaterner, Daconil atau Cleary's 3336, atau beberapa fungisida yang lebih bagus seperti Heritage atau Pagaent, dengan mengikuti petunjuk label.
											</p>
											<p>
												<b>Pencegahan</b>: Sanitasi yang baik dengan pergerakan udara yang baik. Kurangi kebasahan daun, air pada daun dapat menyebabkan infeksi. Jika jamur adalah masalah yang berkelanjutan, semprotan fungisida bulanan dapat menawarkan pencegahan yang efektif. </p>
											</div>
										</div>
									</div>
								</div>
							</section>
							<br>
						</div>
					</div>
				</div>
				<div class="my-3 p-3 bg-body rounded shadow-sm">
					<div class="container">
						<div class="row">
							<h3>Image</h3>
							<hr>
							<?php $handle = opendir(dirname(realpath(__FILE__)).'/gambar/Images of Leaf Spots on Orchids/');
							while($file = readdir($handle)){
								if($file !== '.' && $file !== '..'){?>
									<div class="col-12 col-sm-6 col-md-4 image-grid-item">
										<div style="background-image: url('gambar/Images of Leaf Spots on Orchids/<?php echo $file;?>');" class="entry-cover image-grid-cover has-image">
											<a href="gambar/Images of Leaf Spots on Orchids/<?php echo $file;?>" target="_blank" class="image-grid-clickbox"></a>
											<a class="cover-wrapper">Leaf Spots</a>
										</div>
									</div>
									<?php 
								}
							}?>
							<hr>
							<br>
						</div>
					</div>
				</div>
			</main>

		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
	</html>