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
          <li >
            <a>
              <i class="fa fa-check-circle" aria-hidden="true"></i> Pembayaran</a>
          </li>
          <li class='active'>
            <a href='#step4' data-toggle="tab">  <i class="fa fa-check-circle" aria-hidden="true"></i>  Voucher di kirim</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="step4">
     <section class="voucher">
       <div class="container">
         <div class="row">
           <div class="col-xs-12">
             <div class="wrp-voucher">
               <div class="row">
                 <div class="col-xs-8 col-xs-offset-2">
                   <div class="head">
                     <h3>Selamat Pesananmu Berhasil Kami Proses!</h3>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-xs-12">
                   <div class="hotel-name">
                     <h4>Favehotel Wahid Hasyim</h4>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-xs-10 col-xs-offset-1">
                   <div class="hotel-img">
                     <img src="../assets/img/long-produk.jpg" class="img-responsive" alt="">
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-xs-6 col-xs-offset-3">
                   <div class="final-state">
                     Klik tombol dibawah untuk dapatkan voucher-mu
                   </div>
                   <div class="btn-final-state">
                     <button type="button" class="btn btn-block btn-red btn-lg" data-toggle="modal" data-target="#modalvoucher">KIRIM VOUCHER</button>
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




<!-- Modal -->
<div id="modalvoucher" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body modal-voucher">
        <div class="test">
        <div class="thanks-word">
        Terima Kasih
        </div>
    <div>
Kami sedang mengirimkan voucher-mu. </div><div>
Silakan check kembali email kamu yaa...
</div>

      
      </div>
    </div>
      
    </div>

  </div>
</div>

 


<?php include '../layout/footer.php' ?>