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
                <div class="col-md-6">
                    <div class="single-shop-carousel">
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/2.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/3.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/2.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-shop-carousel-nav">
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/2.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/3.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/2.jpg') }}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src=" {{ asset('img/frontend/shop/single/3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 shop-single-info">
                    <div class="shop-single-title">
                        <h3 class="text-left">Food Title</h3>
                    </div>
                    <div class="shop-single-price">
                        <div class="ssp pull-left">$100 <span>$150</span></div>
                        <div class="rc-ratings pull-right">
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <div class="quantity">
                        <input type="number" placeholder="1">
                        <a href="./shop_checkout.html" class="btn btn-success left-space-sm pull-right">Buy Now</a>
                        <a href="./shop_cart.html" class="btn btn-default pull-right">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="tab-style3">
                <!-- Nav Tabs -->
                <div class="align-center mb-40 mb-xs-30">
                    <ul class="nav nav-tabs tpl-minimal-tabs animate">
                        <li class="active">
                            <a aria-expanded="true" href="#mini-one" data-toggle="tab">Food Description</a>
                        </li>
                        <li class="">
                            <a aria-expanded="false" href="#mini-two" data-toggle="tab">Review (20)</a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Tabs -->

                <!-- Tab panes -->
                <div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
                    <div style="" class="tab-pane fade active in" id="mini-one">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                        <p class="list">
                            <span><i class="fa fa-angle-right"></i> Curabitur a dui ut sem pulvinar accumsan a nec quam.</span>
                            <span><i class="fa fa-angle-right"></i> Pellentesque euismod turpis eu ante euismod, nec molestie mi ullamcorper.</span>
                            <span><i class="fa fa-angle-right"></i> Mauris tristique ante a purus dignissim, eu efficitur libero congue.</span>
                        </p>
                    </div>
                    <div style="" class="tab-pane fade" id="mini-two">
                        <div class="col-md-12">
                            <h4 class="text-left">3 Reviews for Food</h4>
                            <br>
                            <ul class="comment-list">
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/1.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">John Doe</a>
                                        <span>
                                        <em>Feb 17, 2015, at 11:34</em>
                                        </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/2.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">Rebecca</a>
                                        <span>
                                        <em>March 08, 2015, at 03:34</em>
                                        </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/1.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">Antony Doe</a>
                                        <span>
                                        <em>June 11, 2015, at 07:34</em>
                                        </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                            </ul>
                            <br>
                            <h4 class="text-left">Add a review</h4>
                            <br>
                            <form id="form" class="review-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
                                    </div>
                                </div>
                                <span>Your Ratings</span>
                                <div class="clearfix"></div>
                                <div class="rating3">
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                                </div>
                                <div class="clearfix space20"></div>
                                <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
                                <br>
                                <button type="submit" class="btn btn-default">
                                    Submit Review
                                </button>
                            </form>
                        </div>
                        <div class="clearfix space30"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="shop-products">
                <h6>More Food Items</h6>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
                        <div class="product-info">
                            <div class="product-img">
                                <img src=" {{ asset('img/shop/4.png') }}" alt="" />
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
        </div>
    </section>

    @endsection