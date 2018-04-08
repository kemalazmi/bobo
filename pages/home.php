<?php include '../layout/header.php' ?>


<section class="mainbanner bgimage">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="text-banner text-center">
          <h3>Pesan Hotel Online, Murah & Banyak Promo</h3> 
          <h4>Tersedia lebih dari 1.150.000 hotel di dunia</h4> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?php include '../layout/searchbox.php' ?>
      </div>
    </div> 
  </div>
</section> 
<section class="cara-memesan">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="content-memesan">
          <h2> Booking Hotel Online, Harga Murah & Banyak Promo di boboyuk</h2>
          <p>
            Kami terus bekerja keras untuk memberikan Anda harga terbaik untuk hotel, resort, rumah,
            <br> dan akomodasi liburan lainnya. Ingin bertualang ala backpacker, menikmati kemewahan
            <br> hotel bintang 5, atau tinggal di villa bersama keluarga? Semua bisa Anda lakukan
            <br> dengan booking hotel online melalui boboyuk!</p> 
          <a href="">
            Baca Selengkapnya</a> 
        </div>
      </div>
    </div>
  </div>
</section> 
<section class="tujuan-populer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="heading-title">
          <h2>
           tujuan populer
          </h2>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col-xs-3">
        <div class="wrap-populer">
          <div class="pict-populer view view-efect">
            <img src="../assets/img/sample-produk.jpg" />
            <div class="mask">
              <div class="content-text">
                <h4>Jakarta</h4>
                <div>118 Hotel Tersedia</div>
                <div>
                  <a href="" class="btn btn-transparant">Lihat</a>
                </div>
              </div> 
            </div>
          </div>
          <div class="clearfix"></div> 
        </div>
      </div>
      <div class="col-xs-6">
        <div class="wrap-populer">
          <div class="pict-populer view view-efect">
            <img src="../assets/img/sample-produk2.jpg" />
            <div class="mask">
              <div class="content-text">
                <h4>Bandung</h4>
                <div>118 Hotel Tersedia</div>
                <div>
                  <a href="" class="btn btn-transparant">Lihat</a>
                </div>
              </div>

            </div>
          </div>
          <div class="clearfix"></div> 
        </div>
      </div>
      <div class="col-xs-3">
        <div class="wrap-populer">
          <div class="pict-populer view view-efect">
            <img src="../assets/img/sample-produk.jpg" />
            <div class="mask">
              <div class="content-text">
                <h4>Jakarta</h4>
                <div>118 Hotel Tersedia</div>
                <div>
                  <a href="" class="btn btn-transparant">Lihat</a>
                </div>
              </div> 
            </div>
          </div>
          <div class="clearfix"></div> 
        </div>
      </div> 
    </div>
    <div class="row"> 
      <?php 
$x = 1;  
while($x < 5) {
    echo '   <div class="col-xs-3">
        <div class="wrap-populer">
                <div class="pict-populer view view-efect">
                    <img src="../assets/img/sample-produk.jpg" />
                    <div class="mask"> 
                          <div class="content-text">
                              <h4>Jakarta</h4>
                    <div>118 Hotel Tersedia</div>
                    <div>
                      <a href="" class="btn btn-transparant">Lihat</a>
                    </div> 
                      </div>
                
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
      </div>';
    $x++;
} 
?> 
    </div>

    <div class="row">
      <div class="col-xs-12">
        <hr>
      </div>
    </div>
  </div>
</section>



<?php include '../partials/tujuan-populer-lainnya.php' ?>

<?php include '../partials/download-app.php' ?>

<section class="whyus">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
          <div class="heading-title">
          <h2>
         Mengapa Memesan di boboyuk?
          </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
        <div class="point1">
          <i class="icon-trans"></i>
          <div class="exp">
            <h3>
            Harga Transparan
            </h3>
Semua harga hotel sudah termasuk semua biaya tax dan servis. Tidak perlu lagi kuatir ada biaya tambahan waktu sudah mau selesai booking.
          </div>
        </div>
      </div>
      <div class="col-xs-3">
        <div class="point2">
          <i class="icon-payment"></i>
          <div class="exp">
            <h3>Beragam Pilihan Pembayaran</h3>

Kamu bisa melakukan pembayaran melalui kartu kredit, bank transfer & debit.
          </div>
        </div>
      </div>
        <div class="col-xs-3">
        <div class="point3">
          <i class="icon-offer"></i>
          <div class="exp">
            <h3>Harga Pasti Murah</h3>

Tanpa biaya pemesanan,harga Pasti paling murah 
          </div>
        </div>
      </div>
        <div class="col-xs-3">
        <div class="point4">
          <i class="icon-harga"></i>
          <div class="exp">
            <h3>Banyak Penawaran Menarik</h3>

Jangan lewatkan kesempatan menarik disetiap pemesanan di boboyuk.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include '../layout/footer.php' ?>