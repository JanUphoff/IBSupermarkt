@extends('layouts.app')

@section('title', 'Shop Grid')

@section('content')

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="shop-sidebar">
          <!-- Single Widget -->
          <div class="single-widget category">
            <h3 class="title">Kategorien</h3>
            <ul class="categor-list">
              <li><a href="#">T-Shirts</a></li>
              <li><a href="#">Jacken</a></li>
              <li><a href="#">Jeans</a></li>
              <li><a href="#">Sweatshirts</a></li>
              <li><a href="#">Hosen</a></li>
              <li><a href="#">Strickwaren</a></li>
              <li><a href="#">Accessoires</a></li>
            </ul>
          </div>
          <!--/ End Single Widget -->
          <!-- Shop By Price -->
          <div class="single-widget range">
            <h3 class="title">Nach Preis einkaufen</h3>
            <div class="price-filter">
              <div class="price-filter-inner">
                <div id="slider-range"></div>
                <div class="price_slider_amount">
                  <div class="label-input">
                    <span>Bereich:</span><input type="text" id="amount" name="price" placeholder="Preis hinzufügen" />
                  </div>
                </div>
              </div>
            </div>
            <ul class="check-box-list"></ul>
            <li>
              <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox" />$20 -
                $50<span class="count">(3)</span></label>
            </li>
            <li>
              <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" />$50 -
                $100<span class="count">(5)</span></label>
            </li>
            <li>
              <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox" />$100 -
                $250<span class="count">(8)</span></label>
            </li>
            </ul>
          </div>
          <!--/ End Shop By Price -->
          <!-- Single Widget -->
          <div class="single-widget recent-post">
            <h3 class="title">Neuester Beitrag</h3>
            <!-- Single Post -->
            <div class="single-post first">
              <div class="image">
                <img src="https://placehold.co/75x75" alt="#" />
              </div>
              <div class="content">
                <h5><a href="#">Mädchenkleid</a></h5>
                <p class="price">$99.50</p>
                <ul class="reviews">
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                </ul>
              </div>
            </div>
            <!-- End Single Post -->
            <!-- Single Post -->
            <div class="single-post first">
              <div class="image">
                <img src="https://placehold.co/75x75" alt="#" />
              </div>
              <div class="content">
                <h5><a href="#">Damenbekleidung</a></h5>
                <p class="price">$99.50</p>
                <ul class="reviews">
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                </ul>
              </div>
            </div>
            <!-- End Single Post -->
            <!-- Single Post -->
            <div class="single-post first">
              <div class="image">
                <img src="https://placehold.co/75x75" alt="#" />
              </div>
              <div class="content">
                <h5><a href="#">Herren T-Shirt</a></h5>
                <p class="price">$99.50</p>
                <ul class="reviews">
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                  <li class="yellow"><i class="ti-star"></i></li>
                </ul>
              </div>
            </div>
            <!-- End Single Post -->
          </div>
          <!--/ End Single Widget -->
          <!-- Single Widget -->
          <div class="single-widget category">
            <h3 class="title">Hersteller</h3>
            <ul class="categor-list">
              <li><a href="#">Forever</a></li>
              <li><a href="#">Giordano</a></li>
              <li><a href="#">Abercrombie</a></li>
              <li><a href="#">Ecko United</a></li>
              <li><a href="#">Zara</a></li>
            </ul>
          </div>
          <!--/ End Single Widget -->
        </div>
      </div>
      <div class="col-lg-9 col-md-8 col-12">
        <div class="row">
          <div class="col-12">
            <!-- Shop Top -->
            <div class="shop-top">
              <div class="shop-shorter">
                <div class="single-shorter">
                  <label>Zeigen :</label>
                  <select>
                    <option selected="selected">09</option>
                    <option>15</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
                <div class="single-shorter">
                  <label>Sortieren nach :</label>
                  <select>
                    <option selected="selected">Name</option>
                    <option>Preis</option>
                    <option>Größe</option>
                  </select>
                </div>
              </div>
              <ul class="view-mode">
                <li class="active">
                  <a href="{{ route('shop-grid') }}"><i class="fa fa-th-large"></i></a>
                </li>
                <li>
                  <a><i class="fa fa-th-list"></i></a>
                </li>
              </ul>
            </div>
            <!--/ End Shop Top -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Schnellansicht" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wunschliste" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Vergleichen" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="In den Warenkorb" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Frauen Heiße Kollektion</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Awesome Pink Show</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Awesome Bags Collection</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                  <span class="new">Neu</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Women Pant Collectons</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Awesome Bags Collection</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                  <span class="price-dec">30% Off</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Awesome Cap For Women</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Polo Dress For Women</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                  <span class="out-of-stock">Hot</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Black Sunglass For Women</a>
                </h3>
                <div class="product-price">
                  <span class="old">$60.00</span>
                  <span>$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="{{ route('shop-single') }}">
                  <img class="default-img" src="https://placehold.co/550x750" alt="#" />
                  <img class="hover-img" src="https://placehold.co/550x750" alt="#" />
                  <span class="new">Neu</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                        class="ti-eye"></i><span>Schnellansicht</span></a>
                    <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Zur Wunschliste hinzufügen</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Zum Vergleich
                        hinzufügen</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">In den Warenkorb</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3>
                  <a href="{{ route('shop-single') }}">Women Pant Collectons</a>
                </h3>
                <div class="product-price">
                  <span>$29.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ End Product Style 1  -->

<!-- Include Newsletter -->
@include('partials.newsletter')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="ti-close" aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row no-gutters">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <!-- Product Slider -->
            <div class="product-gallery">
              <div class="quickview-slider-active">
                <div class="single-slider">
                  <img src="https://placehold.co/569x528" alt="#" />
                </div>
                <div class="single-slider">
                  <img src="https://placehold.co/569x528" alt="#" />
                </div>
                <div class="single-slider">
                  <img src="https://placehold.co/569x528" alt="#" />
                </div>
                <div class="single-slider">
                  <img src="https://placehold.co/569x528" alt="#" />
                </div>
              </div>
            </div>
            <!-- End Product slider -->
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="quickview-content">
              <h2>Flared Shift Dress</h2>
              <div class="quickview-ratting-review">
                <div class="quickview-ratting-wrap">
                  <div class="quickview-ratting">
                    <i class="yellow fa fa-star"></i>
                    <i class="yellow fa fa-star"></i>
                    <i class="yellow fa fa-star"></i>
                    <i class="yellow fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a href="#"> (1 customer review)</a>
                </div>
                <div class="quickview-stock">
                  <span><i class="fa fa-check-circle-o"></i> in stock</span>
                </div>
              </div>
              <h3>$29.00</h3>
              <div class="quickview-peragraph">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Mollitia iste laborum ad impedit pariatur esse optio
                  tempora sint ullam autem deleniti nam in quos qui nemo
                  ipsum numquam.
                </p>
              </div>
              <div class="size">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <h5 class="title">Size</h5>
                    <select>
                      <option selected="selected">s</option>
                      <option>m</option>
                      <option>l</option>
                      <option>xl</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <h5 class="title">Color</h5>
                    <select>
                      <option selected="selected">orange</option>
                      <option>purple</option>
                      <option>black</option>
                      <option>pink</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="quantity">
                <!-- Input Order -->
                <div class="input-group">
                  <div class="button minus">
                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus"
                      data-field="quant[1]">
                      <i class="ti-minus"></i>
                    </button>
                  </div>
                  <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1" />
                  <div class="button plus">
                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                      <i class="ti-plus"></i>
                    </button>
                  </div>
                </div>
                <!--/ End Input Order -->
              </div>
              <div class="add-to-cart">
                <a href="#" class="btn">In den Warenkorb</a>
                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
              </div>
              <div class="default-social">
                <h4 class="share-now">Share:</h4>
                <ul>
                  <li>
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a>
                  </li>
                  <li>
                    <a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->

@endsection