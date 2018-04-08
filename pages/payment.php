<?php include '../layout/header.php' ?>


<section class="wizard">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class='nav nav-wizard nav-wizard-backnav'>
          <li>
            <a>
              <i class="fa fa-check-circle" aria-hidden="true"></i> Masukan informasi pesanan</a>
          </li>
          <li>
            <a>
              <i class="fa fa-check-circle" aria-hidden="true"></i> Konfirmasi</a>
          </li>
          <li class='active'>
            <a href='#step3' data-toggle="tab">
              <i class="fa fa-check-circle" aria-hidden="true"></i> Pembayaran</a>
          </li>
          <li>
            <a>Voucher</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="step3">
    <section class="pembayaran">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading-title">
              <h3>Pilih Pembayaran</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="wrap-countdown">
              Selesaikan pembayaran dalam
              <span id="hms" class="">00 : 19 :00</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="payment-method">
              <div class="row">
                <div class="col-xs-4">
                  <ul class="nav nav-tabs nav-stacked nav-payment">
                    <li>
                      <a data-toggle="tab" href="#trf">Transfer</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#cc">Kartu Kredit</a>
                    </li>
                    <li class="active">
                      <a data-toggle="tab" href="#atm">ATM</a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#mandiridebit">Mandiri Debit</a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#klibca">Klik BCA</a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#mandiricp">Mandiri Clickpay</a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#indomart">Indomart</a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#alfamart">Alfamart</a>
                    </li>
                  </ul>
                </div>
                <div class="col-xs-8">
                  <div class="row">
                    <div class="tab-content">
                      <?php include '../partials/payment-transfer.php' ?>
                      <?php include '../partials/payment-cc.php' ?>
                      <?php include '../partials/payment-atm.php' ?>
                      <?php include '../partials/payment-indomart.php' ?>
                      <?php include '../partials/payment-alfamart.php' ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xs-4"> 
            <div class="booking-order">
              <div class="row">
                <div class="col-xs-12">
                  <div class="booking-code">
                    <h4>
                      Kode Booking
                    </h4>
                    <div>255023446</div>
                  </div>
                  <div class="booking-reser">
                    <h4>Data Tamu</h4>
                    <div class="row">
                      <div class="col-xs-3">Nama</div>
                      <div class="col-xs-1">:</div>
                      <div class="col-xs-7">Leonardo Wilis</div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3">Email</div>
                      <div class="col-xs-1">:</div>
                      <div class="col-xs-7">Leonardo.Wilis@gmail.com</div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3">Telepon</div>
                      <div class="col-xs-1">:</div>
                      <div class="col-xs-7">087889999912</div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12">
                        <hr>
                      </div>
                    </div>
                  </div>

                  <div class="detail-reser">
                    <div class="row">
                      <div class="col-xs-12">
                        <h4>Rincian Pesanan</h4>
                        <ul>
                          <li>Favehotel Wahid Hasyim</li>
                          <li>1 Kamar Superior , Room Only</li>
                          <li>Rab, 23 Jan 2018 - Kam, 24 Jan 2018</li>
                          <li> 1 Malam</li>
                          <li>
                            <span class="text-danger"> Tidak termasuk sarapan</span>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class="warning-reser">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="text-danger">
                          NON-REFUNDABLE
                          <div>
                            Pemesanan tidak dapat dibatalkan dan tidak dapat diubah.</div>
                        </div>
                      </div>
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
</div>



 

<?php include '../layout/footer.php' ?>