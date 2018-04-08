<?php include '../layout/header.php' ?>


<section class="wizard">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class='nav nav-wizard nav-wizard-backnav'>
          <li class='active'>
            <a href='#step1' data-toggle="tab">
              <i class="fa fa-check-circle" aria-hidden="true"></i> Masukan informasi pesanan</a>
          </li>
          <li>
            <a href='#step2' data-toggle="tab">Step 2 - Completed</a>
          </li>
          <li>
            <a href='#step3' data-toggle="tab">Step 3 - Active</a>
          </li>
          <li>
            <a>Step 4 - Not Yet Reached</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade" id="step1">
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
                          <li>
                            <span class="text-danger">Tidak Termasuk Sarapan</span>
                          </li>


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
                <div class="notif">
                  <span class="text-danger">
                    Untuk mempermudah komunikasi, pastikan data yang Anda masukkan benar dan masih aktif.
                  </span>
                </div>
                <div class="dapem">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="text-left control-label col-xs-2" for="">Nama:</label>
                      <div class="col-xs-10">
                        <input type="text" class="form-control" id="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="text-left control-label col-xs-2" for="">Email:</label>
                      <div class="col-xs-4">
                        <input type="email" class="form-control" id="" placeholder="">
                      </div>
                      <label class="text-left control-label col-xs-2 " for="">No. Handphone:</label>
                      <div class="col-xs-4">
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                    </div>
                    <h4>
                      Detail Tamu
                    </h4>
                    <div class="form-group">
                      <label class="text-left control-label col-xs-2" for="">Nama:</label>
                      <div class="col-xs-10">
                        <input type="text" class="form-control" id="">
                      </div>
                    </div>

                    <div class="notif-blue">
                      <div>Permintaan Khusus</div>
                      <p> Pemenuhan permintaan khusus bergantung pada ketersediaan saat check-in.</p>
                    </div>

                    <div class="fasilitas-hotel">
                      <div class="form-group">
                        <label class="text-left control-label col-xs-2" for="">Ranjang :</label>
                        <div class="col-xs-3">
                          <div class="radio">
                            <label>
                              <input type="radio" name="optradio">Ranjang Twin</label>
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="radio">
                            <label>
                              <input type="radio" name="optradio">Ranjang Besar</label>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="opsional">
                      <div class="row">
                        <div class="col-xs-4">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Check - in lebih awal
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Lantai atas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Kamar bebas asap rokok
                            </label>
                          </div>

                        </div>
                        <div class="col-xs-4">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Tiba - tiba datang terlambat
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Kamar bersebelahan
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value=""> Kamar merokok
                            </label>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="opsional2">
                      <p>Jika ada permintaan lain yang belum disebutkan di atas, mohon tuliskan permintaan Anda dalam bahasa
                        Inggris atau bahasa lokal di lokasi hotel pilihan Anda berada</p>

                      <div>
                        <textarea class="form-control" rows="4"></textarea>
                      </div>

                    </div>


                    <div class="cancel-snk">
                      <h4>Ketentuan Pembatalan</h4>
                      <p class="text-danger">NON-REFUNDABLE
                        <br> Pemesanan tidak dapat dibatalkan dan tidak dapat diubah.</p>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="next-step">
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 text-center">
                  <div>Dengan mengeklik tombol di bawah, Anda menyetujui
                    <a href="">Syarat dan Ketentuan</a> serta
                    <a href=""> Kebijakan Privasi </a> dari boboyuk
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-xs-6 col-xs-offset-3">

                  <div class="btn-next">
                    <a href="" class="btn btn-red btn-lg btn-block"> Lanjutkan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="detail-order">
              <div class="wrap-box">
                <div class="row">
                  <div class="col-xs-6 text">Total Pesanan</div>

                  <div class="col-xs-6 price">IDR 15.000.000</div>
                </div>
                <div class="row">
                  <div class="col-xs-6 text">Pajak &amp; Biaya lain</div>

                  <div class="col-xs-6 price"> Termasuk</div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="total">
                      <h4>TOTAL PEMBYARAN</h4>
                      <div class="tprice">IDR 585,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="tab-pane fade active in" id="step2">
    <?php include '../pages/konfirmasi.php' ?>
  </div>
  <div class="tab-pane fade " id="step3">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi
      farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy
      salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
      banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably
      haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
  </div>
</div>




</div>
<?php include '../layout/footer.php' ?>