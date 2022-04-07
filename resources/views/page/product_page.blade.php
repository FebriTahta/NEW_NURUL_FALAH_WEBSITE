@extends('layouts.master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('asset2/assets/css/style.css')}}">
@endsection

@section('content')
<section class="listing_one_wrap two">
    <div class="container-full-width clearfix">
        <div class="listing_one_content_right col-xl-7">
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter">
                        <div class="filter_inner_content">
                            <div class="left">
                                <div class="left_icon">
                                    <a class="list-icon active icon-grid"></a>
                                </div>
                                <div class="left_text">
                                    <h4>Over 6 Product</h4>
                                </div>
                            </div>
                            <div class="right">
                                <div class="shorting">
                                    {{-- search --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('tilawati.png')}}" alt="">
                                        <a title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700">Tilawati</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a  title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('waqaf.png')}}" alt="">
                                        <a  title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700">Waqof & Ibtida'</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a  title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('terjemah.png')}}" style="min-height: 215px; min-width: 200px;" alt="">
                                        <a href="#" title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700">Terjemah Lafdziah</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a href="#" title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('mq.png')}}" style="min-height: 215px; min-width: 200px;" alt="">
                                        <a href="#" title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700" style="font-si">Munaqosyah</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a href="#" title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('29.png')}}" style="min-height: 215px; min-width: 200px;" alt="">
                                        <a href="#" title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700">Tahfidz 29</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a href="#" title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="shop-col" >
                                <div class="catalog-head" >
                                    <div class="shop-thumbnail" style="padding-top: 25px">
                                        <img src="{{asset('30.png')}}" style="min-height: 215px; min-width: 200px;" alt="">
                                        <a href="#" title="" class="add-cart"><i class="la la-heart"></i></a>
                                    </div>
                                    <div class="shop-hd">
                                        <div class="shop-hd-info">
                                            <p style="font-weight: 700">Tahfidz 30</p>
                                            {{-- <span class="price-mt">$249</span> --}}
                                            <a href="#" title="" class="add-to-cart"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--shop-col end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listing_one_content_right col-xl-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter">
                        <div class="filter_inner_content">
                            <div class="left">
                                <div class="left_icon">
                                    <a class="list-icon active icon-list"></a>
                                </div>
                                <div class="left_text">
                                    <h4>Total 6 Cabang Ditemukan</h4>
                                </div>
                            </div>
                            <div class="right">
                                <i class="fa fa-search"></i><input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listings_two_page_content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="listings_two_page_content_inner">
                            <!--Listings Two Page Content Single-->
                            <div class="listings_two_page_content_single">
                                <div class="listings_two_page_main_img" style="height: 250px">
                                    <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                        <div class="listings_one_page_img">
                                            <div class="listings_two_page_content_img_box">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.366918887994!2d112.72820171513091!3d-7.312613194722392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb12ae9aeeb3%3A0xf64b5d223ef0d319!2sPesantren%20Al-Qur&#39;an%20Nurul%20Falah!5e0!3m2!1sid!2sid!4v1649141510159!5m2!1sid!2sid"  height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                            <div class="listings_two_page_content_icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="listingstwo_page_content_btn">

                                                <a href="#" class="sale_btn">Lihat Map</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listings_two_page_bottom_content" style="height: 250px">
                                    <div class="listings_two_page_bottom_content_top">
                                        <h4><a href="listing-details.html">Tilawati Bojonegoro</a></h4>
                                        <p>Jaksa Agung Suprapto Gg Astro Rw 1 RT 2 No 15 Bojonegoro</p>
                                        <h5>082111336039</h5>
                                    </div>
                                    <div class="listings_two_page_bottom_item">
                                       <button class="btn btn-sm btn-info"> <i class="fa fa-phone"></i> Contact</button>
                                    </div>
                                </div>
                            </div>
                            <!--Listings Two Page Content Single-->
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-xl-12">
                        <div class="listings_page_content_load_more_btn">
                            <a href="#" class="thm-btn">Load More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!--Listing One End-->
@endsection

@section('script')
    
@endsection