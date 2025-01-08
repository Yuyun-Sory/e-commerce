@extends('layout.home')

@section('content')

      <!-- Hero Slider -->
      <section class="hero-wrap text-center relative">
          <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
              @foreach ($sliders as $slider)
              <div class="hero-slide overlay" style="background-image:url(/uploads/{{$slider->gambar}})">
                  <div class="container">
                      <div class="hero-holder">
                          <div class="hero-message">
                              <h1 class="hero-title nocaps">{{$slider->nama_slider}}</h1>
                              <h2 class="hero-subtitle lines">{{$slider->deskripsi}}</h2>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </section> 
      <!-- end hero slider -->

      <!-- Promo Banners -->
      <section class="section-wrap promo-banners pb-30">
          <div class="container">
              <div class="row">
                <h1 div align="center">Kategori</h1>

                  @foreach ($categories as $category)
                  <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
                      <a href="/">
                          <img src="/uploads/{{$category->gambar}}" alt="">
                          <div class="overlay"></div>
                          <div class="promo-inner valign">
                              <h2>{{$category->nama_kategori}}</h2>
                              <span>{{$category->deskripsi}}</span>
                          </div>
                      </a>
                  </div>
                  @endforeach
              </div>
          </div>
      </section> 
      <!-- end promo banners -->


      <!-- Trendy Products -->
<section class="section-wrap-sm new-arrivals pb-50">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <span class="subheading">Hot items of this year</span>
                <h2 class="heading bottom-line">
                    trendy products
                </h2>
            </div>
        </div>

        <div class="row items-grid">
            @foreach ($products as $product)
            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/#">
                        <img src="/uploads/{{$product->gambar}}" alt="" style="width: 100%; height: 350px; object-fit: cover;">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a
                                        href="/products/{{$product->id_subkategori}}">{{$product->subcategory->nama_subkategori}}</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/product/{{$product->id}}">{{$product->nama_barang}}</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">Rp. {{number_format($product->harga)}}</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/product/{{$product->id}}" class="btn btn-md btn-color">
                                        <span>More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
    </div>
</section> <!-- end trendy products -->

      


@endsection
