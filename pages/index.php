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
        <div class="searchbox">
          <div class="hotel-search">
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="fa fa-search"></i>
                <select class="form-control input-lg" style="width:100%">
                  <option value="M">Select Hotel</option>
                </select>
              </div>
            </div>
          </div>
          <div class="checkin">
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="fa fa-calendar"></i>
                <input type="text" class="form-control datepicker input-lg" placeholder="Check Out" />
              </div>
            </div>
          </div>

          <div class="checkout">
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="fa fa-calendar"></i>
                <input type="text" class="form-control datepicker input-lg" placeholder="Check Out" />
              </div>
            </div>
          </div>
          <div class="user">
          	<div class="form-group"> 
        <div class="inner-addon left-addon dropdown">
         <i class="fa fa-user"></i>
         <button class="btn btn-default dropdown-toggle input-lg " data-toggle="dropdown"> 1 Tamu </button>
         <ul class="dropdown-menu DropdownPoR">
          <li>
           <div class="form-group">
            <label for="sel1">Dewasa :</label>
            <select class="form-control" id="sel1">
             <option>1</option> 
            </select>
           </div>
          </li>
          <li>
           <div class="form-group">
            <label for="sel1">Anak :</label>
            <select class="form-control" id="sel1">
             <option>1</option> 
            </select>
           </div>
          </li>
          <li>
           <div class="form-group">
            <label for="sel1">Bayi :</label>
            <select class="form-control" id="sel1">
             <option>1</option> 
            </select>
           </div>
          </li>
         </ul>
        </div>
       </div>
          </div>
          <div class="user">
            <div class="form-group">
              <div class="dropdown">
                <button class="btn dropdown-toggle btn-lg" type="button" data-toggle="dropdown">

                  <i class="fa fa-user"></i>
                  1 Tamu , 3 Kamar
                </button>
                <ul class="dropdown-menu DropdownPoR">
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" class="form-control" placeholder="1 Kamar">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                        <!-- /input-group -->
                      </div>
                      <!-- /.col-lg-6 -->

                    </div>
                    <!-- /.row -->

                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" class="form-control" placeholder="1 Dewasa">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                        <!-- /input-group -->
                      </div>
                      <!-- /.col-lg-6 -->

                    </div>
                    <!-- /.row -->
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" class="form-control" placeholder="1 Anak">
                          <span class="input-group-btn">
                            <button class="btn btn-blue" type="button">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                        <!-- /input-group -->
                      </div>
                      <!-- /.col-lg-6 -->

                    </div>
                    <!-- /.row -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
	  
<section class="cara-memesan"> 
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="text-center"> 
				<h2>Cara Memesan</h2>
				</div>
			</div>
		</div>
	</div>


	
</section>

<?php include '../layout/footer.php' ?> 
