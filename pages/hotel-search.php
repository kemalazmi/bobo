<?php include '../layout/header.php' ?>


<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
<section class="mainbanner bgimage">
 
</section> 


<section class="hotel-search">
	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<h5 class="judul">Hasil pencarian hotel  di Jakarta, Indonesia</h5>
				<h5> 23 Jan 2018 - 24 Jan 2018 ( 1 malam )  I  1 Kamar  I  2 Dewasa, 0 Anak</h5>
			</div>
			<div class="col-xs-3">
				<div class="btn-pencarian">
					<a href="#" class="btn-blue btn btn-lg">GANTI PENCARIAN</a>
				</div>
			</div>
		</div>
		<div class="row" style="display:none;">
			<div class="col-xs-12">
				 <?php include '../layout/searchbox.php' ?>
			</div>
		</div>
	</div>
</section>

<section class="content-hotel-list">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				
<?php include '../partials/filter-hotel.php' ?>
			</div>

			<div class="col-xs-9">
				
<section class="list-hotel"> 

	<div class="row">
		<div class="col-xs-12">
			<div class="download-aplikasi text-center">
					<i class="fa fa-cloud-download" aria-hidden="true"></i> <span> Download aplikasi Boboyuk untuk dapatkan harga special!!!</span>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="spesial-hr">
				<hr>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-xs-12">
				 
					<?php
						for ($i=0; $i < 7; $i++) { 
					?>
					<div class="bungkus-rekomendasi">
						<div class="row">
							<div class="col-xs-4">
								<div class="gambar-rekomendasi">
									<img class="img-responsive" src="../assets/img/hotel-rekomendasi.jpg" alt="hotel">
								</div> 
							</div>
							<div class="col-xs-4">
								<div class="nama-hotel">
									Favehotel Wahid Hasyim
								</div>
								<i class="star5"></i>

								<div class="harga-mulai"> 
									<strike>IDR 800,000</strike>
										<div class="harga">
											IDR 585,000
										</div>  
									<div class="pajak">Sudah termasuk pajak & servis</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="rating">
									<div class="circle">
										7.0
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="button-pesan">
									<button type="button" class="btn btn-red btn-block">LIHAT</button>
								</div>
								<div class="clearfix"></div>
							</div>
						</div> 
					</div> 
					<?php 
						}
					?> 


				 
					 
					
			</div> 
	</div>
</section>
			</div>
		</div>
	</div>
</section>



<?php include '../layout/footer.php' ?>
