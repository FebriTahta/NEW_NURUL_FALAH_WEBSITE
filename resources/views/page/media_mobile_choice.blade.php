@extends('layouts.master')

@section('content')
   
<section class="listing_details_bottom" style="background-color: rgb(32, 175, 175);" >
    <div class="container">
        <div class="row">
            <div class="col-xl-12" >
                <div class="listing_details_bottom_left">
                    <div class="listing_details_bottom_left_content" >
                        <ul class="post_rating_and_view_list list-unstyled" >
                            <li style="color: white; text-transform: uppercase"><i class="fas fa-video-camera" style="color: white"></i> Daftar Media Nurul Falah Surabaya</li>
                        </ul>
                    </div>
                </div>
                <div class="listing_details_bottom_right">
                    <div class="listing_details_bottom_right_btn">
                        <a href="https://tabungamal.id" target="_blank" aria-disabled="true"><i class="fa fa-arrow-right"></i> Lazis Nurul Falah</a>
                        <a href="/contact"><i class="fa fa-envelope"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cities_one">
    <div class="container">
        <div class="row">
            @foreach ($post as $item)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <!--Cities One Single-->
                <div class="cities_one_single">
                    <div class="cities_one_properties">
                        <div class="row">
                            <div class="col-sm-8 col-7" style="padding-right: 0; ">
                                <div class="cities_one_properties_content" style="border: none; background-color: rgb(27, 187, 187)">
                                    <h4><a href="/media/{{$item->slug}}" style="color: white"><i class="fa fa-arrow-right"> </i> BERITA</a></h4>
                                    <p style="text-transform: uppercase; font-size: 14px; color: white">TOTAL 16 BERITA</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4" style="padding-left: 0;">
                                <div class="" style="background: transparent">
                                    <img src="{{asset('artik.jpg')}}" style="max-width: 150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection