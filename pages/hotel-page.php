<?php include '../layout/header.php' ?>

<script type="text/javascript">
$(document).ready(function() {
   $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 4
});
});
</script>

<section class="hotel-search">
	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<h5 class="judul">Jakarta Barat, Indonesia</h5>
				<h5>23 Jan 2018 - 24 Jan 2018 ( 1 malam )  I  1 Kamar  I  2 Dewasa, 0 Anak</h5>
			</div>
			<div class="col-xs-3">
				<div class="btn-pencarian">
					<a href="#" class="btn-blue btn btn-lg">GANTI PENCARIAN</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 hotel-pilihan">
				<h3>Favehotel Wahid Hasyim</h3>
				<p>
				<?php
				for ($i=0; $i < 5; $i++) {  
					echo "<img src='../assets/img/star.png' alt='star'>";
				}
				?>
				</p>
				<p>Podomoro City Jl. Let. Jend S Parman, Kav 28, Jakarta Barat, Tanjung Duren Selatan, Grogol Petamburan, Jakarta, Indonesia, 11470</p>
				<hr>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				 <div class="slider-hotel">
				    <ul id="lightSlider">
				        <li data-thumb="../assets/img/hotel-1.jpg">
				            <img src="../assets/img/hotel-1.jpg" />
				        </li>
				        <li data-thumb="../assets/img/hotel-2.jpg">
				            <img src="../assets/img/hotel-2.jpg" />
				        </li>
				        <li data-thumb="../assets/img/hotel-3.jpg">
				            <img src="../assets/img/hotel-3.jpg" />
				        </li>
				        <li data-thumb="../assets/img/hotel-4.jpg">
				            <img src="../assets/img/hotel-4.jpg" />
				        </li>
				        <li data-thumb="../assets/img/hotel-5.jpg">
				            <img src="../assets/img/hotel-5.jpg" />
				        </li>
				    </ul>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="fasilitas">
					<div class="judulfasilitas">
						Fasilitas yang di dapat
					</div>
					<div class="row">
						<ul>
							<li>
								<i class="icon-parking"></i>Gratis Parkir
							</li>
							<li>
								<i class="icon-wifi"></i>Gratis Wifi
							</li>
							<li>
								<i class="icon-restoran"></i>Restoran
							</li>
							<li>
								<i class="icon-kolamrenang"></i>Kolam Renang
							</li>
							<li>
								<i class="icon-cs"></i>Customer Service 24 Jam
							</li>
							<li>
								<i class="icon-transport"></i>Antar Jemput Bandara
							</li>
						</ul>
					</div>
				</div> 
				<div class="tempat-menarik">
					<div class="judulfasilitas">
						Tempat menarik terdekat
					</div>
					<div class="row">
						<ol>
							<li>Sarinah Mall (0.25 km)</li>
						 
							<li>Sabang Street (0.15 km)</li>
					 
							<li>Embassy of Spain (0.52 km)</li>
						 
							<li>Embassy of Japan (0.53 km)</li>
						</ol>
					</div>
				</div> 
				<div class="harga-mulai">
					<div class="judulfasilitas">
						Harga Mulai dari
					</div>  
					<strike>IDR 800,000</strike>
					<div class="harga">
						IDR 585,000
					</div> 
					<div class="button-pesan">
						<button type="button" class="btn btn-red btn-block">PESAN SEKARANG</button>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<hr>
			</div>
		</div>
	</div>
</section>

<section class="room">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="download-aplikasi text-center">
					<i class="fa fa-cloud-download" aria-hidden="true"></i> <span> Download aplikasi Boboyuk untuk dapatkan harga special!!!</span>
				</div> 
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="hotel-room"> 
					<?php
					for ($i=0; $i < 3; $i++) { 
					?>
						<div class="bungkus-room">
						 			<div class="col-xs-12">
						 				<div class="class-room">Superior Room Only</div>
										<div class="bed">1 Ranjang double</div>
						 			</div>
						 			<div class="col-xs-4">
						 				<ul>
											<li>
												<i class="icon-refund"></i><span>Tidak Dapat dibatalkan</span>
											</li>
											<li>
												<i class="icon-wifi"></i>Gratis Wifi
											</li>
											<li>
												<i class="icon-restoran"></i>Sarapan Gratis
											</li> 
										</ul>
						 			</div>
						 			<div class="col-xs-4">
						 				<div class="harga-mulai"> 
											<strike>IDR 800,000</strike><span> / per malam</span> 
											<div class="harga">
												IDR 585,000
											</div>  
											<div class="pajak">Sudah termasuk pajak & servis</div>
										</div>
						 			</div>
						 			<div class="col-xs-4">
						 				<div class="button-pesan">
											<button type="button" class="btn btn-red btn-block">PESAN SEKARANG</button>
										</div>
						 			</div> 
						 			<div class="col-xs-12">
						 				<hr>
						 			</div>
						 		</div>
					<?php 
					}
					?>
				</div>
			</div>
			<div class="col-xs-12">
				<hr>
			</div>
		</div>
	</div>
</section>

<section class="rekomendasi">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="bungkus-rekomendasi">
					<div class="row">
						<div class="col-xs-12">
							<div class="hotel-rekomen">
								Rekomendasi Hotel Lainnya :
							</div> 
						</div>
					</div> 
					<div class="row">
						<div class="col-xs-4">
							<img src="../assets/img/hotel-rekomendasi.jpg" alt="hotel">
						</div>
						<div class="col-xs-4">
							<div class="nama-hotel">
								Favehotel Wahid Hasyim
							</div>
							<i class="star5"></i>
						</div>
						<div class="col-xs-4">
							<div class="button-pesan">
											<button type="button" class="btn btn-red btn-block">PESAN SEKARANG</button>
										</div>
						</div>
					</div> 
				</div> 
				 
					 
					
			</div>
		</div>
	</div>
</section>



<?php include '../layout/footer.php' ?> 
