@extends('layouts.app')

@section('js')
    @parent
    {{ Html::style('css/new-plugins.css') }}
    {{ Html::style('css/new-themes.css') }}
    {{ Html::style('css/new-main.css') }}


@endsection

@section('css')
    @parent

@endsection

@section('content')
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="index.html" class="site-logo">
                        <i class="gi gi-flash"></i> <strong>Pro</strong>UI
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Home</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Full Width</a>
                                    </li>
                                    <li>
                                        <a href="index_alt.html">Full Width (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_parallax.html">Full Width Parallax</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_alt.html">Boxed (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_parallax.html">Boxed Parallax</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Pages</a>
                                <ul>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog_post.html">Blog Post</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_4.html">Portfolio 4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_3.html">Portfolio 3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_2.html">Portfolio 2 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_single.html">Portfolio Single</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="helpdesk.html">Helpdesk</a>
                                    </li>
                                    <li>
                                        <a href="jobs.html">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="how_it_works.html">How it works</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>eCommerce</a>
                                <ul>
                                    <li>
                                        <a href="ecom_home.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="ecom_search_results.html" class="active">Search Results</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product_list.html">Product List</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product.html">Product</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product_comparison.html">Product Comparison</a>
                                    </li>
                                    <li>
                                        <a href="ecom_shopping_cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="ecom_checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="features.html">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container text-center">
                    <h1 class="animation-slideDown"><strong>Search Results</strong></h1>
                    <h2 class="h3 animation-slideUp"><strong>24</strong> products found!</h2>
                </div>
            </section>
            <!-- END Intro -->
            <!-- Search Results -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-md-4 col-lg-3">
                            <aside class="sidebar site-block">
                                <!-- Refine Search -->
                                <div class="sidebar-block">
                                    <form action="ecom_search_results.html" method="post" class="form-horizontal">
                                        <div class="form-group push-bit">
                                            <div class="col-xs-12">
                                                <div class="input-group">
                                                    <input type="text" id="ecom-search" name="ecom-search" class="form-control" placeholder="Search Store.." value="Gift">
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4><strong>Price Range</strong></h4>
                                        <div class="form-group push-bit">
                                            <div class="col-xs-12">
                                                <label class="radio-inline" for="example-inline-radio1">
                                                    <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> $0 - $99
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio2">
                                                    <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> $100 - $299
                                                </label>
                                                <label class="radio-inline" for="example-inline-radio3">
                                                    <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> > $300
                                                </label>
                                            </div>
                                        </div>
                                        <h4><strong>Filters</strong></h4>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-condition" name="ecom-filter-condition" class="form-control" size="1">
                                                    <option value="0" disabled selected>Condition</option>
                                                    <option value="new">New</option>
                                                    <option value="used">Used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-rating" name="ecom-filter-rating" class="form-control" size="1">
                                                    <option value="0" disabled selected>Rating</option>
                                                    <option value="5">5 Stars</option>
                                                    <option value="4">4 Stars</option>
                                                    <option value="3">3 Stars</option>
                                                    <option value="2">2 Stars</option>
                                                    <option value="1">1 Stars</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group push-bit">
                                            <div class="col-sm-8">
                                                <select id="ecom-filter-color" name="ecom-filter-color" class="form-control" size="1">
                                                    <option value="0" disabled selected>Color</option>
                                                    <option value="1">Red (15)</option>
                                                    <option value="2">Blue (15)</option>
                                                    <option value="3">Yellow (23)</option>
                                                    <option value="4">Black (95)</option>
                                                    <option value="5">Grey (52)</option>
                                                    <option value="5">Not Specified (690)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h4 class="-header"><strong>Categories</strong></h4>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category1">
                                                    <input type="checkbox" id="ecom-filter-category1" name="ecom-filter-category1" value="1" checked> <strong>Clothes</strong> (1521)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category2">
                                                    <input type="checkbox" id="ecom-filter-category2" name="ecom-filter-category2" value="2" checked> <strong>Electronics</strong> (1223)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category3">
                                                    <input type="checkbox" id="ecom-filter-category3" name="ecom-filter-category3" value="3" checked> <strong>Games</strong> (564)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category4">
                                                    <input type="checkbox" id="ecom-filter-category4" name="ecom-filter-category4" value="4" checked> <strong>Sports</strong> (754)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category5">
                                                    <input type="checkbox" id="ecom-filter-category5" name="ecom-filter-category5" value="5" checked> <strong>Kids</strong> (1514)
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="checkbox-inline" for="ecom-filter-category6">
                                                    <input type="checkbox" id="ecom-filter-category6" name="ecom-filter-category6" value="6" checked> <strong>Home</strong> (369)
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Refine Search -->

                                <!-- Shopping Cart -->
                                <div class="sidebar-block">
                                    <div class="row">
                                        <div class="col-xs-6 push-bit">
                                            <span class="h3">$ 750<br><small><em>3 Items</em></small></span>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="ecom_shopping_cart.html" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                                            <a href="ecom_checkout.html" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Shopping Cart -->
                            </aside>
                        </div>
                        <!-- END Sidebar -->

                        <!-- Products -->
                        <div class="col-md-8 col-lg-9">
                            <div class="form-inline push-bit clearfix">
                                <select id="results-show" name="results-show" class="form-control pull-right" size="1">
                                    <option value="0" disabled selected>SHOW</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                                <select id="results-sort" name="results-sort" class="form-control" size="1">
                                    <option value="0" disabled selected>SORT BY</option>
                                    <option value="1">Popularity</option>
                                    <option value="2">Name (A to Z)</option>
                                    <option value="3">Name (Z to A)</option>
                                    <option value="4">Price (Lowest to Highest)</option>
                                    <option value="5">Price (Highest to Lowest)</option>
                                    <option value="6">Sales (Lowest to Highest)</option>
                                    <option value="7">Sales (Highest to Lowest)</option>
                                </select>
                            </div>
                            <div class="row store-items">
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 149</span>
                                            <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                                            <a href="ecom_product.html"><strong>Sport Shoes</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 299</span>
                                            <a href="ecom_product.html"><strong>Watch</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 109</span>
                                            <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                                            <a href="ecom_product.html"><strong>Headset</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                                    <div class="store-item">
                                        <div class="store-item-rating text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="store-item-image">
                                            <a href="ecom_product.html">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="store-item-info clearfix">
                                            <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
                                            <a href="ecom_product.html"><strong>Laptop</strong></a><br>
                                            <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a href="javascript:void(0)">4</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END Products -->
                    </div>
                </div>
            </section>
            <!-- END Search Results -->

            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="about.html">Company</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Legal</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="javascript:void(0)">Licensing</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Follow Us</h4>
                            <ul class="footer-nav footer-nav-social list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading"><span id="year-copy">2014</span> &copy; <a href="http://goo.gl/TDOSuC">ProUI Frontend</a></h4>
                            <ul class="footer-nav list-inline">
                                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>
    </div>
@stop
