<?php include '../layout/header.php' ?>
 
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
			<div class="col-xs-12">
				<h3>Favehotel Wahid Hasyim</h3>
				<p>
				<?php
				for ($i=0; $i < 5; $i++) {  
					echo "<img src='../assets/img/star.png' alt='star'>";
				}
				?>
				</p>
				<p>Podomoro City Jl. Let. Jend S Parman, Kav 28, Jakarta Barat, Tanjung Duren Selatan, Grogol Petamburan, Jakarta, Indonesia, 11470</p>
			</div>
		</div>
	</div>
</section>

<?php include '../layout/footer.php' ?> 