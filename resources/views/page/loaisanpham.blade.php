@extends('layouts.layout.index')
@section('content')
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">{{$loaisanpham ->Ten}}</h2>
        </div>
    </div>

    <!-- Shop -->
    <div class="blog">
    <div class="container">
        <div class="col-md-3">
            <p>Categories</p>
        </div>
        <div class="col-md-9">
            <div class="d-flex">
                <p><b>{{count($sanpham)}}</b> product</p>
                <p class="ml-auto">Sắp xếp theo:<select>
                        <option>Giá từ thấp -> cao</option>
                        <option>Giá từ cao -> thấp</option>
                    </select></p>
            </div>

            <hr>
            <div class="row">
                <!-- product -->
                @foreach($sanpham as $sp)
                    <div class="col-md-3 col-xs-6 pb-5">
                        <div class="product">
                            <div class="product-img">
                                <a href="chitietsanpham/{{$sp -> id}}">
                                    <img src="upload/sanpham/{{$sp -> hinh}}" width="210px" height="250px" alt="">
                                </a>
                                <div class="product-label">
                                    <span class="new">Hot</span>
                                </div>
                            </div>
                            <div class="product-body">

                                <p class="product-category">{{$sp -> idLoaiTin}}</p>

                                <h3 class="product-name"><a href="chitietsanpham/{{$sp -> id}}">{{$sp -> tieude}}</a></h3>
                                <h4 class="product-price">${{$sp -> giadexuat}} <del class="product-old-price">$990.00</del></h4>


                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- /product -->
                <div class="clearfix visible-sm visible-xs"></div>


            </div>
        </div>
    </div>
    </div>

@endsection
