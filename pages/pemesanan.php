<?php include '../layout/header.php' ?> 

 
<section class="wizard">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			   <ul class='nav nav-wizard nav-wizard-backnav'>
				    <li  class='active'> <a href='#step1' data-toggle="tab"><i class="fa fa-check-circle" aria-hidden="true"></i> Step 1 - Completed</a></li>
				    <li><a href='#step2' data-toggle="tab">Step 2 - Completed</a></li>
				    <li><a href='#step3' data-toggle="tab">Step 3 - Active</a></li> 
				    <li><a>Step 4 - Not Yet Reached</a></li>
				  </ul>
		</div>
		</div>
		
	</div>
</section>
<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="step1">
							<section class="pemesanan">
	<div class="container">
		<div class="row">
			<div class="col-xs-8"> 
				<h3>
					Rincian Pemesanan
				</h3>

				<div class="wrap-box">
					<div class="row">
						<div class="col-xs-3 img-wrp">
							<img src="../assets/img/hotel-rekomendasi.jpg" alt="" class="img-responsive">
						</div>
						<div class="col-xs-9">
							<div class="detail-hotel">
							<h4>Favehotel Wahid Hasyim</h4>
							<div>Podomoro City Jl. Let. Jend S Parman, Kav 28, Jakarta Barat,</div>
							<hr>
							<div class="row">
								<div class="col-xs-6">
							<ul>		
								<li>
									<div class="cat"> Check-in</div>
									<div class="divider"> : </div>
									<div class="data">Rab, 23 Jan 2017</div> 
								</li>
								<li>
									<div class="cat"> Check-Out</div>
									<div class="divider"> : </div>
									<div class="data">Rab, 23 Jan 2017</div> 
								</li>
								<li>
									<div class="cat"> Durasi</div>
									<div class="divider"> : </div>
									<div class="data">2 Malam</div> 
								</li>
								<li>
									<div class="cat"> Tipe kamar</div>
									<div class="divider"> : </div>
									<div class="data">Superior Room Only</div> 
								</li> 

								
							</ul>
						</div>
								<div class="col-xs-6">
									
							<ul>
							<li>
									<div class="cat2"> Jumlah Kamar</div>
									<div class="divider"> : </div>
									<div class="data">1 Kamar</div> 
								</li> 
								<li>
									<div class="cat2"> Jumlah Tamu</div>
									<div class="divider"> : </div>
									<div class="data"> 2 Dewasa, 1 Anak</div> 
								</li> 		 
								<li><span class="text-danger">Tidak Termasuk Sarapan</span></li>

								
							</ul>
								</div>
							</div>

							</div>
						</div>
					</div>
				</div>
				
				<div class="form-pemesanan">
						<h3>
					Data Pemesan
				</h3>
				<div class="wrap-box-pemesan">
					<div class="">
						<span class="text-danger">
							Untuk mempermudah komunikasi, pastikan data yang Anda masukkan benar dan masih aktif.
						</span>
					</div>
					<div class="dapem">
						<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="text-left control-label col-xs-2" for="">Nama:</label>
    <div class="col-xs-10">
      <input type="text" class="form-control" id="" >
    </div>
  </div>
  <div class="form-group">
    <label class="text-left control-label col-xs-3" for="">Alamat Email:</label>
    <div class="col-xs-3"> 
      <input type="email" class="form-control" id="" placeholder="">
    </div>
      <label class="text-left control-label col-xs-3 " for="">No. Handaphone:</label>
    <div class="col-xs-3"> 
      <input type="text" class="form-control" id="" placeholder="">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-xs-offset-2 col-xs-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
					</div>
				</div>
				</div>
			</div>
			<div class="col-xs-4"> 
			</div>
		</div>
	</div>
</section> 
						  </div>
						<div class="tab-pane fade" id="step2">
						  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
						</div>
						<div class="tab-pane fade " id="step3">
						  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
						</div>
						</div> 

					

	    
    </div>
<?php include '../layout/footer.php' ?>
