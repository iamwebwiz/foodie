@extends('layouts.frontend')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Shop Listing</h2>
                    <p>Tomato is a delicious restaurant website template</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="shop-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="shop-grid">
                        <select>
                            <option>Default Sorting</option>
                            <option>Cakes</option>
                            <option>Breads</option>
                            <option>Fries</option>
                            <option>Pizza</option>
                        </select>
                        <div class="sg-list">
                            <a href="./shop_left_sidebar.html"><i class="fa fa-th-large"></i></a>
                            <a href="./shop_right_sidebar.html"><i class="fa fa-reorder"></i></a>
                        </div>
                        <span>Showing 1-9 of 80 Results</span>
                    </div>
                    <div class="shop-products">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/1.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/2.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/3.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/4.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/5.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/6.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/7.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/8.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-info">
                                    <div class="product-img">
                                        <img src=" {{ asset('img/frontend/shop/9.png') }}" alt="" />
                                    </div>
                                    <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                                    <div class="rc-ratings">
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star active"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="product-price">$100</div>
                                    <div class="shop-meta">
                                        <a href="./shop_single_left.html" class="pull-left"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="./shop_right_sidebar.html" class="pull-right"><i class="fa fa-heart-o"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./index.html" class="btn btn-default load-more">Load more</a>
                </div>
            </div>
        </div>
    </section>

    @endsection