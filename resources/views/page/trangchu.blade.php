@extends('layouts.layout.index')
@section('content')
    @include('layouts.layout.banner2')
    <!-- Deals of the week -->

    @include('layouts.layout.option')

    <!-- Popular Categories -->


    <div class="best_sellers mt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Sản phẩm thịnh hành</div>
                            <ul class="clearfix">
                                <li class=""></li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                @foreach($tintuc as $sp)
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="upload/sanpham/{{$sp ->hinh}}" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                                <div class="bestsellers_name"><a href="product.html">{{$sp -> tieude}}</a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>

                                    </div>
                            @endforeach
                            <!-- Best Sellers Item -->

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->



    <!-- Hot New Arrivals -->
    <div class="new_arrivals">

            <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Sản phẩm nổi bật</h3>
                    </div>
                </div>

                <!-- product -->
                @foreach($sanphamnoibat as $nb)
                <div class="col-md-3 col-xs-6 pb-5">
                    <div class="product">
                        <div class="product-img">
                            <a href="chitietsanpham/{{$nb -> id}}">
                            <img src="upload/sanpham/{{$nb -> hinh}}" width="210px" height="250px" alt="">
                            </a>
                            <div class="product-label">
                                <span class="new">Hot</span>
                            </div>
                        </div>
                        <div class="product-body">

                            <p class="product-category">{{$nb -> idLoaiTin}}</p>

                            <h3 class="product-name"><a href="chitietsanpham/{{$nb -> id}}">{{$nb -> tieude}}</a></h3>
                            <h4 class="product-price">${{$nb -> giadexuat}} <del class="product-old-price">$990.00</del></h4>


                        </div>
                        <div class="add-to-cart">
                            <a href="giohang/{{$nb -> id}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /product -->
                <div class="clearfix visible-sm visible-xs"></div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
        </div>


    <!-- Best Sellers -->



    <!-- Adverts -->

    <div class="new_arrivals">
        <section>
            <div class="bg1">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 pt-5">
                    <span class="pt-5 pb-5">Best Price For You</span>
                    <h2 class="pt-5 pb-5">Deal of the day</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <h3><a href="#">Spinach</a></h3>
                    <span class="price">$10 <a href="#">now $5 only</a></span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </div>
    <!-- Trends -->

    <div class="best_sellers mt-4">
        <section>
            <div class="container">
                <h3>phu kien</h3>
                <div class="bestsellers_panel panel active">
                <div class="row">
                    <div class="col-md-4">
                        <img src="upload/sanpham/ruu_phap_02_57.jpg" width="100%" height="160px">
                    </div>
                    <div class="col-md-6">
                        <p>huong dan su dung</p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores deleniti dignissimos inventore minus odit perferendis praesentium quam quo reprehenderit. Architecto assumenda commodi consequatur culpa, dolore, id itaque modi, nam nulla optio porro quas quis reiciendis sequi tempore tenetur voluptatibus?
                    </div>
                    <div class="col-md-2">
                        $45
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="upload/sanpham/ruu_phap_02_57.jpg" width="100%" height="160px">
                        </div>
                        <div class="col-md-6">
                            <p>huong dan su dung</p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores deleniti dignissimos inventore minus odit perferendis praesentium quam quo reprehenderit. Architecto assumenda commodi consequatur culpa, dolore, id itaque modi, nam nulla optio porro quas quis reiciendis sequi tempore tenetur voluptatibus?
                        </div>
                        <div class="col-md-2">
                            $45
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="upload/sanpham/ruu_phap_02_57.jpg" width="100%" height="160px">
                        </div>
                        <div class="col-md-6">
                            <p>huong dan su dung</p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores deleniti dignissimos inventore minus odit perferendis praesentium quam quo reprehenderit. Architecto assumenda commodi consequatur culpa, dolore, id itaque modi, nam nulla optio porro quas quis reiciendis sequi tempore tenetur voluptatibus?
                        </div>
                        <div class="col-md-2">
                            $45
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </div>

    <!-- Reviews -->



    <!-- Recently Viewed -->



    <!-- Brands -->


    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                <button class="newsletter_button">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
