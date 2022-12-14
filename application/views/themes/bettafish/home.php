<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style type="text/css">
        h1 { font-family: Calibri, Helvetica, Arial, sans-serif; }
        
    </style>

<section id="home-section" class="hero bg-dark">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/p-multi.png'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 style="font-family: cursive;">Kami Menjual Ikan Cupang Terbaik</h1>
            <h2 class="subheading mb-4">Harga Terjangkau</h2>
            <p><a href="#products" class="btn btn-info">Beli Sekarang</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/p-biru.png'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-sm-12 ftco-animate text-center">
            <h1 style="font-family: cursive;">Ikan cupang 100% Original </h1>
            <h2 class="subheading mb-4">Harga Terjangkau</h2>
            <p><a href="#products" class="btn btn-info">Beli Sekarang</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section" id="products" style="margin-left: 280px;">
  <div class="container">
    <div class="row no-gutters ftco-services">
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Gratis Ongkir</h3>
            <span>Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
          </div>
        </div>
      </div>
     
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Kualitas Terbaik</h3>
            <span>Kualitas Dari Genetic Terbaik </span>
          </div>
        </div>
      </div>

      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Help & Support</h3>
            <span>24 jam Selalu Online</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading" style="color: black;">Produk Terbaru</span>
        <h2 class="mb-4">BettaFish Store</h2>
        <span class="subheading" style="color: black;">Beli Sekarang !!!</span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php if (count($products) > 0) : ?>
        <?php foreach ($products as $product) : ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="img-prod">
                <img class="img-fluid" src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>" alt="<?php echo $product->name; ?>">
                <?php if ($product->current_discount > 0) : ?>
                  <span class=" btn btn-info"><?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
                <?php endif; ?>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"><?php echo $product->name; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">
                      <?php if ($product->current_discount > 0) : ?>
                        <span class="mr-2 price-dc">Rp <?php echo format_rupiah($product->price); ?></span><span class="price-sale">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                      <?php else : ?>
                        <span class="mr-2"><span class="price-sale">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                        <?php endif; ?>
                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center"  >
                      <span><i class="ion-ios-menu btn btn-info" ></i></span>
                    </a>
                    <a href="#"  class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1" data-sku="<?php echo $product->sku; ?>" data-name="<?php echo $product->name; ?>" data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>" data-id="<?php echo $product->id; ?>">
                      <span><i class="ion-ios-cart btn btn-info"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="ftco-section img" style="background-image: url(<?php echo get_theme_uri('images/crowntaill-red.png'); ?>);">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading" style="color: blue;">Produk dengan Harga Terbaik</span>
        <h2 class="mb-4" style="color: blue;">Deal of the day</h2>
        <p><?php echo $best_deal->description; ?></p>
        <h3><a href="#" style="color: blue;"><?php echo $best_deal->name; ?></a></h3>
        <span class="price" style="color: blue;">Rp <?php echo format_rupiah($best_deal->price); ?> <a href="#" style="color: blue;">sekarang hanya Rp <?php echo format_rupiah($best_deal->price - $best_deal->current_discount); ?></a></span>
        <div id="timer" class="d-flex mt-5">
          <div class="time pl-3">
            <a href="#" class="btn btn-info add-cart" data-sku="<?php echo $best_deal->sku; ?>" data-name="<?php echo $best_deal->name; ?>" data-price="<?php echo ($best_deal->current_discount > 0) ? ($best_deal->price - $best_deal->current_discount) : $best_deal->price; ?>" data-id="<?php echo $best_deal->id; ?>"><i class="ion-ios-cart"></i></a>
          </div>
          <div class="time pl-3">
            <a class="btn btn-info" href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
              <span><i class="ion-ios-menu text-white"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section  ftco-animate text-center">
        <span class="subheading" style="color: blue;">Testimony</span>
        <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <?php if (count($reviews) > 0) : ?>
            <?php foreach ($reviews as $review) : ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5 " style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
                    <span class="quote d-flex align-items-center justify-content-center ">
                      <i class="icon-quote-left "></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
                    <p class="name btn btn-primary"><?php echo $review->name; ?></p>
                    <br><br>
                    
                    <span class="position btn btn-info"><?php echo get_formatted_date($review->review_date); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>