@extends('layouts.frontend')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Menu</h2>
                    <p>Tomato is a delicious restaurant website template</p>
                </div>
            </div>
        </div>
    </section>

    <!-- menu-->
    <section class="menu menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Grid View<small>These fine folks trusted the award winning restaurant.</small></h1>
                    </div>
                </div>
            </div>
            <div class="food-menu wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-tags4">
                            <span data-filter="*" class="tagsort4-active">All</span>
                            <span data-filter=".starter">starters</span>
                            <span data-filter=".breakfast">breakfast</span>
                            <span data-filter=".lunch">lunch</span>
                            <span data-filter=".dinner">dinner</span>
                            <span data-filter=".desserts">desserts</span>
                        </div>
                    </div>
                </div>
                <div class="row menu-items4">
                    <div class="menu-item4 col-sm-4 col-xs-12 starter dinner desserts">
                        <div class="menu-info">
                            <img src=" {{ asset('img/frontend/menu/1/1.jpg') }}" class="img-responsive" alt="" />
                            <a href="./menu_all.html">
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="menu-item4 col-sm-4 col-xs-12 starter">
                        <div class="menu-info">
                            <a href="./menu_all.html">
                                <img src=" {{ asset('img/frontend/menu/1/2.jpg') }}" class="img-responsive" alt="" />
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="menu-item4 col-sm-4 col-xs-12 breakfast desserts starter">
                        <div class="menu-info">
                            <a href="./menu_all.html">
                                <img src=" {{ asset('img/frontend/menu/1/3.jpg') }}" class="img-responsive" alt="" />
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="menu-item4 col-sm-4 col-xs-12 breakfast">
                        <div class="menu-info">
                            <a href="./menu_all.html">
                                <img src=" {{ asset('img/frontend/menu/1/4.jpg') }}" class="img-responsive" alt="" />
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="menu-item4 col-sm-4 col-xs-12 lunch starter breakfast">
                        <div class="menu-info">
                            <a href="./menu_all.html">
                                <img src=" {{ asset('img/frontend/menu/1/5.jpg') }}" class="img-responsive" alt="" />
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="menu-item4 col-sm-4 col-xs-12 lunch">
                        <div class="menu-info">
                            <a href="./menu_all.html">
                                <img src=" {{ asset('img/frontend/menu/1/6.jpg') }}" class="img-responsive" alt="" />
                                <div class="menu4-overlay">
                                    <h4>English-Asparagus</h4>
                                    <p>Asparagus, hens egg, toasted
                                        <br>sunflower seeds, Spenwood cheese</p>
                                    <span class="price">$ 14.95</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection