<style media="screen">
  @media (min-width: 480px) {
    .responsivetb-product {
      width: 200px;
      height: 200px;
      /* background: rgba(255, 0, 0, 0.1)!important; */
    }

    .imgtb-responsive {
      height: 192px !important;
    }
  }

  @media (max-width: 991px) {
    #viewhp {
      display: none !important;
    }

    #viewpc {
      display: block !important;
    }
  }

  @media (min-width: 991px) {
    #viewhp {
      display: block !important;
    }

    #viewpc {
      display: none !important;
    }
  }

  .addtocart {
    background: #fff !important;
    color: #ee3d43 !important;
  }

  .del-favorit {
    background: #ee3d43;
    color: #fff;

    visibility: visible;
    left: auto;
    right: auto;
    transition: all 0.2s;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;


    font-size: 14px;
    padding: 2px 10px 0 10px;
    height: 32px;
    line-height: 30px;
  }

  .del-favorit:hover {
    background: #fff;
    color: #ee3d43;
    border: 1px solid #ee3d43;
  }

  .in-favorit {
    background: #fff;
    color: #ee3d43;

    visibility: visible;
    left: auto;
    right: auto;
    transition: all 0.2s;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;


    font-size: 14px;
    padding: 0 10px 0 10px;
    height: 32px;
    line-height: 30px;
    border: 1px solid #ee3d43;
  }

  .in-favorit:hover {
    background: #ee3d43;
    color: #fff;
    border: 1px solid #ee3d43;
  }

  @media (max-width: 992px) {
    .container-product {
      padding-top: 130px;
    }
  }

  @media (min-width: 992px) {
    .container-product {
      padding-top: 20px;
    }
  }
</style>

<?= $this->load->view('templates/bootstraps/popup'); ?>

<div role="main" class="main">

  <div id="viewhp" class="banners-container">
    <div class="container">
      <div class="row">

        <div class="slider-area">
          <div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'loop': true}">

            <?php foreach ($slideshow as $key => $slides) { ?>

              <!-- <a href="#" class="banner"> -->
              <img src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>">
              <!-- <img style="height:405px;" src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>"> -->
              <!-- </a> -->

            <?php } ?>

            <!-- <a href="#" class="banner">
            <img src="<?= base_url() ?>assets/img/demos/slides/shop8/slide1.jpg" alt="Banner">
          </a> -->

          </div>
        </div>

        <div class="side-area">
          <div class="row">
            <div class="col-md-12 col-sm-4 col-xs-12">

              <?php foreach ($showiklan as $key => $iklan) { ?>

                <a href="#" class="banner">
                  <img src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>">
                  <!-- <img style="height:129px;" src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>"> -->
                </a>

              <?php } ?>
            </div>

            <!-- <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner2.jpg" alt="Banner">
            </a>
          </div>

          <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner3.jpg" alt="Banner">
              <img src="<?= base_url() ?>img/slide/banner-free-ongkir.jpeg" alt="Free Ongkir">
            </a>
          </div> -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="viewpc" class="banners-container">
    <div class="container container-product">
      <div class="row">

        <div class="slider-area">
          <img class="img-responsive" src="<?= base_url() ?>assets/img/slides/1798804720SuperSale_Yellow.jpg" alt="homedepo">
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 normal">

        <div class="tabs home-products-tab">

          <ul class="nav nav-links">
            <li class="active">
              <a href="#KategoriPilihan" data-toggle="tab">kategori Pilihan</a>
            </li>
            <!-- <li>
            <a href="#Diskon" data-toggle="tab">Kejar Diskon</a>
          </li> -->
          </ul>

          <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow " style="padding-top:10px;padding-left:20px;">
            <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Bazar" class="client" style="width:100px!important;">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_bazar_hd.jpeg" alt="kategori homedepo">
              <!-- <font style="padding-left:10px;">Bazar</font> -->
            </a>
            <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Pembiayaan" class="client" style="width:100px!important;">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_pembiayaan_hd.jpeg" alt="kategori homedepo">
              <!-- <font style="">Keuangan</font> -->
            </a>
            <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Tips" class="client" style="width:100px!important;">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_tips_hd.jpeg" alt="kategori homedepo">
              <!-- <font style="">Keuangan</font> -->
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 normal">

        <div class="mb-xlg tabs home-products-tab">

          <ul class="nav nav-links">
            <li class="active">
              <a href="#ListPartner" data-toggle="tab">PARTNER</a>
            </li>
            <!-- <li>
            <a href="#Diskon" data-toggle="tab">Kejar Diskon</a>
          </li> -->
          </ul>

          <!-- <h2 class="slider-title">
            <span class="inline-title">LIST PARTNER</span>
            <span class="line"></span>
          </h2> -->

          <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow ">
            <a href="#" title="Haston" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/haston.png" alt="partner homedepo" style="width:110px!important;margin-top:10px!important;margin-left:30px!important;">
            </a>
            <a href="#" title="Mitra 10" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/mitra10.png" alt="partner homedepo" style="width:100px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="CSA" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/csa.png" alt="partner homedepo" style="width:70px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Kulit Batu" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/kulitbatu.png" alt="partner homedepo" style="width:80px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Tukang Bagus" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/tukangbagus.png" alt="partner homedepo" style="width:50px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Gradana" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/gradana.png" alt="partner homedepo" style="width:70px!important;margin-left:20px!important;">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container" style="padding-top:20px;">
    <div class="row">
      <div class="col-md-12 normal">
        <div class="tabs home-products-tab">
          <ul class="nav nav-links">
            <li class="active">
              <a href="#ProdukTerbaru" data-toggle="tab">Produk Terbaru</a>
            </li>
            <!-- <li>
            <a href="#Diskon" data-toggle="tab">Kejar Diskon</a>
          </li> -->
          </ul>

          <div class="tab-content">

            <div id="ProdukTerbaru" class="tab-pane active">
              <ul class="products-grid columns5">

                <?php
                foreach ($show_product_terbaru as $key => $productterbaru) {
                ?>

                  <li>
                    <div class="product">
                      <figure class="product-image-area responsivetb-product">


                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->id ?>/<?= $productterbaru->nama_file ?>" title="<?= $productterbaru->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?= base_url() ?>assets/img/product/<?= $productterbaru->nama_file ?>" alt="<?= $productterbaru->tag_product ?>">
                          <!-- <img src="<?= base_url() ?>assets/img/product/<?= $productterbaru->nama_file ?>" alt="<?= $productterbaru->tag_product ?>" class="product-hover-image"> -->
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->id ?>/<?= $productterbaru->nama_file ?>" class="product-quickview">
                          <i class="fa fa-share-square-o"></i>
                          <span>Lihat Produk</span>
                        </a>

                        <div class="product-actions">
                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="in-favorit" title="Favoritkan">
                            <i class="fa fa-heart" style="padding-top:8px;"></i>
                          </a>

                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="addtocart" title="Masukan Keranjang">
                            <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                          </a>

                          <!-- <a href="#" class="comparelink" title="Bagikan">
                          <i class="fa fa-link" style="padding-top:8px;"></i>
                        </a> -->
                        </div>


                      </figure>
                      <div class="product-details-area">

                        <h2 class="product-name" style="text-align:left;font-size:10px;font-weight:700;">
                          <a href="#" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building" style="color:#db0c13;"></i>
                            <?= $productterbaru->member ?>
                          </a>
                        </h2>

                        <h2 class="product-name">
                          <a href="<?= base_url() ?>product/detail/<?= $productterbaru->id ?>/<?= $productterbaru->nama_file ?>" title="<?= $productterbaru->nama_product ?>">
                            <?= $productterbaru->nama_product ?>
                          </a>
                        </h2>
                        <!-- <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div> -->

                        <div class="product-price-box">
                          <span class="product-price">
                            Rp. <?= number_format($productterbaru->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php } ?>

              </ul>
            </div>

            <div id="Diskon" class="tab-pane">
              <ul class="products-grid columns4">

                <li>PRODUK KEJAR DISKON</li>

              </ul>
            </div>

          </div>
        </div>

      </div>

      <!-- <aside class="col-md-3 sidebar shop-sidebar">
      <?= $this->load->view('templates/bootstraps/menu_samping'); ?>
    </aside> -->

    </div>
  </div>




  <!-- posisi pop up iklan -->

</div>